<?php
  session_start();
  require 'connection.php';

  $logInEmail = $_POST['logInEmail'];
  $logInPassword = $_POST['logInPassword'];
  $sql = "SELECT * FROM users WHERE email = '$logInEmail' AND password = '$logInPassword'";
  $query = mysqli_query($db,$sql);
  $id = mysqli_fetch_assoc($query)['id'];
  if ($id) {
    $_SESSION['id'] = $id;
  }else {
    header('Location: index.php');
  }
?>
