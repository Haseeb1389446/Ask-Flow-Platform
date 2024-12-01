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
    
            include './client/header.php';
            
            if(isset($_GET["signup"])){
                include './client/signup.php';
            }else if (isset($_GET["login"])) {
                include './client/login.php';
            }else{
                //
            }
            
            
            include './client/footer.php';
        ?>

    </div>
</body>
</html>