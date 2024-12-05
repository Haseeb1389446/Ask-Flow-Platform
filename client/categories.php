<select class="form-control" name="category" id="category">

<option value="">Select a Category</option>

<?php 

include "./server/config.php";
$query = "SELECT * FROM categories";
$rezult = mysqli_query($con,$query);

foreach($rezult as $row){

$id = $row["id"];
$name = $row["name"];

echo "<option value=$id>$name</option>";

}

?>

</select>