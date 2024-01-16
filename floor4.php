<?php

$conn = mysqli_connect("localhost", "root", "", "ac");

// Initialize the colors array
$colors = array();

// Loop through rooms from 301 to 325
for ($roomNo = 501; $roomNo <= 525; $roomNo++) {
    $sql = "SELECT * FROM floor4 WHERE roomno = '$roomNo'";
    $qry = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($qry);
    if($row["color"] == "green"){
        $row["color"] = "rgb(255,255,255,0.85)";
    }else{
        $colors[$roomNo] = $row["color"];
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="demo.css" />
</head>

<body>
    <div class="c1">
        <div class="floor_group">
        <div class="floors"><a href="ground.php">Ground Floor</a></div>
        <div class="floors"><a href="floor1.php"> Floor 1</a></div>
        <div class="floors"><a href="floor2.php"> Floor 2</a></div>
        <div class="floors"><a href="floor3.php"> Floor 3</a></div>
        <div class="floors"><a href="floor4.php"> Floor 4</a></div>
        </div>

        <div class="main">
            <div class="main_part1">
                <div class="displayNumber">
                    <center>Fourth Floor</center>
                </div>
                <div class="details">
                    <div class="colordetail">
                        <div class="colorbox" style="background-color: rgb(19, 192, 19)"></div>
                        <div style="margin-left: 6%">No repair</div>
                    </div>
                    <div class="colordetail">
                        <div class="colorbox" style="background-color: red"></div>
                        <div style="margin-left: 6%">Repair Occured</div>
                    </div>
                </div>
            </div>

            <div class="main_part2">
                <div class="line">
                    <div style="background-color:<?= $colors[501] ?>;" class="room" onmouseover="f501(501)">501
                        <center>
                            <div class="popuptext" id="501"></div>
                        </center>
                    </div>
                    <div style="background-color:<?= $colors[502] ?>;" class="room" onmouseover="f502(502)">502
                        <center>
                            <div class="popuptext" id="502"></div>
                        </center>
                    </div>
                <div style="background-color:<?= $colors[503] ?>;" class="room" onmouseover="f503(503)">503
                    <center>
                        <div class="popuptext" id="503"></div>
                    </center>
                </div>
            
            <div style="background-color:<?= $colors[504] ?>;" class="room" onmouseover="f504(504)">504
                <center>
                    <div class="popuptext" id="504"></div>
                </center>
            </div>
        
        <div style="background-color:<?= $colors[505] ?>;" class="room" onmouseover="f505(505)">505
            <center>
                <div class="popuptext" id="505"></div>
            </center>
        </div>
    </div>
    
    <div class="line">
        <div style="background-color:<?= $colors[506] ?>;" class="room" onmouseover="f506(506)">506
            <center>
                <div class="popuptext" id="506"></div>
            </center>
        </div>
    
    <div style="background-color:<?= $colors[507] ?>;" class="room" onmouseover="f507(507)">507
        <center>
            <div class="popuptext" id="507"></div>
        </center>
    </div>
    
    <div style="background-color:<?= $colors[508] ?>;" class="room" onmouseover="f508(508)">508
        <center>
            <div class="popuptext" id="508"></div>
        </center>
    </div>
    
    <div style="background-color:<?= $colors[509] ?>;" class="room" onmouseover="f509(509)">509
        <center>
            <div class="popuptext" id="509"></div>
        </center>
    </div>
    
    <div style="background-color:<?= $colors[510] ?>;" class="room" onmouseover="f510(510)">510
        <center>
            <div class="popuptext" id="510"></div>
        </center>
    </div>
    </div>
    

    <div class="line">
        <div style="background-color:<?= $colors[511] ?>;" class="room" onmouseover="f511(511)">511
            <center>
                <div class="popuptext" id="511"></div>
            </center>
        </div>
    
    <div style="background-color:<?= $colors[512] ?>;" class="room" onmouseover="f512(512)">512
        <center>
            <div class="popuptext" id="512"></div>
        </center>
    </div>
    
    <div style="background-color:<?= $colors[513] ?>;" class="room" onmouseover="f513(513)">513
        <center>
            <div class="popuptext" id="513"></div>
        </center>
    </div>
    
    <div style="background-color:<?= $colors[514] ?>;" class="room" onmouseover="f514(514)">514
        <center>
            <div class="popuptext" id="514"></div>
        </center>
    </div>
    
    <div style="background-color:<?= $colors[515] ?>;" class="room" onmouseover="f515(515)">515
        <center>
            <div class="popuptext" id="515"></div>
        </center>
    </div>
    </div>
    

    <div class="line">
        <div style="background-color:<?= $colors[516] ?>;" class="room" onmouseover="f516(516)">516
            <center>
                <div class="popuptext" id="516"></div>
            </center>
        </div>
   
    <div style="background-color:<?= $colors[517] ?>;" class="room" onmouseover="f517(517)">517
        <center>
            <div class="popuptext" id="517"></div>
        </center>
    </div>
    
    <div style="background-color:<?= $colors[518] ?>;" class="room" onmouseover="f518(518)">518
        <center>
            <div class="popuptext" id="518"></div>
        </center>
    </div>
    
    <div style="background-color:<?= $colors[519] ?>;" class="room" onmouseover="f519(519)">519
        <center>
            <div class="popuptext" id="519"></div>
        </center>
    </div>
    
    <div style="background-color:<?= $colors[520] ?>;" class="room" onmouseover="f520(520)">520
        <center>
            <div class="popuptext" id="520"></div>
        </center>
    </div>
    
    </div>

    <div class="line">
        <div style="background-color:<?= $colors[521] ?>;" class="room" onmouseover="f521(521)">521
            <center>
                <div class="popuptext" id="521"></div>
            </center>
        </div>
    
    <div style="background-color:<?= $colors[522] ?>;" class="room" onmouseover="f522(522)">522
        <center>
            <div class="popuptext" id="522"></div>
        </center>
    </div>
    
    <div style="background-color:<?= $colors[523] ?>;" class="room" onmouseover="f523(523)">523
        <center>
            <div class="popuptext" id="523"></div>
        </center>
    </div>
    
    <div style="background-color:<?= $colors[524] ?>;" class="room" onmouseover="f524(524)">524
        <center>
            <div class="popuptext" id="524"></div>
        </center>
    </div>
    
    <div style="background-color:<?= $colors[525] ?>; visibility:hidden;" class="room" onmouseover="f525(525)">525
        <center>
            <div class="popuptext" id="525"></div>
        </center>
    </div>
    </div>
    </div>
    </div>
    </div>
    

</body>

<script>
function f501(b) {
    var a = "<?php
            $rno="501";
            $conn = mysqli_connect("localhost","root","","ac");
            $qry = mysqli_query($conn, "SELECT * from studentform where roomno=$rno");
            $row=mysqli_fetch_array($qry);
            if(mysqli_num_rows($qry)==1){
                $name=$row['name'];
                $mailid=$row['email'];
                $desc=$row['description'];
                $rdate=$row['date_time'];
                $d=nl2br("Name: ".$name."<br> Email: ".$mailid."<br> Description: ".$desc."<br> Date: ".$rdate);
            }
            else{
                $d="No Repair";
            }
            echo $d;   
        ?>"

    document.getElementById(b).innerHTML = a;
}

function f502(b) {
    var a = "<?php
            $rno="502";
            $conn = mysqli_connect("localhost","root","","ac");
            $qry = mysqli_query($conn, "SELECT * from studentform where roomno=$rno");
            $row=mysqli_fetch_array($qry);
            if(mysqli_num_rows($qry)==1){
                $name=$row['name'];
                $mailid=$row['email'];
                $desc=$row['description'];
                $rdate=$row['date_time'];
                $d=nl2br("Name: ".$name."<br> Email: ".$mailid."<br> Description: ".$desc."<br> Date: ".$rdate);
            }
            else{
                $d="No Repair";
            }
            echo $d;   
        ?>"

    document.getElementById(b).innerHTML = a;
}

function f503(b) {
    var a = "<?php
            $rno="503";
            $conn = mysqli_connect("localhost","root","","ac");
            $qry = mysqli_query($conn, "SELECT * from studentform where roomno=$rno");
            $row=mysqli_fetch_array($qry);
            if(mysqli_num_rows($qry)==1){
                $name=$row['name'];
                $mailid=$row['email'];
                $desc=$row['description'];
                $rdate=$row['date_time'];
                $d=nl2br("Name: ".$name."<br> Email: ".$mailid."<br> Description: ".$desc."<br> Date: ".$rdate);
            }
            else{
                $d="No Repair";
            }
            echo $d;   
        ?>"

    document.getElementById(b).innerHTML = a;
}

function f504(b) {
    var a = "<?php
            $rno="504";
            $conn = mysqli_connect("localhost","root","","ac");
            $qry = mysqli_query($conn, "SELECT * from studentform where roomno=$rno");
            $row=mysqli_fetch_array($qry);
            if(mysqli_num_rows($qry)==1){
                $name=$row['name'];
                $mailid=$row['email'];
                $desc=$row['description'];
                $rdate=$row['date_time'];
                $d=nl2br("Name: ".$name."<br> Email: ".$mailid."<br> Description: ".$desc."<br> Date: ".$rdate);
            }
            else{
                $d="No Repair";
            }
            echo $d;   
        ?>"

    document.getElementById(b).innerHTML = a;
}

function f505(b) {
    var a = "<?php
            $rno="505";
            $conn = mysqli_connect("localhost","root","","ac");
            $qry = mysqli_query($conn, "SELECT * from studentform where roomno=$rno");
            $row=mysqli_fetch_array($qry);
            if(mysqli_num_rows($qry)==1){
                $name=$row['name'];
                $mailid=$row['email'];
                $desc=$row['description'];
                $rdate=$row['date_time'];
                $d=nl2br("Name: ".$name."<br> Email: ".$mailid."<br> Description: ".$desc."<br> Date: ".$rdate);
            }
            else{
                $d="No Repair";
            }
            echo $d;   
        ?>"

    document.getElementById(b).innerHTML = a;
}

function f506(b) {
    var a = "<?php
            $rno="506";
            $conn = mysqli_connect("localhost","root","","ac");
            $qry = mysqli_query($conn, "SELECT * from studentform where roomno=$rno");
            $row=mysqli_fetch_array($qry);
            if(mysqli_num_rows($qry)==1){
                $name=$row['name'];
                $mailid=$row['email'];
                $desc=$row['description'];
                $rdate=$row['date_time'];
                $d=nl2br("Name: ".$name."<br> Email: ".$mailid."<br> Description: ".$desc."<br> Date: ".$rdate);
            }
            else{
                $d="No Repair";
            }
            echo $d;   
        ?>"

    document.getElementById(b).innerHTML = a;
}

function f507(b) {
    var a = "<?php
            $rno="507";
            $conn = mysqli_connect("localhost","root","","ac");
            $qry = mysqli_query($conn, "SELECT * from studentform where roomno=$rno");
            $row=mysqli_fetch_array($qry);
            if(mysqli_num_rows($qry)==1){
                $name=$row['name'];
                $mailid=$row['email'];
                $desc=$row['description'];
                $rdate=$row['date_time'];
                $d=nl2br("Name: ".$name."<br> Email: ".$mailid."<br> Description: ".$desc."<br> Date: ".$rdate);
            }
            else{
                $d="No Repair";
            }
            echo $d;   
        ?>"

    document.getElementById(b).innerHTML = a;
}

function f508(b) {
    var a = "<?php
            $rno="508";
            $conn = mysqli_connect("localhost","root","","ac");
            $qry = mysqli_query($conn, "SELECT * from studentform where roomno=$rno");
            $row=mysqli_fetch_array($qry);
            if(mysqli_num_rows($qry)==1){
                $name=$row['name'];
                $mailid=$row['email'];
                $desc=$row['description'];
                $rdate=$row['date_time'];
                $d=nl2br("Name: ".$name."<br> Email: ".$mailid."<br> Description: ".$desc."<br> Date: ".$rdate);
            }
            else{
                $d="No Repair";
            }
            echo $d;   
        ?>"

    document.getElementById(b).innerHTML = a;
}

function f509(b) {
    var a = "<?php
            $rno="509";
            $conn = mysqli_connect("localhost","root","","ac");
            $qry = mysqli_query($conn, "SELECT * from studentform where roomno=$rno");
            $row=mysqli_fetch_array($qry);
            if(mysqli_num_rows($qry)==1){
                $name=$row['name'];
                $mailid=$row['email'];
                $desc=$row['description'];
                $rdate=$row['date_time'];
                $d=nl2br("Name: ".$name."<br> Email: ".$mailid."<br> Description: ".$desc."<br> Date: ".$rdate);
            }
            else{
                $d="No Repair";
            }
            echo $d;   
        ?>"

    document.getElementById(b).innerHTML = a;
}

function f510(b) {
    var a = "<?php
            $rno="510";
            $conn = mysqli_connect("localhost","root","","ac");
            $qry = mysqli_query($conn, "SELECT * from studentform where roomno=$rno");
            $row=mysqli_fetch_array($qry);
            if(mysqli_num_rows($qry)==1){
                $name=$row['name'];
                $mailid=$row['email'];
                $desc=$row['description'];
                $rdate=$row['date_time'];
                $d=nl2br("Name: ".$name."<br> Email: ".$mailid."<br> Description: ".$desc."<br> Date: ".$rdate);
            }
            else{
                $d="No Repair";
            }
            echo $d;   
        ?>"

    document.getElementById(b).innerHTML = a;
}

function f511(b) {
    var a = "<?php
            $rno="511";
            $conn = mysqli_connect("localhost","root","","ac");
            $qry = mysqli_query($conn, "SELECT * from studentform where roomno=$rno");
            $row=mysqli_fetch_array($qry);
            if(mysqli_num_rows($qry)==1){
                $name=$row['name'];
                $mailid=$row['email'];
                $desc=$row['description'];
                $rdate=$row['date_time'];
                $d=nl2br("Name: ".$name."<br> Email: ".$mailid."<br> Description: ".$desc."<br> Date: ".$rdate);
            }
            else{
                $d="No Repair";
            }
            echo $d;   
        ?>"

    document.getElementById(b).innerHTML = a;
}

function f512(b) {
    var a = "<?php
            $rno="512";
            $conn = mysqli_connect("localhost","root","","ac");
            $qry = mysqli_query($conn, "SELECT * from studentform where roomno=$rno");
            $row=mysqli_fetch_array($qry);
            if(mysqli_num_rows($qry)==1){
                $name=$row['name'];
                $mailid=$row['email'];
                $desc=$row['description'];
                $rdate=$row['date_time'];
                $d=nl2br("Name: ".$name."<br> Email: ".$mailid."<br> Description: ".$desc."<br> Date: ".$rdate);
            }
            else{
                $d="No Repair";
            }
            echo $d;   
        ?>"

    document.getElementById(b).innerHTML = a;
}

function f513(b) {
    var a = "<?php
            $rno="513";
            $conn = mysqli_connect("localhost","root","","ac");
            $qry = mysqli_query($conn, "SELECT * from studentform where roomno=$rno");
            $row=mysqli_fetch_array($qry);
            if(mysqli_num_rows($qry)==1){
                $name=$row['name'];
                $mailid=$row['email'];
                $desc=$row['description'];
                $rdate=$row['date_time'];
                $d=nl2br("Name: ".$name."<br> Email: ".$mailid."<br> Description: ".$desc."<br> Date: ".$rdate);
            }
            else{
                $d="No Repair";
            }
            echo $d;   
        ?>"

    document.getElementById(b).innerHTML = a;
}

function f514(b) {
    var a = "<?php
            $rno="514";
            $conn = mysqli_connect("localhost","root","","ac");
            $qry = mysqli_query($conn, "SELECT * from studentform where roomno=$rno");
            $row=mysqli_fetch_array($qry);
            if(mysqli_num_rows($qry)==1){
                $name=$row['name'];
                $mailid=$row['email'];
                $desc=$row['description'];
                $rdate=$row['date_time'];
                $d=nl2br("Name: ".$name."<br> Email: ".$mailid."<br> Description: ".$desc."<br> Date: ".$rdate);
            }
            else{
                $d="No Repair";
            }
            echo $d;   
        ?>"

    document.getElementById(b).innerHTML = a;
}

function f515(b) {
    var a = "<?php
            $rno="515";
            $conn = mysqli_connect("localhost","root","","ac");
            $qry = mysqli_query($conn, "SELECT * from studentform where roomno=$rno");
            $row=mysqli_fetch_array($qry);
            if(mysqli_num_rows($qry)==1){
                $name=$row['name'];
                $mailid=$row['email'];
                $desc=$row['description'];
                $rdate=$row['date_time'];
                $d=nl2br("Name: ".$name."<br> Email: ".$mailid."<br> Description: ".$desc."<br> Date: ".$rdate);
            }
            else{
                $d="No Repair";
            }
            echo $d;   
        ?>"

    document.getElementById(b).innerHTML = a;
}

function f516(b) {
    var a = "<?php
            $rno="516";
            $conn = mysqli_connect("localhost","root","","ac");
            $qry = mysqli_query($conn, "SELECT * from studentform where roomno=$rno");
            $row=mysqli_fetch_array($qry);
            if(mysqli_num_rows($qry)==1){
                $name=$row['name'];
                $mailid=$row['email'];
                $desc=$row['description'];
                $rdate=$row['date_time'];
                $d=nl2br("Name: ".$name."<br> Email: ".$mailid."<br> Description: ".$desc."<br> Date: ".$rdate);
            }
            else{
                $d="No Repair";
            }
            echo $d;   
        ?>"

    document.getElementById(b).innerHTML = a;
}

function f517(b) {
    var a = "<?php
            $rno="517";
            $conn = mysqli_connect("localhost","root","","ac");
            $qry = mysqli_query($conn, "SELECT * from studentform where roomno=$rno");
            $row=mysqli_fetch_array($qry);
            if(mysqli_num_rows($qry)==1){
                $name=$row['name'];
                $mailid=$row['email'];
                $desc=$row['description'];
                $rdate=$row['date_time'];
                $d=nl2br("Name: ".$name."<br> Email: ".$mailid."<br> Description: ".$desc."<br> Date: ".$rdate);
            }
            else{
                $d="No Repair";
            }
            echo $d;   
        ?>"

    document.getElementById(b).innerHTML = a;
}

function f518(b) {
    var a = "<?php
            $rno="518";
            $conn = mysqli_connect("localhost","root","","ac");
            $qry = mysqli_query($conn, "SELECT * from studentform where roomno=$rno");
            $row=mysqli_fetch_array($qry);
            if(mysqli_num_rows($qry)==1){
                $name=$row['name'];
                $mailid=$row['email'];
                $desc=$row['description'];
                $rdate=$row['date_time'];
                $d=nl2br("Name: ".$name."<br> Email: ".$mailid."<br> Description: ".$desc."<br> Date: ".$rdate);
            }
            else{
                $d="No Repair";
            }
            echo $d;   
        ?>"

    document.getElementById(b).innerHTML = a;
}

function f519(b) {
    var a = "<?php
            $rno="519";
            $conn = mysqli_connect("localhost","root","","ac");
            $qry = mysqli_query($conn, "SELECT * from studentform where roomno=$rno");
            $row=mysqli_fetch_array($qry);
            if(mysqli_num_rows($qry)==1){
                $name=$row['name'];
                $mailid=$row['email'];
                $desc=$row['description'];
                $rdate=$row['date_time'];
                $d=nl2br("Name: ".$name."<br> Email: ".$mailid."<br> Description: ".$desc."<br> Date: ".$rdate);
            }
            else{
                $d="No Repair";
            }
            echo $d;   
        ?>"

    document.getElementById(b).innerHTML = a;
}

function f520(b) {
    var a = "<?php
            $rno="520";
            $conn = mysqli_connect("localhost","root","","ac");
            $qry = mysqli_query($conn, "SELECT * from studentform where roomno=$rno");
            $row=mysqli_fetch_array($qry);
            if(mysqli_num_rows($qry)==1){
                $name=$row['name'];
                $mailid=$row['email'];
                $desc=$row['description'];
                $rdate=$row['date_time'];
                $d=nl2br("Name: ".$name."<br> Email: ".$mailid."<br> Description: ".$desc."<br> Date: ".$rdate);
            }
            else{
                $d="No Repair";
            }
            echo $d;   
        ?>"

    document.getElementById(b).innerHTML = a;
}

function f521(b) {
    var a = "<?php
            $rno="521";
            $conn = mysqli_connect("localhost","root","","ac");
            $qry = mysqli_query($conn, "SELECT * from studentform where roomno=$rno");
            $row=mysqli_fetch_array($qry);
            if(mysqli_num_rows($qry)==1){
                $name=$row['name'];
                $mailid=$row['email'];
                $desc=$row['description'];
                $rdate=$row['date_time'];
                $d=nl2br("Name: ".$name."<br> Email: ".$mailid."<br> Description: ".$desc."<br> Date: ".$rdate);
            }
            else{
                $d="No Repair";
            }
            echo $d;   
        ?>"

    document.getElementById(b).innerHTML = a;
}

function f522(b) {
    var a = "<?php
            $rno="522";
            $conn = mysqli_connect("localhost","root","","ac");
            $qry = mysqli_query($conn, "SELECT * from studentform where roomno=$rno");
            $row=mysqli_fetch_array($qry);
            if(mysqli_num_rows($qry)==1){
                $name=$row['name'];
                $mailid=$row['email'];
                $desc=$row['description'];
                $rdate=$row['date_time'];
                $d=nl2br("Name: ".$name."<br> Email: ".$mailid."<br> Description: ".$desc."<br> Date: ".$rdate);
            }
            else{
                $d="No Repair";
            }
            echo $d;   
        ?>"

    document.getElementById(b).innerHTML = a;
}

function f523(b) {
    var a = "<?php
            $rno="523";
            $conn = mysqli_connect("localhost","root","","ac");
            $qry = mysqli_query($conn, "SELECT * from studentform where roomno=$rno");
            $row=mysqli_fetch_array($qry);
            if(mysqli_num_rows($qry)==1){
                $name=$row['name'];
                $mailid=$row['email'];
                $desc=$row['description'];
                $rdate=$row['date_time'];
                $d=nl2br("Name: ".$name."<br> Email: ".$mailid."<br> Description: ".$desc."<br> Date: ".$rdate);
            }
            else{
                $d="No Repair";
            }
            echo $d;   
        ?>"

    document.getElementById(b).innerHTML = a;
}

function f524(b) {
    var a = "<?php
            $rno="524";
            $conn = mysqli_connect("localhost","root","","ac");
            $qry = mysqli_query($conn, "SELECT * from studentform where roomno=$rno");
            $row=mysqli_fetch_array($qry);
            if(mysqli_num_rows($qry)==1){
                $name=$row['name'];
                $mailid=$row['email'];
                $desc=$row['description'];
                $rdate=$row['date_time'];
                $d=nl2br("Name: ".$name."<br> Email: ".$mailid."<br> Description: ".$desc."<br> Date: ".$rdate);
            }
            else{
                $d="No Repair";
            }
            echo $d;   
        ?>"

    document.getElementById(b).innerHTML = a;
}

function f525(b) {
    var a = "<?php
            $rno="525";
            $conn = mysqli_connect("localhost","root","","ac");
            $qry = mysqli_query($conn, "SELECT * from studentform where roomno=$rno");
            $row=mysqli_fetch_array($qry);
            if(mysqli_num_rows($qry)==1){
                $name=$row['name'];
                $mailid=$row['email'];
                $desc=$row['description'];
                $rdate=$row['date_time'];
                $d=nl2br("Name: ".$name."<br> Email: ".$mailid."<br> Description: ".$desc."<br> Date: ".$rdate);
            }
            else{
                $d="No Repair";
            }
            echo $d;   
        ?>"

    document.getElementById(b).innerHTML = a;
}
</script>

</html>