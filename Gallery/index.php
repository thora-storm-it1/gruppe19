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

    <div class="background">

      <div class="galleryInfoContainer">

        <div class="galleryLogo">

          <img id="galleryLogo" src="/Bilder/logo.png">

        </div>

        <div class="galleryInfo">

          <h11> Gallery </h11>

          <div id="postsContainer"> <div id="postNum"> </div> posts </div>

          <p id="postText"> This is the Gallery. Here you can find a collection of pictures from the preparation of the team <b> NovaDomus </b>. We are doing our best to upload new pictures, but if you want to see the latest pictures we recommend that you head over to our Instagram or FaceBook. </p>

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
            if($files[$i+1]!=".DS_Store"){
              echo"<img class='galleryThumbnail' src='/Gallery/galleryArchive/".$files[$i+1]."'></img>";
            }
          }
        ?>
      </div>

        <div class="galleryContainer" id="galleryContainer">
          <div class="pageCover" id="pageCover"></div>
          <div class="imageContainer" id="imageContainer">
            <?php
            /*  $directory = "./galleryArchive/";
              $filecount = 0;
              $files = scandir($directory);
              if ($files){
                $filecount = count($files)-2;
              }
              for($i=1; $i<$filecount+1; $i++){
                if($files[$i+1]!=".DS_Store"){
                  echo"<img class='galleryPicture' src='/Gallery/galleryArchive/".$files[$i+1]."'></img>";
                }
              } */
            ?>
            <img class='galleryPicture' src='/Gallery/galleryArchive/gruppe_1.png'></img>
            <img class='galleryPicture' src='/Gallery/galleryArchive/IMG_0115.JPG'></img>
            <img class='galleryPicture' src='/Gallery/galleryArchive/IMG_0172.JPG'></img>
            <img class='galleryPicture' src='/Gallery/galleryArchive/IMG_0175.JPG'></img>
            <img class='galleryPicture' src='/Gallery/galleryArchive/logo.png'></img>
            <img class='galleryPicture' src='/Gallery/galleryArchive/Patch.png'></img>

            <div class="galleryNext" id="galleryNext"><div class="arrow">&#10095;</div></div>
            <div class="galleryPrev" id="galleryPrev"><div class="arrow">&#10094;</div></div>
            <div class="closeX arrow" id="closeX">✖</div>
          </div>
        </div>
      </div>
      <script src="gallery.js"></script>

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
