<?php


include "includes/config.php";
include "includes/Database.php";
include "includes/Crud.php";


$db = new Database();

$conn = $db->connect();


$crud = new Crud($conn);



if(!isset($_GET['id'])){

header("Location: products.php");

exit();

}



$product = $crud->getProduct($_GET['id']);



include "includes/header.php";


?>


<div class="row">


<div class="col-md-6">


<img

src="uploads/<?= $product['image']; ?>"

class="img-fluid rounded shadow">


</div>




<div class="col-md-6">


<h1>
<?= htmlspecialchars($product['name']); ?>
</h1>



<p>

<?= nl2br(htmlspecialchars($product['description'])); ?>

</p>



<h3 class="text-success">

$<?= number_format($product['price'],2); ?>

</h3>



<h5>

Available Stock:
<?= $product['quantity']; ?>

</h5>



<a 
href="products.php"
class="btn btn-secondary mt-3">

Back

</a>


</div>


</div>



<?php

include "includes/footer.php";

?>
