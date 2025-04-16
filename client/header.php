<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a href="index.php"><img src=".\public\askflow-logo.png" height="120px" class="navbar-brand" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Align UL to the right -->
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 mr-5">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="./">Home</a>
        </li>

        <?php

        if (isset($_SESSION["user"]["email"])) {

        ?>

          <li class="nav-item">
            <a class="nav-link" href="./server/requests.php?logout=true">Logout | <?php echo $_SESSION["user"]["name"]; ?></a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="?ask=true">Ask A Question</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="?user-id=<?php echo $_SESSION["user"]["user_id"];?>">My Questions</a>
          </li>

        <?php }else{ ?>

          <li class="nav-item">
          <a class="nav-link" href="?login=true">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?signup=true">Sign up</a>
        </li>

        <?php }; ?>

        <li class="nav-item">
          <a href="?latest=true" class="nav-link">Latest Questions</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2 header-input" type="search" name="search" placeholder="Search">
        <button class="btn" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
      </form>
    </div>
  </div>
</nav>