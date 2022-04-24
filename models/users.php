<?php

	class User{
		private $id;
	    private $fname;
	    private $lname;
	    private $username;
	    private $email;
	    private $password;
	    private $role;



    	function __construct($id,$fname,$lname,$username,$email,$password,$role){
			$this->id = $id;
            $this->fname = $fname;
            $this->lname = $lname;
            $this->username = $username;
            $this->email = $email;
            $this->password = $password;
            $this->role = $role;

    	}
		function getId(){
			return $this->id;
		}
    	function getFname(){
       	   	return $this->fname;
   		}

    	function getLname(){
        	return $this->lname;
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
