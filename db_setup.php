<?php

CREATE DATABASE db_spp;

USE db_spp;

CREATE TABLE siswa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(50) NOT NULL,
    kelas VARCHAR(20)
);

CREATE TABLE pembayaran (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_pembayaran VARCHAR(50),
    jumlah DECIMAL(10, 2)
);

CREATE TABLE detail_pembayaran (
    id INT AUTO_INCREMENT PRIMARY KEY,
    siswa_id INT,
    pembayaran_id INT,
    tanggal DATE,
    FOREIGN KEY (siswa_id) REFERENCES siswa(id),
    FOREIGN KEY (pembayaran_id) REFERENCES pembayaran(id)
);

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin', 'user') DEFAULT 'user',
    google_id VARCHAR(50) DEFAULT NULL
);


?>