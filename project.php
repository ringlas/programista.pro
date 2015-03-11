<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Programista; Ltd.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<![endif]-->


    <!-- CSS Files
    ================================================== -->
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/jpreloader.css" type="text/css">
    <link rel="stylesheet" href="css/animate.css" type="text/css">
    <link rel="stylesheet" href="css/flexslider.css" type="text/css">
    <link rel="stylesheet" href="css/plugin.css" type="text/css">
    <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="css/owl.theme.css" type="text/css">
    <link rel="stylesheet" href="css/owl.transitions.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <!-- custom style css -->
    <link rel="stylesheet" href="css/custom-style.css" type="text/css">

    <!-- color scheme -->
    <link rel="stylesheet" href="css/color.css" type="text/css">

    <!-- revolution slider -->
    <link rel="stylesheet" href="rs-plugin/css/settings.css" type="text/css">
    <link rel="stylesheet" href="css/rev-settings.css" type="text/css">

    <!-- load fonts -->
    <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="fonts/elegant_font/HTML_CSS/style.css" type="text/css">
    <link rel="stylesheet" href="fonts/et-line-font/style.css" type="text/css">
</head>

<body>

    <!-- This section is for Splash Screen -->
    <div id="jSplash">
        <section class="selected">
            Programista outstaffing IT company.
        </section>
        <section>
            Please, wait, content is loading.
        </section>
    </div>
    <!-- End of Splash Screen -->


    <div id="wrapper">
        <div class="page-overlay">
        </div>


        <!-- header begin -->
        <header class="header-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- logo begin -->
                        <h1 id="logo">
                            <a href="#">
                                <img class="logo-1" src="images/logo.png" alt="">
                                <img class="logo-2" src="images/logo-2.png" alt="">
                            </a>
                        </h1>
                        <!-- logo close -->

                        <!-- small button begin -->
                        <span id="menu-btn"></span>
                        <!-- small button close -->

                        <!-- mainmenu begin -->
                        <nav>
                            <ul id="mainmenu">
                                <li><a href="/">Home</a></li>
                                <li><a class="active" href="#">Past Work</a></li>
                            </ul>
                        </nav>

                    </div>
                    <!-- mainmenu close -->

                </div>
            </div>
        </header>
        <!-- header close -->

        <!-- subheader -->
        <section id="subheader" data-speed="8" data-type="background">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Project Details</h1>
                        <!-- <span>Control Management System</span> -->
                        <ul class="crumb">
                            <li><a href="/">Home</a></li>
                            <li class="sep">/</li>
                            <li>Portfolio</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- subheader close -->


        <!-- content begin -->
        <div id="content" class="no-bottom no-top">

            <div class="container project-view">

                <div class="row">

                    <?php $projectNumber = (int)$_GET['log']; ?>

                    <?php 
                    switch ($projectNumber) {
                        case 0:
                            $projectNumber = 1;
                            break;

                        case 1:
                            $projectNumber = 1;
                            break;

                        case 2:
                            $projectNumber = 2;
                            break;

                        case 3:
                            $projectNumber = 3;
                            break;
                        
                        default:
                            $projectNumber = 1;
                            break;
                    }
                    ?>

                    <?php require_once('project'. $projectNumber .'.php') ?>

                </div>
            </div>

            <!-- footer begin -->
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <!-- <div class="social-icons">
                                <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                <a href="#"><i class="fa fa-envelope-o fa-lg"></i></a>
                                <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                                <a href="#"><i class="fa fa-skype fa-lg"></i></a>
                            </div> -->
                            <div class="spacer-single"></div>
                            © Copyright 2015 | Programista; Ltd.
                        </div>
                    </div>
                </div>
            </footer>
            <!-- footer close -->
        </div>
    </div>


    <!-- Javascript Files
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jpreLoader.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/easing.js"></script>
    <script src="js/jquery.ui.totop.js"></script>
    <script src="js/jquery.flexslider-min.js"></script>
    <script src="js/jquery.scrollto.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/video.resize.js"></script>
    <script src="js/custom.js"></script>

    <!-- SLIDER REVOLUTION SCRIPTS  -->
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

</body>
</html>
