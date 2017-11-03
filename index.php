<?php require "functions.php"; ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Slider with Arrows</title>
    <link rel="stylesheet" href="css/style.css" type="text/css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="js/jscript.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery-1.11.1.js"></script>
    <script type="text/javascript" src="js/reFresh.js"></script>
  </head>
  <body>
    <div class="container">
      <form id="imgLink" action="#" method="post">
        <input type="url" id = "linkField" name="img" placeholder="Link to an image"><br><br>
        <input type="submit" id = "sendImage" name="name" value="Send">
      </form>
      <div class="btns" id="left" onclick="prevImg();">
      </div>
      <div class="btns" id="right" onclick="nextImg();">
      </div>
      <div id="slider" name="slider">
        <?php
            $img->select("SELECT * FROM image_slider");
         ?>
      </div>
      <span id = "tips"><b>Hover to pause image</b>
          <span style = "display:block;"><br>
            The slider is connected to a database
            and the images are displayed from the database.<br>
            You can insert new images by using the form above, and they will be displayed alongside the current images.
          </span>
      </span>

    </div>

  </body>
</html>
