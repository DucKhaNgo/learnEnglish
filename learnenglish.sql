-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 04, 2019 lúc 05:20 PM
-- Phiên bản máy phục vụ: 10.1.35-MariaDB
-- Phiên bản PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `learnenglish`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `answerfirsttest`
--

CREATE TABLE `answerfirsttest` (
  `question` int(11) NOT NULL,
  `answer` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `answerfirsttest`
--

INSERT INTO `answerfirsttest` (`question`, `answer`) VALUES
(1, 'bought'),
(2, 'will be'),
(3, 'where'),
(4, 'who'),
(5, 'since'),
(6, 'much'),
(7, 'had'),
(8, 'do not like'),
(9, 'worse'),
(10, 'many'),
(11, 'sea'),
(12, 'week'),
(13, 'then'),
(14, 'for'),
(15, 'am writing'),
(16, 'his'),
(17, 'an'),
(18, 'children'),
(19, 'them'),
(20, 'carefully');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `answergrammartest`
--

CREATE TABLE `answergrammartest` (
  `sub_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `LevelFT` varchar(255) NOT NULL,
  `Level` int(11) NOT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `answergrammartest`
--

INSERT INTO `answergrammartest` (`sub_id`, `id`, `LevelFT`, `Level`, `answer`) VALUES
(1, 1, 'beginer', 1, 'whose'),
(2, 1, 'beginer', 1, 'making'),
(3, 1, 'beginer', 1, 'would have been forgot'),
(4, 1, 'beginer', 1, 'would hurry up'),
(5, 1, 'beginer', 1, 'had been stung'),
(6, 1, 'beginer', 1, 'Forced to make many cancellations, the band didn’t perform as many concerts as was announced prior to their tour.'),
(1, 2, 'beginer', 1, 'whose'),
(2, 2, 'beginer', 1, 'to handle'),
(3, 2, 'beginer', 1, 'could have climbed'),
(4, 2, 'beginer', 1, 'were'),
(5, 2, 'beginer', 1, 'protecting'),
(6, 2, 'beginer', 1, 'I do not know much about Jean’s success in the institute.'),
(1, 3, 'beginer', 1, 'whose'),
(2, 3, 'beginer', 1, 'to attend'),
(3, 3, 'beginer', 1, 'would have gotten'),
(4, 3, 'beginer', 1, 'would'),
(5, 3, 'beginer', 1, 'was sent'),
(6, 3, 'beginer', 1, 'We have got many things to do this Sunday.'),
(1, 4, 'beginer', 1, 'each of which'),
(2, 4, 'beginer', 1, 'which was bought'),
(3, 4, 'beginer', 1, 'will make'),
(4, 4, 'beginer', 1, 'would be'),
(5, 4, 'beginer', 1, 'are'),
(6, 4, 'beginer', 1, 'Let your parents always be respected.'),
(1, 5, 'beginer', 1, 'most of which'),
(2, 5, 'beginer', 1, 'attending'),
(3, 5, 'beginer', 1, 'if you are polite to them'),
(4, 5, 'beginer', 1, 'would do'),
(5, 5, 'beginer', 1, 'fixing'),
(6, 5, 'beginer', 1, 'anything'),
(1, 6, 'beginer', 1, 'whose'),
(2, 6, 'beginer', 1, 'seeking'),
(3, 6, 'beginer', 1, 'would have contacted'),
(4, 6, 'beginer', 1, 'played'),
(5, 6, 'beginer', 1, 'to have successfully made'),
(6, 6, 'beginer', 1, 'That little joke really caused a lot of trouble for me.'),
(1, 7, 'beginer', 1, 'whose'),
(2, 7, 'beginer', 1, 'confirming'),
(3, 7, 'beginer', 1, 'come'),
(4, 7, 'beginer', 1, 'would be'),
(5, 7, 'beginer', 1, 'taken'),
(6, 7, 'beginer', 1, 'Let cricket not be played.'),
(1, 8, 'beginer', 1, 'whose'),
(2, 8, 'beginer', 1, 'recognized'),
(3, 8, 'beginer', 1, 'hadnt been'),
(4, 8, 'beginer', 1, 'would meet'),
(5, 8, 'beginer', 1, 'must be followed'),
(6, 8, 'beginer', 1, 'Carol told us to listen to that song\r\n'),
(1, 9, 'beginer', 1, 'which'),
(2, 9, 'beginer', 1, 'which is playing'),
(3, 9, 'beginer', 1, 'wouldnt have been'),
(4, 9, 'beginer', 1, 'were'),
(5, 9, 'beginer', 1, 'was caught'),
(6, 9, 'beginer', 1, 'In order to look taller, Madeleine wears highheels.'),
(1, 10, 'beginer', 1, 'which'),
(2, 10, 'beginer', 1, 'detailed'),
(3, 10, 'beginer', 1, 'were asked'),
(4, 10, 'beginer', 1, 'could lend'),
(5, 10, 'beginer', 1, 'has been convicted'),
(6, 10, 'beginer', 1, 'He has learned French for sixyears.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `answer_listening`
--

CREATE TABLE `answer_listening` (
  `levelFT` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `question1` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `question2` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `question3` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `question4` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `question5` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `answer_listening`
--

INSERT INTO `answer_listening` (`levelFT`, `level`, `id`, `question1`, `question2`, `question3`, `question4`, `question5`) VALUES
('Beginer', 1, 1, 'B', 'D', 'A', 'B', 'A'),
('Intermediate', 1, 2, 'A', 'D', 'A', 'B', 'D');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `answer_vocabulary`
--

CREATE TABLE `answer_vocabulary` (
  `id` int(11) NOT NULL,
  `LevelFT` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Level` int(11) DEFAULT NULL,
  `question1` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `question2` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `question3` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `question4` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `question5` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `answer_vocabulary`
--

INSERT INTO `answer_vocabulary` (`id`, `LevelFT`, `Level`, `question1`, `question2`, `question3`, `question4`, `question5`) VALUES
(1, 'Beginer', 1, 'B', 'D', 'C', 'B', 'A'),
(2, 'Beginer', 2, 'B', 'A', 'A', 'D', 'B'),
(3, 'Beginer', 3, 'A', 'A', 'D', 'C', 'C'),
(4, 'Beginer', 4, 'D', 'B', 'A', 'C', 'C'),
(5, 'Beginer', 5, 'A', 'A', 'C', 'D', 'B'),
(6, 'Intermediate', 1, 'A', 'A', 'D', 'C', 'C');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `comments` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`id`, `email`, `comments`) VALUES
(1, 'hd@gmail.com', 'hoaidien pro no 1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `firsttest`
--

CREATE TABLE `firsttest` (
  `id` int(11) NOT NULL,
  `questionPart1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `questionPart2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `answerA` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `answerB` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `answerC` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `answerD` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `firsttest`
--

INSERT INTO `firsttest` (`id`, `questionPart1`, `questionPart2`, `answerA`, `answerB`, `answerC`, `answerD`) VALUES
(1, 'I', 'a new bike yesterday.', 'buy', 'bought', 'have bought', 'have been bought'),
(2, 'If you don\'t hurry up now, you', 'late for school.', 'have been', 'are', 'will be', 'are being'),
(3, 'Can you tell me', 'the station is?', 'when', 'that', 'where', 'which'),
(4, 'Do you know the man', 'is talking to your brother?', 'who', 'which', 'that', 'whose'),
(5, 'I haven\'t been on holiday', '1996', 'for', 'since', 'when', 'until'),
(6, 'I don\'t have', 'money.', 'much', 'more', 'many', 'some'),
(7, 'I would spend my holidays in the USA if I', 'enough money.', 'have', 'had', 'would', 'would have'),
(8, 'They', 'water sports.', 'like not', 'are not like', 'do not like', 'would not like'),
(9, 'The weather today is even', 'than yesterday.', 'bad', 'badder', 'worse', 'more bad'),
(10, 'How', 'people can you see outside?', 'much', 'many', 'about', 'are'),
(11, 'They were swimming in the', '.', 'sea', 'see', 'bowl', 'sky'),
(12, 'Let\'s meet again next', '.', 'week', 'weak', 'mouth', 'again'),
(13, 'We ate breakfast and', 'we left the house.', 'than', 'then', 'now', 'next'),
(14, 'I haven\'t been to London', 'three years.', 'for', 'since', 'before', 'after'),
(15, 'I', 'a test at the moment.', 'write', 'writes', 'is writing', 'am writing'),
(16, 'Charles met', 'friends at the club last night.', 'he', 'him', 'a', 'his'),
(17, 'Would you like', 'apple?', 'a', 'an', 'many', 'a little'),
(18, 'My sister has four', '.', 'child', 'childs', 'children', 'childrens'),
(19, 'Give', 'the book.', 'his', 'mine', 'we', 'them'),
(20, 'He opened the box', '.', 'careful', 'carefully', 'now', 'then');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `grammartest`
--

CREATE TABLE `grammartest` (
  `levelFT` varchar(255) NOT NULL,
  `level` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `questionPart1` varchar(255) DEFAULT NULL,
  `questionPart2` varchar(255) DEFAULT NULL,
  `answerA` varchar(255) DEFAULT NULL,
  `answerB` varchar(255) DEFAULT NULL,
  `answerC` varchar(255) DEFAULT NULL,
  `answerD` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `grammartest`
--

INSERT INTO `grammartest` (`levelFT`, `level`, `sub_id`, `id`, `questionPart1`, `questionPart2`, `answerA`, `answerB`, `answerC`, `answerD`) VALUES
('beginer', 1, 1, 1, 'I met a lot of new people at the party', 'names I can’t remember.', 'whose', 'which', 'who', 'whom'),
('beginer', 1, 1, 2, 'The girl', 'dress you admire has been working for an Egpo company since she left school.', 'who', 'what', 'whose', 'whom'),
('beginer', 1, 1, 3, 'When I was at school, there was a girl in my class', 'skin was so sensitive that she couldn’t expose her skin to the sun even with cream on.', 'where', 'whose', 'whom', 'that'),
('beginer', 1, 1, 4, 'The periodic table contains all the elements, ', 'has a particular atomic weight and atomic number. ', 'which of each', 'each of which', 'which each', 'each'),
('beginer', 1, 1, 5, 'I saw several buildings,', 'were damaged by the earthquake. ', 'most of which', 'most of them', 'all of whom', 'some of whose'),
('beginer', 1, 1, 6, 'He is the man', 'son is a doctor', 'whom', 'which', 'who', 'whose'),
('beginer', 1, 1, 7, 'The physics teacher,', 'behaviour I don’t like much, makes thing harder for the students. ', 'who', 'that', 'whom', 'whose'),
('beginer', 1, 1, 8, 'This is Henry,', 'sister works for my father. ', 'who', 'whose', 'that', 'A & C'),
('beginer', 1, 1, 9, 'Tom made a number of suggestions, most of', 'were very helpful. ', 'them', 'which', 'that', 'A & C'),
('beginer', 1, 1, 10, 'I know a boy', 'name is John.', 'who', 'whose', 'whom', 'that'),
('beginer', 1, 2, 1, 'He was impressed with the representative', 'speech at the conference last Monday.', 'made', 'was making', 'making', 'to make'),
('beginer', 1, 2, 2, 'Leslie was the only student', 'this problem. ', 'who could handle', 'to handle', 'handle', 'handling'),
('beginer', 1, 2, 3, 'Here are four students representing our university', 'the Asian Meeting next week. ', 'attend', 'attending', 'to attend', 'attended'),
('beginer', 1, 2, 4, 'This is the house', 'by his father five years ago. ', 'were bought', 'was bought', 'which bought', 'which was bought'),
('beginer', 1, 2, 5, 'The management has assured all staffs that anyone', 'the professional development seminars will receive a certificate thanking them for their participation.', 'attend ', 'attended', 'attending', 'to attend'),
('beginer', 1, 2, 6, 'Any construction workers', 'overtime work should immediately speak to their supervisor right after this announcement.', 'seek', 'seeks', 'seeking', 'will seek'),
('beginer', 1, 2, 7, 'Mr. Samuel of Gold Star Travel has just sent me an e-mail', 'my flight to Toronto next Tuesday at 8:15 P.M.', 'confirms', 'confirming', 'confirmed', 'confirmation'),
('beginer', 1, 2, 8, 'Bellucci Media Inc. is a marketing firm internationally', 'as one of the most successful company throughout Europe, East Asia, and the America.', 'recognized', 'recognizing', 'recognizes', 'is recognized'),
('beginer', 1, 2, 9, 'Do you know the song', 'on the radio?', 'playing', 'which plays', 'which is playing', 'which is being played'),
('beginer', 1, 2, 10, 'Please complete the return list', 'the reason for the return and it will be processed promply.', 'detail', 'detailed', 'detailing', 'in detail'),
('beginer', 1, 3, 1, 'It', 'if nobody had reminded them.', 'would have be forgot', 'would have been forgot', 'would have forget', 'would have been forget'),
('beginer', 1, 3, 2, 'If the tree hadn’t been so high, he', 'it up to take his kite down.', 'could have climbed', 'climb', 'is climbing', 'climbed'),
('beginer', 1, 3, 3, 'Had I known the carpenter was going to take three days to show up, I', 'the materials and done the work myself. It would be finished by now.', 'will get', 'might get', 'would have gotten', 'will have gotten'),
('beginer', 1, 3, 4, 'I', 'one of my special desserts for dinner, if you like ', 'make', 'will make', 'am going to make', 'am making'),
('beginer', 1, 3, 5, 'Most people you meet will be polite to you', '', 'if you are polite to them', 'if you will be polite to them', 'unless you are polite to them', 'if you were polite to them'),
('beginer', 1, 3, 6, 'I lost your phone number. Otherwise, I', 'you much earlier', 'will contact', 'would have contacted', 'would contact', 'had contacted'),
('beginer', 1, 3, 7, 'You will get a good seat if you', 'first.', 'come', 'came', 'have come', 'will come'),
('beginer', 1, 3, 8, 'I would have visited you before if there', 'quite a lot of people in your house.', 'had not', 'hadnt been', 'wouldnt be', 'wasnt'),
('beginer', 1, 3, 9, 'If you had caught the bus, you', 'late for work.', 'wouldnt have been', 'would have been', 'wouldn’t be', 'would be'),
('beginer', 1, 3, 10, 'If I', ', I would express my feelings.', 'were asked', 'would ask', 'had been asked', 'asked'),
('beginer', 1, 4, 1, 'I wish you', '- we’re going to be late.', 'will hurry up', 'hurried up', 'are hurrying up', 'would hurry up'),
('beginer', 1, 4, 2, 'I wish Sarah', 'here now.', 'is', 'were', 'would be', 'will be'),
('beginer', 1, 4, 3, 'She wishes she', 'come here to visit us.', 'will', 'would', 'can', 'may'),
('beginer', 1, 4, 4, 'She wishes she', 'a doctor in the future.', 'is', 'were', 'will be', 'would be'),
('beginer', 1, 4, 5, 'I wish you', 'something instead of just sitting and doing nothing.', 'do', 'should', 'will do', 'would do'),
('beginer', 1, 4, 6, 'I wish they', 'soccer well.', 'played', 'playing', 'plays', 'play'),
('beginer', 1, 4, 7, 'I wish tomorrow', 'I wish tomorrow', 'were', 'will be', 'would be', 'be'),
('beginer', 1, 4, 8, 'I wish I', 'her tomorrow.', 'would meet', 'met', 'have met', 'meet '),
('beginer', 1, 4, 9, 'I wish I', 'a movie star', 'am', 'was', 'were', 'be'),
('beginer', 1, 4, 10, 'I wish I', 'you some money for your rent, but I’m broke myself.', 'can lend', 'would lend', 'could lend', 'will lend'),
('beginer', 1, 5, 1, 'The children’s arm was swollen because he', 'by a bee.', 'stung', 'had stung', 'had been stung', 'had being stung'),
('beginer', 1, 5, 2, 'The tender plants need', 'against the cold weather.', 'protecting', 'to protect', 'protection', 'A&C are correct'),
('beginer', 1, 5, 3, ' “What happened to the postman?” “He', 'to a new town to work.', 'has sent', 'was send', 'was sent', 'sent'),
('beginer', 1, 5, 4, 'Mercedes cars', 'made in Germany.', 'are', 'is', 'will be', 'had'),
('beginer', 1, 5, 5, 'His car needs', '', 'be fixed', 'fixing', 'to be fixing', 'Fixed'),
('beginer', 1, 5, 6, 'A mechanic in Binh Duong is said', '(successfully make) a helicopter.', 'to have successfully made', 'to have been successfully made', 'to have been successfully made', 'A & C are correct'),
('beginer', 1, 5, 7, 'Excuse me. Is this seat', '', 'taking', 'took', 'occupy', 'taken'),
('beginer', 1, 5, 8, 'These instructions', 'precisely.', 'must follow', 'must followed', 'must to be followed', 'must be followed'),
('beginer', 1, 5, 9, '\"It', 'by Thelma Rivers\".', 'was catching', 'caught', 'was caught', 'catch'),
('beginer', 1, 5, 10, ' \"Why is Stanley in jail?\" \"He', 'of robbery\".', 'has been convicted', 'has been convicting', 'has convicted', 'convicted'),
('beginer', 1, 6, 1, 'The band had to cancel quite a new of their concerts that had been announced before they began their tour.', '', 'The number of concerts announced before the band’s tour started was different from that which they actually performed.', 'Forced to make many cancellations, the band didn’t perform as many concerts as was announced prior to their tour.', 'So many of their scheduled concerts were cancelled that the band ended up performing only a new by the end of their tour.', 'The band had to cancel most of the concerts which were announced at the beginning of their tour.'),
('beginer', 2, 6, 1, 'I hardly know the truth about Jean’s success in the institute.', '', 'Jean’s success in the institute was not to be known.', 'It is difficult for Jean to be successful in the institute.', 'I do not know much about Jean’s success in the institute.', 'Jean hardly become known and successful in the institute.'),
('beginer', 3, 6, 1, 'things / do / this / got / we / many / to / have / Sunday.', '', 'We have got this Sunday do many things to.', 'We have got this Sunday many things to do.', 'We have got many things to do this Sunday.', 'We have got many things this Sunday to do.'),
('beginer', 4, 6, 1, 'Respect you parents always.', '', 'Let your parents be always respected.', 'Let your parents always respected.', 'Let your parents always be respected.\r\n', 'No answer is correct'),
('beginer', 5, 6, 1, ' He doesn’t catch anything. He never catches', '', 'nothing', 'anything', 'something', 'everything'),
('beginer', 6, 6, 1, 'That little joke really got me into deep water.', '', 'That little joke really caused a lot of trouble for me.', 'That little joke really brought me a lot of pleasure.\r\n', 'That little joke really made me fall into the water.', 'That little joke really made me enjoy being in the water.'),
('beginer', 7, 6, 1, 'Don’t play cricket.', '', 'Let cricket be played not.', 'Let not cricket be played.', 'Let cricket not be played.', 'No answer is correct'),
('beginer', 8, 6, 1, 'Carol: “Listen to that song”', '', 'Carol said to listen that song', 'Carol told us to listen to that song', 'Carol asked us to listen to this song', 'Carol talked me to listen to that song'),
('beginer', 9, 6, 1, 'Madeleine wears high heels to looktaller.', '', 'In order to look taller, Madeleine wears highheels.', 'So that to look taller, Madeleine wears highheels.', 'Madeleine wants high heels to make hertaller.', 'Madeleine buys high heels to looktaller.'),
('beginer', 10, 6, 1, 'He started learning French six yearsago.', '', 'He has learned French for sixyears.', 'It was six years ago did he start learningFrench.', 'He hasn’t learnt French for sixyears.', 'It is six years since he has learntFrench.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `levellistening`
--

CREATE TABLE `levellistening` (
  `level_FT` varchar(50) NOT NULL,
  `level` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `levellistening`
--

INSERT INTO `levellistening` (`level_FT`, `level`, `name`) VALUES
('Beginer', 1, 'Environment'),
('Beginer', 2, 'Computer'),
('Intermediate', 1, 'Daily Activities'),
('Intermediate', 2, 'Computer');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `levelvocabulary`
--

CREATE TABLE `levelvocabulary` (
  `level_FT` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `levelvocabulary`
--

INSERT INTO `levelvocabulary` (`level_FT`, `level`, `name`) VALUES
('Beginer', 1, 'Environment'),
('Beginer', 2, 'Learning tools'),
('Beginer', 3, 'Entertainment'),
('Beginer', 4, 'Daily Activities'),
('Beginer', 5, 'Computer'),
('Intermediate', 1, 'Entertainment'),
('Intermediate', 2, 'Daily Activities');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `listening`
--

CREATE TABLE `listening` (
  `levelFT` varchar(50) NOT NULL,
  `level` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `word` varchar(50) DEFAULT NULL,
  `url` varchar(50) DEFAULT NULL,
  `mean` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `listening`
--

INSERT INTO `listening` (`levelFT`, `level`, `id`, `word`, `url`, `mean`) VALUES
('Beginer', 1, 1, 'Land', '/sound/land.mp3', 'Đất,Vùng đất'),
('Beginer', 1, 2, 'Pollute', '/sound/pollute.mp3', 'Gây ô nhiễm'),
('Beginer', 1, 3, 'Decompose', '/sound/decompose.mp3', 'Phân hủy'),
('Beginer', 1, 4, 'Balance', '/sound/balance.mp3', 'Cân bằng'),
('Beginer', 1, 5, 'Climate Change', '/sound/climate_change.mp3', 'Thay đổi khí hậu'),
('Beginer', 1, 6, 'Global warning', '/sound/global_warning.mp3', 'Nóng lên toàn cầu'),
('Beginer', 1, 7, 'Oil Slick', '/sound/oil_slick.mp3', 'Tràn dầu'),
('Beginer', 1, 8, 'Ozone Layer', '/sound/ozone_layer.mp3', 'Tâng Ozôn'),
('Beginer', 1, 9, 'Biodiversity', '/sound/biodiversity.mp3', 'Đa dạng sinh học'),
('Beginer', 1, 10, 'Ecology', '/sound/ecology.mp3', 'Sinh thái học'),
('Beginer', 2, 1, 'Monitor', '/sound/monitor.mp3', 'Màn hình máy tính'),
('Beginer', 2, 2, 'Mouse pad', '/sound/mouse_pad.mp3', 'Tấm lót chuột'),
('Beginer', 2, 3, 'Printer', '/sound/printer.mp3', 'Máy in'),
('Beginer', 2, 4, 'Scanner', '/sound/scanner.mp3', 'Máy quét'),
('Beginer', 2, 5, 'Open', '/sound/open.mp3', 'Khởi động, mở'),
('Beginer', 2, 6, 'Close', '/sound/close.mp3', 'Đóng, ngừng hoạt động'),
('Beginer', 2, 7, 'Delete', '/sound/delete.mp3', 'Xóa'),
('Beginer', 2, 8, 'Insert', '/sound/insert.mp3', 'Lồng vào,Chèn vào'),
('Beginer', 2, 9, 'Merge', '/sound/merge.mp3', 'Sát nhập,hợp nhất'),
('Beginer', 2, 10, 'Helpline', '/sound/helpline.mp3', 'Đường dây trợ giúp'),
('Intermediate', 1, 1, 'Brush your teeth', '/sound/brush_your_teeth.mp3', 'Đánh răng'),
('Intermediate', 1, 2, 'Buy', '/sound/buy.mp3', 'Mua'),
('Intermediate', 1, 3, 'Comn', '/sound/comb.mp3', 'Chải'),
('Intermediate', 1, 4, 'Cook', '/sound/cook.mp3', 'Nấu ăn'),
('Intermediate', 1, 5, 'Homework', '/sound/homework.mp3', 'Bài tập về nhà'),
('Intermediate', 1, 6, 'Eat in', '/sound/eat_in.mp3', 'Ăn ở nhà'),
('Intermediate', 1, 7, 'Eat out', '/sound/eat_out.mp3', 'Ăn ở ngoài'),
('Intermediate', 1, 8, 'Feed on', '/sound/feed_on.mp3', 'Cho ăn'),
('Intermediate', 1, 9, 'Get up', '/sound/get_up.mp3', 'Thức dậy'),
('Intermediate', 1, 10, 'Go home', '/sound/go_home.mp3', 'Về nhà'),
('Intermediate', 2, 1, 'Monitor', '/sound/monitor.mp3', 'Màn hình máy tính'),
('Intermediate', 2, 2, 'Mouse pad', '/sound/mouse_pad.mp3', 'Tấm lót chuột'),
('Intermediate', 2, 3, 'Printer', '/sound/printer.mp3', 'Máy in'),
('Intermediate', 2, 4, 'Scanner', '/sound/scanner.mp3', 'Máy quét'),
('Intermediate', 2, 5, 'Open', '/sound/open.mp3', 'Khởi động, mở'),
('Intermediate', 2, 6, 'Close', '/sound/close.mp3', 'Đóng, ngừng hoạt động'),
('Intermediate', 2, 7, 'Delete', '/sound/delete.mp3', 'Xóa'),
('Intermediate', 2, 8, 'Insert', '/sound/insert.mp3', 'Lồng vào,Chèn vào'),
('Intermediate', 2, 9, 'Merge', '/sound/merge.mp3', 'Sát nhập,hợp nhất'),
('Intermediate', 2, 10, 'Helpline', '/sound/helpline.mp3', 'Đường dây trợ giúp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `listeningtest`
--

CREATE TABLE `listeningtest` (
  `levelFT` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `answerA` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `answerB` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `answerC` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `answerD` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `listeningtest`
--

INSERT INTO `listeningtest` (`levelFT`, `level`, `id`, `url`, `answerA`, `answerB`, `answerC`, `answerD`) VALUES
('Beginer', 1, 1, '/sound/balance.mp3', 'Blue', 'Balance', 'Black', 'Ballad'),
('Intermediate', 1, 1, '/sound/buy.mp3', 'Buy', 'By', 'Bee', 'Bye'),
('Beginer', 1, 2, '/sound/pollute.mp3', 'Balance', 'ImPolice', 'Police', 'Pollute'),
('Intermediate', 1, 2, '/sound/comb.mp3', 'Come', 'Comfor', 'Combo', 'Comb'),
('Beginer', 1, 3, '/sound/land.mp3', 'Land', 'Lang', 'Lens', 'Laught'),
('Intermediate', 1, 3, '/sound/go_home.mp3', 'Go home', 'Go house', 'Home', 'Go'),
('Beginer', 1, 4, '/sound/Biodiversity.mp3', 'Biology', 'Biodiversity', 'Bye Bye', 'By'),
('Intermediate', 1, 4, '/sound/get_up.mp3', 'Getting', 'Get up', 'upto', 'Set up'),
('Beginer', 1, 5, '/sound/ecology.mp3', 'Ecology', 'Economic', 'Echo', 'End'),
('Intermediate', 1, 5, '/sound/eat_out.mp3', 'Eat now', 'Eat on', 'Eat in', 'Eat out');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `score`
--

CREATE TABLE `score` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `scoreFT` int(11) DEFAULT NULL,
  `levelVocabulary` int(11) DEFAULT '1',
  `levelListening` int(11) DEFAULT '1',
  `levelFT` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `levelGrammar` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `score`
--

INSERT INTO `score` (`email`, `scoreFT`, `levelVocabulary`, `levelListening`, `levelFT`, `levelGrammar`) VALUES
('aa@gmail.com', 0, 1, 1, 'Beginer', 7),
('hd@gmail.com', 0, 1, 1, 'Beginer', 1),
('hoaidien93@gmail.com', 18, 1, 2, 'Intermediate', 1),
('ngoduckha@gmail.com', 0, 1, 1, 'Beginer', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `scoregrammartest`
--

CREATE TABLE `scoregrammartest` (
  `email` varchar(255) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `scoregrammartest`
--

INSERT INTO `scoregrammartest` (`email`, `sub_id`, `level`, `score`) VALUES
('aa@gmail.com', 1, 1, 3),
('hoaidien93@gmail.com', 1, 1, 0),
('ngoduckha@gmail.com', 1, 1, 0),
('ngoduckha@gmail.com', 2, 1, 1),
('ngoduckha@gmail.com', 3, 1, 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `scorelisteningtest`
--

CREATE TABLE `scorelisteningtest` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level1` int(11) DEFAULT NULL,
  `level2` int(11) DEFAULT NULL,
  `level3` int(11) DEFAULT NULL,
  `level4` int(11) DEFAULT NULL,
  `level5` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `scorelisteningtest`
--

INSERT INTO `scorelisteningtest` (`email`, `level1`, `level2`, `level3`, `level4`, `level5`) VALUES
('hd@gmail.com', NULL, 0, NULL, NULL, NULL),
('hoaidien93@gmail.com', 5, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `scorevocabularytest`
--

CREATE TABLE `scorevocabularytest` (
  `email` varchar(255) NOT NULL,
  `level1` int(11) DEFAULT NULL,
  `level2` int(11) DEFAULT NULL,
  `level3` int(11) DEFAULT NULL,
  `level4` int(11) DEFAULT NULL,
  `level5` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `scorevocabularytest`
--

INSERT INTO `scorevocabularytest` (`email`, `level1`, `level2`, `level3`, `level4`, `level5`) VALUES
('aa@gmail.com', NULL, NULL, NULL, NULL, NULL),
('hd@gmail.com', NULL, NULL, NULL, NULL, NULL),
('hoaidien93@gmail.com', 5, NULL, NULL, NULL, NULL),
('ngoduckha@gmail.com', 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `level` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`email`, `name`, `password`, `level`) VALUES
('aa@gmail.com', 'a', '$2y$10$hQ0.aEd8CBmPd8duDlxT7OvPn/Ej0PsHqZyUOMOFvUef6U8SAXOcG', 'Beginer'),
('hd@gmail.com', 'hoaidien', '$2y$10$7pbQ44lWdJbJTtKWrv3t3ufSRbGI.DReSNZrDdD.U56fEDyPfBq3K', 'Beginer'),
('hoaidien@gmail.com', 'hoaidien', '$2y$10$ifbm8Yf9aQlKtGMePiV51eT21xWU/sNw9d1070/7Ch8dCh6tiR5c6', NULL),
('hoaidien1@gmail.com', 'hoaidien', '$2y$10$9ePvqK8IBVOEoyyF.1j1CeG6Hrbol/4hx3Lautt33In8MP6h.Ysla', NULL),
('hoaidien123@gmail.com', 'Hoai Dien', '$2y$10$61WFmQ0dE3kJpgtxUc/mkeJWgVcuaq0sQXreU3fYZKaKjy8.0lR7C', NULL),
('hoaidien93@gmail.com', 'Dien Hoai', '$2y$10$SEuASiC4qUd2fBc0r4Li1uIa2VFhdRKJjpccopuMCiAQPc9ZRnwAW', 'Beginer'),
('ngoduckha@gmail.com', 'duc kha', '$2y$10$9t8ThXYHyo.8l1177/zyyOH4ZUedLPBsLDAmx.XcvgxfaNSZDUK2O', 'Beginer');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vocabulary`
--

CREATE TABLE `vocabulary` (
  `levelFT` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `word` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mean` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `exPart1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `exampleWord` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `exPart2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `vocabulary`
--

INSERT INTO `vocabulary` (`levelFT`, `level`, `id`, `img`, `url`, `word`, `mean`, `exPart1`, `exampleWord`, `exPart2`) VALUES
('Beginer', 1, 1, '/img/land.jpg', '/sound/land.mp3', 'Land', 'Đất,Vùng Đất', 'What should we do with such wide area of', 'land', '?'),
('Beginer', 1, 2, '/img/pollute.jpg', '/sound/pollute.mp3', 'Pollute', 'Gây ô nhiễm', 'The pesticides used on many farms are', 'polluting', 'the water supply.'),
('Beginer', 1, 3, '/img/decompose.jpg', '/sound/decompose.mp3', 'Decompose', 'Phân hủy', 'The body must have been', 'decomposing', 'for several weeks.'),
('Beginer', 1, 4, '/img/balance.jpg', '/sound/balance.mp3', 'Balance', 'Sự cân bằng', 'We need to have a good', 'balance', 'between job and life.'),
('Beginer', 1, 5, '/img/climate_change.jpg', '/sound/climate_change.mp3', 'Climate change', 'Thay đổi khí hậu', ' ', 'Climate change', 'makes the Earth hotter'),
('Beginer', 1, 6, '/img/global_warming.jpg', '/sound/global_warning.mp3', 'Global warning', 'Nóng lên toàn cầu', 'Nowadays, iceberg is a victim of the', 'global warming', '.'),
('Beginer', 1, 7, '/img/oil_slick.jpg', '/sound/oil_slick.mp3', 'Oil slick', 'Vết dầu loang', 'The accident left a large', 'oil slick', 'on the sea.'),
('Beginer', 1, 8, '/img/ozone_layer.jpg', '/sound/ozone_layer.mp3', 'Ozone layer', 'Tầng Ozon', 'Our', 'ozone layer', 'is destroyed by air pollution.'),
('Beginer', 1, 9, '/img/biodiversity.jpg', '/sound/biodiversity.mp3', 'Biodiversity', 'Đa dạng sinh học', 'Vietnam has been recognized as a nation with high', 'biodiversity', '.'),
('Beginer', 1, 10, '/img/ecology.jpg', '/sound/ecology.mp3', 'Ecology', 'Sinh thái học', 'The oil spill caused terrible damage to the fragile', 'ecology', 'of the coast.'),
('Beginer', 2, 1, '/img/pen.jpg', '/sound/pen.mp3', 'Pen', 'Bút mực', 'I forgot my', 'pen', 'at home.'),
('Beginer', 2, 2, '/img/pencil.jpg', '/sound/pencil.mp3', 'Pencil', 'Bút chì', 'You\'d better sharpen your', 'pencil', '.'),
('Beginer', 2, 3, '/img/paper.jpg', '/sound/paper.mp3', 'Paper', 'Giấy', 'She wrote her name and address on a sheet of', 'paper', '.'),
('Beginer', 2, 4, '/img/eraser.jpg', '/sound/eraser.mp3', 'Eraser', 'Cục tẩy', 'I bought a pencil and an', 'eraser', '.'),
('Beginer', 2, 5, '/img/pencil_sharpener.jpg', '/sound/pencil_sharpener.mp3', 'Pencil Sharpener', 'Đồ gọt bút chì', 'I\'ve lost my', 'pencil sharpener', '.'),
('Beginer', 2, 6, '/img/book.jpg', '/sound/book.mp3', 'Book', 'Sách', 'Have you read any', 'book', 'recently.'),
('Beginer', 2, 7, '/img/pack.jpg', '/sound/pack.mp3', 'Pack', 'Túi đeo, ba lô', 'We passed a group of walker, carrying huge', 'packs', '.'),
('Beginer', 2, 8, '/img/crayon.jpg', '/sound/crayon.mp3', 'Crayon', 'Bút sáp màu', 'He had some', 'crayons', '.'),
('Beginer', 2, 9, '/img/scissors.jpg', '/sound/scissors.mp3', 'Scissors', 'Cây kéo', 'Could you pass me the', 'scissors', ', please ?'),
('Beginer', 2, 10, '/img/glue.jpg', '/sound/glue.mp3', 'Glue', 'Keo dán', 'He sticks to her like', 'glue', '.'),
('Intermediate', 1, 1, '/img/play.jpg', '/sound/play.mp3', 'Play', 'Vở kịch', 'Romeo and Juliet', 'play', 'is written by William Shakespeare.'),
('Intermediate', 1, 2, '/img/circus.jpg', '/sound/circus.mp3', 'Circus', 'Rạp xiếc', 'The children always love to go to the', 'circus', '.'),
('Intermediate', 1, 3, '/img/stadium.jpg', '/sound/stadium.mp3', 'Stadium', 'Sân vận động', 'Thousands of football fans packed into the', 'stadium', 'to watch the match.'),
('Intermediate', 1, 4, '/img/orchestra.jpg', '/sound/orchestra.mp3', 'Orchestra', 'Dàn nhạc', 'She\'s a cellist in the City of Birmingham Symphony', 'Orchestra', '.'),
('Intermediate', 1, 5, '/img/scene.jpg', '/sound/scene.mp3', 'Scene', 'Cảnh', 'Juliet dies in Act IV,', 'Scene', 'III.'),
('Intermediate', 1, 6, '/img/opera.jpg', '/sound/opera.mp3', 'Opera', 'Nhạc kịch', 'Wicked is my favourite', 'opera', '.'),
('Intermediate', 1, 7, '/img/theater.jpg', '/sound/theater.mp3', 'Theater', 'Nhà hát', 'I work at the', 'theater', '.'),
('Intermediate', 1, 8, '/img/applaud.jpg', '/sound/applaud.mp3', 'Applaud', 'Vỗ tay', 'You should hear the audience', 'applaud', '- the sound was fantastic.'),
('Intermediate', 1, 9, '/img/perform.jpg', '/sound/perform.mp3', 'Perform', 'Biểu diễn', 'She composes and', 'performs', 'her own music.'),
('Intermediate', 1, 10, '/img/exhibit.jpg', '/sound/exhibit.mp3', 'Exhibit', 'Vật triển lãm', 'The museum is rich in', 'exhibits', '.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vocabularytest`
--

CREATE TABLE `vocabularytest` (
  `id` int(11) NOT NULL,
  `levelFT` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  `questionName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `answerA` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `answerB` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `answerC` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `answerD` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `vocabularytest`
--

INSERT INTO `vocabularytest` (`id`, `levelFT`, `level`, `questionName`, `answerA`, `answerB`, `answerC`, `answerD`) VALUES
(1, 'Beginer', 1, 'Biodiversity is meaning?', 'Sinh học', 'Đa dạng sinh học', 'Toán học', 'Hành tinh'),
(1, 'Intermediate', 1, 'Stadium is meaning ?', 'Sân vận động', 'Sân khấu', 'Sân trường', 'Sân nhà'),
(2, 'Beginer', 1, 'Climate Change is meaning ?', 'Biến đổi giới tính', 'Biến đổi lý tính', 'Biến đổi hóa tính', 'Biến đổi khí hậu'),
(2, 'Intermediate', 1, 'Theater is meaning ?', 'Nhà hát', 'Khách sạn', 'Nhà nghĩ', 'Rạp chiếu phim'),
(3, 'Beginer', 1, 'Balance is meaning?', 'Tuyệt đối', 'Vùng đất', 'Cân bằng', 'Phân hủy'),
(3, 'Intermediate', 1, 'Scene is meaning ?', 'Suy nghĩ', 'Trí nhớ', 'Rạp hát', 'Cảnh'),
(4, 'Beginer', 1, 'Decompose is meaning?', 'Cân bằng', 'Phân hủy', 'Đa dạng', 'Ô nhiễm'),
(4, 'Intermediate', 1, 'Perform is meaning ?', 'Hát', 'Hoạt động', 'Biểu diễn', 'Dàn nhạc'),
(5, 'Beginer', 1, 'Land is meaning?', 'Vùng đất', 'Không khí', 'Nươc', 'Cân bằng'),
(5, 'Intermediate', 1, 'Applaud is meaning ?', 'Biểu diễn', 'Rạp xiếc', 'Vỗ tay', 'Cảnh');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `answerfirsttest`
--
ALTER TABLE `answerfirsttest`
  ADD PRIMARY KEY (`question`);

--
-- Chỉ mục cho bảng `answergrammartest`
--
ALTER TABLE `answergrammartest`
  ADD PRIMARY KEY (`id`,`sub_id`);

--
-- Chỉ mục cho bảng `answer_listening`
--
ALTER TABLE `answer_listening`
  ADD PRIMARY KEY (`id`,`level`,`levelFT`);

--
-- Chỉ mục cho bảng `answer_vocabulary`
--
ALTER TABLE `answer_vocabulary`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `firsttest`
--
ALTER TABLE `firsttest`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `grammartest`
--
ALTER TABLE `grammartest`
  ADD PRIMARY KEY (`levelFT`,`level`,`sub_id`,`id`);

--
-- Chỉ mục cho bảng `levellistening`
--
ALTER TABLE `levellistening`
  ADD PRIMARY KEY (`level_FT`,`level`);

--
-- Chỉ mục cho bảng `levelvocabulary`
--
ALTER TABLE `levelvocabulary`
  ADD PRIMARY KEY (`level_FT`,`level`);

--
-- Chỉ mục cho bảng `listening`
--
ALTER TABLE `listening`
  ADD PRIMARY KEY (`levelFT`,`level`,`id`);

--
-- Chỉ mục cho bảng `listeningtest`
--
ALTER TABLE `listeningtest`
  ADD PRIMARY KEY (`id`,`level`,`levelFT`);

--
-- Chỉ mục cho bảng `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `scoregrammartest`
--
ALTER TABLE `scoregrammartest`
  ADD PRIMARY KEY (`sub_id`,`level`,`email`) USING BTREE;

--
-- Chỉ mục cho bảng `scorelisteningtest`
--
ALTER TABLE `scorelisteningtest`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `scorevocabularytest`
--
ALTER TABLE `scorevocabularytest`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `vocabulary`
--
ALTER TABLE `vocabulary`
  ADD PRIMARY KEY (`levelFT`,`level`,`id`);

--
-- Chỉ mục cho bảng `vocabularytest`
--
ALTER TABLE `vocabularytest`
  ADD PRIMARY KEY (`id`,`levelFT`,`level`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `answer_vocabulary`
--
ALTER TABLE `answer_vocabulary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
