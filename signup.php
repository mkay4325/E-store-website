
<!DOCTYPE html>
<!--

-->
<?php
  require("common.php");

if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>
<html>
    <head>
        <title>E-store|Signup</title>
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
        
        
        <br>
        
        <div class="container">
            <div class="row row_style1">
                <div class="col-xs-4 col-xs-offset-4">
                    <h1> SIGN UP </h1>
                    <form action="signup_script.php" method="POST">
                        <div class="form-group">
                            <input type="text"  class="form-control" placeholder="Name" name="name" pattern="[A-Za-z-0-9]+\s[A-Za-z-'0-9]+" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="email"  class="form-control" placeholder="Email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
							<?php
                                if(isset($_GET["m1"])){
                                  echo $_GET['m1'];
                                }
                            ?>
                        </div>
                          <br>
                        <div class="form-group">
                            <input type="password"  class="form-control" placeholder="Password" name="password" pattern=".{6,}" required>
                        </div>
                            <br>
                        <div class="form-group">
                            <input type="tel"  class="form-control" placeholder="Contact" name="contact" maxlength="10" size="10" required>
							<?php
                                if(isset($_GET["m2"])){
                                  echo $_GET['m2'];
                                }
                            ?>
                        </div>
                              <br>
                        <div class="form-group">
                            <input type="text"  class="form-control" placeholder="City" name="city">
                        </div>
                                <br>
                        <div class="form-group">
                            <input type="text"  class="form-control" placeholder="Address" name="address">
                        </div>
                                  <br>
                        <button class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        
        
        <?php
		include 'footer.php';
		?>
        
    </body>
</html>
