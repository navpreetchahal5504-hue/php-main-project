Inventory Management System

Project Overview

The Inventory Management System was prepared as the final project for the course COMP1006 – Intro to Web Programming Using PHP at Georgian College.

Visitors are able to browse the products without having to log in, and administrators can log in securely in order to manage both products and users using the full CRUD (Create, Read, Update, Delete) functionality.

---

Technologies Used

* HTML5
* CSS3
* Bootstrap 5
* PHP
* MySQL
* PDO
* Git & GitHub

---

Features

Public Users

* View the homepage
* Register a new admin account
* View all available products
* View individual product details
* Browse product images, prices, descriptions, and inventory quantity

Administrator

After logging in, administrators can:

* Access the dashboard
* Add new products
* Edit products
* Delete products
* View registered users
* Edit user information
* Delete users
* Logout securely

---

Database

Database Name

inventory_system

Tables

* admins
* products

Database file:

sql/inventory.sql

---

Installation

1. Download the Project

Get the repository or obtain the ZIP file.

GitHub Repository:

https://github.com/navpreetchahal5504-hue/php-main-project

---

Put the Project into XAMPP.

Copy the project folder into:

C:\xampp\htdocs\php-main-project

---

3. Create the Database

Begin the Apache and MySQL programs that are part of XAMPP.

Open phpMyAdmin:

http://localhost/phpmyadmin

Create a database named:

inventory_system

Import:

sql/inventory.sql

---

4. Configure the Database

Open:

includes/config.php

Verify the settings:

define("DB_HOST","localhost");
define("DB_NAME","inventory_system");
define("DB_USER","root");
define("DB_PASS","");

---

5. Run the Project

Open your browser and visit:

http://localhost/php-main-project

---

CRUD Functionality

Products

* Create new products
* View all products
* View individual product details
* Update product information
* Delete products

Users

* Register new administrators
* View users
* Update user information
* Delete users

---

Security

* Password hashing using password_hash()
* Password verification using password_verify()
* Duplicate email validation
* Session-based authentication
* Protected admin pages
* Server-side form validation

---


Author

Navpreet Kaur

Interactive Media Design – Web

Georgian College

---

Course

COMP1006 – Intro to Web Programming Using PHP

Final Project – Inventory Management System
