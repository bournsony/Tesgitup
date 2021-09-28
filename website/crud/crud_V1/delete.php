<?php
include('conn.php');
session_start();
$id=$_GET['id'];
$conn->query("delete from member where memberid='$id'");
$_SESSION['msg']="Member Deleted Succesfully";
header('location:index.php');
?>