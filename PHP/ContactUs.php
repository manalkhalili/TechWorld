<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="../Css/ContactUs.css" >
    <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.3.1/css/all.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../Css/navbar1.css">

</head>
<body>
<?php

if(isset($_SESSION['Email'])){
    include "navbar1.php";
}else{
    include "navbar2.php";
}
?>
<div class="containerr">
    <span class="big-circle"></span>
    <img src="" class="square" alt="" />
    <div class="form">
        <div class="contact-info">
            <h3 class="title">Let's get in touch</h3>
            <p class="text">
                hello, here you can contact with us and tell us you're opinion about our website
                or if you have any criticism we are happy to read it to improve
                ourself
            </p>

            <div class="info">
                <div class="information">
                    <p>Palestine, nablus</p>
                </div>
                <div class="information">
                    <p>techworld@gmail.com</p>
                </div>
                <div class="information">
                    <p>123-456-789</p>
                </div>
            </div>

            <div class="social-media">
                <p>Connect with us :</p>
                <div class="social-icons">
                    <a href="#">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="contact-form">
            <span class="circle one"></span>
            <span class="circle two"></span>
            <?php
            if (isset($_POST['submit'])) {
                $db=mysqli_connect('localhost','root','','techworld');
                if ($db->connect_error) {
                    die("Connection failed: " . $db->connect_error);
                }
                $username=$_POST['username'];
                $email=  $_POST['email'];
                $phone=$_POST['phone'];
                $message=$_POST['message'];
                echo '<script type="text/javascript">window.alert("'.$username.$email.$phone.$message.'");</script>';
                $sql="INSERT INTO contact (username,UserEmail,phone,message) VALUES('$username','$email','$phone','$message')";
                $result = mysqli_query($db, $sql);
            }
            ?>
            <form  method="post" action="ContactUs.php" >
                <h3 class="title">Contact us</h3>
                <div class="input-container">
                    <label >Username</label>
                    <input type="text" name="username" class="input" />

                </div>
                <div class="input-container">
                    <label >Email</label>
                    <input type="email" name="email" class="input" />

                </div>
                <div class="input-container">
                    <label >Phone</label>
                    <input type="tel" name="phone" class="input" />

                </div>
                <div class="input-container textarea">
                    <label >Message</label>
                    <textarea name="message" class="input"></textarea>

                </div>
                <button type="submit" value="Send" name="submit" class="btnn" onclick="" >Send</button>
            </form>
        </div>
    </div>
</div>
<div class="wrapper" id="wrapper">
    <h1>Our Team</h1>
    <div class="team">
        <div class="team_member">
            <div class="team_img">
                <img src="../Imgs/Farah.jpeg" alt="Team_image">
            </div>
            <h3>Farah Touqan</h3>
            <p class="role">UI developer</p>
            <p>.</p>
        </div>
        <div class="team_member">
            <div class="team_img">
                <img src="../Imgs/jj.jpeg" alt="Team_image">
            </div>
            <h3>Manal Khalili</h3>
            <p class="role">Tester</p>
            <p>.</p></div>

    </div>
</div>
</body>
</html>