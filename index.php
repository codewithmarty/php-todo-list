<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Todo List</title>
  <link href="https://fonts.googleapis.com/css?family=Baloo+Thambi+2&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>My Todo List</h1>
    <form action="add_task.php" method="post">
      <input type="text" name="task" id="task" placeholder="Enter a new task...">
      <button type="submit">Add</button>
    </form>
    <ul>
      <?php
        // start the session
        session_start();

        // check if the tasks array exists in the session
        if (isset($_SESSION['tasks'])) {
          // loop through the tasks array and display each task
          foreach ($_SESSION['tasks'] as $task) {
            echo '<li>' . $task . '</li>';
          }
        }
      ?>
    </ul>
  </div>
</body>
</html>
