-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 03 Mai 2017 à 11:52
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(11) NOT NULL,
  `name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Phasellus'),
(2, 'gravida'),
(3, 'ipsum'),
(4, 'massa.'),
(5, 'nunc,'),
(6, 'nonummy'),
(7, 'risus'),
(8, 'aliquam'),
(9, 'nostra'),
(10, 'vel');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(11) NOT NULL,
  `content` varchar(256) NOT NULL,
  `author_id` bigint(11) NOT NULL,
  `post_id` bigint(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `comments`
--

INSERT INTO `comments` (`id`, `content`, `author_id`, `post_id`, `date`) VALUES
(1, 'nec, diam.', 1, 4, '2017-10-29 05:30:58'),
(2, 'dui. Suspendisse', 9, 7, '2016-07-18 15:50:11'),
(3, 'sem mollis dui, in sodales elit erat vitae risus. Duis a mi fringilla mi lacinia', 6, 5, '2017-03-30 18:27:52'),
(4, 'pellentesque massa lobortis ultrices. Vivamus rhoncus. Donec est. Nunc ullamcorper, velit in aliquet lobortis,', 2, 1, '2017-11-28 04:23:53'),
(5, 'Sed et', 6, 10, '2016-10-14 07:12:04'),
(6, 'eu enim. Etiam imperdiet dictum magna. Ut tincidunt orci quis', 3, 7, '2017-10-29 06:55:35'),
(7, 'cursus et, magna. Praesent interdum ligula eu enim. Etiam imperdiet', 1, 9, '2017-10-29 04:42:02'),
(8, 'est. Nunc ullamcorper, velit in aliquet lobortis, nisi nibh lacinia', 5, 6, '2016-06-28 00:00:36'),
(9, 'ultrices.', 5, 1, '2016-09-16 10:52:16'),
(10, 'Mauris nulla. Integer urna. Vivamus', 9, 9, '2017-08-03 20:04:50');

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(11) NOT NULL,
  `author_id` bigint(11) NOT NULL,
  `title` varchar(32) NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `title`, `content`, `date`, `category_id`) VALUES
(1, 6, 'ultricies dignissim', 'tincidunt orci quis lectus. Nullam suscipit, est ac facilisis', '2017-10-09 16:33:40', 1),
(2, 3, 'Nulla aliquet.', 'et pede. Nunc sed orci lobortis augue', '2017-05-10 01:22:39', 5),
(3, 6, 'risus. Donec', 'sit', '2017-01-02 22:56:08', 4),
(4, 8, 'neque. Nullam', 'turpis. In condimentum. Donec', '2017-08-08 11:52:46', 3),
(5, 8, 'tincidunt aliquam', 'facilisis vitae, orci. Phasellus dapibus quam quis', '2017-10-23 05:14:56', 1),
(6, 7, 'id ante', 'egestas a, scelerisque sed, sapien. Nunc pulvinar', '2017-02-12 09:54:01', 1),
(7, 1, 'iaculis, lacus', 'ornare, elit elit fermentum risus, at fringilla purus mauris', '2017-11-05 01:05:08', 8),
(8, 7, 'ipsum nunc', 'quam. Curabitur vel lectus.', '2018-04-20 04:42:22', 3),
(9, 6, 'Nunc lectus', 'vitae nibh. Donec est', '2016-10-24 13:16:15', 1),
(10, 9, 'aliquet, metus', 'Nunc laoreet lectus quis', '2017-04-11 19:56:14', 2);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(11) NOT NULL,
  `nickname` varchar(20) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `nickname`, `password`) VALUES
(1, 'Jared', 'HCO23BLA8TS'),
(2, 'Jaden', 'FBQ74OVG3RQ'),
(3, 'Griffin', 'OBU91NAH4MS'),
(4, 'Noelani', 'WJG36AHJ4AR'),
(5, 'Clayton', 'XNO59IGV4YL'),
(6, 'Adara', 'IXQ43HUF5QG'),
(7, 'Paul', 'FPP82CUM8JJ'),
(8, 'Benjamin', 'HNW08OKR6GU'),
(9, 'April', 'CAP53RQB6IC'),
(10, 'Kato', 'LIJ38IJY8WG');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_author_id` (`author_id`),
  ADD KEY `fk_post_id` (`post_id`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_author_id` (`author_id`),
  ADD KEY `fk_category_id` (`category_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `fk_author_id_comments` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `fk_author_id` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
