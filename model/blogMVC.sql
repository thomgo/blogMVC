-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 16 Mai 2019 à 16:41
-- Version du serveur :  5.7.26-0ubuntu0.16.04.1
-- Version de PHP :  7.0.33-5+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blogMVC`
--
CREATE DATABASE IF NOT EXISTS `blogMVC` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `blogMVC`;

-- --------------------------------------------------------

--
-- Structure de la table `Articles`
--

CREATE TABLE `Articles` (
  `a_id` smallint(5) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `catcher` varchar(255) NOT NULL,
  `img_id` smallint(6) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Articles`
--

INSERT INTO `Articles` (`a_id`, `title`, `catcher`, `img_id`, `description`) VALUES
(1, 'Great Stuff', 'Yous should buy this amazing product beacause it is the best', 1, ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam quis faucibus ligula. Quisque lobortis lacinia tincidunt. Nam id gravida enim. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eleifend maximus mauris id consectetur. Maecenas pellentesque velit sem, vel eleifend justo dignissim eget. Integer ac ligula sed leo dictum accumsan ac non dui. Praesent urna ipsum, elementum id nisi sit amet, aliquet pulvinar leo. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras vel pretium felis. Maecenas ac augue sit amet neque ultrices eleifend eu vitae lectus. Nullam a justo nisl. Aliquam vel urna cursus ex consectetur commodo. Aliquam ultricies augue a dolor convallis ornare. Integer et fringilla nunc. Aliquam eros libero, pellentesque ut diam vitae, vehicula egestas quam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque quis vulputate leo, et ornare neque. Vestibulum sed magna a nisi eleifend porta. In at venenatis metus. Sed libero ligula, fermentum at porta sed, molestie vel enim. Curabitur rhoncus velit id iaculis bibendum. Suspendisse non interdum lorem. Phasellus finibus dignissim libero a malesuada. In iaculis nisi vel aliquam tincidunt. Ut malesuada, ligula vitae vulputate consequat, urna arcu convallis sapien, ac tempus augue lectus nec nisl. Suspendisse potenti. Aenean non tincidunt diam. Vestibulum at urna maximus, tempor sapien eget, luctus felis. Proin sagittis nisl ac tellus elementum lacinia quis id diam.\r\n'),
(2, 'Big car', 'Yous should buy this amazing car because it is the fastest', 2, ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam quis faucibus ligula. Quisque lobortis lacinia tincidunt. Nam id gravida enim. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eleifend maximus mauris id consectetur. Maecenas pellentesque velit sem, vel eleifend justo dignissim eget. Integer ac ligula sed leo dictum accumsan ac non dui. Praesent urna ipsum, elementum id nisi sit amet, aliquet pulvinar leo. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras vel pretium felis. Maecenas ac augue sit amet neque ultrices eleifend eu vitae lectus. Nullam a justo nisl. Aliquam vel urna cursus ex consectetur commodo. Aliquam ultricies augue a dolor convallis ornare. Integer et fringilla nunc. Aliquam eros libero, pellentesque ut diam vitae, vehicula egestas quam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque quis vulputate leo, et ornare neque. Vestibulum sed magna a nisi eleifend porta. In at venenatis metus. Sed libero ligula, fermentum at porta sed, molestie vel enim. Curabitur rhoncus velit id iaculis bibendum. Suspendisse non interdum lorem. Phasellus finibus dignissim libero a malesuada. In iaculis nisi vel aliquam tincidunt. Ut malesuada, ligula vitae vulputate consequat, urna arcu convallis sapien, ac tempus augue lectus nec nisl. Suspendisse potenti. Aenean non tincidunt diam. Vestibulum at urna maximus, tempor sapien eget, luctus felis. Proin sagittis nisl ac tellus elementum lacinia quis id diam.\r\n'),
(3, 'Amazing Boat', 'Yous should buy this amazing boat because it is the cheapest', 3, ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam quis faucibus ligula. Quisque lobortis lacinia tincidunt. Nam id gravida enim. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eleifend maximus mauris id consectetur. Maecenas pellentesque velit sem, vel eleifend justo dignissim eget. Integer ac ligula sed leo dictum accumsan ac non dui. Praesent urna ipsum, elementum id nisi sit amet, aliquet pulvinar leo. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras vel pretium felis. Maecenas ac augue sit amet neque ultrices eleifend eu vitae lectus. Nullam a justo nisl. Aliquam vel urna cursus ex consectetur commodo. Aliquam ultricies augue a dolor convallis ornare. Integer et fringilla nunc. Aliquam eros libero, pellentesque ut diam vitae, vehicula egestas quam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque quis vulputate leo, et ornare neque. Vestibulum sed magna a nisi eleifend porta. In at venenatis metus. Sed libero ligula, fermentum at porta sed, molestie vel enim. Curabitur rhoncus velit id iaculis bibendum. Suspendisse non interdum lorem. Phasellus finibus dignissim libero a malesuada. In iaculis nisi vel aliquam tincidunt. Ut malesuada, ligula vitae vulputate consequat, urna arcu convallis sapien, ac tempus augue lectus nec nisl. Suspendisse potenti. Aenean non tincidunt diam. Vestibulum at urna maximus, tempor sapien eget, luctus felis. Proin sagittis nisl ac tellus elementum lacinia quis id diam.\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `Images`
--

CREATE TABLE `Images` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `extension` varchar(25) NOT NULL,
  `img_path` varchar(255) NOT NULL,
  `size` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Images`
--

INSERT INTO `Images` (`id`, `name`, `extension`, `img_path`, `size`) VALUES
(1, 'people.jpg', 'jpg', 'img/', 222222),
(2, 'car.jpg', 'jpg', 'img/', 2545),
(3, 'boat.jpg', 'jpg', 'img/', 12457);

-- --------------------------------------------------------

--
-- Structure de la table `Site_informations`
--

CREATE TABLE `Site_informations` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `main_title` varchar(255) NOT NULL,
  `catcher` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `credits` varchar(255) NOT NULL,
  `creation_date` date NOT NULL,
  `external_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Site_informations`
--

INSERT INTO `Site_informations` (`id`, `main_title`, `catcher`, `sub_title`, `author`, `credits`, `creation_date`, `external_link`) VALUES
(1, 'Des articles en or', 'Le blog d\'information le plus visité au monde', 'Nos meilleurs articles', 'Thomas Gossart', 'Un exercice sous licence open source', '2017-09-08', 'www.thomas-gossart.fr');

-- --------------------------------------------------------

--
-- Structure de la table `Users`
--

CREATE TABLE `Users` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Users`
--

INSERT INTO `Users` (`id`, `mail`, `password`) VALUES
(1, 'tg.59290@gmail.com', '$2y$10$rX9NzgaBgsorSOPigSpmjeCXbjJNi.678xsQt5cxoYKo/4i32VOje');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Articles`
--
ALTER TABLE `Articles`
  ADD PRIMARY KEY (`a_id`);

--
-- Index pour la table `Images`
--
ALTER TABLE `Images`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Site_informations`
--
ALTER TABLE `Site_informations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Articles`
--
ALTER TABLE `Articles`
  MODIFY `a_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `Images`
--
ALTER TABLE `Images`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT pour la table `Site_informations`
--
ALTER TABLE `Site_informations`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `Users`
--
ALTER TABLE `Users`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
