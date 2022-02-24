<?php
include_once 'usersRepo.php';
include_once 'users.php';

	if(isset($_POST['updateButton'])){
	   	$userId = $_GET['id'];
		  $userRepository = new usersRepo();

	    $fname = $_POST['fname'];
	    $lname = $_POST['lname'];
	    $username = $_POST['username'];
	    $email = $_POST['email'];
	    $password = $_POST['password'];
	    $role = $_POST['role'];

	    $userRepository->updateUser($userId,$fname,$lname,$username,$email,$password,$role);
	   		header("location:manageUsers.php");
	}
	else if(isset($_POST['registerButton'])){
        if(!(empty($_POST['fname'])) && !(empty($_POST['lname'])) && !(empty($_POST['username'])) &&
        !(empty($_POST['email'])) && !(empty($_POST['password']))){
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $role = 'user';

            $user  = new User($fname,$lname,$username,$email,$password,$role);
            $userRepository = new usersRepo();

            if($userRepository->checkEmail($user)){
                echo "<script> alert('Email already exists!'); </script>";
            }
            elseif($userRepository->checkUsername($user)){
                echo "<script> alert('Username already exists!'); </script>";
            }
            else{
                $userRepository->insertUser($user);
                header("location:login.php");
            }
        }
    }
    else if(isset($_POST['loginButton'])){
       if(!(empty($_POST['username'])) && !(empty($_POST['password']))){
           $username = $_POST['username'];
           $password = $_POST['password'];

            include_once 'usersRepo.php';
            $userRepository = new usersRepo();
            
            if((count($userRepository->getUserByUsername($username))) == 0){
            	echo "<script> alert('Useri nuk ekziston!'); </script>";
            }
            else if((count($userRepository->getUserPassword($password))) == 0){
            	echo "<script> alert('Passwordi eshte dhene gabim!'); </script>";
           	}
            else{
            	   session_start();
            	   $_SESSION['username'] = $username;
                   $_SESSION['password'] = $password;

                   if((count($userRepository->checkRole($username))) == 0){
                   		$_SESSION["role"] = "admin";
                   }
                   else{
                   		$_SESSION["role"] = "user";
                   }
                   header("location:profile.php");

                   
                   exit();

            }
       }

     }


?>