<?php
session_start();
include('dbconnect.php');
if (isset($_GET['CID'])) {
    $DetailsID = $_GET['CID'];
    $dbquery = "SELECT * FROM Campaigntb c,  CampaignTypetb ct, Mediatb m 
                  WHERE c.CampaignTypeID=ct.CampaignTypeID
                  AND c.MediaID=m.MediaID

                  AND c.CampaignID='$DetailsID'";

    $result = mysqli_query($connect, $dbquery);
    $array = mysqli_fetch_array($result);
    $CID = $array['CampaignID'];
    $Cname = $array['CampaignName'];
    $Aim = $array['Aim'];
    $Vision = $array['Vision'];
    $Fees = $array['Fees'];
    $Location = $array['Location'];
    $StartDate = $array['StartDate'];
    $EndDate = $array['EndDate'];
    $Desciption = $array['Desciption'];
    $CampaignImage1 = $array['CampaignImage1'];
    $CampaignImage2 = $array['CampaignImage2'];
    $CampaignImage3 = $array['CampaignImage3'];

    $CampaignStatus = $array['CampaignStatus'];

    $CampaignTypeName = $array['CampaignTypeName'];
    $MediaName = $array['MediaName'];

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SMC - Campaign Details</title>

    <!-- 
    - favicon
  -->
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml" />

    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />

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
                                <h1 class="logo gud-logo">smc</h1>
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
                            <a href="#" class="navbar-link" data-navbar-link>Contact Us</a>
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
        <section class=" section">
            <div class=" container  section-container">
                <form action="CampDetails.php" method="GET" class="detail">
                    <h2 class="h2 section-title underline">Campaign Details for
                        <?php echo $Cname;?>
                    </h2>

                    <img src="<?php echo $CampaignImage3; ?>">
                    <div class="content">
                        <div class="cam-detail ">
                            <b>Fees:
                                <?php echo $Fees ?> $</b><br>
                            <b>Location:
                                <?php echo $Location ?>
                            </b><br>
                            <b>StartDate:
                                <?php echo $StartDate ?>
                            </b><br>
                            <b>EndDate:
                                <?php echo $EndDate ?>
                            </b><br>

                            <b>CampaignStatus:
                                <?php echo $CampaignStatus ?>
                            </b><br>
                            <b>CampaignTypeName:
                                <?php echo $CampaignTypeName ?>
                            </b><br>
                            <b>MediaName:
                                <?php echo $MediaName ?>
                            </b><br>
                        </div>
                        <h2>Aim: </h2>
                        <p class="text"><?php echo $Aim ?></p>

                        <h2>Vision: </h2>
                        <p class="text"><?php echo $Vision ?>
                        </p>

                        <h2>Desciption: </h2>
                        <p class="text "><?php echo $Desciption ?>
                        </p>
                        <br>



                        <b> <a href="Payment.php?PID= <?php echo $CID; ?>"
                                class="btn ">


                                <span>Join
                                    Now</span>
                            </a></b> <br><br>

                    </div>
                    <br><br>
                    <h2 class=" underline">Campaign Additional Image Details for
                        <?php echo $Cname;?>
                    </h2>
                    <div class="img-detail">
                        <img src="<?php echo $CampaignImage1; ?>"
                            width="300px">
                        <img src="<?php echo $CampaignImage2; ?>"
                            width="300px">

                    </div>
                </form>
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
                        <a href="Infomation.php" class="footer-link" id="color">Infomation</a>
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
    <script src="script.js"></script>

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