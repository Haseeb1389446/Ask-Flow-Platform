<div class="questions mb-5 mt-5">
    
    <div class="row">
        <div class="col-md-10">
            <h1 class="mb-5">Questions</h1>

            <?php

            include "./server/config.php";

            if(isset($_GET["category-id"])) {

                $cid = (int) $_GET["category-id"];
                $query = "SELECT * FROM `questions` WHERE category_id = $cid";

            } else if(isset($_GET["user-id"])) {

                $uid = (int) $_GET["user-id"];
                $query = "SELECT * FROM `questions` WHERE category_id = $uid";

            } else if(isset($_GET["latest"])) {

                $query = "SELECT * FROM `questions` ORDER BY id desc";

            } else {

                $query = "SELECT * FROM `questions`";

            }

            $rezult = mysqli_query($con, $query);

            foreach ($rezult as $row) {
                $title = $row["title"];
                $qid = $row["id"];
                
                echo "<div><a href='?question-id=$qid'><h4>$title</h4></a></div>";
            }

            ?>

        </div>

        <div class="col-md-2">
            <h2 class="mb-5">Category</h2>

            <?php

            $query = "SELECT * FROM `categories`";
            $rezult = mysqli_query($con, $query);
            
            foreach ($rezult as $row) {
                $category = $row["name"];
                $cid = $row["id"];

                echo "<div><a href='?category-id=$cid'><h4>$category</h4></a></div>";
            }

            ?>

        </div>
    </div>

</div>