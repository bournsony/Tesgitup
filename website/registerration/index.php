<?php include('server.php') ?>
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
    <h2>Home Pag</h2>
    </div>
    <div class="content">
        <?php if (isset($_SESSION['success'])): ?>
            <div class="error success">
                <h3>
                    <?php
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
        
        <?php if(isset($_SESSION["username"])): ?>
            <p> Wellcom <strong><?php echo $_SESSION['username']; ?></strong></p>
            <p><a href="" style="color: red;">logout</a></p>
        <?php endif ?>
    </div>
</body>
</html>