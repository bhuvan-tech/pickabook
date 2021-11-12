
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
            header("Location: after-login.html"); 
            exit;
        }
        else
            echo "login failure<br>";
        
    }

    mysqli_close($conn); 
?>
