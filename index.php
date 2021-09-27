 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="assets/css/index.css">
  </head>
  <body>
    <?php
    // sql connection
     require 'connection.php';

     $sql = "SELECT * FROM users";

     $query = mysqli_query($db,$sql); //mysql result set
     $result = mysqli_fetch_all($query,MYSQLI_ASSOC);
     echo "<pre>";
     var_dump($result);
     echo "</pre>";

     // echo $result[1]['name'];

     ?>
    <header>
      <img src="assets/images/q.png" alt="">
      <h1>Qantox test</h1>
      <div class="widgetBox">

        <div class="searchContainer">
          <form class="" action="index.html" method="post">
            <input placeholder="Search..." type="text" name="searchQuerry">
            <button type="button" name="button">Search</button>
          </form>
        </div>

        <div class="loginContainer">
          <form action="logInHandler.php" method="post">
            <input type="text" name="logInEmail" value="">
            <input type="text" name="logInPassword" value="">
            <button type="submit" name="button">Log In</button>
          </form>
        </div>

        <div class="registerContainer">
          <form class="" action="registrationHandler.php" method="post">
            <input type="text" name="registerName" value="">
            <input type="text" name="registerEmail" value="">
            <input type="text" name="registerPassword" value="">
            <input type="text" name="registerPasswordRepeat" value="">
            <button type="submit" name="button">Register</button>
          </form>
        </div>

        <a href="logout.php">
          <button type="button" name="button">logout</button>
        </a>

      </div>
    </header>
    <main>
       <?php require "partials/Main.php" ?>
       <?php require "partials/Main.php" ?>
       <?php require "partials/Main.php" ?>
       <?php require "partials/Main.php" ?>
       <?php require "partials/Main.php" ?>
    </main>
  </body>
</html>
