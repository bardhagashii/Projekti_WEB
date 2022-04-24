<?php 
include 'includes/header.php';
session_start();

if(!isset($_SESSION['username'])){
 header("location:logIn.php");
}else{
 if($_SESSION['role'] != "admin"){
    header("location:index.php");
 }


?>
<!DOCTYPE html>
<html>

<head>
    <title>Manage Users</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
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
<body>

<div style="overflow-x: auto;"> 
<table border="1">
    <tr style="background-color: lightgreen;">
                 <th>UserID</th>
                 <th>Emri</th>
                 <th>Mbiemri</th>
                 <th>Username</th>
                 <th>Email</th>
                 <th>Password</th>
                 <th>Role</th>
                 
             </tr>

             <?php 
             include_once './repository/userRepository.php';

             $userRepository = new UserRepository();

             $users = $userRepository->getAllUsers();

             foreach($users as $user){
                echo 
                "
                <tr>
                     <td>$user[UserID]</td>
                     <td>$user[Emri]</td>
                     <td>$user[Mbiemri] </td>
                     <td>$user[Username] </td>
                     <td>$user[Email] </td>
                     <td>$user[Password] </td>
                     <td>$user[Role] </td>
                     <td> <a href='edit-User.php?id=$user[UserID]'>
                     <input class = 'btn' type='submit' value='EDIT'>
                  </a></td>
                  <td> <a href='delete-User.php?id=$user[UserID]'>
                  <input class = 'btn' type='submit' value='DELETE'>
               </a></td>
                     
                </tr>
                ";
             }
             
             ?>
        
    </table>
    <a href='addUser.php' style>
			<input class="addbtn" type="submit" value="ADD USER">
		</a>
            </div>
      
      
        
    <?php include_once 'includes/footer.php'; ?>
</body>

</html>

<?php } ?>
