<?php

include('dbconnect.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SMC - Livestreaming</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml" />

  <!--=============== REMIXICONS ===============-->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />

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

  <!-- 
    - #Main
  -->
  <main>
    <section class="title" id="title">
      <div class="title-text">
        <h1>WHAT IS LIVESTREAMING?</h1>
      </div>
    </section>

    <section class="section" id="def">
      <div class="container">
        <h2 class="h2 section-title underline ">Definition</h2>
        <article id="imp">
          <p>
            Livestreaming is the process of broadcasting real-time video content
            over the internet to an audience. Unlike pre-recorded videos,
            livestreams happen in the moment, allowing viewers to watch and
            interact with the streamer as events unfold. This interactive format
            has gained immense popularity across various platforms, such as
            YouTube Live, Twitch, Facebook Live, Instagram Live, and TikTok Live,
            among others.
          </p>
          <br />

          <p>
            To engage in livestreaming, one typically needs a device with a camera
            (like a smartphone, tablet, or computer), a stable internet
            connection, and an account on a livestreaming platform.
          </p>
          <br />

          <p>
            Livestreaming is a form of streaming in which the streamed media is
            recorded and broadcasted in real-time (without being recorded or
            stored) without substantial delay. While streams are pre-recorded and
            can be edited, livestreams are uncensored. Livestreams are sent from
            computer servers to end users in real-time using standard web
            protocols.
          </p>
        </article>
      </div>
      <section class="section aims-vision">
        <div class="container">
          <h2 class="h2 section-title underline">How Does Livestreaming Work?</h2>
          <article id="">

            <p>
              Livestreaming involves broadcasting a live event as it happens. In
              livestreaming, a camera or another input device captures a video.
              Then the video is encoded using the appropriate codecs and packaged
              into a file that can be streamed over the internet. The file is then
              compressed using an algorithm to reduce the file size without
              compromising the quality. The resulting file is distributed over the
              internet for playback on media players.
            </p>
            <br />
            <p>
              This section explores the different stages of a livestreaming
              workflow.
            </p>
          </article>
        </div>
        <section class="section types">
          <div class="container" id="types">
            <h2 class="h2 section-title underline">Types of Live Streams
            </h2>
            <article id="btp">
              <div class="live">
                <div class="the-card">
                  <div class="thefront"> <img src="img/game.png" alt=""><strong>Gaming Live Streams</strong></div>
                  <div class="theback">
                    <span><strong>Gameplay Streaming</strong></span>
                    Broadcasting live gameplay to an audience. Popular platforms include Twitch, YouTube Gaming, and
                    Facebook Gaming.
                  </div>

                </div>

                <div class="the-card">
                  <div class="thefront"> <img src="img/ent.png  " alt=""><strong>Entertainment Live Streams</strong>
                  </div>
                  <div class="theback">
                    <SPan><strong>Talk Shows and Podcasts</strong> </SPan>Real-time broadcasts of talk shows or podcast
                    episodes,
                    often with audience interaction.
                  </div>
                </div>

                <div class="the-card">
                  <div class="thefront"> <img src="img/learning.png" alt=""><strong>Educational Live Streams</strong>
                  </div>
                  <div class="theback">
                    <span> <strong>Online Classes </strong> </span> Live teaching sessions or tutorials on subjects
                    ranging from academic courses to hobbies and skills.
                  </div>
                </div>

                <div class="the-card">
                  <div class="thefront"> <img src="img/live.png" alt=""><strong>Shopping Live Streams</strong></div>
                  <div class="theback">
                    <span> <strong>Live Commerce</strong></span> Hosts demonstrate and sell products in real-time, often
                    offering
                    special deals for viewers.
                  </div>
                </div>
              </div>
            </article>
          </div>


          <section class="section key-features ">
            <div class="container">
              <h2 class="h2 section-title underline">
                Ensuring a Safe Livestreaming Environment
              </h2>
              <article id="btp">
                <br />
                <p>
                  <strong> 1.&nbsp; Privacy Settings:</strong> Streamers should
                  familiarize themselves with the privacy settings of their chosen
                  platform. This can help control who can view the stream, whether
                  it’s public, private, or limited to specific followers.
                </p>

                <p>
                  <strong>2.&nbsp; Moderation Tools: </strong>Many platforms offer
                  tools to manage and moderate chat interactions during the
                  livestream. Streamers can assign moderators to help filter out
                  inappropriate comments and block disruptive users.
                </p>

                <p>
                  <strong>3.&nbsp; Personal Information: </strong>It's crucial to
                  avoid sharing personal information during a livestream. Streamers
                  should be mindful not to disclose their address, phone number, or
                  any other sensitive details.
                </p>

                <p>
                  <strong>4.&nbsp; Content Boundaries: </strong>Setting clear
                  boundaries about what content is appropriate to share is essential.
                  Streamers should be aware of platform guidelines and avoid
                  broadcasting prohibited content, such as hate speech, violence, or
                  explicit material.
                </p>

                <p>
                  <strong>5.&nbsp; Community Guidelines: </strong>Streamers should
                  educate themselves about the community guidelines of the platform
                  they are using. This helps ensure their content complies with the
                  rules, preventing potential account suspensions or bans.
                </p>

                <p>
                  <strong>6.&nbsp; Parental Controls: </strong>For younger streamers,
                  parental controls and supervision are vital. Parents can help ensure
                  that the content being shared and viewed is appropriate for the
                  streamer’s age group and that safety measures are in place.
                </p>

                <p>
                  <strong>7.&nbsp; Cybersecurity Measures: </strong>Streamers should
                  use strong, unique passwords for their accounts and enable
                  two-factor authentication (2FA) to protect against unauthorized
                  access.
                </p>

                <p>
                  <strong>8.&nbsp; Reporting Mechanisms: </strong>Knowing how to
                  report abusive behavior or content on the platform can help maintain
                  a positive streaming environment. Most platforms have easy-to-use
                  reporting tools for this purpose.
                </p>

                <p>
                  <strong>9.&nbsp; Education and Awareness: </strong>Continuous
                  education about the potential risks and best practices for
                  livestreaming can empower streamers to create a safer online
                  presence. This includes understanding the risks of cyberbullying,
                  online predators, and data breaches.
                </p>
              </article>
            </div>
          </section>
        </section>
      </section>


      <section class="section success-stories ">
        <div class="container">
          <h2 class="h2 section-title underline">Conclusion</h2>
          <article id="conc">
            <p>
              Livestreaming offers a powerful way to connect with an audience in
              real-time, but it comes with responsibilities and risks. By
              utilizing privacy settings, moderation tools, and cybersecurity
              measures, streamers can create a safe and enjoyable environment
              for themselves and their viewers. Continuous education and
              awareness are crucial in navigating the evolving landscape of
              online safety, ensuring that both the streamer and the audience
              have a positive and secure experience.
            </p>
          </article>
        </div>
        <section class="section Newsletter news" id="newsletter">
          <div class="container">
            <h2 class="h2 section-title underline">Subscribe Our Newsletter</h2>

            <div class="main-wrapper" id="def">
              <div class="subscribe-wrapper">
                <p>
                  Subscribe to our newsletter for the latest updates, safety advice,
                  and educational content designed to keep you informed and
                  protected online. Join us in creating a safer social media
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
            <a href="Apps.php" class="footer-link">Media Apps</a>
          </li>

          <li>
            <a href="Livestream.php" class="footer-link" id="color">Livestreaming</a>
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
    - #GOOGLE TRANSLATE
  -->

  <div id="google_translate_element"></div>
  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElement"></script>

  <script type="text/javascript">
    function googleTranslateElement() {
      new google.translate.TranslateElement({
        pageLanguage: 'en'
      }, 'google_translate_element');
    }
  </script>

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