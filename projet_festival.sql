-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 21 fév. 2020 à 09:20
-- Version du serveur :  5.7.26
-- Version de PHP : 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet_festival`
--

-- --------------------------------------------------------

--
-- Structure de la table `festivals`
--

DROP TABLE IF EXISTS `festivals`;
CREATE TABLE IF NOT EXISTS `festivals` (
  `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT,
  `img` varchar(255) NOT NULL,
  `nom` text,
  `video` text,
  `addDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `festival` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `festivals`
--

INSERT INTO `festivals` (`id`, `img`, `nom`, `video`, `addDate`, `festival`) VALUES
(1, 'https://m.media-amazon.com/images/I/81qjmgTJh2L._SS500_.jpg', 'decibel outdoor 2017', 'https://www.youtube.com/watch?v=pwMY56i5asA', '2020-01-22 23:00:00', 'decibel'),
(2, 'https://www.rigeshop.com/content/images/21699/1400x1400/decibel-outdoor-2018-3-cd.jpg', 'decibel outdoor 2018', 'https://www.youtube.com/watch?v=cihf3ADQMFc', '2020-01-22 23:00:00', 'decibel'),
(7, 'https://m.media-amazon.com/images/I/712Z82JYnZL._SS500_.jpg', 'Defqon 1 2019', 'https://www.youtube.com/watch?v=nahoiz-jL4A', '2020-01-22 23:00:00', 'defqon1'),
(8, 'https://m.media-amazon.com/images/I/71nL3XI-ziL._SS500_.jpg', 'Dominator 2018', 'https://www.youtube.com/watch?v=I9DTjeb_zY8', '2020-01-22 23:00:00', 'dominator'),
(9, 'https://i.pinimg.com/originals/3c/05/ac/3c05acf7b7e31dd4a6b0d1a55487f752.jpg', 'Defqon 1 2015', 'https://www.youtube.com/watch?v=uHL2JPi3ZUE', '2020-01-22 23:00:00', 'defqon1'),
(10, 'https://i1.sndcdn.com/artworks-000182825505-p0heyt-t500x500.jpg', 'Defqon 1 2016', 'https://www.youtube.com/watch?v=tarY3Z0yTZw', '2020-01-23 23:00:00', 'defqon1'),
(24, 'https://m.media-amazon.com/images/I/810W0eZsRFL._SS500_.jpg', 'defqon 1 2010', 'https://www.youtube.com/watch?v=wI_A76sSeAc', '2020-01-30 07:52:45', 'defqon1'),
(11, 'https://i1.sndcdn.com/artworks-000607064323-pacljq-t500x500.jpg', 'Dominator 2019', 'https://www.youtube.com/watch?v=8yTkR4AOOJ0&t=826s', '2020-01-23 23:00:00', 'dominator'),
(12, 'https://images-na.ssl-images-amazon.com/images/I/71Z7BfGmt9L._SY355_.jpg', 'Harmony of Hardcore 2019', 'https://www.youtube.com/watch?v=s7qputbmjt8', '2020-01-24 23:00:00', 'hoh'),
(13, 'https://yourtimetables.com/uploads/images/event-covers/small/46_ground-zero-2018.jpg', 'Ground Zero 2018', 'https://www.youtube.com/watch?v=6HzWKTwLNAs', '2020-01-24 23:00:00', 'ground_zero'),
(14, 'https://i1.sndcdn.com/artworks-000351793716-p5xbsv-t500x500.jpg', 'Intents Festival 2018', 'https://www.youtube.com/watch?v=1Hipv7qhA4c', '2020-01-24 23:00:00', 'intents_festival'),
(15, 'https://m.media-amazon.com/images/I/71nXD1pTvsL._SS500_.jpg', 'Masters of Hardcore 2018', 'https://www.youtube.com/watch?v=Yh2w0jRqfOQ', '2020-01-24 23:00:00', 'moh'),
(16, 'https://my16.digitalexperience.ibm.com/12becebc-ce88-4f3c-844b-fed0588ae8fb/dxdam/events/mig/reverze-20180224-AS-400x400.jpg', 'Reverze 2018', 'https://www.youtube.com/watch?v=kxZZZdJbI4A', '2020-01-24 23:00:00', 'reverze'),
(17, 'https://m.media-amazon.com/images/I/61+ffJ5sDoL._SS500_.jpg', 'Qapital 2018', 'https://www.youtube.com/watch?v=ZfhllNYh0b4', '2020-01-24 23:00:00', 'qapital'),
(19, 'https://i1.sndcdn.com/artworks-000454556643-3x4p62-t500x500.jpg', 'Syndicate 2018', 'https://www.youtube.com/watch?v=3SEMRqgAiG4', '2020-01-25 22:24:39', 'syndicate'),
(20, 'https://m.media-amazon.com/images/I/81BEYiLVvZL._SS500_.jpg', 'I am hardstyle 2018', 'https://www.youtube.com/watch?v=wFzth3aVmQU', '2020-01-25 22:26:13', 'i_am_hardstyle'),
(21, 'https://m.media-amazon.com/images/I/71VBDE1SihL._SS500_.jpg', 'Qlimax 2018', 'https://www.youtube.com/watch?v=eN6AmWhdwrc', '2020-01-25 22:27:49', 'qlimax'),
(22, 'https://imaginationfestival.com/wp-content/uploads/2017/09/compl-500x500.jpg', 'Imagination Festival 2018', 'https://www.youtube.com/watch?v=NzK7h3nFBYQ', '2020-01-25 22:29:47', 'imagination_festival'),
(25, 'https://img.discogs.com/lh9v7-uQ8UjJ_Bxg2KCyv4gLJj0=/fit-in/500x500/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-2964479-1310321358.jpeg.jpg', 'defqon 1 2011', 'https://www.youtube.com/watch?v=naZRtXbRi8E', '2020-01-30 07:54:53', 'defqon1'),
(26, 'https://m.media-amazon.com/images/I/91ga1sxdbTL._SS500_.jpg', 'defqon 1 2012', 'https://www.youtube.com/watch?v=A2ZUDm_tGqI', '2020-01-30 07:58:10', 'defqon1'),
(27, 'https://img.discogs.com/HkC-t03j2MisAGRALVX4MConNcM=/fit-in/600x600/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-4668950-1371927484-9627.jpeg.jpg', 'defqon 1 2013', 'https://www.youtube.com/watch?v=spsDPnmBmdY', '2020-01-30 08:05:04', 'defqon1'),
(28, 'https://www.jumpstyle4ever.com/wp-content/uploads/2014/07/defqon1-2014.jpg', 'Defqon 1 2014', 'https://www.youtube.com/watch?v=mwjMQTs2HfQ', '2020-01-30 08:11:00', 'defqon1'),
(29, 'https://www.nonstop2k.com/midi-files/covers/12503.jpg', 'Defqon 1 2017', 'https://www.youtube.com/watch?v=deczX5l5xio', '2020-01-30 08:20:08', 'defqon1'),
(30, 'https://i.scdn.co/image/7bb628c38f628135a09893469b87769b8a2ddb06', 'Defqon 1 2018', 'no aftermovie', '2020-01-30 08:24:06', 'defqon1'),
(31, 'https://img.discogs.com/lIkjnacR9JktiVdHnWZ2E3IzQKk=/300x300/filters:strip_icc():format(jpeg):mode_rgb():quality(40)/discogs-images/R-2325167-1277039657.jpeg.jpg', 'decibel outdoor 2010', 'https://www.youtube.com/watch?v=XiA9y2I_HbE', '2020-01-30 08:34:34', 'decibel'),
(32, 'https://e-cdns-images.dzcdn.net/images/cover/f8ef060aa1315494e8ece6aa4e0c5a9b/500x500.jpg', 'decibel outdoor 2011', 'https://www.youtube.com/watch?v=Nbc5ehS9AlU', '2020-01-30 08:38:51', 'decibel'),
(33, 'https://cdn11.bigcommerce.com/s-7va6f0fjxr/images/stencil/500x659/products/22869/23320/Decibel-Band-Logo-Vinyl-Sticker-2__18496__77616.1497939484.jpg?c=2&imbypass=on', 'decibel outdoor 2012', 'https://www.youtube.com/watch?v=sqHy29ynkfU', '2020-01-30 08:43:14', 'decibel'),
(34, 'https://i1.sndcdn.com/artworks-000059060265-cr4n81-t500x500.jpg', 'decibel outdoor 2013', 'https://www.youtube.com/watch?v=qStOaH4eReU', '2020-01-30 08:53:38', 'decibel'),
(35, 'https://i1.sndcdn.com/artworks-000088340093-dn32m4-t500x500.jpg', 'decibel outdoor 2014', 'https://www.youtube.com/watch?v=nQPHWrA6v3Q', '2020-01-30 09:03:08', 'decibel'),
(36, 'https://images.fr.shopping.rakuten.com/photo/Decibel-2015-1040449526_L.jpg', 'decibel outdoor 2015', 'https://www.youtube.com/watch?v=BoTP4cilqLo', '2020-01-30 09:08:17', 'decibel'),
(37, 'https://i1.sndcdn.com/artworks-000187710598-qjwkze-t500x500.jpg', 'decibel outdoor 2016', 'https://www.youtube.com/watch?v=awAkIrfDl8c', '2020-01-30 09:09:15', 'decibel'),
(38, 'https://external-preview.redd.it/hiQCXjm5Fv7uzfv3lBcyF-ZO9DEBxyMdrN2Q6hZyD_k.jpg?auto=webp&s=65f31725a445f828563b3a09747c8f1545194396', 'decibel outdoor 2019', 'https://www.youtube.com/watch?v=nAP4bkJesgA', '2020-01-30 09:11:44', 'decibel');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `passwd` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `prenom`, `nom`, `email`, `passwd`) VALUES
(18, 'jeanFrancis', 'jean', 'francis', 'vinc-dev-web@outlook.fr', '$2y$10$i2jHP6JqC6ByU3Wp4S1zvOqM6MKTozss1CpcbJxJwLEPD7kNx3nZ6'),
(19, 'joe', 'joe', 'ny', 'wantek-elektro@hotmail.fr', '$2y$10$cxICryHlfV5eh33CgMkYZuLHl1KTv.REFAmNuvD68DPOhRhLrU10W'),
(16, 'h_core57', 'vinc', 'lre', 'h_core57@outlook.fr', '$2y$10$4ws4E0lUm1zZdecFot3fZ.stHXtiNbbbDLeOjg1XIy2me6XPzJJIe');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
