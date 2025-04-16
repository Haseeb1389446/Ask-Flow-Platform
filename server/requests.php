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
            "name" => $name,
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

    if($row > 0){

        $user_data = mysqli_fetch_assoc($rezult);

        $_SESSION["user"] = [
            "user_id" => $user_data["id"],
            "name" => $user_data["name"],
            "pass" => $user_data["pass"],
            "email" => $user_data["email"]
        ];

        echo "<script>alert('User login successfully...');
        window.location.href = '../index.php';
        </script>";
    }else{
        echo "<script>alert('User not registered...');
        window.location.href = '../index.php';
        </script>";
    }

} else if (isset($_GET["logout"])) {

    session_destroy();
    header('location:../index.php');

} else if (isset($_POST["ask"])) {
    $title = $_POST["title"];
    $description = "→ " . $_POST["description"];
    $category_id = $_POST["category"];
    $user_id = $_SESSION["user"]["user_id"];

    $query = "INSERT INTO `questions`(`title`, `description`, `category_id`, `user_id`) VALUES ('$title','$description','$category_id','$user_id')";
    $rezult = mysqli_query($con,$query);
    
    if($rezult){

        echo "<script>alert('Question is added to website...');
        window.location.href = '../index.php';
        </script>";
    }else{
        echo "<script>alert('Question is not added to website...');
        window.location.href = '../index.php';
        </script>";
    }

} else if (isset($_POST["answer"])) {

    $answer = $_POST["answer"];
    $question_id = $_POST["question-id"];
    $user_id = $_SESSION["user"]["user_id"];

    $query = "INSERT INTO `answers`(`answer`,`question_id`,`user_id`) VALUES ('$answer','$question_id','$user_id')";
    $rezult = mysqli_query($con,$query);
    
    if($rezult){
        
        echo header("location: /Ask Flow?question-id=$question_id");
    }else{
        echo "<script>alert('Answer is not Submitted...');
        window.location.href = '/Ask Flow?question-id=$question_id';
        </script>";
    }

} else if (isset($_GET["q-delete"])) {

    $qid = $_GET["q-delete"];
    $user_id = $_SESSION["user"]["user_id"];

    $query = "DELETE FROM `questions` WHERE id = $qid";
    $rezult = mysqli_query($con,$query);

    if ($rezult) {
        echo "<script>alert('The Question is Deleted...');
        window.location.href = '../index.php?user-id=$user_id';
        </script>";
    } else {
        echo "<script>alert('Question is not Deleted...');
        window.location.href = '../index.php?user-id=$user_id';
        </script>";
    }

} else {
    
}

?>