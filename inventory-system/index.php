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

<section class="hero text-center p-5 bg-dark text-white rounded">


<h1>
Welcome to Inventory Management System
</h1>


<p>
Manage and explore products easily.
</p>


<a href="products.php" class="btn btn-primary">
View Products
</a>


</section>



<h2 class="text-center mt-5 mb-4">
Featured Products
</h2>



<div class="row">


<?php

$count = 0;


foreach($products as $product){


if($count == 6){
    break;
}

?>


<div class="col-md-4 mb-4">


<div class="card h-100 shadow">


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

<?= substr(
htmlspecialchars($product['description']),
0,
80
); ?>

...

</p>


<h5>
$<?= number_format($product['price'],2); ?>
</h5>



<a 
href="product.php?id=<?= $product['id']; ?>"
class="btn btn-primary">

View Details

</a>


</div>


</div>


</div>



<?php

$count++;

}

?>


</div>



<?php

include "includes/footer.php";

?>
