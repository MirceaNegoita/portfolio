<?php 

$counter = basename($_SERVER['PHP_SELF']);

switch ($counter) {
    case 'index.php':
        $title = "Home";
        break;
    case 'contact.php':
        $title = "Contact";
        break;
    case 'resume.php':
        $title = "Resume";
        break;
    default:
        $title = "Mircea Negoita";
        break;
}

?>

<!DOCTYPE html>
<html class="no-js">
    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="icon" type="image/png" href="images/favicon.png">
        <title><?php echo $title; ?></title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">

        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/ionicons.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/slider.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/jquery.fancybox.css">
        <link rel="stylesheet" href="css/main.css?version=51">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>
        
        <header id="top-bar" class="navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <!-- /responsive nav button -->
                    
                    <!-- logo -->
                    <div class="navbar-brand">
                        <a href="index.php" >
                            <img class="logo" src="images/logo.png" alt="">
                        </a>
                    </div>
                    <!-- /logo -->
                </div>
                <!-- main menu -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <div class="main-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.php" >Home</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                </nav>
                <!-- /main nav -->
            </div>
        </header>