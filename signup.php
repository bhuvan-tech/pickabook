<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-out</title>
    <link rel="stylesheet" href="stylesignup.css">
</head>
<body>
    <div class="box">
    Sign Up
    <form action="after-signup.php" method="POST">
        FName<input type="text" name="Fname" placeholder="Enter the First name">
        LName<input type="text" name="Lname" placeholder="Enter the Last name">
        Phone<input type="number" name="number" placeholder="Enter the phone">
        Email<input name="email" type="email" placeholder="Enter the Email">
        Password <input name="password" type="password" placeholder="Enter the Password">
        <input type="submit" class="submit-btn" name="Submit"><br>
        <div id="reg">
            <a href="#">Already a user!</a>
        </div>
    </form></div>
    
</body>
</html>