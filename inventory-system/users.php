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



$users = $crud->getUsers();



include "includes/header.php";

?>


<h2 class="mb-4">
Manage Users
</h2>



<table class="table table-bordered table-striped">


<thead class="table-dark">

<tr>

<th>ID</th>

<th>Name</th>

<th>Email</th>

<th>Actions</th>

</tr>

</thead>



<tbody>


<?php foreach($users as $user){ ?>


<tr>


<td>
<?= $user['id']; ?>
</td>



<td>

<?= $user['first_name']." ".$user['last_name']; ?>

</td>



<td>

<?= $user['email']; ?>

</td>



<td>


<a 
href="edit-user.php?id=<?= $user['id']; ?>"
class="btn btn-warning btn-sm">

Edit

</a>



<a 
href="delete-user.php?id=<?= $user['id']; ?>"
class="btn btn-danger btn-sm"
onclick="return confirm('Delete this user?')">

Delete

</a>



</td>


</tr>


<?php } ?>


</tbody>


</table>



<?php

include "includes/footer.php";

?>
