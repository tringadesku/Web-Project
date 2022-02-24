<?php

session_start();
$userId = $_GET['id'];
include_once 'usersRepo.php';

$userRepository = new usersRepo();
$userRepository->deleteUser($userId);

header("location:manageUsers.php");


?>