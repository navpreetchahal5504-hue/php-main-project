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



if(isset($_GET['id'])){


$crud->deleteProduct($_GET['id']);


}



header("Location: products.php");


exit();


?>
