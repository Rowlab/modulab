-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mer. 13 juin 2018 à 08:45
-- Version du serveur :  5.6.38
-- Version de PHP :  7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `modulab`
--

-- --------------------------------------------------------

--
-- Structure de la table `connection`
--

CREATE TABLE `connection` (
  `id` int(11) NOT NULL,
  `login` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `connection`
--

INSERT INTO `connection` (`id`, `login`, `password`) VALUES
(1, 'admin@test.fr', '$2y$10$9TjrAHe3Bix0dM5N5GIYP.BA9ze3BK9dIdxPkRThdugqwLhcK4/ee');

-- --------------------------------------------------------

--
-- Structure de la table `delivery`
--

CREATE TABLE `delivery` (
  `id` int(11) NOT NULL,
  `ref` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_commande` date NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nb` int(50) NOT NULL,
  `qt` int(10) NOT NULL,
  `prix` int(50) NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pays` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `delivery`
--

INSERT INTO `delivery` (`id`, `ref`, `date_commande`, `nom`, `nb`, `qt`, `prix`, `adresse`, `pays`) VALUES
(5, '0808Y68', '2017-05-01', 'Commande test', 285, 5, 75, 'Trololololol', 'France');

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `name_archi` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_construct` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_news` date NOT NULL,
  `type_construct` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `news`
--

INSERT INTO `news` (`id`, `name_archi`, `name_construct`, `date_news`, `type_construct`, `place`, `description`) VALUES
(5, 'Benoit', 'Benoit', '2017-05-12', 'Benoit', 'Benoit', 'Benoit');

-- --------------------------------------------------------

--
-- Structure de la table `page`
--

CREATE TABLE `page` (
  `page_id` int(11) NOT NULL,
  `slug` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `partners`
--

CREATE TABLE `partners` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activite` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departement` int(30) NOT NULL,
  `revue` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `partners`
--

INSERT INTO `partners` (`id`, `nom`, `activite`, `departement`, `revue`) VALUES
(1, 'Ile-de-France', 'Agencement, Mobilier', 49, 77),
(2, 'Ile-de-France', 'Agencement, Mobilier', 49, 49),
(4, 'Ile-de-France', 'Agencement, Mobilier', 49, 69),
(5, 'Ile-de-France', 'Cloisons, Plafond', 49, 78),
(6, 'Ile-de-France', 'Couverture, Etanchéité', 49, 77),
(7, 'Ile-de-France', 'Couverture, étanchéité', 49, 77),
(8, 'Ile-de-France', 'Couverture, étanchéité', 49, 94),
(9, 'Ile-de-France', 'Couverture, étanchéité', 49, 93),
(10, 'Ile-de-France', 'Electricité', 49, 91),
(11, 'Ile-de-France', 'Electricité', 49, 92),
(12, 'Ile-de-France', 'Electricité', 49, 95),
(13, 'Ile-de-France', 'Electricité', 49, 94),
(14, 'Ile-de-France', 'Bâtiment', 49, 94),
(15, 'Ile-de-France', 'Bâtiment', 49, 78),
(16, 'Ile-de-France', 'Bâtiment', 49, 78),
(17, 'Ile-de-France', 'Bâtiment', 49, 91),
(18, 'Ile-de-France', 'Escalieteur', 49, 35),
(19, 'Ile-de-France', 'Ingénierie', 49, 92),
(20, 'Ile-de-France', 'Ingénierie', 49, 94),
(21, 'Ile-de-France', 'Maçonnerie', 49, 75),
(22, 'Ile-de-France', 'Menuiserie', 49, 93),
(23, 'Ile-de-France', 'Métallerie', 49, 91),
(24, 'Ile-de-France', 'Réseaux informatiques', 49, 92),
(25, 'Bretagne-Normandie', 'Agencement, Mobilier', 49, 69),
(26, 'Bretagne-Normandie', 'Etanchéité', 49, 50),
(27, 'Bretagne-Normandie', 'Electricité', 0, 14),
(28, 'Bretagne-Normandie', 'Bâtiment', 0, 27),
(29, 'Bretagne-Normandie', 'Escalieteur', 0, 35),
(30, 'Bretagne-Normandie', 'Ingénierie', 0, 76),
(31, 'Bretagne-Normandie', 'Maçonnerie', 0, 75),
(32, 'Bretagne-Normandie', 'Menuiserie', 0, 27),
(33, 'Rhône-Alpes', 'Agencement, Mobilier', 0, 69),
(34, 'Rhône-Alpes', 'Cloison, isolation', 0, 38),
(35, 'Rhône-Alpes', 'Démolition', 0, 42),
(36, 'Rhône-Alpes', 'Electricité', 0, 42),
(37, 'Rhône-Alpes', 'Eclairage', 0, 38),
(38, 'Rhône-Alpes', 'Bâtiment', 0, 74),
(39, 'Rhône-Alpes', 'Escalieteur', 0, 35),
(40, 'Rhône-Alpes', 'Ingénierie', 0, 69),
(41, 'Rhône-Alpes', 'Maçonnerie', 0, 69),
(42, 'Rhône-Alpes', 'Menuiserie', 0, 69),
(43, 'Rhône-Alpes', 'Paysagistes', 0, 38),
(44, 'Alsace', 'Agencement, Mobilier', 0, 67),
(45, 'Alsace', 'Cloison', 0, 67),
(46, 'Alsace', 'Etanchéité', 0, 68),
(47, 'Alsace', 'Démolition', 0, 67),
(48, 'Alsace', 'Equipement', 0, 67),
(49, 'Alsace ', 'Ingénierie', 0, 68),
(50, 'Alsace', 'Maçonnerie', 0, 75),
(51, 'Alsace', 'Menuiserie', 0, 68),
(52, 'Alsace', 'Métallerie', 0, 67),
(53, 'Alsace', 'Paysagistes', 0, 68),
(54, 'Belgique', 'Ingénierie', 0, 0),
(55, 'Centre', 'Agencement, Mobilier', 0, 69),
(56, 'Centre', 'Escalieteur', 0, 35),
(57, 'Centre', 'Ingénierie', 0, 37),
(58, 'Centre', 'Maçonnerie', 0, 75),
(59, 'Poitou-Charentes', 'Agencement, Mobilier', 0, 69),
(60, 'Poitou-Charentes', 'Couverture', 0, 49),
(61, 'Pays de la Loire ', 'Electricité', 0, 44),
(62, 'Pays de la Loire ', 'Bâtiment', 0, 16),
(63, 'Poitou-Charente', 'Ingénierie', 0, 17),
(64, 'Pays de la Loire', 'Maçonnerie', 0, 75),
(65, 'Poitou-Charente', 'Menuiserie', 0, 17),
(66, 'Pays de la Loire', 'Menuiserie', 0, 17),
(67, 'Lorraine', 'Agencement, Mobilier', 0, 69),
(68, 'Lorraine', 'Démolition', 0, 54),
(69, 'Lorraine', 'Escalieteur', 0, 35),
(70, 'Lorraine', 'Ingénierie', 0, 57),
(71, 'Lorraine', 'Maçonnerie', 0, 75),
(72, 'Lorraine', 'Menuiserie', 0, 88),
(73, 'Nord-Pas-de-Calais', 'Agencement, Mobilier', 0, 69),
(74, 'Nord-Pas-de-Calais', 'Cloison', 0, 59),
(75, 'Nord-Pas-de-Calais', 'Couverture', 0, 59),
(76, 'Nord-Pas-de-Calais', 'Démolition', 0, 2),
(77, 'Nord-Pas-de-Calais', 'Bâtiment', 0, 80),
(78, 'Nord-Pas-de-Calais', 'Maçonnerie', 0, 75);

-- --------------------------------------------------------

--
-- Structure de la table `photographs`
--

CREATE TABLE `photographs` (
  `pic_id` int(11) NOT NULL,
  `news_id` int(11) NOT NULL,
  `pic_url` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pic_date` date NOT NULL,
  `page_type` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `region_del`
--

CREATE TABLE `region_del` (
  `reg_id` int(11) NOT NULL,
  `reg_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ship_fee_q1` int(11) NOT NULL,
  `ship_fee_q5` int(11) NOT NULL,
  `ship_fee_q10` int(11) NOT NULL,
  `ship_fee_q20` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `region_del`
--

INSERT INTO `region_del` (`reg_id`, `reg_name`, `ship_fee_q1`, `ship_fee_q5`, `ship_fee_q10`, `ship_fee_q20`) VALUES
(1, 'France', 3, 15, 30, 60),
(2, 'DOM', 8, 30, 60, 80),
(3, 'TOM', 10, 45, 85, 130),
(4, 'Europe', 8, 30, 60, 80);

-- --------------------------------------------------------

--
-- Structure de la table `revue`
--

CREATE TABLE `revue` (
  `id` int(11) NOT NULL,
  `revue_nb` int(11) NOT NULL,
  `revue_region` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revue_img` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revue_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `revue`
--

INSERT INTO `revue` (`id`, `revue_nb`, `revue_region`, `revue_img`, `revue_url`, `alt`) VALUES
(2, 284, 'Ile-de-France', 'idf.jpg', '0', 'Ile de France'),
(3, 283, 'Bretagne-Normandie', 'bretagne.jpg', '0', 'Bretagne'),
(4, 282, 'Rhône-Alpes', 'rhone.jpg', '0', 'Rhone'),
(5, 280, 'Guadeloupe', 'guadeloupe.jpg', '0', 'Guadeloupe'),
(6, 279, 'Alsace', 'alsace.jpg', '0', 'Alsace'),
(7, 278, 'Belgique', 'belgique.jpg', '0', 'Belgique'),
(10, 275, 'Poitou', '9b1be02da1149660.jpeg', '23', 'Poitou'),
(11, 274, 'Guyane', 'guyane.jpg', '0', 'Guyane'),
(12, 273, 'Lorraine', '1b81309e6dad8381.jpeg', '22', 'Franche Compté'),
(13, 272, 'Picardie', '3f71c6fbd8ab94fd.jpeg', '23', 'Champagne'),
(17, 274, 'Guyane', '400548262a8f776b.jpeg', '23', 'Guyane'),
(18, 279, 'Alsace', '46e132a5d730f2da.jpeg', '56', 'Alsace'),
(20, 278, 'Belgique', '9d226f8fdb83631c.jpeg', 'www.google.com', 'Belgique');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_surname` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_address` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_zip_code` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_fax` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_town` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_country` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_function` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_corporate_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_biz_activity` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `connection`
--
ALTER TABLE `connection`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`page_id`);

--
-- Index pour la table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `photographs`
--
ALTER TABLE `photographs`
  ADD PRIMARY KEY (`pic_id`);

--
-- Index pour la table `region_del`
--
ALTER TABLE `region_del`
  ADD PRIMARY KEY (`reg_id`);

--
-- Index pour la table `revue`
--
ALTER TABLE `revue`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `connection`
--
ALTER TABLE `connection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `page`
--
ALTER TABLE `page`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT pour la table `photographs`
--
ALTER TABLE `photographs`
  MODIFY `pic_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `region_del`
--
ALTER TABLE `region_del`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `revue`
--
ALTER TABLE `revue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
