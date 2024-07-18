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

    <main class="parents">
        <section class="section how-parents-can-help container">
            <h2 class="h2 section-title underline">How Parents Can Help</h2>
            <p>
                Supporting healthy teen use of social media can be challenging, but
                there are several effective strategies parents can use to ensure their
                teenagers have a safe and positive experience online.
            </p>
            <div class="tips">
                <div class="tip">
                    <img src="img/8486.jpg" alt="Family discussion" />
                    <h3>Have Open Discussions</h3>
                    <p>
                        Talk to your teens about their online activities. Encourage them
                        to share their experiences and be open about any issues they face.
                    </p>
                </div>
                <div class="tip">
                    <img src="img/4897746.jpg" alt="Parent setting screen time" />
                    <h3>Set Screen Time Limits</h3>
                    <p>
                        Help your teens balance their screen time by setting reasonable
                        limits and encouraging offline activities.
                    </p>
                </div>
                <div class="tip">
                    <img src="img/2306.jpg" alt="Parent monitoring social media" />
                    <h3>Monitor Their Social Media Use</h3>
                    <p>
                        Stay informed about the platforms your teens use. Regularly check
                        their profiles and the content they are engaging with.
                    </p>
                </div>
                <div class="tip">
                    <img src="img/19199202.jpg" alt="Parent educating about privacy" />
                    <h3>Educate About Privacy</h3>
                    <p>
                        Teach your teens about the importance of privacy settings and how
                        to protect their personal information online.
                    </p>
                </div>
                <div class="tip">
                    <img src="img/3365144.jpg" alt="Parent being a role model" />
                    <h3>Be a Role Model</h3>
                    <p>
                        Set a good example by practicing healthy social media habits
                        yourself. Your behavior can influence your teens' online behavior.
                    </p>
                </div>
                <div class="tip">
                    <img src="img/3753486.jpg" alt="Family setting rules" />
                    <h3>Establish Rules</h3>
                    <p>
                        Create clear guidelines and rules for social media use, including
                        acceptable behavior and consequences for misuse.
                    </p>
                </div>
                <div class="tip">
                    <img src="img/1242834638.jpg" alt="Parent using security settings" />
                    <h3>Use Security Settings</h3>
                    <p>
                        Ensure that your teens' accounts are secure by using strong
                        passwords and enabling two-factor authentication.
                    </p>
                </div>
                <div class="tip">
                    <img src="img/3720274.jpg" alt="Parent discussing online dangers" />
                    <h3>Discuss Online Dangers</h3>
                    <p>
                        Inform your teens about the potential dangers online, including
                        cyberbullying, predators, and inappropriate content.
                    </p>
                </div>
                <div class="tip">
                    <img src="img/475842.jpg" alt="Parent encouraging critical thinking" />
                    <h3>Encourage Critical Thinking</h3>
                    <p>
                        Teach your teens to think critically about the information they
                        see online and to verify facts before believing or sharing them.
                    </p>
                </div>
                <div class="tip">
                    <img src="img/9596540.jpg" alt="Parent providing support" />
                    <h3>Provide Emotional Support</h3>
                    <p>
                        Be there for your teens emotionally. Let them know they can come
                        to you with any problems or concerns they have about their online
                        experiences.
                    </p>
                </div>
            </div>
        </section>

        <section class="">
            <div class="faq-container container">
                <h1>Frequently Asked Questions</h1>
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleAnswer(this)">
                        <span>How can I monitor my teen's social media use without invading their privacy?</span>
                        <span class="arrow">↓</span>
                    </div>
                    <div class="faq-answer">
                        <p>Open communication is key. Let your teen know why you want to monitor their social media and
                            set mutual expectations. Use monitoring tools responsibly and encourage your teen to share
                            their experiences with you.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleAnswer(this)">
                        <span>What are the signs of social media addiction?</span>
                        <span class="arrow">↓</span>
                    </div>
                    <div class="faq-answer">
                        <p>Signs include excessive time spent on social media, neglecting offline relationships, mood
                            changes when not online, and a decline in academic performance or interest in hobbies.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleAnswer(this)">
                        <span>How can I protect my teen from cyberbullying?</span>
                        <span class="arrow">↓</span>
                    </div>
                    <div class="faq-answer">
                        <p>Encourage your teen to talk about their online experiences. Teach them how to block and
                            report bullies, and keep an open line of communication to support them if they face
                            bullying.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleAnswer(this)">
                        <span>What privacy settings should I teach my teen to use?</span>
                        <span class="arrow">↓</span>
                    </div>
                    <div class="faq-answer">
                        <p>Ensure they know how to make their profiles private, control who can see their posts, and
                            manage friend requests. Regularly review these settings with them.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleAnswer(this)">
                        <span>How much screen time is appropriate for teenagers?</span>
                        <span class="arrow">↓</span>
                    </div>
                    <div class="faq-answer">
                        <p>It varies, but generally, no more than 1-2 hours of recreational screen time per day is
                            recommended. Balance screen time with offline activities and family interactions.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleAnswer(this)">
                        <span>What should I do if my teen encounters inappropriate content?</span>
                        <span class="arrow">↓</span>
                    </div>
                    <div class="faq-answer">
                        <p>Discuss the content with your teen and explain why it is inappropriate. Use parental controls
                            and encourage your teen to report such content on the platform.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question" onclick="toggleAnswer(this)">
                        <span>What are the risks of sharing personal information online?</span>
                        <span class="arrow">↓</span>
                    </div>
                    <div class="faq-answer">
                        <p>Risks include identity theft, cyberbullying, and unwanted contact from strangers. Teach your
                            teen to limit the personal information they share and to use strong privacy settings.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question" onclick="toggleAnswer(this)">
                        <span>What should I do if my teen becomes secretive about their social media use?</span>
                        <span class="arrow">↓</span>
                    </div>
                    <div class="faq-answer">
                        <p>Approach the topic calmly and express your concern. Try to understand their perspective and
                            reassure them that your intention is to support and protect them.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- 
        - #Review
      -->

        <section class="section Review" id="Review">
            <div class="container">
                <h2 class="h2 section-title underline">Parents Reviews</h2>

                <ul class="Review-list">
                    <li>
                        <div class="Review-card">
                            <figure class="banner">
                                <a href="#">
                                    <img src="./img/man.png" width="750" height="350" loading="lazy" alt="a parent"
                                        class="img-cover" />
                                </a>
                            </figure>

                            <div class="content">
                                <h3 class="h3 title">
                                    <a href="#">
                                        Jane Smith
                                    </a>
                                </h3>

                                <p class="text">
                                    My teenage son has become much more aware of the potential risks online, and I feel
                                    much more confident about his internet usage beacuse of SMC.
                                </p>

                                <div class="meta">
                                    <div class="publish-date">
                                        <ion-icon name="time-outline"></ion-icon>

                                        <time datetime="2022-03-07">7 March, 2024</time>
                                    </div>

                                    <button class="comment" aria-label="Comment">
                                        <ion-icon name="chatbubble-outline"></ion-icon>

                                        <data value="15">15</data>
                                    </button>

                                    <button class="share" aria-label="Share">
                                        <ion-icon name="share-social-outline"></ion-icon>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="Review-card">
                            <figure class="banner">
                                <a href="#">
                                    <img src="./img//boy.png" width="750" height="350" loading="lazy"
                                        alt="Quisque egestas iaculis felis eget placerat ut pulvinar mi."
                                        class="img-cover" />
                                </a>
                            </figure>

                            <div class="content">
                                <h3 class="h3 title">
                                    <a href="#">
                                        Robert Johnson
                                    </a>
                                </h3>

                                <p class="text">
                                    As a parent, I was constantly worried about my daughter's online activities. After
                                    discovering SMC, I learned about the tools and strategies to help her navigate
                                    social media safely.
                                </p>

                                <div class="meta">
                                    <div class="publish-date">
                                        <ion-icon name="time-outline"></ion-icon>

                                        <time datetime="2022-03-07">7 March, 2024</time>
                                    </div>

                                    <button class="comment" aria-label="Comment">
                                        <ion-icon name="chatbubble-outline"></ion-icon>

                                        <data value="15">15</data>
                                    </button>

                                    <button class="share" aria-label="Share">
                                        <ion-icon name="share-social-outline"></ion-icon>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="Review-card">
                            <figure class="banner">
                                <a href="#">
                                    <img src="./img/man1.png" width="750" height="350" loading="lazy"
                                        alt="Fusce sem ligula, imperdiet sed nisi sit amet, euismod posuere."
                                        class="img-cover" />
                                </a>
                            </figure>

                            <div class="content">
                                <h3 class="h3 title">
                                    <a href="#">
                                        Linda Martinez
                                    </a>
                                </h3>

                                <p class="text">
                                    SMC's newsletters are a great way to stay updated on the latest trends and safety
                                    tips in the digital world.
                                </p>

                                <div class="meta">
                                    <div class="publish-date">
                                        <ion-icon name="time-outline"></ion-icon>

                                        <time datetime="2022-03-07">7 March, 2024</time>
                                    </div>

                                    <button class="comment" aria-label="Comment">
                                        <ion-icon name="chatbubble-outline"></ion-icon>

                                        <data value="15">15</data>
                                    </button>

                                    <button class="share" aria-label="Share">
                                        <ion-icon name="share-social-outline"></ion-icon>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="Review-card">
                            <figure class="banner">
                                <a href="#">
                                    <img src="./img/man3.png" width="750" height="350" loading="lazy"
                                        alt="Donec feugiat mollis nisi in dignissim. Morbi sollicitudin quis."
                                        class="img-cover" />
                                </a>
                            </figure>

                            <div class="content">
                                <h3 class="h3 title">
                                    <a href="#">
                                        Michael Brown
                                    </a>
                                </h3>

                                <p class="text">
                                    "The campaigns and educational materials from SMC have made a significant difference
                                    in how our family approaches social media. Thank you, SMC, for your incredible
                                    work!"
                                </p>

                                <div class="meta">
                                    <div class="publish-date">
                                        <ion-icon name="time-outline"></ion-icon>

                                        <time datetime="2022-03-07">7 March, 2024</time>
                                    </div>

                                    <button class="comment" aria-label="Comment">
                                        <ion-icon name="chatbubble-outline"></ion-icon>

                                        <data value="15">15</data>
                                    </button>

                                    <button class="share" aria-label="Share">
                                        <ion-icon name="share-social-outline"></ion-icon>
                                    </button>
                                </div>
                            </div>
                        </div>
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
                        <a href="Parents.php" class="footer-link" id="color">Parents Help</a>
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

        function toggleAnswer(element) {
            const faqItem = element.parentElement;
            const answer = faqItem.querySelector('.faq-answer');
            const arrow = faqItem.querySelector('.arrow');

            if (answer.style.display === "block") {
                answer.style.display = "none";
                arrow.innerHTML = "↓";
            } else {
                answer.style.display = "block";
                arrow.innerHTML = "↑";
            }
        }
    </script>
</body>

</html>