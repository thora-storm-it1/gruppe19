<!DOCTYPE html>
<html>

  <head>

    <meta charset="utf-8">
    <title> Team NovaDomus | Gallery </title>
    <link rel="stylesheet" href="/stilark.css">
    <link rel="stylesheet" href="/Gallery/gallery.css">
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
      <a class="option" href="/Blog"> Blog </a>
      <a class="option" id="active" href="/Gallery"> Gallery </a>
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

      <div class="galleryHead">
        <div class="galleryIconBox"><img src="/Bilder/logo.png" class="galleryIcon"></img></div>
        <div class="galleryText">
          <div class="galleryTextHead">Gallery</div>
          <div class="galleryData">
            <?php
            $directory = "./galleryArchive/";
            $filecount = 0;
            $files = scandir($directory);
            if ($files){
              $filecount = count($files)-2;
            }
            echo "<div class='galleryDataNumber'>".$filecount."</div>posts";
            ?>
          </div>
          <div class="galleryTextSubHeader">
            About the gallery:
          </div>
          <div class="galleryTextContent">
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
          </div>
        </div>
      </div>

      <div class="gallery">
        <?php
          $directory = "./galleryArchive/";
          $filecount = 0;
          $files = scandir($directory);
          if ($files){
            $filecount = count($files)-2;
          }
          for($i=1; $i<$filecount+1; $i++){
            echo"<img class='galleryThumbnail' src='/Gallery/galleryArchive/gallery$i.jpg'></img>";
          }
        ?>
      </div>

        <div class="galleryContainer" id="galleryContainer">
          <div class="pageCover" id="pageCover"></div>
          <div class="imageContainer" id="imageContainer">
            <?php
              $directory = "./galleryArchive/";
              $filecount = 0;
              $files = scandir($directory);
              if ($files){
                $filecount = count($files)-2;
              }
              for($i=1; $i<$filecount+1; $i++){
                echo"<img class='galleryPicture' src='/Gallery/galleryArchive/gallery$i.jpg'></img>";
              }
            ?>
            <div class="galleryNext" id="galleryNext"><div class="arrow">&#10095;</div></div>
            <div class="galleryPrev" id="galleryPrev"><div class="arrow">&#10094;</div></div>
            <div class="closeX arrow" id="closeX">✖</div>
          </div>
        </div>
      </div>
      <script src="gallery.js"></script>
    </div>

    <div class="footer">

      <div class="foot1">
          <h2> About </h2>
          <p> Team NovaDomus is the CanSat team representing Thora Storm VGS in NAROM's annual CanSat competition 2019. The team is sponsored by NTNU and Thora Storm VGS. </p>
      </div>

      <div class="foot2">
          <h2> Contact </h2>

          <div id="links">
          <a class="kontakt" href="https://www.instagram.com/teamnovadomus/" target="_blank"> <img class="insta" src="/Bilder/insta.png" alt="insta"> </a>
          <a class="kontakt" href="https://discord.gg/pwGcZJ3"> <img class="twitter" src="/Bilder/discord.png" alt="twitter"> </a>
          <a class="kontakt" href="https://www.youtube.com/channel/UCpR4UZgsC1166SOaRYKC_8g" target="_blank"> <img class="tube" src="/Bilder/tube.png" alt="tube"> </a>
          <a class="kontakt" href="#"> <img class="face" src="/Bilder/face.png" alt="face"> </a>
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

<script src="script.js">  </script>

  </body>

</html>
