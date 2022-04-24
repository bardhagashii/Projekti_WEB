<?php 
include_once './database/databaseConnection.php';

class UserRepository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConnection;
        $this->connection = $conn->startConnection();
    }

    function insertUser($user){

        $conn = $this->connection;

        $id = $user->getId();
        $fname = $user->getFname();
        $lname = $user->getLname();
        $username = $user->getUsername();
        $email = $user->getEmail();
        $password = $user->getPassword();
        $role = $user->getRole();

        $sql = "INSERT INTO users (UserID,Emri,Mbiemri,Username,Email,Password,Role) VALUES (?,?,?,?,?,?,?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$id,$fname,$lname,$username,$email,$password,$role]);

        echo "<script> alert('User has been inserted successfuly!'); </script>";

    }
    function getAllUsers(){
        $conn = $this->connection;

        $sql = "SELECT * FROM users";

        $statement = $conn->query($sql);
        $users = $statement->fetchAll();

        return $users;
    }

    function getUserById($id){
        $conn = $this->connection;

        $sql = "SELECT * FROM users WHERE UserID='$id'";

        $statement = $conn->query($sql);
        $user = $statement->fetch();

        return $user;
    }

    function updateUser($id,$fname,$lname,$username,$email,$password,$role){
        $connect = $this->connection;

        $sql = "UPDATE users SET Emri=?, Mbiemri=?, Username=?, Email=?, Password=?, Role=? WHERE UserID=?";

        $statement = $connect->prepare($sql);

        $statement->execute([$fname,$lname,$username,$email,$password,$role,$id]);

        echo "<script> alert('User has been updated successfuly!'); </script>";
   } 

   function deleteUser($id){
    $conn = $this->connection;

    $sql = "DELETE FROM users WHERE UserID=?";

    $statement = $conn->prepare($sql);

    $statement->execute([$id]);

    echo "<script>alert('User was deleted successfully'); </script>";
} 

function testEmail($user){
    $connect = $this->connection;

    $email = $user->getEmail();
       $sql = "SELECT * FROM users WHERE Email='$email'";

    $statement = $connect->query($sql);
    $testEmail = $statement->fetchAll();

    if(count($testEmail) == 0){
        return false;
    }else{
        return true;
    }
}

function testUsername($user){
    $connect = $this->connection;

    $username = $user->getUsername();
    $sql = "SELECT * FROM users WHERE Username='$username'";

    $statement = $connect->query($sql);
    $testUsername = $statement->fetchAll();

    if(count($testUsername) == 0){
        return false;
    }else{
        return true;
    }
}

function getUserUsername($username){
    $connect = $this->connection;

    $sql = "SELECT * FROM users WHERE Username='$username'";

    $statement = $connect->query($sql);
    $user_username = $statement->fetch();

    return $user_username;
}

function getUserPsw($password){
    $connect = $this->connection;

    $sql = "SELECT * FROM users WHERE Password='$password'";

    $statement = $connect->query($sql);
    $user_psw = $statement->fetchAll();

    return $user_psw;
}

function testRole($username){
    $connect = $this->connection;

    $sql = "SELECT * FROM users WHERE Username='$username' AND Role='user'";

    $statement = $connect->query($sql);
    $user_role = $statement->fetchAll();

    return $user_role;	
}
}
/*$userRepo = new UserRepository;
$userRepo->insertUser();
*/
?>
