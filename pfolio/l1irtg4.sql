-- phpMyAdmin SQL Dump
-- version 5.2.2deb1+deb13u1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : ven. 24 avr. 2026 à 19:33
-- Version du serveur : 11.8.6-MariaDB-0+deb13u1 from Debian
-- Version de PHP : 8.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `l1irtg4`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `email`, `message`) VALUES
(1, 'nyx', 'nyx@gmail.com', 'bshdhhdhhdhd'),
(2, 'ori', 'ori@gmail.com', 'ssssssssssssssssssssssssssssss\r\n'),
(3, 'malux', 'mal@gmail.com', 'qdddddddddddddddddddd');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
