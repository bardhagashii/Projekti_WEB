<?php
session_start();
$admin = $_SESSION['username'];
$productID = $_GET['id'];
include_once './repository/productsRepository.php';




$productRepository = new ProductRepository();


$productRepository->deleteProduct($productID);

include_once './repository/activityRepository.php';
        
        $activity = "DELETED";

        $activityRepository = new activityRepository();
        $data = date("Y-m-d h:i");
        $activityRepository->ActivityOnProduct(null,$admin,$activity,null, $productID,$data);

header("location:manageProducts.php");


?>
