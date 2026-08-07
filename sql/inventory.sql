CREATE DATABASE IF NOT EXISTS inventory_system;

USE inventory_system;


--- =======================
--- Admin Users Table
--- =======================

CREATE TABLE admins (

    id INT AUTO_INCREMENT PRIMARY KEY,

    first_name VARCHAR(50) NOT NULL,

    last_name VARCHAR(50) NOT NULL,

    email VARCHAR(100) NOT NULL UNIQUE,

    password VARCHAR(255) NOT NULL,

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP

);



--- =======================
--- Products Table
--- =======================

CREATE TABLE products (

    id INT AUTO_INCREMENT PRIMARY KEY,

    name VARCHAR(100) NOT NULL,

    description TEXT NOT NULL,

    price DECIMAL(10,2) NOT NULL,

    quantity INT NOT NULL,

    image VARCHAR(255) NOT NULL,

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP

);
