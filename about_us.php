<?php
include "common.php"
?>
<!DOCTYPE html>
<!--

-->
<html>
    <head>
        <title>E-Store|Products</title>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/css.css" type="text/css">
    </head>
    <body>
         <?php 
      include 'header.php';
        ?>
<div class="about-section">
  <h1>About Us Page</h1>
  <p>Some text about who we are and what we do.</p>
  <p>Resize the browser window to see that this page is responsive by the way.</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
        <img src="img/21.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Jane Doe</h2>
        <p class="title">CEO & Founder</p>
        <p>Mkay4325@gmail.com</p>
        
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
        <img src="img/22.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Mike Ross</h2>
        <p class="title">Art Director</p>
        <p>Sheetal4325@gmail.com</p>
        
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="img/23.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>John Doe</h2>
        <p class="title">Designer</p>
        <p>Shalu4325@gmail.com</p>
        
      </div>
    </div>
  </div>
</div>
 
        <?php
		include 'footer.php';
		?>
        
    </body>
</html>
