-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 22 Kas 2024, 16:54:37
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

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ilan`
--
ALTER TABLE `ilan`
  ADD PRIMARY KEY (`Iid`),
  ADD KEY `Ikid` (`Ikid`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `ilan`
--
ALTER TABLE `ilan`
  MODIFY `Iid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

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
