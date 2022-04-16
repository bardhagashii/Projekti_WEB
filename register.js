var buttonn = document.getElementById("submitt");


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
        fnameMsg.innerText="Name should start with a capital!"
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
        userMsg.innerText="Username must be between 5-15 characters!"
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
      emailMsg.innerText="Email must be standard!";
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
