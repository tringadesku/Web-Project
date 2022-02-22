<?php
include_once 'usersRepo.php';
include_once 'users.php';

		$userId = $_GET['id'];
		$userRepository = new usersRepo();

	    if(isset($_POST['updateButton'])){
	    $fname = $_POST['fname'];
	    $lname = $_POST['lname'];
	    $username = $_POST['username'];
	    $email = $_POST['email'];
	    $password = $_POST['password'];
	    $role = $_POST['role'];

	    $userRepository->updateUser($userId,$fname,$lname,$username,$email,$password,$role);
	    header("location:dashboard.php");
		}
?>