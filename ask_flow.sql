-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2025 at 05:51 AM
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
-- Database: `ask_flow`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `answer` varchar(300) NOT NULL,
  `question_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `answer`, `question_id`, `user_id`) VALUES
(1, 'Officiously Three 😪', 1, 13),
(2, 'Use substitution by solving one equation for a variable and substituting it into the other equation.', 30, 13),
(3, 'Create a strong portfolio showcasing your skills and previous work.', 14, 13),
(4, 'Use room temperature ingredients (butter, eggs) for smoother batter and better texture.', 11, 13),
(6, 'I love Tokyo from japan.', 7, 8),
(7, 'Janat Ke PAtte', 6, 8),
(8, 'I think Egypt.', 5, 8),
(9, 'Officiously Cricket 🤘', 27, 8),
(10, ' Use matrix methods like Gaussian elimination or matrix inverses for larger systems of equations.', 30, 8),
(11, 'What a useless question 😡', 1, 17),
(12, 'do not eat 😂', 4, 17),
(13, 'You should learn a good skill, then you can do freelancing. 😕', 3, 17),
(14, 'Mexico and Central America have stunning beaches and cultural experiences at budget-friendly prices. Thanks me later 😑👍', 7, 17),
(15, 'Words of Radiance is a great Novel 😋', 6, 17),
(16, 'The rise of Adolf Hitler and the expansionist policies of Nazi Germany. 🤷‍♀️', 21, 15);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(10, 'Books & Literature'),
(13, 'Business & Entrepreneurship'),
(2, 'Food & Cooking'),
(11, 'Freelancing & Remote Work'),
(3, 'Gaming & Esports'),
(1, 'Health & Fitness'),
(8, 'History & Geography'),
(5, 'IT & Development'),
(12, 'Job Interviews & Resumes'),
(7, 'Mathematics & Logic'),
(6, 'Science & Research'),
(4, 'Travel & Exploration');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL,
  `category_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `title`, `description`, `category_id`, `user_id`) VALUES
