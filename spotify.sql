-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : dim. 23 juil. 2023 à 20:01
-- Version du serveur : 8.0.30
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `spotify`
--

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int NOT NULL,
  `username` int NOT NULL,
  `comment` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `playlist`
--

CREATE TABLE `playlist` (
  `id` int NOT NULL,
  `name` int NOT NULL,
  `id_music` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `song`
--

CREATE TABLE `song` (
  `id` int NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `author` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `file` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(10000) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `song`
--

INSERT INTO `song` (`id`, `name`, `author`, `file`, `image`) VALUES
(1, 'Godzilla', 'Eminem', 'musics/Eminem_G.mp3', 'musics/covers/eminem.jpg'),
(2, 'Superhero', 'Metro Boomin', 'musics/metro.mp3', 'musics/covers/metro.jpg'),
(10, 'Praise The Lord', 'A$ap Rocky', 'musics/A$ap_rocky.mp3', 'musics/covers/A$ap.jpg'),
(11, 'Gangsta\'s Paradise', 'Coolio', 'musics/Coolio_Ga.mp3', 'musics/covers/coolio.jpg'),
(14, 'No Role Modelz', 'J.Cole', 'musics/J.Cole.mp3', 'musics/covers/J_Cole.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(30) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `username`) VALUES
(90, 'dfdfd'),
(91, 'gy'),
(92, 'calotte');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `song`
--
ALTER TABLE `song`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `playlist`
--
ALTER TABLE `playlist`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `song`
--
ALTER TABLE `song`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
