
    <?php
    $error=$db=$sql1=$row1=$Email="";
    if(isset($_POST['forgetPass'])) {
        session_start();
        extract($_POST);
        $db = mysqli_connect('localhost', 'root', '', 'techworld');
        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }
        $Email = $_POST['email'];
        $sql1=mysqli_query($db,"SELECT * FROM user where Email='$Email'");
        $row1  = $sql1->fetch_assoc();
        echo '<script type="text/javascript">window.alert("'.$row1.'");</script>';


//        $row1  = mysqli_fetch_array($sql1);
        if($sql1->num_rows == 0)
        {
            $error .="<p>Invalid email address please type a valid email address!</p>";
            echo '<script type="text/javascript">window.alert("'.$error.'");</script>';
        }
        else
        {
            $_SESSION['Email']=$row1['Email'];
            echo '<script> location.replace("../html/newpass.html"); </script>';

        }
    }

    if (isset($_POST['changePass'])) {
        session_start();
        extract($_POST);
        $db = mysqli_connect('localhost', 'root', '', 'techworld');
        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }
        $Pass1 = md5($_POST['pass1']);
        $Pass2 = md5($_POST['pass2']);

        if ($Pass1 != $Pass2) {
            $error = "Password do not match, both password should be same.";
           // echo '<script type="text/javascript">window.alert("'.$error.'");</script>';


        }


        $Email1=$_SESSION['Email'];
        $sql2 = "UPDATE user SET Password='$Pass1' WHERE Email='$Email1'";
        $stmt = $db->prepare($sql2);
        $stmt->execute();

    }

    ?>
    <html>
    <form></form>
    </html>

