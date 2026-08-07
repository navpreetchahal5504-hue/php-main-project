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



$id = $_GET['id'];


$product = $crud->getProduct($id);



if(isset($_POST['update'])){


$name = trim($_POST['name']);

$description = trim($_POST['description']);

$price = $_POST['price'];

$quantity = $_POST['quantity'];



if($crud->updateProduct(

$id,

$name,

$description,

$price,

$quantity

)){


header("Location: products.php");

exit();


}


}



include "includes/header.php";

?>


<h2>Edit Product</h2>



<form method="POST">


<div class="mb-3">

<label>
Product Name
</label>

<input
type="text"
name="name"
class="form-control"
value="<?= $product['name']; ?>"
required>

</div>



<div class="mb-3">

<label>
Description
</label>

<textarea
name="description"
class="form-control"
required><?= $product['description']; ?></textarea>

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
value="<?= $product['price']; ?>"
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
value="<?= $product['quantity']; ?>"
required>

</div>



<button 
class="btn btn-success"
name="update">

Update Product

</button>



<a href="products.php" class="btn btn-secondary">

Cancel

</a>


</form>



<?php

include "includes/footer.php";

?>
