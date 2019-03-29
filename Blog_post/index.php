<!DOCTYPE html>
<html>

  <head>

    <meta charset="utf-8">

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

    $sql = "SELECT Blogg_tittel FROM Blogginnlegg WHERE Blogg_id = $blogg_id";
    $resultat = $kobling->query($sql);

    while($rad = $resultat->fetch_assoc()) {
      $tittel = $rad["Blogg_tittel"];

      echo "<title> Team NovaDomus | $tittel </title>";
    }

    ?>

    <link rel="stylesheet" href="/stilark.css">
    <link rel="stylesheet" href="blogg_innlegg.css">
    <link rel="icon" href="/Bilder/logo.png">


  </head>

  <body>

    <div class="page_container">

      <div id="side_menu">

        <div id="close" onclick="hideSideMenu(); hideSide_all()">
        &#9587;
        </div>

        <div id="side_menu_options">
          <div class="side_option_container"> <a class="side_option" id="side_active" href="/"> Home </a> </div>

          <div class="side_option_container"> <a class="side_option" onclick="checkSide_1()"> About </a> </div>
            <div id="side_dropdown_container_1">
              <a class="side_drop_option"href="/About"> About us </a>
              <a class="side_drop_option" href="/Members"> Members </a>
            </div>

          <div class="side_option_container" id="side_documents"> <a class="side_option" href="/Documents"> Documents </a> </div>
          <div class="side_option_container"> <a class="side_option" href="/Blog"> Blog </a> </div>
          <div class="side_option_container"> <a class="side_option" href="/Sponsors"> Sponsors </a> </div>
          <div class="side_option_container"> <a class="side_option" onclick="checkSide_2()"> Links </a> </div>
            <div id="side_dropdown_container_2">
              <a class="side_drop_option" href="https://web.trondelagfylke.no/thora-storm-videregaende-skole" target="_blank"> Thora Storm </a>
              <a class="side_drop_option" href="https://www.ntnu.no/" target="_blank"> NTNU </a>
              <a class="side_drop_option" href="https://www.narom.no/" target="_blank"> NAROM </a>
              <a class="side_drop_option" href="https://www.esa.int/ESA" target="_blank"> ESA </a>
              <a class="side_drop_option" href="https://www.nasa.gov/" target="_blank"> NASA </a>
            </div>
        </div>

      </div>

      <div class="content_container">

    <div class="header">
      <img id="logo" src="/Bilder/logo.png" onclick="location.href = '/'"> <h1 onclick="location.href = '/'"> Team NovaDomus </h1>
    </div>

    <div class="menu">

      <a class="option" href="/"> Home </a>

      <div class="dropdown_container">
          <div class="option" >
            <a> About </a> <div class="drop_arrow"> &#10095; </div>
          </div>
          <div class="dropMenu">
            <div class="optionContainer">
              <a class="drop_option" href="/About"> About the team </a>
              <a class="drop_option" href="/Members"> Members </a>
            </div>
          </div>
      </div>

      <a class="option" href="/Documents"> Documents </a>
      <a class="option" id="active" href="/Blog"> Blog </a>
      <a class="option" href="/Gallery"> Gallery </a>
      <a class="option" href="/Sponsors"> Sponsors </a>

      <div class="dropdown_container">
          <div class="option">
            <a> Links </a> <div class="drop_arrow"> &#10095; </div>
          </div>
          <div class="dropMenu">
            <div class="optionContainer">
              <a class="drop_option" href="https://web.trondelagfylke.no/thora-storm-videregaende-skole" target="_blank"> Thora Storm </a>
              <a class="drop_option" href="https://www.ntnu.no/" target="_blank"> NTNU </a>
              <a class="drop_option" href="https://www.narom.no/" target="_blank"> NAROM </a>
              <a class="drop_option" href="https://www.esa.int/ESA" target="_blank"> ESA </a>
              <a class="drop_option" href="https://www.nasa.gov/" target="_blank"> NASA </a>
            </div>
          </div>
      </div>

    </div>

    <div id="side_menu_button" onclick="showSideMenu()">
      &#9776;
    </div>

    <div class="bakgrunn">

      <div class="blogg_innlegg">

        <?php

        $sql = "SELECT *, Innlegg_forfatter.Fornavn, Innlegg_forfatter.Etternavn FROM Blogginnlegg JOIN Innlegg_forfatter ON
        Blogginnlegg.Inn_forfatter_id = Innlegg_forfatter.Inn_forfatter_id WHERE Blogg_id = $blogg_id ORDER BY Dato DESC";

        $resultat = $kobling->query($sql);

        while($rad = $resultat->fetch_assoc()) {
          $tittel = $rad["Blogg_tittel"];
          $intro = $rad["Blogg_intro"];
          $tekst = $rad["Blogg_tekst"];
          $image_1 = $rad["Image_1"];
          $image_2 = $rad["Image_2"];
          $image_3 = $rad["Image_3"];
          $image_4 = $rad["Image_4"];
          $dato = $rad["Dato"];
          $fornavn = $rad["Fornavn"];
          $etternavn = $rad["Etternavn"];

          echo "<div class='blog_container'>";

          echo "<div id='blog_tekst'>";

          echo "<br> <br>";
          echo "<h7> $tittel </h7>";
          echo "<br> <br> <br> <br>";

          echo "<div class='blog_avsnitt'> $intro </div>";

          echo "<div class='blog_avsnitt'> $tekst </div>";

          echo "</div>";

          echo "<div id='blog_img_container'>";
          echo "<br> <br>";

          echo "<div id='blog_img_frame'> <img id='blog_img' src='$image_1'> </div>";
          echo "<br>";

          if ($image_2){
            echo "<div id='blog_img_frame'> <img id='blog_img' src='$image_2'> </div>";
            echo "<br>";
          }

          if ($image_3){
            echo "<div id='blog_img_frame'> <img id='blog_img' src='$image_3'> </div>";
            echo "<br>";
          }

          if ($image_4){
            echo "<div id='blog_img_frame'> <img id='blog_img' src='$image_4'> </div>";
            echo "<br>";
          }

          echo "</div>";

          echo "</div>";

          echo "<br> <br> <br>";
          echo "<p class='blogg_info'> Written $dato by $fornavn $etternavn </p> ";
          echo "<br> <br> <br>";
        }

        ?>

        <a id="tilbake" href="/Blog"> &#10094; Go back </a>

      </div>

      <?php

      if (isset($_GET["blogg_id"])) {
        $blogg_id = $_GET["blogg_id"];
      }

      $login = false;
      $date = date("Y.m.d");
      $time = date("h:i");

      if(isset($_POST["submit"])) {

        $comment = $_POST["comment"];
        $username = $_POST["username"];
        $password = $_POST["password"];

        $sql_2 = "SELECT * FROM Kommentar_forfatter";

        $resultat = $kobling->query($sql_2);

        while($rad = $resultat->fetch_assoc()) {
          $username_check = $rad["Kallenavn"];
          $password_check = $rad["Passord"];
          $user_id_check = $rad["Kom_forfatter_id"];

          if(($username_check == $username) && ($password_check == $password)) {
            $login = true;
            $user_id = $user_id_check;
            break;
          }

        }

        if($login) {

          $sql = "INSERT INTO Kommentar (Kommentar_tekst, Dato, Blogg_id, Kom_forfatter_id) VALUES ('$comment', '$date', '$blogg_id', '$user_id')";

          if($kobling->query($sql)) {
            $login = false;
            header('Location: .');
          } else {
            $login = false;
            header('Location: .');
          }

        } else {
          echo "<script> alert('Login failed. Did you type in the correct password?') </script>";
        }

      }

      ?>

      <script>
        //thank you god. I promise never to use PHP again
        if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
        }
      </script>

      <div class="comment_section">

        <h8> Comments </h8>

        <br> <br> <br>

        <div class="comment_container">

        <?php

        $sql = "SELECT *, Kommentar_forfatter.Kallenavn, Kommentar_forfatter.Profile_image, Kommentar_forfatter.Passord FROM Kommentar JOIN Kommentar_forfatter ON Kommentar.Kom_forfatter_id = Kommentar_forfatter.Kom_forfatter_id WHERE Blogg_id = $blogg_id ORDER BY Kommentar_id DESC";

        $resultat = $kobling->query($sql);

        while ($rad = $resultat->fetch_assoc()) {
          $kommentar_tekst = $rad["Kommentar_tekst"];
          $profile_img = $rad["Profile_image"];
          $kallenavn = $rad["Kallenavn"];
          $dato = $rad["Dato"];


          echo "<div class='comment'>";


          echo "<div class='profile_img_container'>";
          echo "<img class='profile_img' src='$profile_img'>";
          echo "</div>";


          echo "<div class='comment_content_container'>";

          echo "<div class='comment_title'> $kallenavn $dato </div>";
          echo "<div class='comment_text'> $kommentar_tekst </div>";

          echo "</div>";


          echo "</div>";


        }

        ?>

      </div>


      <div class="comment_submit_container">

          <h9> Write a comment </h9>


          <form id="writeComment" method="post">

            <div class="comment_submit">

              <div class="comment_input">

                <textarea id="comment_text" name="comment" placeholder="Write a comment..." rows="12" cols="60" maxlength="256"></textarea>

              </div>

              <div class="comment_login">

                <input class="login" name="username" type="text" placeholder="Username...">

                <input class="login" name="password" type="password" placeholder="Password...">

                <?php

                if (isset($_GET["blogg_id"])) {
                  $blogg_id = $_GET["blogg_id"];
                }

                echo "<div id='new_user_container'> <a id='new_user' href='/Register?blogg_id=$blogg_id'> Register new user </a> </div>";

                ?>

                <div id="submit_container"> <input type="submit" id="submit" name="submit" value="Submit"> </div>

              </div>

            </div>

          </form>

      </div>


    </div>

    <div class="footer">

      <div class="foot1">
          <h2> About </h2>
          <p> Team NovaDomus is the CanSat team representing Thora Storm VGS in NAROM's annual CanSat competition 2019. The team is sponsored by NTNU and Thora Storm VGS. </p>
      </div>

      <div class="foot2">
          <h2> Contact </h2>

          <div id="links">
          <a class="kontakt" href="https://www.instagram.com/teamnovadomus/" target="_blank"> <img class="insta" src="/Bilder/Icons/insta.png" alt="insta"> </a>
          <a class="kontakt" href="https://discord.gg/pwGcZJ3"> <img class="twitter" src="/Bilder/Icons/discord.png" alt="twitter"> </a>
          <a class="kontakt" href="https://www.youtube.com/channel/UCpR4UZgsC1166SOaRYKC_8g" target="_blank"> <img class="tube" src="/Bilder/Icons/tube.png" alt="tube"> </a>
          <a class="kontakt" href="#"> <img class="face" src="/Bilder/Icons/face.png" alt="face"> </a>
          </div>


          <br> <br> <br> <br>
          <div id="mail_container"> <mail> E-mail: </mail> <a id="mail" href="mailto:adriahey@stud.ntnu.no"> adriahey@stud.ntnu.no </a> </div>

      </div>

      <div class="foot3">
          <p class="copyright"> This website was developed by members of Team NovaDomus. </p>
      </div>

    </div>

  </div>

</div>

<script src="/script.js">  </script>

  </body>

</html>
