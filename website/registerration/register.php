<?php include('server.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user registeration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
    <h2>Registeration</h2>
    </div>
    <form method="post" action="register.php">
        <!--display validation errors here-->
        <?php include('errors.php');?>
        <div class="input-group">
            <label for="">username</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label for="">Email</label>
            <input type="text" name="email">
        </div>
        <div class="input-group">
            <label for="">password</label>
            <input type="password" name="password_1">
        </div>
        <div class="input-group">
            <label for="">Confirm Password</label>
            <input type="text" name="password_2">
        </div>
        <div class="input-group">
            <button type="submit" name="register" class="btn">Register</button>
        </div>
        <p>
            Already a member?<a href="login.php">Sing in</a>
        </p>
    </form>
</body>
</html>