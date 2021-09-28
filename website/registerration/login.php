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
    <h2>Loging</h2>
    </div>
    <form method="post" action="login.php">
        <div class="input-group">
            <label for="">username</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label for="">password</label>
            <input type="password" name="password_1">
        </div>
        <div class="input-group">
            <button type="submit" name="loging" class="btn">Log in</button>
        </div>
        <p>
            Already a member?<a href="register.php">Sing in</a>
        </p>
    </form>
</body>
</html>