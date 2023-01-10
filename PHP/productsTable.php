<?php
session_start();
?>

<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="../Css/dashboard.css">
    <title>Dashboard</title>
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div class="sidebar">

    <ul class="nav-links">
        <li>
            <a href="#" class="active">
                <i class='bx bx-grid-alt' ></i>
                <span class="links_name">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="productsTable.php">
                <i class='bx bx-box' ></i>
                <span class="links_name">Product</span>
            </a>
        </li>
        <li>
            <a href="MessagesTable.php">
                <i class='bx bx-message' ></i>
                <span class="links_name">Messages</span>
            </a>
        </li>
        <li class="log_out">
            <a href="#">
                <i class='bx bx-log-out'></i>
                <span class="links_name">Log out</span>
            </a>
        </li>
    </ul>
</div>

<div class="home-section">
    <nav>
        <div class="sidebar-button">
            <i class='bx bx-menu sidebarBtn'></i>
            <span class="dashboard">Dashboard</span>
        </div>
    </nav>
    <?php
    $error="";
    $db=mysqli_connect('localhost','root','','techworld');
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
    $sql="SELECT * FROM product ";
    $result = mysqli_query($db, $sql);
    $num = mysqli_num_rows($result);
    ?>
    <div class="home-content">
        <div class="overview-boxes">
            <div class="box">
                <div class="right-side">
                    <div class="box-topic">Total Order</div>
                    <div class="number">40,876</div>
                    <div class="indicator">
                        <i class='bx bx-up-arrow-alt'></i>
                        <span class="text">Up from yesterday</span>
                    </div>
                </div>
                <i class='bx bx-cart-alt cart'></i>
            </div>
            <div class="box">
                <div class="right-side">
                    <div class="box-topic">Total Profit</div>
                    <div class="number">$12,876</div>
                    <div class="indicator">
                        <i class='bx bx-up-arrow-alt'></i>
                        <span class="text">Up from yesterday</span>
                    </div>
                </div>
                <i class='bx bx-cart cart three' ></i>
            </div>
        </div>
        <form action="productsTable.php" method="post">
            <div class="button">
                <button style="background-color: #001a4d; border-radius: 10px; width: 100px; height: 50px; color: white"
                        name="Update" type="submit">UPDATE</button>
            </div>

        </form>

        <div class="col-lg-12">
            <table class="table">
                <thead class="text-center">
                <tr>
                    <th scope="col">Code</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Image</th>
                    <th scope="col">Availability</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Type</th>

                </tr>
                </thead>
                <tbody class="text-center">
                <?php
                while($row=$result->fetch_assoc()) {?>
                    <form action="productsTable.php" method="post">
                        <?php
                        $Code=$row['Code'];
                        $Name=$row['Name'];
                        $Price=$row['Price'];
                        $Image=$row['Image'];
                        $Availability=$row['availability'];
                        $Brand=$row['Brand'];
                        $Quantity=$row['Quantity'];
                        $Type=$row['Type'];
                        echo"
                                        <tr >
                                            <td>
                                            <form action='productsTable.php' method='post'>
                       <input type='text' class='text-center col-md-12 qnt' name='Code' value='$Code' >
                     </form>
                                            </td>
                                            <td>
                                            <form action='productsTable.php' method='post'>
                       <input type='text' class='text-center col-md-12 qnt' name='Name' value='$Name' >
                     </form>
                                            </td>
                                            <td>
                                             <form action='productsTable.php' method='post'>
                       <input type='text' class='text-center col-md-12 qnt' name='' value='$Price' >
                     </form>
                                            </td>
                                            <td>
                                             <form action='productsTable.php' method='post'>
                       <input type='text' class='text-center col-md-12 qnt' name='Image' value='$Image' >
                                              <input type='file' value='Choose an image'>

                     </form>
                                            </td>
                                            <td>
                                             <form action='productsTable.php' method='post'>
                       <input type='text' class='text-center col-md-12 qnt' name='Availability' value='$Availability' >
                     </form>
                                            </td>
                                            <td>
                                             <form action='productsTable.php' method='post'>
                       <input type='text' class='text-center col-md-12 qnt' name='Brand' value='$Brand' >
                     </form>
                                            </td>
                                            <td>
                                             <form action='productsTable.php' method='post'>
                       <input type='text' class='text-center col-md-12 qnt' name='Quantity' value='$Quantity' >
                     </form>
                                            </td>
                                            <td>
                                             <form action='productsTable.php' method='post'>
                       <input type='text' class='text-center col-md-12 qnt' name='Type' value='$Type' >
                     </form>
                                            </td>
                                        </tr>
                                        ";?>

                    </form>

                    <?php
                }
                ?>
                </tbody>

            </table>

        </div>
    </div>
    <?php
//    if(isset($_POST['Update'])){
//        $sql="UPDATE product SET Password='$Pass1' WHERE Email='$Email1'";
//        $result = mysqli_query($db, $sql);
//    }
    ?>
    <script>
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".sidebarBtn");
        sidebarBtn.onclick = function() {
            sidebar.classList.toggle("active");
            if(sidebar.classList.contains("active")){
                sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
            }else
                sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        }
    </script>
</body>
</html>