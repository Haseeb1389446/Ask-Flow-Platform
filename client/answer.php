<div class="container answers">
    <h4 class="mt-5">Answers: </h4>

    <?php 

    // include "./client/question-detail.php";
    
    $query = "SELECT * FROM `answers` WHERE question_id = $qid";
    $rezult = mysqli_query($con,$query);

    if(mysqli_num_rows($rezult) === 0) {

        echo "<div class='no-answers'>
                    <h6>No Answers Yet</h6>
                </div>";

    } else {

        foreach ($rezult as $row) {
            $answer = $row["answer"];
            echo "<p>$answer</p>";
        }

    }
    
    ?>

    <br><hr>

    <div class="mt-5 pt-5 relquestion">

        
        <?php 
        $categoryQuery = "SELECT name FROM `categories` WHERE id = $cid";
        $categoryRezult = mysqli_query($con,$categoryQuery);
        $categoryRow = mysqli_fetch_assoc($categoryRezult);
        
        echo "<h2 class='mt-3'>Related To <span style='color:rgb(40, 106, 159)';>\"".$categoryRow["name"]."\"</span></h2>";

        $query = "SELECT * FROM `questions` WHERE category_id = $cid AND id != $qid";

        $rezult = mysqli_query($con,$query);

        foreach($rezult as $row) {
            $title = $row["title"];
            $qid = $row["id"];

            echo "<div><a href='?question-id=$qid'><h4>$title</h4></a></div>";
        }
        

        ?>
    </div>

</div>