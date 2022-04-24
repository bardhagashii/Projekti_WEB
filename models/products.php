<?php

	class Product{
		private $productID;
		private $productName;
		private $productText;
		private $collection;
		private $price;

		function __construct($productID, $productName, $productText, $collection, $price){
			$this->productID = $productID;
			$this->productName = $productName;
			$this->productText = $productText;
			$this->collection = $collection;
			$this->price = $price;
		}


		function getProductID(){
			return $this->productID;
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
