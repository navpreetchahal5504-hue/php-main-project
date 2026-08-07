Inventory Management System  


Project Summary  
================  


The Inventory Management System web application was created as the final project for COMP1006 - Intro to Web Programming Using PHP at Georgian College. 




Website visitors that are not logged in will be referred to as "Public Users". Logged in users that are administrators will be referred to as "Admins". 



Inventory Management System allows public users to view products that are available. Admins will have access to an admin dashboard that allows them to securely add, update, and delete products, as well as manage users. 



This application was built using PHP, MySQL, HTML, CSS, and Bootstrap. 

---------------  

Tech Stack  
---------  

* HTML5  

* CSS3  

* Bootstrap 5  

* PHP  

* MySQL Database  

* PDO Database Connection  

* GitHub Version Control  

---------------  



Features  
========  




Public User Features  
--------------------  

* View the homepage  
* Register an account  
* View all products  
* View individual product page  
* View product image, description, price, and quantity available 
* Responsive design - Website can be viewed on all screen sizes. 




Admin Features  
--------------  

* Login to the website  

* Logout of the website  

* Access admin dashboard  

* Add a new product  

* Update existing products  

* Delete products  

* View all registered users  

* Update user info  

* Delete users  




CRUD Functionality  
==================  



Products  
--------  

**Create**  

* Product name  

* Product description  

* Product price  

* Quantity of inventory  

* Product image  




**Read**  

* View all products  

* View individual product info  




**Update**  

* Product name  

* Product description  

* Product price  

* Product quantity  




**Delete**  

* Delete existing product from the database  




Users  
-----  

**Create**  

* Register as an Administrator via registration page.  

**Read**  

* View all Registered Users.  

**Update**  

* User's first name  

* User's last name  

* User's email  

**Delete**  

* Delete existing user from the database.
  Management of Users

Make

The registration page allows new administrators to register.

Go through

Every registered user is visible to administrators.

An update

User data can be updated by administrators:
* Initial name
* Last name
* Email

Remove

Users can be removed from the system by administrators.

---

Features for Security

The application consists of:
* PHP password_hash() is used to hash passwords.
* Password verification with password_verify()
* Verifying duplicate emails when registering
* Verification of login
* Admin pages that are protected
* Validation of the form prior to database insertion

---

Database Details

Name of Database:

inventory_system

There are two tables in the database:

Table of Administration

keeps administrator data:
* ID
* Initial Name
* Last Name
* Email
* The password
* Date of Registration

Table of Products

retains product data:
* ID
* Name of Product
* Synopsis
* Cost
* Amount
* Picture
* Date of Creation

Location of the database file:

Inventory.sql
---

Installation Guidelines

Step 1: Set up XAMPP

Install XAMPP after downloading it.

Begin:
* Apache
* MySQL

---

Step 2: Include Project
Step 2: Include the Project Folder

Place your project folder inside the folder where the XAMPP htdocs folder is located.

For example:

C:\xampp\htdocs\inventory-system

Step Three: Establish a Database

Launch phpMyAdmin:

http://localhost/phpmyadmin

Import the database file:

Inventory.sql

Step 4: Set Up the Database Connection

Open

includes/config.php

If needed, change the database settings:

DB_HOST is localhost.

Set DB_NAME to inventory system.

DB_USER is root.

DB_PASS = “”inventory_system 

DB_USER = root 

DB_PASS = "" 

--- 

Step 5: Run Project 

Visit Your Project Through Browser: 

http://localhost/invnetory-system 


--- 

Folder Structure: 

inventory-system/ 
│ 
├── index.php 
├── register.php 
├── login.php 
├── logout.php 
├── products.php 
├── product.php 
├── dashboard.php 
├── add-product.php 
├── edit-product.php 
├── delete-product.php 
├── users.php 
├── edit-user.php 
├── delete-user.php 
│ 
├── includes/ 
│ ├── config.php 
│ ├── Database.php 
│ ├── Crud.php 
│ ├── header.php 
│ └── footer.php 
│ 
├── css/ 
│ └── style.css 
│ 
├── sql/ 
│ └── inventory.sql 
│ 
├── uploads/ 
│ 
└── README.md Course Information

Course:

COMP1006 - Intro to Web Programming Using PHP

Program:

Interactive Media Design - Web

College:

Georgian College

---

Developer

Name:

Your Name:Navpreet Kaur

Year:

2026




