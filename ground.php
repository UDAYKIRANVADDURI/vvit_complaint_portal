<?php

$conn = mysqli_connect("localhost", "root", "", "ac");

// Initialize the colors array
$colors = array();

// Loop through rooms from 101 to 124
for ($roomNo = 101; $roomNo <= 124; $roomNo++) {
    $sql = "SELECT * FROM groundfloor WHERE roomno = '$roomNo'";
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
    <title>Ground Floor</title>
    <link rel="stylesheet" href="demo.css" />
</head>

<body>
    <div class="c1">
        <div class="floor_group">
            <div class="floors">
            <a href="ground.php">    
            Ground Floor</a></div>
            <div class="floors"><a href="floor1.php"> Floor 1</a></div>
            <div class="floors"><a href="floor2.php"> Floor 2</a></div>
            <div class="floors"><a href="floor3.php"> Floor 3</a></div>
            <div class="floors"><a href="floor4.php"> Floor 4</a></div>
        </div>

        <div class="main">
            <div class="main_part1">
                <div class="displayNumber">
                    <center>Ground Floor</center>
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
                    <div style="background-color:<?= $colors[101] ?>;" class="room" onmouseover="f101(101)">101
                        <center>
                            <div class="popuptext" id="101"></div>
                        </center>
                    </div>
                    <div style="background-color:<?= $colors[102] ?>;" class="room" onmouseover="f102(102)">102
                        <center>
                            <div class="popuptext" id="102"></div>
                        </center>
                    </div>
                    <div style="background-color:<?= $colors[103] ?>;" class="room" onmouseover="f103(103)">103
                        <center>
                            <div class="popuptext" id="103"></div>
                        </center>
                    </div>
                    <div style="background-color:<?= $colors[104] ?>;" class="room" onmouseover="f104(104)">104
                        <center>
                            <div class="popuptext" id="104"></div>
                        </center>
                    </div>
                    <div style="background-color:<?= $colors[105] ?>;" class="room" onmouseover="f105(105)">105
                        <center>
                            <div class="popuptext" id="105"></div>
                        </center>
                    </div>
                </div>
                <div class="line">
                    <div style="background-color:<?= $colors[106] ?>;" class="room" onmouseover="f106(106)">106
                        <center>
                            <div class="popuptext" id="106"></div>
                        </center>
                    </div>
                    <div style="background-color:<?= $colors[107] ?>;" class="room" onmouseover="f107(107)">107
                        <center>
                            <div class="popuptext" id="107"></div>
                        </center>
                    </div>
                    <div style="background-color:<?= $colors[108] ?>;" class="room" onmouseover="f108(108)">108
                        <center>
                            <div class="popuptext" id="108"></div>
                        </center>
                    </div>
                    <div style="background-color:<?= $colors[109] ?>;" class="room" onmouseover="f109(109)">109
                        <center>
                            <div class="popuptext" id="109"></div>
                        </center>
                    </div>
                    <div style="background-color:<?= $colors[110] ?>;" class="room" onmouseover="f110(110)">110
                        <center>
                            <div class="popuptext" id="110"></div>
                        </center>
                    </div>
                </div>

                <div class="line">
                    <div style="background-color:<?= $colors[111] ?>;" class="room" onmouseover="f111(111)">111
                        <center>
                            <div class="popuptext" id="111"></div>
                        </center>
                    </div>
                    <div style="background-color:<?= $colors[112] ?>;" class="room" onmouseover="f112(112)">112
                        <center>
                            <div class="popuptext" id="112"></div>
                        </center>
                    </div>
                    <div style="background-color:<?= $colors[113] ?>;" class="room" onmouseover="f113(113)">113
                        <center>
                            <div class="popuptext" id="113"></div>
                        </center>
                    </div>
                    <div style="background-color:<?= $colors[114] ?>;" class="room" onmouseover="f114(114)">114
                        <center>
                            <div class="popuptext" id="114"></div>
                        </center>
                    </div>
                    <div style="background-color:<?= $colors[115] ?>;" class="room" onmouseover="f115(115)">115
                        <center>
                            <div class="popuptext" id="115"></div>
                        </center>
                    </div>
                </div>

                <div class="line">
                    <div style="background-color:<?= $colors[116] ?>;" class="room" onmouseover="f116(116)">116
                        <center>
                            <div class="popuptext" id="116"></div>
                        </center>
                    </div>
                    <div style="background-color:<?= $colors[117] ?>;" class="room" onmouseover="f117(117)">117
                        <center>
                            <div class="popuptext" id="117"></div>
                        </center>
                    </div>
                    <div style="background-color:<?= $colors[118] ?>;" class="room" onmouseover="f118(118)">118
                        <center>
                            <div class="popuptext" id="118"></div>
                        </center>
                    </div>
                    <div style="background-color:<?= $colors[119] ?>;" class="room" onmouseover="f119(119)">119
                        <center>
                            <div class="popuptext" id="119"></div>
                        </center>
                    </div>
                    <div style="background-color:<?= $colors[120] ?>;" class="room" onmouseover="f120(120)">120
                        <center>
                            <div class="popuptext" id="120"></div>
                        </center>
                    </div>
                </div>

                <div class="line">
                    <div style="background-color:<?= $colors[121] ?>;" class="room" onmouseover="f121(121)">121
                        <center>
                            <div class="popuptext" id="121"></div>
                        </center>
                    </div>
                    <div style="background-color:<?= $colors[122] ?>;" class="room" onmouseover="f122(122)">122
                        <center>
                            <div class="popuptext" id="122"></div>
                        </center>
                    </div>
                    <div style="background-color:<?= $colors[123] ?>;" class="room" onmouseover="f123(123)">123
                        <center>
                            <div class="popuptext" id="123"></div>
                        </center>
                    </div>
                    <div style="background-color:<?= $colors[124] ?>;" class="room" onmouseover="f124(124)">124
                        <center>
                            <div class="popuptext" id="124"></div>
                        </center>
                    </div>
                    <div style="background-color:<?= $colors[125] ?>; visibility:hidden;" class="room" onmouseover="f124(124)">124
                        <center>
                            <div class="popuptext" id="125"></div>
                        </center>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

<script>
function f101(b) {
    var a = "<?php
            $rno="101";
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

function f102(b) {
    var a = "<?php
            $rno="102";
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

function f103(b) {
    var a = "<?php
            $rno="103";
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

function f104(b) {
    var a = "<?php
            $rno="104";
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

function f105(b) {
    var a = "<?php
            $rno="105";
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

function f106(b) {
    var a = "<?php
            $rno="106";
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
function f107(b) {
    var a = "<?php
            $rno="107";
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

function f108(b) {
    var a = "<?php
            $rno="108";
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

function f109(b) {
    var a = "<?php
            $rno="109";
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

function f110(b) {
    var a = "<?php
            $rno="110";
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

function f111(b) {
    var a = "<?php
            $rno="111";
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

function f112(b) {
    var a = "<?php
            $rno="112";
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
function f113(b) {
    var a = "<?php
            $rno="113";
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

function f114(b) {
    var a = "<?php
            $rno="114";
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

function f115(b) {
    var a = "<?php
            $rno="115";
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

function f116(b) {
    var a = "<?php
            $rno="116";
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
function f117(b) {
    var a = "<?php
            $rno="117";
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

function f118(b) {
    var a = "<?php
            $rno="118";
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

function f119(b) {
    var a = "<?php
            $rno="119";
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

function f120(b) {
    var a = "<?php
            $rno="120";
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

function f121(b) {
    var a = "<?php
            $rno="121";
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

function f122(b) {
    var a = "<?php
            $rno="122";
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
function f123(b) {
    var a = "<?php
            $rno="123";
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

function f124(b) {
    var a = "<?php
            $rno="124";
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