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
  <title>SMC - Legislation and Guidance</title>

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

  <header class="header " data-header>
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
              <!--  <a href="SignIn.php"  class="navbar-link" data-navbar-link> Sign In <i class="ri-user-fill"></i></a>  -->
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
    <section class="intro container">
      <div class="intro-img">
        <img src="img/law-and-order.png" alt="Introduction Image" />
      </div>
      <div class="intro-text">
        <h2>Legislation and Guidance</h2>
        <p>
          In this page, you will find detailed information on relevant
          legislation and best practice guidance to ensure safe and
          responsible use of social media platforms.
        </p>
      </div>
    </section>

    <section id="legislation">
      <div class="container leg-container">
        <h2>Why social media legislation and guidance are important</h2>
        <article id="imp">
          <p>
            Social media legislation and guidance ensure online safety and
            fairness. These rules protect users from cyberbullying,
            harassment, hate speech, and misinformation. They also want people
            and businesses to use social media responsibly without violating
            others' rights or being deceptive.
          </p>
          <br />

          <p>
            Social media platforms are powerful tools that can shape public
            opinion and narratives. Social media posts can reach millions of
            people worldwide. Thus, regulations are needed to protect these
            platforms and prevent the spread of harmful or misleading
            information with real-world consequences.
          </p>
          <br />

          <p>
            Social media legislation and guidance are both legal and moral. By
            doing so, individuals and businesses can promote a healthier
            online culture, meaningful connections, and a positive digital
            presence.
          </p>
        </article>
      </div>

      <div class="container leg-container">
        <h2>Data Protection Laws</h2>
        <article id="dsm">
          <strong>General Data Protection Regulation (GDPR)</strong> <span>
            &nbsp; &nbsp; This European law protects personal data and privacy for all individuals within the EU. It
            gives
            users control over their personal information and imposes strict rules on how companies handle this data.
          </span> <br>
          <strong>Children's Online Privacy Protection Act (COPPA)</strong> <span>
            &nbsp; &nbsp; This U.S. law aims to protect the privacy of children under 13 by regulating how websites and
            online services collect, use, and disclose their information. </span>
        </article>
      </div>

      <div class="container leg-container">
        <h2>Cyberbullying and Harassment Laws</h2>
        <article id="dsm">
          <strong>Anti-Cyberbullying Legislation</strong> <span> &nbsp; &nbsp; Various countries have laws that
            criminalize online harassment and bullying. These laws provide legal recourse for victims and outline
            penalties for perpetrators.</span> <br>
          <strong>Online Harassment Laws</strong> <span> &nbsp; &nbsp;Laws that address stalking, harassment,
            and threats made through digital platforms, providing protection for victims and penalties for
            offenders.</span>
        </article>
      </div>

      <div class="container leg-container">
        <h2>Intellectual Property Laws</h2>
        <article id="dsm">
          <strong>Copyright Laws</strong> <span> &nbsp; &nbsp; These laws protect the rights of content creators
            by regulating how their works can be used and shared online. Understanding fair use policies and avoiding
            copyright infringement is essential.</span>

        </article>
      </div>
    </section>


    <section class="section container " id="about-container">
      <h2 class="h2 section-title underline">Best Practice Guidance</h2>
      <section class="about">
        <div class="container " id="resources">
          <figure class="about-banner">

            <h2>Digital Citizenship and Social Media Guidelines</h2>
            <p class="about-text">
              These guidelines provide a framework for responsible and ethical behavior online. <br>
            <ul>
              <li><strong>Respect:</strong> Users should treat others with respect and avoid cyberbullying.</li>
              <li><strong>Privacy:</strong> Users should protect their own privacy and respect the privacy of others.
              </li>
              <li><strong>Security:</strong> Users should be aware of security risks and take steps to protect their
                accounts and personal information.</li>
            </ul>
          </figure>

          <div class="about-content">
            <h2 class="">Social Media Platform Policies</h2>
            <p class="about-text">
              Each social media platform has its own set of policies and community guidelines. <br>
            <ul>
              <li><strong>Content Standards:</strong> Guidelines on what content is prohibited (e.g., hate speech,
                violence, adult content).</li>
              <li><strong>Reporting Mechanisms:</strong> Tools for users to report inappropriate content.</li>
              <li><strong>Enforcement:</strong> Consequences for violating platform policies, including account
                suspension or removal.</li>
            </ul>
            </p>
          </div>
        </div>
      </section>
    </section>

    <section id="legislation">
      <div class="container leg-container">
        <h2 class=" underline">Social Media Specific Legislation and Guidance</h2>
        <h2>Facebook</h2>
        <article id="btp">
          <h4>Community Standards</h4>
          • &nbsp;<strong>Overview :</strong>
          &nbsp; &nbsp; Facebook’s community standards outline acceptable behavior and content on the platform. They
          cover issues like hate speech, violence, and nudity to ensure a safe and respectful environment.
          •&nbsp;<strong>Detailed Policies :</strong>
          &nbsp; &nbsp;Specific rules regarding misinformation, harmful content, and spam.
          <br> <br>
          <h4>Data Policy</h4>
          •&nbsp;<strong>Privacy :</strong> &nbsp; &nbsp; Explanation of how Facebook collects, uses, and shares
          user data. Tips on adjusting privacy settings to control who can see your information. <br>
          • &nbsp;<strong>Security :</strong> &nbsp; &nbsp;Measures Facebook takes to protect your data and how you
          can enhance your account security.
          <br> <br>
          <h4>Reporting</h4>
          •&nbsp;<strong>Privacy :</strong> &nbsp; &nbsp; How to report inappropriate content, bullying, or
          harassment. Steps for blocking or unfriending users who violate community standards.<br>
          • &nbsp;<strong>Safety Tools :</strong> &nbsp; &nbsp; Features like two-factor authentication and security
          checkups to keep your account safe.
        </article>
      </div>


      <div class="container leg-container">
        <h2>Instagram</h2>
        <article id="btp">
          <h4>Community Standards</h4>
          • &nbsp;<strong>Overview</strong>
          &nbsp; &nbsp; Instagram’s guidelines for acceptable content and interactions, including rules against hate
          speech, harassment, and graphic violence. <br>
          •&nbsp;<strong>Specific Policies</strong>
          &nbsp; &nbsp;Details on handling misinformation, self-harm content, and spam.
          <br> <br>
          <h4>Privacy and Security Center</h4>
          •&nbsp;<strong>Privacy</strong> &nbsp; &nbsp; Information on how to manage your privacy settings,
          control who can see your posts, and manage data sharing. <br>
          • &nbsp;<strong>Security</strong> &nbsp; &nbsp;Tips for securing your account, including strong
          passwords and recognizing phishing attempts. <br>
          <br>
          <h4>Resources for Parents and Teens</h4>
          •&nbsp;<strong>Guidance</strong> &nbsp; &nbsp; Educational materials and tools designed to help young
          users and their parents navigate Instagram safely. Tips on setting up parental controls and discussing
          online safety.
        </article>
      </div>

      <div class="container leg-container">
        <h2>Twitter</h2>
        <article id="btp">
          <h4>Twitter Rules</h4>
          • &nbsp;<strong>Overview :</strong>
          &nbsp; &nbsp; Twitter’s rules on behavior and content, including prohibitions on hate speech, violence, and
          harassment. <br>
          •&nbsp;<strong>Detailed Policies :</strong>
          &nbsp; &nbsp;Specific guidelines for political content, misinformation, and sensitive media. <br>
          <br>
          <h4>Privacy Policy</h4>
          •&nbsp;<strong>Data Use :</strong> &nbsp; &nbsp; How Twitter collects, uses, and shares personal
          information. Instructions on adjusting your privacy settings. <br>
          • &nbsp;<strong>Security :</strong> &nbsp; &nbsp;Steps to protect your account, such as enabling
          two-factor authentication and recognizing suspicious activity. <br>
          <br>
          <h4>Safety and Security</h4>
          •&nbsp;<strong>Reporting :</strong> &nbsp; &nbsp; How to report abusive behavior, spam, or harmful
          content. Blocking and muting features to manage your interactions.
          <br>
          •&nbsp;<strong>Safety Features :</strong> &nbsp; &nbsp; Tools for protecting your account and personal
          information, including advanced security settings.
        </article>
      </div>

      <div class="container leg-container">
        <h2>YouTube</h2>
        <article id="cdl">
          <h4>Community Guidelines</h4>
          • &nbsp;<strong>Overview :</strong>
          &nbsp; &nbsp; YouTube’s guidelines for content creators and viewers, addressing issues like hate speech,
          harassment, and explicit content. <br>
          •&nbsp;<strong>Specific Policies :</strong>
          &nbsp; &nbsp;Rules for monetization, advertiser-friendly content, and dealing with copyright claims. <br>
          <br>
          <h4>Privacy and Safety</h4>
          •&nbsp;<strong>Privacy :</strong> &nbsp; &nbsp; How to manage your privacy settings and control data sharing
          on YouTube. Tips for keeping your account secure. <br>
          • &nbsp;<strong>Safety Tools :</strong> &nbsp; &nbsp;Features like restricted mode, comment moderation, and
          reporting tools to enhance safety. <br>
          <br>
          <h4>YouTube Kids</h4>
          •&nbsp;<strong>Content Guidelines :</strong> &nbsp; &nbsp; Specific rules for content on YouTube Kids to
          ensure it is suitable for young audiences.
          <br>
          •&nbsp;<strong>Parental Controls :</strong> &nbsp; &nbsp; Tools and settings for parents to manage what their
          children can watch and interact with.
        </article>
      </div>
    </section>

    <section id="legislation">
      <div class="container leg-container">
        <h2>Conclusion</h2>
        <article>
          <p>
            Staying informed about legislation and following best practices
            can help individuals and organizations navigate the complexities
            of social media responsibly. We encourage you to stay updated and
            adhere to these guidelines.
          </p>
          <br />
          <p>
            Navigating social media laws and regulations is crucial for
            businesses and individuals using these platforms. By understanding
            and complying with these laws, you can ensure a safe and
            responsible social media presence while avoiding any potential
            legal consequences. The key is to be aware of defamation laws,
            respect intellectual property rights, protect user privacy and
            data, adhere to advertising guidelines, and avoid engaging in
            online harassment or cyberbullying.
          </p>
        </article>
      </div>
    </section>



    <section id="resources">
      <div class="container leg-container">
        <h2>Additional Resources</h2>
        <ul>
          <h4> Links to Official Policies</h4>
          <li> <strong> &nbsp; Facebook :</strong>
            <a href="https://www.facebook.com/communitystandards">
              Facebook Community Standards</a>
          </li>
          <li> <strong> &nbsp; Instagram :</strong>
            <a href="https://www.facebook.com/communitystandards">
              Instagram Community Guidelines</a>
          </li>
          <li> <strong> &nbsp; Twitter :</strong>
            <a href="https://www.facebook.com/communitystandards">
              Twitter Rules</a>
          </li>
          <li> <strong> &nbsp; YouTube :</strong>
            <a href="https://www.facebook.com/communitystandards">
              YouTube Community Guidelines</a>
          </li>


        </ul>
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
            <a href="Apps.php" class="footer-link">Media Apps</a>
          </li>

          <li>
            <a href="Livestream.php" class="footer-link">Livestreaming</a>
          </li>

          <li>
            <a href="Parents.php" class="footer-link">Parents Help</a>
          </li>

          <li>
            <a href="Guidance.php" class="footer-link" id="color">Legi & Guid</a>
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