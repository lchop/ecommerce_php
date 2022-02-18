-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : db.3wa.io
-- Généré le : ven. 18 fév. 2022 à 15:25
-- Version du serveur :  5.7.33-0ubuntu0.18.04.1-log
-- Version de PHP : 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `louischopot_`
--

-- --------------------------------------------------------

--
-- Structure de la table `basket`
--

CREATE TABLE `basket` (
  `id` int(10) NOT NULL,
  `date` date NOT NULL,
  `id_member` int(10) NOT NULL,
  `id_product` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `statut` varchar(50) NOT NULL,
  `ip` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `basket`
--

INSERT INTO `basket` (`id`, `date`, `id_member`, `id_product`, `quantity`, `statut`, `ip`) VALUES
(0, '2022-02-18', 0, 1, 1, 'ok', ''),
(0, '2022-02-18', 0, 1, 1, 'ok', ''),
(0, '2022-02-18', 0, 1, 1, 'ok', ''),
(0, '2022-02-18', 0, 1, 1, 'ok', ''),
(0, '2022-02-18', 0, 1, 1, 'ok', ''),
(0, '2022-02-18', 0, 1, 1, 'ok', ''),
(0, '2022-02-18', 0, 2, 1, 'ok', ''),
(0, '2022-02-18', 0, 1, 1, 'ok', ''),
(0, '2022-02-18', 0, 1, 1, 'ok', ''),
(0, '2022-02-18', 0, 1, 1, 'ok', ''),
(0, '2022-02-18', 0, 1, 1, 'ok', ''),
(0, '2022-02-18', 2, 1, 1, 'ok', '');

-- --------------------------------------------------------

--
-- Structure de la table `Membres`
--

CREATE TABLE `Membres` (
  `id` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `postalCode` varchar(10) NOT NULL,
  `town` varchar(100) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL,
  `passworld` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Membres`
--

INSERT INTO `Membres` (`id`, `email`, `firstname`, `lastname`, `address`, `postalCode`, `town`, `tel`, `isAdmin`, `passworld`) VALUES
(1, 'aa@aa', 'aa@aa', 'aa', '', '', '', '', 0, '$2y$10$7EyaT9bDuX1xisb2XQqwk.pWAdyl1r5Pz.rpN3PHpbtEHGbwn91yy'),
(2, 'bb@bb', 'bb@bb', 'bb', '', '', '', '', 0, '$2y$10$vguqTtk64auN.o6mVFeTgumGCCau7ezTc3Bkn3a7qpqS1w0iPyqa.');

-- --------------------------------------------------------

--
-- Structure de la table `orderlines`
--

CREATE TABLE `orderlines` (
  `id` int(10) NOT NULL,
  `id_product` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `id_order` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) NOT NULL,
  `date` date NOT NULL,
  `id_member` int(10) NOT NULL,
  `statut` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `name` varchar(55) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text NOT NULL,
  `img` varchar(55) NOT NULL,
  `stock` int(10) NOT NULL,
  `promote` tinyint(1) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `img`, `stock`, `promote`, `date`) VALUES
(1, 'nike', '100.00', 'Chaussure nike air force', 'nike.jpeg', 3, 1, '2022-02-16'),
(2, 'adidas', '80.00', 'Chaussure adidas canon', 'adidas.jpeg', 2, 1, '2022-02-16'),
(3, 'pumas', '120.00', 'Chaussure pumas au top', 'pumas.jpeg', 4, 1, '2022-02-16'),
(4, 'asics', '20.00', 'Asics il y a plus', 'asics.jpeg', 0, 0, '2022-02-16');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Membres`
--
ALTER TABLE `Membres`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Membres`
--
ALTER TABLE `Membres`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
