import {
    getProducts,
} from "./util-products.js";

function getCart() {
    return JSON.parse(sessionStorage.getItem("cart") || "[]");
};

function setCart(cart) {
    sessionStorage.setItem("cart", JSON.stringify(cart));
};

function getCartItemById(id) {
    const cart = getCart();
    return cart.find(cartItem => {
        return cartItem.id === id;
    });
};

async function calculateCartValues() {
    const cart = getCart();
    const products = await getProducts();

    let cartSubtotal = 0;
    let cartItemQuantity = 0;
    for (const cartItem of cart) {
        if (cartItem.selected) {
            const product = products.find(product => {
                return product.id === cartItem.id;
            });
            const productPrice = product.discount_price.usd || product.price.usd;
            const productQuantity = cartItem.quantity;
            cartSubtotal += productPrice * productQuantity;
            cartItemQuantity += productQuantity;
            if(cartItemQuantity == 0){
                const button = cart.getElementById('submit')
                button.disabled = true 
            }
        };
    };
    const SALES_TAX_RATE = 0.0725;
    const cartTax = cartSubtotal * SALES_TAX_RATE;
    const cartTotal = cartSubtotal + cartTax;

    return {
        cartSubtotal,
        cartItemQuantity,
        cartTax,
        cartTotal,
    };
};

export {
    getCart,
    setCart,
    getCartItemById,
    calculateCartValues,
};