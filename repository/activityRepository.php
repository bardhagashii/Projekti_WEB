<?php
include_once './database/databaseConnection.php';

	class activityRepository{ 
		private $connection;

		function __construct(){
			$connect = new DatabaseConnection;
			$this->connection = $connect->startConnection();
		}

		function ActivityOnProduct($id,$admin,$activity,$user,$product){
			$connect = $this->connection;
			$data = date("Y-m-d h:i");

			$sql = "INSERT INTO activitypage (ID,Admin,Activity,User,Product,Date_Time) VALUES (?,?,?,?,?,?)";
		    $statement = $connect->prepare($sql);

	        $statement->execute([$id,$admin,$activity,$user,$product,$data]);
		}

		function ActivityOnUser($id,$admin,$activity,$user,$product){
			$connect = $this->connection;
			$data = date("Y-m-d h:i");

			$sql = "INSERT INTO activitypage (ID,Admin,Activity,User,Product,Date_Time) VALUES (?,?,?,?,?,?)";
		    $statement = $connect->prepare($sql);

	        $statement->execute([$id,$admin,$activity,$user,$product,$data]);
		}

		function readActivities(){
	        $connect = $this->connection;

	        $sql = "SELECT * FROM activitypage";

	        $statement = $connect->query($sql);
	        $activities = $statement->fetchAll();

	        return $activities;
		}
	}


?>
