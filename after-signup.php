<?php
    header("Location: signin.php"); 
    exit;
?>
<?php 

    $db_hostname="sql213.epizy.com";
    $db_username="epiz_30335074";
    $db_password="MQRpttWuRh";
    $db_name="epiz_30335074_pickabook";

    $conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
    if(!$conn){
        echo "Connection could not happen: ".mysqli_connect_error();
        exit;
    }

    $email=$_POST['email'];
    $password=$_POST['password'];
    $fname=$_POST['Fname'];
    $lname=$_POST['Lname'];
    $number=$_POST['number'];

    $sql="INSERT INTO users(fname,lname,pas,email,pnumber) VALUES('$fname','$lname', '$password', '$email','$number' )";

    $result=mysqli_query($conn,$sql);

    if(!$result){
        echo "Error: " .mysqli_error($conn);
        exit;
    }

    mysqli_close($conn);
?>