<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WowFood Order</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
     <!-- Start Header -->
     <div class="navigator">
            <div class="container">
               <div class="logo">
                   <img src="images/logo.png" alt="Restaurant Logo" class="img-responsive">
               </div>
               <div class="menu text-right">
                   <ul>
                       <li>
                           <a href="index.php">Home</a>
                       </li>
                       <li>
                           <a href="categories.php">Categories</a>
                       </li>
                       <li>
                           <a href="food.php">Foods</a>
                       </li>
                       <li>
                           <a href="#">Contact</a>
                       </li>
                   </ul>
               </div>
               <div class="clear-fix"></div>
            </div>
    </div>
    <!-- End Header -->

    <!-- Start Order -->
         <div class="order">
            <div class="order-quanity">
                <h2 class="text-center font-white">Fill this form to comfirm your order.</h2>
                <form action="#" class="list-order">
                    <fieldset class="fieldset-css">
                        <legend>Selected Foods</legend>
                        <div class="order-img">
                            <img src="./images/menu-pizza.jpg" alt="" class="img-responsive img-curve">
                        </div>
                        <class class="order-desc">
                            <h3 class="order-labor">Food Title</h3>
                            <h4>$2.3</h4>
                            <div class="order-labor">Quantity</div>
                            <input class="order-input border-css" type="number" placeholder="1">
                        </class>
                    </fieldset>

                    <fieldset class="fieldset-css">
                        <legend>Delivery Details</legend>
                        <div class="delivery-labor">Full Name</div>
                        <input type="text" class="delivery-input border-css" placeholder="E.g. duke">
                        <div class="delivery-labor">Phone Number</div>
                        <input type="tel" class="delivery-input border-css" placeholder="E.g. 01234xxxx">
                        <div class="delivery-labor">Email</div>
                        <input type="email" class="delivery-input border-css" placeholder="E.g. abcxyz@xxx.com">
                        <div class="delivery-labor">Address</div>
                        <textarea name="address" class="delivery-input-address" rows="10" placeholder="E.g. Street, City, Country"></textarea>
                        <input type="submit" class="button button-primary" value="Comfirm Order">
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <!-- End Order -->

     <!-- Start Social Media -->
     <div class="social-media">
            <div class="container text-right text-center">
                <ul>
                    <li>
                        <a href="#"><img src="images/facebook_icon.png" alt="#"></a>
                    </li>
                    <li>
                        <a href="#"><img src="images/insta_icon.png" alt=""></a>
                    </li>
                    <li>
                        <a href="#"><img src="images/twitter_icon.png" alt=""></a>
                    </li>
                </ul>
            </div>
    </div>
    <!-- End Social Media -->

    <!-- Start Footer -->
    <div class="footer">
             <!--COPYRIGHT-->
             <div class="container">
                <p>All rights reserved. Designed By <a href="#">CSE TLU</a></p>
            </div>
    </div>
    <!-- End Footer -->
</body>
</html>