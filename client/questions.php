<div class="questions mb-5 mt-5">
    
    <div class="row">
        <div class="col-md-9">
            <h1 class="mb-5">Questions</h1>

            <?php

            $uid = null;
            include "./server/config.php";

            if(isset($_GET["category-id"])) {

                $cid = (int) $_GET["category-id"];
                $query = "SELECT * FROM `questions` WHERE category_id = $cid";

            } else if(isset($_GET["user-id"])) {

                $uid = (int) $_GET["user-id"];
                $query = "SELECT * FROM `questions` WHERE category_id = $uid";

            } else if(isset($_GET["latest"])) {

                $query = "SELECT * FROM `questions` ORDER BY id desc";

            } else if(isset($_GET["search"])) {

                $query = "SELECT * FROM `questions` WHERE `title` LIKE '%$search%'";

            } else {

                $query = "SELECT * FROM `questions`";

            }

            $rezult = mysqli_query($con, $query);

            foreach ($rezult as $row) {
                $title = $row["title"];
                $qid = $row["id"];
                
                echo "<div><h4><a href='?question-id=$qid'>$title</a>";
                echo $uid?"<a href='./server/requests.php?q-delete=$qid' class='q-delete'>Delete</a>":NULL;
                echo "</h4></div>";
            }

            ?>

        </div>

        <div class="col-md-2 category">
            <h2 class="mb-5">Category</h2>

            <?php

            $query = "SELECT * FROM `categories`";
            $rezult = mysqli_query($con, $query);
            
            foreach ($rezult as $row) {
                $category = $row["name"];
                $cid = $row["id"];

                echo "<a class='mb-2' href='?category-id=$cid'>$category</a>";
            }

            ?>

        </div>
    </div>

</div>