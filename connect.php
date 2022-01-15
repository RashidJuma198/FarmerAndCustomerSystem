<?php
$servername="localhost";
$username="root";
$password="";
$dbname="elgon";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("Not connected");
}
?>