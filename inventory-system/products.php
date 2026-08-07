<?php


include "includes/config.php";
include "includes/Database.php";
include "includes/Crud.php";



$db = new Database();

$conn = $db->connect();


$crud = new Crud($conn);



$products = $crud->getProducts();



include "includes/header.php";


?>


<h2 class="mb-4">
All Products
</h2>



<div class="row">


<?php foreach($products as $product){ ?>


<div class="col-md-4 mb-4">


<div class="card shadow h-100">


<img
src="uploads/<?= $product['image']; ?>"
class="card-img-top"
height="250"
style="object-fit:cover;">



<div class="card-body">


<h4>
<?= htmlspecialchars($product['name']); ?>
</h4>



<p>
<?= htmlspecialchars($product['description']); ?>
</p>



<h5>
$<?= number_format($product['price'],2); ?>
</h5>



<p>
Stock:
<?= $product['quantity']; ?>
</p>



<a 
href="product.php?id=<?= $product['id']; ?>"
class="btn btn-primary">

View Product

</a>



<?php if(isset($_SESSION['admin'])){ ?>


<a 
href="edit-product.php?id=<?= $product['id']; ?>"
class="btn btn-warning">

Edit

</a>


<a 
href="delete-product.php?id=<?= $product['id']; ?>"
class="btn btn-danger"
onclick="return confirm('Delete product?')">

Delete

</a>


<?php } ?>



</div>

</div>


</div>



<?php } ?>


</div>



<?php

include "includes/footer.php";

?>
