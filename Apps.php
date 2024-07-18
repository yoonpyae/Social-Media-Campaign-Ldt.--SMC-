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
    <title>SMC - Search</title>

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

    <header class="header gud-header" data-header>
        <div class="container">
            <div class="overlay" data-overlay></div>

            <nav class="navbar" data-navbar>
                <div class="navbar-top">
                    <a href="Home.php" class="logo">smc</a>

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

    <main class="apps">

        <section class="section-container container">
            <div class=" container">
                <h2 class=" search-h2"> Media Info Searching</h2>
                <form action="Apps.php" method="POST" class="search-form">
                    <input type="text" name="txtSearch" id="" placeholder="Search for safety techniques...">
                    <input type="submit" name="btnSearch" value="Search" class="btn">
                </form>

                <?php
     if(isset($_POST['btnSearch'])) {
         $search = $_POST['txtSearch'];
         $query = "SELECT * FROM Mediatb 
                   WHERE MediaName LIKE '%$search%'";
         $result = mysqli_query($connect, $query);
         $count = mysqli_num_rows($result);
         if($count > 0) {
             echo "<div class='column'>";

             for($i = 0; $i < $count; $i += 2) {
                 $query1 = "SELECT * FROM Mediatb
                            WHERE MediaName LIKE '%$search%'
                            LIMIT  $i,2";
                 $result1 = mysqli_query($connect, $query1);
                 $count1 = mysqli_num_rows($result1);


                 for($j = 0; $j < $count1; $j++) {
                     $data = mysqli_fetch_array($result1);

                     $MediaID = $data['MediaID'];
                     $MediaName = $data['MediaName'];
                     $Techniques = $data['Techniques'];
                     $MediaImage = $data['MediaImage'];

                     ?>

                <div class="m-search ">


                    <h2><?php echo $MediaName; ?></h2> <br>

                    <p class="text">
                        Techniques : <?php echo $Techniques; ?>
                    </p>

                </div>


                <?php
                 }

             }
             echo "</div >";
         } else {
             echo "<h1>No Data Found for Search!</h1>";
         }
     }
?>


            </div>
        </section>

        <section class="section how-parents-can-help container">
            <h2 class="h2 section-title underline">Most Popular Social Media Apps</h2>
            <p>
                Learn about the most popular social media apps, their risks, and how
                to stay safe while using them.
            </p>


            <div class="tips">
                <div class="app">
                    <img src="img/facebook.png" alt="Facebook" />
                    <h3>Facebook</h3>
                    <p>
                        Facebook is a social networking site where users can post
                        comments, share photographs, and links to news or other
                        interesting content on the web, chat live, and watch short-form
                        video. Risks include privacy issues, cyberbullying, and exposure
                        to inappropriate content.
                    </p>
                    <p>
                        <strong>Safety Tips:</strong> Adjust privacy settings, be cautious
                        about friend requests, and report inappropriate content.
                    </p>
                </div>
                <div class="app">
                    <img src="img/instagram.png" alt="Instagram" />
                    <h3>Instagram</h3>
                    <p>
                        Instagram is a photo and video-sharing social networking service.
                        Users can share images and videos, follow other users, and
                        interact through likes and comments. Risks include mental health
                        effects, privacy concerns, and exposure to inappropriate content.
                    </p>
                    <p>
                        <strong>Safety Tips:</strong> Use private accounts, control who
                        can comment, and be mindful of the content shared.
                    </p>
                </div>
                <div class="app">
                    <img src="img/snapchat.png" alt="Snapchat" />
                    <h3>Snapchat</h3>
                    <p>
                        Snapchat is a multimedia messaging app where pictures and messages
                        are usually only available for a short time before they become
                        inaccessible. Risks include sexting, privacy issues, and
                        cyberbullying.
                    </p>
                    <p>
                        <strong>Safety Tips:</strong> Be aware of who you are sending
                        snaps to, use ghost mode for location privacy, and avoid sharing
                        sensitive content.
                    </p>
                </div>
                <div class="app">
                    <img src="img/tiktok.png" alt="TikTok" />
                    <h3>TikTok</h3>
                    <p>
                        TikTok is a short-form, video-sharing app that allows users to
                        create and share 15-second videos on any topic. Risks include
                        exposure to inappropriate content, privacy concerns, and potential
                        addiction.
                    </p>
                    <p>
                        <strong>Safety Tips:</strong> Set up restricted mode, control who
                        can duet and comment, and monitor screen time.
                    </p>
                </div>
                <div class="app">
                    <img src="img/twitter.png" alt="Twitter" />
                    <h3>Twitter</h3>
                    <p>
                        Twitter is a microblogging and social networking service on which
                        users post and interact with messages known as "tweets". Risks
                        include cyberbullying, exposure to inappropriate content, and
                        privacy issues.
                    </p>
                    <p>
                        <strong>Safety Tips:</strong> Use privacy settings to control who
                        can see your tweets, be mindful of the information shared, and
                        report abusive behavior.
                    </p>
                </div>
                <div class="app">
                    <img src="img/youtube.png" alt="YouTube" />
                    <h3>YouTube</h3>
                    <p>
                        YouTube is a video-sharing platform where users can upload, view,
                        and share videos. Risks include exposure to inappropriate content,
                        privacy issues, and potential addiction.
                    </p>
                    <p>
                        <strong>Safety Tips:</strong> Use restricted mode to filter
                        content, monitor screen time, and be cautious about the
                        information shared in videos.
                    </p>
                </div>
            </div>
        </section>






        <section class="section Newsletter" id="newsletter">
            <div class="container">
                <h2 class="h2 section-title underline">Subscribe Our Newsletter</h2>

                <div class="main-wrapper">
                    <div class="subscribe-wrapper">
                        <p>
                            Subscribe to our newsletter for the latest updates, safety
                            advice, and educational content designed to keep you informed
                            and protected online. Join us in creating a safer social media
                            environment for everyone!
                        </p>
                        <form action="">
                            <div class="inner">
                                <input type="email" placeholder="Enter email" />
                            </div>
                            <button type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
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
                        <a href="GetProtected.php" class="footer-link">Get Protected</a>
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
                        <a href="Apps.php" class="footer-link" id="color">Media Apps</a>
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
            <a href="SignIn.php" class="navbar-link" data-navbar-link> Sign In <i class="ri-user-fill"></i></a>      
        `;
            }
        });
    </script>

</body>

</html>