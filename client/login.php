<form class="login col-6 container mt-5 pt-5" method="post" enctype="multipart/form-data" action="./server/requests.php">
  <h1 class="mb-5 mt-4">Log In</h1>
  <div class="mb-3 mt-4">
    <label for="email" class="form-label">Email</label>
    <input type="email" name="email" placeholder="Example@gmail.com" class="form-control mb-4" id="email">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" name="password" placeholder="xxxxxxxx" class="form-control mb-5" id="password">
  </div>


  <button type="submit" name="login">Submit</button>&nbsp; &nbsp; &nbsp; <span>Create an Account<a class="btn btn-link" href="?signup=true">Sign Up.</a></span>
</form>