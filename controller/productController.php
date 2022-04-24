<?php
$admin = $_SESSION['username'];
include_once './repository/productsRepository.php';
include_once './models/products.php';

    if(isset($_POST['updateProduct'])){
        $productId = $_GET['id'];
        $productRepository = new ProductRepository();

        $productName = $_POST['prdname'];
        $productText = $_POST['prdtext'];
        $collection = $_POST['collection'];
        $price = $_POST['price'];


        $productRepository->updateProduct($productId,$productName,$productText,$collection,$price);

        include_once './repository/activityRepository.php';
        
        $activity = "UPDATED";

        $activityRepository = new activityRepository();
        $data = date("Y-m-d h:i");
        $activityRepository->ActivityOnProduct(null,$admin,$activity,null,$productName,$data);

        header("location:manageProducts.php");
    }
    if(isset($_POST['addProduct'])){
        if(empty($_POST['prdname']) || empty($_POST['prdtext']) || empty($_POST['collection']) ||
        empty($_POST['price'])){
        }else{
            $productID = rand(0,100);
            $productName = $_POST['prdname'];
            $productText = $_POST['prdtext'];
            $collection = $_POST['collection'];
            $price = $_POST['price'];
           
            $product  = new Product($productID,$productName,$productText,$collection,$price);
            $productRepo = new ProductRepository();
    
            $productRepo->insertProduct($product);

            include_once './repository/activityRepository.php';
        
        $activity = "ADDED";

        $activityRepository = new activityRepository();
        $data = date("Y-m-d h:i");
        $activityRepository->ActivityOnProduct(null,$admin,$activity,null,$productName,$data);



            header("location:manageProducts.php");
    }
    }

?>