<?php include "php/dbHandler.php";
$connection = new connection();
include "php/adController.php";

$ads = new adController();
$adsdetails = $ads->getAds();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="All- Adscanyon">
        <title>Ads</title>

        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="" crossorigin="anonymous">       
        <link href="css/bootstrap.css" rel="stylesheet">

        <link href="css/adstyles.css" rel="stylesheet">
        <meta property="og:image" content="" />
        <link rel='canonical' href="#" />
        <meta property="og:url" content="" />
        <meta property="og:title" content="All  - Adscanyon" />
        <meta property="og:description" content="All - Adscanyon" />
    </head>
    <body>
        <header>
            <nav class="navbar navbar-default liy-nav">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar2">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="" style="margin-left:0px; font-weight:bold; color:#fff;">Adscanyon
                        </a>
                    </div>
                    <div id="navbar2" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="userLogin.php">login</a></li>
                            <li><a href="register.php">+ Register</a></li>

                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
                <!--/.container-fluid -->
            </nav>
        </header>
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="post-wrapper">



                        <div class="post-header"></div>

                        <?php foreach ($adsdetails as $adsd): ?>
                        <div class="post">


                            <a href=""><h2 class="post-title"><?php echo $adsd['name'] ?></h2></a>
                            <div class="ad">
                                <h2 class="post-title"><?php echo $adsd['description'] ?></h2>
                            </div>

                            <div class="post-footer">

                                <span class="btn btn-default details"><a href="#">view details</a></span>


                            </div>

                        </div>
                        <?php  endforeach  ?>

                    </div> 
                </div>
            </div>
        </div>
        <div id="footer">
            <div class="row">
                <div class="col-md-12">

                    <footer>

                        <div id="footer-social">
                            <a target="_blank" href="https://facebook.com/adscanyon"><i class="fa fa-facebook"></i><span> Facebook</span></a>	
                            <a target="_blank" href="https://twitter.com/adscanyoncom"><i class="fa fa-twitter"></i><span> Twitter</span></a>
                            <a target="_blank" href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i><span>  Linkedin</span></a>
                            <a target="_blank" href="#"><i class="fa fa-instagram"></i><span> Instagram</span></a>
                            <a target="_blank" href="#"><i class="fa fa-google-plus"></i><span> Google +</span></a>
                            <a target="_blank" href="#"><i class="fa fa-pinterest"></i><span> Pinterest</span></a>
                        </div>

                        <div id="footer-copyright">
                            Copyrights @ Adscanyon. All Rights Reserverd.
                        </div>
                    </footer>
                </div>
            </div>
        </div>
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.min.js" ></script>
    </body>
</html>
