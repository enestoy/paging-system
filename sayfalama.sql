-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 03 Ara 2022, 19:26:58
-- Sunucu sürümü: 10.4.21-MariaDB
-- PHP Sürümü: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `sayfalama`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE `urunler` (
  `id` int(10) UNSIGNED NOT NULL,
  `urun_adi` varchar(255) NOT NULL,
  `urun_fiyat` double NOT NULL,
  `parabirimi` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`id`, `urun_adi`, `urun_fiyat`, `parabirimi`) VALUES
(1, 'İphone 11', 15000, 'TL'),
(2, 'Philips Kulaklık', 1250, 'TL'),
(3, 'Sony Laptop', 16000, 'TL'),
(4, 'Axen TV', 2500, 'TL'),
(5, 'HP Yazıcı', 4500, 'TL'),
(6, 'SSD', 450, 'TL'),
(7, 'Klavye + Fare USB uzaktan', 455, 'TL'),
(8, 'Tix Modem', 780, 'TL'),
(9, 'Arcelik Buzdolabı', 13000, 'TL'),
(10, 'Kitap', 168, 'TL'),
(11, 'Masa', 350, 'TL'),
(12, 'Samsung Hoparlör', 350, 'TL'),
(13, 'Akıllı Saat', 788, 'TL'),
(14, 'Güneş Gözlüğü', 399, 'TL');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
