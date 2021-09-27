<?php
  require "connection.php";
  $registerName = $_POST['registerName'];
  $registerEmail = $_POST['registerEmail'];
  $registerPassword = $_POST['registerPassword'];

  $sql = "INSERT INTO users VALUES (NULL,'$registerName','$registerEmail','$registerPassword')";
  $query = mysqli_query($db,$sql);

  if($query){
    header('Location:index.php');
  }
 ?>
