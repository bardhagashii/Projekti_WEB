<?php
session_start();
include 'includes/header.php';

if(!isset($_SESSION['username'])){
 header("location:logIn.php");
}else{
 if($_SESSION['role'] != "admin"){
    header("location:index.php");
 }



$id = $_GET['id'];
include_once './repository/userRepository.php'; 
$userRepository = new UserRepository();
$user = $userRepository->getUserById($id);
$admin = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Users</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>

<main>
<div class="account">
				<img class="nav-link" src="img/avatar.png" alt="avatar-icon" height="24px">

				<?php if(isset($_SESSION['username'])){
					echo "<p class='nav-link'><a href='dashboard.php'>".$_SESSION['username']." Profile</a></p>";
				}
				else{
					echo "<p class='nav-link'><a href='logIn.php' target='_blank'>Account</a></p>";
				}
					?>		
			</div>

<div  class="edittable">
    
<form action="" method="POST" >
<h5>UserID:</h5>
    <input type="text" name="id" value="<?=$user['UserID']?>" readonly>  <br>

    <h5>Firstname:</h5>
    <input type="text" name="firstname" value="<?=$user['Emri']?>"> <br>
   
    <h5>Lastname:</h5>
    <input type="text" name="lastname" value="<?=$user['Mbiemri']?>"><br>

    <h5>Username:</h5>
    <input type="text" name="username" value="<?=$user['Username']?>"> <br>

    <h5>Email:</h5>
    <input type="text" name="email" value="<?=$user['Email']?>"><br>

    <h5>Password:</h5>
    <input type="text" name="password" value="<?=$user['Password']?>"><br>

    <h5>Role:</h5>
    <input type="text" name="role" value="<?=$user['Role']?>">  <br>

    <input type="submit" class = "btn" name="updateButton" value="UPDATE">

</form>

</div>
</main>

<?php
include 'includes/footer.php';?>

</html>
<?php } ?>
<?php
if(isset($_POST['updateButton'])){
    $id = $user['UserID'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $userRepository->updateUser($id,$fname,$lname,$username,$email,$password, $role);
    


    include_once './repository/activityRepository.php';
        
        $activity = "UPDATED";

        $activityRepository = new activityRepository();
        $data = date("Y-m-d h:i");
        $activityRepository->ActivityOnUser(null,$admin,$activity,$username, null,$data);
        header("location:manageUsers.php");
}
?>
