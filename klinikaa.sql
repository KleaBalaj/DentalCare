-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2020 at 12:35 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klinikaa`
--

-- --------------------------------------------------------

--
-- Table structure for table `kalendar`
--

CREATE TABLE `kalendar` (
  `id_orari` int(11) NOT NULL,
  `dita` varchar(50) NOT NULL,
  `ora` time NOT NULL,
  `gjendje` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kalendar`
--

INSERT INTO `kalendar` (`id_orari`, `dita`, `ora`, `gjendje`) VALUES
(1, 'E hene', '09:00:00', 'jo'),
(2, 'E hene', '10:30:00', 'jo'),
(3, 'E hene', '12:00:00', 'jo'),
(4, 'E hene', '13:30:00', 'po'),
(5, 'E hene', '15:00:00', 'jo'),
(6, 'E hene', '16:30:00', 'po'),
(7, 'E marte', '09:00:00', 'po'),
(8, 'E marte', '10:30:00', 'jo'),
(9, 'E marte', '12:00:00', 'jo'),
(10, 'E marte', '13:30:00', 'po'),
(11, 'E marte', '15:00:00', 'po'),
(12, 'E marte', '16:30:00', 'po'),
(13, 'E merkure', '09:00:00', 'jo'),
(14, 'E merkure', '10:30:00', 'po'),
(15, 'E merkure', '12:00:00', 'po'),
(16, 'E merkure', '13:30:00', 'jo'),
(17, 'E merkure', '15:00:00', 'po'),
(18, 'E merkure', '16:30:00', 'po'),
(19, 'E enjte', '09:00:00', 'po'),
(20, 'E enjte', '10:30:00', 'po'),
(21, 'E enjte', '12:00:00', 'po'),
(22, 'E enjte', '13:30:00', 'jo'),
(23, 'E enjte', '15:00:00', 'po'),
(24, 'E enjte', '16:30:00', 'po'),
(25, 'E premte', '09:00:00', 'po'),
(26, 'E premte', '10:30:00', 'po'),
(27, 'E premte', '12:00:00', 'po'),
(28, 'E premte', '13:30:00', 'jo'),
(29, 'E premte', '15:00:00', 'po'),
(30, 'E premte', '16:30:00', 'jo'),
(31, 'E shtune', '09:00:00', 'po'),
(32, 'E shtune', '10:30:00', 'po'),
(33, 'E shtune', '12:00:00', 'po'),
(34, 'E shtune', '13:30:00', 'jo'),
(35, 'E shtune', '15:00:00', 'jo');

-- --------------------------------------------------------

--
-- Table structure for table `kartele`
--

