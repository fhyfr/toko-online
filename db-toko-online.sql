/* Create Database and Table for Toko Online application */
CREATE DATABASE toko_online;

USE toko_online;
 
CREATE TABLE `users` (
  `id` INT NOT NULL auto_increment,
  `username` VARCHAR(100),
  `email` VARCHAR(100),
  `password` VARCHAR(100),
  `role_id` INT,
  `phone` BIGINT,
  `is_verify` BOOLEAN DEFAULT false,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
);