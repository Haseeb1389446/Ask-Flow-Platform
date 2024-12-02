<?php

if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pass = $_POST["password"];
    $address = $_POST["Address"];

    $query = "INSERT INTO `users`(`name`,`email`,`pass`,`address`) VALUES (`$name`,`$email`,`$pass`,`$address`)";
    
}

?>