<?php
include_once 'productsRepo.php';
include_once 'products.php';

    if(isset($_POST['insertProductButton'])){
        if(empty($_POST['productName']) || empty($_POST['productText'])
        	|| empty($_POST['collection']) || empty($_POST['price'])){
        		echo "<script> alert('Fill All Fields!'); </script>";
    	}
    	else{
    		$productName = $_POST['productName'];
            $productText = $_POST['productText'];
            $collection = $_POST['collection'];
            $price = $_POST['price'];

            $product  = new Product($productName,$productText,$collection,$price);
            $productRepository = new productsRepo();

            if($productRepository->checkIfExists($product)){
                echo "<script> alert('Product already exists!'); </script>";
            }else{
                $productRepository->insertProduct($product);
                header("location:manageProducts.php");
            }

        }
	}
    else if(isset($_POST['updateProductButton'])){
        $productId = $_GET['id'];
        $productsRepository = new productsRepo();

        $productName = $_POST['productName'];
        $productText = $_POST['productText'];
        $collection = $_POST['collection'];
        $price = $_POST['price'];

        $productsRepository->updateProduct($productId,$productName,$productText,$collection,$price);
        header("location:manageProducts.php");
    }

?>