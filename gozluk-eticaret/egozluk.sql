-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 18 Oca 2023, 02:53:14
-- Sunucu sürümü: 10.4.21-MariaDB
-- PHP Sürümü: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `egozluk`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE `ayarlar` (
  `id` int(1) NOT NULL,
  `site_logo` varchar(400) NOT NULL,
  `site_baslik` varchar(350) NOT NULL,
  `site_aciklama` varchar(300) NOT NULL,
  `site_link` varchar(100) NOT NULL,
  `site_sahip_mail` varchar(100) NOT NULL,
  `site_mail_host` varchar(100) NOT NULL,
  `site_mail_mail` varchar(100) NOT NULL,
  `site_mail_port` int(11) NOT NULL,
  `site_mail_sifre` varchar(100) NOT NULL,
  `site_konum` varchar(300) NOT NULL,
  `site_telefon` varchar(300) NOT NULL,
  `site_instagram` varchar(300) NOT NULL,
  `site_linkedin` varchar(300) NOT NULL,
  `site_twitter` varchar(300) NOT NULL,
  `site_facebook` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`id`, `site_logo`, `site_baslik`, `site_aciklama`, `site_link`, `site_sahip_mail`, `site_mail_host`, `site_mail_mail`, `site_mail_port`, `site_mail_sifre`, `site_konum`, `site_telefon`, `site_instagram`, `site_linkedin`, `site_twitter`, `site_facebook`) VALUES
