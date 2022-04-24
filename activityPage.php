<?php 
session_start();
if(!isset($_SESSION['username'])){
 header("location:logIn.php");
}else{
 if($_SESSION['role'] != "admin"){
    header("location:index.php");
 }
?>
<?php
include 'includes/header.php';?>
<!DOCTYPE html>
<html>

<head>
    <title>Activity Page</title>
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
			<th>ID</th>
			<th>Admin</th>
			<th>Activity</th>
			<th>User</th>
			<th>Product</th>
			<th>Date_Time</th>
		</tr>
             <?php 
             include_once './repository/activityRepository.php';
             $activityRepository = new activityRepository();

             $activities = $activityRepository->readActivities();

             foreach($activities as $activity){
                echo 
                "
                <tr>
                     <td>$activity[ID]</td>
                     <td>$activity[Admin]</td>
                     <td>$activity[Activity]</td>
                     <td>$activity[User]</td>
                     <td>$activity[Product] </td>
                     <td>$activity[Date_Time] </td>
                </tr>
                ";
             }
             ?>
	</table>
	</div>
<?php include_once 'includes/footer.php'; ?>
</body>

</html>
<?php } ?>
