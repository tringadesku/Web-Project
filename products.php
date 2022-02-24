<?php

	class Product{
		private $productName;
		private $productText;
		private $collection;
		private $price;

		function __construct($productName, $productText, $collection, $price){
			$this->productName = $productName;
			$this->productText = $productText;
			$this->collection = $collection;
			$this->price = $price;
		}

		function getProductName(){
       	   	return $this->productName;
   		}

    	function getProductText(){
        	return $this->productText;
   		}

   		function getProductCollection(){
       		return $this->collection;
   		}

   		function getProductPrice(){
       		return $this->price;
   		}

	}
?>