CREATE TABLE `kartele` (
  `id_kartele` int(11) NOT NULL,
  `ID_foto` int(11) NOT NULL,
  `emri` varchar(20) NOT NULL,
  `mbiemri` varchar(20) NOT NULL,
  `mosha` int(11) NOT NULL,
  `koment` varchar(500) NOT NULL,
  `ekzaminim` varchar(20) NOT NULL,
  `data` date NOT NULL,
  `mjek` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kategori_sherbimi`
--

CREATE TABLE `kategori_sherbimi` (
  `ID_kategori` int(11) NOT NULL,
  `kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_sherbimi`
--

INSERT INTO `kategori_sherbimi` (`ID_kategori`, `kategori`) VALUES
(1, 'Implantologji'),
(2, 'Kellef_UraPorcelani'),
(3, 'Ortodenci'),
(4, 'Proteza_te_levizshme'),
(5, 'Terapi_Mbushje'),
(6, 'Punimet_tek_Femijet'),
(7, 'Kirurgji'),
(8, 'Profilaksi');

-- --------------------------------------------------------

--
-- Table structure for table `pacient`
--

CREATE TABLE `pacient` (
  `email` varchar(250) NOT NULL,
  `id` int(11) NOT NULL,
  `password` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `niveli` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pacient`
--

INSERT INTO `pacient` (`email`, `id`, `password`, `username`, `niveli`) VALUES
('klea99.balaj@gmail.com', 1, 'b59c67bf196a4758191e42f76670ceba', 'klea', 'pacient'),
('admin@gmail.com', 2, '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin'),
('sarabalaj96@gmail.com', 3, 'b59c67bf196a4758191e42f76670ceba', 'Sara', 'pacient'),
('staf@gmail.com', 4, '7b8a17c3f48d4453fde0fd74b4fa9212', 'Staf', 'staf'),
('biankabalaj96@gmail.com', 5, '37ad7973e5d7488561b91bf584334d6f', 'bianka', 'pacient'),
('sarakajana@gmail.com', 6, 'b59c67bf196a4758191e42f76670ceba', 'k_sara', 'pacient'),
('endriisufi5@gmail.com', 7, 'b59c67bf196a4758191e42f76670ceba', 'endri', 'pacient'),
('ennydedej01@gmail.com', 8, 'b59c67bf196a4758191e42f76670ceba', 'Enejda', 'pacient'),
('arditbeu8@gmail.com', 9, 'b59c67bf196a4758191e42f76670ceba', 'Ardit', 'pacient'),
('test@gmail.com', 11, 'e1b849f9631ffc1829b2e31402373e3c', 'test', '');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset`
--

CREATE TABLE `password_reset` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `password_reset`
--

INSERT INTO `password_reset` (`id`, `email`, `token`) VALUES
(1, 'biankabalaj96@gmail.com', 'a9e73a7bcf3247971a1424ea1071821eace0072f56029685472516d27ace2229debe5976fe33105bd63c926e35c87cbdf5f0'),
(2, 'biankabalaj96@gmail.com', '708709e894642b47a44e7be86b80142596ccaedf20724bd54f1e005098ff782c3420e85961ba50d907424b504495d2597e6a'),
(3, 'biankabalaj96@gmail.com', '0fd01655ec946216afe05a0f5d4c1dd34637589528cd416ae7aa290122582efd3f4f34a219babc59db3f36434cc59a03f2ea'),
(4, 'biankabalaj96@gmail.com', '7d6f0fe4c7f869a9dc0bd61f672e280fda2c811f1d53c0602cb8ce952c2fc2d8e3e0696f1cbd5b487063a50bf48eef7581ae'),
(5, 'biankabalaj96@gmail.com', '25797e7bd99621991a4233b684f7714fb27962f401db702cf9fbf2749cc77845bb9ba02b6f6b1895f7e8aaaa46bd4afdabc1'),
(6, 'biankabalaj96@gmail.com', 'e68291f9dd0cbd76e5308df8bb6b95480dfd1c88b740051fd0f9ec4435ef0cf0241edc8530315f267076dce13f725484cd66'),
(7, 'biankabalaj96@gmail.com', '97240dcd100cb32c8de319a23c5753138014c0e17c19a82c869b10f92521d6e23c2c96424370cc9cf25c52a40e12210e2d9d'),
(8, 'biankabalaj96@gmail.com', 'a66cf49b491460eaae10a4d44cc88011c4056365c0a08156ce2667d2b357c5ed3018e1d9d5f4884cb8fd480b7aa82b42c8d6');

-- --------------------------------------------------------

--
-- Table structure for table `rezervim`
--

CREATE TABLE `rezervim` (
  `ID_rez` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `data` varchar(50) NOT NULL,
  `Emri` varchar(20) NOT NULL,
  `gjinia` varchar(5) NOT NULL,
  `kategoria` varchar(30) NOT NULL,
  `Konfirmimi` varchar(10) NOT NULL,
  `mbiemri` varchar(20) NOT NULL,
  `mosha` int(11) NOT NULL,
  `ora` time NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rezervim`
--

INSERT INTO `rezervim` (`ID_rez`, `id`, `data`, `Emri`, `gjinia`, `kategoria`, `Konfirmimi`, `mbiemri`, `mosha`, `ora`, `username`) VALUES
(2, 1, '2020-10-01', 'klea', 'Femer', 'Implantologji', '', 'balaj', 0, '00:00:00', 'klea'),
(12, 2, '2020-09-08', 'klea', 'F', 'Implantologji', '', 'Balaj', 21, '12:00:00', 'klea'),
(20, 3, '2020-10-19', 'sara', 'Femer', 'Implantologji', '', 'balaj', 23, '12:01:00', 'sara'),
(25, 3, '2020-10-15', 'sara', 'Femer', 'Profilaksi', '', 'balaj', 23, '12:28:00', 'sara'),
(26, 5, '2020-10-22', 'Bianka', 'Femer', 'Implantologji', '', 'Balaj', 24, '04:34:00', 'bianka'),
(33, 1, 'E marte', 'klea', 'Femer', 'Implantologji', '', 'balaj', 21, '00:00:00', 'klea'),
(34, 1, 'E marte', 'klea', 'Femer', 'Implantologji', '', 'balaj', 21, '00:00:00', 'klea'),
(35, 1, 'E hene', 'klea', 'Femer', 'Implantologji', '', 'balaj', 21, '09:00:00', 'klea'),
(36, 1, 'E merkure', 'klea', 'Femer', 'Implantologji', '', 'balaj', 21, '09:00:00', 'klea'),
(37, 1, 'E premte', 'klea', 'Femer', 'Implantologji', '', 'balaj', 21, '09:00:00', 'klea'),
(38, 1, 'E premte', 'klea', 'Femer', 'Implantologji', '', 'balaj', 21, '09:00:00', 'klea'),
(39, 1, 'E enjte', 'klea', 'Femer', 'Implantologji', '', 'balaj', 21, '09:00:00', 'klea'),
(40, 1, 'E merkure', 'klea', 'Femer', 'Implantologji', '', 'balaj', 21, '09:00:00', 'klea'),
(41, 1, '', 'klea', 'Femer', 'Implantologji', '', 'balaj', 21, '09:00:00', 'klea'),
(42, 1, 'E premte', 'klea', 'Femer', 'Ortodenci', '', 'balaj', 21, '09:00:00', 'klea'),
(43, 1, 'E enjte', 'klea', 'Femer', 'Kirurgji', '', 'balaj', 21, '09:00:00', 'klea'),
(44, 1, 'E hene', 'sara', 'Femer', 'Implantologji', '', 'balaj', 21, '00:00:00', 'klea'),
(45, 1, 'E hene', '', 'Femer', 'Implantologji', '', '', 0, '00:00:00', 'klea'),
(46, 1, 'E hene', 'klea', 'Femer', 'Implantologji', '', 'balaj', 21, '00:00:00', 'klea'),
(47, 1, 'E hene', 'klea', 'Femer', 'Implantologji', '', 'balaj', 21, '00:00:00', 'klea'),
(48, 1, 'E hene', 'klea', 'Femer', 'Implantologji', '', 'balaj', 0, '00:00:00', 'klea'),
(49, 1, 'E hene', 'klea', 'Femer', 'Implantologji', '', 'balaj', 21, '10:30:00', 'klea'),
(50, 1, '', 'sara', 'Femer', 'Implantologji', '', '', 2, '00:00:00', 'klea'),
(51, 1, 'E marte', 'klea', 'Femer', 'Implantologji', '', 'balaj', 21, '12:00:00', 'klea'),
(52, 1, 'E hene', 'klea', 'Femer', 'Implantologji', '', 'balaj', 21, '09:00:00', 'klea'),
(53, 1, 'E hene', 'klea', 'Femer', 'Implantologji', '', 'balaj', 21, '12:00:00', 'klea');

-- --------------------------------------------------------

--
-- Table structure for table `sherbimi`
--

CREATE TABLE `sherbimi` (
  `ID_kategori` int(11) NOT NULL,
  `ID_sherbimi` int(11) NOT NULL,
  `emri` varchar(50) NOT NULL,
  `cmimi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sherbimi`
--

INSERT INTO `sherbimi` (`ID_kategori`, `ID_sherbimi`, `emri`, `cmimi`) VALUES
(1, 1, 'Mini implante', 250),
(1, 2, 'Implante Minivent', 350),
(1, 3, 'Implante Biomet 3i', 650),
(2, 4, 'Kellef Porcelani Metalik', 100),
(2, 5, 'Kellef Palladium Porcelan', 300),
(2, 6, 'Kellef Porcelani Zirkon', 200),
(2, 7, 'Kellef/Fasete iPS Empress(xham-porcelan)', 200),
(2, 8, 'Kellef/Fasete E.max', 300),
(2, 9, 'Mbushje Porcelani', 100),
(3, 10, 'Aparat i levizshem', 250),
(3, 11, 'Aparat metalik fiks', 1000),
(3, 12, 'Aparat fiks estetik', 1100),
(3, 13, 'Aparat transparent', 1500),
(4, 14, 'Proteze totale e thjeshte', 300),
(4, 15, 'Proteze parciale e skeletuar metalike', 350),
(4, 16, 'Proteze parciale e skeletuar me atashment', 350),
(4, 17, 'Proteze parciale pa metal', 350),
(5, 18, 'Mbushje pa heqje nervi me 1 sip', 25),
(5, 19, 'Mbushje pa heqje nervi me 2 sip', 30),
(5, 20, 'Mbushje pa heqje nervi me 3 sip', 35),
(5, 21, 'Mbushje pa heqje nervi me Nano Kompozit', 50),
(5, 22, 'Rikonstruksion me 1 vide metali per kellef', 30),
(5, 23, 'Mbushje me heqje nervi me 1 kanal', 45),
(5, 24, 'Mbushje me heqje nervi me 2 kanale', 50),
(5, 25, 'Mbushje me heqje nervi me 3 kanale', 55),
(6, 26, 'Mbushje mbrojtese', 15),
(6, 27, 'Mbushje dhemb qumeshti', 10),
(6, 28, 'Mbushje dhemb qumeshti grada 2', 25),
(6, 29, 'Mbushje dhemb qumeshti grada 3', 30),
(7, 30, 'Heqje dhemb qumeshti', 5),
(7, 31, 'Heqje e thjeshte dhembi', 10),
(7, 32, 'Heqje dhemballe pjekurie', 20),
(7, 33, 'Operacion kanin ne nofull', 100),
(8, 34, 'Pastrim gurezash', 15),
(8, 35, 'Fluorifikim', 10),
(8, 36, 'Trajtim i mishrave', 30);

-- --------------------------------------------------------

--
-- Table structure for table `staf_foto`
--

CREATE TABLE `staf_foto` (
  `ID_foto` int(11) NOT NULL,
  `ID_kategori` int(11) NOT NULL,
  `Emri` varchar(20) NOT NULL,
  `img_dir` varchar(250) NOT NULL,
  `info` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staf_foto`
--

INSERT INTO `staf_foto` (`ID_foto`, `ID_kategori`, `Emri`, `img_dir`, `info`) VALUES
(1, 1, 'Dr.Ina', 'img/inaaa.jpg', 'PhD. DMD. Në Implantologjinë Orale, Drejtore e klinikës\r\nNë vitin 2004 u diplomua në Mjekësinë Stomatologjike në Fakultetin e Stomatologjisë, Universiteti i Marmarasë, Stamboll, Turqi.\r\nAjo filloi karrierën e saj profesionale në vitin 2004 në një poliklinikë të njohur në Stamboll.\r\nNë vitin 2009 u diplomua nga Departamenti i Implantologjisë Orale, Fakulteti i Stomatologjisë, Universiteti i Stambollit dhe gjithashtu mori një Ph.D. Në të njëjtin vit ajo filloi të jepte mësim Implantologjisë Orale, Kirurgjisë Periodontale, Kirurgjisë Orale, Anestezisë Dentare në Universitetin Shqiptar.\r\nVizita të shpeshta në Universitetet e Harvardit dhe në Universitetin e Gracit për kërkime të ndryshme shkencore dhe studime klinike.\r\nAjo ka botuar studime të shumta, ka mbajtur dhjetra konferenca ndërkombëtare dhe kombëtare dhe është anëtare e\r\n• Shoqata Evropiane për Osseointegrim\r\n• Shoqata Gjermane për Implantologjinë Orale\r\n• Shoqata për implantologji gojore turke'),
(2, 3, 'Dr.Anila', 'img/anilaaa.jpg', 'Në vitin 2009 u diplomua në stomatologji në Fakultetin e Mjekësisë në Tiranë. Specializim në terapi konservative, estetikë në Universitetin e Mjekësisë në Tiranë më 2013.\r\n\r\nSpecializim në ortodontikë në “Albanian University” në vitin 2017.\r\n\r\nGjuhët e huaja të përdorura në nivel aktiv: – italisht, anglisht. Gjatë karrierës së tij vazhdon të specializohet duke ndjekur klasa, seminare dhe kongrese, dhe ai zbaton metodat dhe teknikat më të mira dentare në praktikën e tij të përditshme.'),
(3, 5, 'Dr.Eno', 'img/enooo.jpg', 'Në vitin 2010 është diplomuar në mjekësinë stomatologjike në Fakultetin e Mjekësisë në Tiranë. Në vitin 2011 ai filloi të punojë në klinikën tonë, duke fituar aftësi të veçanta në:\r\n• Ndërtimin  e restaurimeve të përbëra, rehabilitimin estetiko-funksional.\r\n• Stomatologji konservatore – endodontikë, restaurime të përbërë. Gjuhët e huaja të përdorura në nivel aktiv: – italisht, anglisht, turqisht, arabisht.'),
(4, 7, 'Dr.Luani', 'img/luannn.jpg', 'Mjek Stomatolog ne sallen e praktikave dentare, viti 2012-2014, Fakulteti I shkencave mjekesore, dega Stomatologji, AU Asistent Pedagog lenda Protetike Fikse, viti 2014-2016, Fakulteti I shkencave mjekesore, dega Stomatologji, AU Fakulteti I shkencave mjekesore, dega Stomatologji, AU Pedagog i Brendshem , lenda Protetike Fikse, viti 2016 e ne vazhdim, Periudha vjetore 2012-2016, vitete akademike 2012-2013,…\r\nMjek Stomatolog ne sallen e praktikave dentare, viti 2012-2014, Fakulteti I shkencave mjekesore, dega Stomatologji, AU\r\nAsistent Pedagog lenda Protetike Fikse, viti 2014-2016, Fakulteti I shkencave mjekesore, dega Stomatologji, AU Fakulteti I shkencave mjekesore, dega Stomatologji, AU\r\nPedagog i Brendshem , lenda Protetike Fikse, viti 2016 e ne vazhdim,\r\nPeriudha vjetore 2012-2016, vitete akademike 2012-2013, 2013-2014, 2014-2015, 2015-2016\r\nPedagog i Brendshem, lenda Protetike Fikse');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kalendar`
--
ALTER TABLE `kalendar`
  ADD PRIMARY KEY (`id_orari`);

--
-- Indexes for table `kartele`
--
ALTER TABLE `kartele`
  ADD PRIMARY KEY (`id_kartele`),
  ADD KEY `ID_foto` (`ID_foto`);

--
-- Indexes for table `kategori_sherbimi`
--
ALTER TABLE `kategori_sherbimi`
  ADD PRIMARY KEY (`ID_kategori`);

--
-- Indexes for table `pacient`
--
ALTER TABLE `pacient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset`
--
ALTER TABLE `password_reset`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `token` (`token`);

--
-- Indexes for table `rezervim`
--
ALTER TABLE `rezervim`
  ADD PRIMARY KEY (`ID_rez`),
  ADD KEY `id_2` (`id`);

--
-- Indexes for table `sherbimi`
--
ALTER TABLE `sherbimi`
  ADD PRIMARY KEY (`ID_sherbimi`),
  ADD KEY `ID_kategori` (`ID_kategori`);

--
-- Indexes for table `staf_foto`
--
ALTER TABLE `staf_foto`
  ADD PRIMARY KEY (`ID_foto`),
  ADD UNIQUE KEY `ID_kategori` (`ID_kategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kalendar`
--
ALTER TABLE `kalendar`
  MODIFY `id_orari` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `kartele`
--
ALTER TABLE `kartele`
  MODIFY `id_kartele` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kategori_sherbimi`
--
ALTER TABLE `kategori_sherbimi`
  MODIFY `ID_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pacient`
--
ALTER TABLE `pacient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `password_reset`
--
ALTER TABLE `password_reset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `rezervim`
--
ALTER TABLE `rezervim`
  MODIFY `ID_rez` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `sherbimi`
--
ALTER TABLE `sherbimi`
  MODIFY `ID_sherbimi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `staf_foto`
--
ALTER TABLE `staf_foto`
  MODIFY `ID_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kartele`
--
ALTER TABLE `kartele`
  ADD CONSTRAINT `kartele_ibfk_1` FOREIGN KEY (`ID_foto`) REFERENCES `staf_foto` (`ID_foto`);

--
-- Constraints for table `rezervim`
--
ALTER TABLE `rezervim`
  ADD CONSTRAINT `rezervim_ibfk_1` FOREIGN KEY (`id`) REFERENCES `pacient` (`id`);

--
-- Constraints for table `sherbimi`
--
ALTER TABLE `sherbimi`
  ADD CONSTRAINT `sherbimi_ibfk_1` FOREIGN KEY (`ID_kategori`) REFERENCES `kategori_sherbimi` (`ID_kategori`);

--
-- Constraints for table `staf_foto`
--
ALTER TABLE `staf_foto`
  ADD CONSTRAINT `staf_foto_ibfk_1` FOREIGN KEY (`ID_kategori`) REFERENCES `kategori_sherbimi` (`ID_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
