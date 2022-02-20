<?php 

	class DatabaseConnection{

		function startConnection(){
			try{
				$connect = new PDO('mysql:host=localhost;dbname=funcases', 'root',''); //server, db, username, password
				$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            	return $connect; //e kthen qat PDO qe me mujt me perdor nfaqe tjera per me bo lidhjen me db
			}catch(PDOException $e){
				echo "Database Conenction Failed".$e->getMessage();
           		return null;
			}
		}
	}
?>