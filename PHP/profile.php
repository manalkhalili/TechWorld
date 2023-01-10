<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>user profile with timeline photos </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <!-- add style css  -->
    <link href="../Css/Profile.css" rel="stylesheet">
    <?php
    session_start();
        extract($_POST);
        $db = mysqli_connect('localhost', 'root', '', 'techworld');
        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }


    ?>


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
$username =$_SESSION['username'];
$sql = mysqli_query($db, "SELECT * FROM user where username='$username'");
$row=mysqli_fetch_array($sql);
    $row = $sql->fetch_assoc();
    $FirstName = $row['FirstName'];
    $Email=$row['Email'];
    $LastName = $row['LastName'];
    $Password=$row['Password'];
    $Phone = $row['Phone'];
    $Address = $row['Address'];
    $City = $row['City'];
    $ZIP = $row['ZIP'];



//if($FirstName==null or $LastName==null or $Phone==null or $Address==null or $City==null or $ZIP==null){


//}

?>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">


<form class="row bootstrap snippets bootdey">
    <div class="container">
        <!-- BEGIN USER PROFILE -->
        <div class="col-md-12">
            <div class="grid profile">
                <div class="grid-header" style="font-size: 15px">

                    <div class="col-lg-7">
                        <form>
                        <h3>User Name</h3>
                        <input class="box1 col-7" type="text" name="uname" id="uname" placeholder=" your username" value="<?php $username?>">

                    </div>


                </div>

                <div class="grid-body">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#profile" data-toggle="tab">Profile</a></li>
                    </ul>
                    <div class="tab-content">
                        <!-- BEGIN PROFILE -->
                        <div class="tab-pane active" id="profile">
                            <p class="lead">My Profile</p>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <p>
                                    <h5>First Name</h5><input class="box1 col-10" type="text" name="fname" id="fname" placeholder=" your first name" value="<?php echo $FirstName?>"><br>
                                    </p>
                                    <p>
                                    <h5>Last Name:</h5><input class="box1 col-10" type="text" name="lname" id="lname" placeholder=" your last name" VALUE="<?php echo $LastName?>"><br>
                                    </p>
                                    <p>
                                    <h5 class="col-md-7">Email:</h5><input class="box1 col-10" type="text" name="email" id="email" placeholder="Enter Email " value="<?php  echo $Email?>">
                                    </p>
                                    <p>
                                    <h5 class="col-md-7">Password:</h5><input class="box1 col-10" type="password" name="pass" id="pass" placeholder="Your password" VALUE="<?php  $Password?>">
                                </div>
                                <div class="col-md-6">
                                    <p>
                                    <h5 class="col-md-7">Address:</h5> <input class="box1 col-10" type="text" name="address" id="address" placeholder="your address" value=" <?php echo $Address?>">
                                    </p>


                                    <h5 class="col-md-7">City:</h5> <input class="box1 col-10" type="text" name="city" id="city" placeholder="your address" value="<?php echo $City?>">
                                    </p>
                                    <p>
                                    <h5 class="col-3">Phone:</h5><input class="box1 col-10" type="number" name="Pemail" id="phone" placeholder="Phone number" value="<?php echo $Phone?>">
                                    </p>
                                    <p>
                                    <h5 class="col-3">ZIP:</h5><input class="box1 col-10" type="number" name="ZIP" id="ZIP" placeholder="ZIP" value="<?php echo $ZIP?>">
                                    </p>
                                </div>
                            </div>

                        </div>
                        <!-- END PROFILE -->

                    </div>
                    <div class="btns">     <button class="btn1" type="submit">Update</button>
                        <button class="btn2" type="submit">Close</button></div>
                </div>
            </div>
        </div>
    </div>
</form>
    <!-- END USER PROFILE -->
</div>

</div>
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript">

</script>
</body>
</html>

