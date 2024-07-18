<?php

session_start();
include('dbconnect.php');

if (isset($_SESSION['CID'])) {
    $codeNo = $_SESSION['CID'];
    $name = $_SESSION['CName'];
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SMC - Home</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml" />

  <!--=============== REMIXICONS ===============-->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet" />

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="UIStyle.css?<?php echo time(); ?>" />

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
                        <a href="Guidance.php" class="dropdown__link">Legislation and Guidance</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>

            <li class="navbar-item">
              <a href="Contact.php" class="navbar-link" data-navbar-link>Contact Us</a>
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

      <section class="hero" id="home">
        <div class="container">
          <div class="hero-content">
            <p class="hero-subtitle">Simplifying cyber security</p>

            <h2 class="h2 hero-title">
              We're here to help you stay secure online
            </h2>

            <p class="hero-text">
              We're looking to provide help and support to teenagers to encourage them to stay safe when using social
              media apps.
            </p>

            <button class="btn"><a href="Searching.php">
                Search
              </a></button>


          </div>

          <figure class="hero-banner">
            <img src="./img/main-banner.png" width="660" height="500" loading="lazy" alt="hero-banner"
              class="w-100 banner-animation" />
          </figure>
        </div>
      </section>

      <!-- 
        - #ABOUT
      -->

      <section class="section about" id="about">
        <div class="container">
          <figure class="about-banner">
            <img src="./img/3d-business-man-and-woman-at-table-with-laptop.png" width="700" height="532" loading="lazy"
              alt="about banner" class="w-80 banner-animation" />
          </figure>

          <div class="about-content">
            <h2 class="h2 section-title underline">What's smc?</h2>

            <p class="about-text">
              Social Media Campaigns Ltd. (SMC) is a newly established
              business dedicated to promoting online safety for teenagers
              using social media apps. The company aims to educate young users
              on best practices for staying secure in the digital landscape.
            </p>

            <p class="about-text">
              By sharing crucial information and educational resources, SMC
              aims to raise awareness about potential online risks and equip
              young users with the knowledge and tools they need to protect
              themselves while engaging with social media apps.
            </p>

            <ul class="stats-list">
              <li class="stats-card">
                <p class="h3 stats-title">263</p>

                <p class="stats-text">Subscribers</p>
              </li>

              <li class="stats-card">
                <p class="h3 stats-title">23</p>

                <p class="stats-text">Campaign Lunched</p>
              </li>

              <li class="stats-card">
                <p class="h3 stats-title">1</p>

                <p class="stats-text">Years Completed</p>
              </li>
            </ul>
          </div>
        </div>
      </section>

      <!-- 
        - #Apps
      -->

      <section class="section Apps" id="Appss">
        <div class="container">
          <h2 class="h2 section-title underline">
            Most popular social media apps
          </h2>

          <ul class="Apps-list">
            <li>
              <div class="Apps-card">
                <div class="card-icon">
                  <img src="img/facebook.png" alt="Facebook" />
                </div>

                <h3 class="h3 title">Facebook</h3>

                <p class="text">
                  Facebook is a website which allows users to share pictures,
                  music, videos, and articles.
                </p>

                <button class="card-btn" aria-label="Show More">
                  <ion-icon name="chevron-forward-outline"></ion-icon>
                </button>
              </div>
            </li>

            <li>
              <div class="Apps-card">
                <div class="card-icon">
                  <img src="img/youtube.png" alt="YouTube" />
                </div>

                <h3 class="h3 title">YouTube</h3>

                <p class="text">
                  YouTube is a free video sharing website that makes it easy
                  to watch online videos.
                </p>

                <button class="card-btn" aria-label="Show More">
                  <ion-icon name="chevron-forward-outline"></ion-icon>
                </button>
              </div>
            </li>

            <li>
              <div class="Apps-card">
                <div class="card-icon">
                  <img src="img/instagram.png" alt="Instagram" />
                </div>

                <h3 class="h3 title">Instagram</h3>

                <p class="text">
                  Instagram is a free photo and video sharing app available on
                  iPhone and Android.
                </p>

                <button class="card-btn" aria-label="Show More">
                  <ion-icon name="chevron-forward-outline"></ion-icon>
                </button>
              </div>
            </li>

            <li>
              <div class="Apps-card">
                <div class="card-icon">
                  <img src="img/whatsapp.png" alt="WhatsApp" />
                </div>

                <h3 class="h3 title">WhatsApp</h3>

                <p class="text">
                  WhatsApp is an instant messaging and voice-over-IP Apps
                  owned by technology conglomerate Meta.
                </p>

                <button class="card-btn" aria-label="Show More">
                  <ion-icon name="chevron-forward-outline"></ion-icon>
                </button>
              </div>
            </li>

            <li>
              <div class="Apps-card">
                <div class="card-icon">
                  <img src="img/tiktok.png" alt="TikTok" />
                </div>

                <h3 class="h3 title">TikTok</h3>

                <p class="text">
                  TikTok is a social media platform for creating, sharing and
                  discovering short videos.
                </p>

                <button class="card-btn" aria-label="Show More">
                  <ion-icon name="chevron-forward-outline"></ion-icon>
                </button>
              </div>
            </li>

            <li>
              <div class="Apps-card">
                <div class="card-icon">
                  <img src="img/wechat.png" alt="WeChat" />
                </div>

                <h3 class="h3 title">WeChat</h3>

                <p class="text">
                  WeChat is a Chinese instant messaging, social media, and
                  mobile payment app developed by Tencent.
                </p>

                <button class="card-btn" aria-label="Show More">
                  <ion-icon name="chevron-forward-outline"></ion-icon>
                </button>
              </div>
            </li>
          </ul>
        </div>
      </section>

      <!-- 
        - #FEATURES
      -->

      <section class="section features" id="features">
        <div class="container">
          <h2 class="h2 section-title underline">How to stay safe online</h2>

          <ul class="features-list">
            <li>
              <div class="features-card">
                <div class="icon">
                  <i class="ri-wifi-line"></i>
                </div>

                <div class="content">
                  <h3 class="h3 title">Be Careful About Wifi</h3>

                  <p class="text">
                    Do not trust public wifi security. Avoid connecting to
                    unsecured public wifi networks
                  </p>
                </div>
              </div>
            </li>

            <li>
              <div class="features-card">
                <div class="icon">
                  <i class="ri-device-line"></i>
                </div>

                <div class="content">
                  <h3 class="h3 title">Make Sure Your Devices Are Secure</h3>

                  <p class="text">
                    Utilize passwords and other security options like
                    fingerprint readers and face scanning technology.
                  </p>
                </div>
              </div>
            </li>
          </ul>

          <figure class="features-banner">
            <img src="./img/feautre-banner.png" width="369" height="318" loading="lazy" alt="Features Banner"
              class="w-100 banner-animation" />
          </figure>

          <ul class="features-list">
            <li>
              <div class="features-card">
                <div class="icon">
                  <i class="ri-lock-line"></i>
                </div>

                <div class="content">
                  <h3 class="h3 title">Choose strong passwords</h3>

                  <p class="text">
                    When creating a new password, pay attention to strong
                    password requirements.
                  </p>
                </div>
              </div>
            </li>

            <li>
              <div class="features-card">
                <div class="icon">
                  <i class="ri-windows-line"></i>
                </div>

                <div class="content">
                  <h3 class="h3 title">Pay Attention to Software Updates</h3>

                  <p class="text">
                    Promptly install software updates, especially when they
                    include important security upgrades.
                  </p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>

      <section class="section container " id="about-container">
        <h2 class="h2 section-title underline">Teen Brain and Social Media</h2>
        <p> As social media becomes a central part of teenagers' lives, it's crucial to understand how it affects their
          brains and social development. Here are some key points to consider:</p>
        <section class="about">
          <div class="container " id="resources">
            <figure class="about-banner">

              <h2>Positive Effects</h2>
              <p class="about-text">

              <ul>
                <li><strong>Connection and Support :</strong> Social media allows teens to stay connected with friends
                  and family, providing a sense of belonging and support. Online communities can offer help and advice,
                  especially during challenging times.
                </li>
                <li><strong>Learning and Inspiration :</strong> Platforms like YouTube, Instagram, and TikTok can be
                  valuable sources of information and inspiration. Teens can learn new skills, discover creative ideas,
                  and find educational content.
                </li>

              </ul>
            </figure>

            <div class="about-content">
              <h2 class="">Challenges to Consider</h2>
              <p class="about-text">

              <ul>
                <li><strong>Mental Health :</strong> Excessive use of social media can contribute to anxiety,
                  depression, and feelings of loneliness. It's important for teens to balance online interactions with
                  offline activities.</li>
                <li><strong>Sleep Disruption :</strong> The blue light emitted by screens can interfere with sleep
                  patterns, leading to insufficient rest, which is crucial for cognitive development and emotional
                  regulation.</li>
                <li><strong>Peer Pressure and Self-Esteem :</strong> The pressure to present a perfect online image can
                  affect self-esteem and lead to unhealthy comparisons. Teens may feel pressured to conform to
                  unrealistic standards.</li>
              </ul>
              </p>
            </div>
          </div>
        </section>

        <!-- 
        - #Customer Lit
      -->

        <section class="section cus-list">
          <div class="container">
            <h1 class="section-title underline">Our Customer in June</h1>
            <table class="content-table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>First Name</th>
                  <th>Surname </th>
                  <th>Username</th>
                  <th>Address</th>
                  <th>Call Number</th>
                  <th>Email</th>
                  <th>Register Month</th>


                </tr>
              </thead>
              <?php

            //display data
            $customerSelect = "SELECT * FROM customertb WHERE RegistrationMonth='June'";
$selectQuery = mysqli_query($connect, $customerSelect);

$count = mysqli_num_rows($selectQuery);
for ($i = 0; $i < $count; $i++) {
    $array = mysqli_fetch_array($selectQuery);

    $CustomerID = $array['CustomerID'];
    $FirstName = $array['FirstName'];
    $Surname = $array['Surname'];
    $Username = $array['Username'];
    $Address = $array['Address'];
    $PhoneNo = $array['PhoneNo'];

    $RegistrationMonth = $array['RegistrationMonth'];
    $Email = $array['Email'];


    echo "<tr>";
    echo "<td>$CustomerID</td>";
    echo "<td>$FirstName</td>";
    echo "<td>$Surname</td>";
    echo "<td>$Username</td>";
    echo "<td>$Address</td>";
    echo "<td>$PhoneNo</td>";
    echo "<td>$Email</td>";
    echo "<td>$RegistrationMonth</td>";


    echo "</tr>";
}

?>
            </table>
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
            <a href="Home.php" class="footer-link" id="color">Home</a>
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