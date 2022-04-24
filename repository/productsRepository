<?php 
include_once './database/databaseConnection.php';

class ProductRepository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConnection;
        $this->connection = $conn->startConnection();
    }


    function insertProduct($product){
        $connect = $this->connection;

        $productID = $product->getProductID();
        $productName = $product->getProductName();
        $productText = $product->getProductText();
        $collection = $product->getProductCollection();
        $price = $product->getProductPrice();

        $sql = "INSERT INTO products (ProductID,ProductName,ProductText,Collection,Price) VALUES (?,?,?,?,?)";

        $statement = $connect->prepare($sql);

        $statement->execute([$productID,$productName,$productText,$collection,$price]);

        echo "<script> alert('Product has been inserted successfully!'); </script>";

    }
    function getAllProducts(){
        $conn = $this->connection;

        $sql = "SELECT * FROM products";

        $statement = $conn->query($sql);
        $products = $statement->fetchAll();

        return $products;
    }

    function getProductById($productID){
        $connect = $this->connection;

        $sql = "SELECT * FROM products WHERE ProductID='$productID'";

        $statement = $connect->query($sql);
        $product = $statement->fetch();

        return $product;
    }

       function updateProduct($productID,$productName,$productText,$collection,$price){
	         $connect = $this->connection;

	         $sql = "UPDATE products SET ProductName=?, ProductText=?, Collection=?, Price=? WHERE ProductID=?";

	         $statement = $connect->prepare($sql);

	         $statement->execute([$productName,$productText,$collection,$price,$productID]);
	    }

        function deleteProduct($productID){
	        $connect = $this->connection;

	        $sql = "DELETE FROM products WHERE ProductID=?";

	        $statement = $connect->prepare($sql);

	        $statement->execute([$productID]);
	   } 
}
/*$productRepo = new ProductRepository;
$productRepo->insertProduct();
*/
?>
