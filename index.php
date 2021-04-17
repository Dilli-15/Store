<?php
require ("includes/common.php");

// Redirects the user to products page if he/she is logged in.
if (isset($_SESSION['email'])) {
  header('location: products.php');
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome |E- Store</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body style="padding-top: 50px;">
        <!-- Header -->
        <?php
        include ("includes/header.php");
        ?>
            <div class="container">
                <div class="row text-center" id="item_list">
                    <div class="col-sm-4">
                      <div class = "panel panel-default">
                      <div class = "panel-heading">Mobile 1</div>
                      <div class = "panel-body">
                      <img src="img/e6.jpg" alt="" class="img-responsive center-block" >
                      <div class="caption">
                      <p>4.2 inch screen with 3 gb ram and 16gb rom</p>
                      <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Order Now</a></p>
                                <?php
                            } else {
                                header('location: products.php');
                            }
                            ?>
                       </div>
                       </div>
                       </div>  
                    </div>
                    <div class="col-sm-4">
                      <div class = "panel panel-default">
                      <div class = "panel-heading">Mobile 2</div>
                      <div class = "panel-body">
                      <img src="img/e.jfif" alt="" class="img-responsive center-block" style="width:225px;height:225px;">
                      <div class="caption">
                      <p>oppo A5  6.2 inch screen,6gb ram,64bg rom.</p>
                      <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Order Now</a></p>
                                <?php
                            } else {
                                header('location: products.php');
                            }
                            ?>
                       </div>
                       </div>
                       </div>  
                    </div>

                    <div class="col-sm-4">
                      <div class = "panel panel-default">
                      <div class = "panel-heading">Mobile 3</div>
                      <div class = "panel-body">
                      <img src="img/e1.jfif" alt="" class="img-responsive center-block" >
                      <div class="caption">
                      <p>Samsung s10e with 6.1,8gb ram,128gb rom</p>
                      <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Order Now</a></p>
                                <?php
                            } else {
                                header('location: products.php');
                            }
                            ?>
                       </div>
                       </div>
                       </div>  
                    </div>

                    <div class="row text-center" id="item_list">
                    <div class="col-sm-4">
                      <div class = "panel panel-default">
                      <div class = "panel-heading">Mobile 4</div>
                      <div class = "panel-body">
                      <img src="img/e2.jfif" alt="" class="img-responsive center-block" style="width:259px;height:194px;" >
                      <div class="caption">
                      <p>oppo A3  4gb ram,64gb rom</p>
                      <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Order Now</a></p>
                                <?php
                            } else {
                                header('location: products.php');
                            }
                            ?>
                       </div>
                       </div>
                       </div>  
                    </div>

                    <div class="col-sm-4">
                      <div class = "panel panel-default">
                      <div class = "panel-heading">Mobile 5</div>
                      <div class = "panel-body">
                      <img src="img/e3.jfif" alt="" class="img-responsive center-block" >
                      <div class="caption">
                      <p>oppo A5  4gb, 6gb ram varient</p>
                      <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Order Now</a></p>
                                <?php
                            } else {
                                header('location: products.php');
                            }
                            ?>
                       </div>
                       </div>
                       </div>  
                    </div>

                    <div class="col-sm-4">
                      <div class = "panel panel-default">
                      <div class = "panel-heading">Mobile 6</div>
                      <div class = "panel-body">
                      <img src="img/e4.jfif" alt="" class="img-responsive center-block" >
                      <div class="caption">
                      <p>Nokia 8.1 6gb ram,64 gb rom</p>
                      <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Order Now</a></p>
                                <?php
                            } else {
                                header('location: products.php');
                            }
                            ?>
                       </div>
                       </div>
                       </div>  
                    </div>
                        </div>

                 </div>   

            </div>
        <?php
        include 'includes/footer.php';
        ?>
    </body> 
</html>