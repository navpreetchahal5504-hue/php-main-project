<?php


include "includes/config.php";

include "includes/Database.php";

include "includes/Crud.php";



$db = new Database();

$conn = $db->connect();


$crud = new Crud($conn);



$message = "";



if(isset($_POST['login'])){


$email = trim($_POST['email']);

$password = $_POST['password'];



if($crud->login($email,$password)){


header("Location: dashboard.php");

exit();


}

else{


$message = "

<div class='alert alert-danger'>
Invalid email or password.
</div>

";


}



}



include "includes/header.php";


?>


<h2 class="mb-4">
Admin Login
</h2>



<?= $message; ?>



<form method="POST">


<div class="mb-3">

<label>
Email
</label>


<input 
type="email"
name="email"
class="form-control"
required>


</div>




<div class="mb-3">

<label>
Password
</label>


<input 
type="password"
name="password"
class="form-control"
required>


</div>




<button 
class="btn btn-success"
name="login">

Login

</button>



</form>



<?php

include "includes/footer.php";

?>


