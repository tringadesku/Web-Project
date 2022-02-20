<?php
include_once 'databaseConnection.php';

	class usersRepo{
		private $connection;

		function __construct(){
			$connect = new DatabaseConnection; //instanc, ja kena lon emrin e njejt si $connect te klasa dtbConnection 
												//se posht kena me barazu me $connection me $connect qe e kthen funksioni
												//startConnection
			$this->connection = $connect->startConnection();
			//$connection pe barazon me $connect qe vjen frej funksionit startCon. 
		}

	    function insertUser($user){

	        $connect = $this->connection;

	        $fname = $user->getFname();
	        $lname = $user->getLname();
	        $username = $user->getUsername();
	        $email = $user->getEmail();
	        $password = $user->getPassword();
	        $role = $user->getRole();

	        $sql = "INSERT INTO users (Emri,Mbiemri,Username,Email,Password,Role) VALUES (?,?,?,?,?,?)";

	        $statement = $connect->prepare($sql);

	        $statement->execute([$fname,$lname,$username,$email,$password,$role]);

	        echo "<script> alert('User has been inserted successfuly!'); </script>";

	    }
	}

?>