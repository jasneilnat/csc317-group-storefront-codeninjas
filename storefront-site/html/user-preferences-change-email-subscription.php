<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Email Subscriptions</title>
    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/google-material-icons.css">
    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="../styles/user-preferences-change-subscription.css">
    <link rel="stylesheet" href="../styles/footer.css">
</head>

<body>
    <!-- BEGIN HEADER -->
    <header>
        <div class="logo-container">
            <a href="../index.php">
                <img src="../images/logo-transparent.png" class="logo" alt="Pandemic Essentials Logo">
            </a>
        </div>
        <form class="search-form">
            <input type="search" class="search-field" autocomplete="off" placeholder="Search...">
        </form>
        <nav class="header-nav">
            <a href="./cart.php" class="header-nav-link"><span class="material-icons">shopping_cart</span> Cart (<span class="cart-total"></span>)</a>
            <a href="./user-preferences.php" class="header-nav-link"><span class="material-icons">settings</span>
                Preferences</a>
            <div class="header-login-dropdown">
                <a href="./login.php" class="header-nav-link">Sign In ▼</a>
                <nav class="header-login-dropdown-content">
                    <div>
                        <div class="header-login-dropdown-flex">
                            <a href="./login.php">Sign In <span class="material-icons"
                                    style="font-size: 16px;">login</span></a>
                            <a href="./register.php">Register <span class="material-icons"
                                    style="font-size: 16px;">person_add</span></a>
                            <a href="../index.php">Log Out <span class="material-icons"
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
        <div class="preferences-outer-container">
            <nav class="hierarchical-nav">
                <a href="./user-preferences.php">Your Account</a>
                &nbsp;>&nbsp;
                <a href="./user-preferences.php">Preferences</a>
                &nbsp;>&nbsp;
                <b>Change Email Subscriptions</b>
            </nav>
            <h1>Change Email Subscriptions</h1>
            <form id="user-subscriptions-form" class="preferences-form" action="./user-preferences.php">
                <div class="preferences-form-section">
                    Use the form below to change the email subscriptions for your account.
                    <br>
                    <br>
                    <label for="newsletter"><b>Subscribe to Newsletter</b></label>
                    <br>
                    <input class="user-email-newsletter-checkbox" type="checkbox" name="newsletter">Newsletter
                    <br>
                    <label for="promotions"><b>Subscribe to Promotions</b></label>
                    <br>
                    <input class="user-email-promotions-checkbox" type="checkbox" name="promotions">Promotions
                    <br>
                    <label for="reminders"><b>Subscribe to Reminders</b></label>
                    <br>
                    <input class="user-email-reminders-checkbox" type="checkbox" name="reminders">Reminders
                    <br>
                    <a href="../index.php">
                        <button type="submit" class="submit-button">Save Changes</button>
                    </a>
                    <br>
                    <br>
                    <span id="user-unsubscribe-all-button" class="clickable-text" href="./user-preferences-change-email-subscription.php">Unsubscribe from all</span>
                </div>
            </form>
        </div>
    </main>
    <!-- BEGIN FOOTER -->
    <footer>
        <div class="footer-nav-container">
            <nav class="footer-nav">
                <b class="footer-nav-header">Information</b>
                <a class="footer-nav-content" href="./aboutus.php">About Us</a>
                <a class="footer-nav-content" href="./locations.php">Locations & Hours</a>
                <a class="footer-nav-content" href="./tos.php">Terms of Service</a>
                <a class="footer-nav-content" href="./privacy-policy.php">Privacy Policy</a>
            </nav>
            <nav class="footer-nav">
                <b class="footer-nav-header">Services</b>
                <a class="footer-nav-content" href="./faq.php">FAQ</a>
                <a class="footer-nav-content" href="./returns.php">Returns</a>
                <a class="footer-nav-content" href="./shipping.php">Shipping</a>
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
                <a class="footer-nav-content" href="./user-preferences-change-email-subscription.php">Subscribe</a>
                <a class="footer-nav-content" href="./user-preferences-change-email-subscription.php">Unsubscribe</a>
            </nav>
        </div>
        <hr>
        <nav class="footer-logo-container">
            <a href="../index.php">
                <img src="../images/logo-transparent.png" class="logo">
            </a>
        </nav>
    </footer>
    <!-- END FOOTER -->
    <script src="../scripts/render-user-details.js" type="module"></script>
    <script src="../scripts/handle-user-preferences.js" type="module"></script>
    <script src="../scripts/render-cart-quantity.js" type="module"></script>
</body>

</html>