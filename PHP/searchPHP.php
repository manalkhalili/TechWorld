<?php
if(isset($_POST['searchBut'])) {
    extract($_POST);
    $db=mysqli_connect('localhost','root','','techworld');
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
    $search = $_POST['search'];
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../Css/laptops.css">
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
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

</head>
<body>
<?php
if(isset($_SESSION['Email'])){
    include "navbar1.php";
}else{
    include "navbar2.php";
}
?>
<div class = "products">
    <div class = "container">
        <div class = "product-items">
            <?php

            $search = $_POST['search'];
            $sql=mysqli_query($db,"SELECT * FROM product where Name='$search' or Brand='$search' or Type='$search'");
            //    $count=mysqli_num_rows($sql);
            //    echo $count."<br>";
            if($sql->num_rows == 0) {
                echo '<script type="text/javascript">window.alert("' . "There were no results for your search. Try searching for something else." . '");</script>';
            }
            for($i =0; $i<$sql->num_rows  ; $i = $i+1){
                $row  = $sql->fetch_assoc();
                $Name=$row['Name'];
                $Price=$row['Price'];
                $Image=$row['Image'];
                $Code=$row['Code'];
                $Availability=$row['availability'];
                $Brand=$row['Brand'];
                $Quantity=$row['Quantity'];
                $Type=$row['Type'];
                ?>
                <div class = "product">
                    <div class = "product-content">
                        <div class = "product-img">
                            <img src = "<?php echo $Image ?>" alt = "product image">
                        </div>
                        <div class = "product-btns">
                            <button type = "button" class = "btn-cart"> add to cart
                                <span><i class = "fas fa-plus"></i></span>
                            </button>
                            <button type = "button" class = "btn-buy"> buy now
                                <span><i class = "fas fa-shopping-cart"></i></span>
                            </button>
                        </div>
                    </div>

                    <div class = "product-info">
                        <div class = "product-info-top">
                            <div class = "rating">
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "fas fa-star"></i></span>
                                <span><i class = "far fa-star"></i></span>
                            </div>
                        </div>
                        <a href = "#" class = "product-name"><?php echo $Name ?> </a>
                        <p class = "product-price1">₪<?php echo $Price ?></p>
                    </div>

                </div>
            <?php
            }?>

            <!-- single product -->

            <!-- end of single product -->


        </div>
    </div>
</div>


</body>
</html>

