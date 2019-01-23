-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 23, 2019 at 05:35 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id8503379_venturahunt`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(300) NOT NULL,
  `hash` varchar(300) NOT NULL,
  `active` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `hash`, `active`) VALUES
(2, 'PsYcO', 'f46dc9cbb5ac5458f5a393ce8ce9338cdae64655ab481b43d4a71aeaee7fa43d', '97cb7b6727f77a725a985d164ab849c5', '1'),
(3, 'noob', '8635338316762a7d9c3ae4da4d450de8d666501cb4503e52fa64e8ffdce52c16', 'b5f385d03eaf012862a6afe39cb32b75', '1'),
(5, 'Kshitij', 'f46dc9cbb5ac5458f5a393ce8ce9338cdae64655ab481b43d4a71aeaee7fa43d', '2f3bc5bbba43e08045f203ec0b07f607', '1'),
(6, 'ImBunny', 'cd485025581b9959c53c906dcb53273cc8acde1ebdd35c82d0e8a981a9bde111', '3d71d63c35c51bcecf11212891ab58f4', '0'),
(7, 'first time', 'b109df8b2a48eca98d81ef7e75ef54f14acfc203628d827e88b4423d211bef22', '18e63be0986d241ad5c3c29193ad430d', '0'),
(8, 'Suryaa', '69247f9911c6278a0c4d77c82eff8811966402fce46ed484c980b081715edb74', 'c55ed33fdab52f433eae755f4cbddf9a', '1'),
(10, 'Nikhil', '754eb644cac7a905defa2b3da7e94f4a2535fdd1dee3d371e9828915b31d4781', 'ddf63804446ed2ad301472e8d9f70d88', '1'),
(11, 'Nikhil Tiwary', '754eb644cac7a905defa2b3da7e94f4a2535fdd1dee3d371e9828915b31d4781', '23e7def7ce17084549efbe0aaa90689a', '0'),
(12, 'amitjena', '6dec69f568b30b52ac7fb32f874d511cf8fa95cd30e1d54bce571c5bff12c119', 'bbeee1dbf79e794c5bfe24a44c0d1c4f', '1'),
(13, 'Woody', 'd044d50b2b6d51198743b63a223d2365bbf1aaa654c95048ed7e6b103920a6ee', '3bcd235f1ef4c9c8722191dc63272a69', '0'),
(14, 'battlemonger', 'e0febce3ae1563ea7b867171b4d8080a8bb4cf4ca28cafbab8af262e9137a713', 'fecfa00157231076964a89c16ed4d5ad', '1'),
(15, 'Naughtyboy', 'd1156b5e5419bc99a4135d32a901e49c621a1d94fd83f5acf8e2a467bd2d3acc', '52d65dfa1ca55f3f0fcc0d7ba0d5a67b', '0'),
(16, 'AK Verma', '232f8bb29d413063c5acea0551850ac7f5573e4f4c9589f077b1c124c0396810', '1eb7f755e521cf1cb76ffb7edcc45375', '1'),
(17, 'yash', 'f062e34292c9199b1cd9647aaffe7830a4aeb4b267add27701cc5430746c2b09', '29ac9fcc4c3c8daaa89cce2226d90457', '0'),
(18, 'saketgupta', '96f72d46189b20b8ee13427688d422d4dd576be69ba5cb520e475070b8fb4915', '06c1611059c609fd0e774e8fa4537f0c', '0'),
(19, 'utopia', '6d2e0363179b2325f62ab7a28c02b7048d176dfed59d852d52dfbe416e133a7d', '444d2aa4bc8c3c492c8cc3ecb70a58ae', '1'),
(20, 'VECTOR', '1194650c32b495c24550fbbee3bc5094004a53cebe51e1d61484f8054b5e4683', '18aee978906b4a59cbbc383e26ff3b81', '1'),
(21, 'tarunkr', 'e1ec3f58cb60485b0cbd337d14ca27da484aedef04b0e2a6499ee170f4b371ac', '95ee61b1a1976584b3f9f2a2bcc50afb', '0'),
(22, 'cypher', '686447be120d5057d4360448413ccc0d8bd426703284653c811b29d4693bacbe', '496879da20bee1f1399b160bc2172d8e', '1'),
(23, 'Illuminati', '8bbf8a0ad0f2cf203aa0ad366a8468f4c9612f86be63f66176a4f3527296d215', '11408884d334d8421125746554bc5716', '1'),
(24, 'Mr E', 'b371dbc4b0268fd4fb467c755690433d1c50348b944b696087a8700a4235217e', '046b208239110a4cd6fe97b0bbfbd815', '0'),
(25, 'Nishee', '3089c5b9dbd527570b506ebb689bc20c46e0e4e3603b49b04bdb035dd3b5c028', '7acad4959ea3474c77dc16446f772578', '1'),
(26, 'dhyeybm', '2555b4e536fc1b0439be060892a17f72054d18da787a201468765db2929a9056', 'f5d976a43565c885c7843e3c5ebb3afa', '0'),
(27, 'Shashank', '0a78b4451dace2fa4064f680ce701c8db1c593159b748d295d9f022d0b231bd9', '5b9500efba64b3e0c8e42fe1314ad5a0', '0'),
(28, 'Aryaveer', '89143e686384fedaca31731b49ccb47047889b12dd49eb227fe41866da6c64a5', '16468b2a76e2bfc0d79394c2af34dd1d', '1'),
(29, 'Nilaya', '681d2362ab203a8198a782b4c8977e9f777d41cdd5bc4d7c0f15b6918d9dab24', '3a0ceef9734ab29f2d06a2322dcc53e0', '0'),
(30, 'AnshBafna', '622b5be531a0a48d14dbba92912c35b704342cffcb7ad06fb9df160e44577543', '1715284b3ba4c3f76394830615e870bc', '1'),
(31, 'Developerguruji', '32a7b09303369a87b12c4e9e288ff0b8812dfa61d4feec2dcfd036d1da7cb59c', 'f52022f08cfd74a9612c0f4319424a60', '1'),
(32, 'JrPriyank', '4e7f358bd7a5fc81814a558ead4bdf373262ab51e4e4a75089e9aead8fcfb355', '05a9d48e0099453c4116ee8d98281f79', '1'),
(33, 'ragesh', '1c7272b3cb1d980b7701040e8afd537af886a437cd718ffdaf7c49c41171e11c', 'b38953f621cb1b50fed2cfc0ade82685', '1'),
(34, 'YOOBOOY', 'f062e34292c9199b1cd9647aaffe7830a4aeb4b267add27701cc5430746c2b09', 'efc3860f1f371b675261fb951aca8612', '1'),
(35, 'ssibasankar', 'c2f0c29059c818c1929e70b0e14e94de881a643f32e3827f74a4864e8d08ec73', 'abd288bd8629895c2138fd26e7896050', '1'),
(36, 'Digimon', '42dd0a7fdcb47aad0f6bd98da39c42ba60c00dc0e01fcba36195c23b7f19143d', '6e31c3ee03cb0902f051ef4931b7f0de', '0'),
(37, 'architgoku', 'c775e7b757ede630cd0aa1113bd102661ab38829ca52a6422ab782862f268646', '893394548b18863cabf7e3151bf988c6', '0'),
(38, 'sameer jain', 'ddbb6e16712199b0fb338b9db2388fa1c797c8d320a10bf2951461a340032f96', 'b522cfcdda3ed77d556164600ef3106b', '1'),
(39, 'Kaushik', 'fd4c35d9f1a24b57cabac0d806a400d132c506b09324e8b55e73fbc434b1d5a7', '42acdf7ef84af7191727fb087d531a34', '1'),
(40, 'Rajat Pal', '5aab073483b2e6ba1bb4f48acfb52aaeb528a3d7443b02986de93bcf9baeab5b', '0909d1a2b783355e0761ed0a4a364c56', '1'),
(41, 'TheSeeker', '5f95ec097b93bedb6457ec4ee6f486aabcc588100cb74fc74c370b8a9060b0c4', 'aee9bc84f9605cf4a8c9c710e9d84e7d', '0'),
(42, 'raakash', '3a4fb2955c6e190d7ceee018991ecf3246a743922e9e4f73561230b3a04a7881', 'ea5c37face89eab06f11d60eee22a267', '1'),
(43, 'Devansh', 'a4c6f206958b3e67b351d7ef500f754aa5f15bde3aac7a6e6f8f1e8859429a4a', '0f44f174ea84f56287f962853fba056a', '1'),
(44, 'Doyle', '28b9851a586c4e57d4e778e73a1de337621b582bef6b76d41fdc15b396612b3c', '086f3289c45e002da6261c76c629d2f0', '0'),
(45, 'Zeeshanul Hoda', '3f95bbf4ca237e4488912ee15d2fffe7733352e97d169f7fc5c6f342969b5415', '542d36d39275a80bf6ce0a8874d90ad8', '1'),
(46, 'Rpsushil', '65e84be33532fb784c48129675f9eff3a682b27168c0ea744b2cf58ee02337c5', '79f85c4ca68e7aa92b88d85d2e1eb1cd', '1'),
(47, 'Bhazkar', '239017ee94f65b65e43577954a792abb7b00dfe36ebd166585c6a4654a91ad49', 'c8c9c94ee9a666e2ffbd4953ac19bd18', '1'),
(48, 'Sarthak', '65b3f2bbc909aed7a7c28f9e8ef9f44bb72a9ed80627b0f334ad3b3b12229e05', 'e390818e52bad656423a4ceedbd273dc', '0'),
(49, 'Gon freeces', 'ef14e876d7297f73200134d7fb92cf18b9f6c24757929269f865a6555b5ca644', '3a08c1795c4c4dffcdaefe1d8077644e', '0'),
(50, 'Frost', 'a31fbd80f0b63a468ef25bcf47ebdc12e030d6e96e7a36c14945bdf86efc5f1b', '10ac0697557466696347d43d43d97207', '0'),
(51, 'meme', '02de0b49bcb3dd9794dfa1c3f5c0820d145694d5a33d8e21eec5ff8c26c52ec6', '1eb744af0002444516cd2d19b4977061', '1'),
(52, 'treasureTeaser', '6693efcd0503059fc0561450033ac9fe712aff09e31e460f4f321f4324585188', '3fb5e34d4451d0c9a5ad7b990df49774', '0'),
(53, 'vasu sehgal', '4f0600c979afa210165b1eeceb0837637800edd8c7c4be62d4fd8bb5ffe116db', '9ffb3920ecc6dfbf6a4fc882d0b41f1b', '1'),
(54, 'aaronadb', '8d0af4031ed6fb286b5e4d2c8e583889fd60f4867d7391cb850a57e74ef6577a', 'bbd04ee1e540d79310a2b4d07f1e538f', '0'),
(55, 'sasta sherlock', 'f6ee94ecb014f74f887b9dcc52daecf73ab3e3333320cadd98bcb59d895c52f5', '55ad13941972477a5ceefea5aff0b481', '1'),
(56, 'yai', '2ca42a8181180abb92a6f077265a2133c405087e237d692d9fe521f2923b5806', 'a0fc0d71d40f5fe222ca3e3fa0cdd847', '1'),
(57, 'Samruddha patil', 'f07127e9ca33973af56ea007f233a80eb9df95212518a625d67b02843aca3ca6', '112507a76c4e4e752e93ee901a0c088c', '0'),
(58, 'Veerendra Akiri', '191eed30630ce105d3749e92212c323e6c693865b4d50b34cccedab96e0ad6f4', 'bb9c809568d37ec49f06a96f7edc8627', '1'),
(59, 'Arpan bhatt', '15e2b0d3c33891ebb0f1ef609ec419420c20e320ce94c65fbc8c3312448eb225', '249375be1c8ee7824a4253a150cc45e2', '0'),
(60, 'Master Po', 'e681d8f8b1e9f5ac0467c95e0cfb157567dbf6c78f35591d48a813177ef173ab', '575d4dc360c9e600b5680109573c68be', '1'),
(61, 'roboteer', '75ea816fc85f2e06f0f65f65872f58d8cfb635908756d9df3fbfe53b9be025f8', '5d3880e53c2e57428fa2f71195e0c737', '1'),
(62, 'HarshTripathi', '3e03d569c07e067536e52e179da721252fb839fdf8e5a0155eca81852deb8961', '5a581efcaa13b344fc22f2348a86fe71', '0'),
(63, 'roshank', '2275617051a9fc6811c1dbb7614d1ac015cb2ad56f93f932843b6fca6838a4e4', '382ca5525b40bcec243eddb53d936d1c', '1'),
(64, 'SurajGupta', 'bea80cf155c8aeafbcd107ee072bf9b120ed92d63141ba03fc0db2a7834c2cbe', '96abab9a9144e62380b478e1b9e74032', '1'),
(65, 'Villy', 'ea1b1c26a3c60fc0debe8c93900cc9c54a58c2e79b389934b19f9dbeefbbcf52', '7e6ba85cbd8807884f1489ebf7e050c5', '0'),
(66, 'Jatin', 'c2148c6559a142d01d50ffe0281c3605b0e49bc90a85e558d915d014c629b7e9', 'e231b11b34b5b372debb142772d26b34', '1'),
(67, 'Hritik', '720a015c87fe0274b12ea67db633f756c73c8897289161bbb7dc1d776333a0e8', '469cc92117f5f2d330ebe5e1ecdc2ff0', '0'),
(68, 'hototogisu', 'c4f9a1eef95e9f3034eb04a5a9e6fbf613f84b4d764c23435d29805b6fd1202c', '82bc137c95208acd1ae49ccbd3a1abe4', '0'),
(69, 'gkrm', 'fafe0d79e6e266e7400902984a8b89f69d6bbf21a2af9784a258d30958b6389d', 'd35fe00429bd7f21ec3b594b011d02b3', '0'),
(70, 'karthikdevarkonda', '1708b6c35e0e611a1870b909d9c144adfa0eeed501a6f1a27e6a54c21a9bdc92', '820503f75b5745ae5e7f7b3db4e4ff85', '0'),
(71, 'amanthesrk', 'd136be9b360530566146e8cb523d1fa9d265b77cd60fb5d742defd23cbb30517', '73fb87f37e65767715b3ee08d8646715', '0'),
(72, 'ankurdua', '6768493f33104d6cfe2bb948e7ddfaac967bbf8f92125beee8c0682617c835a3', 'f60a35aff77cfaed47adbb180908317a', '0'),
(73, 'ali asgar saifee', '9417157f00dce1e585f42023688d55034a92b43c2d9da89ee7d071710057391c', 'f3a80c419d72a5b025f1524985cfa070', '0'),
(74, 'Udit', 'c775e7b757ede630cd0aa1113bd102661ab38829ca52a6422ab782862f268646', 'c46ce11e38112b4c430fe32bdae81482', '0'),
(75, 'Kaushikiraj', 'b999295a884ee4c9fbe631265c40f553b37e7de6bc731e7348ea8bd6d7c0d075', '3c4827d90ff78b7a3968b849e37dee20', '1'),
(76, 'rishabh', 'b10a1bbfa5510640d654582120369bd6a2cb7afe9b6b1d48c7e37cf1a3858823', '0d2a57b1e7a7905f0782917da2baa8c8', '1'),
(77, 'nikhilsarda', 'b9400c54ba3bc9d8824acc1087030a82d2c8c26e72d4aa32f8567a684bfd54c9', '121d06bd03c29b60828962e32ac47b70', '1'),
(78, 'sarruhighaf', '5f23e988e5aa90b10cc27275bad9655ec3a9e2daf7f5da980e216e95f668f31a', '6857d575f13855c1eb797c5abaeb3f66', '1'),
(79, 'Rocker', '508eeff36c0a8626535730166f587c55c7f48afa248c4b06dacbda678e1fdc6d', '4d7a6d79b6357b0c2a0d2f14636aab3f', '1'),
(80, 'sgoldy', '6012a6de3f3e8c323b28a6c58f402da78d2991fabeb84dd770379c9229a6feaa', '08d945fba9c55b2d111b6a39725dc58c', '1'),
(81, 'Akshat', '5dc594bd3b10f918a998b3eb721c8669aef7b6a9c3c4929ae6f4e5b5ce3d29df', '2499ba536af81b3b212e88ac140f32dd', '1'),
(82, 'huean', '641e5439d96179f4698f8525bb909ba7adc8ca269415f6279535a2370ff97c12', 'f90f6f792d2cf31b6fcfd06c98511bf4', '1'),
(83, 'heman me', 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f', '961787119112458899bb8f66467fbdc3', '0');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `date` varchar(100) NOT NULL,
  `notification` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(350) DEFAULT NULL,
  `round1` int(11) NOT NULL DEFAULT '0',
  `mobileno` varchar(15) DEFAULT NULL,
  `college` varchar(100) DEFAULT NULL,
  `pic` int(11) NOT NULL DEFAULT '0',
  `solvedquestions` int(11) NOT NULL DEFAULT '0',
  `current` int(11) NOT NULL DEFAULT '1',
  `tym` int(11) NOT NULL DEFAULT '0',
  `hint` int(11) NOT NULL DEFAULT '1',
  `thint` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `name`, `username`, `email`, `round1`, `mobileno`, `college`, `pic`, `solvedquestions`, `current`, `tym`, `hint`, `thint`) VALUES
(2, 'Kshitij', 'PsYcO', 'gamerkkshtj40@gmail.com', 0, '2147483647', 'IIT ISM', 0, 0, 1, 0, 1, 0),
(3, 'Nitesh Bhoi', 'noob', 'bhoinitesh007@gmail.com', 0, '2147483647', 'IIT ISM Dhanbad', 0, 0, 1, 0, 1, 0),
(5, 'Kumar Kshitij', 'Kshitij', 'kkshtj40@gmail.com', 0, '2147483647', 'IIT ISM Dhanbad', 0, 0, 1, 0, 1, 0),
(6, 'Navneet Das', 'ImBunny', 'navneetdas53@gmail.com', 0, '2147483647', 'IIT ISM Dhanbad', 0, 0, 1, 0, 1, 0),
(7, 'VikaSh', 'first time', '0vikash.kumar@gmail.com', 0, '2147483647', 'Indian Institute of Information Technology ALD', 0, 0, 1, 0, 1, 0),
(8, 'Surya Kumar Samadhiya', 'Suryaa', 'suryaasamadhiya@gmail.com', 0, '2147483647', 'IIT Dhanbad', 0, 0, 1, 0, 1, 0),
(9, 'aaa', 'aaa', 'aaa@aaa.com', 0, '1234567891', 'aaaa', 0, 0, 1, 0, 1, 0),
(10, 'Nikhil Tiwary', 'Nikhil', 'nikhiltiwarijt2015@gmail.com', 0, '2147483647', 'Netaji Subhash Engineering College', 0, 0, 1, 0, 1, 0),
(11, 'Nikhil Tiwary', 'Nikhil Tiwary', 'nikhiltiwari01121999@gmail.com', 0, '2147483647', 'Netaji Subhash Engineering College', 0, 0, 1, 0, 1, 0),
(12, 'Amit Kumar Jena', 'amitjena', 'amitjena40@gmail.com', 0, '2147483647', 'IIT Dhanbad', 0, 0, 1, 0, 1, 0),
(13, 'Debanjana Karmakar', 'Woody', 'debanjana.karmakar@gmail.com', 0, '2147483647', 'Netaji Subhash Engineering College', 0, 0, 1, 0, 1, 0),
(14, 'Tushar Gupta', 'battlemonger', 'tg170889@yahoo.com', 0, '2147483647', 'IIML', 0, 0, 1, 0, 1, 0),
(15, 'Nirmit Shah', 'Naughtyboy', 'nirmitshah191@gmail.com', 0, '2147483647', 'IIT ISM Dhanbad', 0, 0, 1, 0, 1, 0),
(16, 'ARUN KUMAR VERMA', 'AK Verma', 'arunkverma00@gmail.com', 0, '2147483647', 'IIT DHANBAD', 0, 0, 1, 0, 1, 0),
(17, 'Yash Bhansali', 'yash', 'yashbhansali0906@gmail.com', 0, '2147483647', 'IIIT HYDERABAD', 0, 0, 1, 0, 1, 0),
(18, 'Saket gupta', 'saketgupta', 'saket.16je002320@am.ism.ac.in', 0, '2147483647', 'IITISM Dhanbad', 0, 0, 1, 0, 1, 0),
(19, 'Ajit Kumar', 'utopia', 'ajitkumar3259@gmail.com', 0, '2147483647', 'IIT ISM', 0, 0, 1, 0, 1, 0),
(20, 'AMAN KUMAR', 'VECTOR', 'vector.9213@gmail.com', 0, '2147483647', 'NETAJI SUBHASH ENGINEERING COLLEGE KOLKATA', 0, 0, 1, 0, 1, 0),
(21, 'Tarun Kumar', 'tarunkr', 'kumartarun990@gmail.com', 0, '2147483647', 'IIT ISM DHANBAD', 0, 0, 1, 0, 1, 0),
(22, 'Bonda Eswar Charan', 'cypher', 'eswarcharan24@gmail.com', 0, '2147483647', 'IIT ISM DHANBAD', 0, 0, 1, 0, 1, 0),
(23, 'Kritik', 'Illuminati', 'kritikgarg123@gmail.com', 0, '2147483647', 'IIT ISM Dhanbad', 0, 0, 1, 0, 1, 0),
(24, 'Aditya Jethliya', 'Mr E', 'adityajet99@gmail.com', 0, '2147483647', 'IIT ISM  Dhanbad', 0, 0, 1, 0, 1, 0),
(25, 'Nishee Sharma', 'Nishee', 'sharmanishee1999@gmail.com', 0, '2147483647', 'IIT ISM Dhanbad', 0, 0, 1, 0, 1, 0),
(26, 'Dhyey Mistry', 'dhyeybm', 'dhyeybm@gmail.com', 0, '2147483647', 'IIT ISM Dhanbad', 0, 0, 1, 0, 1, 0),
(27, 'Hanuma shashank', 'Shashank', 'shanumashashank@gmail.com', 0, '2147483647', 'SASTRA UNIVERSITY', 0, 0, 1, 0, 1, 0),
(28, 'Jagadeesh', 'Aryaveer', 'jagadeeshpalem5@gmail.com', 0, '2147483647', 'IIT DHANBAD', 0, 0, 1, 0, 1, 0),
(29, 'Nilaya Agarwal', 'Nilaya', 'nilayaagarwal@gmail.com', 0, '2147483647', 'Delhi technological university', 0, 0, 1, 0, 1, 0),
(30, 'Ansh Bafna', 'AnshBafna', 'bafnaansh@gmail.com', 0, '2147483647', 'Iit ism dhanbad', 0, 0, 1, 0, 1, 0),
(31, 'Shubham Chhimpa', 'Developerguruji', 'chhimpa.shubh04@gmail.com', 0, '2147483647', 'Marudhar Engineering college Bikaner', 0, 0, 1, 0, 1, 0),
(32, 'Priyank Jangra', 'JrPriyank', 'jrpriyank3012@gmail.com', 0, '2147483647', 'YMCA UST', 0, 0, 1, 0, 1, 0),
(33, 'Ragesh V', 'ragesh', 'ragesh10ten@gmail.com', 0, '2147483647', 'saintgits', 0, 0, 1, 0, 1, 0),
(34, 'Yash Bhansali', 'YOOBOOY', 'yashbhansaliqwer@gmail.com', 0, '2147483647', 'IIIT H', 0, 0, 1, 0, 1, 0),
(35, 'Siba Sankar Sahu', 'ssibasankar', 'ssibasankar0@gmail.com', 0, '2147483647', 'IIT ISM DHANBAD', 0, 0, 1, 0, 1, 0),
(36, 'Divyansh Gupta', 'Digimon', 'gdivyansh57@gmail.com', 0, '2147483647', 'Indian institute of technology dhanbad', 0, 0, 1, 0, 1, 0),
(37, 'archit', 'architgoku', 'architkumar13@gmail.com', 0, '2147483647', 'IIT ISM DHANBAD', 0, 0, 1, 0, 1, 0),
(38, 'sameer jain', 'sameer jain', 'samrocks2000.sj@gmail.com', 0, '2147483647', 'IIT ISM DHANBAD', 0, 0, 1, 0, 1, 0),
(39, 'Sujay', 'Kaushik', 'sujaykaushik008@gmail.com', 0, '2147483647', 'Indian Institute of Technology Dhanbad', 0, 0, 1, 0, 1, 0),
(40, 'Rajat Pal', 'Rajat Pal', 'palrajat.948@gmail.com', 0, '2147483647', 'IIT ISM Dhanbad', 0, 0, 1, 0, 1, 0),
(41, 'Harsh Vardhan', 'TheSeeker', 'harshv47@gmail.com', 0, '2147483647', 'Indian Institute of Technology Dhanbad', 0, 0, 1, 0, 1, 0),
(42, 'R Aakash', 'raakash', 'akash.19990918@gmail.com', 0, '2147483647', 'IIT ISM Dhanbad', 0, 0, 1, 0, 1, 0),
(43, 'Devansh', 'Devansh', 'devansh5398@gmail.com', 0, '2147483647', 'IIT ISM Dhanbad', 0, 0, 1, 0, 1, 0),
(44, 'Vaibhav Dubey', 'Doyle', 'vaibhav77720@gmail.com', 0, '2147483647', 'IIT ISM DHANBAD', 0, 0, 1, 0, 1, 0),
(45, 'Zeeshanul Hoda', 'Zeeshanul Hoda', 'zhoda20001@gmail.com', 0, '2147483647', 'IIT ISM DHANBAD', 0, 0, 1, 0, 1, 0),
(46, 'Sushil Kumar', 'Rpsushil', 'rpsushil00@gmail.com', 0, '2147483647', 'IIT Dhanbad', 0, 0, 1, 0, 1, 0),
(47, 'Bhaskar Das', 'Bhazkar', 'bhazkardaz@gmail.com', 0, '2147483647', 'IIT ISM DHANBAD', 0, 0, 1, 0, 1, 0),
(48, 'Sarthak Goyal', 'Sarthak', 'goyalsarthak52@gmail.com', 0, '2147483647', 'Iit ism', 0, 0, 1, 0, 1, 0),
(49, 'Vinay Kumar', 'Gon freeces', '6023vinay@gmail.com', 0, '2147483647', 'IIT ISM DHANBAD', 0, 0, 1, 0, 1, 0),
(50, 'Ridhish Jain', 'Frost', 'ultimate.ridhish@gmail.com', 0, '2147483647', 'Indian Institute of Technology Dhanbad', 0, 0, 1, 0, 1, 0),
(51, 'suyash jaiswal', 'meme', 'suyashjaiswal778@gmail.com', 0, '2147483647', 'IIT ISM Dhanbad', 0, 0, 1, 0, 1, 0),
(52, 'Shubham Srivastava', 'treasureTeaser', 'srivastavashubham958@gmail.com', 0, '2147483647', 'IIT Dhanbad', 0, 0, 1, 0, 1, 0),
(53, 'Vasu Sehgal', 'vasu sehgal', 'vasu.sehgal123@gmail.com', 0, '2147483647', 'IIT Dhanbad', 0, 0, 1, 0, 1, 0),
(54, 'Aaron Dias Barreto', 'aaronadb', 'aaronadb@gmail.com', 0, '2147483647', 'IIT Dhanbad', 0, 0, 1, 0, 1, 0),
(55, 'NIKHIL KUMAR SHARMA', 'sasta sherlock', 'nikhil.harsh.sharma@gmail.com', 0, '2147483647', 'GAUTAM BUDDHA UNIVERSITY', 0, 0, 1, 0, 1, 0),
(56, 'Suryansh jaiswal', 'yai', 'suryansh.jaiswal789@gmail.com', 0, '2147483647', 'IIT ISM Dhanbad', 0, 0, 1, 0, 1, 0),
(57, 'Samruddha Patil', 'Samruddha patil', 'sampatil578@gmail.com', 0, '2147483647', 'Indian Institute of The Dhanbad', 0, 0, 1, 0, 1, 0),
(58, 'Veerendra Kumar', 'Veerendra Akiri', 'aveerendra14@gmail.com', 0, '2147483647', 'IIT ISM DHANBAD', 0, 0, 1, 0, 1, 0),
(59, 'Arpan bhatt', 'Arpan bhatt', 'arpanarpit2000@gmail.com', 0, '2147483647', 'IIT ISM DHANBAD', 0, 0, 1, 0, 1, 0),
(60, 'Yash Gohel', 'Master Po', 'yashg0095@gmail.com', 0, '2147483647', 'IIT Delhi', 0, 0, 1, 0, 1, 0),
(61, 'Harshit Jain', 'roboteer', 'harshitj950@gmail.com', 0, '2147483647', 'IIT ISM DHANBAD', 0, 0, 1, 0, 1, 0),
(62, 'Harsh Tripathi', 'HarshTripathi', 'harsh.t982@gmail.com', 0, '2147483647', 'IIT ISM Dhanbad', 0, 0, 1, 0, 1, 0),
(63, 'Roshan Kanwar', 'roshank', 'rkanwar0708@gmail.com', 0, '2147483647', 'IIT DHANBAD', 0, 0, 1, 0, 1, 0),
(64, 'Suraj Gupta', 'SurajGupta', 'surajgupta.149@gmail.com', 0, '2147483647', 'IIT ISM  DHANBAD', 0, 0, 1, 0, 1, 0),
(65, 'Villayat ali', 'Villy', 'villizain6@gmail.com', 0, '2147483647', 'IIT ISM DHANBAD', 0, 0, 1, 0, 1, 0),
(66, 'Jatin R Puthran', 'Jatin', 'rambojrpjanesha@gmail.com', 0, '2147483647', 'IIT ISM DHANBAD', 0, 0, 1, 0, 1, 0),
(67, 'Hritik Agarwal', 'Hritik', 'hritikagarwal456@gmail.com', 0, '2147483647', 'IIT Dhanbad', 0, 0, 1, 0, 1, 0),
(68, 'Yash Soni', 'hototogisu', 'yash17.ys4@gmail.com', 0, '2147483647', 'IIT ISM Dhanbad', 0, 0, 1, 0, 1, 0),
(69, 'Gowreesh Mago', 'gkrm', 'gkrm2727@gmail.com', 0, '2147483647', 'IIT ISM Dhanbad', 0, 0, 1, 0, 1, 0),
(70, 'Karthik Devarkonda', 'karthikdevarkonda', 'karthiklaxmikanth11@gmail.com', 0, '2147483647', 'IIT ISM Dhanbad', 0, 0, 1, 0, 1, 0),
(71, 'Aman kumar singh', 'amanthesrk', 'amanssnl490@gmail.com', 0, '2147483647', 'IIIT JABALPUR', 0, 0, 1, 0, 1, 0),
(72, 'Ankur Dua', 'ankurdua', 'ankurdua15@gmail.com', 0, '2147483647', 'IIT ISM DHANBAD', 0, 0, 1, 0, 1, 0),
(73, 'Ali Asgar Saifee', 'ali asgar saifee', 'rockali2001@gmail.com', 0, '2147483647', 'IIT ISM DHANBAD', 0, 0, 1, 0, 1, 0),
(74, 'Udit Khemka', 'Udit', 'uditkhemka.2000@gmail.com', 0, '2147483647', 'IIT ISM DHANBAD', 0, 0, 1, 0, 1, 0),
(75, 'Kaushiki Raj', 'Kaushikiraj', 'kaushikiraj029@gmail.com', 0, '2147483647', 'BIT Mesra', 0, 0, 1, 0, 1, 0),
(76, 'Rishabh Agarwal', 'rishabh', 'rishabh.agarwal997@gmail.com', 0, '2147483647', 'IIT ISM DHANBAD', 0, 0, 1, 0, 1, 0),
(77, 'Nikhil Sarda', 'nikhilsarda', 'nikhung.sarda231@gmail.com', 0, '2147483647', 'IIT ISM', 0, 0, 1, 0, 1, 0),
(78, 'Saransh Goyal', 'sarruhighaf', 'saranshgoyalsg@gmail.com', 0, '2147483647', 'IIT ISM Dhanbad', 0, 0, 1, 0, 1, 0),
(79, 'Yash Agarwal', 'Rocker', 'agarwalyash1220@gmail.com', 0, '2147483647', 'IIT ISM', 0, 0, 1, 0, 1, 0),
(80, 'sahil seli', 'sgoldy', 'sahilseli7236@gmail.com', 0, '2147483647', 'IIT ISM DHANBAD', 0, 0, 1, 0, 1, 0),
(81, 'Akshat Vaya', 'Akshat', 'akshatvaya1@gmail.com', 0, '2147483647', 'IIT ISM DHANBAD', 0, 0, 1, 0, 1, 0),
(82, 'Huean Rathore', 'huean', 'hueanrathore343@gmail.com', 0, '2147483647', 'IIT ISM Dhanbad', 0, 0, 1, 0, 1, 0),
(83, 'Hemant Kumar', 'heman me', 'hemnt007@gmail.com', 0, '2147483647', 'Indian Institute of Technology ISM DHANBAD', 0, 0, 1, 0, 1, 0),
(84, 'Akash Kulshrestha', 'Akash kul', 'akashkulshrestha7@gmail.com', 0, '9958457414', 'IIT ISM DHANBAD', 0, 0, 1, 0, 1, 0),
(85, 'Hemant Kumar Marai', 'Hemant M', 'hemantmarai1412@gmail.com', 0, '8224095028', 'IIT ISM DHANBAD', 0, 0, 1, 0, 1, 0),
(86, 'YASH GOENKA', 'YASH GOENKA', 'yashgoenka.sjc@gmail.com', 0, '8638545770', 'IIT ISM DHANBAD', 0, 0, 1, 0, 1, 0),
(87, 'Himanshu Verma', 'Arthur', 'himanshuverma0099@gmail.com', 0, '7839243675', 'IIT ISM Dhanbad', 0, 0, 1, 0, 1, 0),
(88, 'Mohammed Fazal A Khattal', 'Fazal', 'fazalkhattal@gmail.com', 0, '8451076826', 'IIT ISM Dhanbad', 0, 0, 1, 0, 1, 0),
(89, 'Harish kumar ratre', 'harish ratre', 'hkratre4@gmail.com', 0, '6364837657', 'IIT ISM DHANBAD', 0, 0, 1, 0, 1, 0),
(90, 'Himalay Gupta', 'Himalay', 'guptahimalay99@gmail.com', 0, '8294834302', 'IITISM DHANBAD', 0, 0, 1, 0, 1, 0),
(91, 'Akash Sahu', 'Akash', 'akash076923@gmail.com', 0, '9835153014', 'Iit ism dhanbad', 0, 0, 1, 0, 1, 0),
(92, 'Brajesh kanwar', 'Brajesh kanwar', 'brajeshkanwar000@gmail.com', 0, '7999484256', 'IIT ism Dhanbad', 0, 0, 1, 0, 1, 0),
(93, 'Satyavart', 'Genos', 'satyavarty591@gmail.com', 0, '9801853516', 'Ism Dhanbad', 0, 0, 1, 0, 1, 0),
(94, 'Sankalp', 'Sankalp', 'sankalp.18je0728@mech.iitism.ac.in', 0, '6209274655', 'IIT ISM Dhanbad', 0, 0, 1, 0, 1, 0),
(95, 'Anuj kumar singh', 'Anuj', 'anujkkumarsingh@gmail.com', 0, '9457066608', 'Iit ism dhanbad', 0, 0, 1, 0, 1, 0),
(96, 'Debjyoti Mondal', 'kittu', 'nick.kittu@live.in', 0, '8116671020', 'IIT Dhanbad', 0, 0, 1, 0, 1, 0),
(97, 'Sourav Prasad', 'Souravpd', 'prasadsourav552@gmail.com', 0, '7209243590', 'IIT ism dhanbad', 0, 0, 1, 0, 1, 0),
(98, 'BOT', 'BOT', 'xotid@utoo.email', 0, '1212121211', 'NEURON INSTITUTE OF TECHNOLOGY', 0, 0, 1, 0, 1, 0),
(99, 'soumya prakash', 's soumya', 'ssoumyaprakash05@gmail.com', 0, '9784319046', 'IIT ISM', 0, 0, 1, 0, 1, 0),
(100, 'Birjoy K Sonowal', 'Rhinobks', 'birjoykrishnan@gmail.com', 0, '9132207571', 'IIT ISM DHANBAD', 0, 0, 1, 0, 1, 0),
(101, 'Birjoy K Sonowal', 'Rhinobks', 'birjoyks1509@gmail.com', 0, '7002086107', 'Indian Institute of Technology ISM Dhanbad', 0, 0, 1, 0, 1, 0),
(102, 'Archisman Bhattacharjee', 'Spike Spiegel', 'ricardoarc007@gmail.com', 0, '9101036683', 'Indian Institute of Technology ISM Dhanbad', 0, 0, 1, 0, 1, 0),
(103, 'Ayush Goutam', 'ayush goutam', 'ayush.goutam23@gmail.com', 0, '8962329469', 'ISM dhanbad', 0, 0, 1, 0, 1, 0),
(104, 'Bharat Sharma', 'Jerry', 'bharatsharma744@yahoo.com', 0, '9811488583', 'IIT DHANBAD', 0, 0, 1, 0, 1, 0),
(105, 'Akash Nirwan', 'Niraka', 'akashnirwan06@gmail.com', 0, '9431784376', 'IIT ISM Dhanbad', 0, 0, 1, 0, 1, 0),
(106, 'Ankita Patel', 'Ankita Patel', 'ankitapatel23240@gmail.com', 0, '9929573169', 'Indian Institute of technology Ism dhanbad', 0, 0, 1, 0, 1, 0),
(107, 'Manas Chaurasia', 'Manas', 'manasch4@gmail.com', 0, '9111787424', 'UIT RGPV', 0, 0, 1, 0, 1, 0),
(108, 'dolamanee', 'Dolamanee Naik', 'dolamanee6122@gmail.com', 0, '6264701778', 'IIT ISM DHANBAD', 0, 0, 1, 0, 1, 0),
(109, 'Popescu Mihai', 'MishuAnubis', 'mishu.arad@gmail.com', 0, '0723120014', 'Romania', 0, 0, 1, 0, 1, 0),
(110, 'Sujatro Majumder', 'T Sujatro', 'msujatro@gmail.com', 0, '8777643349', 'Indian Institute of Technology Dhanbad', 0, 0, 1, 0, 1, 0),
(111, 'Navneet Das', 'ImBunny', 'navv.16je002396@ee.ism.ac.in', 0, '8802151814', 'IIT ISM Dhanbad', 0, 0, 1, 0, 1, 0),
(112, 'Gowreesh Mago', 'gkrm', 'gkrm2727.18je0317@am.iitism.ac.in', 0, '8847284255', 'IIT ISM Dhanbad', 0, 0, 1, 0, 1, 0),
(113, 'Gowreesh Mago', 'alphaboi', 'stellaarora1412@gmail.com', 0, '6209274697', 'IIT ISM Dhanbad', 0, 0, 1, 0, 1, 0),
(114, 'Guguloth Saikumar', 'Saikumar', 'gugulothsaikumar76@gmail.com', 0, '7993195390', 'IIT DHANBAD', 0, 0, 1, 0, 1, 0),
(115, 'Uday chandra', 'Uday chandra', 'udaychandra6670@gmail.com', 0, '9177173468', 'Indian institute of technology ISM dhanbad', 0, 0, 1, 0, 1, 0),
(116, 'FDDFFDF', 'DFFFFF', 'FFDFD@DFD.FD', 0, '3232323232', 'SDSDSSD', 0, 0, 1, 0, 1, 0),
(117, 'Navneet Das', 'ImBunnny', 'techotech@outlook.com', 0, '8851059496', 'IIT ISM Dhanbad', 0, 0, 1, 0, 1, 0),
(118, 'FDDFFDF', 'DFFFFF', 'profitmonger@rafmail.cf', 0, '323232312', 'SDSDSSD', 0, 0, 1, 0, 1, 0),
(119, 'Ankit Kumar', 'sankyism', 'ankitiitism@gmail.com', 0, '7979938243', 'IIT ISM dhanbad', 0, 0, 1, 0, 1, 0),
(120, 'dffd', 'dffd', 'profitmonger@2lyvui3rlbx9.ga', 0, '4545454545', 'cxccxcxxc', 0, 0, 1, 0, 1, 0),
(121, 'Abhishek Jain', 'Abhishek Jain', 'abhi510j@gmail.com', 0, '7055157291', 'Indian Institute of Technology Dhanbad', 0, 0, 1, 0, 1, 0),
(122, 'Harharjot Singh Pama', 'harharjot', 'harharjot.singh2312@gmail.com', 0, '7987115113', 'IIT ISM DHANBAD', 0, 0, 1, 0, 1, 0),
(123, 'puneet mandil', 'devil ape', 'puneetmandil@gmail.com', 0, '6264209081', 'IIT BHU', 0, 0, 1, 0, 1, 0),
(124, 'DHIRAV CHOUDHARY', 'Jai Mata Di', 'dhiravchoudhary@gmail.com', 0, '9836454032', 'Indian Institute of Technology Kharagpur', 0, 0, 1, 0, 1, 0),
(125, 'DHIRAV CHOUDHARY', 'Jai Mata Di', 'dhiravchoudhary2151@gmail.com', 0, '8585853750', 'IIT Kharagpur', 0, 0, 1, 0, 1, 0),
(126, 'Hardik', 'HARDik', 'hardikdhawan51767@gmail.com', 0, '9306533898', 'IIT ISM Dhanbad', 0, 0, 1, 0, 1, 0),
(127, 'Nitesh Chandra dhusiya', 'Nitesh dhusiya', 'niteshchandra30@gmail.com', 0, '6377621130', 'IIT ISM DHANBAD', 0, 0, 1, 0, 1, 0),
(128, 'Sourav kumar', 'The stranger', 'skostwal288@gmail.com', 0, '8949293061', 'Rajasthan technical university', 0, 0, 1, 0, 1, 0),
(129, 'Siddharth Singh', 'FOURIERSmojito', 'sidhart185@gmail.com', 0, '7352693113', 'IIT Dhanbad', 0, 0, 1, 0, 1, 0),
(130, 'Siddharth Singh', 'fouriersmojito', 'sid1851998@gmail.com', 0, '7702259236', 'IIT Dhanbad', 0, 0, 1, 0, 1, 0),
(131, 'HARSH RAJ', 'harshraj', 'rajharsh334@gmail.com', 0, '7541856923', 'IIT ISM DHANBAD', 0, 0, 1, 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `questionpath` varchar(100) NOT NULL,
  `hint1` varchar(300) NOT NULL,
  `hint2` varchar(300) NOT NULL,
  `answer` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
