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

</div>