<DOCTYPE html>
<html>
  <head>
    <title>Instructor Dashboard</title>

  </head>
  <body>
    <?php include 'navbar.php';?>
    <div class="px-4">
      <h1>Recent Events</h1>
      <a href="#"><h2>January 2nd: Event Name</h2></a>
      <a href="#"><h2>January 2nd: Event Name</h2></a>
      <a href="#"><h2>January 2nd: Event Name</h2></a>

      <hr>
      <h1>Courses</h1>
      <div class="container float-start d-inline-flex flex-row"> <!-- we can insert cards like these with php later--> 
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Class Title 1</h5>
            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Class Title 1</h5>
            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
