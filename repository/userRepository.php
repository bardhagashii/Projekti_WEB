<?php 
include_once '../database/databaseConnection.php';

class UserRepository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConnection;
        $this->connection = $conn->startConnection();
    }


    function insertUser(){

        $conn = $this->connection;


        $sql = "INSERT INTO users (UserID,Emri,Mbiemri,Username,Email,Password,Role) VALUES (?,?,?,?,?,?,?)";

        $statement = $conn->prepare($sql);
        
        $statement->execute(['3','Dardan','Kabashi','Kabo','dardankabashi@hotmail.com','Dardan456','admin']);

        echo "<script> alert('User has been inserted successfuly!'); </script>";

    }
}
$userRepo = new UserRepository;
$userRepo->insertUser();
?>
