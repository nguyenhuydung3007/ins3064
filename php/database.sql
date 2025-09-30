-- SQL file for Laptop Shop Management
-- Database: LaptopShop
-- Table: Laptops

DROP DATABASE IF EXISTS LoginReg;
DROP DATABASE IF EXISTS LapTop;
-- Xóa database cũ nếu tồn tại
DROP DATABASE IF EXISTS LaptopShop;

-- Create database
CREATE DATABASE IF NOT EXISTS `LaptopShop` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `LaptopShop`;

-- Create table for laptop data
CREATE TABLE IF NOT EXISTS `Laptops` (
  `LaptopID` INT(11) NOT NULL AUTO_INCREMENT,
  `Brand` VARCHAR(100) NOT NULL,
  `Model` VARCHAR(100) NOT NULL,
  `Processor` VARCHAR(100),
  `RAM` VARCHAR(50),
  `Storage` VARCHAR(100),
  `Price` DECIMAL(10,2),
  `Quantity` INT,
  PRIMARY KEY (`LaptopID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Insert sample data (optional)
INSERT INTO `Laptops` (`Brand`, `Model`, `Processor`, `RAM`, `Storage`, `Price`, `Quantity`) VALUES
('Apple', 'MacBook Air M2', 'Apple M2', '8GB', '256GB SSD', 1200.00, 5),
('Dell', 'XPS 13', 'Intel Core i7', '16GB', '512GB SSD', 1500.00, 3),
('HP', 'Spectre x360', 'Intel Core i5', '8GB', '512GB SSD', 1100.00, 7),
('Lenovo', 'ThinkPad X1 Carbon', 'Intel Core i7', '16GB', '1TB SSD', 1800.00, 2);
