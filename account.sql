CREATE DATABASE IF NOT EXISTS acc_db;

CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL
  'confirmed?' int(1) NULL,
) ENGINE=InnoDB DEFAULT CHARSET=latin1;