<?php

session_start();
include('dbconnect.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>smc - Get Protected</title>

    <!-- 
    - favicon
  -->
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml" />

    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet" />

    <!-- 
    - custom css link
  -->
    <link rel="stylesheet"
        href="UIStyle.css?<?php echo time(); ?>" />

    <!-- 
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Source+Sans+Pro:wght@600;700&display=swap"
        rel="stylesheet" />
</head>

<body id="top">
    <!-- 
    - #HEADER
  -->

    <header class="header" data-header>
        <div class="container">
            <div class="overlay" data-overlay></div>

            <nav class="navbar" data-navbar>
                <div class="navbar-top">
                    <a href="Home.html" class="logo">smc</a>

                    <button class="nav-close-btn" aria-label="Close Menu" data-nav-close-btn>
                        <ion-icon name="close-outline"></ion-icon>
                    </button>
                </div>

                <div class="nav__menu" id="nav-menu">
                    <ul class="navbar-list">
                        <li class="navbar-link">
                            <a href="Home.php">
                                <h1 class="logo">smc</h1>
                            </a>
                        </li>
                        <li class="navbar-item">
                            <a href="Home.php" class="navbar-link" data-navbar-link>Home</a>
                        </li>

                        <li class="navbar-item dropdown__item">
                            <a class="navbar-link nav__link dropdown__button">Information
                                <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                            </a>
                            <div class="dropdown__container">
                                <div class="dropdown__content">
                                    <div class="dropdown__group">
                                        <ul class="dropdown__list">
                                            <li>
                                                <a href="Infomation.php" class="dropdown__title">Information</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="dropdown__group">
                                        <ul class="dropdown__list">
                                            <li>
                                                <a href="Apps.php" class="dropdown__link">
                                                    Most Popular Social Media Apps
                                                </a>
                                            </li>
                                            <li>
                                                <a href="Livestream.php" class="dropdown__link">Livestreaming</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="navbar-item dropdown__item">
                            <a class="navbar-link nav__link dropdown__button">Get Protected
                                <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                            </a>
                            <div class="dropdown__container">
                                <div class="dropdown__content">
                                    <div class="dropdown__group">
                                        <ul class="dropdown__list">
                                            <li>
                                                <a href="GetProtected.php" class="dropdown__title">Get Protected</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="dropdown__group">
                                        <ul class="dropdown__list">
                                            <li>
                                                <a href="Parents.php" class="dropdown__link">How Parents Can Help</a>
                                            </li>
                                            <li>
                                                <a href="Guidance.php" class="dropdown__link">Legislation and
                                                    Guidance</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="navbar-item">
                            <a href="Contact.php" class="navbar-link" data-navbar-link>Contact Us</a>
                        </li>

                        <li class="navbar-item">
                            <a href="Searching.php" class="navbar-link" data-navbar-link>
                                <span><i class="ri-search-line"></i></span>
                            </a>
                        </li>

                        <li class="navbar-item" id="nav-list">
                            <!--        <a href="SignIn.php" class="navbar-link" data-navbar-link> Sign In <i class="ri-user-fill"></i></a>   -->

                        </li>
                    </ul>
                </div>
            </nav>




            <button class="nav-open-btn" aria-label="Open Menu" data-nav-open-btn>
                <ion-icon name="menu-outline"></ion-icon>
            </button>
        </div>
    </header>

    <main>
        <article>
            <!-- 
        - #HERO
      -->

            <section class="protect" id="home">
                <div class="container">
                    <div class="protect-content">


                        <h1 class="h1 protect-title">
                            Get protected
                        </h1>

                        <p class="protect-text">
                            Find guidance, tips and advice to help you understand how to protect yourself against common
                            online security threats, and learn how to respond if something happens.
                        </p>

                        <button class="btn">Report an incident </button>


                    </div>

                </div>
            </section>

            <section class="section about" id="about">
                <div class="container">
                    <h2 class="about-banner h2 about-title">
                        Browse guides by:
                    </h2>

                    <div class="about-content">


                        <ul class="Browse-list">
                            <li class="Browse-card">
                                <img src="img/app.png" class=" Browse-title" alt="">
                                <a href="" class="Browse-text">Popular Apps</a>
                            </li>

                            <li class="Browse-card">
                                <img src="img/live-streaming.png" class=" Browse-title" alt="">

                                <a href="Livestream.php" class="Browse-text">Livestreaming</a>
                            </li>

                            <li class="Browse-card">
                                <img src="img/tips.png" class=" Browse-title" alt="">

                                <a href="" class="Browse-text">Top tips for parents</a>
                            </li>


                        </ul>
                    </div>
                </div>
            </section>

        </article>
    </main>

    <!-- 
    - #FOOTER
  -->

    <footer class="footer">
        <div class="footer-top section">
            <div class="container">
                <div class="footer-brand">
                    <a href="Home.php" class="logo">smc</a>

                    <ul class="social-list">
                        <li>
                            <a href="https://www.facebook.com/" class="social-link">
                                <ion-icon name="logo-facebook"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="https://www.instagram.com/" class="social-link">
                                <ion-icon name="logo-instagram"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="https://twitter.com/" class="social-link">
                                <ion-icon name="logo-twitter"></ion-icon>
                            </a>
                        </li>
                    </ul>
                </div>

                <ul class="footer-list">
                    <li>
                        <p class="footer-list-title">Main links</p>
                    </li>

                    <li>
                        <a href="Home.php" class="footer-link">Home</a>
                    </li>

                    <li>
                        <a href="Infomation.php" class="footer-link">Infomation</a>
                    </li>

                    <li>
                        <a href="GetProtected.php" class="footer-link" id="color">Get Protected</a>
                    </li>

                    <li>
                        <a href="Contact.php" class="footer-link">Contact Us</a>
                    </li>
                </ul>

                <ul class="footer-list">
                    <li>
                        <p class="footer-list-title">Sub links</p>
                    </li>

                    <li>
                        <a href="Apps.php" class="footer-link">Media Apps</a>
                    </li>

                    <li>
                        <a href="Livestream.php" class="footer-link">Livestreaming</a>
                    </li>

                    <li>
                        <a href="Parents.php" class="footer-link">Parents Help</a>
                    </li>

                    <li>
                        <a href="Guidance.php" class="footer-link">Legi & Guid</a>
                    </li>
                </ul>

                <ul class="footer-list">
                    <li>
                        <p class="footer-list-title">Other links</p>
                    </li>

                    <li>
                        <a href="RssFeed.php" class="footer-link">RSS Feed</a>
                    </li>

                    <li>
                        <a href="Policy.php" class="footer-link">Privacy Policy</a>
                    </li>

                    <li>
                        <!-- 
    - #GOOGLE TRANSLATE
  -->
                        <div id="google_translate_element"></div>
                        <script type="text/javascript"
                            src="//translate.google.com/translate_a/element.js?cb=googleTranslateElement"></script>

                        <script type="text/javascript">
                            function googleTranslateElement() {
                                new google.translate.TranslateElement({
                                    pageLanguage: 'en'
                                }, 'google_translate_element');
                            }
                        </script>
                    </li>
                </ul>

                <ul class="footer-list">
                    <li>
                        <p class="footer-list-title">Contact Us</p>
                    </li>

                    <li class="footer-item">
                        <div class="footer-item-icon">
                            <ion-icon name="call"></ion-icon>
                        </div>

                        <div>
                            <a href="tel:+2484214313" class="footer-item-link">+248-421-4313</a>
                            <a href="tel:+2486871365" class="footer-item-link">+248-687-1365</a>
                        </div>
                    </li>

                    <li class="footer-item">
                        <div class="footer-item-icon">
                            <ion-icon name="mail"></ion-icon>
                        </div>

                        <div>
                            <a href="mailto:info@smc.com" class="footer-item-link">info@smc.com</a>
                            <a href="mailto:help@smc.com" class="footer-item-link">help@smc.com</a>
                        </div>
                    </li>

                    <li class="footer-item">
                        <div class="footer-item-icon">
                            <ion-icon name="location"></ion-icon>
                        </div>

                        <address class="footer-item-link">
                            Pontiac, Michigan, United States of America
                        </address>
                    </li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p class="copyright">
                &copy; 2024 <a href="#" class="copyright-link">smc</a>. All Right
                Reserved
            </p>
        </div>
    </footer>

    <!-- 
    - #GO TO TOP
  -->

    <a href="#top" class="go-top active" aria-label="Go To Top" data-go-top>
        <ion-icon name="arrow-up-outline"></ion-icon>
    </a>



    <!-- 
    - custom js link
  -->
    <script src="script/script.js"></script>

    <!-- 
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script defer>
        document.addEventListener('DOMContentLoaded', function() {
            const navList = document.getElementById('nav-list');

            // Check login status using PHP session or other method
            const
                loggedIn = <?php echo json_encode(isset($_SESSION['CID'])); ?> ;
            const
                username = <?php echo json_encode($_SESSION['CName'] ?? ''); ?> ;

            if (loggedIn) {
                // User is logged in, show profile and logout option
                navList.innerHTML = `          
           <a href="" class="navbar-link" data-navbar-link> ${username} <i class="ri-user-fill"></i></a>
           <a href="CustomerLogOut.php" class="navbar-link nav-link"  data-navbar-link>Logout</a>
        `;
            } else {
                // User is not logged in, show login and create account options
                navList.innerHTML = `
            <a href="SignIn.php" class="navbar-link " data-navbar-link> Sign In <i class="ri-user-fill"></i></a>      
        `;
            }
        });
    </script>
</body>

</html>