
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign up</title>
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="../Css/SignUp.css">
</head>
<body>
<?php
if(isset($_SESSION['Email'])){
    include "navbar1.php";
}else{
    include "navbar2.php";
}
?>
<div>

    <?php
    $PassError ="";
    $UserError="";
    $EmailError="";
    $username = "";
    $email    = "";
    $message="";
    $errors = array();
    // connect to the database
    $db=mysqli_connect('localhost','root','','techworld');
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

    // REGISTER USER
    if (isset($_POST['signup-button'])) {
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
        if (empty($username)) {
//            echo 'hi1';
            array_push($errors, "Username is required");
        }
        if (empty($email)) {
//            echo 'hi2';
            array_push($errors, "Email is required");
        }
        if (empty($password_1)) {
//            echo 'hi3';
            array_push($errors, "Password is required");
        }
        if ($password_1 != $password_2) {
//            echo 'hi4';
            array_push($errors, "The two passwords do not match");
            $PassError='The two passwords do not match';
//            echo '<script type="text/javascript">window.alert("'.$PassError.'");</script>';
        }
        $user_check_query = "SELECT * FROM user WHERE username='$username' OR Email='$email' LIMIT 1";
        $result = mysqli_query($db, $user_check_query);
        $user = mysqli_fetch_assoc($result);
        if ($user) { // if user exists
            if ($user['username'] === $username) {
                array_push($errors, "Username already exists");
                $UserError='Username already exists';
//                echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
            }
            if ($user['Email'] === $email) {
                array_push($errors, "email already exists");
                $EmailError='email already exists';
//                echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
            }
        }
        // Finally, register user if there are no errors in the form
        if (count($errors) == 0) {
            $password = md5($password_1);//encrypt the password before saving in the database
            $query = "INSERT INTO user (username, Email,Password) VALUES('$username', '$email', '$password')";
            $result = mysqli_query($db, $query);
            $db->close();
            $_SESSION['username'] = $username;
            echo'<script> location.replace("Home.php"); </script>';
        }

    }
    ?>

</div>

<form method="post" action="SignUp.php" enctype="multipart/form-data">
    <div id="login-box">
        <div class="left-box">
            <h1>Sign up</h1>
            <input type="text" name="username" placeholder="Username" required/>
            <span class="Err"><?php echo $UserError?></span>
            <input type="email" name="email" placeholder="Email" required/>
            <span class="Err"><?php echo $EmailError?></span>
            <input type="password" name="password_1" placeholder="Password" required style=" border: none; border-bottom: 1px solid #676767; border-radius: .15rem; color: black"/>
            <input type="password" name="password_2" placeholder="Retype password"
                   pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                   title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                   required style=" border: none; border-bottom: 1px solid #676767; border-radius: .15rem;color: black"/>
            <span class="Err"><?php echo $PassError?></span>
            <input type="submit" name="signup-button" value="Sign Up" style="font-size: large" />
        </div>
        <div class="right-box">
        <span class="signInWith">Sign in with<br/>Social network
        </span>
            <button class="social facebook" onclick="fbLogin();" id="fbLink" style="height: 50px">
                Log in with Facebook
            </button>
            <button class="social google" style="height: 50px" >
                Log in with Google
            </button>
        </div>
        <div class="or"> OR
        </div>
    </div>
</form>


</body>
</html>