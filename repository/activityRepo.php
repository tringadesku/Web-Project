<?php

include_once '../database/databaseConnection.php';

	class activityRepo{ 
		private $connection;

		function __construct(){
			$connect = new DatabaseConnection;
			$this->connection = $connect->startConnection();
		}

		function saveActivityOnProduct($admin,$activity,$product){
			$connect = $this->connection;
			$data = date("Y-m-d h:i");

			$sql = "INSERT INTO activitylog (Admin,Activity,Product,Date_Time) VALUES (?,?,?,?)";
		    $statement = $connect->prepare($sql);

	        $statement->execute([$admin,$activity,$product,$data]);
		}

		function saveActivityOnUser($admin,$activity,$user){
			$connect = $this->connection;
			$data = date("Y-m-d h:i");

			$sql = "INSERT INTO activitylog (Admin,Activity,User,Date_Time) VALUES (?,?,?,?)";
		    $statement = $connect->prepare($sql);

	        $statement->execute([$admin,$activity,$user,$data]);
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
