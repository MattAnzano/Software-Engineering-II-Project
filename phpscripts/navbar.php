<DOCTYPE html>
<html>
  <head>
    <?php require '../bootstrap.php';?>
  </head>
  <body>
    <!-- Change this to edit the background of the navbar/ bg-danger refers to a contextual color. -->
    <nav class="navbar navbar-expand-lg navbar-light bg-danger">
      <!-- Contains all of the following elements of the navbar, like the text, links, -->
      <div class="container-fluid">
        <!-- navbar-brand just refers to a specific contextual setting. -->
        <a class="navbar-brand">Website</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Specifically used for the text that makes up each of the items in the navbar, including
               any dropdowns, etc. use nav-item/nav-item dropdown to add them. -->
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="calendar.php">Calendar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="courses.html">Courses</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="other.html">Other</a>
            </li>
            <!--
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            -->
          </ul>
          <!-- used for search bar, if we really need it
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form> -->
        </div>
      </div>
    </nav>
    <div class="container-fluid p-3">
    </div>
  </body>
</html>
