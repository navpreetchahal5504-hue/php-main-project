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



$stmt = $conn->prepare(

"SELECT * FROM admins WHERE id=?"

);


$stmt->execute([$id]);


$user = $stmt->fetch(PDO::FETCH_ASSOC);



if(isset($_POST['update'])){


$first = trim($_POST['first_name']);

$last = trim($_POST['last_name']);

$email = trim($_POST['email']);



if($crud->updateUser(

$id,

$first,

$last,

$email

)){


header("Location: users.php");

exit();


}



}



include "includes/header.php";


?>


<h2>
Edit User
</h2>



<form method="POST">


<div class="mb-3">

<label>
First Name
</label>

<input
type="text"
name="first_name"
class="form-control"
value="<?= $user['first_name']; ?>"
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
value="<?= $user['last_name']; ?>"
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
value="<?= $user['email']; ?>"
required>

</div>




<button 
class="btn btn-success"
name="update">

Update User

</button>



<a href="users.php" class="btn btn-secondary">

Cancel

</a>


</form>



<?php

include "includes/footer.php";

?>
