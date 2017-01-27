-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Jan 26, 2017 at 09:12 PM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quickservice`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int(10) NOT NULL,
  `nom` varchar(15) NOT NULL,
  `age` int(3) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `courriel` varchar(100) NOT NULL,
  `langues` varchar(120) NOT NULL,
  `langue_autre` varchar(120) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `code_postal` varchar(256) NOT NULL,
  `type_service` enum('Toutes','Temps partiel','Regulier','Ponctuel') NOT NULL,
  `service 1` enum('garde','entretien','soutien') NOT NULL,
  `service 2` enum('garde','entretien','soutien') DEFAULT NULL,
  `service 3` enum('garde','entretien','soutien') NOT NULL,
  `presentation` varchar(1024) NOT NULL,
  `voiture` tinyint(1) NOT NULL,
  `permis` tinyint(1) NOT NULL,
  `experience` varchar(1024) NOT NULL,
  `recommandation` varchar(1024) NOT NULL,
  `disponibiités` varchar(200) NOT NULL,
  `salaire` enum('- de 10$/h','10 - 15$/h','16 - 29$/h','+ 30$/h') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `nom`, `age`, `photo`, `telephone`, `courriel`, `langues`, `langue_autre`, `ville`, `code_postal`, `type_service`, `service 1`, `service 2`, `service 3`, `presentation`, `voiture`, `permis`, `experience`, `recommandation`, `disponibiités`, `salaire`) VALUES
(1, 'Maria', 36, 'marie.jpg', '214-748-3647', 'maria@gmail.com', 'Français', '', 'Pointe-aux-Trembles', 'H1A Pointe-aux-Trembles', 'Temps partiel', 'garde', '', 'soutien', 'Bonjour ! Je suis étudiante et à la recherche de quelques activités qui peuvent m''aider à payer mes études et mon loyer. Venant d''une famille nombreuse, il a toujours été important de s''occuper des tâches ménagères à la maison, depuis que je suis jeune, d''aider à la maison sur toutes sortes de choses. Je serai donc ravie de pouvoir vous aider si vous avez besoin d''aide, de quelque nature que ce soit. N''hésitez pas à me contacter pour plus d''informations !', 0, 1, '6 ans', 'Lorem ipsum dolor sit amet, no agam posse eruditi quo, molestie disputando consectetuer id eum. ', 'Dès aujourd''hui', '10 - 15$/h'),
(2, 'Sophie', 25, 'sophie.jpg', '514 543 785', 'sophie@gmail.com', 'Français', '', 'Coaticook', 'J1A Coaticook', 'Regulier', 'soutien', 'garde', 'entretien', 'Bonjour Je suis a la recherche d''un travail comme aide éducatrice ou remplaçante a temps partiel ou plein dans les alentours de fabre et jarry . J''ai tous mes papiers (formation 45 hrs- Rôle de RSG , programme éducatif , développement de l''enfant, santé et alimentation , sécurité et Hygiéne - , RCR... ) je parle très bien le français l''arabe , et je me débrouille en anglais et espagnol. Beaucoup d''expérience avec les enfants . Si vous être intéresse contactez moi au numéro suivant', 1, 1, '10 ans', 'Ei eirmod quaerendum cum, an quem splendide mea. Ferri adhuc interesset te per', 'Le matin', '- de 10$/h'),
(3, 'Thierry', 28, 'thierry.jpg', '', '', '', '', '', '', '', '', NULL, '', '', 0, 0, '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
