<?php
include 'includes/header.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Contact</title>


        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
       

    </head>
    <body>

         <div class="contact-banner"></div>
    </body>

    <div class="contact">
        <div class="container">
            <div class="contact-info">
               <br><h2 style="color: rgb(20, 121, 54);">
                    Contact Methods
                </h2><br>
                
                <p><i style="color: black;" class="far fa-envelope fa-1x"></i>
                </i><b> Email:</b>Contact us using the form above for customer service, 24 hours a day, 7 days a week.</p></p>
              <br><p><i style="color: black;" class="fas fa-phone-alt fa-1x"></i>
                <b>Phone:</b>For questions about an order you have placed, please call 1-234-567-1408.</p></p></br>
            </div>
            <div class="contact-form">
                <form action="action_page.php">
                    <label for="customer service"></label>
                      <h2>I have a question about:</h2>
                    <select id="customer" name="customer service">
                        <option value="Website Suggestions">Website Suggestions</option>
                        <option value="Customer service">Customer Service</option>
                        <option value="Orders">Orders</option>
                        <option value="Products in sale">Products in sale</option>
                    
                    </select>



                    <label for="orderid">Order ID</label>
                    <input type="number" id="orderid" name="orderid" placeholder="Your Order ID..">
                    <label for="email">Your Email Address</label>
                    <input type="email" id="email" name="email" placeholder="Your Email Address..">
                    <label for="details">Details</label>
                    <textarea id="details" name="details" placeholder="Write something.." style="height:100px"></textarea>
                     <input type="submit" value="Submit">
    
                </form>
            </div>
            
        </div>
    </div>
</div>
<?php include 'includes/footer.php'; ?>
</body>
</html>
</html>
