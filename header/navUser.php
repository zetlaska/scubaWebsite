<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><h3><span class="badge bg-primary">Megalodon Dive Academy</span></h3></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="aboutUs.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="locateUs.php">Locate Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="course.php">Courses</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="shop.php">Store</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Trips</a>
              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                <li><a class="dropdown-item" href="manukan.php">Manukan Island Resort</a></li>
                <li><a class="dropdown-item" href="pangkor.php">Pangkor Island</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Dive Log</a>
              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                <li><a class="dropdown-item" href="createLog.php">Log a Dive</a></li>
                <li><a class="dropdown-item" href="viewLog.php">View Existing Dive Logs</a></li>
              </ul>
            </li>
          </ul>
          <div class="d-grid gap-10 d-md-block">
            <a class="btn btn-success" style="width:120px;" href="dashboard.php" role="button">My Account</a>
            <a class="btn btn-danger" style="width:120px;" href="index.php?logout='1'" role="button">Logout</a>
          </div>
        </div>
  </div>
</nav>