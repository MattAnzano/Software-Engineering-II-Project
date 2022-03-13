<DOCTYPE html>
<html>
  <head>
    <?php require 'bootstrap.php';?>
  </head>
  <body>
    <!-- Change this to edit the background of the navbar/ bg-danger refers to a contextual color. -->
    <nav class="navbar navbar-expand-lg navbar-light bg-danger">
      <!-- Contains all of the following elements of the navbar, like the text, links, -->
      <div class="container-fluid">
        <!-- navbar-brand just refers to a specific contextual setting. -->
        <a class="navbar-brand mb-0 h1">Website</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Specifically used for the text that makes up each of the items in the navbar, including
               any dropdowns, etc. use nav-item/nav-item dropdown to add them. -->
          <div class="navbar-nav">
            <a class="nav-item nav-link" href="#">Dashboard</a>
            <a class="nav-item nav-link" href="#">Groups</a>
            <a class="nav-item nav-link" href="#">Calendars</a>
            <a class="nav-item nav-link" href="#">Course</a>
            <div class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
                Dropdown link 
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Something</a>
                <a class="dropdown-item" href="#">Something Else</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Other</a>
              </div>
            </span>
          </div>
        </div>    
      </div>
    </nav>
    <div class="container-fluid p-3">
    </div>
  </body>
</html>
