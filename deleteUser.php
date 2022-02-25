<?php

session_start();
$userId = $_GET['id'];
include_once 'usersRepo.php';

$userRepository = new usersRepo();
$user = $userRepository->getUserById($userId);
$username = $user['Username'];

//e fshin
$userRepository->deleteUser($userId);

//e run ne log
include_once 'activityRepo.php';
$admin = $_SESSION['username'];
$activity = "DELETED";

$activityRepository = new activityRepo();
$activityRepository->saveActivityOnUser($admin,$activity,$username);



header("location:manageUsers.php");


?>