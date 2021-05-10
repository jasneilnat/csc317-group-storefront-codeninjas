<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Listing</title>
    <link rel="stylesheet" href="../../styles/global.css">
    <link rel="stylesheet" href="../../styles/google-material-icons.css">
    <link rel="stylesheet" href="../../styles/header.css">
    <link rel="stylesheet" href="../../styles/product.css">
    <link rel="stylesheet" href="../../styles/footer.css">
</head>

<body>
    <!-- BEGIN HEADER -->
    <header>
        <div class="logo-container">
            <a href="../../index.php">
                <img src="../../images/logo-transparent.png" class="logo" alt="Pandemic Essentials Logo">
            </a>
        </div>
        <form class="search-form">
            <input type="search" class="search-field" autocomplete="off" placeholder="Search...">
        </form>
        <nav class="header-nav">
            <a href="../cart.php" class="header-nav-link"><span class="material-icons">shopping_cart</span> Cart (<span class="cart-total"></span>)</a>
            <a href="../user-preferences.php" class="header-nav-link"><span class="material-icons">settings</span>
                Preferences</a>
            <div class="header-login-dropdown">
                <a href="../login.php" class="header-nav-link">Sign In ▼</a>
                <nav class="header-login-dropdown-content">
                    <div>
                        <div class="header-login-dropdown-flex">
                            <a href="../login.php">Sign In <span class="material-icons"
                                    style="font-size: 16px;">login</span></a>
                            <a href="../register.php">Register <span class="material-icons"
                                    style="font-size: 16px;">person_add</span></a>
                            <a href="../../index.php">Log Out <span class="material-icons"
                                    style="font-size: 16px;">logout</span></a>
                        </div>
                    </div>
                </nav>
            </div>
        </nav>
    </header>
    <hr style="margin: 0; padding: 0; border: 0; height: 24px; box-shadow: inset 0 24px 24px -24px rgba(0, 0, 0, 0.5);">
    <!-- END HEADER -->
    <main>
        <div class="product">
            <div class="grid-container">
                <div class="grid-item" style="width: 256px; height: 256px; align-self: start;">
                    <img style="max-width: 256px; max-height: 256px;" id="product-listing-image">
                </div>
                <div class="grid-item">
                    <h3>
                        <span style="font-size: 1.2em;" id="product-listing-name">&ZeroWidthSpace;</span>
                        <br>
                        <br>
                        <p class="stars" id="product-listing-rating">Rating:</p>
                        <p class="stock" id="product-listing-stock">&ZeroWidthSpace;</p>
                        <label for="product-quantity">Qty: </label>
                        <select id="product-quantity" class="quantity" id="product-quantity" name="product-quantity">
                            <option value="1" selected>1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <p class="price">Price: <span style="color: #b12704;" id="product-listing-price"></span></p>
                        About this item:
                    </h3>
                    <p class="description">
                        <div>
                            <ul id="product-listing-description"></ul>
                        </div>
                    </p>
                </div>
                <div class="grid-item">
                    <button id="add-to-cart-button" type="button" class="add-to-cart-button"><span class="material-icons">shopping_cart</span> Add to Cart</button>
                    <a href="../confirmation.php"><button type="button" class="buy-now-button">Buy Now</button></a>
                </div>
            </div>
            <br>
            <br>
            <h2>Other Products:</h2>
            <div class="other-products" id="other-products"></div>
        </div>
    </main>
    <!-- BEGIN FOOTER -->
    <footer>
        <div class="footer-nav-container">
            <nav class="footer-nav">
                <b class="footer-nav-header">Information</b>
                <a class="footer-nav-content" href="../aboutus.php">About Us</a>
                <a class="footer-nav-content" href="../locations.php">Locations & Hours</a>
                <a class="footer-nav-content" href="../tos.php">Terms of Service</a>
                <a class="footer-nav-content" href="../privacy-policy.php">Privacy Policy</a>
            </nav>
            <nav class="footer-nav">
                <b class="footer-nav-header">Services</b>
                <a class="footer-nav-content" href="../faq.php">FAQ</a>
                <a class="footer-nav-content" href="../returns.php">Returns</a>
                <a class="footer-nav-content" href="../shipping.php">Shipping</a>
            </nav>
            <nav class="footer-nav">
                <b class="footer-nav-header">Contact Us</b>
                <span class="footer-nav-content">By Phone (Mon-Fri 9am-5pm):</span>
                <span class="footer-nav-content"><a href="tel:+1555-123-4567">+1 (555) 123-4567</a></span>
                <span class="footer-nav-content">By Email:</span>
                <span class="footer-nav-content"><a
                        href="mailto:pandemic-essentials@example.com">pandemic-essentials@example.com</a></span>
            </nav>
            <nav class="footer-nav">
                <b class="footer-nav-header">Newsletter</b>
                <a class="footer-nav-content" href="../user-preferences-change-email-subscription.php">Subscribe</a>
                <a class="footer-nav-content" href="../user-preferences-change-email-subscription.php">Unsubscribe</a>
            </nav>
        </div>
        <hr>
        <nav class="footer-logo-container">
            <a href="../../index.php">
                <img src="../../images/logo-transparent.png" class="logo">
            </a>
        </nav>
    </footer>
    <!-- END FOOTER -->
    <template id="other-product-template">
        <div id="other-product-2"><a><img style="max-width: 128px; max-height: 128px;"></a></div>
    </template>
    <script src="../../scripts/render-product-listing.js"></script>
    <script src="../../scripts/render-cart-quantity.js" type="module"></script>
    <script src="../../scripts/handle-add-to-cart.js" type="module"></script>
</body>

</html>