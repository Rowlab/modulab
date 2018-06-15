-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  ven. 15 juin 2018 à 06:47
-- Version du serveur :  5.6.38
-- Version de PHP :  7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `modulab2`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `company_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `company_name`, `created_by`, `created_at`, `active`) VALUES
(25, 'benoit', '123', '2018-06-15 06:40:33.786192', 0);

-- --------------------------------------------------------

--
-- Structure de la table `client_info`
--

CREATE TABLE `client_info` (
  `client_id` int(11) NOT NULL DEFAULT '0',
  `contact_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(160) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `client_info`
--

INSERT INTO `client_info` (`client_id`, `contact_name`, `phone`, `fax`, `address`, `mail`, `content`) VALUES
(19, 'bbb', 'bbb', 'bb', 'bb', 'bb', NULL),
(20, 'CC', 'CCC', 'CCC', 'CCC', 'CC', NULL),
(21, '1111', '111', '111', '111', '111', NULL),
(22, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'test', 'test', 'test', 'test', 'test', NULL),
(24, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'test', 'test', 'test', 'test', 'test', NULL),
(26, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `job`
--

CREATE TABLE `job` (
  `id` int(11) NOT NULL,
  `fonction` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

CREATE TABLE `note` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `title` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `note`
--

INSERT INTO `note` (`id`, `client_id`, `title`, `content`, `type`, `created_by`, `created_at`, `active`) VALUES
(5, 19, 'note bbb', 'note bbb', NULL, 123, '2018-06-15 00:20:57.298045', 0),
(6, 19, '2eme note bbb', '2eme note bbb', NULL, 123, '2018-06-15 00:22:36.332554', 0),
(7, 21, 'note client 1', 'note client 1', NULL, 123, '2018-06-15 00:27:41.815711', 0),
(8, 21, '2eme note client 1', '2eme note client 1', NULL, 123, '2018-06-15 00:27:52.665388', 0),
(16, 23, 'sqf', 'fqsfsq', NULL, 123, '2018-06-15 00:44:37.924221', 0),
(19, 23, 'benoit', 'benoit', NULL, 123, '2018-06-15 06:08:25.014899', 0),
(21, 25, 'note', 'note', NULL, 123, '2018-06-15 06:43:05.681622', 0);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_id` int(11) DEFAULT NULL,
  `mail` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `active` int(11) NOT NULL DEFAULT '1',
  `role` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `name`, `surname`, `job_id`, `mail`, `password`, `created_at`, `active`, `role`) VALUES
(23, '123', '123', NULL, '123', '$2y$10$76p6beq7hHCyCmRSoHOlx.NDsIuM7yFkeWq9bmi/Rbnn/uHmyRnEu', '2018-06-14 11:45:11.410050', 1, 0),
(33, 'aa', 'aa', NULL, 'benoit', '$2y$10$rNq9PXgEWD9Jz9nLeTwsoOiLw1NGqCdvRar/YVjX1GWTUOaHBbhDu', '2018-06-14 22:00:26.000000', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(11) NOT NULL,
  `address` varchar(160) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user_info`
--

INSERT INTO `user_info` (`user_id`, `address`, `phone`, `fax`) VALUES
(23, '', '', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `client_info`
--
ALTER TABLE `client_info`
  ADD PRIMARY KEY (`client_id`);

--
-- Index pour la table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_id_idx` (`job_id`);

--
-- Index pour la table `user_info`
--
ALTER TABLE `user_info`
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD KEY `user_id_idx` (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `note`
--
ALTER TABLE `note`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `job_id` FOREIGN KEY (`job_id`) REFERENCES `job` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `user_info`
--
ALTER TABLE `user_info`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
