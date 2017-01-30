-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Jan 30, 2017 at 12:04 AM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quickservices`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `password` varchar(256) NOT NULL,
  `nom` varchar(15) NOT NULL,
  `age` int(3) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `telephone` varchar(15) DEFAULT NULL,
  `mail` varchar(100) DEFAULT NULL,
  `langues` varchar(120) DEFAULT NULL,
  `ville` varchar(100) NOT NULL,
  `code_postal` varchar(256) NOT NULL,
  `type_service` enum('Toutes','Temps partiel','Regulier','Ponctuel') NOT NULL,
  `service_1` enum('garde','entretien','soutien') NOT NULL,
  `service_2` enum('garde','entretien','soutien') DEFAULT NULL,
  `service_3` enum('garde','entretien','soutien') DEFAULT NULL,
  `presentation` varchar(1024) NOT NULL,
  `info_profil` varchar(1024) NOT NULL,
  `voiture` tinyint(1) NOT NULL,
  `permis` tinyint(1) NOT NULL,
  `experience` tinyint(1) NOT NULL,
  `recommandation` varchar(1024) DEFAULT NULL,
  `disponibilites` varchar(200) DEFAULT NULL,
  `salaire` enum('- de 10$/h','10 - 15$/h','16 - 29$/h','+ 30$/h') NOT NULL,
  `date_entree` datetime NOT NULL,
  `birth_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `password`, `nom`, `age`, `photo`, `telephone`, `mail`, `langues`, `ville`, `code_postal`, `type_service`, `service_1`, `service_2`, `service_3`, `presentation`, `info_profil`, `voiture`, `permis`, `experience`, `recommandation`, `disponibilites`, `salaire`, `date_entree`, `birth_date`) VALUES
