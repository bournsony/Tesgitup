<?php
include('conn.php');
session_start();
$id=$_GET['id'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$phone_number=$_POST['phone_number'];
$email=$_POST['email'];
$conn->query("update member set firstname='$firstname',
lastname='$lastname',phone_number='$phone_number', email='$email' where memberid='$id'");
$_SESSION['msg']="Hey Oudom your Member Updated Succesfully";
header('location:index.php');
?>
