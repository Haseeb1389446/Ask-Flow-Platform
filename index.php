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
            
            if (isset($_GET["signup"]) && (!isset($_SESSION["user"]) || !isset($_SESSION["user"]["email"]))) {

                include './client/signup.php';

            } else if (isset($_GET["login"]) && (!isset($_SESSION["user"]) || !isset($_SESSION["user"]["email"]))) {

                include './client/login.php';

            } else if (isset($_GET["ask"])) {

                if (isset($_SESSION["user"]) && isset($_SESSION["user"]["email"])) {
                    include './client/ask.php';
                } else {
                    header("Location: ?login=true"); // redirect to login if not logged in
                    exit;
                }

            } else if (isset($_GET["question-id"])) {

                include './client/question-detail.php';

            } else if (isset($_GET["category-id"])) {

                include './client/questions.php';

            } else if (isset($_GET["search"])) {

                $search = $_GET["search"];
                include './client/questions.php';

            } else {

                include './client/questions.php';

            }
            
            
            include './client/footer.php';
        ?>

    </div>
</body>
</html>