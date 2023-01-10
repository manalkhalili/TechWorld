<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
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
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="../Css/Products.css">

</head>
</style>
<body>
<?php
if(isset($_SESSION['Email'])){
    include "navbar1.php";
}else{
    include "navbar2.php";
}
?>
<div class="container">
    <div class="card">
        <div class="box">
            <div class="content">
                <div class="img">
                    <img src="../Imgs/laptop3.jpg" alt="">
                </div> <h3 style="color: black">
                    LAPTOP
                </h3>

                <a href="laptops.php">
                    Show more
                </a>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="box">
            <div class="content">
                <div class="img">
                    <img src="../Imgs/microphone.jpg" alt="">
                </div>
                <h3 style="color: black">
                    MICROPHONE
                </h3>
                <a href="microphones.php">
                    Show more
                </a>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="box">
            <div class="content">
                <div class="img">
                    <img src="../Imgs/kAndm1.jfif" alt="">
                </div>
                <h3 style="color: black">
                    KEYBOARD AND MOUSE
                </h3>
                <a href="KeyboardandMouse.php">
                    Show more
                </a>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="box">
            <div class="content">
                <div class="img">
                    <img src="../Imgs/headset1.jpg" alt="">
                </div>
                <h3 style="color: black">
                    HEADSET
                </h3>
                <a href="Headsets.php">
                    Show more
                </a>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="box">
            <div class="content">
                <div class="img">
                    <img src="../Imgs/ram.jpg" alt="">
                </div>
                <h3 style="color: black">
                    RAM
                </h3>
                <a href="Rams.php">
                    Show more
                </a>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="box">
            <div class="content">
                <div class="img">
                    <img src="../Imgs/monitor.jpg" alt="">
                </div>
                <h3 style="color: black">
                    MONITOR
                </h3>
                <a href="Monitors.php">
                    Show more
                </a>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="box">
            <div class="content">
                <div class="img">
                    <img src="../Imgs/ssd-category.png" alt="">
                </div>
                <h3 style="color: black">
                    SSD FOR COMPUTERS
                </h3>
                <a href="Ssd.php">
                    Show more
                </a>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="box">
            <div class="content">
                <div class="img">
                    <img src="../Imgs/CASE-LI-PC-011D.png" alt="">
                </div>
                <h3 style="color: black">
                    COMPUTER CASES
                </h3>
                <a href="Computercases.php">
                    Show more
                </a>
            </div>
        </div>
    </div>
</div>
</body>
</html>