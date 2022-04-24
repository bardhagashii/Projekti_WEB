<?php
session_start();
if(!isset($_SESSION['username'])){
 header("location:logIn.php");
}else{
 if($_SESSION['role'] != "admin"){
    header("location:index.php");
 }
include 'includes/header.php';

		include_once './repository/productsRepository.php'; 

	    $productId = $_GET['id'];
		$productRepository = new ProductRepository();
		$product  = $productRepository->getProductbyId($productId);
	?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Product</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<main>

<div  class="edittable">
    
<form action="" method="POST" >
<h5>ProductID:</h5>
    <input type="text" name="id" value="<?=$product['ProductID']?>" readonly>  <br>

    <h5>Product Name:</h5>
    <input type="text" name="prdname" value="<?=$product['ProductName']?>"> <br>
   
    <h5>Product Text:</h5>
    <input type="text" name="prdtext" value="<?=$product['ProductText']?>"><br>

    <h5>Collection:</h5>
    <input type="text" name="collection" value="<?=$product['Collection']?>"> <br>

    <h5>Price:</h5>
    <input type="text" name="price" value="<?=$product['Price']?>"><br>


    <input type="submit" class = "btn" name="updateProduct" value="UPDATE">

</form>
<?php include_once './controller/productController.php';
include 'includes/footer.php';?>

</div>
</main>
</html>
<?php } ?>
