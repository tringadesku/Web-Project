<?php

include_once 'databaseConnection.php';

	class activityRepo{ 
		private $connection;

		function __construct(){
			$connect = new DatabaseConnection;
			$this->connection = $connect->startConnection();
		}

		function saveActivityOnProduct($admin,$activity,$product){
			$connect = $this->connection;

			$sql = "INSERT INTO activitylog (Admin,Activity,Product) VALUES (?,?,?)";
		    $statement = $connect->prepare($sql);

	        $statement->execute([$admin,$activity,$product]);
		}

		function saveActivityOnUser($admin,$activity,$user){
			$connect = $this->connection;

			$sql = "INSERT INTO activitylog (Admin,Activity,User) VALUES (?,?,?)";
		    $statement = $connect->prepare($sql);

	        $statement->execute([$admin,$activity,$user]);
		}

		function readActivities(){
	        $connect = $this->connection;

	        $sql = "SELECT * FROM activitylog";

	        $statement = $connect->query($sql);
	        $activities = $statement->fetchAll();

	        return $activities;
		}
	}


?>
