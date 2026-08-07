<?php


class Database{


    private $host = DB_HOST;

    private $database = DB_NAME;

    private $username = DB_USER;

    private $password = DB_PASS;


    public $connection;



    public function connect(){


        $this->connection = null;


        try{


            $this->connection = new PDO(

                "mysql:host=".$this->host.";dbname=".$this->database,

                $this->username,

                $this->password

            );


            $this->connection->setAttribute(

                PDO::ATTR_ERRMODE,

                PDO::ERRMODE_EXCEPTION

            );


        }


        catch(PDOException $error){


            echo "Database Connection Error: ".$error->getMessage();


        }



        return $this->connection;


    }



}


?>
