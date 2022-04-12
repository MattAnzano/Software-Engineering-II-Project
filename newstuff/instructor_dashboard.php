<DOCTYPE html>
<html>
  <head>
    <title>Instructor Dashboard</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script>
      function openForm() {
        document.getElementById("popupForm").style.display = "block";
      }
      function closeForm() {
        document.getElementById("popupForm").style.display = "none";
      }
    </script>
  <style>
      * {
        box-sizing: border-box;
      }
      .openBtn {
        display: flex;
        justify-content: left;
      }
      .openButton {
        border: none;
        border-radius: 5px;
        background-color: #1c87c9;
        color: white;
        padding: 14px 20px;
        cursor: pointer;
        position: fixed;
      }
      .loginPopup {
        position: relative;
        text-align: center;
        width: 100%;
      }
      .formPopup {
        display: none;
        position: fixed;
        left: 45%;
        top: 5%;
        transform: translate(-50%, 5%);
        border: 3px solid #999999;
        z-index: 9;
      }
      .formContainer {
        max-width: 550px;
        padding: 20px;
        background-color: #fff;
      }
      .formContainer input[type=text],
      .formContainer input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 20px 0;
        border: none;
        background: #eee;
      }
      .formContainer input[type=text]:focus,
      .formContainer input[type=password]:focus {
        background-color: #ddd;
        outline: none;
      }
      .formContainer .btn {
        padding: 12px 20px;
        border: none;
        background-color: #8ebf42;
        color: #fff;
        cursor: pointer;
        width: 100%;
        margin-bottom: 15px;
        opacity: 0.8;
      }
      .formContainer .cancel {
        background-color: #cc0000;
      }
      .formContainer .btn:hover,
      .openButton:hover {
        opacity: 1;
      }
    </style>
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
            <a href="/courses.html" class="card-link">Card link</a>
            <a href="/courses.html" class="card-link">Another link</a>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Class Title 1</h5>
            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="/courses" class="card-link">Card link</a>
            <a href="/courses" class="card-link">Another link</a>
          </div>
        </div>
      </div>
    </div>

    <h2>Create Course</h2>
    <p>To create a course, click on the button and fill in the required fields.</p>
    <div class="openBtn">
      <button class="openButton" onclick="openForm()"><strong>Create</strong></button>
    </div>
    <div class="loginPopup">
      <div class="formPopup" id="popupForm">
        <form action="./addCourse.php" class="formContainer" method="POST">
          <h2>Enter Course Info</h2>
          <label for="courseName">
            <strong>Course Name</strong>
          </label>
          <input type="text" id="courseName" placeholder="course name" name="coursename" required>
          <label for="numberOfStudents">
            <strong>Number Of Students</strong>
          </label>
          <input type="number" id="numofstudents" placeholder="30" name="numofstudents" required>
          <label for="course description">
            <strong>Course Decsription</strong>
          </label>
          <textarea id="classdescription" name="classdescription" rows="4" cols ="50"></textarea>
          <button type="submit" class="btn">Create Course</button>
          <button type="button" class="btn cancel" onclick="closeForm()">Cancel</button>
        </form>
      </div>
    </div>
  </body>
</html>
