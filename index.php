<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
--><?php
require("common.php");
if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>
<html>
    <head>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/css.css" type="text/css">
        <title><?php echo 'E-store';?></title>
        
        

    </head>
    <body>
      <?php 
      include 'header.php';
        ?>
         <div  id="banner_image">
            <div id="container">
                <center>
                    <div id="banner_content">
                        <h1>We sell lifestyle.</h1>
                        <p>Flat 40% OFF on premium brands</p>
                        <a class="btn btn-danger btn-lg active" href="products.php">Shop Now</a>
                    </div>
                </center>
            </div>
        </div>
        
        
        
        
        <?php 
        include 'footer.php';
        ?>
            
    </body>
</html>
