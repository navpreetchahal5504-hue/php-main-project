<?php

include "includes/config.php";
include "includes/Database.php";
include "includes/Crud.php";


$db = new Database();

$conn = $db->connect();

$crud = new Crud($conn);


$message = "";


if(isset($_POST['register'])){


$first = trim($_POST['first_name']);

$last = trim($_POST['last_name']);

$email = trim($_POST['email']);

$password = $_POST['password'];

$confirm = $_POST['confirm_password'];



if($password != $confirm){


$message = "

<div class='alert alert-danger'>
Passwords do not match.
</div>

";


}

else{


$result = $crud->register(

$first,

$last,

$email,

$password

);



if($result === true){


$message = "

<div class='alert alert-success'>
Registration successful. You can login now.
</div>

";


}

else{


$message = "

<div class='alert alert-danger'>
$result
</div>

";


}


}



}



include "includes/header.php";

?>


<h2 class="mb-4">
Create Admin Account
</h2>



<?= $message; ?>



<form method="POST">


<div class="mb-3">

<label>
First Name
</label>

<input 
type="text"
name="first_name"
class="form-control"
required>

</div>




<div class="mb-3">

<label>
Last Name
</label>

<input 
type="text"
name="last_name"
class="form-control"
required>

</div>




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




<div class="mb-3">

<label>
Confirm Password
</label>

<input 
type="password"
name="confirm_password"
class="form-control"
required>

</div>




<button 
class="btn btn-primary"
name="register">

Register

</button>



</form>



<?php

include "includes/footer.php";

?>
