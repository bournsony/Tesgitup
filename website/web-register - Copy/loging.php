<?php
include('conn.php');
session_start();
?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="full-page">
        <div class="navbar">
            <div>
                <a href="website.html">Test-coding</a>
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><button class="loginbtn" onclick="document.getElementById('login-form').style.display='block'"style="width:auto;">Login</button></li>
                </ul>
            </nav>
        </div>
        <div id="login-form"class="login-page">
            <!- create form box-->
            <div class="form-box">
                <div class="button-box">
                    <div id="btn"></div>
                    <button type="button"onclick="login()"class="toggle-btn">LOG IN </button>
                    <button type="button"onclick="register()"class="toggle-btn">Register </button>
                </div>
                <!--creat login form-->
                <form method="$_POST" action="#" id="login"class="input-group-login">
                    <input type="text" name="user-email" class="input-field"placeholder="Email"required>
                    <input type="password"name="pass" class="input-field"placeholder="password"required>
                    <input type="checkbox" class="check-box"><span>Remembe Password</span>>
                    <button type="submit" class="submit-btn">
                        log in
                    </button>
                </form>
                <!--creat register form-->
                <form action="#" id="register"class="input-group-register">
                    <input type="text" name="fname" class="input-field"placeholder="First Name"required>
                    <input type="text" name="lname" class="input-field"placeholder="Last Name"required>
                    <input type="text" name="email" class="input-field"placeholder="Email"required>
                    <input type="password" name="password" class="input-field"placeholder="password"required>
                    <input type="checkbox" class="check-box"><span>I agree to the terms and condition</span>>
                    <button type="submit" name="register" class="submit-btn">
                        Register
                    </button>
                </form>
            </div>
        </div>
    </div>
    <script>
        var x=document.getElementById("login");
        var y=document.getElementById("register");
        var z=document.getElementById("btn");
        function register()
        {
            x.style.left="-400px";
            y.style.left="50px";
            z.style.left="110px";
        }
        function login()
        {
            x.style.left="50px";
            y.style.left="450px";
            z.style.left="0px";
        }
    </script>
    <script>
        var modal=document.getElementById("login-form");
        window.onclick=function(event){
            if(event.target==modal)
            {
                modal.style.display="none";
            }
        }
    </script>
</body>
</html>