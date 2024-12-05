<?php

include "config.php";

session_start();

if(isset($_POST["signup"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pass = $_POST["password"];
    $address = $_POST["address"];

    $query = "INSERT INTO `users`(`name`,`email`,`pass`,`address`) VALUES ('$name','$email','$pass','$address')";
    $rezult = mysqli_query($con,$query);

    if($rezult){
        $_SESSION["user"] = ["pass"=>$pass,"email"=>$email];
        echo "<script>alert('Registered Successfully...');
        window.location.href = '../index.php';
        </script>";
    }else{
        echo "<script>alert('Registeration Failed...');
        window.location.href = '../index.php';
        </script>";
    }
    
} else if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $pass = $_POST["password"];
    
    $query = "SELECT * FROM `users` WHERE email = '$email' AND pass = '$pass'";
    $rezult = mysqli_query($con,$query);
    $row = mysqli_num_rows($rezult);
    
    if($row > 0){
        $_SESSION["user"] = ["email"=>$email,"pass"=>$pass];
        echo "<script>alert('User login successfully...');
        window.location.href = '../index.php';
        </script>";
    }else{
        echo "<script>alert('User not registered...');
        window.location.href = '../index.php';
        </script>";
    }
} else if ($_GET["logout"]) {
    session_destroy();
    echo "<script>alert('Logout Successfully...')</script>";
    header('location:../index.php');
}

?>