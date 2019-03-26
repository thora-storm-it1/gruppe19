<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <title> Team NovaDomus | Registration </title>
    <link rel="stylesheet" href="register.css">
    <link rel="icon" href="/Bilder/logo.png">

  </head>

  <?php

  if (isset($_GET["blogg_id"])) {
    $blogg_id = $_GET["blogg_id"];
  }

  $tjener = "localhost";
  $brukernavn = "root";
  $passord = "root";
  $database = "Blogg";

  $kobling = new mysqli($tjener, $brukernavn, $passord, $database);

  if ($kobling->connect_error) {
    die("KVARG ER DETTE?!: " . $kobling->connect_error);
  }

  $kobling->set_charset("utf8");

  if (isset($_POST["submit"])) {

    $register = true;

    $username = $_POST["username"];
    $password = $_POST["password"];
    $password_rep = $_POST["password_rep"];

    if($_POST["image"]) {
      $image = $_POST["image"];
    } else {
      $image = "/Bilder/default.jpg";
    }

    if ($password == $password_rep) {

      $sql_2 = "SELECT * FROM Kommentar_forfatter";

      $resultat = $kobling->query($sql_2);

      while($rad = $resultat->fetch_assoc()) {
        $username_check = $rad["Kallenavn"];

        if($username == $username_check) {
          $register = false;
          echo "<script> alert('A user with that username already exists.') </script>";
          break;
        }

      }

      if ($register) {

        $sql = "INSERT INTO Kommentar_forfatter (Kallenavn, Passord, Profile_image)
                VALUES ('$username', '$password', '$image')";

        if($kobling->query($sql)) {
          $register = false;
          header("Location: /Blog_post?blogg_id=$blogg_id.");
        } else {
          echo "<script> alert('Registration failed.') </script>";
          $register = false;
        }

      }

    } else {
      echo "<script> alert('Passwords do not match.') </script>";
      $register = false;
    }

  }

  ?>

  <script>
    //thank you god. I promise never to use PHP again
    if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
    }
  </script>

  <body>

    <div class="container">

      <img id="logo" src="/Bilder/logo.png" onclick="location.href = '/'">

      <form id="register" method="post">

        <input class="register" type="text" name="username" placeholder="Username..." required>

        <input class="register" type="password" name="password" placeholder="Password..." required>

        <input class="register" type="password" name="password_rep" placeholder="Repeat password..." required>

        <input class="register" type="text" name="image" placeholder="Profile image URL...">

        <input id="submit" type="submit" name="submit" value="Register new user">

      </form>

    </div>

  </body>

</html>
