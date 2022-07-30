-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 27 avr. 2022 à 13:03
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `flakkes`
--

-- --------------------------------------------------------

--
-- Structure de la table `films`
--

CREATE TABLE `films` (
  `id` int(100) NOT NULL,
  `nom_film` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `films`
--

INSERT INTO `films` (`id`, `nom_film`) VALUES
(1, 'Avengers'),
(2, 'Transformers'),
(1, 'Avengers'),
(2, 'Transformers'),
(3, 'jumanji'),
(4, 'step up'),
(0, 'batman'),
(0, 'spiderman'),
(0, 'super mario'),
(0, 'harry potter'),
(5, 'slow dance'),
(6, 'salsa'),
(5, 'titanic'),
(7, '500 days of summer'),
(8, 'bad boys'),
(5, 'slow dance'),
(6, 'salsa'),
(5, 'titanic'),
(7, '500 days of summer'),
(8, 'bad boys');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  `birthday` date NOT NULL,
  `sex` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `birthday`, `sex`) VALUES
(20, 'qsdqsdqsd5555555', 'dqqd@sdqsd.cc', 'qqqqqqqdsqd', '2022-04-16', 'F'),
(22, '4444', 'qqqqqqqqqq@sqdq', 'qsddqsdqqqqqq', '2022-04-21', 'F'),
(24, 'q54566665q', 'sqd@s.com', 'qqqqqqqqqqqqqqqqqqqq', '2022-04-29', 'F'),
(26, 'oussema', 'oussela@gmail.com', '12345678', '2022-04-07', 'M'),
(27, 'borhen', '1123@gmail.com', '12345678', '2022-04-15', 'M'),
(28, 'youssedf', 'youssef@gmail.com', '123456789', '2022-04-08', 'M'),
(30, 'Nadia Boulifa', 'nadia.boulifa@gmail.com', '123456789', '1992-06-16', 'F');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email_2` (`email`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `email` (`email`),
  ADD KEY `password` (`password`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
