var buttonn = document.getElementById("submitt");

var userMsg = document.getElementById("userMsg");
var emailMsg = document.getElementById("emailMsg");
var pswMsg = document.getElementById("pswMsg");


var userRegex = /^[A-Z]\w+[._-]?\w+/;
var emailRegex = /[a-z]\w+@[a-z]+[-]?[a-z]\.[a-z]{2,3}/;
var pswRegex = /^[A-Z]\w+[a-z]\d{3}/;

buttonn.addEventListener("click", function(event){
  var user = document.getElementById("user").value;
  var email = document.getElementById("email").value;
  var psw = document.getElementById("psw").value;


  

  if(user == "" || user == null){
    userMsg.innerText="Please fill the username field!";
    event.preventDefault();
  }else{
    if(userRegex.test(user)){
        userMsg.innerText="";
    }else{
        userMsg.innerText="* Please fill the username field correctly (name123)";
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
      emailMsg.innerText="* Email must be standard";
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
      pswMsg.innerText="* Password should start with a capital and end with 3 numbers";
      event.preventDefault();
  }

}




});
