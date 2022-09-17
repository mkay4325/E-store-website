<?php
require("common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<!--

-->
<html>
    <head>
        <title>E-Store|Settings</title>
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
        
        <div class="container">
            <div class="row row_style4">
                <div class="col-xs-4 col-xs-offset-4">
                    <h1> Change Password </h1>
					<div><b class="red">
                        <?php
                        if(isset($_GET["error"])){
                          echo $_GET['error'];
                        }
                        ?>
                      </b></div>
                    <form action="settings_script.php" method="POST">
                        <div class="form-group">
                            <input type="password"  class="form-control" placeholder="Old Password" name="oldpassword">
                        </div>
                        <div class="form-group">
                            <input type="password"  class="form-control" placeholder="New Password" name="newpassword">
                        </div>
                        <div class="form-group">
                            <input type="password"  class="form-control" placeholder="Re-type New Password" name="renewpassword">
                        </div>
                        <button class="btn btn-primary">Change</button>
                    </form>
                </div>
            </div>
        </div>
        
        
        <?php 
		include 'footer.php'; 
		?>
        
    </body>
</html>