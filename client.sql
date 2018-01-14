-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 14 jan. 2018 à 02:50
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `coiffeur`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `civilite` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dateNaissance` date DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ville` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CodePostal` int(11) DEFAULT NULL,
  `remise` int(11) NOT NULL,
  `couleur` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=106 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `civilite`, `dateNaissance`, `nom`, `prenom`, `telephone`, `adresse`, `ville`, `CodePostal`, `remise`, `couleur`) VALUES
(1, 'Mme', NULL, 'ARNOULD', 'Corinne Cassandre', '', '2361 Route de Bretagne', 'BENQUET', 40280, 0, 0),
(2, 'Mme', NULL, 'ARQUOIT', 'Tamara', '05 58 75 69 16', 'Résidence Saint Pierre', 'SAINT-PIERRE-DU-MONT', 40280, 0, 0),
(3, 'Mme', NULL, 'ARRAT', 'Cécile', '05 58 05 91 65', 'Lotissement Clair De Lune', 'SAINT-PIERRE-DU-MONT', 40280, 0, 0),
(4, 'Mme', NULL, 'BANDIERA', 'Marie-Claude', '05 58 75 87 54', '231 Rue Ulysse Pallu', 'MONT-DE-MARSAN', 40000, 0, 1),
(5, 'Mme', NULL, 'BARDOUIL', 'Anne', '05 58 06 12 64', '105 Allée Madame de Sévigné', 'SAINT-PIERRE-DU-MONT', 40280, 0, 0),
(6, 'Mme', NULL, 'BARREAU', 'Madeleine', '05 58 75 92 60', '10 Rue du Limousin', 'SAINT-PIERRE-DU-MONT', 40280, 0, 1),
(7, 'Mme', NULL, 'BARRERE', 'Aurélie', '05 58 03 89 27', '1066 Route de Lubaton', 'SAINT-GEIN', 40190, 0, 0),
(8, 'Mme', NULL, 'BARTOUEL', 'Georgette', '05 58 75 36 65', '6 Avenue Lamarque Cando', 'MIMIZAN', 40200, 0, 1),
(9, 'Mme', NULL, 'BAUCHE', 'Annick', NULL, '20 Impasse du Grand Pillon', 'MONT-DE-MARSAN', 40000, 0, 0),
(10, 'M', NULL, 'BEAUMONT', 'Jean', NULL, '67 Route du Lavoir', 'BEGAAR', 40400, 0, 0),
(11, 'Mme', NULL, 'BEDREDE', 'Renée', '05 58 75 29 47', '746 Avenue Georges Sabde', 'SAINT-PIERRE-DU-MONT', 40280, 0, 0),
(12, 'Mme', NULL, 'BERGES', 'Sylvie', NULL, '2 Rue Yves du Manoir', 'SAINT-PIERRE-DU-MONT', 40280, 0, 0),
(13, 'M', NULL, 'BERGES', 'Pierre', '05 58 05 91 65', 'Lotissement Clair De Lune', 'SAINT-PIERRE-DU-MONT', 40280, 0, 0),
(14, 'Mme', NULL, 'BERNADET', 'Anne', '05 58 56 06 91', '8 rue des Cèdres', 'DAX', 40100, 20, 0),
(15, 'Mme', NULL, 'BEROT', 'Françoise', '05 58 75 72 26', '9 Rue André Capbern', 'MONT-DE-MARSAN', 40000, 0, 0),
(16, 'Mme', NULL, 'BERTHE', 'Marie', '05 58 06 00 01', '473 Boulevard du Belvédère, Saint-Pierre-du-Mont', 'SAINT-PIERRE-DU-MONT', 40280, 0, 0),
(17, 'M', NULL, 'BESLE', 'Emmanuel', '05 58 05 76 20', 'Résidence Bel Air', 'MONT- MARSAN', 40000, 0, 0),
(18, 'Mme', NULL, 'BEULAYGUE', 'Madeleine', '05 58 76 37 29', 'Le Petit Bourg', 'AURICE', 40500, 0, 0),
(19, 'Mme', NULL, 'BLANCHARD', 'Inconnu', '05 58 06 15 30', '11 Allée Claude Mora', 'MONT-DE-MARSAN', 40000, 0, 1),
(20, 'Enfant', NULL, 'BOISSELIER', 'Yoan', NULL, '258 Rue Jules Ferry', 'SAINT-PIERRE-DU-MONT', 40280, 0, 0),
(21, 'Mme', NULL, 'BON', 'Valérie', NULL, 'Chemin de Menasse', 'SAINT-PIERRE-DU-MONT', 40280, 0, 0),
(22, 'Mme', NULL, 'BONNAUD', 'Aurore', NULL, NULL, 'SAINT-PIERRE-DU-MONT', 40280, 0, 0),
(23, 'M', NULL, 'BONNEFOY', 'Bernard', NULL, 'La Ronceraie', 'BEYRIS', 40700, 0, 0),
(24, 'Mme', NULL, 'BONNEFOY', 'Magalie', '05 58 79 00 64', 'La Ronceraie', 'BEYRIS', 40700, 20, 1),
(25, 'Mme', NULL, 'BONNEFOY', 'Anne-Sophie', '05 58 79 00 64', 'La Ronceraie', 'BEYRIS', 40700, 20, 1),
(26, 'Mme', NULL, 'BONNEFOY', 'Stéphanie', '05 58 79 00 64', 'La  Ronceraie', 'BEYRIES', 40700, 20, 1),
(27, 'Mme', NULL, 'BORDES', 'Sylvette', '05 58 46 05 94', '12 Impasse Chambrelent', 'SAINT-PIERRE-DU-MONT', 40280, 0, 0),
(28, 'M', NULL, 'BOUCHAND', 'Bernard', NULL, '106 rue Jules Ferry', 'SAINT-PIERRE-DU-MONT', 40280, 0, 0),
(29, 'Mme', NULL, 'BOURDIER', 'Paulette', '05 58 75 36 79', '28  Rue Paul Verlaine', 'SAINT-PIERRE-DU-MONT', 40280, 0, 0),
(30, 'Mme', '1981-04-30', 'BOURGEOIS', 'Nathalie', '05 58 75 69 89', '16 Allée de la Source', 'MONT-DE-MARSAN', 40000, 0, 0),
(31, 'Mme', NULL, 'BRICE', 'Anne', NULL, '12  rue  Diderot', 'MONT-DE-MARSAN', 40000, 0, 0),
(32, 'Mme', NULL, 'BRINGEON', 'Françoise', '05 58 75 31 54', '2 Rue Jules Védrines', 'SAINT-PIERRE-DU-MONT', 40280, 0, 1),
(33, 'Mme', NULL, 'BRISY', 'Sandra', NULL, '95 Rue Martet', 'SAINT-PIERRE-DU-MONT', 40280, 0, 0),
(34, 'Mme', NULL, 'BROCQUET', 'Candice', NULL, '10 Avenue du 21 Août', 'SAINT-PIERRE-DU-MONT', 40280, 0, 0),
(35, 'Mme', NULL, 'BRUNET', 'Chantal', '05 58 06 28 20', '21 Rue Paul Verlaine', 'SAINT-PIERRE-DU-MONT', 40280, 0, 1),
(36, 'Mme', NULL, 'CABANNES', 'Anne- Marie', '05 58 07 72 84', NULL, 'MOUSTEY', 40410, 0, 1),
(37, 'Mme', NULL, 'CABE', 'Régine', NULL, NULL, 'GRENADE', 40270, 0, 0),
(38, 'Mme', NULL, 'CALES', 'Magalie', NULL, 'Boulevard d\'Aquitaine', 'SAINT-PIERRE-DU-MONT', 40280, 0, 0),
(39, 'Mme', NULL, 'CALES', 'Micheline', '05 58 75 25 80', '2 Rue Jules Ferry', 'SAINT-PIERRE-DU-MONT', 40280, 0, 0),
(40, 'Mme', NULL, 'CALVEL', 'Sylvie', '05 58 46 43 94', '355 Avenue de Portal', 'SAINT-PIERRE-DU-MONT', 40280, 0, 1),
(41, 'M', NULL, 'CALVEL', 'Jean-Luc', '06 78 59 83 71', '355 Avenue de Portal', 'SAINT-PIERRE-DU-MONT', 40280, 0, 0),
(42, 'Enfant', NULL, 'CANTAL', 'Térence', NULL, 'Le Manot', 'SAINT-PIERRE-DU-MONT', 40280, 0, 0),
(43, 'Mme', NULL, 'CARRE', 'Dominique', NULL, '527 Avenue des Arènes', 'SAINT-PERDON', 40090, 0, 0),
(44, 'Mme', NULL, 'CARRERE', 'Marie-Louise', '05 58 75 86 27', '23 Rue du Général Caunègre', 'MONT-DE-MARSAN', 40000, 0, 1),
(45, 'Enfant', NULL, 'CARRERE', 'Cécile', NULL, '23 Rue du Général Caunègre', 'MONT-DE-MARSAN', 40000, 0, 0),
(46, 'Mme', NULL, 'CARRERE', 'Berthe', NULL, '5 Avenue Lamarque Cando', 'SAINT-PIERRE-DU-MONT', 40280, 0, 0),
(47, 'M', NULL, 'CARRERE', 'Philippe', NULL, '23 Avenue du Général Caunègre', 'MONT-DE-MARSAN', 40000, 0, 0),
(48, 'Mme', NULL, 'CASQUERO', 'Cathy', NULL, '5 Impasse Chambrelent', 'SAINT-PIERRE-DU-MONT', 40280, 0, 0),
(49, 'Mme', NULL, 'CASSONE', 'Daniele', '05 58 46 22 89', '517 Bis Boulevard du Belvédère', 'SAINT-PIERRE-DU-MONT', 40280, 0, 1),
(50, 'Enfant', NULL, 'CASTAGNIER', 'Geoffrey', NULL, '4 Rue du Chat Botté', 'SAINT-PIERRE-DU-MONT', 40280, 0, 0),
(51, 'Mme', NULL, 'CASTAGNIER', 'Cécile', NULL, '4 Rue du Chat Botté', 'SAINT-PIERRE-DU-MONT', 40280, 0, 1),
(52, 'Mme', NULL, 'CASTEL', 'Carole', '05 58 06 17 42', '67 Rue Cantecoucut', 'SAINT-PIERRE-DU-MONT', 40280, 0, 0),
(53, 'Mme', NULL, 'CASTETS', 'Arlette', '05 58 75 57 29', '6 Rue du Général Jacquey', 'MONT-DE-MARSAN', 40000, 0, 0),
(54, 'M', NULL, 'CAYASSE', 'Michael', NULL, NULL, NULL, NULL, 0, 0),
(55, 'Mme', NULL, 'CAZAENTRE', 'Clémentine', '05 58 05 97 02', '36 Rue des Érables', 'SAINT-PIERRE-DU MONT', 40280, 0, 0),
(56, 'M', NULL, 'CAZAUBON', 'Alain', NULL, '24 Rue des Érables', 'SAINT-PIERRE-DU-MONT', 40280, 0, 0),
(57, 'M', NULL, 'CAZAUBON', 'Vincent', '05 58 75 99 96', '24 Rue des Érables', 'SAINT-PIERRE-DU-MONT', 40280, 0, 0),
(58, 'Mme', NULL, 'CAZAUBON', 'Roselyne', '05 56 36 97 75', '3 Rue Bellevue', 'PESSAC', 33600, 20, 1),
(59, 'Mme', NULL, 'CAZAUBON', 'Josiane', '05 58 75 99 96', '24 Rue des Érables', 'SAINT-PIERRE-DU-MONT', 40280, 0, 1),
(60, 'M', NULL, 'CAZAUBON', 'Benoit', '05 58 75 99 96', '24 Rue des Érables', 'SAINT-PIERRE-DU-MONT', 40280, 0, 0),
(61, 'Mme', NULL, 'CHALINE', 'Françoise', '05 58 46 12 93', '47 Avenue Belle Chaumière', 'MONT-DE-MARSAN', 40000, 0, 1),
(62, 'Mme', NULL, 'CHAMOULEAU', 'Annick', '05 58 75 42 02', '118 Rue de la Dominante', 'SAINT-PIERRE-DU-MONT', 40280, 0, 1),
(63, 'Mme', '1981-12-13', 'BRETHES', 'Karine', NULL, '118 Rue de la Dominante', 'SAINT-PIERRE-DU-MONT', 40280, 20, 1),
(64, 'Mme', NULL, 'CHARENTON', 'Nathalie', '05 58 05 93 60', '7 Rue des Merles', 'SAINT-PIERRE-DU-MONT', 40280, 0, 0),
(65, 'M', NULL, 'CHARLES', 'Régis', NULL, '51 Rue de la Bourgogne', 'SAINT-PIERRE-DU-MONT', 40280, 0, 0),
(66, 'Mme', NULL, 'CHAUVEAU', 'Corrine', NULL, '39 Avenue Georges Sabde', 'SAINT-PIERRE-DU-MONT', 40280, 0, 0),
(67, 'M', NULL, 'CHENILLE', 'Jean-Pierre', NULL, '745 Avenue des Grands Pins', 'MONT-DE-MARSAN', 40000, 0, 0),
(68, 'Mme', NULL, 'CHEVALIER', 'Jacqueline', NULL, '411 Route du Marsan', 'BASCONS', 40090, 0, 0),
(69, 'Mme', NULL, 'CHRIST', 'Isabelle', NULL, 'Route de Bayonne Villa Jacky Coumassotte', 'SAINT-PIERRE-DU-MONT', 40280, 0, 0),
(70, 'Mme', NULL, 'CIOLINO', 'Bleuette', '05 58 75 17 01', '4 Avenue Sadi Carnot', 'MONT-DE-MARSAN', 40000, 0, 1),
(71, 'Mme', NULL, 'CLAVE', 'Odile', '05 58 06 24 10', 'Lotissement Clair de Lune  Georges  Stéphenson', 'SAINT-PIERRE-DU-MONT', 40280, 0, 0),
(72, 'Mme', NULL, 'CLAVERIE', 'Aline', '05 58 46 57 31', '228 Rue Penardière', 'SAINT-PIERRE-DU-MONT', 40280, 20, 1),
(73, 'M', NULL, 'COGNET', 'Stéphane', NULL, '250 Avenue de la Chesnaie', 'SAINT-PIERRE-DU-MONT', 40280, 0, 0),
(74, 'Mme', NULL, 'COROLLEUR', 'Christelle', '06 84 99 07 15', '24 Rue Frédéric Bastiat', 'MONT-DE-MARSAN', 40000, 0, 0),
(75, 'Mme', NULL, 'CORRIHONS', 'Anne Marie', '05 58 46 18 97', '488 Boulevard du Belvédère', 'SAINT-PIERRE-DU-MONT', 40280, 0, 0),
(76, 'Mme', NULL, 'COTRET', 'Claude', '05 58 75 11 03', '10 Impasse Emile Zola', 'SAINT-PIERRE-DU-MONT', 40280, 0, 1),
(77, 'Mme', NULL, 'COTTAREL', 'Fathia', NULL, '1 Rue Alexandre Dumas', 'SAINT-PIERRE-DU-MONT', 40280, 0, 0),
(78, 'M', NULL, 'COTTIN', 'Thierry', '05 58 85 90 28', '17 Avenue Madame de Sévigné', 'SAINT-PIERRE-DU-MONT', 40280, 0, 0),
(79, 'Mme', NULL, 'COUSTAL', 'Katia', NULL, '295 Avenue de Saint-Sever', 'SAINT-PIERRE-DU-MONT', 40280, 0, 0),
(80, 'Mme', NULL, 'CRABOS', 'Stéphanie', NULL, '3 Impasse de la Roseraie Appartement 14', 'MONT-DE-MARSAN', 40000, 0, 0),
(81, 'Mme', NULL, 'DAGES', 'Joséphine', '05 58 46 23 10', '732 Avenue Georges Sabde', 'SAINT-PIERRE-DU-MONT', 40280, 0, 1),
(82, 'M', NULL, 'DAMIEN', 'Gabriel', NULL, '8 Boulevard Alexander Fleming', 'SAINT-PIERRE-DU-MONT', 40280, 0, 0),
(83, 'Mme', NULL, 'DANTEZ', 'Marie-France', '05 58 75 91 52', '80 Allée Madame de Sévigné', 'SAINT-PIERRE-DU-MONT', 40280, 0, 1),
(84, 'Mme', NULL, 'DARAGNEZ', 'Véronique', '05 58 75 17 96', '63 Rue Alexandre Dumas', 'SAINT-PIERRE-DU-MONT', 40280, 0, 1),
(85, 'Mme', NULL, 'DARENGOSSE', 'Eva', '05 58 46 57 71', '21 Avenue Charles Lamarque Cando', 'SAINT-PIERRE-DU-MONT', 40280, 0, 0),
(86, 'Mme', NULL, 'DARRAMBIDE', 'Josette', NULL, 'Hillo', 'SAINT-MARTIN-D\'ONEY', 40090, 0, 0),
(87, 'Mme', NULL, 'DARRIBEHAUD', 'Lyliane', '05 58 75 33 49', '7 Avenue Chambrelent', 'SAINT-PIERRE-DU-MONT', 40280, 0, 0),
(88, 'Mme', NULL, 'DARRIEUTORT', 'Marie', '05 58 75 55 28', '739 Boulevard du Belvédère', 'SAINT-PIERRE-DU-MONT', 40280, 0, 1),
(89, 'Mme', NULL, 'DARTEYRON', 'Véronique', NULL, '1 Rue Claude Debussy', 'SAINT-PIERRE-DU-MONT', 40280, 0, 0),
(90, 'M', NULL, 'DARTIGUE', 'Vincent', NULL, '305 Chemin de Mayrot', 'BENQUET', 40280, 0, 0),
(91, 'M', NULL, 'DAUGA', 'Frédéric', '05 58 76 18 74', '89 Route du Cap de Gascogne', 'MONTAUT', 40500, 20, 0),
(92, 'Mme', NULL, 'DAYRES', 'Isabelle', '05 58 75 98 57', '8 Impasse du Dr Etienne Labrit', 'MONT DE MARSAN', 40000, 0, 0),
(93, 'Mme', NULL, 'DE  MICHIEL', 'Sophie', NULL, '8 Boulevard Brémontier', 'SAINT-PIERRE-DU-MONT', 40280, 0, 0),
(94, 'Mme', NULL, 'DE  VILLEMANDY', 'Edith', '05 58 06 03 67', 'Saint-Louis', 'SAINT-PIERRE-DU-MONT', 40280, 20, 0),
(95, 'M', NULL, 'DE MICHEL', 'Antoine', '05 58 46 35 40', 'Boulevard Brémontier', 'SAINT-PIERRE-DU-MONT', 40280, 0, 0),
(96, 'M', NULL, 'DE RAVEL', 'Dominique', NULL, 'Impasse Passebec', 'SAINT-PIERRE-DU-MONT', 40280, 0, 0),
(97, 'Mme', NULL, 'DEHEZ', 'Corinne', '05 58 46 08 83', '9 Rue de Marton', 'MONT-DE-MARSAN', 40000, 0, 1),
(98, 'Mme', NULL, 'DEHEZ', 'Cécile', '06 81 58 88 19', '21 Rue du Chat Botté', 'SAINT-PIERRE-DU-MONT', 40280, 0, 1),
(99, 'M', NULL, 'DELELIS', 'Pascal', '05 58 75 73 53', '20 Avenue de Larriou Blanc', 'SAINT-PIERRE-DU-MONT', 40280, 0, 0),
(100, 'Mme', NULL, 'DELMA', 'Nathalie', '05 56 96 31 12', '36 Rue Ligier', 'BORDEAUX', 33000, 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
