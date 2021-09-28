<?php
$servername="localhost";
$username="root";
$password="";
$dbname="crude-v2";

//create connecion

$conn= mysqli_connect($servername,$username,$password,$dbname);
//check connection

if(!$conn){
    die("connection fialed".mysqli_connect_error());
}
?>