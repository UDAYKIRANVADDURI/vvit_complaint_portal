<?php

$conn = mysqli_connect("localhost", "root", "", "ac");

// Initialize the colors array
$colors = array();

// Loop through rooms from 201 to 225
for ($roomNo = 201; $roomNo <= 225; $roomNo++) {
    $sql = "SELECT * FROM floor1 WHERE roomno = '$roomNo'";
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
                    <center>First Floor</center>
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
                    <div style="background-color:<?= $colors[201] ?>;" class="room" onmouseover="f201(201)">201
                        <center>
                            <div class="popuptext" id="201"></div>
                        </center>
                    </div>
                    <div style="background-color:<?= $colors[202] ?>;" class="room" onmouseover="f202(202)">202
                        <center>
                            <div class="popuptext" id="202"></div>
                        </center>
                    </div>
                <div style="background-color:<?= $colors[203] ?>;" class="room" onmouseover="f203(203)">203
                    <center>
                        <div class="popuptext" id="203"></div>
                    </center>
                </div>
            
            <div style="background-color:<?= $colors[204] ?>;" class="room" onmouseover="f204(204)">204
                <center>
                    <div class="popuptext" id="204"></div>
                </center>
            </div>
        
        <div style="background-color:<?= $colors[205] ?>;" class="room" onmouseover="f205(205)">205
            <center>
                <div class="popuptext" id="205"></div>
            </center>
        </div>
    </div>
    
    <div class="line">
        <div style="background-color:<?= $colors[206] ?>;" class="room" onmouseover="f206(206)">206
            <center>
                <div class="popuptext" id="206"></div>
            </center>
        </div>
    
    <div style="background-color:<?= $colors[207] ?>;" class="room" onmouseover="f207(207)">207
        <center>
            <div class="popuptext" id="207"></div>
        </center>
    </div>
    
    <div style="background-color:<?= $colors[208] ?>;" class="room" onmouseover="f208(208)">208
        <center>
            <div class="popuptext" id="208"></div>
        </center>
    </div>
    
    <div style="background-color:<?= $colors[209] ?>;" class="room" onmouseover="f209(209)">209
        <center>
            <div class="popuptext" id="209"></div>
        </center>
    </div>
    
    <div style="background-color:<?= $colors[210] ?>;" class="room" onmouseover="f210(210)">210
        <center>
            <div class="popuptext" id="210"></div>
        </center>
    </div>
    </div>
    

    <div class="line">
        <div style="background-color:<?= $colors[211] ?>;" class="room" onmouseover="f211(211)">211
            <center>
                <div class="popuptext" id="211"></div>
            </center>
        </div>
    
    <div style="background-color:<?= $colors[212] ?>;" class="room" onmouseover="f212(212)">212
        <center>
            <div class="popuptext" id="212"></div>
        </center>
    </div>
    
    <div style="background-color:<?= $colors[213] ?>;" class="room" onmouseover="f213(213)">213
        <center>
            <div class="popuptext" id="213"></div>
        </center>
    </div>
    
    <div style="background-color:<?= $colors[214] ?>;" class="room" onmouseover="f214(214)">214
        <center>
            <div class="popuptext" id="214"></div>
        </center>
    </div>
    
    <div style="background-color:<?= $colors[215] ?>;" class="room" onmouseover="f215(215)">215
        <center>
            <div class="popuptext" id="215"></div>
        </center>
    </div>
    </div>
    

    <div class="line">
        <div style="background-color:<?= $colors[216] ?>;" class="room" onmouseover="f216(216)">216
            <center>
                <div class="popuptext" id="216"></div>
            </center>
        </div>
   
    <div style="background-color:<?= $colors[217] ?>;" class="room" onmouseover="f217(217)">217
        <center>
            <div class="popuptext" id="217"></div>
        </center>
    </div>
    
    <div style="background-color:<?= $colors[218] ?>;" class="room" onmouseover="f218(218)">218
        <center>
            <div class="popuptext" id="218"></div>
        </center>
    </div>
    
    <div style="background-color:<?= $colors[219] ?>;" class="room" onmouseover="f219(219)">219
        <center>
            <div class="popuptext" id="219"></div>
        </center>
    </div>
    
    <div style="background-color:<?= $colors[220] ?>;" class="room" onmouseover="f220(220)">220
        <center>
            <div class="popuptext" id="220"></div>
        </center>
    </div>
    
    </div>

    <div class="line">
        <div style="background-color:<?= $colors[221] ?>;" class="room" onmouseover="f221(221)">221
            <center>
                <div class="popuptext" id="221"></div>
            </center>
        </div>
    
    <div style="background-color:<?= $colors[222] ?>;" class="room" onmouseover="f222(222)">222
        <center>
            <div class="popuptext" id="222"></div>
        </center>
    </div>
    
    <div style="background-color:<?= $colors[223] ?>;" class="room" onmouseover="f223(223)">223
        <center>
            <div class="popuptext" id="223"></div>
        </center>
    </div>
    
    <div style="background-color:<?= $colors[224] ?>;" class="room" onmouseover="f224(224)">224
        <center>
            <div class="popuptext" id="224"></div>
        </center>
    </div>
    
    <div style="background-color:<?= $colors[225] ?>;visibility:hidden;" class="room" onmouseover="f225(225)">225
        <center>
            <div class="popuptext" id="225"></div>
        </center>
    </div>
    </div>
    </div>
    </div>
    </div>
    

</body>

<script>
function f201(b) {
    var a = "<?php
            $rno="201";
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

function f202(b) {
    var a = "<?php
            $rno="202";
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

function f203(b) {
    var a = "<?php
            $rno="203";
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

function f204(b) {
    var a = "<?php
            $rno="204";
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

function f205(b) {
    var a = "<?php
            $rno="205";
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

function f206(b) {
    var a = "<?php
            $rno="206";
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

function f207(b) {
    var a = "<?php
            $rno="207";
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

function f208(b) {
    var a = "<?php
            $rno="208";
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

function f209(b) {
    var a = "<?php
            $rno="209";
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

function f210(b) {
    var a = "<?php
            $rno="210";
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

function f211(b) {
    var a = "<?php
            $rno="211";
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

function f212(b) {
    var a = "<?php
            $rno="212";
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

function f213(b) {
    var a = "<?php
            $rno="213";
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

function f214(b) {
    var a = "<?php
            $rno="214";
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

function f215(b) {
    var a = "<?php
            $rno="215";
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

function f216(b) {
    var a = "<?php
            $rno="216";
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

function f217(b) {
    var a = "<?php
            $rno="217";
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

function f218(b) {
    var a = "<?php
            $rno="218";
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

function f219(b) {
    var a = "<?php
            $rno="219";
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

function f220(b) {
    var a = "<?php
            $rno="220";
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

function f221(b) {
    var a = "<?php
            $rno="221";
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

function f222(b) {
    var a = "<?php
            $rno="222";
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

function f223(b) {
    var a = "<?php
            $rno="223";
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

function f224(b) {
    var a = "<?php
            $rno="224";
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

function f225(b) {
    var a = "<?php
            $rno="225";
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