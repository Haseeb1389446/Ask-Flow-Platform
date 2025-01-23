<div class="questions mb-5 mt-5">
    
    <div class="row">
        <div class="col-md-10">
            <h1 class="mb-5">Questions</h1>

            <?php

            include "./server/config.php";
            $query = "SELECT * FROM `questions`";

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

                echo "<div><h4>$category</h4></div>";
            }

            ?>

        </div>
    </div>

</div>