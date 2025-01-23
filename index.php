<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './client/commonFiles.php'; ?>
    <title>Ask Flow</title>
</head>
<body>
    <div class="main-container">

        <?php 

        session_start();
    
            include './client/header.php';
            
            if(isset($_GET["signup"]) && (!isset($_SESSION["user"]) || !isset($_SESSION["user"]["email"]))){
                include './client/signup.php';
            }else if (isset($_GET["login"]) && (!isset($_SESSION["user"]) || !isset($_SESSION["user"]["email"]))) {
                include './client/login.php';
            }else if (isset($_GET["ask"])) {
                include './client/ask.php';
            }else if (isset($_GET["question-id"])) {
                include './client/answers.php';
            }else{
                include './client/questions.php';
            }
            
            
            include './client/footer.php';
        ?>

    </div>
</body>
</html>