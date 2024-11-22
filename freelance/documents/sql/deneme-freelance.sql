-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 22 Kas 2024, 16:54:17
-- Sunucu sürümü: 10.4.28-MariaDB
-- PHP Sürümü: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `deneme-freelance`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `Aid` int(11) NOT NULL,
  `Aemail` varchar(150) NOT NULL,
  `Asifre` varchar(150) NOT NULL,
  `Aktarihi` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`Aid`, `Aemail`, `Asifre`, `Aktarihi`) VALUES
(2, 'admin', '66863900781c8148052921a0205c2aaa31ac3d4a72283c739b1ae3340c120765', '2024-05-27 14:55:38');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ilan`
--

CREATE TABLE `ilan` (
  `Iid` int(6) NOT NULL,
  `Ikid` int(6) DEFAULT NULL,
  `Imeslek` varchar(100) DEFAULT NULL,
  `Ifoto` varchar(200) DEFAULT NULL,
  `Iaciklama` varchar(200) DEFAULT NULL,
  `Ifiyat` varchar(100) DEFAULT NULL,
  `Itarihi` timestamp NOT NULL DEFAULT current_timestamp(),
  `Ionay` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `ilan`
--

INSERT INTO `ilan` (`Iid`, `Ikid`, `Imeslek`, `Ifoto`, `Iaciklama`, `Ifiyat`, `Itarihi`, `Ionay`) VALUES
(27, 9, 'teknisyen', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRUXNAKNKNmXy6qqis7HDnEHxlh2xWFSpRcnQ&usqp=CAU', 'teknisyenim', '666', '2024-05-10 23:35:15', 1),
(28, 15, 'pilot', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQxd1O2O44L1RxBdttFv3EXxbjP2TWOKFbuYo4IwcP6tjYnf2G1JgrxgiHS22-5jk2PJME&usqp=CAU', 'pilotum', '777', '2024-05-11 21:57:31', 1),
(29, 18, NULL, NULL, NULL, NULL, '2024-05-14 16:03:08', 0),
(30, 19, NULL, NULL, NULL, NULL, '2024-05-14 16:04:54', 0),
(31, 20, 'youtuber', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRzODocG0Gsrm0ftGxcb2eclv9hZuUOzFFVXA&usqp=CAU', 'youtuber', '444', '2024-05-14 16:12:32', 1),
(32, 11, 'manken', 'https://wallpapers.com/images/featured/women-owxltg7lovc5pxk7.jpg', 'manken', '333', '2024-05-14 16:16:03', 1),
(33, 18, 'tasarımcı', 'https://wallpapercave.com/wp/wp10673436.jpg', 'tarımcıyım', '321', '2024-05-14 16:17:48', 1),
(34, 13, 'actor', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS_CuIukAyp2TYGCrFrwvnhWhTWgvwbcHlIIxEzKcR4HJ3UuYf1qg-encFQ2ycnRiPsHoM&usqp=CAU', 'aktörüm', '999', '2024-05-14 16:20:47', 1),
(35, 10, 'Madenci', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRT3SOCizhQQNMNuKI4I2w4EYVfKSdtjnyeHQ&usqp=CAU', 'madenciyim', '786', '2024-05-14 16:30:04', 1),
(36, 15, 'pilot', NULL, 'pilot', '333', '2024-05-16 16:26:52', 1),
(37, 20, 'kamyoncu', 'https://st4.depositphotos.com/10614052/38917/i/450/depositphotos_389174686-stock-photo-young-driver-cabin-big-truck.jpg', 'kamyoncuyum', '2000', '2024-05-17 16:51:27', 1),
(38, NULL, 'a', 'a', 'a', 'a', '2024-05-17 17:18:10', 0),
(40, 21, NULL, NULL, NULL, NULL, '2024-05-27 14:54:27', 0),
(41, 22, NULL, NULL, NULL, NULL, '2024-11-22 15:41:36', 0),
(42, NULL, 'a', 'a', 'a', 'a', '2024-11-22 15:42:28', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `Kid` int(11) NOT NULL,
  `Kemail` varchar(200) NOT NULL,
  `Ksifre` varchar(200) NOT NULL,
  `Kad` varchar(150) DEFAULT NULL,
  `Ksoyad` varchar(150) DEFAULT NULL,
  `Ktelefon` varchar(100) DEFAULT NULL,
  `Kcinsiyet` varchar(100) DEFAULT NULL,
  `Kfoto` varchar(200) DEFAULT NULL,
  `Kiban` varchar(200) DEFAULT NULL,
  `Kozet` varchar(200) DEFAULT NULL,
  `Ksehir` varchar(100) DEFAULT NULL,
  `Kyetenekler` varchar(100) DEFAULT NULL,
  `Kokul` varchar(250) DEFAULT NULL,
  `Kisdeneyimi` varchar(250) DEFAULT NULL,
  `Kktarihi` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`Kid`, `Kemail`, `Ksifre`, `Kad`, `Ksoyad`, `Ktelefon`, `Kcinsiyet`, `Kfoto`, `Kiban`, `Kozet`, `Ksehir`, `Kyetenekler`, `Kokul`, `Kisdeneyimi`, `Kktarihi`) VALUES
(9, 'ds', 'ds', 'ds', 'ds', '5555', 'erkek', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ854ZfUidOot9O8u3bgh_UtCvTRJ8J25fTXQWepXgBlQ&s', '44444444444', 'uzun yıllardır teknisyenlik yapıyorum', 'ankara', 'autocad', 'sinop üniversitesi', 'aselsan', '2024-04-29 21:52:44'),
(10, 'zxcvbnm', '608d92b51ca3339e2f5ef93c6db46f650aefc84fa965d20611814327aa49fbb0', NULL, NULL, NULL, NULL, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQf4fbV8HWQAaPquLwTrERXyG156DNxk0b-Gw&usqp=CAU', NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-30 22:33:31'),
(11, 'cvbn', '8f189242ce07754120a86b568ad3a7c0a8db1b2966754d25cc36274c11ba8b4d', NULL, NULL, NULL, NULL, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSM2paLsSARh4SEgzIJCZVxUK9c4Ptktlwu3w&usqp=CAU', NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-30 22:37:12'),
(13, 'erkan', 'c5dbe19885bf0f12a1dc061ae69eab917e8fbbb8c1f99d82d6e83f1c74915245', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-08 07:48:50'),
(14, 'ahmet', '8250e363f440928572e81f2b45b83460c0adbc7b0f8193f4c8341410765cc416', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-08 07:56:06'),
(15, 'ali', 'ali', NULL, NULL, NULL, NULL, 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/33/Muhammad_Ali%2C_gtfy.00140.jpg/220px-Muhammad_Ali%2C_gtfy.00140.jpg', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-08 11:41:18'),
(16, 'aasx', 'c5dbe19885bf0f12a1dc061ae69eab917e8fbbb8c1f99d82d6e83f1c74915245', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-10 13:06:43'),
(17, 'asd', 'asd', 'asd', 'asd', 'ad', 'asd', 'asd', 'asd', 'asd', NULL, NULL, NULL, NULL, '2024-05-10 22:54:22'),
(18, 'turan', 'fa9b56151b62e13131e4ce8e5bd5603783ae45d7ec1736c71c08f9b29adb425b', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-14 16:03:08'),
(19, 'ali', '32b5cdb0b04bd375f2357f6052fa348d1c7d5a337e028d74d3f535af2b75d69b', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-14 16:04:54'),
(20, 'anil', '123', 'furkan', 'aksu', '555', 'erkek', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQwazKp_Pd7rSgNqLcZosNndQF5gwcgYj3j7w&usqp=CAU', '2222222', 'youtuberım', NULL, NULL, NULL, NULL, '2024-05-14 16:11:32'),
(21, 'admin', '66863900781c8148052921a0205c2aaa31ac3d4a72283c739b1ae3340c120765', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-27 14:54:27'),
(22, 'a', '1247471b192233f14a3c3de951dee367eb4f0e8a9d34f8f7e6bc0f073a3711d9', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-11-22 15:41:36');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Aid`);

--
-- Tablo için indeksler `ilan`
--
ALTER TABLE `ilan`
  ADD PRIMARY KEY (`Iid`),
  ADD KEY `Ikid` (`Ikid`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`Kid`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `Aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `ilan`
--
ALTER TABLE `ilan`
  MODIFY `Iid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `Kid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `ilan`
--
ALTER TABLE `ilan`
  ADD CONSTRAINT `ilan_ibfk_1` FOREIGN KEY (`Ikid`) REFERENCES `kullanici` (`Kid`),
  ADD CONSTRAINT `ilan_ibfk_2` FOREIGN KEY (`Ikid`) REFERENCES `kullanici` (`Kid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
