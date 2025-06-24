-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 24, 2025 at 01:59 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yemek_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `tarifler`
--

CREATE TABLE `tarifler` (
  `id` int(11) NOT NULL,
  `baslik` varchar(255) NOT NULL,
  `aciklama` text NOT NULL,
  `resim` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tarifler`
--

INSERT INTO `tarifler` (`id`, `baslik`, `aciklama`, `resim`, `created_at`, `user_id`) VALUES
(10, 'Yaprak Sarma', '🧂 Malzemeler:\r\n\r\nİç harcı için:\r\n	•	1 su bardağı pirinç\r\n	•	2 adet kuru soğan (ince doğranmış)\r\n	•	1 çay bardağı zeytinyağı\r\n	•	1 yemek kaşığı çam fıstığı (isteğe bağlı)\r\n	•	1 yemek kaşığı kuş üzümü (isteğe bağlı)\r\n	•	1 tatlı kaşığı toz şeker\r\n	•	1 tatlı kaşığı nane\r\n	•	1 tatlı kaşığı kararbiber\r\n	•	1 tatlı kaşığı tarçın (isteğe bağlı)\r\n	•	Tuz\r\n	•	Yarım limon suyu\r\n	•	Yarım çay bardağı su\r\n\r\nSarmak için:\r\n	•	300-400 gram asma yaprağı (taze ya da salamura)\r\n\r\nÜzeri için:\r\n	•	1 limon (dilimlenmiş)\r\n	•	2 yemek kaşığı zeytinyağı\r\n	•	1-1,5 su bardağı sıcak su\r\n\r\n⸻\r\n\r\n👩‍🍳 Yapılışı:\r\n	1.	Yaprakları Hazırla:\r\nSalamura yaprak kullanıyorsan sıcak suda 10-15 dakika beklet, fazla tuzunu atması için. Taze yapraksa 2-3 dakika kaynar suda haşla.\r\n	2.	İç Harcını Hazırla:\r\nZeytinyağını tavada ısıt, soğanları kavur. Soğanlar pembeleşince fıstığı ekle. Sonra pirinci, kuş üzümünü, şekeri ve baharatları ekle. 2-3 dakika kavur, sonra yarım çay bardağı suyu ve limon suyunu ekleyip kapağını kapat. Pirinç hafif yumuşayana kadar pişir (5-6 dakika). Soğumaya bırak.\r\n	3.	Sarmaları Hazırla:\r\nYaprağın damarlı kısmı içte kalacak şekilde ser. 1 tatlı kaşığı iç harç koy, kenarlarını içe kıvır, sigara gibi sar.\r\n	4.	Tencereye Diz:\r\nTencerenin altına birkaç yaprak ser, üstüne sarmaları sıkıca diz. Aralarına limon dilimleri koy. Üzerine zeytinyağı ve sıcak suyu ekle, üzerine tabak kapat.\r\n	5.	Pişirme:\r\nKısık ateşte yaklaşık 40-50 dakika pişir. Pişince oda sıcaklığında soğut.\r\n\r\n⸻\r\n\r\n🥄 Servis Önerisi:\r\n\r\nSoğuk olarak, yanında limon dilimleri ve yoğurtla servis edebilirsin.', 'images/sarma.jpeg', '2025-06-24 11:35:08', 1),
(14, 'Köfte', '🧂 Malzemeler:\r\n	•	500 gram kıyma (orta yağlı dana kıyma)\r\n	•	1 adet kuru soğan (rendelenmiş)\r\n	•	2 diş sarımsak (isteğe bağlı, ezilmiş)\r\n	•	1 çay bardağı bayat ekmek içi (ufalanmış veya galeta unu)\r\n	•	1 adet yumurta\r\n	•	1 tatlı kaşığı tuz\r\n	•	1 çay kaşığı kararbiber\r\n	•	1 çay kaşığı kimyon\r\n	•	1 tatlı kaşığı pul biber (isteğe bağlı)\r\n	•	1 yemek kaşığı sıvı yağ (karışıma)\r\n	•	Maydanoz (isteğe bağlı, ince kıyılmış)\r\n\r\n⸻\r\n\r\n👨‍🍳 Hazırlanışı:\r\n	1.	Köfte Harcı:\r\nGeniş bir kaba kıymayı alın. Üzerine rendelenmiş soğan, sarımsak, yumurta, bayat ekmek içi, baharatlar, tuz ve sıvı yağı ekleyin. Dilersen maydanoz da koyabilirsin.\r\n	2.	Yoğurma:\r\nTüm malzemeleri en az 5 dakika güzelce yoğur. Harç özleşince üzerini streçle kapatıp 30 dakika buzdolabında dinlendirirsen daha lezzetli olur (şart değil ama tavsiye edilir).\r\n	3.	Şekil Verme:\r\nHarçtan ceviz büyüklüğünde parçalar koparıp yassı köfteler şekillendir.\r\n	4.	Pişirme:\r\nTavaya çok az sıvı yağ koyup ısıt. Köfteleri orta ateşte, her iki tarafı kızarana kadar pişir (toplamda 10-15 dakika yeterli).\r\n\r\n⸻\r\n\r\n🍽️ Servis Önerisi:\r\n\r\nKöfteleri; pilav, patates kızartması, cacık ya da domatesli biberli garnitürle servis edebilirsin.', 'images/kofte.jpg', '2025-06-24 11:45:50', 1),
(15, 'Kek', '🧂 Malzemeler:\r\n	•	3 adet yumurta\r\n	•	1 su bardağı toz şeker\r\n	•	1 su bardağı süt\r\n	•	1 su bardağı sıvı yağ\r\n	•	2 yemek kaşığı kakao\r\n	•	1 paket kabartma tozu\r\n	•	1 paket vanilin\r\n	•	2 – 2,5 su bardağı un (kıvama göre)\r\n	•	(isteğe bağlı: damla çikolata, ceviz, fındık)\r\n\r\n⸻\r\n\r\n👨‍🍳 Yapılışı:\r\n	1.	Yumurtaları ve şekeri bir kaba al, beyazlaşıp kabarana kadar mikserle çırp (yaklaşık 3-4 dk).\r\n	2.	Ardından sıvı yağ ve sütü ekle, karıştır.\r\n	3.	Kakao, vanilin ve kabartma tozunu da ekle.\r\n	4.	Son olarak unu eleyerek yavaş yavaş ilave et. Kıvam koyu ama akışkan olmalı. (Damla çikolata veya ceviz de bu aşamada eklenebilir.)\r\n	5.	Karışımı yağlanmış kek kalıbına dök.\r\n	6.	Önceden ısıtılmış 170°C fırında yaklaşık 35-40 dakika pişir.\r\n(İlk 25 dakika kapağını açma! Kürdanla test et: temiz çıkarsa pişmiştir.)\r\n\r\n⸻\r\n\r\n🎂 Servis Önerisi:\r\n\r\nSoğuyunca üzerine pudra şekeri serpebilir, dilimleyip çay/kahve eşliğinde servis edebilirsin.', 'images/kek.jpeg', '2025-06-24 11:46:29', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cinsiyet` enum('erkek','kadın') NOT NULL,
  `dogumtarihi` date DEFAULT NULL,
  `favori_kategori` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `cinsiyet`, `dogumtarihi`, `favori_kategori`, `created_at`) VALUES
(1, 'bos', 'bilalsonmez223@gmail.com', '$2y$10$AYAQ6LPC8RVzKKFXx0zxau6y0qhqYfFs5i/jag/O7c3p1WJlfVNa2', 'erkek', '2004-12-11', 'Tatlı', '2025-02-20 13:59:39'),
(4, 'bos', 'bos@gmail.com', '$2y$10$FqURFqvGmDXhBsBcMx2qBO1CAEDRyo9L2h14gEOPFPnlfVypaXlsW', 'erkek', '2025-06-03', 'Tatlı', '2025-06-24 10:24:43');

-- --------------------------------------------------------

--
-- Table structure for table `yorumlar`
--

CREATE TABLE `yorumlar` (
  `id` int(11) NOT NULL,
  `tarif_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `yorum` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tarifler`
--
ALTER TABLE `tarifler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `yorumlar`
--
ALTER TABLE `yorumlar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tarifler`
--
ALTER TABLE `tarifler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `yorumlar`
--
ALTER TABLE `yorumlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
