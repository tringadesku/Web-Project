<?php

session_start();
$productId = $_GET['id'];
include_once 'productsRepo.php';

$productsRepository = new productsRepo();
$productsRepository->deleteProduct($productId);

header("location:manageProducts.php");


?>