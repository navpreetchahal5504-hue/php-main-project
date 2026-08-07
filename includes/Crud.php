<?php


class Crud{


private $conn;



public function __construct($db){

    $this->conn = $db;

}




// =======================
// Create User Name
// ======================

public function register($first,$last,$email,$password){


    $check = $this->conn->prepare(

        "SELECT id FROM admins WHERE email=?"

    );


    $check->execute([$email]);



    if($check->rowCount()>0){

        return "Email already exists";

    }



    $password = password_hash(

        $password,

        PASSWORD_DEFAULT

    );



    $sql="INSERT INTO admins

    (first_name,last_name,email,password)

    VALUES(?,?,?,?)";



    $stmt=$this->conn->prepare($sql);



    return $stmt->execute([

        $first,

        $last,

        $email,

        $password

    ]);

}




// =======================
// Login 
// ======================

public function login($email,$password){



$stmt=$this->conn->prepare(

"SELECT * FROM admins WHERE email=?"

);



$stmt->execute([$email]);



$user=$stmt->fetch(PDO::FETCH_ASSOC);



if($user && password_verify($password,$user['password'])){


$_SESSION['admin']=$user['id'];

$_SESSION['name']=$user['first_name'];


return true;


}


return false;


}





// =======================
// Products
// ======================


public function addProduct($name,$description,$price,$quantity,$image){


$stmt=$this->conn->prepare(

"INSERT INTO products

(name,description,price,quantity,image)

VALUES(?,?,?,?,?)"

);



return $stmt->execute([

$name,

$description,

$price,

$quantity,

$image

]);


}



public function getProducts(){


$stmt=$this->conn->prepare(

"SELECT * FROM products ORDER BY id DESC"

);


$stmt->execute();


return $stmt->fetchAll(PDO::FETCH_ASSOC);


}



public function getProduct($id){


$stmt=$this->conn->prepare(

"SELECT * FROM products WHERE id=?"

);


$stmt->execute([$id]);


return $stmt->fetch(PDO::FETCH_ASSOC);


}




public function updateProduct($id,$name,$description,$price,$quantity){


$stmt=$this->conn->prepare(

"UPDATE products SET

name=?,

description=?,

price=?,

quantity=?

WHERE id=?"

);



return $stmt->execute([

$name,

$description,

$price,

$quantity,

$id

]);


}



public function deleteProduct($id){


$stmt=$this->conn->prepare(

"DELETE FROM products WHERE id=?"

);


return $stmt->execute([$id]);


}




// =======================
// Users
// ======================


public function getUsers(){


$stmt=$this->conn->prepare(

"SELECT * FROM admins"

);


$stmt->execute();


return $stmt->fetchAll(PDO::FETCH_ASSOC);


}




public function updateUser($id,$first,$last,$email){


$stmt=$this->conn->prepare(

"UPDATE admins SET

first_name=?,

last_name=?,

email=?

WHERE id=?"

);



return $stmt->execute([

$first,

$last,

$email,

$id

]);


}




public function deleteUser($id){


$stmt=$this->conn->prepare(

"DELETE FROM admins WHERE id=?"

);



return $stmt->execute([$id]);


}



}


?>
