<?php session_start(); ?>
<html>
<head>
    <title>LogIn/Register</title>
    <link rel="stylesheet" href="css/main.css">
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
    
 <div class="style">   
  <div class="login-page">
      <div class="form">
      <form class="register-form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
             <input type="text" id="fname" placeholder="First Name" name="firstname" >
            <label for="" id="fnameMsg"></label>
            <input type="text" id="lname" placeholder="Last Name" name="lastname" >
            <label for="" id="lnameMsg"></label>
            <input type="text" id="user" placeholder="Username" name="username" >
            <label for="" id="userMsg"></label>
            <input type="text" id="email" placeholder="Email" name="email" >
          <label for="" id="emailMsg"></label>
            <input type="password" id="psw" placeholder="Password" name="password" >
            <label for="" id="pswMsg"></label>
          <input type="submit" id="submitt" name = "registerButton" value ="Register">
          <p class="message">Already Registered? <a href="#">LogIn</a>
        </p>
      </form>
     

  
      <form class="login-form" action="logIn.php"method="post">
        <input type="text" id="username" placeholder="Enter Username" name="username" >
        <label for="" id="usernameMsg"></label>
        <input type="password" id="password" placeholder="Enter Password" name="password" >
        <label for="" id="passwordMsg"></label>
        <button type="submit" name ="submit" id="submit">Log In</button>
        <p class="message">Not Registered? <a href="#">Register</a>
      </p>
      </form>
      </div>
  </div>
</div> 
<script src='https://code.jquery.com/jquery-3.5.1.min.js'>
</script>
<script>
    $('.message a').click(function(){
    $('form').animate({height:"toggle",opacity:"toggle"}, "slow");
     });
  
</script>
<script src="login.js"></script>
<script src="register.js"></script>
<?php include './controller/userController.php' ?>

</body>

</html>
