-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2024 at 06:14 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `faw`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrateur`
--

CREATE TABLE `administrateur` (
  `Id_admin` int(11) NOT NULL,
  `Nom` varchar(30) NOT NULL,
  `Prenom` varchar(30) NOT NULL,
  `EmailAdmin` text NOT NULL,
  `PasswordAdmin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `administrateur`
--

INSERT INTO `administrateur` (`Id_admin`, `Nom`, `Prenom`, `EmailAdmin`, `PasswordAdmin`) VALUES
(1, 'Najam', 'Anass', 'contact.anassnajam@gmail.com', 'a.najam'),
(2, 'Ouadih', 'Adnane', 'adnaneouadih@gmail.com', 'a.ouadih');

-- --------------------------------------------------------

--
-- Table structure for table `base_de_donnees`
--

CREATE TABLE `base_de_donnees` (
  `Id_bdd` int(11) NOT NULL,
  `NomBdd` varchar(10) NOT NULL,
  `Id_candidat` int(11) NOT NULL,
  `Id_cv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `base_de_donnees`
--

INSERT INTO `base_de_donnees` (`Id_bdd`, `NomBdd`, `Id_candidat`, `Id_cv`) VALUES
(1, 'mongoDB', 31, 71);

-- --------------------------------------------------------

--
-- Table structure for table `candidats`
--

CREATE TABLE `candidats` (
  `Id_cand` int(11) NOT NULL,
  `Nom` varchar(30) NOT NULL,
  `Prenom` varchar(30) NOT NULL,
  `Telephone` int(11) NOT NULL,
  `EmailCandidat` text NOT NULL,
  `PasswordCandidat` text NOT NULL,
  `DatedeNaissance` date NOT NULL,
  `Ville` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `candidats`
--

INSERT INTO `candidats` (`Id_cand`, `Nom`, `Prenom`, `Telephone`, `EmailCandidat`, `PasswordCandidat`, `DatedeNaissance`, `Ville`) VALUES
(31, 'Kefi', 'Oussama', 123123123, 'kefioussama85@gmail.com', '&é\"', '2024-04-25', 'El Jadida');

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` int(11) NOT NULL,
  `profile` varchar(20) DEFAULT NULL,
  `civilite` varchar(20) DEFAULT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `entreprise` varchar(100) DEFAULT NULL,
  `sujet` varchar(100) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`id`, `profile`, `civilite`, `nom`, `prenom`, `telephone`, `email`, `entreprise`, `sujet`, `message`, `created_at`) VALUES
(2, 'candidat', 'Marié(e)', 'aze', 'aze', 'aze', 'kefioussama85@gmail.com', 'aze', 'aze', 'aze', '2024-04-26 16:13:26');

-- --------------------------------------------------------

--
-- Table structure for table `count_login`
--

