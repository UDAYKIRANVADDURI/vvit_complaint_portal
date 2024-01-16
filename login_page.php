<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Student Login</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='login_page.css'>
    <script src='main.js'></script>
</head>

<body>

    <div class="login-box">
        <center><img src="vvitlogo.jpg"></center>
        <?php
            if(isset($_POST['login'])) {
                $stu_mail = $_POST["stu_mail"];
                $stu_pwd = $_POST["password"];
                $conn = mysqli_connect("localhost","root","","ac");
                $sql = "SELECT * FROM signup WHERE email='$stu_mail'";
                $res = mysqli_query($conn, $sql);
                
                if(mysqli_num_rows($res)>0){
                    $row = mysqli_fetch_array($res);
                    $pwd = $row['password'];
                    if($pwd == $stu_pwd){
                      if($stu_mail == "admin@vvit.net" ){
                        header("Location: ground.php");
                      }else{
                        header("Location: studentform.php");
                      }
                    }else{
                        echo "<div class='alert alert-danger'>Wrong Password</div>";
                    }
                }
               
            else{
                echo "<div class='alert alert-danger'>Wrong details</div>";
            }
        }
        ?>
        <form action="" method="post">
            <div class="user-box">
                <input type="email" name="stu_mail" required="" placeholder="Mail Id">
            </div>
            
            <div class="user-box">
                <input type="password" name="password" required="" placeholder="Password">
            </div>
            <center><button name="login" class="login_btn">LOGIN</button></center>
            <p><a href="resetpassword.php">Forgot Password</a></p>
            <div>Don't have an account?
                <a href="signup_page.php">Signup</a>
            </div>
        </form>
    </div>

</body>

</html>