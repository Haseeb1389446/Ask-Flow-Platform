<div class="question-post container mb-5 mt-5">
    <h1 class="mb-4 mt-5 pb-4">Questions Details</h1>

     <?php 

     include "./server/config.php";

     $qid = $_GET["question-id"];
     
     $query = "SELECT * FROM `questions` WHERE id = $qid";
     $rezult = mysqli_query($con,$query);
     $row = mysqli_fetch_assoc($rezult);

     

     echo "<h4>Question : ".$row["title"]."</h4>";
     echo "<p>".$row["description"]."</p>";
     
     ?>


     <form action="./server/requests.php" method="post">
     <input type="hidden" name="question-id" value="<?php echo $qid ?>">
     <textarea placeholder="Enter Your Answer..." class="form-control mb-3 mt-4" name="answer"></textarea>
     <button>Submit</button>
     </form>

     <?php include "answer.php"; ?>

</div>