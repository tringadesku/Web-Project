<?php

session_start();
$userId = $_GET['id'];
include_once '../repository/usersRepo.php';

$userRepository = new usersRepo();
//marrim username te atij qe po e fshijme
$user = $userRepository->getUserById($userId);
$username = $user['Username'];

//e fshin
$userRepository->deleteUser($userId);

//e run ne log
include_once '../repository/activityRepo.php';
$admin = $_SESSION['username'];
$activity = "DELETED";

$activityRepository = new activityRepo();
$activityRepository->saveActivityOnUser($admin,$activity,$username);



header("location:../view/manageUsers.php");


?>