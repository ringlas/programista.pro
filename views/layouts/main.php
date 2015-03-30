<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    
    <title>Programista; Ltd.</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="<?php echo SITE_ROOT ?>/webroot//favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo SITE_ROOT ?>/webroot//favicon.ico" type="image/x-icon">

    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<![endif]-->

    <?php require 'views/elements/stylesheets.php' ?>
    
</head>

<body id="homepage">

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
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <!-- logo begin -->
                        <h1 id="logo">
                            <a href="/">

                                <?php echo $this->html->img('logo.png', array('class' => 'logo-1')) ?>

                                <?php echo $this->html->img('logo-2.png', array('class' => 'logo-2')) ?>

                            </a>
                        </h1>
                        <!-- logo close -->

                        <!-- small button begin -->
                        <span id="menu-btn"></span>
                        <!-- small button close -->

                        <?php require 'views/elements/menu.php' ?>

                    </div>
                </div>
            </div>
        </header>
        <!-- header close -->

        <!-- revolution slider begin -->

        <?php require 'views/elements/slider.php' ?>
        
        <!-- revolution slider close -->

        <?php echo $content ?>

    </div>
    <!-- wrapper end -->

    <!-- LOAD JAVASCRIPT FILES -->
    <?php require 'views/elements/javascripts.php' ?>
    
    <script src="<?php echo SITE_ROOT ?>/webroot/js/custom.js"></script>

    <!-- SLIDER REVOLUTION SCRIPTS  -->
    <script type="text/javascript" src="<?php echo SITE_ROOT ?>/webroot/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="<?php echo SITE_ROOT ?>/webroot/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

    <script type="text/javascript">

        $(function() {
            $('#outstaffing-link').click(function(){
                $("html, body").animate({scrollTop: $('#section-about-us-2').offset().top }, 500, 'easeOutCirc');
            });

            $('#read-more-expertise').click(function(){
                $("html, body").animate({scrollTop: $('#section-about-us-2').offset().top }, 500, 'easeOutCirc');
            });

            $('#slider-btn').click(function(){
                $("html, body").animate({scrollTop: $('#section-about-us-2').offset().top }, 500, 'easeOutCirc');
            });

            $('#read-more-services').click(function(){
                $("html, body").animate({scrollTop: $('#section-services').offset().top }, 500, 'easeOutCirc');
            });

            $('#read-more-work').click(function(){
                $("html, body").animate({scrollTop: $('#section-portfolio').offset().top }, 500, 'easeOutCirc');
            });

            $('#read-more-clients').click(function(){
                $("html, body").animate({scrollTop: $('#section-testimonial').offset().top }, 500, 'easeOutCirc');
            });
        });

    </script>

</body>
</html>
