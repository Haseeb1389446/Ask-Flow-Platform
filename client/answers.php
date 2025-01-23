<div class="container mb-5 mt-5">
    <h1>Questions Details</h1>

     <?php 

     include "./server/config.php";

     $qid = $_GET["question-id"];
     
     $query = "SELECT * FROM `questions` WHERE id = $qid";
     $rezult = mysqli_query($con,$query);
     $row = mysqli_fetch_assoc($rezult);

    

     echo "<h4></h4>";
     
     ?>
</div>