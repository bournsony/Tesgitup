<?php
session_start();
$username= "";
$email= "";
$errors= array();
//Create connection to database
$db=mysqli_connect('localhost','root','','registration');
//if the eigister button is clicked
if(isset($_POST['register'])) {
$username=mysqli_real_escape_string($db, $_POST['username']);
$email=mysqli_real_escape_string($db, $_POST['email']);
$password_1=mysqli_real_escape_string($db, $_POST['password_1']);
$password_2=mysqli_real_escape_string($db, $_POST['password_2']);
//ensure that from fielled
if(empty($username)){
    array_push($errors,"username is require");
}
if(empty($email)){
    array_push($errors,"Email is require");
}
if(empty($password_1)){
    array_push($errors,"Password is require");
} 
if($password_1 != $password_2){
    array_push($errors, "the two password is not match");
}
//if there are no errors, save user to database
if(count($errors)==0){
    $password=md5($password_1);//encrypt password before storing in to in database (security)
    $sql="INSERT INTO users (username, email, password) VALUES('$username','$email','$password')";
    mysqli_query($db, $sql);
    $_SESSION['username']=$useername;
    $_SESSION['success']="You are now logged in";
    header('location: index.php');//redirect to home page
}
}

//logout
/*
if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header('location: index.php');
}
?>