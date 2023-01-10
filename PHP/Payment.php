<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/Payment.css">
    <title>Payment-page</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>
<!--add navbar start-->
<?php
if(isset($_SESSION['Email'])){
    include "navbar1.php";
}else{
    include "navbar2.php";
}
?>
<!--navbar end-->

<form action="Payment.php" method="post" >
    <h1 style="margin-left: 0">Payment</h1><br><br>
    <div class="div1">
        <label for="fname">First name</label><br>
        <input class="box1" type="text" name="fname" id="fname" placeholder="Enter first Name"><br>
    </div>
    <div class="div1">
        <label for="lname">Last name</label><br>
        <input class="box1" type="text" name="lname" id="lname" placeholder="Enter last Name"><br>
    </div>
   <div class="div1">
       <label for="pemail">Enter email</label><br>
       <input class="box3" type="text" name="Pemail" id="Pemail" placeholder="Enter Email"><br>
   </div><br><br>
    <div class="div2">
        <label for="phone">Phone number</label><br>
        <input class="box3" type="number" name="Pemail" id="phone" placeholder="Phone number"><br>
    </div>
    <div class="div2">
        <label for="cnum">Card number</label><br>
        <input class="box3" type="number" name="cardNumber" id="cnum" placeholder="1234 1234 1234 1234"><br>
    </div>

    <div class="div2">
        <label for="address">Address</label><br>
        <input class="box2" type="text" name="address" id="address" placeholder="Address"><br>
    </div><br><br>
    <div class="div3">
        <label for="city">City</label><br>
        <input class="box2" type="text" name="city" id="city" placeholder="your city"><br>
    </div>
    <div class="div3">
        <label for="zip">ZIP</label><br>
        <input class="box2" type="number" name="zip" id="zip" placeholder="Zip"><br>
    </div>
    <br><br>
        <button class="btn" type="submit" style="color: white; background-color: #001a4d; margin-left: 0">Pay now</button>
</form>
</body>
</html>