(0, '973383logo.png', 'Scoot Gözlük', 'En iyi gözlük Scoot Gözlükten çıkar!', 'http://localhost\\kurs', 'yigithangumuss@gmail.com', '0000', '0000', 0, '0000', 'adres', '+90535 597 7965', '', '', '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `carousel`
--

CREATE TABLE `carousel` (
  `carousel_id` int(11) NOT NULL,
  `carousel_baslik` varchar(30) NOT NULL,
  `carousel_resim` varchar(300) NOT NULL,
  `carousel_sira` int(11) NOT NULL,
  `carousel_mesaj` varchar(300) NOT NULL,
  `carousel_aktiflik` varchar(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `carousel`
--

INSERT INTO `carousel` (`carousel_id`, `carousel_baslik`, `carousel_resim`, `carousel_sira`, `carousel_mesaj`, `carousel_aktiflik`) VALUES
(1, 'Başlıkk', '7301507resimyok.png', 1, '', '0'),
(10, '', '4678652mtzz.png', 2, '', '0'),
(13, '', '5945851e3.PNG', 5, '<p>a</p>', '0'),
(15, 'Başlıkk', '6218415resimyok.png', 6, '<p>a</p>', '0'),
(20, 'asdasdas', '949440resimyok.png', 5, 'asdsadas', '0'),
(21, 'yiğithan', '478946resimyok.png', 7, 'asdsadasdasdasdsadasd', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

CREATE TABLE `hakkimizda` (
  `hakkimizda_id` int(11) NOT NULL,
  `hakkimizda_baslik` varchar(30) NOT NULL,
  `hakkimizda_icerik` text NOT NULL,
  `hakkimizda_sira` int(11) NOT NULL,
  `hakkimizda_tarih` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `hakkimizda`
--

INSERT INTO `hakkimizda` (`hakkimizda_id`, `hakkimizda_baslik`, `hakkimizda_icerik`, `hakkimizda_sira`, `hakkimizda_tarih`) VALUES
(1, 'Hakkımızda', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 1, '2022-10-07 02:44:39'),
(2, 'Vizyon', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 2, '2022-10-07 22:00:06');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE `iletisim` (
  `iletisim_id` int(11) NOT NULL,
  `iletisim_baslik` varchar(30) NOT NULL,
  `iletisim_aciklama` text NOT NULL,
  `iletisim_kisi_mail` varchar(300) NOT NULL,
  `iletisim_telefon` varchar(300) NOT NULL,
  `iletisim_isim` varchar(30) NOT NULL,
  `iletisim_zaman` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `iletisim`
--

INSERT INTO `iletisim` (`iletisim_id`, `iletisim_baslik`, `iletisim_aciklama`, `iletisim_kisi_mail`, `iletisim_telefon`, `iletisim_isim`, `iletisim_zaman`) VALUES
(1, 'ID 2 ürününüz', 'Bu ürününüz çok sıkıntı çıkarmıştır bakmanızı rica ederim.', 'yigithangumus@gmail.com', '5355977965', 'yiğithan gümüş', '2022-10-08 23:54:24'),
(5, 'Ürününüz Hakkında', 'a', 'yigithangumuss@gmail.com', '05355977965', 'a', '2022-10-09 01:05:42'),
(6, 'a', 'a', 'yigithangumuss@gmail.com', 'a', 'a', '2022-10-09 01:07:40'),
(7, 'Ürününüz Hakkında', 'a', 'yigithangumuss@gmail.com', '05355977965', 'Yiğithan', '2022-10-14 18:55:10');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `kul_id` int(11) NOT NULL,
  `kul_isim` varchar(200) NOT NULL,
  `kul_mail` varchar(200) NOT NULL,
  `kul_sifre` varchar(100) NOT NULL,
  `kul_tel` varchar(100) NOT NULL,
  `kul_yetki` int(11) NOT NULL DEFAULT 0,
  `kul_resim` varchar(300) NOT NULL,
  `kul_adres` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`kul_id`, `kul_isim`, `kul_mail`, `kul_sifre`, `kul_tel`, `kul_yetki`, `kul_resim`, `kul_adres`) VALUES
(1, 'admin', 'info@gumus.com', '81dc9bdb52d04dc20036dbd8313ed055', '0000', 1, '1.jpg', 'aa'),
(2, 'Yiğithan', 'yigithangumus@gmail.com', '202cb962ac59075b964b07152d234b70', '', 0, '920569521261215084_1032025094031724_1313879383691582295_n (1).jpg', 'aa');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sepet`
--

CREATE TABLE `sepet` (
  `sepet_id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `kul_id` int(11) NOT NULL,
  `urun_isim` varchar(50) NOT NULL,
  `urun_resim1` varchar(300) NOT NULL,
  `urun_fiyat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `sepet`
--

INSERT INTO `sepet` (`sepet_id`, `urun_id`, `kul_id`, `urun_isim`, `urun_resim1`, `urun_fiyat`) VALUES
(7, 1, 3, 'V1.2 GÜNEŞ GÖZLÜĞÜ', 'glass1.png', 25),
(8, 4, 1, 'V13 GÜNEŞ GÖZLÜĞÜ', 'glass4.png', 25),
(9, 3, 1, 'V1.2 GÜNEŞ GÖZLÜĞÜ', 'glass3.png', 25);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE `urunler` (
  `urun_id` int(11) NOT NULL,
  `urun_isim` varchar(50) NOT NULL,
  `urun_fiyat` int(11) NOT NULL,
  `urun_ozellik` text NOT NULL,
  `urun_resim1` varchar(300) NOT NULL,
  `urun_onecikar` varchar(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`urun_id`, `urun_isim`, `urun_fiyat`, `urun_ozellik`, `urun_resim1`, `urun_onecikar`) VALUES
(1, 'V1.2 GÜNEŞ GÖZLÜĞÜü', 2523, 'dasdasdasdsa<aa', 'glass1.png', '1'),
(2, 'V13 GÜNEŞ GÖZLÜĞÜ', 25, 'asdasdasda', 'glass2.png', '1'),
(3, 'V1.2 GÜNEŞ GÖZLÜĞÜ', 25, 'asdsadasdasdas', 'glass3.png', '1');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`carousel_id`);

--
-- Tablo için indeksler `hakkimizda`
--
ALTER TABLE `hakkimizda`
  ADD PRIMARY KEY (`hakkimizda_id`);

--
-- Tablo için indeksler `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`iletisim_id`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`kul_id`);

--
-- Tablo için indeksler `sepet`
--
ALTER TABLE `sepet`
  ADD PRIMARY KEY (`sepet_id`);

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`urun_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `carousel`
--
ALTER TABLE `carousel`
  MODIFY `carousel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Tablo için AUTO_INCREMENT değeri `hakkimizda`
--
ALTER TABLE `hakkimizda`
  MODIFY `hakkimizda_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `iletisim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `kul_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `sepet`
--
ALTER TABLE `sepet`
  MODIFY `sepet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
  MODIFY `urun_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
