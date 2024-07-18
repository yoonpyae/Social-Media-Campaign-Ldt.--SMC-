<?php

include('dbconnect.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SMC - Information</title>

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
        <section class=" section-container ">
            <div class=" container">
                <h2 class="h2 section-title underline">Our Campaigns</h2>
                <p class="msg">Our social media campaigns are dedicated to educating and protecting teenagers online.
                    There are different type of campaigns for you. Learn more about our efforts and how we're making a
                    difference.</p>
            </div>
        </section>

        <section class=" section-container ">
            <div class=" container">
                <h2 class="h2 section-title underline">Supportive Campaigns</h2>

                <?php
    $query = "SELECT * FROM Campaigntb c, CampaignTypetb ct 
              WHERE c.CampaignTypeID= ct.CampaignTypeID
              AND ct.CampaignTypeName='Supportive'";
$result = mysqli_query($connect, $query);

$count = mysqli_num_rows($result);
if ($count == 0) {
    echo "<p>No Campaign Found</p>"   ;
} else {
    for ($i = 0; $i < $count; $i += 4) {
        $query1 = "SELECT * FROM Campaigntb c, CampaignTypetb ct 
              WHERE c.CampaignTypeID= ct.CampaignTypeID
              AND ct.CampaignTypeName='Supportive'
              ORDER BY CampaignID LIMIT $i,4";
        $result1 = mysqli_query($connect, $query1);
        $count1 = mysqli_num_rows($result1);

        echo "<div class='column '>";
        for ($j = 0; $j < $count1 ; $j++) {
            $array = mysqli_fetch_array($result1);
            $CID = $array['CampaignID'];
            $CName = $array['CampaignName'];
            $aim = $array['Aim'];
            $vision = $array['Vision'];

            $fees = $array['Fees'];
            $img1 = $array['CampaignImage1'];

            ?>
                <div class="img">
                    <img src="<?php echo $img1 ?>" alt="">

                    <div class="desc">
                        <p> <a
                                href="CampDetail.php?CID= <?php echo $CID; ?>">CampaignName:
                                <?php echo $CName; ?></a> </p>

                        <p> Aim: <?php echo $aim; ?></p>
                        <p> Vision: <?php echo $vision; ?></p>

                        <p> Fees: <?php echo $fees; ?> $</p>

                    </div>
                </div>

                <?php
        }
        echo "</div >";
    }
}
?>
            </div>

        </section>

        <section class=" section-container ">

            <div class=" container">
                <h2 class="h2 section-title underline">Education Campaigns</h2>

                <?php
    $query = "SELECT * FROM Campaigntb c, CampaignTypetb ct 
              WHERE c.CampaignTypeID= ct.CampaignTypeID
              AND ct.CampaignTypeName='Education'";
$result = mysqli_query($connect, $query);

$count = mysqli_num_rows($result);
if ($count == 0) {
    echo "<p>No Campaign Found</p>"   ;
} else {
    for ($i = 0; $i < $count; $i += 4) {
        $query1 = "SELECT * FROM Campaigntb c, CampaignTypetb ct 
              WHERE c.CampaignTypeID= ct.CampaignTypeID
              AND ct.CampaignTypeName='Education'
              ORDER BY CampaignID LIMIT $i,4";
        $result1 = mysqli_query($connect, $query1);
        $count1 = mysqli_num_rows($result1);

        echo "<div class='column '>";
        for ($j = 0; $j < $count1 ; $j++) {
            $array = mysqli_fetch_array($result1);
            $CID = $array['CampaignID'];
            $CName = $array['CampaignName'];
            $aim = $array['Aim'];
            $vision = $array['Vision'];

            $fees = $array['Fees'];
            $img1 = $array['CampaignImage1'];

            ?>
                <div class="img">
                    <img src="<?php echo $img1 ?>" alt="">


                    <div class="desc">
                        <p> <a
                                href="CampDetail.php?CID= <?php echo $CID; ?>">CampaignName:
                                <?php echo $CName; ?></a> </p>

                        <p> Aim: <?php echo $aim; ?></p>
                        <p> Vision: <?php echo $vision; ?></p>

                        <p> Fees: <?php echo $fees; ?> $</p>

                    </div>
                </div>

                <?php
        }
        echo "</div >";
    }
}
?>
            </div>

        </section>

        <section class=" section-container ">

            <div class=" container">
                <h2 class="h2 section-title underline">Awareness Campaigns</h2>

                <?php
    $query = "SELECT * FROM Campaigntb c, CampaignTypetb ct 
              WHERE c.CampaignTypeID= ct.CampaignTypeID
              AND ct.CampaignTypeName='Awareness'";
$result = mysqli_query($connect, $query);

$count = mysqli_num_rows($result);
if ($count == 0) {
    echo "<p>No Campaign Found</p>"   ;
} else {
    for ($i = 0; $i < $count; $i += 4) {
        $query1 = "SELECT * FROM Campaigntb c, CampaignTypetb ct 
              WHERE c.CampaignTypeID= ct.CampaignTypeID
              AND ct.CampaignTypeName='Awareness'
              ORDER BY CampaignID LIMIT $i,4";
        $result1 = mysqli_query($connect, $query1);
        $count1 = mysqli_num_rows($result1);

        echo "<div class='column '>";
        for ($j = 0; $j < $count1 ; $j++) {
            $array = mysqli_fetch_array($result1);
            $CID = $array['CampaignID'];
            $CName = $array['CampaignName'];
            $aim = $array['Aim'];
            $vision = $array['Vision'];

            $fees = $array['Fees'];
            $img1 = $array['CampaignImage1'];

            ?>
                <div class="img">
                    <img src="<?php echo $img1 ?>" alt="">


                    <div class="desc">
                        <p> <a
                                href="CampDetail.php?CID= <?php echo $CID; ?>">CampaignName:
                                <?php echo $CName; ?></a> </p>

                        <p> Aim: <?php echo $aim; ?></p>
                        <p> Vision: <?php echo $vision; ?></p>

                        <p> Fees: <?php echo $fees; ?> $</p>

                    </div>
                </div>

                <?php
        }
        echo "</div >";
    }
}
?>
            </div>

        </section>

        <section class=" section-container ">

            <div class=" container">
                <h2 class="h2 section-title underline">Entertainment Campaigns</h2>

                <?php
    $query = "SELECT * FROM Campaigntb c, CampaignTypetb ct 
              WHERE c.CampaignTypeID= ct.CampaignTypeID
              AND ct.CampaignTypeName='Entertainment'";
$result = mysqli_query($connect, $query);

$count = mysqli_num_rows($result);
if ($count == 0) {
    echo "<p>No Campaign Found</p>"   ;
} else {
    for ($i = 0; $i < $count; $i += 4) {
        $query1 = "SELECT * FROM Campaigntb c, CampaignTypetb ct 
              WHERE c.CampaignTypeID= ct.CampaignTypeID
              AND ct.CampaignTypeName='Entertainment'
              ORDER BY CampaignID LIMIT $i,4";
        $result1 = mysqli_query($connect, $query1);
        $count1 = mysqli_num_rows($result1);

        echo "<div class='column '>";
        for ($j = 0; $j < $count1 ; $j++) {
            $array = mysqli_fetch_array($result1);
            $CID = $array['CampaignID'];
            $CName = $array['CampaignName'];
            $aim = $array['Aim'];
            $vision = $array['Vision'];

            $fees = $array['Fees'];
            $img1 = $array['CampaignImage1'];

            ?>
                <div class="img">
                    <img src="<?php echo $img1 ?>" alt="">


                    <div class="desc">
                        <p> <a
                                href="CampDetail.php?CID= <?php echo $CID; ?>">CampaignName:
                                <?php echo $CName; ?></a> </p>

                        <p> Aim: <?php echo $aim; ?></p>
                        <p> Vision: <?php echo $vision; ?></p>

                        <p> Fees: <?php echo $fees; ?> $</p>

                    </div>
                </div>

                <?php
        }
        echo "</div >";
    }
}
?>
            </div>
        </section>

        <section class=" section-container season">

            <div class=" container">
                <h2 class="h2 section-title underline">Holiday Campaigns</h2>

                <?php
    $query = "SELECT * FROM Campaigntb c, CampaignTypetb ct 
              WHERE c.CampaignTypeID= ct.CampaignTypeID
              AND ct.CampaignTypeName='Holiday'";
$result = mysqli_query($connect, $query);

$count = mysqli_num_rows($result);
if ($count == 0) {
    echo "<p>No Campaign Found</p>"   ;
} else {
    for ($i = 0; $i < $count; $i += 4) {
        $query1 = "SELECT * FROM Campaigntb c, CampaignTypetb ct 
              WHERE c.CampaignTypeID= ct.CampaignTypeID
              AND ct.CampaignTypeName='Holiday'
              ORDER BY CampaignID LIMIT $i,4";
        $result1 = mysqli_query($connect, $query1);
        $count1 = mysqli_num_rows($result1);

        echo "<div class='column '>";
        for ($j = 0; $j < $count1 ; $j++) {
            $array = mysqli_fetch_array($result1);
            $CID = $array['CampaignID'];
            $CName = $array['CampaignName'];
            $aim = $array['Aim'];
            $vision = $array['Vision'];

            $fees = $array['Fees'];
            $img1 = $array['CampaignImage1'];

            ?>
                <div class="img">
                    <img src="<?php echo $img1 ?>" alt="">


                    <div class="desc">
                        <p> <a
                                href="CampDetail.php?CID= <?php echo $CID; ?>">CampaignName:
                                <?php echo $CName; ?></a> </p>

                        <p> Aim: <?php echo $aim; ?></p>
                        <p> Vision: <?php echo $vision; ?></p>

                        <p> Fees: <?php echo $fees; ?> $</p>

                    </div>
                </div>

                <?php
        }
        echo "</div >";
    }
}
?>
            </div>
        </section>



        <section class="section aims-vision">
            <div class="container">
                <h2 class="h2 section-title underline">Our Aims and Vision</h2>
                <p>Our mission is to ensure teenagers are safe online by providing the best resources and support.
                    Our
                    vision is to create a safer digital world for everyone.</p>
            </div>
            <section class="section key-features">
                <div class="container">
                    <h2 class="h2 section-title underline">Key Features</h2>
                    <ul>
                        <li>Educational Resources: Guides, videos, workshops, webinars</li>
                        <li>Collaborations: Partnerships with schools, organizations, influencers</li>
                        <li>Events and Activities: Upcoming events, activities, webinars</li>
                    </ul>
                </div>
                <section class="section success-stories">
                    <div class="container">
                        <h2 class="h2 section-title underline">Success Stories</h2>
                        <blockquote>
                            <p>"Thanks to SMC's resources, I feel much safer online!" - Teenager A</p>
                        </blockquote>
                        <blockquote>
                            <p>"The workshops provided by SMC helped me understand the importance of privacy
                                settings."
                                -
                                Teenager B</p>
                        </blockquote>

                        <article>
                            <h3>Case Study: Digital Literacy Workshop</h3>
                            <p>In our recent Digital Literacy Workshop, we engaged over 200 teenagers from local
                                schools.
                                Through interactive sessions and group activities, participants learned about safe
                                social
                                media
                                practices, identifying fake news, and protecting personal information online.
                                Feedback
                                from
                                both
                                students and teachers was overwhelmingly positive, highlighting a significant
                                increase
                                in
                                awareness and confidence in navigating digital platforms safely.</p>
                        </article>

                        <article>
                            <h3>Case Study: Online Safety Webinar Series</h3>
                            <p>Our Online Safety Webinar Series reached a global audience of parents and teenagers.
                                Each
                                session
                                focused on different aspects of online safety, including cyberbullying prevention,
                                privacy
                                settings, and digital footprint management. Participants reported implementing
                                practical
                                tips
                                discussed in the webinars, leading to enhanced online safety practices and improved
                                digital
                                literacy skills.</p>
                        </article>
                        <!-- Add more testimonials and case studies as needed -->
                    </div>
                </section>
            </section>

            <section class="section Newsletter news" id="newsletter">
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