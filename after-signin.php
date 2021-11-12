<?php
    header("Location: index.html"); 
    exit;
?>
<?php 
    $db_hostname="127.0.0.1";
    $db_username="root";
    $db_password="";
    $db_name="hack";

    $conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
    if(!$conn){
        echo "Connection could not happen: ".mysqli_connect_error();
        exit;
    }

    $email=$_POST['email'];
    $pas=$_POST['password'];

    $sql="select * from users where email='$email' and pas='$pas'";

    $result=mysqli_query($conn,$sql);

    if(!$result){
        echo "Error: " .mysqli_error($conn);
        exit;
    }

    while($row=mysqli_fetch_assoc($result)){
        if($row){
            echo "hello " . $row['name'] ."<br>";
            // setcookie("id",$row['id'], time()+3600);
            // setcookie("email",$row['email'],time()+3600);
        }
        else
            echo "login failure<br>";
         ?>
         <a href="after-login.html">click me</a>
         <?php 
        
    }

    mysqli_close($conn); 
?>