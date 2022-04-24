
<?php include 'includes/header.php'; 
session_start();

?>
<!DOCTYPE html>
<html>

<head>
    <title>Home</title>


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
    <header>

        <div class="welcome-text">
            <h1>Let us be your Best Decision</h1>
        </div>
    </header>

    <div class="home-banner">
    </div>

    <div class="featured">
        <div class="div2">
            <div style="text-align: center; margin-top: 70px; margin-bottom: 40px;">
                <h2>Featured Products</h2>
            </div>
            <div class="box">
                <img src="img/legion5pro.jpg" alt="Lenovo Legion" width="150" height="180">
                <p style="color:black">Lenovo Legion 5 Pro Gen 6 AMD Gaming Laptop</p>

                <a href="https://www.amazon.com/Lenovo-Legion-Pro-Gaming-GeForce/dp/B09923Z7MN" target="_blank"
                    class="myButton">Buy</a>
            </div>
            <div class="box">
                <img src="img/thinkpad.png" alt="ThinkPad" width="200" height="180">
                <p style="color:black">ThinkPad X1 Carbon Gen 9 (14", Intel) Laptop</p>
                <a href="https://www.amazon.com/Lenovo-ThinkPad-Ultrabook-i5-1135G7-20XW004KUS/dp/B091B7K5R4"
                    target="_blank" class="myButton">Buy</a>
            </div>
            <div class="box">
                <img src="img/leg7.png" alt="legion 7i" width="200" height="180">
                <p style="color:black">Legion 7i Gen 6 (16" Intel) Gaming Laptop</p>

                <a href="https://www.lenovo.com/us/en/p/laptops/legion-laptops/legion-7-series/legion-7i-gen-6-(16%E2%80%B3-intel)/len101g0002?orgRef=https%253A%252F%252Fwww.google.com"
                    target="_blank" class="myButton">Buy</a>
            </div>
            <div class="box">
                <img src="img/yoga.jpg" alt="Yoga" width="180" height="180">
                <p style="color:black">Yoga 9i (14") 2in1 laptop</p>

                <a href="https://www.amazon.com/Lenovo-Touch-Screen-Platform-i7-1185G7-16GB-Built/dp/B08QH1C5PY" target="_blank"
                    class="myButton">Buy</a>
            </div>
        </div>
    </div>

    <div class="contact-us">
        <div class="heading-design">
            <div class="icon-box">
                <i style="font-size:65px"class="fas fa-tablet-alt"></i>
                <h2>Tablets</h2>
            </div>
            <div class="icon-box">
                <i style="font-size:65px" class="fas fa-mouse"></i>
                <h2>Accessories</h2>
            </div>
            <div class="icon-box">
                <i style="font-size:65px"  class ="fas fa-desktop"></i>
                <h2>Monitors</h2>
                <h2></h2>
            </div>
        </div>
    </div>
  
    
        <div class="div2">
            <div style="text-align: center; margin-top: 70px; margin-bottom: 40px;">
                <h2>Payment Method</h2>

            </div>
            <div class="box-33">
                <img src="img/visa.png" alt="Visa" width="100" height="140">
           
            </div>
            <div class="box-33">
                <img src="img/paypal.png" alt="Paypal" width="150" height="150">
            </div>
            <div class="box-33">
                <img src="img/mastercard.png" alt="mastercard" width="120" height="140">
            </div>
        </div>
    </div>
   
    <?php include 'includes/footer.php'; ?>


</body>

</html>
