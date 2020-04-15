-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  mer. 15 avr. 2020 à 09:09
-- Version du serveur :  5.7.25
-- Version de PHP :  7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `s4tp2`
--

-- --------------------------------------------------------

--
-- Structure de la table `Personnage`
--

CREATE TABLE `Personnage` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `atk` int(11) NOT NULL,
  `pv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Personnage`
--

INSERT INTO `Personnage` (`id`, `name`, `atk`, `pv`) VALUES
(1, 'Bob', 40, 180),
(2, 'Patrick', 30, 120),
(18, 'Gary', 10, 40),
(19, 'Carlo', 60, 110),
(22, 'M. Krabs', 30, 110);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Personnage`
--
ALTER TABLE `Personnage`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Personnage`
--
ALTER TABLE `Personnage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