(1, 'How many sides does a triangle have?', '→ I don’t know how many sides a triangle has!! So plzzz tell me 😁\n\n', 7, 1),
(2, 'What is the difference between id and class in CSS?', '→ I’m confused about when to use id and when to use class. Can someone explain?', 5, 1),
(3, 'How do I start an online business?', '→ I want to start an online business. Where do I begin?', 13, 5),
(4, 'What are the best exercises for weight loss?', '→ I want to lose weight, but I don’t know which exercises work best. Any suggestions?', 1, 5),
(5, 'What are the oldest civilizations in history?', '→ I’m interested in ancient history. Which civilizations were the earliest?', 8, 6),
(6, 'What are some must-read classic novels?', '→ I want to read classic literature. What books should I start with?', 10, 2),
(7, 'What are the best budget-friendly travel destinations?', '→ I want to travel, but I’m on a budget. Where should I go?', 4, 2),
(8, 'What are some easy recipes for beginners?', '→ I’m new to cooking. What are some simple recipes I can try?', 2, 2),
(9, 'What are the main differences between C# and Java?', '→ I am trying to choose between C# and Java. What are the key differences?', 5, 8),
(10, 'What is dependency injection in ASP.NET Core?', '→ I keep hearing about dependency injection. How does it work in ASP.NET Core?', 5, 8),
(11, 'How do I bake the perfect cake?', '→ My cakes never turn out right. What’s the secret to baking a perfect one?', 2, 7),
(12, 'What is the secret to making a great pizza dough?', '→ I love homemade pizza, but my dough is never perfect. What should I do?', 2, 7),
(13, 'How does intermittent fasting work?', '→ I’ve heard about intermittent fasting. How does it actually help?', 1, 7),
(14, 'How do I get my first freelance project?', '→ I want to start freelancing, but I don’t know how to get my first client. Any advice?', 11, 4),
(15, 'What are the best platforms for remote work?', '→ I’m looking for remote work opportunities. Which platforms are the best?', 11, 4),
(16, 'How were the pyramids built?', '→ Can anyone shed light on how the pyramids were really built? Its one of history is greatest mysteries.', 8, 6),
(17, 'How do tectonic plates affect geography?', '→ How do tectonic plates shape the Earth’s surface?', 8, 6),
(18, 'How do I plan a solo trip safely?', '→ I’m planning a solo trip. What precautions should I take?', 4, 6),
(19, 'What are some hidden gems in Europe?', '→ I want to explore Europe beyond the tourist spots. Any recommendations?', 4, 6),
(20, 'What are the latest advancements in space exploration?', '→ I am curious about space exploration. What are the latest discoveries?', 6, 3),
(21, 'What were the main causes of World War II?', '→ I want to understand what led to World War II. Can someone explain?', 8, 3),
(22, 'What is the difference between a hypothesis and a theory?', '→ I see these terms often, but what exactly sets them apart?', 6, 3),
(23, 'What is the meaning behind George Orwells 1984?', '→ I read 1984, but I’m not sure I fully understood its message. Can someone explain?', 10, 9),
(24, 'What are the best marketing strategies for startups?', '→ How can I market my startup effectively?', 13, 9),
(25, 'How do I create a business plan?', '→ I need to make a business plan, but I don’t know how. Can someone guide me?', 13, 9),
(26, 'What are the best strategies for FPS games?', '→ I want to improve in FPS games. What strategies should I follow.', 3, 16),
(27, 'What are the most popular esports tournaments?', '→ I am interested in esports. What are the biggest tournaments?', 3, 16),
(28, 'How do professional gamers practice?', '→ How do pro gamers train to stay at the top?', 3, 16),
(29, 'How do I improve my writing skills?', '→ I enjoy writing, but I want to get better. Any tips?', 10, 15),
(30, 'How do I solve a system of linear equations?', '→ I need help solving systems of equations. What are the best methods?', 7, 15),
(31, 'How does the P vs NP problem impact computing?', '→ I have heard about this problem, but how does it affect real-world computing?', 7, 15);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `pass`, `address`) VALUES
(1, 'David Roberts', 'david@gmail.com', 'David202', '202 Maple St, Miami, FL'),
(2, 'Emily Carter', 'emily@gmail.com', 'Emily303', '303 Birch St, Seattle, WA'),
(3, 'Alice Walker', 'alice@gmail.com', 'Alice456', '456 Elm St, Los Angeles, CA'),
(4, 'Sarah Jones', 'sarah@gmail.com', 'Sarah101', '101 Pine St, Houston, TX'),
(5, 'John Doe', 'john@gmail.com', 'John123', '123 Main St, New York, NY'),
(6, 'Michael Smith', 'michael@gmail.com', 'Michael789', '789 Oak St, Chicago, IL'),
(7, 'Sophia Wilson', 'sophia@gmail.com', 'Sophia159', '159 Redwood St, NV'),
(8, 'Alex Brown', 'alex@gmail.com', 'Alex789', '789 Pine St, TX'),
(9, 'Lisa White', 'lisa@gmail.com', 'Lisa321', '321 Maple St, FL'),
(10, 'Mark Lee', 'mark@gmail.com', 'Mark654', '654 Oak St, WA'),
(11, 'Chloe Harris', 'chloe@gmail.com', 'Chloe543', '543 Lakeview Dr, Columbus, OH'),
(12, 'Evan Mitchell', 'evan@gmail.com', 'Evan654', '654 Maple Ln, Raleigh, NC'),
(13, 'Grace Adams', 'grace@gmail.com', 'Grace505', '505 Riverside Ave, Detroit, MI'),
(14, 'Mia Carter', 'mia@gmail.com', 'Mia999', '999 River Rd, Salt Lake City, UT'),
(15, 'Landon Brooks', 'landon@gmail.com', 'Landon770', '770 Pine St, Charlotte, NC'),
(16, 'Jack Miller', 'jack@gmail.com', 'Jack888', '888 Elm St, Indianapolis, IN'),
(17, 'Ruby Cooper', 'ruby@gmail.com', 'Ruby517', '517 Birchwood Dr, Kansas City, MO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
