<?php

session_start();
$productId = $_GET['id'];
include_once 'productsRepo.php';

$productsRepository = new productsRepo();
$product = $productsRepository->getProductById($productId);
$productName = $product['ProductName'];

//e fshin
$productsRepository->deleteProduct($productId);

//e run ne log qe e ka fshi
include_once 'activityRepo.php';
$admin = $_SESSION['username'];
$activity = "DELETED";

$activityRepository = new activityRepo();
$activityRepository->saveActivityOnProduct($admin,$activity,$productName);

header("location:manageProducts.php");


?>