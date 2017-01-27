-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Jan 27, 2017 at 03:51 AM
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
  `password` varchar(256) NOT NULL,
  `nom` varchar(15) NOT NULL,
  `age` int(3) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `langues` varchar(120) NOT NULL,
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
  `disponibiites` varchar(200) NOT NULL,
  `salaire` enum('- de 10$/h','10 - 15$/h','16 - 29$/h','+ 30$/h') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `password`, `nom`, `age`, `photo`, `telephone`, `mail`, `langues`, `ville`, `code_postal`, `type_service`, `service 1`, `service 2`, `service 3`, `presentation`, `voiture`, `permis`, `experience`, `recommandation`, `disponibiites`, `salaire`) VALUES
(1, 'ma3456', 'Marie', 36, 'marie.jpg', '214-748-3647', 'maria@gmail.com', 'fr,en,es', 'Pointe-aux-Trembles', 'H1A Pointe-aux-Trembles', 'Temps partiel', 'garde', '', 'soutien', 'Bonjour ! Je suis étudiante et à la recherche de quelques activités qui peuvent m''aider à payer mes études et mon loyer. Venant d''une famille nombreuse, il a toujours été important de s''occuper des tâches ménagères à la maison, depuis que je suis jeune, d''aider à la maison sur toutes sortes de choses. Je serai donc ravie de pouvoir vous aider si vous avez besoin d''aide, de quelque nature que ce soit. N''hésitez pas à me contacter pour plus d''informations !', 0, 1, '6 ans', 'Lorem ipsum dolor sit amet, no agam posse eruditi quo, molestie disputando consectetuer id eum. ', 'Dès aujourd''hui', '10 - 15$/h'),
(2, 'so0987', 'Sophie', 25, 'sophie.jpg', '514-543-7853', 'sophie@gmail.com', 'fr,en', 'Coaticook', 'J1A Coaticook', 'Regulier', 'soutien', 'garde', 'entretien', 'Bonjour Je suis a la recherche d''un travail comme aide éducatrice ou remplaçante a temps partiel ou plein dans les alentours de fabre et jarry . J''ai tous mes papiers (formation 45 hrs- Rôle de RSG , programme éducatif , développement de l''enfant, santé et alimentation , sécurité et Hygiéne - , RCR... ) je parle très bien le français l''arabe , et je me débrouille en anglais et espagnol. Beaucoup d''expérience avec les enfants . Si vous être intéresse contactez moi au numéro suivant', 1, 1, '10 ans', 'Ei eirmod quaerendum cum, an quem splendide mea. Ferri adhuc interesset te per', 'Le matin', '- de 10$/h'),
(3, 'ne123456', 'Nesrine', 38, 'nesrine.jpg', '514-876-5432', 'nesrine@gmail.com', 'en,fr', 'Stratford', 'C1B Stratford', 'Temps partiel', 'garde', 'entretien', '', 'Bonjour, Nous sommes à la recherche d''une nounou qui sera en mesure d''aller chercher bébé à la garderie vers les 17h00, le ramener à la maison et s''en occuper jusqu''au environ de 20h30. Nos besoins sont pour les mercredi et jeudi soir, à tout les deux semaines.', 0, 1, '1 an', 'Ei pri quodsi admodum delicatissimi, ea nec sale noster, quodsi salutatus ei mea. Eu nulla saepe cetero vim', 'L’après midi', '- de 10$/h'),
(4, 'th09ry', 'Thierry', 28, 'thierry.jpg', '416-876-9600', 'thierry@gmail.com', 'en', 'Toronto', 'M5A\r\nCentre-ville\r\n(Regent Park / Port de Toronto)', 'Ponctuel', 'garde', NULL, 'entretien', 'Bonjour! Je cherche une gardienne énergétique, attentionnée et responsable pour garder mes 2 filles (6 ans et presque 4 ans) les mercredis de 14:30 à environ 20:30. Il s''agit d''aller chercher la plus vieille à l''école, d''aider avec les devoirs, de jouer avec elles ( bricoler, aller au parc ou à la bibliothèque, danser....), réchauffer le souper et d''effectuer la routine du dodo. Nous nous attendons aussi à ce que vous ramassiez les jouets utilisés et la cuisine avant de quitter. Si vous aimeriez d''autres informations, contactez-moi. Au plaisir! Anie-Claude', 1, 1, '4 ans', 'Ei mei assum voluptatibus. Eu sed harum molestiae, idque', 'Toute la journée', '10 - 15$/h'),
(5, 'ge984yuj3', 'Genevieve', 36, 'genevieve.jpg', '306-345-2124', 'genevieve@gmail.com', 'fr,en', 'Dorchester', 'E4K\r\nDorchester', '', 'soutien', NULL, '', 'Jai besoin dune personne fiable qu''attend l''autobus scolaire a 15h. Au coin de la rue de chez nous et tout suite apres aille chercher mon plus jeune a la garderie qui est a coter de chez nous et que rentre a la maison avec mes enfants leur donne leur souper et fasse des activites simples avec les enfants (exmp; jouer, colorier, faire leur devoir avk euxusqua au temps que jarrive.', 1, 1, '3 ans', 'Quas ignota definitiones ad eum, pri cu simul audiam mnesarchum', 'En soirée', '16 - 29$/h'),
(6, 'al09836tw', 'Alexandra', 18, 'alexandra.jpg', '514-478-9000', 'alexandra@hotmail.com', 'fr,en', 'Montréal', 'H1B\r\nMontréal-Est', 'Regulier', 'garde', NULL, '', 'Bonjour j''ai 24 ans et je suis disponible en tout temps pour garder vos enfants soit a mon foyer ou je peux tourjours me deplacer. S''y interesé me contacter par message. Merci et bonne journee', 0, 0, '1 an', 'Eum blandit appetere ad, choro maiestatis per ne.', 'Le midi', '- de 10$/h'),
(7, 'va897yi', 'Valerie', 43, 'valerie.jpg', '456-765-8765', 'valerie@gmail.com', 'fr', 'Sherbrooke', 'J1E\r\nSherbrooke', 'Temps partiel', 'entretien', 'soutien', 'garde', 'Je suis une educatrice de formation j''ai un certificat en petite enfance et je cherche un travail ou des remplacements comme aide educatrice dans des garderies privées ou dans un milieu familiale je suis disponible en tout temps, J''ai deja travaillé dans des garderies donc j''ai de l''experience avec les enfants contacter moi au : 438 934 8617', 1, 1, '10 ans', 'Te quot pertinacia has. Habeo ipsum option mei an', 'L’après midi', '10 - 15$/h'),
(8, 'al345a', 'Alexandra', 18, 'alexandra.jpg', '514-478-9000', 'alexandra@hotmail.com', 'fr,en', 'Montréal', 'H1B\r\nMontréal-Est', 'Regulier', 'garde', NULL, '', 'Bonjour j''ai 24 ans et je suis disponible en tout temps pour garder vos enfants soit a mon foyer ou je peux tourjours me deplacer. S''y interesé me contacter par message. Merci et bonne journee', 0, 0, '1 an', 'Eum blandit appetere ad, choro maiestatis per ne.', 'Le midi', '- de 10$/h'),
(9, 'steve23', 'Steve', 22, 'steve.jpg', '347-765-7345', 'steve@gmail.com', 'fr,en', 'Repentigny', 'J6A\nRepentigny', 'Temps partiel', 'entretien', 'soutien', 'garde', 'Bonjour !\r\n\r\nNous sommes une gentille famille avec un bébé garçon qui aura 12 mois en janvier. Il s''agit d''un bébé facile, joyeux et qui communique très bien.\r\n\r\nMaman recommencera à travailler en janvier et nous cherchons quelqu''un qui pourra aller chercher notre fils à la garderie en début d’après-midi, le ramener à la maison (la garderie est à deux minutes à pied, littéralement), nous aider à préparer le souper et faire de très menues tâches familiales jusqu’à ce que nosu revenions du travail. Idéalement, cette personne pourrait être disponible pour des journées entières si notre fils ne va pas à la garderie, surtout les premiers mois de 2017.', 0, 1, '4 ans', 'Te quot pertinacia has. Habeo ipsum option mei an', 'En soirée', '10 - 15$/h'),
(10, 'el0930h', 'Elizabeth', 32, 'elizabeth.jpg', '654-876-9700', 'elizabeth@gmail.com', 'en', 'Lac-Mégantic', 'G6B\r\nLac-Mégantic', 'Ponctuel', 'soutien', '', '', 'We are currently seeking Individuals who are creative and has a passion for childcare. Applicants must have Early childhood Education Diploma. We ware looking for individuals who are comfortable working with children between the ages of 2 years old. \r\n', 1, 1, '2 ans', 'Eu mei elit iudico denique, ei mucius mollis vel, atqui aliquando ex sit', 'Le matin', '+ 30$/h'),
(11, 'ac7456a', 'Anie-claude', 26, 'anie-claude.jpg', '876-435-2532', 'anie@gmail.com', 'fr,en', 'Mississauga', 'L5A\r\nMississauga', 'Regulier', 'garde', 'entretien', 'soutien', 'Je suis à la recherche d''un emploi à temps partiel pendant la journée ou le weekend. Je suis une maman ayant une expérience pertinent avec les enfants. J''aime beaucoup les enfants et je suis une personne fiable et patiente. Si cela vous intéresses, me rejoindre par email. Merci et au plaisir. J''ai de bonnes références.', 1, 1, '6 ans', 'Harum molestiae, idque falli nostro his ei. Id nam albucius molestie, solet cetero suavitate in eum', 'Toute la journée', '10 - 15$/h'),
(12, 'mi0987l', 'Michael', 30, 'michael.jpg', '418-456-2365', 'michael@gmail.com', 'fr,en,es', 'Québec ', 'G2J\r\nQuébec\r\n(Lebourgneuf-Est)', 'Temps partiel', 'garde', NULL, '', 'Bonjour, nous sommes français et jeunes parents d''un petit garçon de 8 semaines. \r\nNous recherchons quelqu''un de très sérieux et mature pouvant le garder occasionnellement un soir ou même pour quelques heures un samedi ou dimanche afin de nous octroyer quelques sorties ;). ', 1, 1, '2 ans', 'His veri vocibus assueverit, mutat iudico gubergren his ne. Mei semper convenire sadipscing ea', 'L’après midi', '16 - 29$/h');

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
  MODIFY `id_users` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
