<?php
include_once 'usersRepo.php';
include_once 'users.php';

    if(isset($_POST['registerButton'])){
        if(!(empty($_POST['fname'])) || !(empty($_POST['lname'])) || !(empty($_POST['username'])) ||
        !(empty($_POST['email'])) || !(empty($_POST['password']))){
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $role = 'user';

            $user  = new User($fname,$lname,$username,$email,$password,$role);
            $userRepository = new usersRepo();

            $userRepository->insertUser($user);
            header("location:login.php");
        }
    }
    



?>