<form class="signup col-6 container mt-5 pt-5" method="post" enctype="multipart/form-data" action="./server/requests.php">
  <h1 class="mb-3 mt-4">Sign Up</h1>
  <div class="mb-3 mt-4">
    <label for="name" class="form-label">Username</label>
    <input type="text" name="name" placeholder="Name" class="form-control" id="name">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" name="email" placeholder="Example@gmail.com" class="form-control" id="email">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" name="password" placeholder="xxxxxxxx" class="form-control" id="password">
  </div>
  <div class="mb-3 mt-4">
    <label for="address" class="form-label">Address</label>
    <input type="text" name="address" placeholder="Address" class="form-control" id="address">
  </div>

  <button type="submit" name="signup">Submit</button>&nbsp; &nbsp; &nbsp; <span>Have an Account<a class="btn btn-link" href="?login=true">Login.</a></span>
</form>