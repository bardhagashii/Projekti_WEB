var button = document.getElementById("submit");
var usernameMsg =document.getElementById("usernameMsg");
var passwordMsg = document.getElementById("passwordMsg");

var usernameRegex = /\w{5,14}/;
var passwordRegex = /^[A-Z]\w+[a-z]\d{3}/

button.addEventListener("click", function(event){
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;

  if(username == "" || username == null){
    usernameMsg.innerText="Please fill the username field!";
    event.preventDefault();
  }else{
    if(usernameRegex.test(username)){
        usernameMsg.innerText="";
    }else{
        usernameMsg.innerText="Username must be between 5-15 characters!"
        event.preventDefault();
    }

}

  if (password == "" || password == null) {
    passwordMsg.innerText = "Please fill the password field!";
    event.preventDefault();
  } else {
    if (passwordRegex.test(password)) {
      passwordMsg.innerText = "";
    } else {
      passwordMsg.innerText ="Password should start with a capital and end with 3 numbers!";
      event.preventDefault();
    }
  }
});

//register validaiton
