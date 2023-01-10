<?php
session_start();
$error="";
//if(isset($_POST['Email'])){
//    $_POST['Email']=$_POST['Email'];
//}
if(isset($_POST['Login']))
{
    extract($_POST);
    $db=mysqli_connect('localhost','root','','techworld');
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

    $Email = $_POST['Email'];
    $password =md5( $_POST['password']) ;

    $sql=mysqli_query($db,"SELECT * FROM user where Email='$Email' and Password='$password'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
//                echo '<script type="text/javascript">window.alert("'."success".'");</script>';
//        $_SESSION['username'] = $row['username'];
        echo '<script type="text/javascript">window.alert("'."success".'");</script>';
            $_SESSION['Email']=$row['Email'];
        echo '<script type="text/javascript">window.alert("'.$_SESSION['Email'].'");</script>';

        echo '<script> window.location=history.go(-2);</script>';

    }
    else
    {
        echo '<script type="text/javascript">window.alert("'."Invalid Email ID/Password".'");</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../Css/login.css">
    <title>Login</title>
</head>
<body>
<?php
if(isset($_SESSION['Email'])){
    include "navbar1.php";
}else{
    include "navbar2.php";
}
?>
<div class="d-flex h-100 flex-column justify-content-center align-items-center">
    <form class=" p-5 bgColor1" method="post" action="login.php" autocomplete="on" style="border-radius: 20px; background-color: white">
        <img src="../Imgs/avatar.png" alt="" style="height: 70px; width: 70px; ">
        Login here<br><br>
        <div class="form-group">
            <label for="exampleInputEmail1"  class="txtColor" style="color: #001a4d" >Email address</label>
            <input type="email" class="form-control" name="Email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" autocomplete="on">
        </div><br>
        <div class="form-group">
            <label for="exampleInputPassword1" class="txtColor" style="color: #001a4d" >Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password" style="border-radius: .25rem">
        </div>
        <br>
        <button type="submit" name="Login" class="btn bgColor" style="color: white; border-radius: 10px; font-size: larger">Login</button><br><br>
        <a href="../html/Forgotpass.html" style="text-decoration: none">forget your password? </a><br>
        <a href="SignUp.php" style="text-decoration: none">Don't have an account? Sign up</a><br>
        <a href="AdminLogin.php" style="text-decoration: none">Admin? </a>
    </form>
</div>

</body>
</html>

