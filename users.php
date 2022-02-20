<?php

	class User{
	    private $fname;
	    private $lname;
	    private $username;
	    private $email;
	    private $password;
	    private $role;



    	function __construct($fname,$lname,$username,$email,$password,$role){
            $this->fname = $fname;
            $this->lname = $lname;
            $this->username = $username;
            $this->email = $email;
            $this->password = $password;
            $this->role = $role;

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