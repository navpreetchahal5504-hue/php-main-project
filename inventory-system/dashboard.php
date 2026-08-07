<?php

include "includes/config.php";


if(!isset($_SESSION['admin'])){

    header("Location: login.php");
    exit();

}


include "includes/Database.php";
include "includes/Crud.php";


$db = new Database();

$conn = $db->connect();

$crud = new Crud($conn);


$products = $crud->getProducts();

$users = $crud->getUsers();


include "includes/header.php";

?>


<h1 class="mb-4">
Welcome <?= $_SESSION['name']; ?>
</h1>



<div class="row">


<div class="col-md-4">

<div class="card shadow text-center p-4">

<h2>
<?= count($products); ?>
</h2>

<p>
Total Products
</p>

</div>

</div>



<div class="col-md-4">

<div class="card shadow text-center p-4">

<h2>
<?= count($users); ?>
</h2>

<p>
Total Users
</p>

</div>

</div>


<div class="col-md-4">

<div class="card shadow text-center p-4">

<h2>
Admin
</h2>

<p>
Logged In
</p>

</div>

</div>


</div>



<div class="mt-5">


<a href="add-product.php" class="btn btn-success">
Add Product
</a>


<a href="products.php" class="btn btn-primary">
Manage Products
</a>


<a href="users.php" class="btn btn-warning">
Manage Users
</a>


</div>



<?php

include "includes/footer.php";

?>
