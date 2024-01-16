<?php
if(isset($_POST['insert'])) {
$rdate = $_POST['repairdate'];
$desc = $_POST['repairdesc'];
$roomno = $_POST['room_no'];

$conn = mysqli_connect("localhost","root","","ac");

if(!empty($rdate) && !empty($desc) && !empty($roomno))
    {
      $sql = "INSERT INTO `repair_solved`(`roomno`, `description`, `repairdate`) VALUES ('$roomno','$desc','$rdate')";
      $qry = mysqli_query($conn, $sql);
      if ($qry) {
        echo '<script type="text/javascript"> alert("Details Submitted")</script>';
        if($roomno>100 && $roomno <= 125 ){
          $sql2 = "UPDATE groundfloor SET color = 'green' WHERE roomno='$roomno'";
        }else if($roomno>200 && $roomno <= 225){
          $sql2 = "UPDATE floor1 SET color = 'green' WHERE roomno='$roomno'";
        }else if($roomno>300 && $roomno <= 325){
          $sql2 = "UPDATE floor2 SET color = 'green' WHERE roomno='$roomno'";
        }  
        else if($roomno>400 && $roomno <= 425){
          $sql2 = "UPDATE floor3 SET color = 'green' WHERE roomno='$roomno'";
        }  
        else if($roomno>500 && $roomno <= 525){
          $sql2 = "UPDATE floor4 SET color = 'green' WHERE roomno='$roomno'";
        }  
        $qry2 = mysqli_query($conn, $sql2);
      }else{
        echo '<script type="text/javascript"> alert("Details not Submitted")</script>';
      }
      if($qry){
        $sql3 = "DELETE from studentform WHERE roomno='$roomno'";
        $qry3 = mysqli_query($conn, $sql3);
      }
    }else {
      echo '<script type="text/javascript"> alert("Details not submitted.Please fill all the details")</script>';
    }
}
?>
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
<center><h1 style="color: black;">Repair Details</h1></center>
<form action="" method="post">
    <div class="login-box">
      <center><img src="vvitlogo.jpg"></center>
      <br>
          <div class="user-box">
            <input type="text" name="room_no" required="" placeholder="Room Number">
          </div>
          
          <div class="user-box">
            <input type="text" name="repairdesc" required="" placeholder="A/C Repair Details">
          </div>

          <div class="user-box">
            <input type="date" name="repairdate" required="" style="color:#7b7a7a">
            <label class="rdate">Date</label>
          </div>
          
          <button type="submit" name="insert" class="login_btn" style="width:40%">SUBMIT</button>
           &emsp;&emsp;
          <button name="display" type="submit" class="login_btn" style="width:40%">DISPLAY</button>
      
      </div>
      </form>
      

</body>
</html>