<?php
$fname="";
$lname=$_POST['lname'];
$email=$_POST['email'];
$errors=array();
//$password=$_POST['password'];
$_SESSION['success']="";
$db=mysqli_connect('localhost','root','','web-login');
//Registration code
if(isset($_POST['reg_user'])){
    //Receving the valures entered and storing
    //in the variables
    //Data sanitization is done to prevent
    //SQL injections
    $fname=mysqli_real_escape_string($db,$_POST['fname']);
    $fname=mysqli_real_escape_string($db,$_POST['lname']);
    $fname=mysqli_real_escape_string($db,$_POST['email']);
    $password_1=mysqli_real_escape_string($db,$_POST['password_1']);
    $password_2=mysqli_real_escape_string($db,$_POST['password_2']);

    //Ensuring that the user has not left any input field blank
    //error messages will be displayed for every blank input

    if (empty($fname)){array_push($error,"Your First Name is Required");}
    if (empty($lname)){array_push($error, "YOur Last Name is Required");}
    if (empty($password_1)){array_push($error, "Your Passwor is Required");}

    if ($password_1 != $password_2){
        array_push($errors, "The two passwords do not match");
        //checking if the password match
    }

    //if the form is error free, then register the user
    if (count($error)==0){
        //password encryption to increase date security
        $password=md5($password_1);
        //Inserting data into table
        $query="INSERT INTO users(fname,lname,email,password)VALUES('$fname','$lname','$email','$password')";
        mysqli_query($db,$query);
        //storing username of the logged in user,
        //in the session variable
        $_SESSION['username']=$fname;
        //Welcome message
        $_SESSION['success']="You Have logged in";
        //page on which the user will be
        //redirected after logging in
        header('location:website.html');
    }
    
}
//user login
if(isset($_POST['login_user'])){
    //data sanitization to prevent sql injection
    $email=mysqli_real_escape_string($db,$_POST['email']);
    $password=mysqli_real_escape_string($db,$_POST['password']);
    //error message if the input fial is let blank
    if (empty($email)){
        array_push($error,"Email is required");
    }
    if (empty($password)){
        array_push($error,"password is required");
    }
    //checking for the errors
    if (count($error)==0){
        //password mathing
        $password=md5($password);
        $query="SELECT*FROM users WHERE email='$email' AND password='$password'";
        $results=mysqli_query($db,$query);
        //$results=1 mean that one user with the
        //entered email exists
        if (mysqli_num_rows($results)==1){
            //storing email in session variable
            $_SESSION['email']=$email;
            //welcom message
            $_SESSION['seccess']="You have logged in!";
            //Page on which ther user is sent
            //to after logging in 
            header('location:index.php');
        }
        else{
            //if the email and password does't match
            array_push($error,"email or password incorrect");
        }
    }
}
?>