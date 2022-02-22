<?php
include_once 'usersRepo.php';
include_once 'users.php';

   if(isset($_POST['loginButton'])){
       if(!(empty($_POST['username'])) || !(empty($_POST['password']))){
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