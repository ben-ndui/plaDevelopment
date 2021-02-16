-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 16, 2021 at 11:46 AM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `pladb`
--

-- --------------------------------------------------------

--
-- Table structure for table `adresse`
--

CREATE TABLE `adresse` (
                           `id` int(11) NOT NULL,
                           `numero` varchar(255) DEFAULT NULL,
                           `rue` varchar(255) DEFAULT NULL,
                           `code_postal` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
                           `id` int(11) NOT NULL,
                           `title` varchar(255) DEFAULT NULL,
                           `content` longtext,
                           `article_contact_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `title`, `content`, `article_contact_id`) VALUES
(1, 'Plan d’amélioration du Système de Management de la Qualité ', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.\r\n', 1),
(2, 'Re-engineering de l’organisation du Support Technique monde ', 'Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n', 1),
(3, 'Amélioration du Processus d’Evolution des Produits  ', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `article_contact`
--

CREATE TABLE `article_contact` (
                                   `id` int(11) NOT NULL,
                                   `website_link` varchar(255) DEFAULT NULL,
                                   `contact_by` varchar(255) DEFAULT NULL,
                                   `img_name` varchar(255) DEFAULT NULL,
                                   `project_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `article_contact`
--

INSERT INTO `article_contact` (`id`, `website_link`, `contact_by`, `img_name`, `project_id`) VALUES
(1, 'www.smoothndesign.com', 'contact.smoothdesign@gmail.com', 'myLogo.png', 1),
(2, 'www.smoothndesign.com', 'Ben NDUI', 'myLogo.png', 3),
(3, 'www.smoothndesign.com', 'Patrice L.', 'paysage.jpg', 2),
(4, 'www.smoothndesign.com', 'Patrick M.', 'myLogo.png', 4),
(5, 'www.smoothndesign.com', 'Ménélik J.', 'myLogo.png', 5);

-- --------------------------------------------------------

--
-- Table structure for table `assoc_titre`
--

CREATE TABLE `assoc_titre` (
                               `page_id` int(11) NOT NULL,
                               `titre_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `assoc_titre`
--

INSERT INTO `assoc_titre` (`page_id`, `titre_id`) VALUES
(1, 1),
(1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
                        `id` int(11) NOT NULL,
                        `name` varchar(255) DEFAULT NULL,
                        `titre` varchar(255) DEFAULT NULL,
                        `titre2` varchar(255) DEFAULT NULL,
                        `titre3` varchar(255) DEFAULT NULL,
                        `desc_titre1` varchar(255) DEFAULT NULL,
                        `desc_titre2` varchar(255) DEFAULT NULL,
                        `desc_titre3` varchar(255) DEFAULT NULL,
                        `home_img_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `name`, `titre`, `titre2`, `titre3`, `desc_titre1`, `desc_titre2`, `desc_titre3`, `home_img_url`) VALUES
(1, 'home', 'Domaines d\'intervention', 'Prestations', 'Réalisations', NULL, NULL, NULL, 'paysage.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
                         `id` int(11) NOT NULL,
                         `url` varchar(255) NOT NULL,
                         `name` varchar(255) DEFAULT NULL,
                         `project_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `url`, `name`, `project_id`) VALUES
(1, 'myLogo.png', 'myLogo', 1),
(2, 'paysage.jpg', 'paysage', 2),
(3, 'paysage2.svg', 'paysage2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
                        `id` int(11) NOT NULL,
                        `name` varchar(255) DEFAULT NULL,
                        `titre` int(11) DEFAULT NULL,
                        `desc_top` longtext,
                        `desc_bottom` longtext,
                        `article_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `name`, `titre`, `desc_top`, `desc_bottom`, `article_id`) VALUES
(1, 'Home', 1, 'Fort d’une longue expérience diversifiée, j’ai été amené à piloter des projets de toutes natures et dans des environnements variés. ', 'Pour en savoir plus sur quelques exemples de projets appliqués au management de la Performance par la Qualité et l’Efficacité des Processus ', 1),
(2, 'Réalisation', 2, 'Fort d’une longue expérience diversifiée, j’ai été amené à piloter des projets de toutes natures et dans des environnements variés. ', 'Pour en savoir plus sur quelques exemples de projets appliqués au management de la Performance par la Qualité et l’Efficacité des Processus ', 2),
(3, 'Prestation', 2, 'La définition des projets et prestations est par nature variable en fonction du besoin. Ils feront l’objet d’un plan taillé sur mesure, pour cibler au mieux l’intervention ', 'Evaluer sa conformité aux référentiels normatifs, vérifier l’adéquation du système aux exigences des parties prenantes, ou s’assurer que l’exécution est conforme au système, est un point de départ pour l’établissement des plans d’amélioration PDCA', 1),
(4, 'Site', 1, 'Text haut de page	', 'Text bas de page	', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `prestation`
--

CREATE TABLE `prestation` (
                              `id` int(11) NOT NULL,
                              `titre` varchar(255) DEFAULT NULL,
                              `contenu` longtext,
                              `home_img_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(1, NULL, NULL, '2021-02-01 12:11:43', 2),
(2, NULL, NULL, '2021-02-01 12:11:47', 1),
(3, NULL, NULL, '2021-02-01 12:17:02', 2),
(4, NULL, NULL, '2021-02-01 12:19:53', 1),
(5, NULL, NULL, '2021-02-01 12:21:04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `realisation`
--

CREATE TABLE `realisation` (
                               `id` int(11) NOT NULL,
                               `name` varchar(100) DEFAULT NULL,
                               `titre` varchar(255) DEFAULT NULL,
                               `titre2` varchar(255) DEFAULT NULL,
                               `contenu` longtext,
                               `home_img_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `realisation`
--

INSERT INTO `realisation` (`id`, `name`, `titre`, `titre2`, `contenu`, `home_img_url`) VALUES
(1, 'realisation', NULL, 'Réalisation', 'Fort d’une longue expérience diversifiée, j’ai été amené à piloter des projets de toutes natures et dans des environnements variés. ', 'reference.svg');

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
(1, 'Outils et méthodes', 'Les outils et méthodes tels que 8D, 5S, etc… sont utilisés spécifiquement pour la résolution de problèmes et l’amélioration continue', 'paysage.jpg', NULL),
(2, 'Système Qualité', NULL, 'paysage.jpg', NULL),
(3, 'Efficacité', NULL, 'paysage.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `site`
--

CREATE TABLE `site` (
                        `id` int(11) NOT NULL,
                        `name` varchar(255) DEFAULT NULL,
                        `title_home_page` varchar(255) DEFAULT NULL,
                        `imgURL_home_page` varchar(255) DEFAULT NULL,
                        `desc_top_home_page` varchar(255) DEFAULT NULL,
                        `desc_bottom_home_page` varchar(255) DEFAULT NULL,
                        `home_presentation` longtext,
                        `home_presentation_2` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `site`
--

INSERT INTO `site` (`id`, `name`, `title_home_page`, `imgURL_home_page`, `desc_top_home_page`, `desc_bottom_home_page`, `home_presentation`, `home_presentation_2`) VALUES
(1, 'site', 'PLA Development', 'assets/background/paysage.jpg', 'Text haut de page', 'Text bas de page', 'Ma description UN!', 'Ma description DOS !               ');

-- --------------------------------------------------------

--
-- Table structure for table `titre`
--

CREATE TABLE `titre` (
                         `id` int(11) NOT NULL,
                         `libelle` varchar(255) DEFAULT NULL,
                         `name` varchar(255) DEFAULT NULL,
                         `page_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `titre`
--

INSERT INTO `titre` (`id`, `libelle`, `name`, `page_id`) VALUES
(1, 'LALA', 'titre1', 1),
(2, 'NANA', 'titre2', 1),
(3, 'Titre #3', 'titre3', 2),
(4, 'CHOCO', 'titre3', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
                         `id` int(11) NOT NULL,
                         `username` varchar(255) DEFAULT NULL,
                         `lastname` varchar(255) DEFAULT NULL,
                         `password` varchar(255) DEFAULT NULL,
                         `imageURL` varchar(255) DEFAULT NULL,
                         `telephone` varchar(255) DEFAULT NULL,
                         `email` varchar(255) DEFAULT NULL,
                         `statut` varchar(255) DEFAULT NULL,
                         `adresse_id` int(11) DEFAULT NULL,
                         `website` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `lastname`, `password`, `imageURL`, `telephone`, `email`, `statut`, `adresse_id`, `website`) VALUES
(2, 'admin', 'Ben', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'assets/profil_images/patrice.svg', NULL, NULL, NULL, NULL, NULL),
(3, 'andrew', 'COLIN', '342564bc1ab1e55103f85104b5e013adfdf828cb', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'patrice', 'LARMOYER', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'assets/profil_images/patrice.svg', NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adresse`
--
ALTER TABLE `adresse`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article_contact`
--
ALTER TABLE `article_contact`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assoc_titre`
--
ALTER TABLE `assoc_titre`
    ADD PRIMARY KEY (`page_id`,`titre_id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prestation`
--
ALTER TABLE `prestation`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `realisation`
--
ALTER TABLE `realisation`
    ADD PRIMARY KEY (`id`);

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
-- Indexes for table `titre`
--
ALTER TABLE `titre`
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
-- AUTO_INCREMENT for table `adresse`
--
ALTER TABLE `adresse`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `article_contact`
--
ALTER TABLE `article_contact`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `prestation`
--
ALTER TABLE `prestation`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `realisation`
--
ALTER TABLE `realisation`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `site`
--
ALTER TABLE `site`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `titre`
--
ALTER TABLE `titre`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
