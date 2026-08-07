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



$message="";



if(isset($_POST['add'])){


$name = trim($_POST['name']);

$description = trim($_POST['description']);

$price = $_POST['price'];

$quantity = $_POST['quantity'];



$image = $_FILES['image']['name'];


$tmp = $_FILES['image']['tmp_name'];



move_uploaded_file(

$tmp,

"uploads/".$image

);



if($crud->addProduct(

$name,

$description,

$price,

$quantity,

$image

)){


$message="

<div class='alert alert-success'>
Product Added Successfully
</div>";



}



}



include "includes/header.php";

?>


<h2>
Add Product
</h2>


<?= $message; ?>



<form method="POST" enctype="multipart/form-data">


<div class="mb-3">

<label>
Product Name
</label>

<input 
type="text"
name="name"
class="form-control"
required>

</div>



<div class="mb-3">

<label>
Description
</label>

<textarea
name="description"
class="form-control"
required></textarea>

</div>



<div class="mb-3">

<label>
Price
</label>

<input
type="number"
step="0.01"
name="price"
class="form-control"
required>

</div>



<div class="mb-3">

<label>
Quantity
</label>

<input
type="number"
name="quantity"
class="form-control"
required>

</div>



<div class="mb-3">

<label>
Image
</label>

<input
type="file"
name="image"
class="form-control"
required>

</div>



<button 
class="btn btn-success"
name="add">

Add Product

</button>


</form>


<?php

include "includes/footer.php";

?>
