-- Adminer

-- Creating a database 
CREATE DATABASE `agricreation_login`;

-- Table crateations
CREATE TABLE `signup` (
  `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `username` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email_address` varchar(64) NOT NULL,
  `password` varchar(128) NOT NULL
);

-- Inserting Contents
INSERT INTO `signup` (`username`, `phone`, `email_address`, `password`)
VALUES ('agricreations', '9750639894', 'vmoovendhan3@gmail.com', 'password');

-- Mysqli_fetch_assoc