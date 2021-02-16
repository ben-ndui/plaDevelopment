-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 15, 2021 at 01:37 PM
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
                                   `img_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `article_contact`
--

INSERT INTO `article_contact` (`id`, `website_link`, `contact_by`, `img_name`) VALUES
(1, 'www.smoothndesign.com', 'contact.smoothdesign@gmail.com', 'smoothdesign.svg');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
                        `id` int(11) NOT NULL,
                        `name` varchar(255) DEFAULT NULL,
                        `titre` varchar(255) DEFAULT NULL,
                        `titre2` varchar(255) DEFAULT NULL,
                        `home_img_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `name`, `titre`, `titre2`, `home_img_url`) VALUES
(1, 'home', 'PLA Development - Titre #1  -  test1 - 2', 'PLA Development - Titre #2  -  test2 - 2', 'paysage.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
                         `id` int(11) NOT NULL,
                         `url` varchar(255) NOT NULL,
                         `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `url`, `name`) VALUES
(1, 'smoothdesign.svg', 'smoothdesign'),
(2, 'paysage.jpg', 'paysage'),
(3, 'paysage2.jpg', 'paysage2');

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
(1, 'Home', 1, '        Fort d’une longue expérience diversifiée, j’ai été amené à piloter des projets de toutes natures et dans des environnements variés.     ', '        Pour en savoir plus sur quelques exemples de projets appliqués au management de la Performance par la Qualité et l’Efficacité des Processus. END !', 1),
(2, 'Réalisation', NULL, 'Fort d’une longue expérience diversifiée, j’ai été amené à piloter des projets de toutes natures et dans des environnements variés. ', 'Pour en savoir plus sur quelques exemples de projets appliqués au management de la Performance par la Qualité et l’Efficacité des Processus ', 2),
(3, 'Prestation', NULL, 'La définition des projets et prestations est par nature variable en fonction du besoin. Ils feront l’objet d’un plan taillé sur mesure, pour cibler au mieux l’intervention ', 'Evaluer sa conformité aux référentiels normatifs, vérifier l’adéquation du système aux exigences des parties prenantes, ou s’assurer que l’exécution est conforme au système, est un point de départ pour l’établissement des plans d’amélioration PDCA', 1),
(4, 'Site', NULL, 'Text haut de page	', 'Text bas de page	', NULL);

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
(1, 'Projet #1', 'A modifier plus tard !', '2021-02-01 12:11:43', 2),
(2, 'Projet #2 modifié', 'Text à modifier !', '2021-02-01 12:11:47', 1),
(3, 'Projet #3', '\"\"Qui libero nihil aut dolor aliquam et obcaecati consequatur quo voluptas reprehenderit. Aut quasi ipsam non reiciendis ipsam aut velit numquam aut voluptatem impedit ut iste repellendus. Non dignissimos impedit aut perferendis neque sed distinctio minima qui molestiae quisquam. Est deleniti quia eum ratione temporibus in odio doloremque.\"\"', '2021-02-01 12:17:02', 2),
(4, 'Mon quatrième projet', 'Ab esse atque in quibusdam eveniet ut praesentium expedita sit labore consequatur sit error recusandae non aspernatur odio? Eos beatae sapiente non laudantium facilis vel voluptatem quis et facilis enim rem repellendus molestiae.', '2021-02-01 12:19:53', 1),
(5, 'Mon cinquième projet', 'Ea animi fugit et consequatur aspernatur id galisum quos eos dolorem illum aut ipsam praesentium est alias optio. In sapiente repellat qui quos minima et corrupti quas eos blanditiis itaque qui nihil vitae. Est quos nobis sed ipsam excepturi sed obcaecati beatae!', '2021-02-01 12:21:04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `realisation`
--

CREATE TABLE `realisation` (
                               `id` int(11) NOT NULL,
                               `titre` varchar(255) DEFAULT NULL,
                               `titre2` varchar(255) DEFAULT NULL,
                               `contenu` longtext,
                               `home_img_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `realisation`
--

INSERT INTO `realisation` (`id`, `titre`, `titre2`, `contenu`, `home_img_url`) VALUES
(1, 'Références', 'Réalisation', 'Fort d’une longue expérience diversifiée, j’ai été amené à piloter des projets de toutes natures et dans des environnements variés. ', 'reference.svg');

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
                        `name` varchar(255) DEFAULT NULL,
                        `title_home_page` varchar(255) DEFAULT NULL,
                        `imgURL_home_page` varchar(255) DEFAULT NULL,
                        `desc_top_home_page` varchar(255) DEFAULT NULL,
                        `desc_bottom_home_page` varchar(255) DEFAULT NULL,
                        `home_presentation` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `site`
--

INSERT INTO `site` (`id`, `name`, `title_home_page`, `imgURL_home_page`, `desc_top_home_page`, `desc_bottom_home_page`, `home_presentation`) VALUES
(1, 'site', 'PLA Development', 'assets/background/paysage.jpg', 'Text haut de page', 'Text bas de page', '            Accomplished leader to achieve Business transformation, with recorded experience of transformation and process efficiency, Customer projects, products/offer development. Agile and lean minded by experience and personal taste, I like to use Customers and Employees insights to provide a meaningful direction in the projects. Enthusiastic, engaged and well coached teams will deliver far beyond expectations.\r\n\r\nI got responsibilities and exposures in small and large organizations, as operational, functional manager, or community leader. Technology and industrial companies are my playground ; sports are my inspiration to deliver while managing my resources\r\n        ');

-- --------------------------------------------------------

--
-- Table structure for table `titre`
--

CREATE TABLE `titre` (
                         `id` int(11) NOT NULL,
                         `libelle` varchar(255) DEFAULT NULL,
                         `page_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `titre`
--

INSERT INTO `titre` (`id`, `libelle`, `page_id`) VALUES
(1, 'LALA', 1),
(2, 'NANA', 1),
(3, 'Titre #3', 2),
(4, 'CHOCO', 1);

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
-- Indexes for table `realisation`
--
ALTER TABLE `realisation`
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
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- AUTO_INCREMENT for table `realisation`
--
ALTER TABLE `realisation`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
