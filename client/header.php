<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <img src=".\public\askflow-logo.png" height="120px" class="navbar-brand" alt="logo">
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
            <a class="nav-link" href="./server/requests.php?logout=true">Logout</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="?ask=true">Ask A Question</a>
          </li>

        <?php }else{ ?>

          <li class="nav-item">
          <a class="nav-link" href="?login=true">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?signup=true">Sign up</a>
        </li>

        <?php }; ?>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Category
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link">Latest Questions</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2 header-input" type="search" id="" placeholder="Search" aria-label="Search">
        <button class="btn" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
      </form>
    </div>
  </div>
</nav>