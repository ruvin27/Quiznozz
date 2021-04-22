-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2020 at 09:46 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiznozz`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`fname`, `lname`, `email`, `message`) VALUES
('Ruvin', 'Rodrigues', 'ruvin27@gmail.com', 'hello'),
('Ruvin', 'Rodrigues', 'ruvin27@gmail.com', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `ques_id` varchar(255) NOT NULL,
  `options` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`ques_id`, `options`) VALUES
('vM6XRE', 'Guido van Rossum'),
('vM6XRE', 'Tim Berners-Lee'),
('vM6XRE', 'Tim Berners-Lee'),
('vM6XRE', 'Rasmus Lerdorf'),
('EFl15k', 'Yes'),
('EFl15k', 'No'),
('EFl15k', 'machine dependent'),
('EFl15k', 'none of the mentioned'),
('zy4UKj', 'eval'),
('zy4UKj', 'assert'),
('zy4UKj', 'nonlocal'),
('zy4UKj', 'pass'),
('h1Dvih', 'in'),
('h1Dvih', 'on'),
('h1Dvih', 'it'),
('h1Dvih', '__init__'),
('WvSu0d', '//'),
('WvSu0d', '+'),
('WvSu0d', '-'),
('WvSu0d', '%'),
('gAQ5sb', '1'),
('gAQ5sb', '3'),
('gAQ5sb', '0'),
('gAQ5sb', '9'),
('XqD34l', '3'),
('XqD34l', '9'),
('XqD34l', '27'),
('XqD34l', '1'),
('gUBT3J', 'FALSE'),
('gUBT3J', 'TRUE'),
('nGpcBX', 'Float'),
('nGpcBX', 'Integer'),
('nGpcBX', 'Boolean'),
('nGpcBX', 'Complex'),
('CLiCq5', '1'),
('CLiCq5', '0'),
('CLiCq5', 'True'),
('CLiCq5', 'False'),
('oCgW7f', '1'),
('oCgW7f', '0'),
('oCgW7f', 'True'),
('oCgW7f', 'False'),
('WbNLSJ', 'abc'),
('WbNLSJ', 'a'),
('WbNLSJ', 'bc'),
('WbNLSJ', 'bca'),
('yJhQrN', 'cd'),
('yJhQrN', 'ab'),
('yJhQrN', 'bc'),
('yJhQrN', 'da'),
('nGCpkv', '(1, 2, 3)'),
('nGCpkv', '[1,2,3]'),
('nGCpkv', '{1,2,3}'),
('nGCpkv', '<1,2,3>'),
('a5WvDG', '//'),
('a5WvDG', '%'),
('iF290P', 'Bjarne Stroustrup'),
('iF290P', 'Håkon Wium Lie'),
('xwkeHr', '&'),
('xwkeHr', '+'),
('xwkeHr', '#'),
('xwkeHr', '*'),
('sV1L8q', 'cin.get(ch)'),
('sV1L8q', 'scanf(ch)'),
('S2iA2F', '	'),
('S2iA2F', ''),
('S2iA2F', '\n'),
('S2iA2F', 'a'),
('yDy56N', 'Extensible'),
('yDy56N', 'Overloaded'),
('yDy56N', 'Encapsulated'),
('yDy56N', 'Reprehensible'),
('MmhIDM', '1 bit'),
('MmhIDM', '2 byte'),
('MmhIDM', '4 byte'),
('MmhIDM', '8 byte'),
('yVHQiS', 'both while and for'),
('yVHQiS', 'while'),
('yVHQiS', 'for'),
('yVHQiS', 'if'),
('vergnD', 'std::vector<bool>'),
('vergnD', 'std::vector<long>'),
('vergnD', 'std::vector<int>'),
('vergnD', 'std::vector<double>'),
('MymRtN', '++'),
('MymRtN', '- -'),
('WwV0cY', '1'),
('WwV0cY', '0'),
('WwV0cY', 'TRUE'),
('WwV0cY', 'FALSE'),
('OC1wTd', 'user value'),
('OC1wTd', 'default value'),
('9TrOOI', 'VOID'),
('9TrOOI', 'INT'),
('9TrOOI', 'CHAR'),
('9TrOOI', 'FLOAT'),
('Py9qGH', '*'),
('Py9qGH', '&'),
('Py9qGH', '->'),
('eWFtbt', 'int i; double* dp = &i;'),
('eWFtbt', 'string s, *sp = 0;'),
('EBChWA', '#include “userdefined”'),
('EBChWA', '#include [userdefined]'),
('EBChWA', '#include <userdefined>'),
('EBChWA', '#include <userdefined.h>'),
('5dvc7p', 'Hypertext Markup Language.'),
('5dvc7p', 'Hypertext Machine language.'),
('5dvc7p', 'Hightext machine language.'),
('5dvc7p', 'Hypertext and links markup language.'),
('BgV3Vy', '<!DOCTYPE HTML>'),
('BgV3Vy', '</DOCTYPE HTML>'),
('BgV3Vy', '</DOCTYPE html>'),
('BgV3Vy', '</DOCTYPE>'),
('txPPdh', '<b>'),
('txPPdh', '<li>'),
('txPPdh', '<i>'),
('txPPdh', '<p>'),
('KKTXse', '<ul>'),
('KKTXse', '<em>'),
('KKTXse', '<i>'),
('KKTXse', '<ui>'),
('pfc4K6', '/'),
('pfc4K6', '.'),
('d3dnB2', '2 em'),
('d3dnB2', '3.5 em'),
('d3dnB2', '2.17 em'),
('d3dnB2', '1.5 em'),
('MI8xlR', '6'),
('MI8xlR', '5'),
('MI8xlR', '3'),
('MI8xlR', '2'),
('OYb030', '2'),
('OYb030', '4'),
('OYb030', '1'),
('OYb030', '5'),
('cczaWP', 'href'),
('cczaWP', 'newref'),
('cczaWP', 'ref'),
('cczaWP', 'link'),
('iRmJEz', 'For creating different sections.'),
('iRmJEz', 'For creating Different styles.'),
('iRmJEz', 'For adding headings.'),
('iRmJEz', 'For adding titles.'),
('BVorsV', '<i>'),
('BVorsV', '<style= “i”>'),
('BVorsV', '<italic>'),
('BVorsV', '<style=“italic”>'),
('YeatCi', '<br>'),
('YeatCi', '<break>'),
('YeatCi', '</break>'),
('YeatCi', '</br>'),
('yeRk12', 'target'),
('yeRk12', 'href'),
('yeRk12', 'tab'),
('yeRk12', 'ref'),
('Pt7lsc', '<body style = “background-color: green;”>'),
('Pt7lsc', '<body style = “background-color=green”>'),
('Pt7lsc', '<body bg-color = “green”>'),
('Pt7lsc', '<body color = “green”>'),
('MrThez', '<input type=\"checkbox\">'),
('MrThez', '<checkbox>'),
('MrThez', '<check>'),
('MrThez', '<input type=\"check\">'),
('zUUIId', '2'),
('zUUIId', '1'),
('zUUIId', '3'),
('zUUIId', '4'),
('3dXVDz', 'Performance Timing'),
('3dXVDz', 'PerformanceTiming'),
('3dXVDz', 'Timing'),
('3dXVDz', 'Performance'),
('yPGbnE', 'Parses a string to JSON'),
('yPGbnE', 'Parses a string from JSON to JSON2'),
('yPGbnE', 'Parses integer to string'),
('yPGbnE', 'Parses a string to integer'),
('0rrCw0', 'Integer'),
('0rrCw0', 'String'),
('0rrCw0', 'Float'),
('0rrCw0', 'Date'),
('xCQbW9', 'both text and reviver'),
('xCQbW9', 'text'),
('xCQbW9', 'reviver'),
('xCQbW9', 'object'),
('hCV29c', 'UgilifyJS'),
('hCV29c', 'Esprima'),
('hCV29c', 'Acron'),
('hCV29c', 'Compressify'),
('WyUAGo', 'Acron'),
('WyUAGo', 'Esprima'),
('GG57iR', 'Collection of JavaScript objects'),
('GG57iR', 'Collection of Java objects'),
('hebtXP', 'Brendan Eich'),
('hebtXP', 'Guido van Rossum'),
('hEZA9v', 'Float'),
('hEZA9v', 'Undefined'),
('hEZA9v', 'Number'),
('hEZA9v', 'Boolean'),
('Xa1XUa', '<script>'),
('Xa1XUa', '<head>'),
('Xa1XUa', '<meta>'),
('Xa1XUa', '<body>'),
('xfs1J4', 'Netscape'),
('xfs1J4', 'IBM'),
('ngQGOm', 'JavaScript is a object-based scripting language'),
('ngQGOm', 'It can not Handling dates and time.'),
('LHrbxa', 'alert(\"Letsfindcourse\");'),
('LHrbxa', 'alert-box(\"Letsfindcourse\");'),
('LHrbxa', 'msgbox(\"Letsfindcourse\");'),
('it0GlV', 'alert(\"Letsfindcourse\");'),
('it0GlV', 'alert-box(\"Letsfindcourse\");'),
('it0GlV', 'confirm(\"Letsfindcourse\");'),
('it0GlV', 'msgbox(\"Letsfindcourse\");');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('ruvin27@gmail.com', '$2y$10$.D7ICTNShAT3lGYcGDUn4.JbfUUgsas4XihV7o5vJK6H8RPHQuaNK', '2020-11-01 11:52:00');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `ques_id` varchar(255) NOT NULL,
  `quiz_id` varchar(255) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`ques_id`, `quiz_id`, `question`, `answer`) VALUES
('0rrCw0', 'OD64wG', 'What is the return type of the method parseInt()?', 'Integer'),
('3dXVDz', 'OD64wG', 'Which of the following is an interface?', 'Performance Timing'),
('5dvc7p', 'oe2buW', 'What does HTML stands for?', 'Hypertext Markup Language.'),
('9TrOOI', 'Fvoic6', 'What is the default return type of a function?', 'VOID'),
('a5WvDG', '4eAFB0', 'Which one of these is floor division?', '//'),
('BgV3Vy', 'oe2buW', 'How is document type initialized in HTML5.?', '<!DOCTYPE HTML>'),
('BVorsV', 'oe2buW', 'Which of the following tags is used to make a portion of text italic in HTML?', '<i>'),
('cczaWP', 'oe2buW', 'Which of the following attributes is used to add link to any element?', 'href'),
('CLiCq5', '4eAFB0', 'What is the result of cmp(3, 1)?', '1'),
('d3dnB2', 'oe2buW', 'What is the font-size of the h1 heading tag?', '2 em'),
('EBChWA', 'Fvoic6', 'Which of the following is the correct syntax of including a user defined header files in C++?', '#include “userdefined”'),
('EFl15k', '4eAFB0', 'Is Python case sensitive when dealing with identifiers', 'Yes'),
('eWFtbt', 'Fvoic6', 'Which of the following is illegal?', 'int i; double* dp = &i;'),
('gAQ5sb', '4eAFB0', 'What is the answer to this expression, 22 % 3 is?', '1'),
('GG57iR', 'OD64wG', '. What is a heap in JavaScript?', 'Collection of JavaScript objects'),
('gUBT3J', '4eAFB0', 'What is the output of print 0.1 + 0.2 == 0.3?', 'FALSE'),
('h1Dvih', '4eAFB0', 'Which of the following cannot be a variable?', 'in'),
('hCV29c', 'OD64wG', 'Which of the following is a JavaScript Compressor?', 'UgilifyJS'),
('hebtXP', 'OD64wG', 'Creator of js:', 'Brendan Eich'),
('hEZA9v', 'OD64wG', 'Which of the following is not JavaScript Data Types?', 'Float'),
('iF290P', 'Fvoic6', 'Creator of c++', 'Bjarne Stroustrup'),
('iRmJEz', 'oe2buW', 'What is the purpose of using div tags in HTML?', 'For creating different sections.'),
('it0GlV', 'OD64wG', 'Which of the following is the correct syntax to display \"Letsfindcourse\" in an alert box using JavaScript?', 'alert(\"Letsfindcourse\");'),
('KKTXse', 'oe2buW', 'Which of the following HTML element is used for creating an unordered list?', '<ul>'),
('LHrbxa', 'OD64wG', 'Which of the following is the correct syntax to display \"Letsfindcourse\" in an alert box using JavaScript?', 'alert(\"Letsfindcourse\");'),
('MI8xlR', 'oe2buW', 'How many heading tags are there in HTML5?', '6'),
('MmhIDM', 'Fvoic6', 'What is the size of a boolean variable in C++?', '1 bit'),
('MrThez', 'oe2buW', 'Which among the following is correct HTML code for making a checkbox?', '<input type=\"checkbox\">'),
('MymRtN', 'Fvoic6', 'Which of the two operators ++ and — work for the bool data type in C++?', '++'),
('nGCpkv', '4eAFB0', 'Which of the following is a Python tuple?', '(1, 2, 3)'),
('nGpcBX', '4eAFB0', 'What is the type of inf?', 'Float'),
('ngQGOm', 'OD64wG', 'Which of the following is correct about features of JavaScript?', 'JavaScript is a object-based scripting language'),
('OC1wTd', 'Fvoic6', 'Which value will it take when both user and default values are given?', 'user value'),
('oCgW7f', '4eAFB0', 'What is the result of cmp(3, 1)?', '1'),
('OYb030', 'oe2buW', 'How many attributes are there in HTML5?', '2'),
('pfc4K6', 'oe2buW', 'Which of the following characters indicate closing of a tag?', '/'),
('Pt7lsc', 'oe2buW', 'Which of the following is the correct way to add background color in HTML?', '<body style = “background-color: green;”>'),
('Py9qGH', 'Fvoic6', 'The operator used for dereferencing or indirection is', '*'),
('S2iA2F', 'Fvoic6', '. Which of the following escape sequence represents tab?', '	'),
('sV1L8q', 'Fvoic6', 'Which function is used to read a single character from the console in C++?', 'cin.get(ch)'),
('txPPdh', 'oe2buW', 'Which of the following HTML Elements is used for making any text bold ?', '<b>'),
('vergnD', 'Fvoic6', 'Find the odd one out.', 'std::vector<bool>'),
('vM6XRE', '4eAFB0', 'Creator of Python?', 'Guido van Rossum'),
('WbNLSJ', '4eAFB0', '\" What will be the output of the following Python statement?>>>\"a\"+\"bc\"\"', 'abc'),
('WvSu0d', '4eAFB0', 'Which one of these is floor division?', '//'),
('WwV0cY', 'Fvoic6', '(false && true) || false || true', '1'),
('WyUAGo', 'OD64wG', 'Which of the following is the fastest JavaScript parser?', 'Acron'),
('Xa1XUa', 'OD64wG', 'Inside which HTML element do we put the JavaScript?', '<script>'),
('xCQbW9', 'OD64wG', 'What are the parameters of the method JSON.parse()?', 'both text and reviver'),
('xfs1J4', 'OD64wG', 'Which company developed JavaScript?', 'Netscape'),
('XqD34l', '4eAFB0', 'What is the output of this expression, 3*1*1', '3'),
('xwkeHr', 'Fvoic6', 'Which of the following is called address operator?', '&'),
('yDy56N', 'Fvoic6', 'A language which has the capability to generate new data types are called ________________.', 'Extensible'),
('YeatCi', 'oe2buW', 'Which of the following tags is used to add a line-break in HTML?', '<br>'),
('yeRk12', 'oe2buW', 'Which of the following attributes is used to open an hyperlink in new tab?', 'target'),
('yJhQrN', '4eAFB0', 'What will be the output of the following Python statement?>>>\"abcd\"[2:]', 'cd'),
('yPGbnE', 'OD64wG', 'What is the purpose of the method JSON.parse()?', 'Parses a string to JSON'),
('yVHQiS', 'Fvoic6', 'Which of the following is an entry-controlled loop?', 'both while and for'),
('zUUIId', 'OD64wG', 'How many properties are associated with the Response event?', '2'),
('zy4UKj', '4eAFB0', '\"Which of the following is not a keyword?', 'eval');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `quiz_id` varchar(255) NOT NULL,
  `qname` varchar(255) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`quiz_id`, `qname`, `desc`, `email`) VALUES
('4eAFB0', 'Python', 'coding', 'admin@gmail.com'),
('Fvoic6', 'C++', 'coding', 'admin@gmail.com'),
('OD64wG', 'Javascript', 'coding', 'admin@gmail.com'),
('oe2buW', 'HTML', 'coding', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `result_id` varchar(255) NOT NULL,
  `quiz_id` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `score` int(100) NOT NULL,
  `total` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`result_id`, `quiz_id`, `email`, `score`, `total`) VALUES
('7WnhPo', '4eAFB0', 'admin@gmail.com', 4, 15),
('fXT5nw', 'oe2buW', 'admin@gmail.com', 9, 15),
('jq276s', 'Fvoic6', 'admin@gmail.com', 6, 15);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date DEFAULT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `dob`, `age`, `password`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(12, 'Admin', 'RAY', 'admin@gmail.com', NULL, NULL, '$2y$10$dEYtToO/8orNYVfCjijqZOSxYK6HvEPfPYGil6CBPTx3KbOT64tsm', NULL, NULL, '2020-11-03 09:21:25', '2020-11-03 09:21:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD KEY `ques_id` (`ques_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`ques_id`),
  ADD KEY `quiz_id` (`quiz_id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`quiz_id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`result_id`),
  ADD KEY `quiz_id` (`quiz_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `options`
--
ALTER TABLE `options`
  ADD CONSTRAINT `options_ibfk_1` FOREIGN KEY (`ques_id`) REFERENCES `question` (`ques_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`quiz_id`) REFERENCES `quiz` (`quiz_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `quiz`
--
ALTER TABLE `quiz`
  ADD CONSTRAINT `quiz_ibfk_1` FOREIGN KEY (`email`) REFERENCES `users` (`email`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `result_ibfk_1` FOREIGN KEY (`quiz_id`) REFERENCES `quiz` (`quiz_id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
