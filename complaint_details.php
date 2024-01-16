<?php
ob_start();
if(isset($_POST['export']))
{
$dbHost     = "localhost"; 
$dbUsername = "root"; 
$dbPassword = ""; 
$dbName     = "ac"; 
$fromdate=$_POST["date_time"];
$todate=$_POST["todate"];
$roomno=$_POST['roomno'];
 
// Create database connection 
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);


if($roomno != ""){
    $query = mysqli_query($db,"SELECT * FROM `studentform` WHERE roomno='$roomno' AND date_time BETWEEN '$fromdate' AND '$todate' GROUP BY roomno ORDER BY roomno");
}else{
    $query = mysqli_query($db,"SELECT * FROM `studentform` WHERE date_time BETWEEN '$fromdate' AND '$todate' GROUP BY roomno ORDER BY roomno");
}
 

header("Content-Type: application/octet-stream"); 
header("Content-Disposition: attachment; filename=\"studentcomplaint.xls\"");
header("Pragma:no-cache");
header("Expires:0"); 

 
// Check connection 
if ($db->connect_error) { 
    die("Connection failed: " . $db->connect_error); 
}
 
// Filter the excel data 
function filterData(&$str){ 
    $str = preg_replace("/\t/", "\\t", $str); 
    $str = preg_replace("/\r?\n/", "\\n", $str); 
    if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"'; 
} 
 
// Excel file name for download 
//$fileName = "members_" . date('Y-m-d') . ".xls"; 
 
// Column names 
$fields = array('&emsp;Room No&emsp; ','&emsp;Name &emsp; ','&emsp;Email&emsp  ','&emsp; Date & Time&emsp; <br> ','&emsp;Description&emsp; <br> '); 

// Display column names as first row 
$excelData = "<table border=2px solid black;><tr><td colspan='5' align='center'><b>Student Complaint Report ( $fromdate - $todate )</b></td></tr>\n";
$excelData .= "<tr><td><b>" . implode("</b></td><td  align='center' ><b>", array_values($fields)) . "</b></td></tr>\n";

// Fetch records from database 
 
if($query->num_rows > 0){ 
    // Output each row of the data 
    while($row = $query->fetch_assoc()){  
        $lineData = array($row['roomno'], $row['name'], $row['email'], $row['date_time'], $row['description']); 
        array_walk($lineData, 'filterData'); 
        $excelData .= "<tr><td>" . implode("</td><td>", array_values($lineData)) . "</td></tr>\n"; 
    } 
}else{ 
    $excelData .= "<tr><td colspan='5'>No records found...</td></tr>\n"; 
}
$excelData .= "</table>";

// Output the HTML table 
echo $excelData;

// Headers for download 
// Render excel data 

exit;

ob_end_flush(); 

}
?>

<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Student Complaint Report</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='complaint_details.css'>
    <script src='main.js'></script>
</head>
<body>
<center><h1>Student Complaint Report</h1></center>
<form action="" method="post">
    <div style="display:flex;align-items:center;justify-content:center;width:100%;"> 
    <div class="login-box">
          <div class="user-box">
            <input type="text" name="roomno" placeholder="Room Number">
          </div>
          <div class="user-box">
            <input type="datetime-local" style="color:#7b7a7a" name="date_time" min="2007-01-01" max="2050-12-31"
                    required value="<?php echo $_POST['date_time'] ?? ''; ?>" required>
            <label class="rdate"> From Date</label>
          </div>
          <div class="user-box">
            <input type="datetime-local" style="color:#7b7a7a" name="todate" min="2007-01-01"
                    max="2050-12-31" required value="<?php echo $_POST['todate'] ?? ''; ?>" required>
            <label class="rdate"> To Date</label>
          </div>
          <button type="submit" id="display" name="display" class="login_btn" style="width:37%">DISPLAY</button>&emsp;&emsp;
          <button type="submit" id="export" name="export" class="login_btn" >DOWNLOAD</button>  
        </form>
      </div>
</div>
    
        <?php
    if(isset($_POST['display']))
    {
    $fromdate=$_POST["date_time"];
    $todate=$_POST["todate"];
    $roomno=$_POST['roomno'];
    
    $db=new mysqli("localhost","root","","ac");
      if($db->connect_error){
          die("connection failed");
      }
    
    else{
        if($roomno != ""){
            $query = mysqli_query($db,"SELECT * FROM `studentform` WHERE roomno='$roomno' AND date_time BETWEEN '$fromdate' AND '$todate' GROUP BY roomno ORDER BY roomno");
        }else{
            $query = mysqli_query($db,"SELECT * FROM `studentform` WHERE date_time BETWEEN '$fromdate' AND '$todate' GROUP BY roomno ORDER BY roomno");
        }
        
 
        echo "<table>
        <tr>
        
        <th colspan='5'>Student Complaint Form <br>(" . date("j-F-Y", strtotime($fromdate)) . " to " . date("j-F-Y", strtotime($todate)) . ")</th></tr><tr>
       <th>&emsp;Room No&emsp;</th>
       <th>&emsp;Name&emsp; </th>
       <th>&emsp;Email&emsp; </th>
       <th>&emsp;Date & Time&emsp; </th>
       <th>&emsp;Description&emsp; </th>
        
        </tr> ";
    
        while($row= mysqli_fetch_array($query)){
            echo "<tr>";
              
              echo "<td>" . $row['roomno'] . "</td>";
              echo "<td>" . $row['name'] . "</td>";
              echo "<td>" . $row['email'] . "</td>";
              echo "<td>" . $row['date_time'] . "</td>";
              echo "<td>" . $row['description'] . "</td>";
              echo "</tr>";
        }
        echo "</table>";
    }
     }
    
    ?>
    
</body>

</html>