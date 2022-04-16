
<html>
<head>
    <title>LogIn/Register</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    
 <div class="style">   
  <div class="login-page">
      <div class="form">
          <form class="register-form">
             <input type="text" id="fname" placeholder="First Name" name="firstname" >
            <label for="" id="fnameMsg"></label>
            <input type="text" id="lname" placeholder="Last Name" name="lastname" >
            <label for="" id="lnameMsg"></label>
            <input type="text" id="user" placeholder="Username" name="username" >
            <label for="" id="userMsg"></label>
            <input type="password" id="psw" placeholder="Password" name="password" >
            <label for="" id="pswMsg"></label>
          <input type="text" placeholder="Email" id="email">
          <label for="" id="emailMsg"></label>
          <button type="submit" id="submitt">Register</button>
          <p class="message">Already Registered? <a href="#">LogIn</a>
        </p>
      </form>
  
      <form class="login-form">
        <input type="text" id="username" placeholder="Enter Username" name="username" >
        <label for="" id="usernameMsg"></label>
        <input type="password" id="password" placeholder="Enter Password" name="password" >
        <label for="" id="passwordMsg"></label>
        <button type="submit" id="submit">Log In</button>
        <p class="message">Not Registered? <a href="#">Register</a>
      </p>

      </form>


      </div>
  </div>
</div> /


<script src='https://code.jquery.com/jquery-3.5.1.min.js'>
</script>
<script>
    $('.message a').click(function(){
    $('form').animate({height:"toggle",opacity:"toggle"}, "slow");
     });
  
</script>

<script src="login.js"></script>
<script src="register.js"></script>


</body>
     
</html> 
