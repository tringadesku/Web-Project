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

	    function getAllUsers(){
	        $connect = $this->connection;

	        $sql = "SELECT * FROM users";

	        $statement = $connect->query($sql);
	        $allUsers = $statement->fetchAll();

	        return $allUsers;
 	    }

	    function getUserByUsername($username){
	        $connect = $this->connection;

	        $sql = "SELECT * FROM users WHERE Username='$username'";

	        $statement = $connect->query($sql);
	        $user_username = $statement->fetchAll();

	        return $user_username;
	    }

	    function getUserPassword($password){
	        $connect = $this->connection;

	        $sql = "SELECT * FROM users WHERE Password='$password'";

	        $statement = $connect->query($sql);
	        $user_password = $statement->fetchAll();

	        return $user_password;
	    }

	    function checkRole($username){
	        $connect = $this->connection;

	        $sql = "SELECT * FROM users WHERE Username='$username' AND Role='user'";

	        $statement = $connect->query($sql);
	        $user_role = $statement->fetchAll();

			return $user_role;	
	    }

	    function getUserById($id){
	        $connect = $this->connection;

	        $sql = "SELECT * FROM users WHERE ID='$id'";

	        $statement = $connect->query($sql);
	        $user = $statement->fetch();

	        return $user;
	    }

	    function updateUser($id,$fname,$lname,$username,$email,$password,$role){
	         $connect = $this->connection;

	         $sql = "UPDATE users SET Emri=?, Mbiemri=?, Username=?, Email=?, Password=?, Role=? WHERE id=?";

	         $statement = $connect->prepare($sql);

	         $statement->execute([$fname,$lname,$username,$email,$password,$role,$id]);

	         echo "<script>alert('update was successful'); </script>";
	    } 

	    function deleteUser($id){
	        $connect = $this->connection;

	        $sql = "DELETE FROM users WHERE id=?";

	        $statement = $connect->prepare($sql);

	        $statement->execute([$id]);

	        echo "<script>alert('delete was successful'); </script>";
	   } 

	}

?>