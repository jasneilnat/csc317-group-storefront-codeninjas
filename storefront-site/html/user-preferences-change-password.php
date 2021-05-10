<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/google-material-icons.css">
    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="../styles/user-preferences-change.css">
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
                <b>Change Password</b>
            </nav>
            <h1>Change Password</h1>
            <form id="user-password-form" class="preferences-form" action="./user-preferences.php">
                <div class="preferences-form-section">
                    Use the form below to change the password for your account.
                    <br>
                    <br>
                    <label for="current-password"><b>Current Password</b></label>
                    <input id="current-password" type="password" name="current-password" autofocus spellcheck="false" autocomplete="off" autocorrect="off" autocapitalize="off">
                    <div id="error-message-container-password" style="display: none; color: #c41829;">
                        <span class="material-icons" style="font-size: 16px;">error</span>
                        <span id="error-message-password"></span>
                    </div>
                    <label for="new-password"><b>New Password</b></label>
                    <input id="new-password" type="password" name="new-password" spellcheck="false" autocomplete="off" autocorrect="off" autocapitalize="off">
                    <div id="error-message-container-new" style="display: none; color: #c41829;">
                        <span class="material-icons" style="font-size: 16px;">error</span>
                        <span id="error-message-new"></span>
                    </div>
                    <label for="repeat-password"><b>Repeat New Password</b></label>
                    <input id="repeat-password" type="password" name="repeat-password" spellcheck="false" autocomplete="off" autocorrect="off" autocapitalize="off">
                    <div id="error-message-container-repeat" style="display: none; color: #c41829;">
                        <span class="material-icons" style="font-size: 16px;">error</span>
                        <span id="error-message-repeat"></span>
                    </div>
                    <a href="../index.php">
                        <button type="submit" class="submit-button">Save Changes</button>
                    </a>
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
    <script src="../scripts/handle-user-preferences.js" type="module"></script>
    <script src="../scripts/render-cart-quantity.js" type="module"></script>
</body>

</html>