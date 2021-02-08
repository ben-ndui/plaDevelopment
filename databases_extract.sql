-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 08, 2021 at 11:31 AM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `pladb`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
                            `id` int(11) NOT NULL,
                            `title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `title`) VALUES
(1, 'Projet'),
(2, 'Collaboratif');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
                           `id` int(11) NOT NULL,
                           `title` varchar(255) DEFAULT NULL,
                           `content` longtext,
                           `date` datetime DEFAULT NULL,
                           `category_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `title`, `content`, `date`, `category_id`) VALUES
(1, 'Projet #1', 'A modifier plus tard !', '2021-02-01 12:11:43', 2),
(2, 'Projet #2 modifié', 'Text à modifier !', '2021-02-01 12:11:47', 1),
(3, 'Projet #3', '\"\"Qui libero nihil aut dolor aliquam et obcaecati consequatur quo voluptas reprehenderit. Aut quasi ipsam non reiciendis ipsam aut velit numquam aut voluptatem impedit ut iste repellendus. Non dignissimos impedit aut perferendis neque sed distinctio minima qui molestiae quisquam. Est deleniti quia eum ratione temporibus in odio doloremque.\"\"', '2021-02-01 12:17:02', 2),
(4, 'Mon quatrième projet', 'Ab esse atque in quibusdam eveniet ut praesentium expedita sit labore consequatur sit error recusandae non aspernatur odio? Eos beatae sapiente non laudantium facilis vel voluptatem quis et facilis enim rem repellendus molestiae.', '2021-02-01 12:19:53', 1),
(5, 'Mon cinquième projet', 'Ea animi fugit et consequatur aspernatur id galisum quos eos dolorem illum aut ipsam praesentium est alias optio. In sapiente repellat qui quos minima et corrupti quas eos blanditiis itaque qui nihil vitae. Est quos nobis sed ipsam excepturi sed obcaecati beatae!', '2021-02-01 12:21:04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
                            `id` int(11) NOT NULL,
                            `title` varchar(255) DEFAULT NULL,
                            `content` longtext,
                            `imageURL` varchar(255) DEFAULT NULL,
                            `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `content`, `imageURL`, `category_id`) VALUES
(1, 'Focalisons sur le résultat', 'Lorem ipsum dolor sit amet. Id minima debitis ea vitae ratione ut voluptatum accusantium sit excepturi maxime aut omnis dolores. Cum quaerat ratione et odio dolorem est unde nesciunt ab explicabo dolorum! At corrupti nostrum sit omnis dolore sit veniam voluptatum rem quod aliquam. Eos inventore magnam et voluptatem saepe aut culpa nostrum est natus tempora delectus iste?', NULL, NULL),
(2, 'L’efficacité des processus', 'Et consequuntur omnis qui explicabo quia ea laudantium voluptas aut illum amet et molestiae rerum. Ut voluptatem dignissimos aliquid illo et exercitationem aliquid sed facere repellendus. Sed accusamus nostrum non consequatur magnam id impedit placeat est necessitatibus neque aut cupiditate itaque est accusamus commodi.\r\n\r\n', NULL, NULL),
(3, 'Système et qualité dynamique', 'Aut dolor labore est voluptatem dolorem cum quam explicabo et odit veniam rerum eius. Et molestias amet et ipsum suscipit et molestiae saepe. Ad consequatur dicta quo voluptate corporis sed alias quasi 33 voluptatibus voluptatum. Et natus voluptatem et placeat sequi ut esse doloribus in ipsa expedita ex numquam totam nam quidem perspiciatis cum dolore excepturi.', NULL, NULL),
(7, 'Process', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `site`
--

CREATE TABLE `site` (
  `id` int(11) NOT NULL,
  `title_home_page` varchar(255) DEFAULT NULL,
  `imgURL_home_page` varchar(255) DEFAULT NULL,
  `desc_top_home_page` varchar(255) DEFAULT NULL,
  `desc_bottom_home_page` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `site`
--

INSERT INTO `site` (`id`, `title_home_page`, `imgURL_home_page`, `desc_top_home_page`, `desc_bottom_home_page`) VALUES
(1, 'PLA Development', 'public/assets/background/paysage.jpg', 'Text haut de page', 'Text bas de page');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `lastname`, `password`) VALUES
(2, 'admin', 'Ben', 'd033e22ae348aeb5660fc2140aec35850c4da997'),
(3, 'andrew', 'COLIN', '342564bc1ab1e55103f85104b5e013adfdf828cb'),
(4, 'patrice', 'LARMOYER', 'd033e22ae348aeb5660fc2140aec35850c4da997');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site`
--
ALTER TABLE `site`
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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `site`
--
ALTER TABLE `site`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
