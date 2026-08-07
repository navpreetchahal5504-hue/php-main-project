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


// Prevent deleting current logged-in admin

if($_GET['id'] != $_SESSION['admin']){


$crud->deleteUser($_GET['id']);


}


}



header("Location: users.php");


exit();


?>