CREATE TABLE `count_login` (
  `id_count` int(11) NOT NULL,
  `EmailLogin` text NOT NULL,
  `PsswdLogin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `count_login`
--

INSERT INTO `count_login` (`id_count`, `EmailLogin`, `PsswdLogin`) VALUES
(17, 'kefioussama85@gmail.com', '&é\"'),
(18, 'kefioussama85@gmail.com', '&é\"'),
(19, 'kefioussama@gmail.com', '123'),
(20, 'kefioussama85@gmail.com', '&é\"'),
(21, 'kefioussama85@gmail.com', '&é\"'),
(22, 'kefioussama85@gmail.com', '&é\"'),
(23, 'kefioussama85@gmail.com', '&é\"'),
(24, 'kefioussama85@gmail.com', '&é\"'),
(25, 'kefioussama@gmail.com', '123'),
(26, 'adnaneouadih@gmail.com', 'a.ouadih'),
(27, 'contact.anassnajam@gmail.com', 'a.najam'),
(28, 'kefioussama85@gmail.com', '&é\"'),
(29, 'kefioussama85@gmail.com', '&é\"'),
(30, 'kefioussama85@gmail.com', '&é\"'),
(31, 'kefioussama85@gmail.com', '&é\"'),
(32, 'kefioussama85@gmail.com', '&é\"'),
(33, 'contact.anassnajam@gmail.com', 'a.najam'),
(34, 'kefioussama85@gmail.com', '&é\"'),
(35, 'kefioussama@gmail.com', '123'),
(36, 'kefioussama85@gmail.com', '&é\"'),
(37, 'kefioussama85@gmail.com', '&é\"'),
(38, 'kefioussama@gmail.com', '123'),
(39, 'kefioussama85@gmail.com', '&é\"'),
(40, 'kefioussama85@gmail.com', '&é\"'),
(41, 'kefioussama85@gmail.com', '&é\"'),
(42, 'kefioussama@gmail.com', '123'),
(43, 'kefioussama@gmail.com', '123'),
(44, 'kefioussama@gmail.com', '123'),
(45, 'kefioussama@gmail.com', '123'),
(46, 'kefioussama85@gmail.com', '&é\"'),
(47, 'contact.anassnajam@gmail.com', 'a.najam');

-- --------------------------------------------------------

--
-- Table structure for table `cv`
--

CREATE TABLE `cv` (
  `Id_cv` int(11) NOT NULL,
  `Id_candidat` int(11) NOT NULL,
  `NiveauEtude` text NOT NULL,
  `Score` int(11) NOT NULL,
  `Photo` varchar(20) NOT NULL COMMENT 'Photo du Candidat',
  `Description` text NOT NULL,
  `categorie` text DEFAULT NULL,
  `LinkedIn` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cv`
--

INSERT INTO `cv` (`Id_cv`, `Id_candidat`, `NiveauEtude`, `Score`, `Photo`, `Description`, `categorie`, `LinkedIn`) VALUES
(71, 31, 'Bac+2', 15, 'photo.jpg', 'jE SUIjE SUI jE SUI jE SUI jE SUI jE SUI jE SUI jE SUI jE SUI jE SUI jE SUI jE SUI jE SUI jE SUI jE SUI jE SUI jE SUI jE SUI', 'Web dev', 'https://www.linkedin.com/feed/');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `Id_experience` int(11) NOT NULL,
  `Poste` varchar(30) NOT NULL,
  `Societe` varchar(30) NOT NULL,
  `Ville` varchar(20) NOT NULL,
  `AnneeDebut` year(4) NOT NULL,
  `AnneeFin` year(4) NOT NULL,
  `Id_Candidat` int(11) NOT NULL,
  `Id_cv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`Id_experience`, `Poste`, `Societe`, `Ville`, `AnneeDebut`, `AnneeFin`, `Id_Candidat`, `Id_cv`) VALUES
(39, 'QSDFAA', 'QSDFAZE', 'Mohammédia', '2014', '2019', 31, 71);

-- --------------------------------------------------------

--
-- Table structure for table `formations`
--

CREATE TABLE `formations` (
  `Id_formation` int(11) NOT NULL,
  `Diplome` varchar(10) NOT NULL,
  `Etablissement` varchar(30) NOT NULL,
  `Ville` varchar(20) NOT NULL,
  `AnneeDebut` year(4) NOT NULL,
  `AnneeFin` year(4) NOT NULL,
  `Id_Candidat` int(11) NOT NULL,
  `Id_cv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `formations`
--

INSERT INTO `formations` (`Id_formation`, `Diplome`, `Etablissement`, `Ville`, `AnneeDebut`, `AnneeFin`, `Id_Candidat`, `Id_cv`) VALUES
(44, 'QSDF', 'QSDF', 'Mohammédia', '2015', '2021', 31, 71);

-- --------------------------------------------------------

--
-- Table structure for table `frameworks`
--

CREATE TABLE `frameworks` (
  `Id_framework` int(11) NOT NULL,
  `NomFramework` varchar(10) NOT NULL,
  `Id_Candidat` int(11) NOT NULL,
  `Id_cv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `frameworks`
--

INSERT INTO `frameworks` (`Id_framework`, `NomFramework`, `Id_Candidat`, `Id_cv`) VALUES
(99, 'Angular', 31, 71),
(100, 'Boostrap', 31, 71);

-- --------------------------------------------------------

--
-- Table structure for table `langages_de_programmation`
--

CREATE TABLE `langages_de_programmation` (
  `id_lng_prog` int(11) NOT NULL,
  `Langage` varchar(10) NOT NULL,
  `Id_Candidat` int(11) NOT NULL,
  `Id_cv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `langages_de_programmation`
--

INSERT INTO `langages_de_programmation` (`id_lng_prog`, `Langage`, `Id_Candidat`, `Id_cv`) VALUES
(129, 'Js', 31, 71),
(130, 'Html', 31, 71),
(131, 'Css', 31, 71),
(132, 'Php', 31, 71);

-- --------------------------------------------------------

--
-- Table structure for table `langues`
--

CREATE TABLE `langues` (
  `Id_langue` int(11) NOT NULL,
  `Langue` varchar(10) NOT NULL,
  `Niveau` varchar(10) NOT NULL,
  `Id_candidat` int(11) NOT NULL,
  `Id_cv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `langues`
--

INSERT INTO `langues` (`Id_langue`, `Langue`, `Niveau`, `Id_candidat`, `Id_cv`) VALUES
(76, 'Francais', 'bon_niveau', 31, 71),
(77, 'Anglais', 'intermedia', 31, 71),
(78, 'Arab', 'intermedia', 31, 71);

-- --------------------------------------------------------

--
-- Table structure for table `offres`
--

CREATE TABLE `offres` (
  `Id_offre` int(11) NOT NULL,
  `Id_recruteur` int(11) NOT NULL,
  `Titre` text NOT NULL,
  `Domaine` text NOT NULL,
  `Type` text NOT NULL,
  `Duree` text NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `offres`
--

INSERT INTO `offres` (`Id_offre`, `Id_recruteur`, `Titre`, `Domaine`, `Type`, `Duree`, `Description`) VALUES
(23, 22, 'WS', 'Web_dev', 'Stage', 'QSDF', 'QSDF');

-- --------------------------------------------------------

--
-- Table structure for table `offres_acceptes`
--

CREATE TABLE `offres_acceptes` (
  `id_offre_accepte` int(11) NOT NULL,
  `id_offre` int(11) NOT NULL,
  `id_candidat` int(11) NOT NULL,
  `Id_recruteur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `offres_postules`
--

CREATE TABLE `offres_postules` (
  `id_offre_postule` int(11) NOT NULL,
  `id_offre` int(11) NOT NULL,
  `id_candidat` int(11) NOT NULL,
  `id_recruteur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `offres_recus`
--

CREATE TABLE `offres_recus` (
  `Id_offre_recu` int(11) NOT NULL,
  `id_offre` int(11) NOT NULL,
  `Id_candidat` int(11) NOT NULL,
  `id_recruteur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recruteurs`
--

CREATE TABLE `recruteurs` (
  `Id_rec` int(11) NOT NULL,
  `Nom` varchar(30) NOT NULL,
  `Prenom` varchar(30) NOT NULL,
  `EmailRecruteur` text NOT NULL,
  `PasswordRecruteur` text NOT NULL,
  `Telephone` int(11) NOT NULL,
  `LinkedIn` text NOT NULL,
  `Ville` varchar(30) NOT NULL,
  `Societe` varchar(30) NOT NULL,
  `Poste` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recruteurs`
--

INSERT INTO `recruteurs` (`Id_rec`, `Nom`, `Prenom`, `EmailRecruteur`, `PasswordRecruteur`, `Telephone`, `LinkedIn`, `Ville`, `Societe`, `Poste`) VALUES
(22, 'Kefi', 'Oussama', 'kefioussama@gmail.com', '123', 123, '', '', 'QSD', 'Chargé_de_Recrutement');

-- --------------------------------------------------------

--
-- Table structure for table `systeme_d'exploitaion`
--

CREATE TABLE `systeme_d'exploitaion` (
  `Id_se` int(11) NOT NULL,
  `NomSystemeExploitation` varchar(10) NOT NULL,
  `Id_candidat` int(11) NOT NULL,
  `Id_cv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `systeme_d'exploitaion`
--

INSERT INTO `systeme_d'exploitaion` (`Id_se`, `NomSystemeExploitation`, `Id_candidat`, `Id_cv`) VALUES
(41, 'Linux', 31, 71);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`Id_admin`);

--
-- Indexes for table `base_de_donnees`
--
ALTER TABLE `base_de_donnees`
  ADD PRIMARY KEY (`Id_bdd`),
  ADD KEY `fk` (`Id_cv`),
  ADD KEY `Id_candidat` (`Id_candidat`);

--
-- Indexes for table `candidats`
--
ALTER TABLE `candidats`
  ADD PRIMARY KEY (`Id_cand`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `count_login`
--
ALTER TABLE `count_login`
  ADD PRIMARY KEY (`id_count`);

--
-- Indexes for table `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`Id_cv`),
  ADD KEY `cv_ibfk_1` (`Id_candidat`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`Id_experience`),
  ADD KEY `experiences_ibfk_3` (`Id_Candidat`),
  ADD KEY `experiences_ibfk_4` (`Id_cv`);

--
-- Indexes for table `formations`
--
ALTER TABLE `formations`
  ADD PRIMARY KEY (`Id_formation`),
  ADD KEY `formations_ibfk_3` (`Id_Candidat`),
  ADD KEY `formations_ibfk_4` (`Id_cv`);

--
-- Indexes for table `frameworks`
--
ALTER TABLE `frameworks`
  ADD PRIMARY KEY (`Id_framework`),
  ADD KEY `frameworks_ibfk_4` (`Id_cv`),
  ADD KEY `frameworks_ibfk_3` (`Id_Candidat`);

--
-- Indexes for table `langages_de_programmation`
--
ALTER TABLE `langages_de_programmation`
  ADD PRIMARY KEY (`id_lng_prog`),
  ADD KEY `langages_de_programmation_ibfk_3` (`Id_Candidat`),
  ADD KEY `langages_de_programmation_ibfk_4` (`Id_cv`);

--
-- Indexes for table `langues`
--
ALTER TABLE `langues`
  ADD PRIMARY KEY (`Id_langue`),
  ADD KEY `langues_ibfk_3` (`Id_candidat`),
  ADD KEY `langues_ibfk_4` (`Id_cv`);

--
-- Indexes for table `offres`
--
ALTER TABLE `offres`
  ADD PRIMARY KEY (`Id_offre`),
  ADD KEY `Id_recruteur` (`Id_recruteur`);

--
-- Indexes for table `offres_acceptes`
--
ALTER TABLE `offres_acceptes`
  ADD PRIMARY KEY (`id_offre_accepte`),
  ADD KEY `id_rec` (`Id_recruteur`),
  ADD KEY `id_offre` (`id_offre`),
  ADD KEY `offres_acceptes_ibfk_4` (`id_candidat`);

--
-- Indexes for table `offres_postules`
--
ALTER TABLE `offres_postules`
  ADD PRIMARY KEY (`id_offre_postule`),
  ADD KEY `id_candidat` (`id_candidat`),
  ADD KEY `id_offre` (`id_offre`),
  ADD KEY `id_recruteur` (`id_recruteur`);

--
-- Indexes for table `offres_recus`
--
ALTER TABLE `offres_recus`
  ADD PRIMARY KEY (`Id_offre_recu`),
  ADD KEY `id_recruteur` (`id_recruteur`),
  ADD KEY `id_offre` (`id_offre`),
  ADD KEY `offres_recus_ibfk_4` (`Id_candidat`);

--
-- Indexes for table `recruteurs`
--
ALTER TABLE `recruteurs`
  ADD PRIMARY KEY (`Id_rec`);

--
-- Indexes for table `systeme_d'exploitaion`
--
ALTER TABLE `systeme_d'exploitaion`
  ADD PRIMARY KEY (`Id_se`),
  ADD KEY `systeme_d'exploitaion_ibfk_3` (`Id_candidat`),
  ADD KEY `systeme_d'exploitaion_ibfk_4` (`Id_cv`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrateur`
--
ALTER TABLE `administrateur`
  MODIFY `Id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `base_de_donnees`
--
ALTER TABLE `base_de_donnees`
  MODIFY `Id_bdd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `candidats`
--
ALTER TABLE `candidats`
  MODIFY `Id_cand` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `count_login`
--
ALTER TABLE `count_login`
  MODIFY `id_count` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `cv`
--
ALTER TABLE `cv`
  MODIFY `Id_cv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `Id_experience` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `formations`
--
ALTER TABLE `formations`
  MODIFY `Id_formation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `frameworks`
--
ALTER TABLE `frameworks`
  MODIFY `Id_framework` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `langages_de_programmation`
--
ALTER TABLE `langages_de_programmation`
  MODIFY `id_lng_prog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `langues`
--
ALTER TABLE `langues`
  MODIFY `Id_langue` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `offres`
--
ALTER TABLE `offres`
  MODIFY `Id_offre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `offres_acceptes`
--
ALTER TABLE `offres_acceptes`
  MODIFY `id_offre_accepte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `offres_postules`
--
ALTER TABLE `offres_postules`
  MODIFY `id_offre_postule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `offres_recus`
--
ALTER TABLE `offres_recus`
  MODIFY `Id_offre_recu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `recruteurs`
--
ALTER TABLE `recruteurs`
  MODIFY `Id_rec` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `systeme_d'exploitaion`
--
ALTER TABLE `systeme_d'exploitaion`
  MODIFY `Id_se` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `base_de_donnees`
--
ALTER TABLE `base_de_donnees`
  ADD CONSTRAINT `base_de_donnees_ibfk_1` FOREIGN KEY (`Id_candidat`) REFERENCES `candidats` (`Id_cand`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk` FOREIGN KEY (`Id_cv`) REFERENCES `cv` (`Id_cv`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cv`
--
ALTER TABLE `cv`
  ADD CONSTRAINT `cv_ibfk_1` FOREIGN KEY (`Id_candidat`) REFERENCES `candidats` (`Id_cand`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `experiences`
--
ALTER TABLE `experiences`
  ADD CONSTRAINT `experiences_ibfk_3` FOREIGN KEY (`Id_Candidat`) REFERENCES `candidats` (`Id_cand`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `experiences_ibfk_4` FOREIGN KEY (`Id_cv`) REFERENCES `cv` (`Id_cv`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `formations`
--
ALTER TABLE `formations`
  ADD CONSTRAINT `formations_ibfk_3` FOREIGN KEY (`Id_Candidat`) REFERENCES `candidats` (`Id_cand`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `formations_ibfk_4` FOREIGN KEY (`Id_cv`) REFERENCES `cv` (`Id_cv`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `frameworks`
--
ALTER TABLE `frameworks`
  ADD CONSTRAINT `frameworks_ibfk_3` FOREIGN KEY (`Id_Candidat`) REFERENCES `candidats` (`Id_cand`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `frameworks_ibfk_4` FOREIGN KEY (`Id_cv`) REFERENCES `cv` (`Id_cv`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `langages_de_programmation`
--
ALTER TABLE `langages_de_programmation`
  ADD CONSTRAINT `langages_de_programmation_ibfk_3` FOREIGN KEY (`Id_Candidat`) REFERENCES `candidats` (`Id_cand`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `langages_de_programmation_ibfk_4` FOREIGN KEY (`Id_cv`) REFERENCES `cv` (`Id_cv`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `langues`
--
ALTER TABLE `langues`
  ADD CONSTRAINT `langues_ibfk_3` FOREIGN KEY (`Id_candidat`) REFERENCES `candidats` (`Id_cand`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `langues_ibfk_4` FOREIGN KEY (`Id_cv`) REFERENCES `cv` (`Id_cv`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `offres`
--
ALTER TABLE `offres`
  ADD CONSTRAINT `offres_ibfk_1` FOREIGN KEY (`Id_recruteur`) REFERENCES `recruteurs` (`Id_rec`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `offres_acceptes`
--
ALTER TABLE `offres_acceptes`
  ADD CONSTRAINT `offres_acceptes_ibfk_3` FOREIGN KEY (`id_offre`) REFERENCES `offres` (`Id_offre`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `offres_acceptes_ibfk_4` FOREIGN KEY (`id_candidat`) REFERENCES `candidats` (`Id_cand`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `offres_postules`
--
ALTER TABLE `offres_postules`
  ADD CONSTRAINT `offres_postules_ibfk_1` FOREIGN KEY (`id_candidat`) REFERENCES `candidats` (`Id_cand`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `offres_postules_ibfk_2` FOREIGN KEY (`id_offre`) REFERENCES `offres` (`Id_offre`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `offres_postules_ibfk_3` FOREIGN KEY (`id_recruteur`) REFERENCES `recruteurs` (`Id_rec`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `offres_recus`
--
ALTER TABLE `offres_recus`
  ADD CONSTRAINT `offres_recus_ibfk_3` FOREIGN KEY (`id_offre`) REFERENCES `offres` (`Id_offre`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `offres_recus_ibfk_4` FOREIGN KEY (`Id_candidat`) REFERENCES `candidats` (`Id_cand`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `systeme_d'exploitaion`
--
ALTER TABLE `systeme_d'exploitaion`
  ADD CONSTRAINT `systeme_d'exploitaion_ibfk_3` FOREIGN KEY (`Id_candidat`) REFERENCES `candidats` (`Id_cand`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `systeme_d'exploitaion_ibfk_4` FOREIGN KEY (`Id_cv`) REFERENCES `cv` (`Id_cv`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
