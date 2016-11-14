-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2016 at 09:13 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sanepie`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin9108`
--

CREATE TABLE `admin9108` (
  `name` varchar(100) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin9108`
--

INSERT INTO `admin9108` (`name`, `username`, `password`) VALUES
('Guest User', 'guest', 'guest2016');

-- --------------------------------------------------------

--
-- Table structure for table `sanesearch1`
--

CREATE TABLE `sanesearch1` (
  `name` varchar(200) DEFAULT NULL,
  `url` varchar(250) NOT NULL,
  `country` varchar(150) DEFAULT NULL,
  `city` varchar(150) DEFAULT NULL,
  `keyword1` varchar(1500) DEFAULT NULL,
  `keyword2` varchar(1500) DEFAULT NULL,
  `keyword3` varchar(1500) DEFAULT NULL,
  `keyword4` varchar(1500) DEFAULT NULL,
  `keyword5` varchar(1500) DEFAULT NULL,
  `keyword6` varchar(1500) DEFAULT NULL,
  `keyword7` varchar(1500) DEFAULT NULL,
  `keyword8` varchar(1500) DEFAULT NULL,
  `keyword9` varchar(1500) DEFAULT NULL,
  `keyword10` varchar(1500) DEFAULT NULL,
  `keyword11` varchar(1500) DEFAULT NULL,
  `keyword12` varchar(1500) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sanesearch1`
--

INSERT INTO `sanesearch1` (`name`, `url`, `country`, `city`, `keyword1`, `keyword2`, `keyword3`, `keyword4`, `keyword5`, `keyword6`, `keyword7`, `keyword8`, `keyword9`, `keyword10`, `keyword11`, `keyword12`) VALUES
('AliExpress (China)', 'www.aliexpress.com', 'China', '', 'chinese alibaba online retail service international buyers buy sell ecommerce shopping internatinal', 'shipping products', '', '', '', '', '', '', '', '', '', ''),
('Amazon (USA)', 'www.amazon.com', '', '', 'shopping online ecommerce buy sell electronics store cloud computing web hosting watch', 'tv mobile laptop laptops computer computers ac clothes shoes kindle fire dvds', 'movies tv shows show furniture books books toys toy jewelry food dvd', 'video games books software book read rg vg ag', '', '', '', '', '', '', '', ''),
('Amazon (India)', 'www.amazon.in', 'India', '', 'shopping online buy sell clothes books health electronics television computer computers kindle', 'hard disk mobile phones phone furniture clothes ac fridge tv iron software', 'pen drive charging bank bags bag lights led light laptop laptops', '', '', '', '', '', '', '', '', ''),
('Apple', 'www.apple.com', '', '', 'computer computers software softwares electronics buy iphone mac book pro ipad mini', 'watch steve jobs air imac macbook laptops laptop phone phone desktop', 'ipod itunes apple', '', '', '', '', '', '', '', '', ''),
('Ask', 'www.ask.com', '', '', 'question answer answers answering search engine questions ask searching fast quick find', 'solution solutions', '', '', '', '', '', '', '', '', '', ''),
('Baidu (China)', 'www.baidu.com', 'China', '', 'chinese language engine search multi media searching web fast quick find', '', '', '', '', '', '', '', '', '', '', ''),
('Bing', 'www.bing.com', '', '', 'microsoft search searching engine web quick fast find answers answer questions question', '', '', '', '', '', '', '', '', '', '', ''),
('Blogger', 'www.blogger.com', '', '', 'google weblog publishing free share sharing text photos photo image image video', 'videos blog publish blogs multi user host hosting', '', '', '', '', '', '', '', '', '', ''),
('Facebook', 'www.facebook.com', '', '', 'social network networking share images videos friend find connect socialize friends media', 'finder video image upload', '', '', '', '', '', '', '', '', '', ''),
('FC2 (Japan)', 'www.fc2.com', 'Japan', '', 'broadcast japanese blogging host video hosting service web analyzer blog rental server', 'live ranking clap knowhow saymove sns', '', '', '', '', '', '', '', '', '', ''),
('Flipkart (India)', 'www.flipkart.com', 'India', '', 'online shopping buy sell electronics electronic laptop laptops mobile phone phones television', 'fridge books clothes pen drive drives hard disk ecommerce led lcd tvs', 'tv mobiles', '', '', '', '', '', '', '', '', ''),
('Google', 'www.google.com', '', '', 'search searching engine web fast cloud computing web analytics advertise advertising find', 'android', '', '', '', '', '', '', '', '', '', ''),
('Hao123 (China)', 'www.hao123.com', 'China', '', 'chinese online listing portal baidu', '', '', '', '', '', '', '', '', '', '', ''),
('IMDb', 'www.imdb.com', '', '', 'movie movies review reviews feedback rating ratings trailers tv celebrities content', 'top coming soon charts popular genre film films celebrity tvs upcoming', '', '', '', '', '', '', '', '', '', ''),
('Imgur', 'www.imgur.com', '', '', 'online image images share sharing enjoy awesome entertainment entertain viral upload add', 'submit community commenting comment voting', '', '', '', '', '', '', '', '', '', ''),
('Instagram', 'www.instagram.com', '', '', 'share moments moment few simple life picture pictures filter tag image images', 'capture video videos upload friend friends connect socialize uploading', '', '', '', '', '', '', '', '', '', ''),
('Linkedin', 'www.linkedin.com', '', '', 'professional network social networking jobs hire job connect find socialize connection add', '', '', '', '', '', '', '', '', '', '', ''),
('Live.com', 'www.live.com', '', '', 'outlook login mail mobile microsoft email', '', '', '', '', '', '', '', '', '', '', ''),
('Mail.Ru (Russia)', 'www.mail.ru', 'Russia', '', 'russian email mail search engine catalogue file hosting service instant messaging blogging', 'question answers answer portal online games ecommerce', '', '', '', '', '', '', '', '', '', ''),
('Microsoft', 'www.microsoft.com', '', '', 'windows computer phone buy software azure visual studio electronics laptops desktops mobile', 'phones tablets tablet ms office ie internet explorer x box lumnia pc', 'cloud computing skype onenote computers bill gates', '', '', '', '', '', '', '', '', ''),
('Msn', 'www.msn.com', '', '', 'microsoft collection news sports entertainment money weather travel health lifestyle latest', '', '', '', '', '', '', '', '', '', '', ''),
('Onclickads.net', 'www.onclickads.net', '', '', 'online advertising ad ads serving campaign run monetize inventory advertise video click', '', '', '', '', '', '', '', '', '', '', ''),
('Paypal', 'www.paypal.com', '', '', 'pay online payment system money transfer transfers electronic send recieve buyer protection', 'buy sell ebay on the go safe bank banks', '', '', '', '', '', '', '', '', '', ''),
('Pinterest', 'www.pinterest.com', '', '', 'find ideas idea projects project interest interests discover save creative images image', 'upload tag add submit', '', '', '', '', '', '', '', '', '', ''),
('Qq (China)', 'www.qq.com', 'China', '', 'chinese online internet portal life shopping', '', '', '', '', '', '', '', '', '', '', ''),
('Reddit', 'www.reddit.com', '', '', 'entertainment social networking news share submit content text posts post links user generated', 'link stories online bulletin board', '', '', '', '', '', '', '', '', '', ''),
('Sanepie', 'www.sanepie.com', '', '', 'search web quick fast find button less searching engine', '', '', '', '', '', '', '', '', '', '', ''),
('Sina (China)', 'www.sina.com.cn', 'China', '', 'chinese online media social network networking microblog microblogging', '', '', '', '', '', '', '', '', '', '', ''),
('Sohu (China)', 'www.sohu.com', 'China', '', 'chinese advertising advertise online search engine multi player gaming ads ad news article articles', '', '', '', '', '', '', '', '', '', '', ''),
('Taobao (China)', 'www.taobao.com', 'China', '', 'chinese china online shopping alibaba marketplace store auction sell buy list', '', '', '', '', '', '', '', '', '', '', ''),
('Tmall (China)', 'www.tmall.com', 'China', '', 'chinese alibaba ecommerce buy sell retail online shopping store shop', '', '', '', '', '', '', '', '', '', '', ''),
('Tumblr', 'www.tumblr.com', '', '', 'microblogging micro blogging social network networking post multimedia image images video videos', 'blog share upload add submit tag post posts yahoo media', '', '', '', '', '', '', '', '', '', ''),
('Twitter', 'www.twitter.com', '', '', 'social media network networking upload image images video videos tweets friend friends', 'socialize share find connect', '', '', '', '', '', '', '', '', '', ''),
('VK (Russia)', 'www.vk.com', 'Russia', '', 'russian social network networking message tag image images video video audio', 'play browser game games friend friends connect socialize upload share media', '', '', '', '', '', '', '', '', '', ''),
('Wikipedia', 'www.wikipedia.org', '', '', 'wiki online encyclopedia free dictionary search', '', '', '', '', '', '', '', '', '', '', ''),
('Wordpress', 'www.wordpress.com', '', '', 'create free website blog cms build easy easily customize customizable mobile ready', 'design designs theme themes host hosting platform publish publishing personal business site', 'content management system', '', '', '', '', '', '', '', '', ''),
('Yahoo! (Japan)', 'www.yahoo.co.jp', 'japan', '', 'japanese search searching engine news groups answers advertising online mapping fantasy sports', 'mail engine video news answer advertise finance sharing sports yahoo', '', '', '', '', '', '', '', '', '', ''),
('Yahoo!', 'www.yahoo.com', '', '', 'yahoo mail search searching engine video news answer advertise finance sharing sports', 'groups answers advertising online mapping fantasy sports', '', '', '', '', '', '', '', '', '', ''),
('Yandex (Russia)', 'www.yandex.ru', 'Russia', '', 'russian search engine searching web quick fast find answers answer direct mail', 'fotki browser maps news music video money catalog taxi yandex', '', '', '', '', '', '', '', '', '', ''),
('Youtube', 'www.youtube.com', '', '', 'video sharing upload share watch trailer trailers songs movie tv shows movies', 'videos uploading movies online song top', '', '', '', '', '', '', '', '', '', ''),
('Shape Shifter (India)', 'www.shapeshifter.co.in', 'India', '', 'g buy supplements build fitness sports traininmuscle muscles transform fit loose fat', 'supplement health muscle', '', '', '', '', '', '', '', '', '', ''),
('Coursera', 'www.coursera.org', '', '', 'study online education courses course free learn university universities programming business computer', 'science arts and humanities data science life sciences math and logic personal', 'development physical science engineering social sciences specialization specializations specialized', '', '', '', '', '', '', '', '', ''),
('Snapdeal (India)', 'www.snapdeal.com/', 'India', '', 'online shopping buy sell mobile and tablets computer laptop laptops office games', 'game electronics electronic home kitchen women womens fashion mens men toy', 'toys kids baby products product books book novels novel sports health food', 'mobile television mobiles televisions ecommerce clothes', '', '', '', '', '', '', '', ''),
('Westfield (United Kingdom)', 'uk.westfield.com/london', 'United Kingdom', 'London', 'shopping mall shops retailers retail shop buy', '', '', '', '', '', '', '', '', '', '', ''),
('Le Bernardin (USA)', 'www.le-bernardin.com', 'USA', 'New York', 'food restaurant french eat dinning seafood restaurants', '', '', '', '', '', '', '', '', '', '', ''),
('Blue Hill (USA)', 'www.bluehillfarm.com', 'USA', 'New York', 'dine restaurant eat food american restaurants', '', '', '', '', '', '', '', '', '', '', ''),
('Eli Zabar (USA)', 'www.elizabar.com', 'USA', 'New York', 'bakery american deli eat breakfast restaurants', '', '', '', '', '', '', '', '', '', '', ''),
('Print (USA)', 'www.printrestaurant.com', 'USA', 'New York', 'american restaurant eat food berkshire pork chops fresh fish star restaurants', '', '', '', '', '', '', '', '', '', '', ''),
('Union Square Cafe (USA)', 'www.unionsquarecafe.com', 'USA', 'New York', 'restaurant cafe american eat food restaurants', '', '', '', '', '', '', '', '', '', '', ''),
('Daniel (USA)', 'www.danielnyc.com', 'USA', 'New York', 'restaurant french eat food restaurants', '', '', '', '', '', '', '', '', '', '', ''),
('Scarpetta (USA)', 'www.ldvhospitality.com/brands/scarpetta', 'USA', 'New York', 'restaurant italian food eat pasta pastas restaurants', '', '', '', '', '', '', '', '', '', '', ''),
('Torrentz', 'www.torrentz.com', '', '', 'download torrent bittorrent bittorrentz', '', '', '', '', '', '', '', '', '', '', ''),
('Netflix (USA)', 'www.netflix.com', 'USA', '', 'watch movie online movies buy stream tv shows show tvs streamed subscribe', 'subscription rent game games', '', '', '', '', '', '', '', '', '', ''),
('Sound Cloud', 'www.soundcloud.com', '', '', 'music listen share upload listening sharing playlist free discover new track tracks', 'artist artists favorite connect with directly own trending community find', '', '', '', '', '', '', '', '', '', ''),
('Krishna (India)', 'www.inoook.com', 'India', 'New Delhi', 'computer programmer ucsc extension student', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `userswebsites`
--

CREATE TABLE `userswebsites` (
  `websitename` varchar(150) NOT NULL,
  `url` varchar(150) NOT NULL,
  `categories` varchar(300) NOT NULL,
  `keywords` varchar(300) NOT NULL,
  `usersname` varchar(150) NOT NULL,
  `usersemail` varchar(150) NOT NULL,
  `userslinktoweb` varchar(250) NOT NULL,
  `date` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin9108`
--
ALTER TABLE `admin9108`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `sanesearch1`
--
ALTER TABLE `sanesearch1`
  ADD PRIMARY KEY (`url`);
ALTER TABLE `sanesearch1` ADD FULLTEXT KEY `name` (`name`,`url`,`country`,`city`,`keyword1`,`keyword2`,`keyword3`,`keyword4`,`keyword5`,`keyword6`,`keyword7`,`keyword8`,`keyword9`,`keyword10`,`keyword11`,`keyword12`);

--
-- Indexes for table `userswebsites`
--
ALTER TABLE `userswebsites`
  ADD PRIMARY KEY (`url`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
