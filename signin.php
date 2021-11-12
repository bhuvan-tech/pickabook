<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign-in</title>
    <link rel="stylesheet" href="stylesignin.css">
</head>
<body>
    <div class="box">
        SIGN IN
        <form action="after-signin.php" method="POST">
            Email<br><input name="email" type="email" placeholder="Enter the Email"><br>
            Password<br><input name="password" type="password" placeholder="Enter the Password"><br>
            <input type="submit" class="submit-btn" name="Submit"><br>
            <div id="reg"> User! Click Here To Sign Up <a href="signup.php"></a> </div>
        </form>
    </div>
</body>
</html>