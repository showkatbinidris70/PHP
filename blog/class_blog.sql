-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2021 at 11:38 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `class_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`) VALUES
(6, 'JavaScript'),
(13, 'Political issue'),
(14, 'International');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `category_id` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `category_id`, `title`, `description`, `image`, `date`) VALUES
(57, 13, 'Locally-led adaptation is a key strategy in dealing ', 'This world is home to some 7.6 billion people, and not every person lives as well as the next. Some live in concrete homes, some in thatched huts. Some in the urban jungle, some in towns and villages, and others, literally in jungles. Some live on flat land, some on plateaus, and some on plain land. Those who live in climate vulnerable areas are often posed a common question: Why not move?\r\n\r\nThis article will not answer the above question. There are a number of reasons as to why a group of people choose a particular area and make it their home. It is as much of a geological decision, as it is a cultural, social or emotional one. However, it is important that we highlight the plight of people who choose a particular spot as their home and demand localised attention for them, while or without waiting for solutions to big-picture, global problems. We need to make leaders understand that while global environmental debates remain ever fluid, people who live in deteriorating local conditions require customised and personalised solutions, and they require them fast.\r\n\r\nTake deforestation, for instance. The people in these vulnerable areas are largely dependent on the forests for their livelihood, but deforestation has now become a problem for the entire world. Similarly, if the world is to curb the global rise in temperature and keep it below 1.5 degrees Centigrade, countries will have to cut their', 'uploads/569dealing-climate-crisis.jpg', '2021-11-12'),
(58, 14, 'Oracle Cross Join (Cartesian Products)', 'The CROSS JOIN specifies that all rows from first table join with all of the rows of second table. If there are \"x\" rows in table1 and \"y\" rows in table2 then the cross join result set have x*y rows. It normally happens when no matching join columns are specified.\r\n\r\nIn simple words you can say that if two tables in a join query have no join condition, then the Oracle returns their Cartesian product.\r\nBoth the above syntax are same and used for Cartesian product. They provide similar result after execution.', 'uploads/465cross-join1.png', '2021-11-12'),
(59, 6, 'আকাশপথে যুক্তরাষ্ট্র ভ্রমণে মানতে হবে যেসব নির্দেশনা', 'যুক্তরাষ্ট্রসহ বিশ্বের বিভিন্ন দেশে করোনা মোকাবেলায় টিকা দেওয়া শুরু হয়েছে বেশ আগেই। সম্প্রতি বাংলাদেশ থেকে যুক্তরাষ্ট্রে পড়াশোনার জন্য বহু শিক্ষার্থী গমনের পরিকল্পনা করছেন। মার্কিন নাগরিক ও অভিবাসী নন এমন ভ্রমণকারী সকল প্রাপ্তবয়স্ককে অবশ্যই কোভিড -১৯ এর টিকা নেয়া বাধ্যতামূলক করেছে বাংলাদেশে অবস্থিত যুক্তরাষ্ট্রের দূতাবাস। তবে এই ঘোষণাটি ভিসা ইস্যু হওয়াকে প্রভাবিত না করলেও যুক্তরাষ্ট্র প্রবেশ স্থগিত করা হবে। করোনা টিকা গ্রহণের বৈধ প্রমাণপত্র ও যুক্তরাষ্ট্র প্রবেশের ৭২ ঘণ্টার ভিতর করাতে হবে পিসিআর টেস্ট। কোন অসাধু পন্থা অবলম্বন করলে, শাস্তিসহ চিরদিনের জন্য নিষিদ্ধ করতে পারে যুক্তরাষ্ট্র।     \r\n\r\nসেন্টার ফর ডিজিজ কন্ট্রোল এন্ড প্রিভেনশনের (সিডিসি) বরাতে বলা হয়েছে,\r\n\r\n-      অনাগরিক, অন-অভিবাসীদের, স্থায়ী বাসিন্দা, অভিবাসীদের অবশ্যই যুক্তরাষ্ট্র ভ্রমণের জন্য কোভিড -১৯ এর টিকা নিতে হবে।\r\n-      আপনি বিমানযোগে যুক্তরাষ্ট্র ভ্রমণকালে অবশ্যই কোভিড -১৯ এর টিকার সার্বিক তথ্য ও কোভিড-১৯ নেগেটিভের  সনদ উপস্থাপন করতে হবে।\r\n\r\n-      পাবলিক ট্রান্সপোর্টের অভ্যন্তরীণ এলাকায় (বিমানসহ) মার্কিন যুক্তরাষ্ট্রে, ভিতরে বা বাইরে এবং মার্কিন পরিবহন কেন্দ্রগুলির (বিমানবন্দরসহ) অভ্যন্তরে ভ্রমণ করার সময় আপনার মাস্ক ব্যবহার বাধ্যতামূলক করা হয়েছে।\r\n\r\n-     আপনি যদি সম্পূর্ণরূপে টিকাপ্রাপ্ত না হন, তবে আপনাকে মার্কিন যুক্তরাষ্ট্রে প্রবেশের অনুমতি দেওয়া হবে না।\r\n\r\n-     প্রথম ডোজ দেয়ার ১৪ দিন (দুই সপ্তাহ) পরে দ্বিতীয় ডোজ দিতে পারবেন।\r\n\r\n-     যদি দু’টো  ডোজের ভিন্নতা থাকে সেক্ষেত্রে প্রথম ডোজের ১৭ দিন পর দ্বিতীয় ডোজ গ্রহণ করতে হবে। তবে, কোনো কোনো ক্ষেত্রে সিডিসি দু’টো ভিন্ন ডোজ গ্রহণকারীদের প্রবেশে অনুমোদন প্রদান করে না।    \r\n\r\nমার্কিন যুক্তরাষ্ট্রের ফ্লাইটে চড়ার আগে, আপনাকে নিম্নলিখিতগুলির মধ্যে একটি সনদ দেখাতে হবে:\r\n\r\nআপনি যদি সম্পূর্ণরূপে টিকা পান: টিকা দেওয়ার প্রমাণ পত্র এবং নেগেটিভ কোভিড-১৯ পরীক্ষার ফলাফল, ভ্রমণের ৩ (তিন) দিনের বেশি আগে নেওয়া যাবে না।\r\n\r\nযদি আপনি সম্পূর্ণরূপে টিকা না পান: নেগেটিভ কোভিড-১৯ পরীক্ষার ফলাফল, ভ্রমণের (১) এক দিনের বেশি আগে নেওয়া যাবে না।\r\n\r\n২ (দুই) বছরের কম বয়সী শিশুদের পরীক্ষা করার প্রয়োজন নেই।\r\n\r\n \r\nভ্রমণ নিষেধাজ্ঞা: \r\n\r\n-           আপনি যদি কোভিড-১৯ এর সংস্পর্শে এসে থাকেন তবে ৯০ দিনের পূর্বে সুস্থ  না হলে অবশ্যই ভ্রমণে নিষেধাজ্ঞা আছে।\r\n\r\n-           যদি আপনি শারীরিক দুর্বলতা অনুভব করেন।\r\n\r\n-           আপনি কোভিড-১৯ পজেটিভ হওয়া সত্বেও যদি আইসলেশনে না থাকেন।   \r\n\r\n-           আপনি যদি কোভিড-১৯ ফলাফলের জন্য অপেক্ষমাণ থাকেন।\r\n\r\nযুক্তরাষ্ট্রে ভ্রমণ পরবর্তী করণীয়:\r\n\r\n-           আপনার কাছে যদি গত ৯০ দিনের ভিতর কোভিড থেকে নিরাময়ের কোন সনদ না থাকে তবে ৩-৫ দিনের ভিতর একটি ভাইরাল পরীক্ষা করুন।\r\n\r\n-           আপনার যদি কোভিড নেগেটিভ যদি কোন সনদ না থাকে সে ক্ষেত্রে ৭ দিনের স্বেচ্ছায় আইসলেশনে থাকুন।\r\n\r\n-           কোভিড পজেটিভ এর যদি কোনো উপসর্গ দেখে থাকেন দ্রুত নিজেকে সবার থেকে আলাদা করে রাখুন।', 'uploads/283143826_bangladesh_pratidin_JFK.jpg', '2021-11-11'),
(60, 14, 'মৃত্যু ঝুঁকিতে দশ লাখ আফগান শিশু!', 'যুদ্ধবিধ্বস্ত আফগানিস্তানে অপুষ্ঠির মুখে পড়তে পারে ৩২ লাখ শিশু। শীতের কারণে তাপমাত্রা কমতে শুরু করায় এদের মধ্যে দশ লাখ মৃত্যুর ঝুঁকিতে রয়েছে। শুক্রবার (১২ নভেম্বর) বিশ্ব স্বাস্থ্য সংস্থার (ডব্লিউএইচও) এক মুখপাত্র এ তথ্য জানিয়েছেন। খবর রয়টার্স।\r\n\r\nতালেবানরা দেশটির ক্ষমতা দখলের পর পশ্চিমারা আর্থিক সহযোগিতা দেওয়া বন্ধ করে দেয়। ফলে ত্রাণ সংস্থাগুলো অনেকদিন ধরেই দুর্ভিক্ষের সতর্কতা জানিয়ে আসছে।\r\n\r\nকাবুল সফরে থাকা ডব্লিউএইচওর মুখপাত্র মার্গারেট হ্যারিস বলেন, দেশজুড়ে অনাহার বাড়তে থাকায় এটি একটি কঠিন যুদ্ধে পরিণত হয়েছে। রাতে তাপমাত্রা শূন্য ডিগ্রির নিচে নেমে যাচ্ছে। শীতে বয়স্ক ও শিশুদের বিভিন্ন রোগ দেখা দিতে পারে। \r\nতিনি বলেন, হাসপাতালের ওয়ার্ডগুলো ছোট ছোট শিশুতে ভরে গেছে। এখানে হামে আক্রান্তের সংখ্যাও বাড়ছে। বিশ্ব স্বাস্থ্য সংস্থার তথ্য অনুসারে, ২৪ হাজার ক্লিনিক্যাল কেস পাওয়া গেছে।', 'uploads/875102252_bangladesh_pratidin_Untitled-3.jpg', '2021-11-13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