(1, 'ma3456', 'Marie', 36, 'marie.jpg', '214-748-3647', 'maria@gmail.com', 'fr,en,es', 'Pointe-aux-Trembles', 'H1A 1A5', 'Temps partiel', 'garde', 'soutien', '', 'Bonjour ! Je suis étudiante et à la recherche de quelques activités qui peuvent m''aider à payer mes études et mon loyer. Venant d''une famille nombreuse, il a toujours été important de s''occuper des tâches ménagères à la maison, depuis que je suis jeune, d''aider à la maison sur toutes sortes de choses. Je serai donc ravie de pouvoir vous aider si vous avez besoin d''aide, de quelque nature que ce soit. N''hésitez pas à me contacter pour plus d''informations !', 'Bonjour ! Je suis étudiante et à la recherche de quelques activités qui peuvent m''aider à payer mes études et mon loyer. Venant d''une famille nombreuse, il a toujours été important …', 0, 1, 6, 'Lorem ipsum dolor sit amet, no agam posse eruditi quo, molestie disputando consectetuer id eum. ', 'Dès aujourd''hui', '10 - 15$/h', '2016-05-19 04:27:11', '1980-01-24'),
(2, 'so0987', 'Sophie', 25, 'sophie.jpg', '514-543-7853', 'sophie@gmail.com', 'fr,en', 'Coaticook', 'J1A 0B7', 'Regulier', 'soutien', 'garde', 'entretien', 'Bonjour Je suis a la recherche d''un travail comme aide éducatrice ou remplaçante a temps partiel ou plein dans les alentours de fabre et jarry . J''ai tous mes papiers (formation 45 hrs- Rôle de RSG , programme éducatif , développement de l''enfant, santé et alimentation , sécurité et Hygiéne - , RCR... ) je parle très bien le français l''arabe , et je me débrouille en anglais et espagnol. Beaucoup d''expérience avec les enfants . Si vous être intéresse contactez moi au numéro suivant', 'Bonjour Je suis a la recherche d''un travail comme aide éducatrice ou remplaçante a temps partiel ou plein dans les alentours de fabre et jarry . J''ai tous mes papiers…', 1, 1, 10, 'Ei eirmod quaerendum cum, an quem splendide mea. Ferri adhuc interesset te per', 'Le matin', '- de 10$/h', '2016-02-26 07:05:11', '1972-07-28'),
(3, 'ne123456', 'Nesrine', 38, 'nesrine.jpg', '514-876-5432', 'nesrine@gmail.com', 'en,fr', 'Stratford', 'G0Y 1P0', 'Temps partiel', 'garde', 'entretien', '', 'Bonjour, Nous sommes à la recherche d''une nounou qui sera en mesure d''aller chercher bébé à la garderie vers les 17h00, le ramener à la maison et s''en occuper jusqu''au environ de 20h30. Nos besoins sont pour les mercredi et jeudi soir, à tout les deux semaines.', 'Bonjour, Nous sommes à la recherche d''une nounou qui sera en mesure d''aller chercher bébé à la garderie vers les 17h00, le ramener à la maison et s''en occuper jusqu''au environ…', 0, 1, 1, 'Ei pri quodsi admodum delicatissimi, ea nec sale noster, quodsi salutatus ei mea. Eu nulla saepe cetero vim', 'L’après midi', '- de 10$/h', '2016-06-04 06:10:32', '1984-06-17'),
(4, 'th09ry', 'Thierry', 28, 'thierry.jpg', '416-876-9600', 'thierry@gmail.com', 'en', 'Toronto', 'M4B 1B4', 'Ponctuel', 'garde', 'entretien', '', 'Bonjour! Je cherche une gardienne énergétique, attentionnée et responsable pour garder mes 2 filles (6 ans et presque 4 ans) les mercredis de 14:30 à environ 20:30. Il s''agit d''aller chercher la plus vieille à l''école, d''aider avec les devoirs, de jouer avec elles ( bricoler, aller au parc ou à la bibliothèque, danser....), réchauffer le souper et d''effectuer la routine du dodo. Nous nous attendons aussi à ce que vous ramassiez les jouets utilisés et la cuisine avant de quitter. Si vous aimeriez d''autres informations, contactez-moi. Au plaisir! Anie-Claude', 'Bonjour! Je cherche une gardienne énergétique, attentionnée et responsable pour garder mes 2 filles (6 ans et presque 4 ans) les mercredis de 14:30 à environ 20:30. Il s''agit d''aller…', 1, 1, 4, 'Ei mei assum voluptatibus. Eu sed harum molestiae, idque', 'Toute la journée', '10 - 15$/h', '2016-02-07 04:35:04', '1978-12-07'),
(5, 'ge984yuj3', 'Genevieve', 36, 'genevieve.jpg', '306-345-2124', 'genevieve@gmail.com', 'fr,en', 'Dorchester', 'N0L 1G0', '', 'soutien', '', '', 'Jai besoin dune personne fiable qu''attend l''autobus scolaire a 15h. Au coin de la rue de chez nous et tout suite apres aille chercher mon plus jeune a la garderie qui est a coter de chez nous et que rentre a la maison avec mes enfants leur donne leur souper et fasse des activites simples avec les enfants (exmp; jouer, colorier, faire leur devoir avk euxusqua au temps que jarrive.', 'Jai besoin dune personne fiable qu''attend l''autobus scolaire a 15h. Au coin de la rue de chez nous et tout suite apres aille chercher mon plus jeune a la garderie…', 1, 1, 3, 'Quas ignota definitiones ad eum, pri cu simul audiam mnesarchum', 'En soirée', '16 - 29$/h', '2017-01-02 12:17:17', '1994-06-21'),
(6, 'al09836tw', 'Alexandra', 18, 'alexandra.jpg', '514-478-9000', 'alexandra@gmail.com', 'fr,en', 'Montréal', 'H1T 1M4', 'Regulier', 'garde', '', '', 'Salut à tous! Je m''appelle Alexandra. J''ai 18 ans. Je suis disponible les week-end pour faire le service de garde des votre enfant. Je suis très responsable et dynamique, et j''adore les enfants. On peut faire plein d''activité ensemble, aller au musée, yoga, exercises, creation, lire, etc. Tout pour le bon développement de l''enfant et sa joie. Je parle français, mais je peux très bien me communiquer en espagnol, Anglais et russe. ', 'Salut à tous! Je m''appelle Alexandra. J''ai 18 ans. Je suis disponible les week-end pour faire le service de garde des votre enfant. Je suis très responsable et dynamique, et…', 0, 0, 1, 'Eum blandit appetere ad, choro maiestatis per ne.', 'Le midi', '- de 10$/h', '2017-01-05 12:49:44', '1975-12-30'),
(7, 'va897yi', 'Valerie', 43, 'valerie.jpg', '456-765-8765', 'valerie@gmail.com', 'fr', 'Sherbrooke', 'J1E 2E7', 'Temps partiel', 'entretien', 'soutien', 'garde', 'Je suis une educatrice de formation j''ai un certificat en petite enfance et je cherche un travail ou des remplacements comme aide educatrice dans des garderies privées ou dans un milieu familiale je suis disponible en tout temps, J''ai deja travaillé dans des garderies donc j''ai de l''experience avec les enfants contacter moi au : 438 934 8617', 'Je suis une educatrice de formation j''ai un certificat en petite enfance et je cherche un travail ou des remplacements comme aide educatrice dans des garderies privées ou dans un…', 1, 1, 10, 'Te quot pertinacia has. Habeo ipsum option mei an', 'L’après midi', '10 - 15$/h', '2016-05-29 08:28:52', '1972-11-05'),
(8, 'al345a', 'Camille', 22, 'camille.jpg', '514-438-6754', 'camille@hotmail.com', 'fr,en,es', 'Montréal', 'H2L 2T1', 'Regulier', 'garde', NULL, '', 'Bonjour j''ai 24 ans et je suis disponible en tout temps pour garder vos enfants soit a mon foyer ou je peux tourjours me deplacer. S''y interesé me contacter par message. Merci et bonne journee', 'Bonjour j''ai 24 ans et je suis disponible en tout temps pour garder vos enfants soit a mon foyer ou je peux tourjours me deplacer. S''y interesé me contacter par…', 0, 0, 1, 'Eum blandit appetere ad, choro maiestatis per ne.', 'Le midi', '- de 10$/h', '2016-03-29 07:53:34', '1977-04-23'),
(9, 'steve23', 'Steve', 22, 'steve.jpg', '347-765-7345', 'steve@gmail.com', 'fr,en', 'Repentigny', 'J6A 3H5', 'Temps partiel', 'entretien', 'soutien', 'garde', 'Bonjour, Nous sommes une gentille famille avec un bébé garçon qui aura 12 mois en janvier. Il s''agit d''un bébé facile, joyeux et qui communique très bien. Maman recommencera à travailler en janvier et nous cherchons quelqu''un qui pourra aller chercher notre fils à la garderie en début d’après-midi, le ramener à la maison (la garderie est à deux minutes à pied, littéralement), nous aider à préparer le souper et faire de très menues tâches familiales jusqu’à ce que nosu revenions du travail. Idéalement, cette personne pourrait être disponible pour des journées entières si notre fils ne va pas à la garderie, surtout les premiers mois de 2017.', 'Bonjour, sommes une gentille famille avec un bébé garçon qui aura 12 mois en janvier. Il s''agit d''un bébé facile, joyeux et qui communique très bien.  recommencera à travailler en janvier…', 0, 1, 4, 'Te quot pertinacia has. Habeo ipsum option mei an', 'En soirée', '10 - 15$/h', '2016-07-05 08:13:12', '1983-03-20'),
(10, 'el0930h', 'Elizabeth', 32, 'elizabeth.jpg', '654-876-9700', 'elizabeth@gmail.com', 'en', 'Lac-Mégantic', 'G6B 1Y8', 'Ponctuel', 'soutien', '', '', 'We are currently seeking Individuals who are creative and has a passion for childcare. Applicants must have Early childhood Education Diploma. We ware looking for individuals who are comfortable working with children between the ages of 2 years old. \\r\\n', 'We are currently seeking Individuals who are creative and has a passion for childcare. Applicants must have Early childhood Education Diploma. We ware looking for individuals who…', 1, 1, 2, 'Eu mei elit iudico denique, ei mucius mollis vel, atqui aliquando ex sit', 'Le matin', '+ 30$/h', '2016-03-06 13:41:50', '1992-08-15'),
(11, 'ac7456a', 'Anie-claude', 26, 'anie_claude.jpg', '876-435-2532', 'anie@gmail.com', 'fr,en', 'Mississauga', 'L4T 0A2', 'Regulier', 'garde', 'entretien', 'soutien', 'Je suis à la recherche d''un emploi à temps partiel pendant la journée ou le weekend. Je suis une maman ayant une expérience pertinent avec les enfants. J''aime beaucoup les enfants et je suis une personne fiable et patiente. Si cela vous intéresses, me rejoindre par email. Merci et au plaisir. J''ai de bonnes références.', 'Je suis à la recherche d''un emploi à temps partiel pendant la journée ou le weekend. Je suis une maman ayant une expérience pertinent avec les enfants. J''aime beaucoup les…', 1, 1, 6, 'Harum molestiae, idque falli nostro his ei. Id nam albucius molestie, solet cetero suavitate in eum', 'Toute la journée', '10 - 15$/h', '2016-01-17 07:11:29', '1981-09-03'),
(12, 'mi0987l', 'Michael', 30, 'michael.jpg', '418-456-2365', 'michael@gmail.com', 'fr,en,es', 'Québec ', 'G0A 3Z0 ', 'Temps partiel', 'garde', NULL, '', 'Bonjour, nous sommes français et jeunes parents d''un petit garçon de 8 semaines. \\r\\nNous recherchons quelqu''un de très sérieux et mature pouvant le garder occasionnellement un soir ou même pour quelques heures un samedi ou dimanche afin de nous octroyer quelques sorties ;). ', 'Bonjour, nous sommes français et jeunes parents d''un petit garçon de 8 semaines. \\r\\nNous recherchons quelqu''un de très sérieux et mature pouvant le garder occasionnellement un soir ou même pour…', 1, 1, 2, 'His veri vocibus assueverit, mutat iudico gubergren his ne. Mei semper convenire sadipscing ea', 'L’après midi', '16 - 29$/h', '2016-11-26 02:10:54', '1985-10-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
