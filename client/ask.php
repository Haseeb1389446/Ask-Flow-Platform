<form class="login col-6 container mt-5 pt-5" method="post" enctype="multipart/form-data" action="./server/requests.php">
  <h1 class="mb-5 mt-4">Ask A Question</h1>
  <div class="mb-3 mt-4">
    <label for="title" class="form-label">Title</label>
    <input type="text" name="title" placeholder="question title" class="form-control mb-4" id="title">
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea type="text" name="description" placeholder="description" class="form-control mb-4" id="description"></textarea>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Categories</label>
    <?php 
    
    include "categories.php";
    
    ?>
  </div>


  <button type="submit" name="login">Submit</button>
</form>