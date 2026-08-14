# MYPROJECT - PHP E-Commerce Website

## Overview

MYPROJECT is a simple PHP and MySQL based E-Commerce website that allows users to register, log in, browse products, add products to the cart, and manage orders. The project is developed using PHP, MySQL, HTML, CSS, and JavaScript.

## Features

* User Registration and Login System
* Product Listing
* Add to Cart Functionality
* Order Management
* Product Images Display
* Responsive User Interface
* Database Connectivity with MySQL

## Technologies Used

* PHP
* MySQL
* HTML5
* CSS3
* JavaScript
* XAMPP (Apache & MySQL)

## Project Structure

| File            | Description             |
| --------------- | ----------------------- |
| index.php       | Home page               |
| login.php       | User login page         |
| add.php         | User registration page  |
| logout.php      | User logout             |
| auth.php        | Authentication handling |
| db.php          | Database connection     |
| add_to_cart.php | Add products to cart    |
| read.php        | Display records         |
| update.php      | Update records          |
| delete.php      | Delete records          |
| script.js       | JavaScript functions    |
| raju.css        | Styling file            |
| database.sql    | Database file           |
| *.png           | Product and UI images   |

## Installation Guide

### 1. Install XAMPP

Download and install XAMPP from:

https://www.apachefriends.org

### 2. Copy Project

Copy the project folder into:

```text
C:\xampp\htdocs\
```

Example:

```text
C:\xampp\htdocs\MYPROJECT
```

### 3. Import Database

1. Start Apache and MySQL from XAMPP Control Panel.
2. Open phpMyAdmin.
3. Create a new database.
4. Import the `database.sql` file.

### 4. Configure Database

Open `db.php` and update the database information if necessary:

```php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "your_database_name";
```

### 5. Run the Project

Open your browser and visit:

```text
http://localhost/MYPROJECT/
```

## Screenshots

The project contains various product images including:

* Mobile Phones
* Perfumes
* Shoes
* Hot Gadgets
* Promotional Banners

## Future Improvements

* Admin Dashboard
* Product Search
* Product Categories
* Online Payment Gateway
* Order Tracking System
* User Profile Management

## Author

MD Raju Khan (242-115-003)
Tashin Islam Safat (241-115-213)
Zahidul Hussain Riyad (242-115-011)

Department of Computer Science and Engineering (CSE)

## License

This project is developed for educational and learning purposes.
