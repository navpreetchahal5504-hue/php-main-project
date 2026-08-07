<?php
include_once 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Inventory Management System</title>

<meta name="description" content="Inventory Management System for managing products and stock.">


<!-- Bootstrap CSS -->

<link 
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
rel="stylesheet">

<!-- Custom  CSS -->

<link rel="stylesheet" href="css/style.css">


</head>


<body>


<header>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

<div class="container">


<a class="navbar-brand" href="index.php">

Inventory System

</a>



<button 
class="navbar-toggler"
type="button"
data-bs-toggle="collapse"
data-bs-target="#navbarMenu">

<span class="navbar-toggler-icon"></span>

</button>



<div class="collapse navbar-collapse" id="navbarMenu">


<ul class="navbar-nav ms-auto">


<li class="nav-item">

<a class="nav-link" href="index.php">

Home

</a>

</li>



<li class="nav-item">

<a class="nav-link" href="products.php">

Products

</a>

</li>



<?php if(isset($_SESSION['admin'])){ ?>


<li class="nav-item">

<a class="nav-link" href="dashboard.php">

Dashborad

</a>

</li>


<li class="nav-item">

<a class="nav-link" href="users.php">

Users

</a>

</li>


<li class="nav-item">

<a class="nav-link text-danger" href="logout.php">

Logout

</a>

</li>


<?php } else { ?>


<li class="nav-item">

<a class="nav-link" href="register.php">

Register

</a>

</li>


<li class="nav-item">

<a class="nav-link" href="login.php">

Login

</a>

</li>


<?php } ?>


</ul>


</div>


</div>

</nav>


</header>



<main class="container mt-4"></main>
