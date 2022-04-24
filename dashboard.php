<?php
include 'includes/header.php';
	$hide="";
	session_start();
	if(!isset($_SESSION['username'])){
	  header("location:logIn.php");
	}else{
		if($_SESSION["role"] == "admin"){
	    	 $hide = "";
	    }else{
	    $hide = "hide";
		}
	}
 ?>
<!DOCTYPE html>
<html>
<header>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

</head>
</header>
<body>
<main>
<h1 class='dashboardText'>Welcome <?php echo $_SESSION['username'];?>!</h1> <br>
		<?php 

			include_once './repository/userRepository.php';
		    $userRepository = new UserRepository();

		    $user = $userRepository->getUserUsername($_SESSION['username']);

			echo "<h4 class='dashboardText'>Emri: $user[Emri]</h4> <br>
				  <h4 class='dashboardText'>Mbiemri: $user[Mbiemri]</h4>"

		?>

<div class = "dashboardpage">
		<a href="manageUsers.php" class="<?php echo $hide ?>" style="text-decoration: none;">
			<input class="dbutton" type="button" name="buttond" value="Manage Users">
		</a> <br> <br>
	
		<a href="manageProducts.php" class="<?php echo $hide ?>"style="text-decoration: none;" >
			<input class="dbutton" type="button" name="buttond" value="Manage Products">
		</a> <br> <br>
	
		<a href="activityPage.php" class="<?php echo $hide ?>"style="text-decoration: none;" >
			<input class="dbutton" type="button" name="buttond" value="Activity Page">
		</a> <br> <br>

		<a href="logout.php" style="text-decoration: none;">
			<input class="dbutton" type="button" name="logoutBtn" value="Log Out">
		</a>
		</div>

</main>
<?php include 'includes/footer.php'; ?>
</body>
</html>
