-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 20, 2024 at 09:48 AM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pawsomeadoptdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `adoptlist`
--

DROP TABLE IF EXISTS `adoptlist`;
CREATE TABLE IF NOT EXISTS `adoptlist` (
  `petsid` int NOT NULL AUTO_INCREMENT,
  `pets` varchar(50) NOT NULL,
  `age` int DEFAULT NULL,
  `breed` varchar(50) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `weight` decimal(5,2) DEFAULT NULL,
  `size` varchar(20) DEFAULT NULL,
  `intake_date` date DEFAULT NULL,
  `special_needs` text,
  `vaccine_status` varchar(50) DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL,
  `description` text,
  `img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`petsid`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf32;

--
-- Dumping data for table `adoptlist`
--

INSERT INTO `adoptlist` (`petsid`, `pets`, `age`, `breed`, `gender`, `weight`, `size`, `intake_date`, `special_needs`, `vaccine_status`, `color`, `description`, `img`) VALUES
(1, 'Buddy', 3, 'Golden Retriever', 'Male', 30.50, 'Large', '2024-04-14', 'None', 'Up to date', 'Golden', 'Friendly and playful dog, loves outdoor activities.', 'https://www.bobocw.com/uploads/202207/18/220718121305677.jpeg'),
(2, 'Fluffy', 2, 'Persian', 'Female', 8.20, 'Medium', '2024-04-12', 'Requires grooming', 'Partially vaccinated', 'White', 'Affectionate and calm cat, enjoys lounging around.', 'https://cdn.onemars.net/sites/whiskas_my_rRNUA_mwh5/image/cat-breeds-22_1920x670_1651757644778.jpeg'),
(3, 'Link', 4, 'Border Collie', 'Male', 65.00, 'Large', '2024-04-10', 'Hip dysplasia', 'Fully vaccinated', 'Black and Tan', 'Active and protective dog, needs experienced owner.', 'https://sunny1835922.github.io/images/%E8%BE%B9%E7%89%A72.jpg'),
(4, 'Luna', 1, 'Siamese', 'Female', 6.00, 'Small', '2024-04-08', 'None', 'Up to date', 'Seal point', 'Playful and vocal cat, bonds strongly with owner.', 'https://www.meowingtons.com/cdn/shop/articles/Screen_Shot_2021-01-06_at_3.43.10_PM.png'),
(5, 'Charlie', 5, 'Labrador Retriever', 'Male', 27.80, 'Large', '2024-04-16', 'None', 'Up to date', 'Chocolate', 'Friendly and outgoing dog, loves to fetch and swim.', 'https://www.vidavetcare.com/wp-content/uploads/sites/234/2022/04/labrador-retriever-dog-breed-info.jpeg'),
(6, 'Milo', 1, 'Maine Coon', 'Male', 12.50, 'Large', '2024-04-15', 'None', 'Partially vaccinated', 'Tabby', 'Gentle and affectionate cat, enjoys cuddling.', 'https://conservationcubclub.com/wp-content/uploads/2023/12/Maine-Coon-Cat-Hero.jpeg'),
(7, 'Bella', 6, 'Dachshund', 'Female', 14.30, 'Small', '2024-04-14', 'Back problems', 'Up to date', 'Red', 'Loyal and energetic dog, great for apartment living.', 'https://dogtime.com/wp-content/uploads/sites/12/2011/01/GettyImages-700141990-e1688418771301.jpg?w=1024'),
(8, 'Simba', 3, 'Bengal', 'Male', 10.00, 'Medium', '2024-04-12', 'None', 'Fully vaccinated', 'Marbled', 'Active and playful cat, loves interactive toys.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTtwIMPUeObrKwF9w1o-m0nz94gjnzyDsQJ4keC_z41cg&s'),
(9, 'Rocky', 2, 'Boxer', 'Male', 60.00, 'Large', '2024-04-10', 'None', 'Up to date', 'Fawn', 'Loyal and affectionate dog, enjoys outdoor adventures.', 'https://media-be.chewy.com/wp-content/uploads/2021/04/18143927/iStock-1453345538-616x615.jpg'),
(10, 'Cola', 2, 'Corgi', 'Male', 22.10, 'Medium', '2024-03-23', 'None', 'Fully vaccinated', 'Tricolor', 'Playful and loyal dog, great for active families.', 'https://www.purina.com.my/sites/default/files/styles/ttt_image_510/public/2021-01/Welsh%20Corgi%20%28Pembroke%291.jpg?itok=-ALFB8xn'),
(11, 'Lola', 4, 'Ragdoll', 'Female', 9.80, 'Medium', '2024-04-08', 'Requires grooming', 'Partially vaccinated', 'Blue point', 'Calm and gentle cat, gets along well with children and other pets.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR97K-MdlSm8PWrjwDRMSUUlHpNvi5EdChKIYCJYqahZg&s'),
(12, 'Cooper', 1, 'Cavalier King Charles Spaniel', 'Male', 15.50, 'Small', '2024-04-07', 'Heart murmur', 'Partially vaccinated', 'Blenheim', 'Sweet and affectionate dog, loves to cuddle.', 'https://www.akc.org/wp-content/uploads/2021/01/Cavalier-King-Charles-Spaniel-puppy-sitting-in-the-grass.jpeg'),
(13, 'Lucky', 8, 'Shih Tzu', 'Female', 10.00, 'Small', '2024-04-05', 'Blind in one eye', 'Up to date', 'White and brown', 'Gentle and loyal dog, enjoys leisurely walks.', 'https://cdn.britannica.com/03/234203-050-C3D47B4B/Shih-tzu-dog.jpg'),
(14, 'Oliver', 2, 'Siberian', 'Male', 13.70, 'Medium', '2024-04-04', 'None', 'Fully vaccinated', 'Silver tabby', 'Curious and playful cat, enjoys exploring.', 'https://image.petmd.com/files/styles/863x625/public/2023-05/siberian-cat.jpg'),
(15, 'Oreo', 1, 'Domestic Shorthair', 'Male', 8.00, 'Small', '2024-03-31', 'None', 'Up to date', 'Black and white', 'Playful and mischievous cat, loves chasing toys.', 'https://qph.cf2.quoracdn.net/main-qimg-ac7ec1a0aed7215b64d9a992341318f5-lq');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

DROP TABLE IF EXISTS `form`;
CREATE TABLE IF NOT EXISTS `form` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` bigint NOT NULL,
  `enquiry` varchar(20) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL,
  `desc` varchar(100) NOT NULL,
  `timestamp` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf32;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `name`, `email`, `contact`, `enquiry`, `desc`, `timestamp`) VALUES
(34, 'Test', 'test123@gmail.com', 60123456789, 'Suggestions', 'Test', '2024-04-20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2147483648 DEFAULT CHARSET=utf32;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `password`) VALUES
(663085, 'test@gmail.com', '123Test/');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

DROP TABLE IF EXISTS `wishlist`;
CREATE TABLE IF NOT EXISTS `wishlist` (
  `wishlist_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `petsid` int NOT NULL,
  PRIMARY KEY (`wishlist_id`),
  KEY `user_id` (`user_id`),
  KEY `petsid` (`petsid`)
) ENGINE=MyISAM AUTO_INCREMENT=83 DEFAULT CHARSET=utf32;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`wishlist_id`, `user_id`, `petsid`) VALUES
(82, 663085, 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
