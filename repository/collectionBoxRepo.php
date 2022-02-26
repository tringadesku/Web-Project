<?php
include_once '../database/databaseConnection.php';

	class collectionBoxRepo{
		private $connection;

		function __construct(){
			$connect = new DatabaseConnection;
			$this->connection = $connect->startConnection();
		}

	    function getAllBoxes(){
	        $connect = $this->connection;

	        $sql = "SELECT * FROM collectionBoxes";

	        $statement = $connect->query($sql);
	        $allBoxes = $statement->fetchAll();

	        return $allBoxes;
	    }
	}

?>