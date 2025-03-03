<div class="container answers">
    <h4 class="mt-5">Answers: </h4>

    <?php 
    
    $query = "SELECT * FROM `answers` WHERE question_id = $qid";
    $rezult = mysqli_query($con,$query);

    foreach ($rezult as $row) {
        $answer = $row["answer"];
        echo "<p>$answer</p>";
    }
    
    ?>

    <div class="mt-5 pt-5 relquestion">

        <h1>Related To "<span style="color:rgb(40, 106, 159);">Coding</span>"</h1>

        <?php 
        $cid = (int) $_GET["question-id"];
        $query = "SELECT * FROM `questions` WHERE category_id = $cid";

        $rezult = mysqli_query($con,$query);

        foreach($rezult as $row) {
            $title = $row["title"];
            $qid = $row["id"];

            echo "<div><a href='?question-id=$qid'><h4>$title</h4></a></div>";
        }
        

        ?>
    </div>

</div>