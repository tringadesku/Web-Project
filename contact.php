<?php
	class Contact{
		private $message;
		private $email;

		function __construct($message,$email){
			$this->message = $message;
			$this->email = $email;
		}

		function getMessage(){
       	   	return $this->message;
   		}

    	function getEmail(){
        	return $this->email;
   		}
	}
?>