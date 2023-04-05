<?php
  // start the session
  session_start();

  // get the new task from the form submission
  $new_task = $_POST['task'];

  // add the new task to the tasks array in the session
  $_SESSION['tasks'][] = $new_task;

  // redirect back to the main page
  header('Location: index.php');
?>
