<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['password'];
//connection
$conn=new mysqli('localhost','root','','web-login');
if($conn->connect_error){
	die('Connection Failed:'.$conn->connect_error);
}else{
	$password = md5($password);
	$stmt=$conn->prepare("insert into users(fname,lname,email,password) values(?,?,?,?)");
	$stmt->bind_param("ssss", $fname, $lname, $email, $password);
	$stmt->execute();
	echo" Registration is Successfully";
	$stmt->close();
	$conn->close();
}
?>