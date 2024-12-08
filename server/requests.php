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
    
    $user_id = mysqli_insert_id($con);

    if($rezult){

        $_SESSION["user"] = [
            "user_id" => $user_id,
            "pass" => $pass,
            "email" => $email
        ];

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
    
    $user_id = mysqli_insert_id($con);

    if($row > 0){

        $_SESSION["user"] = [
            "user_id" => $user_id->insert_id,
            "pass" => $pass,
            "email" => $email
        ];

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
    header('location:../index.php');

} else if (isset($_POST["ask"])) {
    $title = $_POST["title"];
    $description = $_POST["description"];
    $category_id = $_POST["category"];
    $user_id = $_SESSION["user"]["user_id"];

    $query = "INSERT INTO `questions`(`title`,`description`,`category_id`,`user_id`) VALUES ('$title','$description','$category_id','$user_id')";
    $rezult = mysqli_query($con,$query);
    
    $user_id = mysqli_insert_id($con);

    if($rezult){

        echo "<script>alert('Question is added to website...');
        window.location.href = '../index.php';
        </script>";
    }else{
        echo "<script>alert('Question is not added to website...');
        window.location.href = '../index.php';
        </script>";
    }

}

?>