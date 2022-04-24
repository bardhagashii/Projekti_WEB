<?php
session_start();
include 'includes/header.php';

if(!isset($_SESSION['username'])){
 header("location:logIn.php");
}else{
 if($_SESSION['role'] != "admin"){
    header("location:index.php");
 }

?>
<!DOCTYPE html>
<html>

<head>
    <title>Manage Products</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<div class="account">
				<img class="nav-link" src="img/avatar.png" alt="avatar-icon" height="24px">

				<?php if(isset($_SESSION['username'])){
					echo "<p class='nav-link'><a href='dashboard.php'>".$_SESSION['username']." Profile</a></p>";
				}
				else{
					echo "<p class='nav-link'><a href='logIn.php' target='_blank'>Account</a></p>";
				}
					?>		
			</div>
<body>

<div style="overflow-x: auto;"> 
<table border="1">
    <tr style="background-color: lightgreen;">
                 <th>ProductID</th>
                 <th>Emri i produktit</th>
                 <th>Pershkrimi</th>
                 <th>Koleksioni</th>
                 <th>Cmimi</th>
            
             </tr>
            	
             <?php 
             include_once './repository/productsRepository.php';

             $productRepo = new ProductRepository();

             $products = $productRepo->getAllProducts();

             foreach($products as $product){
                echo 
                "
                <tr>
                     <td>$product[ProductID]</td>
                     <td>$product[ProductName]</td>
                     <td>$product[ProductText] </td>
                     <td>$product[Collection] </td>
                     <td>$product[Price] </td>
                     <td> <a href='edit-Product.php?id=$product[ProductID]'>
                     <input class = 'btn' type='submit' value='EDIT'>
                  </a></td>
                  <td> <a href='delete-Product.php?id=$product[ProductID]'>
                  <input class = 'btn' type='submit' value='DELETE'>
               </a></td>
                     
                </tr>
                ";
             }
             
             ?>
    </table>
            </div>
            <a href='addProduct.php' style>
			<input class='addbtn' type='submit' value='ADD PRODUCT'>
		</a>
      
        
    <?php include_once 'includes/footer.php'; ?>
</body>

</html>
<?php } ?>
