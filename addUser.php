<?php 
include 'includes/header.php';
session_start();


if(!isset($_SESSION['username'])){
 header("location:logIn.php");
}else{
 if($_SESSION['role'] != "admin"){
    header("location:index.php");
 }
 $admin = $_SESSION['username'];


?>
<?php




include_once './repository/userRepository.php';
include_once './models/users.php';

if(isset($_POST['addButton'])){
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

        $userRepository->insertUser($user);

        include_once './repository/activityRepository.php';
        
        $activity = "ADDED";

        $activityRepository = new activityRepository();
        $data = date("Y-m-d h:i");
        $activityRepository->ActivityOnUser(null,$admin,$activity,$username, null,$data);
}
}
?>
<html>
<head>
    <title>Add User</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <main>
<div  class="edittable">
    
<form action="" method="POST" >

    <h5>Firstname:</h5>
     <input type="text" id="fname" name="firstname" >
            <label for="" id="fnameMsg"></label>
   
    <h5>Lastname:</h5>
    <input type="text" id="lname" name="lastname" >
            <label for="" id="lnameMsg"></label>

    <h5>Username:</h5>
    <input type="text" id="user" name="username" >
            <label for="" id="userMsg"></label>

    <h5>Email:</h5>
    <input type="text" id="email" name="email" >
          <label for="" id="emailMsg"></label>

    <h5>Password:</h5>
              <input type="password" id="psw" name="password" >
            <label for="" id="pswMsg"></label> <br>

    <input type="submit" class ="btn" id="add" name = "addButton" value ="ADD">

</form>

</div>
</main>


<script type="text/javascript">
var buttonn = document.getElementById("addButton");
var fnameMsg = document.getElementById("fnameMsg");
var lnameMsg = document.getElementById("lnameMsg");
var userMsg = document.getElementById("userMsg");
var emailMsg = document.getElementById("emailMsg");
var pswMsg = document.getElementById("pswMsg");

var fnameRegex = /^[A-Z][a-z]{1,}/;
var lnameRegex = /^[A-Z][a-z]{1,}/;
var userRegex = /\w{5,14}/;
var emailRegex = /[a-z]\w+@[a-z]+[-]?[a-z]\.[a-z]{2,3}/;
var pswRegex = /^[A-Z]\w+[a-z]\d{3}/;

buttonn.addEventListener("click", function(event){
  var fname = document.getElementById("fname").value;
  var lname = document.getElementById("lname").value;
  var user = document.getElementById("user").value;
  var email = document.getElementById("email").value;
  var psw = document.getElementById("psw").value;

  if(fname == "" || fname == null){
    fnameMsg.innerText="Please fill the first name field!";
    event.preventDefault();
  }else{
    if(fnameRegex.test(fname)){
        fnameMsg.innerText="";
    }else{
        fnameMsg.innerText="First name should start with a capital!"
        event.preventDefault();
    }

}
  
if(lname == "" || lname == null){
  lnameMsg.innerText="Please fill the last name field!";
  event.preventDefault();
}else{
  if(lnameRegex.test(lname)){
      lnameMsg.innerText="";
  }else{
      lnameMsg.innerText="Last name should start with a capital!"
      event.preventDefault();
  }

}

  if(user == "" || user == null){
    userMsg.innerText="Please fill the username field!";
    event.preventDefault();
  }else{
    if(userRegex.test(user)){
        userMsg.innerText="";
    }else{
        userMsg.innerText="Username should be between 5-15 characters!"
        event.preventDefault();
    }

}




if(email == "" || email == null){
  emailMsg.innerText="Please fill the email field!";
  event.preventDefault();
}else{
  if(emailRegex.test(email)){
      emailMsg.innerText="";
  }else{
      emailMsg.innerText="Email should be standard!";
      event.preventDefault();
  }

}

if(psw == "" || psw == null){
  pswMsg.innerText="Please fill the password field!";
  event.preventDefault();
}else{
  if(pswRegex.test(psw)){
      pswMsg.innerText="";
  }else{
      pswMsg.innerText="Password should start with a capital and end with 3 numbers!";
      event.preventDefault();
  }

}



});
<script src='https://code.jquery.com/jquery-3.5.1.min.js'></script>
</script>
<script type="text/javascript" src="register.js"></script>
<?php include 'includes/footer.php';?>

</body>
</html>

<?php } ?>
