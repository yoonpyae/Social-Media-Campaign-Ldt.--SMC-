-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2024 at 12:54 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smc_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintb`
--

CREATE TABLE `admintb` (
  `AdminID` int(11) NOT NULL,
  `AdminName` varchar(30) DEFAULT NULL,
  `Username` varchar(30) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `PhoneNo` varchar(30) DEFAULT NULL,
  `ProfileImage1` varchar(255) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `Position` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admintb`
--

INSERT INTO `admintb` (`AdminID`, `AdminName`, `Username`, `Address`, `PhoneNo`, `ProfileImage1`, `Email`, `Password`, `Position`) VALUES
(1, 'Shoon Nandar', 'shoonshoon', 'No.66, Innwa st, Yangon', '095477585576', 'AdminData/665e9abc87dc0.jpg', 'sh00nnandar@gmail.com', 'shoon', 'Project Manager'),
(2, 'Wutt Hmone Oo', 'wutthmone', 'No.44, Yadanar st,Ygn', '093278436578', 'AdminData/665e975c01493_FANART.jpg', 'wutthmone@gmail.com', 'wutt', 'Administrator'),
(3, 'Su Lae', 'sulae', 'No.24, AwBr rd, Ygn', '095674875', 'AdminData/665d7be0e823e_download (2).jpg', 'sulae@gmai.com', 'susu', 'Campaigns Manager'),
(4, 'Kelvin', 'ke1vin', 'No.12, 23x12 st, Treasure Land, MM', '09895637485', 'AdminData/665e9e3b295e3_mink-mingle-g0Qdolm3K14-unsplash.jpg', 'ke1vin@gmail.com', 'K31vin!', 'Content Creator'),
(6, 'Trystan Gravelle', 'Trystan ', 'Trimsaran, United Kingdom', '0945794385', 'AdminData/6683c3a50027d_trysan_pf.jpg', 'tryvelle@gmail.com', 'Try5t@n', 'Content Creator');

-- --------------------------------------------------------

--
-- Table structure for table `campaigntb`
--

