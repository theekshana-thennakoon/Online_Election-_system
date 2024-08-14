-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2024 at 03:57 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `election`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pwd` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `username`, `pwd`) VALUES
(1, 'election@gmail.com', '$2y$10$N2fp5VEYTG3A8RbsXuXTi.jp1DM/rpFisq4fpsvDIlLtVwoKwYoG.');

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `namee` text NOT NULL,
  `names` text NOT NULL,
  `namet` text NOT NULL,
  `number` int(11) NOT NULL,
  `constituency` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `pid`, `namee`, `names`, `namet`, `number`, `constituency`) VALUES
(4, 26, 'eranga srimal', 'එරංග ශ්‍රීමාල්', 'எரங்க ஸ்ரீமால்', 1, ''),
(5, 26, 'harshana adhikari', 'හර්ෂණ අධිකාරී', 'எரங்க ஸ்ரீமால்', 5, ''),
(6, 5, 'Ruwan Chamara', 'රුවන් චාමර', 'ருவன் சாமர', 22, ''),
(7, 5, 'N. yohan Ransara', 'එන්.යොහාන් රන්සර', 'என்.யோஹான் ரன்சரா', 32, ''),
(8, 5, 'Tharushi Dilshani', 'තරුෂි දිල්ශානි', 'தருஷி தில்ஷானி', 35, ''),
(9, 5, 'p. Kamal bandara', 'පී.කමල් බණ්ඩාර ', 'பி. கமல் பண்டார', 50, ''),
(10, 5, 'B. shenith Chanidu', 'බී.ෂෙනිත් චනිදු ', 'பி.ஷெனித் சனிது', 51, ''),
(11, 5, 'K.Hirun Kavinda', 'කේ.හිරුන් කාවින්ද', 'கே.ஹிருண் காவிந்தா', 52, ''),
(12, 5, 'j.dilakshan', 'ජේ.දිලක්ෂන් ', 'ஜே.திலக்ஷன்', 53, ''),
(13, 5, 'r.pasindu Dilshan', 'ආර්.පසිඳු දිල්ශාන්', 'ஆர்.பசிந்து தில்ஷான்', 54, ''),
(14, 12, 'p.bhanuka abesingha', 'පී.භානුක අබේසිංහ', 'பி.பானுகா அபேசிங்க', 55, ''),
(15, 12, 'm.mahasen gunarathna', 'එම්.මහසෙන් ගුණරත්න', 'எம்.மஹசென் குணரத்ன', 56, ''),
(16, 14, 'h.g.kavindu lakshan', 'එච්.ජි.කවිඳු ලක්ෂාන්', 'எச்.ஜி.கவிந்து லக்ஷான்', 57, ''),
(17, 12, 'dinithi lakshani', 'දිනිති ලක්ෂානි', 'தினிதி லக்ஷானி', 58, ''),
(18, 12, 's.sandun lakshan', 'එස්.සඳුන් ලක්ශාන්', 'எஸ்.சந்துன் லக்ஷான்', 59, ''),
(23, 1, 'aaliya', 'ආලියා', 'ஆலியா', 2, ''),
(24, 19, 'mahind Rajapaksha', 'මහින්ද රාජපක්ශ', 'மஹிந்த ராஜபக்ஷ', 2, ''),
(25, 19, 'anura kumara', 'අනුර කුමාර', 'அனுர குமார', 3, ''),
(26, 26, 'Thennakoon Mudiyanselage Nipun Theekshana Thennakoon', 'තෙන්නකෝන් මුදියන්සේලාගේ නිපුන් තීක්ෂණ තෙන්නකෝන්', 'தென்னகோன் முத்யன்செலாவின் நிப்போன் தீக்சன தென்னகோன்', 9, '112'),
(27, 91, 'Lenovo', 'ලෙනොවෝ', 'லெனோவா', 2, '112');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `id` int(2) NOT NULL,
  `district` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `district`) VALUES
(1, 'Colombo'),
(2, 'Gampaha'),
(3, 'Kalutara'),
(4, 'Mahanuwara'),
(5, 'Matale'),
(6, 'Nuwara-Eliya'),
(7, 'Galle'),
(8, 'Matara'),
(9, 'Hambantota'),
(10, 'Jaffna'),
(11, 'Vanni'),
(12, 'Batticaloa'),
(13, 'Digamadulla'),
(14, 'Trincomalee'),
(15, 'Kurunegala'),
(16, 'Puttalam'),
(17, 'Anuradhapura'),
(18, 'Polonnaruwa'),
(19, 'Badulla'),
(20, 'Monaragala'),
(21, 'Ratnapura'),
(22, 'Kegalla');

-- --------------------------------------------------------

--
-- Table structure for table `electiondate`
--

CREATE TABLE `electiondate` (
  `id` int(11) NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `electiondate`
--

INSERT INTO `electiondate` (`id`, `date`) VALUES
(1, '2024-05-20');

-- --------------------------------------------------------

--
-- Table structure for table `parties`
--

CREATE TABLE `parties` (
  `id` int(11) NOT NULL,
  `namee` mediumtext NOT NULL,
  `names` mediumtext NOT NULL,
  `namet` mediumtext NOT NULL,
  `symbol` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `parties`
--

INSERT INTO `parties` (`id`, `namee`, `names`, `namet`, `symbol`) VALUES
(1, 'All Ceylon Tamil Congress', 'අකිල ඉලංකෙයි තමිල් කොංග්‍රස්', 'அகில இலங்கைத் தமிழ்க் காங்கிரஸ்', '1.jpg'),
(2, 'Akhila Ilankai Tamil Mahasabha', 'අකිල ඉලංකෙයි ද්‍රවිඩ මහා සභා', 'அகில இலங்கை தமிழ் மகாசபை', '2.jpg'),
(3, 'Ape janabala Pakshaya', 'අපේ ජනබල පක්ෂය', 'அபே ஜன பல பக்ஷயா', '3.jpg'),
(5, 'Arunalu Peoples Alliance', 'අරුණළු ජනතා පෙරමුණ', 'அருணாலு மக்கள் கூட்டணி', '5.jpg'),
(6, 'All Ceylon Makkal Congress', 'අහිල ඉලංගෙයි මහජන කොංග්‍රසය', 'அகில இலங்கை மக்கள் காங்கிரஸ்', '6.jpg'),
(7, 'Ilankai Tamil Arasu Kadchi', 'ඉලංකෙයි තමිල් අරසු කච්චි', 'இலங்கைத் தமிழரசுக் கட்சி', '7.jpg'),
(8, 'Eros Democratic front', 'ඊරෝස් ප්‍රජාතන්ත්‍රවාදී පෙරමුණ', 'ஈரோஸ் ஜனநாயக முன்னணி', '8.jpg'),
(9, 'Eelavar Democratic Front', 'ඊලවර් ප්‍රජාතන්ත්‍රවාදී පෙරමුණ', 'ஈழவர் ஜனநாயக முன்னணி', '9.jpg'),
(10, 'Eelam People\'s Democratic Party', 'ඊලාම් ජනතා ප්‍රජාතන්ත්‍රවාදී පක්ෂය', 'ஈழ மக்கள் ஜனநாயகக் கட்சி', '10.jpg'),
(11, 'United Congress Party', 'එක්සත් කොන්ග්‍රස් පක්ෂය', 'ஐக்கிய காங்கிரஸ் கட்சி', '11.jpg'),
(12, 'United People\'s Freedom Alliance', 'එක්සත් ජනතා නිදහස් සන්ධානය', 'ஐக்கிய மக்கள் சுதந்திரக் கூட்டணி', '12.jpg'),
(13, 'United Republican Front', 'එක්සත් ජනරජ පෙරමුණ', 'ஐக்கிய குடியரசு முன்னணி', '13.jpg'),
(14, 'United National Freedom Front', 'එක්සත් ජාතික නිදහස් පෙරමුණ', 'ஐக்கிய தேசிய சுதந்திர முன்னணி', '14.jpg'),
(15, 'United National Party', 'එක්සත් ජාතික පක්ෂය', 'ஐக்கிய தேசிய கட்சி', '15.jpg'),
(16, 'United National Alliance', 'එක්සත් ජාතික සන්ධානය', 'ஐக்கிய தேசியக் கூட்டமைப்பு', '16.jpg'),
(17, 'Democratic Unity Alliance', 'එක්සත්  ප්‍රජාතන්ත්‍රවාදී සන්ධානය', 'ஜனநாயக ஒற்றுமைக் கூட்டணி', '17.jpg'),
(18, 'United People\'s Party', 'එක්සත් මහජන  පක්ෂය', 'ஐக்கிய மக்கள் கட்சி', '18.jpg'),
(19, 'Eksath Lanka Podujana Pakshaya', 'එක්සත් ලංකා පොදුජන පක්ෂය', 'எக்சத் லங்கா பொதுஜன பக்ஷய', '19.jpg'),
(20, 'Eksath Lanka Maha Saba Party', 'එක්සත් ලංකා මහා සභා පක්ෂය', 'எக்சத் லங்கா மகா சபா கட்சி', '20.jpg'),
(26, 'People\'s Liberation Front', 'ජනතා විමුක්ති පෙරමුණ', 'kf;fs;  tpLjiy  Kd;dzp', '26.png'),
(91, 'Lenovo', 'ලෙනොවෝ', 'லெனோவா', 'gpa logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `poolingdivitions`
--

CREATE TABLE `poolingdivitions` (
  `id` int(11) NOT NULL,
  `did` int(11) NOT NULL,
  `divition` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `poolingdivitions`
--

INSERT INTO `poolingdivitions` (`id`, `did`, `divition`) VALUES
(1, 1, 'Colombo North'),
(2, 1, 'Colombo Central'),
(3, 1, 'Borella'),
(4, 1, 'Colombo East'),
(5, 1, 'Colombo West'),
(6, 1, 'Dehiwala'),
(7, 1, 'Ratmalana'),
(8, 1, 'Kolonnawa'),
(9, 1, 'Kotte'),
(10, 1, 'Kaduwela'),
(11, 1, 'Awissawella'),
(12, 1, 'Homagama'),
(13, 1, 'Maharagama'),
(14, 1, 'Kesbewa'),
(15, 1, 'Moratuwa'),
(16, 2, 'Wattala'),
(17, 2, 'Negombo'),
(18, 2, 'Katana'),
(19, 2, 'Divulapitiya'),
(20, 2, 'Meerigama'),
(21, 2, 'Minuwangoda'),
(22, 2, 'Attanagalla'),
(23, 2, 'Gampaha'),
(24, 2, 'Ja-Ela'),
(25, 2, 'Mahara'),
(26, 2, 'Dompe'),
(27, 2, 'Biyagama'),
(28, 2, 'Kelaniya'),
(29, 3, 'Panadura'),
(30, 3, 'Bandaragama'),
(31, 3, 'Horana'),
(32, 3, 'Bulathsinhala'),
(33, 3, 'Mathugama'),
(34, 3, 'Kalutara'),
(35, 3, 'Beruwala'),
(36, 3, 'Agalawatta'),
(37, 4, 'Galagedara'),
(38, 4, 'Harispaththuwa'),
(39, 4, 'Pathadumbara'),
(40, 4, 'Udadumbara'),
(41, 4, 'Theldeniya'),
(42, 4, 'Kundasale'),
(43, 4, 'Hewaheta'),
(44, 4, 'Senkadagala'),
(45, 4, 'Mahanuwara'),
(46, 4, 'Yatinuwara'),
(47, 4, 'Udunuwara'),
(48, 4, 'Gampola'),
(49, 4, 'Nawalapitiya'),
(50, 5, 'Dambulla'),
(51, 5, 'Laggala'),
(52, 5, 'Matale'),
(53, 5, 'Raththota'),
(54, 6, 'Nuwara-Eliya'),
(55, 6, 'Kotmale'),
(56, 6, 'Hanguranketha'),
(57, 6, 'Walapane'),
(58, 7, 'Balapitiya'),
(59, 7, 'Ambalangoda'),
(60, 7, 'Karandeniya'),
(61, 7, 'Bentara-Elpitiya'),
(62, 7, 'Hiniduma'),
(63, 7, 'Baddegama'),
(64, 7, 'Rathgama'),
(65, 7, 'Galle'),
(66, 7, 'Akmeemana'),
(67, 7, 'Habaraduwa'),
(68, 8, 'Deniyaya'),
(69, 8, 'Hakmana'),
(70, 8, 'Akuressa'),
(71, 8, 'Kamburupitiya'),
(72, 8, 'Devinuwara'),
(73, 8, 'Matara'),
(74, 8, 'Weligama'),
(75, 9, 'Mulkirigala'),
(76, 9, 'Beliatta'),
(77, 9, 'Tangalle'),
(78, 9, 'Thissamaharamaya'),
(79, 10, 'Kayts'),
(80, 10, 'Waddukkoddai'),
(81, 10, 'Kankasanthurai'),
(82, 10, 'Manipay'),
(83, 10, 'Kopay'),
(84, 10, 'Uduppidi'),
(85, 10, 'Point Pedro'),
(86, 10, 'Chawakachcheri'),
(87, 10, 'Nallur'),
(88, 10, 'Jaffna'),
(89, 10, 'Kilinochchi'),
(90, 11, 'Mannar'),
(91, 11, 'Vavuniya'),
(92, 11, 'Mullaitivu'),
(93, 12, 'Kalkuda'),
(94, 12, 'Batticaloa'),
(95, 12, 'Paddiruppu'),
(96, 13, 'Ampara'),
(97, 13, 'Samanthurai'),
(98, 13, 'Kalmunai'),
(99, 13, 'Pothuvil'),
(100, 14, 'Seruwil'),
(101, 14, 'Trincomalee'),
(102, 14, 'Mutur'),
(103, 15, 'Galgamuwa'),
(104, 15, 'Nikaweratiya'),
(105, 15, 'Yapahuwa'),
(106, 15, 'Hiriyala'),
(107, 15, 'Wariyapola'),
(108, 15, 'Panduwasnuwara'),
(109, 15, 'Bingiriya'),
(110, 15, 'Katugampola'),
(111, 15, 'Kuliyapitiya'),
(112, 15, 'Dambadeniya'),
(113, 15, 'Polgahawela'),
(114, 15, 'Kurunegala'),
(115, 15, 'Mawathagama'),
(116, 15, 'Dodangaslanda'),
(117, 16, 'Puttalam'),
(118, 16, 'Anamaduwa'),
(119, 16, 'Chillaw'),
(120, 16, 'Naththandiya'),
(121, 16, 'Wennappuwa'),
(122, 17, 'Medawachchiya'),
(123, 17, 'Horowpathana'),
(124, 17, 'Anuradhapura East'),
(125, 17, 'Anuradhapura West'),
(126, 17, 'Kalawewa'),
(127, 17, 'Mihinthale'),
(128, 17, 'Kekirawa'),
(129, 18, 'Minneriya'),
(130, 18, 'Medirigiriya'),
(131, 18, 'Polonnaruwa'),
(132, 19, 'Mahiyanganaya'),
(133, 19, 'Viyaluwa'),
(134, 19, 'Passara'),
(135, 19, 'Badulla'),
(136, 19, 'Hali Ela'),
(137, 19, 'Uva Paranagama'),
(138, 19, 'Welimada'),
(139, 19, 'Bandarawela'),
(140, 19, 'Haputale'),
(141, 20, 'Bibila'),
(142, 20, 'Moneragala'),
(143, 20, 'Wellawaya'),
(144, 21, 'Eheliyagoda'),
(145, 21, 'Ratnapura'),
(146, 21, 'Pelmadulla'),
(147, 21, 'Balangoda'),
(148, 21, 'Rakwana'),
(149, 21, 'Nivithigala'),
(150, 21, 'Kalawana'),
(151, 21, 'Kolonna'),
(152, 22, 'Dedigama'),
(153, 22, 'Galigamuwa'),
(154, 22, 'Kegalle'),
(155, 22, 'Rambukkana'),
(156, 22, 'Mawanella'),
(157, 22, 'Aranayaka'),
(158, 22, 'Yatiyanthota'),
(159, 22, 'Ruwanwella'),
(160, 22, 'Deraniyagala');

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE `voters` (
  `id` int(11) NOT NULL,
  `nic` varchar(12) NOT NULL,
  `status` varchar(20) NOT NULL,
  `date` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `candidate_id` int(11) NOT NULL,
  `f_count` int(11) NOT NULL,
  `s_count` int(11) NOT NULL,
  `t_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `electiondate`
--
ALTER TABLE `electiondate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parties`
--
ALTER TABLE `parties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `poolingdivitions`
--
ALTER TABLE `poolingdivitions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voters`
--
ALTER TABLE `voters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `electiondate`
--
ALTER TABLE `electiondate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `parties`
--
ALTER TABLE `parties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `poolingdivitions`
--
ALTER TABLE `poolingdivitions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT for table `voters`
--
ALTER TABLE `voters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
