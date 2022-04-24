<?php
include_once './repository/userRepository.php';
include_once './models/users.php';

if(isset($_POST['registerButton'])){
    if(empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['username']) ||
    empty($_POST['email']) || empty($_POST['password'])){
    }else{
        $id = rand(0,100);
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $role = 'user';
   

        $user  = new User($id,$fname,$lname,$username,$email,$password,$role);
        $userRepository = new UserRepository();
    
                if($userRepository->testEmail($user)){
                    echo "<script> alert('Email already exists!'); </script>";
                }
                elseif($userRepository->testUsername($user)){
                    echo "<script> alert('Username already exists!'); </script>";
                }
                else{
                    $userRepository->insertUser($user);
    
                    if(isset($_SESSION['username'])){ 
                       include_once './repository/activityRepository.php';
                       $admin = $_SESSION['username'];
                       $activity = "INSERTED";
    
                       $activityRepository = new activityRepository();
                       $activityRepository->ActivityOnUser($admin,$activity,$username);
                       header("location:manageUsers.php");
    
    
                    }else{
                      $userRepository->insertUser($user);
                      header("location:logIn.php");
                    }
                }
            }
        }


 

?>
<?php
    if(isset($_POST['submit'])){
        if(!(empty($_POST['username'])) && !(empty($_POST['password']))){
            $username = $_POST['username'];
            $password = $_POST['password'];
 
            include_once './repository/userRepository.php';
             $userRepository = new UserRepository();
             
            if((count($userRepository->getUserUsername($username))) == 0){
                 echo "<script> alert('Useri nuk ekziston!'); </script>";
             }
             else if((count($userRepository->getUserPsw($password))) == 0){
                 echo "<script> alert('Passwordi eshte dhene gabim!'); </script>";
                }
             else{
                    session_start();
                    $_SESSION['username'] = $username;
                    $_SESSION['password'] = $password;
 
                    if((count($userRepository->testRole($username))) == 0){
                            $_SESSION["role"] = "admin";
                    }
                    else{
                            $_SESSION["role"] = "user";
                    }
                    header("location:dashboard.php");
 
                    
                    exit();
 
             }
        }
 
      }
    



?>

