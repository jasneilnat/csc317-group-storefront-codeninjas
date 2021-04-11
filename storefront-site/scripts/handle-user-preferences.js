import {
    getUser,
    setUser,
} from "./util-user.js";

(async () => {
    try {
        addUserPreferencesHandlers();
    } catch(e) {
        console.error(e);
    };
})();

function addUserPreferencesHandlers() {
    const userNameFormElement = document.getElementById("user-name-form");
    if (userNameFormElement) {
        userNameFormElement.addEventListener("submit", handleUserNameSubmit, false);
    };
    
    const userEmailFormElement = document.getElementById("user-email-form");
    if (userEmailFormElement) {
        userEmailFormElement.addEventListener("submit", handleUserEmailSubmit, false);
    };

    const userSubscriptionsFormElement = document.getElementById("user-subscriptions-form");
    if (userSubscriptionsFormElement) {
        userSubscriptionsFormElement.addEventListener("submit", handleUserSubscriptionsSubmit, false);
    };

    const userUnsubscribeFromAllElement = document.getElementById("user-unsubscribe-all-button");
    if (userUnsubscribeFromAllElement) {
        userUnsubscribeFromAllElement.addEventListener("click", handleUnsubscribeFromAll, false);
    };

    const userPasswordFormElement = document.getElementById("user-password-form");
    if (userPasswordFormElement) {
        userPasswordFormElement.addEventListener("submit", handleUserPasswordSubmit, false);
    };
};

function handleUserNameSubmit(event) {
    const user = getUser();
    user.full_name = new FormData(event.target).get("name");
    setUser(user);
};

function handleUserEmailSubmit(event) {
    const user = getUser();
    user.email = new FormData(event.target).get("email");
    setUser(user);
};

function handleUserSubscriptionsSubmit(event) {
    const user = getUser();
    user.email_subscriptions.newsletter = new FormData(event.target).get("newsletter") ? true : false;
    user.email_subscriptions.promotions = new FormData(event.target).get("promotions") ? true : false;
    user.email_subscriptions.reminders = new FormData(event.target).get("reminders") ? true : false;
    setUser(user);
};

function handleUnsubscribeFromAll(event) {
    const user = getUser();
    user.email_subscriptions.newsletter = false;
    user.email_subscriptions.promotions = false;
    user.email_subscriptions.reminders = false;
    setUser(user);
    window.location.href = "./user-preferences.html";
};

function handleUserPasswordSubmit(event) {
    const formData = new FormData(event.target);
    if (formData.get("new-password") !== formData.get("repeat-password")) {
        event.preventDefault();
        window.alert("Passwords do not match.");
    };
};