CREATE TABLE `campaigntb` (
  `CampaignID` int(11) NOT NULL,
  `CampaignName` varchar(30) DEFAULT NULL,
  `Aim` varchar(255) DEFAULT NULL,
  `Vision` varchar(255) DEFAULT NULL,
  `Fees` int(11) DEFAULT NULL,
  `Location` varchar(100) DEFAULT NULL,
  `StartDate` varchar(30) DEFAULT NULL,
  `EndDate` varchar(30) DEFAULT NULL,
  `Desciption` varchar(255) DEFAULT NULL,
  `CampaignImage1` varchar(255) DEFAULT NULL,
  `CampaignImage2` varchar(255) DEFAULT NULL,
  `CampaignImage3` varchar(255) DEFAULT NULL,
  `CampaignStatus` varchar(30) DEFAULT NULL,
  `MediaID` int(11) DEFAULT NULL,
  `CampaignTypeID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `campaigntb`
--

INSERT INTO `campaigntb` (`CampaignID`, `CampaignName`, `Aim`, `Vision`, `Fees`, `Location`, `StartDate`, `EndDate`, `Desciption`, `CampaignImage1`, `CampaignImage2`, `CampaignImage3`, `CampaignStatus`, `MediaID`, `CampaignTypeID`) VALUES
(1, 'Stay Safe', 'To raise awareness about personal safety and community protection through education, resources, and active participation.', 'A world where individuals are empowered with the knowledge and tools to ensure their own safety and the safety of others.', 0, 'Global (Primarily online with localized events)', '2024-06-10', '2024-06-10', 'The Stay Safe campaign is a comprehensive initiative aimed at promoting personal and community safety. ', 'AdminData/6666a3130a17f_young_people_online_india_1.jpg', 'AdminData/6666a3130b1e3_21-Internet-safety-for-youth-while-learning-online-image.jpg', 'AdminData/6666a3130b706_internet-safety.jpg', 'Active', 1, 4),
(2, 'Virtual Talent Show', 'To provide a platform for teenagers to showcase their talents in a fun and supportive virtual environment.', 'A vibrant community where teenagers can express their talents and connect with peers.', 20, 'Online, with live streaming of the talent show.', '2024-07-01', '2024-011-01', 'This campaign hosts a virtual talent show where teenagers can perform and showcase their unique skills. The winners receive prizes and featured spots on SMC’s social media channels.', 'AdminData/6666a9b304e8f_Virtual-Talent-Show-1024x1024.png', 'AdminData/6666a9b306956_VirtualTalentShow.png', 'AdminData/6666a9b307016_47c61183371d95ebe46510beb38ecb26.jpg', 'Pending', 3, 5),
(3, 'Cyberbullying Awareness', 'To educate teenagers about the dangers of cyberbullying and provide effective strategies to deal with it.', 'A safe online environment where teenagers can interact without fear of bullying.', 0, 'Online', '2023-06-15', '2025-12-31', 'This campaign focuses on raising awareness about cyberbullying. It includes resources like infographics explaining cyberbullying, blog posts with personal stories and links to support organizations.', 'AdminData/666d52612a723_d11n000-13ff517f-f958-4b2e-a15b-25007b91c065.jpg', 'AdminData/666d52612aea1_cyber-bullying.jpg', 'AdminData/666d52612bd80_Coty_rimmel_AI_cyberbullying_campaign_Springwise.jpg', 'Active', 5, 1),
(4, 'Digital Detox Program', 'To help teenagers develop healthier relationships with technology and social media through guided detox practices.', 'Balanced digital usage among teenagers, promoting better mental health and well-being.', 40, 'Online, with optional in-person retreats.', '2024-04-20', '2024-11-24', 'This program guides teenagers through a structured digital detox. It includes daily challenges, mindfulness activities and group support sessions. ', 'AdminData/666da3f70c0de_digital-detox.jpg', 'AdminData/666da3f70c78d_dijitaldetoks-anakapak.jpg', 'AdminData/666da3f70ce2e_digital-detox-mc-slide1.png', 'Active', 1, 8),
(5, 'Privacy Protection ', 'To teach teenagers how to protect their personal information online.', 'Empowered teenagers who can navigate social media platforms safely and securely.', 0, 'Online, accessible globally.', '2024-01-01', '2025-01-01', 'This campaign educates teenagers on the importance of privacy protection. It offers interactive tutorials, quizzes, printable checklists for maintaining privacy, and live Q&A sessions with privacy experts.', 'AdminData/666d94d75e9f7_2-Apples-Mail-Privacy-Protection-What-it-is-and-how-to-adapt-Copy-Copy-1024x411.jpg', 'AdminData/666d94d75f514_Privacy-Blog-V3.png', 'AdminData/666d94d760010_privacy-protection-banner-concept-vector.jpg', 'Active', 4, 2),
(6, 'Mental Health and Social Media', 'To address the impact of social media on mental health and provide strategies for maintaining a healthy balance.', 'Teenagers who use social media mindfully and maintain good mental health.', 0, 'Online, with resources and support available globally.', '2024-06-01', '2025-08-15', 'This campaign addresses the mental health impacts of social media. It provides infographics, personal stories, practical tips for managing social media use, and links to mental health support resources.', 'AdminData/666d96569d0d9_1690993325257.png', 'AdminData/666d9656a158a_maxresdefault.jpg', 'AdminData/666d9656a2680_How-Does-Social-Media-Affect-Mental-Health.png', 'Pending', 5, 8),
(7, 'Digital Literacy Bootcamp', 'To enhance digital literacy skills of teenagers, including media literacy, critical thinking, and responsible online behavior.', 'A generation of digitally literate teens who can navigate the digital world critically and responsibly.', 75, 'Hybrid (online and in select physical locations)', '2024-08-11', '2025-03-15', 'This bootcamp focuses on improving digital literacy among teenagers. It covers topics such as identifying fake news, understanding algorithms, evaluating online sources, and ethical digital citizenship. ', 'AdminData/666d9ae8a6256_1686750226838.jpg', 'AdminData/666d9ae8a664b_Digital-Literacy-Challenges-and-Opportunities.jpg', 'AdminData/666d9ae8a6af8_diglit-bootcam.png', 'Pending', 4, 2),
(8, 'Creative Content Course', 'To teach teenagers creative and safe content creation skills for various social media platforms.', 'Creative and responsible content creators who can effectively express themselves while maintaining online safety.', 55, 'Online, with live sessions and downloadable resources.', '2024-07-20', '2024-12-04', 'This course covers the basics of creative content creation, including photography, video editing, graphic design, and storytelling. It emphasizes safe practices and responsible sharing. The course features live tutorials, peer reviews, and a final creativ', 'AdminData/666d9cdd7166b_create-online-course-content-creation-online-course-course-outline-elearning-86ff.png', 'AdminData/666d9cdd7332a_content-creation-assets.png', 'AdminData/666d9cdd73982_create-online-course-and-course-creation.jpg', 'Pending', 1, 2),
(9, 'Trending Challenge', 'To engage teenagers in a fun and safe trending social media challenge that promotes creativity and community.', 'A positive online community where teenagers can participate in trending challenges safely and responsibly.', 10, 'Online, with the challenge being hosted on social media platforms.', '2024-03-18', '2024-08-09', 'This campaign invites teenagers to participate in a trending social media challenge. The challenge is designed to be fun and safe, encouraging creativity and positive interaction.', 'AdminData/666da0a87f355_May1-TikTok_Challenges_to_Inspire_Your_Next_Campaign-Feature-FL.png', 'AdminData/666da0a881db0_media_142ab05a2d4d24d54ee55e86789dbd830a1b53049.png', 'AdminData/666da0a8823d9_The-Viral-Challenge-for-Social-Media-Platforms-August-2022.png', 'Active', 3, 5),
(10, 'Safe Social Media Influencing ', 'To train aspiring teenage influencers on safe practices, content creation, and building a positive online presence.', 'Teen influencers who create positive, safe, and impactful content on social media.', 60, 'Online, with live interactive sessions.', '2024-09-18', '2024-10-06', 'This workshop is designed for teenagers aspiring to become influencers. It covers safe content creation, brand collaboration, managing online criticism, and building a positive personal brand. The workshop includes guest speakers, practical assignments, a', 'AdminData/666da2378caa2_Social-Media-Safety-Tips-For-Kids10-Tips-For-Parents.jpg', 'AdminData/666da2378d971_workshop-social-media-safety.jpg', 'AdminData/666da2378ddcb_header-T-SSO_0.png', 'Pending', 6, 2),
(12, 'Holiday Safety and Wellness', 'To promote safety, well-being, and responsible online behavior among teenagers during the holiday season.', 'A festive and safe holiday season where teenagers can enjoy social media responsibly.', 0, 'Online, with activities and resources accessible globally.', '2024-08-20', '2023-06-20', 'This campaign focuses on promoting safety, mental well-being and responsible online behavior among teenagers. It includes daily tips on holiday safety such as cybersecurity during online shopping.', 'AdminData/66746513b0c7c_Digital-citizenship-narrow.jpg', 'AdminData/66746513b3287_v2-header-1200x600-1.png', 'AdminData/66746513b35d3_t-t-4962-online-safety-for-kids-powerpoint_ver_7.jpg', 'Active', 5, 4),
(13, 'Digital Citizenship Awareness ', 'To educate teenagers about the importance of digital citizenship and responsible online behavior.', 'An informed generation of teenagers who prioritize ethical and safe practices in their online interactions.', 0, 'Online, accessible globally.', '2024-10-01', '2025-03-20', 'This campaign aims to raise awareness about digital citizenship among teenagers. It focuses on educating them about ethical online behavior, respecting others digital rights, protecting personal information, and understanding the consequences of online.', 'AdminData/667466d4ef036_digital-citizenship-youth.png', 'AdminData/667466d4ef823_Digital-Citizenship.jpg', 'AdminData/667466d4f0808_PREMS 119723 DCE Leaflet_Easy steps for educators_eng 1 for news piece.jpg', 'Pending', 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `campaigntypetb`
--

CREATE TABLE `campaigntypetb` (
  `CampaignTypeID` int(11) NOT NULL,
  `CampaignTypeName` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `campaigntypetb`
--

INSERT INTO `campaigntypetb` (`CampaignTypeID`, `CampaignTypeName`) VALUES
(1, 'Awareness'),
(2, 'Education'),
(4, 'Holiday'),
(5, 'Entertainment '),
(8, 'Supportive');

-- --------------------------------------------------------

--
-- Table structure for table `customertb`
--

CREATE TABLE `customertb` (
  `CustomerID` int(11) NOT NULL,
  `FirstName` varchar(30) DEFAULT NULL,
  `Surname` varchar(30) DEFAULT NULL,
  `Username` varchar(30) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `PhoneNo` varchar(30) DEFAULT NULL,
  `ProfileImage` varchar(255) DEFAULT NULL,
  `RegistrationMonth` varchar(30) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customertb`
--

INSERT INTO `customertb` (`CustomerID`, `FirstName`, `Surname`, `Username`, `Address`, `PhoneNo`, `ProfileImage`, `RegistrationMonth`, `Email`, `Password`) VALUES
(1, 'Yoon', 'Enola', 'yen0la', 'No.123, Inn Wa Streert, YGN', '0949758345', 'CustomerData/6666b69db501f.jpg', 'June', 'yenola@gmail.com', ' Yelona1!'),
(2, 'Kevin', 'Durant', 'Kevin ', ' Washington, D.C., United States', '0949758345', 'CustomerData/6674104bb27f9_clark-van-der-beken-vZ257hxat1w-unsplash.jpg', 'June', 'Kevin@gmail.com', ' Kevin21!'),
(3, 'Kobe ', 'Bryant', 'kobe', 'Philadelphia, Pennsylvania, United States', '09123684', 'CustomerData/667411d3dfdbc_images.jpg', 'March', 'kbryant@gmail.com', ' Kobe038!'),
(4, 'Kristen ', 'Jaymes Stewart', 'Jay', 'California, United States', '095848358', 'CustomerData/668408b94353f_Jay_pf.jpg', 'July', 'kristen@gmail.com', ' J@yme5zz'),
(5, 'Nicola ', 'Coughlan', 'Nicola_c', 'Galway, Ireland', '094358743', 'CustomerData/6687a765ad863_Nicola_pf.jpg', 'June', 'nicola@gmail.com', ' Nic01@C0'),
(6, 'Phoebe ', 'Dynevor', 'phoebe_space', 'Trafford, United Kingdom', '0984632874', 'CustomerData/6687a83491f02_phoebe_pf.jpg', 'June', 'ph0ebe@gamil.com', ' Ph0e9e$v'),
(7, 'Simone ', 'Ashley', 'urAshely', 'Camberley, United Kingdom', '094946545', 'CustomerData/6687a8b1e3287_Ashley_pf.jpg', 'June', 'simone@gmail.com', ' $1m0neA$'),
(8, 'Regé-Jean', 'Page', 'Pageofyou', 'London, United Kingdom', '099047546', 'CustomerData/6687aa16cccb2_Page_pf.jpg', 'June', 'Jean@gamil.com', ' Je@n9a6e'),
(9, 'Luke ', 'Newton', 'Future_newton', 'Brighton and Hove, United Kingdom', '099854835', 'CustomerData/6687aa9539e97_Luke_pf.jpg', 'June', 'Luke@gamil.com', ' Newt0n!K'),
(11, 'Charithra  ', 'Chandran ', 'ccDran ', 'Perth, United Kingdom ', '0934098534', 'CustomerData/6689782aa7ee6_Chan_pf.jpg', 'July', 'ChanCC@gmail.com', ' Ch@nCh@1');

-- --------------------------------------------------------

--
-- Table structure for table `mediatb`
--

CREATE TABLE `mediatb` (
  `MediaID` int(11) NOT NULL,
  `MediaName` varchar(30) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `MediaImage` varchar(255) DEFAULT NULL,
  `MediaLink` varchar(255) DEFAULT NULL,
  `Rating` varchar(30) DEFAULT NULL,
  `Techniques` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mediatb`
--

INSERT INTO `mediatb` (`MediaID`, `MediaName`, `Description`, `MediaImage`, `MediaLink`, `Rating`, `Techniques`) VALUES
(1, ' Facebook', 'Facebook is a social networking website that was founded in February 2004. The idea behind Facebook was to provide an online book of faces for university students to connect and share information.', 'Images/665eef4f48826_facebook (1).png', 'https://www.facebook.com/', '★ ★ ★', 'Privacy Checkup, Two-Factor Authentication (2FA), Review App Permissions, Audience Selector, Location Settings'),
(3, ' TikTok', 'TikTok is a social media platform for creating, sharing and discovering short videos.', 'Images/6666a7e4cf083_tiktok.png', 'https://www.tiktok.com/', '★ ★ ★ ★', 'Private Account, Family Pairing, Restricted Mode, Comments Control, Screen Time Management'),
(4, ' YouTube', 'Youtube is a very popular and free video sharing website that allows registered users to upload and share video clips online. To watch the videos it is not mandatory to register. Launched in 2005 by former employees of PayPal, it was acquired by Google In', 'Images/666d459ecae8f_youtube.png', 'https://www.youtube.com/', '★ ★ ★ ★', 'Two-Factor Authentication (2FA), Private Videos, Channel Privacy, Comments Control, Content Reporting, YouTube Kids'),
(5, ' Instagram', 'Instagram is a free photo and video sharing app available on iPhone and Android. People can upload photos or videos to our service and share them with their followers or with a select group of friends.', 'Images/666d487db4b03_instagram.png', 'https://www.instagram.com/', '★ ★ ★ ★ ★', 'Private Account, Two-Factor Authentication (2FA), Activity Status, Comments Control, Tag Approval'),
(6, ' WhatsApp', 'WhatsApp is an instant messaging and voice-over-IP service owned by technology conglomerate Meta. It allows users to send text, voice messages and video messages, make voice and video calls, and share images, documents, user locations, and other content.', 'Images/666d48be2d922_whatsapp.png', 'https://www.WhatsApp.com/', '★ ★ ★ ★', 'Two-Step Verification, Privacy Settings, End-to-End Encryption, Group Settings, Report and Block'),
(8, ' Snapchat', 'Snapchat is an app that empowers people to express themselves, live in the moment, learn about the world, and have fun together.', 'Images/667bda64f02f1_snapchat.png', 'https://www.snapchat.com/', '★ ★ ★ ★', 'Ghost Mode, Two-Factor Authentication (2FA), Privacy Settings, Friend Requests, Screen Recording Notification'),
(9, ' Twitter', 'Twitter is a free social networking site where users broadcast short posts known as tweets. ', 'Images/667bdf7ad0e08_twitter.png', 'https://x.com/home?lang=en', '★ ★ ★ ★', 'Protect Tweets, Two-Factor Authentication (2FA), Content Filtering, Login Verification, Third-Party Apps'),
(11, ' Discord', 'Discord is an instant messaging and VoIP social platform which allows communication through voice calls, video calls, text messaging, and media and files. Communication can be private or take place in virtual communities called \"servers\"', 'Images/6683e8725417b_discord.png', 'https://discord.com/', '★ ★ ★ ★ ★', 'Text and Voice Channels, File Sharing, Embedded Media, Screen Sharing and Video Calls, Custom Emojis and Reactions');

-- --------------------------------------------------------

--
-- Table structure for table `rssfeed`
--

CREATE TABLE `rssfeed` (
  `RssFeedID` int(11) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Description` varchar(150) NOT NULL,
  `URL` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rssfeed`
--

INSERT INTO `rssfeed` (`RssFeedID`, `Title`, `Description`, `URL`) VALUES
(1, 'Home Page', 'This is a home page and it describes visitors to the campaign and includes relevant images of social media apps and risks to teenagers.', 'http://localhost/Social%20Media%20Campaigns/Home.php'),
(2, 'Information', 'This is a Information page and it will provide details of the social media campaigns and their aims and vision to keep teenagers safe online.', 'http://localhost/Social%20Media%20Campaigns/Infomation.php'),
(3, 'Most Popular Social Media Apps', 'This is a Most Popular Social Media Apps page. It allows customers to search the\r\nonline database for the latest techniques to stay safe.', 'http://localhost/Social%20Media%20Campaigns/Apps.php'),
(4, 'Livestreaming', 'This is a Livestreaming page. It will provide an overview of livestreaming and how it can be done in a safe environment.', 'http://localhost/Social%20Media%20Campaigns/Livestream.php'),
(5, 'How Parents Can Help', 'This is a How Parents Can Help page. It provides top tips that parents can use to support healthy teen use of social media.', 'http://localhost/Social%20Media%20Campaigns/Parents.php'),
(6, 'Legislation and Guidance', 'This is a Legislation and Guidance page. It provides the details of relevant legislation and best practice guidance relating to online social media.', 'http://localhost/Social%20Media%20Campaigns/Guidance.php'),
(7, 'Contact Us', 'This is a contact form where customers can send messages through the website.', 'http://localhost/Social%20Media%20Campaigns/Contact.php');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admintb`
--
ALTER TABLE `admintb`
  ADD PRIMARY KEY (`AdminID`);

--
-- Indexes for table `campaigntb`
--
ALTER TABLE `campaigntb`
  ADD PRIMARY KEY (`CampaignID`),
  ADD KEY `MediaID` (`MediaID`),
  ADD KEY `CampaignTypeID` (`CampaignTypeID`);

--
-- Indexes for table `campaigntypetb`
--
ALTER TABLE `campaigntypetb`
  ADD PRIMARY KEY (`CampaignTypeID`);

--
-- Indexes for table `customertb`
--
ALTER TABLE `customertb`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `mediatb`
--
ALTER TABLE `mediatb`
  ADD PRIMARY KEY (`MediaID`);

--
-- Indexes for table `rssfeed`
--
ALTER TABLE `rssfeed`
  ADD PRIMARY KEY (`RssFeedID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admintb`
--
ALTER TABLE `admintb`
  MODIFY `AdminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `campaigntb`
--
ALTER TABLE `campaigntb`
  MODIFY `CampaignID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `campaigntypetb`
--
ALTER TABLE `campaigntypetb`
  MODIFY `CampaignTypeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customertb`
--
ALTER TABLE `customertb`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `mediatb`
--
ALTER TABLE `mediatb`
  MODIFY `MediaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `rssfeed`
--
ALTER TABLE `rssfeed`
  MODIFY `RssFeedID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `campaigntb`
--
ALTER TABLE `campaigntb`
  ADD CONSTRAINT `campaigntb_ibfk_1` FOREIGN KEY (`MediaID`) REFERENCES `mediatb` (`MediaID`),
  ADD CONSTRAINT `campaigntb_ibfk_2` FOREIGN KEY (`CampaignTypeID`) REFERENCES `campaigntypetb` (`CampaignTypeID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
