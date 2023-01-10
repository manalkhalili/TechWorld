<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'techworld');
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    };
$CurPageURL =  $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$arr=explode("?",$CurPageURL);
$arr1=explode("=",$arr[1]);
$code= $arr1[1];
$sql=mysqli_query($db,"select * from product where Code= '$code'");


for($i=0;$i<$sql->num_rows;$i=$i+1){
    $row  = $sql->fetch_assoc();
    $Name=$row['Name'];
    $Price=$row['Price'];
    $Image=$row['Image'];
    $Code=$row['Code'];
    $Availability=$row['availability'];
    if($Availability == null){
        $Availability ="Out of stock";
    }
    $Brand=$row['Brand'];
//    $Quantity=$row['Quantity'];
    $Type=$row['Type'];
    $path="Home.php";
    if($Type == "headset"){
        $path="Headsets.php";
    }elseif ($Type=="laptop"){
        $path="laptops.php";
    }elseif ($Type=="ssd"){
        $path="Ssd.php";
    }elseif ($Type=="ram"){
        $path="Rams.php";
    }elseif($Type== "case"){
        $path="Computercases.php";
    }elseif($Type == "microphone"){
        $path="microphones.php";
    }elseif($Type== "monitor"){
        $path="Monitors.php";
    }elseif($Type == "keyboard and mouse"){
        $path="KeyboardandMouse.php";
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Products</title>
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
    <link rel="stylesheet" type="text/css" href="../Css/Subproduct.css">
</head>
<body>
<?php
if(isset($_SESSION['Email'])){
    include "navbar1.php";
}else{
    include "navbar2.php";
}
?>
<?php

?>

<div class="container">
    <div class="row">
        <div class="col-md-5">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?php echo $Image ?>" class="d-block w-100" alt="...">
                    </div>
                </div>

                </button>
            </div>
        </div>
        <div class="col-md-7">
            <p class="newarrival text-center">  NEW </p>
            <h2><?php echo $Name ?>



            </h2>
            <p style="color: #001a4d">PRODUCT CODE: <?php echo $Code ?></p>
            <div class = "rating">
                <span><i class = "fas fa-star"></i></span>
                <span><i class = "fas fa-star"></i></span>
                <span><i class = "fas fa-star"></i></span>
                <span><i class = "fas fa-star"></i></span>
                <span><i class = "far fa-star"></i></span>
            </div>

            <p class = "product-price1"><?php echo $Price ?>

            </p>
            <p><b>Availability: </b><?php echo $Availability?></p>
            <p><b>Condition: </b>New</p>
            <p><b>Brand: </b><?php echo $Brand ?></p>

            <a href="<?php echo $path ?> "  class="btn btn-default cart" style="font-size: larger; color: white">back</a>
        </div>
    </div>
</div>
</body>

