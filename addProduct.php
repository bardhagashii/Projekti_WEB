<?php 
include 'includes/header.php';
session_start();

if(!isset($_SESSION['username'])){
 header("location:logIn.php");
}else{
 if($_SESSION['role'] != "admin"){
    header("location:index.php");
 }


?>

<html>
<head>
    <title>Add Product</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <main>
<div  class="edittable">
    
<form action="" method="POST" >

    <h5>Product Name:</h5>
     <input type="text" id="prdname" name="prdname" >
   
    <h5>Product Text:</h5>
    <input type="text" id="prdtext" name="prdtext" >

    <h5>Collection:</h5>
    <input type="text" id="collection" name="collection" >

    <h5>Price:</h5>
    <input type="text" id="price" name="price" > <br>

    <input type="submit" class ="btn" id="add" name = "addProduct" value ="ADD">

</form>
<?php include './controller/productController.php';?>
</div>
</main>
<?php include 'includes/footer.php';?>
</body>
</html>

<?php } ?>
