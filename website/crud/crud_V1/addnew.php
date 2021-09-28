<?php
include('conn.php');
session_start();
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$phone_number=$_POST['phone_number'];
$email=$_POST['email'];
$conn->query("insert into member (firstname, lastname,phone_number,email) values ('$firstname',
'$lastname','$phone_number','$email')");
$_SESSION['msg']="Hello Oudom your Member Added Succesfully";
header('location:index.php');
?>
