<?php

	class User{
	    private $username;
	    private $email;
	    private $password;
	    private $role;



    	function __construct($username,$email,$password,$role){
            $this->username = $username;
            $this->email = $email;
            $this->password = $password;
            $this->role = $role;

    	}

   		function getUsername(){
       		return $this->username;
   		}

   		function getEmail(){
       		return $this->email;
   		}

   		function getPassword(){
      		return $this->password;
   		}

   		function getRole(){
   			return $this->role;
   		}
	}
?> 