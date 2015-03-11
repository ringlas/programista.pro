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


    <!-- CSS Files
    ================================================== -->
    <link rel="stylesheet" href="<?php echo SITE_ROOT ?>/webroot/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="<?php echo SITE_ROOT ?>/webroot/css/jpreloader.css" type="text/css">
    <link rel="stylesheet" href="<?php echo SITE_ROOT ?>/webroot/css/animate.css" type="text/css">
    <link rel="stylesheet" href="<?php echo SITE_ROOT ?>/webroot/css/flexslider.css" type="text/css">
    <link rel="stylesheet" href="<?php echo SITE_ROOT ?>/webroot/css/plugin.css" type="text/css">
    <link rel="stylesheet" href="<?php echo SITE_ROOT ?>/webroot/css/prettyPhoto.css" type="text/css">
    <link rel="stylesheet" href="<?php echo SITE_ROOT ?>/webroot/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="<?php echo SITE_ROOT ?>/webroot/css/owl.theme.css" type="text/css">
    <link rel="stylesheet" href="<?php echo SITE_ROOT ?>/webroot/css/owl.transitions.css" type="text/css">
    <link rel="stylesheet" href="<?php echo SITE_ROOT ?>/webroot/css/style.css" type="text/css">

    <!-- custom style css -->
    <link rel="stylesheet" href="<?php echo SITE_ROOT ?>/webroot/css/custom-style.css" type="text/css">

    <!-- color scheme -->
    <link rel="stylesheet" href="<?php echo SITE_ROOT ?>/webroot/css/color.css" type="text/css">

    <!-- revolution slider -->
    <link rel="stylesheet" href="<?php echo SITE_ROOT ?>/webroot/rs-plugin/css/settings.css" type="text/css">
    <link rel="stylesheet" href="<?php echo SITE_ROOT ?>/webroot/css/rev-settings.css" type="text/css">

    <!-- load fonts -->
    <link rel="stylesheet" href="<?php echo SITE_ROOT ?>/webroot/fonts/font-awesome/css/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="<?php echo SITE_ROOT ?>/webroot/fonts/elegant_font/HTML_CSS/style.css" type="text/css">
    <link rel="stylesheet" href="<?php echo SITE_ROOT ?>/webroot/fonts/et-line-font/style.css" type="text/css">
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
                            <a href="#">

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
        <div id="section-slider" class="fullwidthbanner-container">
            <div id="revolution-slider">
                <ul>
                    <li data-transition="fade" data-slotamount="10" data-masterspeed="200" data-thumb="images-slider/thumbs/thumb1.jpg">
                        <!--  BACKGROUND IMAGE -->

                        <?php echo $this->html->img('images-slider/wide6.jpg') ?>

                        <div class="tp-caption ultra-big-white customin customout start"
                        data-x="center"
                        data-y="center"
                        data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:2;scaleY:2;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.85;scaleY:0.85;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-speed="800"
                        data-start="400"
                        data-easing="easeInOutExpo"
                        data-endspeed="400">

                        authentic and <span class="id-color">competent.</span>

                    </div>

                </li>

                <li data-transition="fade" data-slotamount="10" data-masterspeed="200" data-thumb="images-slider/thumbs/thumb1.jpg">
                    <!--  BACKGROUND IMAGE -->
                    <?php echo $this->html->img('images-slider/wide6.jpg') ?>

                    <div class="tp-caption ultra-big-white customin customout start"
                    data-x="center"
                    data-y="center"
                    data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:2;scaleY:2;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                    data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.85;scaleY:0.85;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                    data-speed="800"
                    data-start="400"
                    data-easing="easeInOutExpo"
                    data-endspeed="400">

                    thoughtful and <span class="id-color">decent.</span>
                </div>

            </li>

        </ul>
    </div>
</div>
<!-- revolution slider close -->


<!-- content begin -->
<div id="content" class="no-bottom no-top content-overlay">

    <!-- section begin -->
    <section id="section-about">
        <div class="container">
            <div class="row">

                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">

                        <h1 class="animated" data-animation="fadeInUp">
                            Programista is an Information Technology <a style="text-decoration: none; cursor: pointer;" id="outstaffing-link"><span class="id-color">Outstaffing*</span></a> Company
                            <span class="small-border animated" data-animation="fadeInUp"></span>
                        </h1>

                        <div class="spacer-single"></div>
                    </div>
                </div>

                <!-- featured box begin -->
                <div class="feature-box-small-icon box-fx center col-md-3 animated" data-animation="fadeInUp" data-delay="200">
                    <div class="inner">
                        <div class="front">
                            <i class="icon-linegraph"></i>
                            <h3>Expertise</h3>
                            <span>What We Are Good At</span>
                        </div>
                        <div class="info">
                            We believe that no matter how good you get at something, competence is still a long journey and not a destination.
                            <br>
                            <a id="read-more-expertise" class="btn btn-border">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- featured box close -->

                <!-- featured box begin -->
                <div class="feature-box-small-icon box-fx center col-md-3 animated" data-animation="fadeInUp" data-delay="400">
                    <div class="inner">
                        <div class="front">
                            <i class="icon-layers"></i>
                            <h3>Our Services</h3>
                            <span>Why You Need Us</span>
                        </div>
                        <div class="info">
                            <br>Because we are authentic, competent, thoughtful, and decent.
                            <br>
                            <a id="read-more-services" class="btn btn-border">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- featured box close -->

                <!-- featured box begin -->
                <div class="feature-box-small-icon box-fx center col-md-3 animated" data-animation="fadeInUp" data-delay="0">
                    <div class="inner">
                        <div class="front">
                            <i class="icon-genius"></i>
                            <h3>Past Work</h3>
                            <span>Explore Our Portfolio</span>
                        </div>
                        <div class="info">
                            We have been doing this for a long time, successfully completing vastly diverse projects for customers spanning the globe. 
                            <br>
                            <a id="read-more-work" class="btn btn-border">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- featured box close -->

                <!-- featured box begin -->
                <div class="feature-box-small-icon box-fx center col-md-3 animated" data-animation="fadeInUp" data-delay="600">
                    <div class="inner">
                        <div class="front">
                            <i class="icon-heart"></i>
                            <h3>Happy Customers</h3>
                            <span>What They Say</span>
                        </div>
                        <div class="info">
                            Our customers tell us they appreciate the flexibility of our company and the quality of work delivered by our employees.
                            <br>
                            <a id="read-more-clients" class="btn btn-border">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- featured box close -->

            </div>
        </div>
    </section>
    <!-- section close -->

    <section id="section-about-us-2" class="side-bg no-padding">
        <div class="image-container col-md-5 pull-left animated fadeInLeft" data-animation="fadeInLeft" data-delay="0" style="height: 641px; opacity: 0;"></div>

        <div class="container">

            <div class="row">
                <div class="inner-padding">
                    <div class="col-md-6 col-md-offset-6 animated fadeInRight" data-animation="fadeInRight" data-delay="200" style="opacity: 0;">
                        <h2>You tell us about your problems and your goals.</h2>

                        <div class="row">
                            <div class="col-md-12">
                                <h3>We analyze your problems and scope your needs.  </h3>
                                <p>Then we agree to an approach best suited for you.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h3>We assemble the team you need.  </h3>
                                <p>You approve it.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h3>Functionally, they become a part of your organization.</h3>
                                <p>Administratively, they continue to report to Programista.</p>
                                <p>Programista makes sure they are legally compliant, well-paid, often spoiled, and, generally speaking, as happy as can be at our well-equipped Class A offices.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h3>Your company pays Programista;</h3>
                                <p>... only for the actual hours of work  performed.</p>
                            </div>
                        </div>

                        <h2>Usually, Programista; engages in projects longer than one year.</h2>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- services -->
    <!-- section begin -->
    <section id="section-services" class="no-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <h1 class="animated" data-animation="fadeInUp">Our <span class="id-color">Services</span>
                        <span class="small-border animated" data-animation="fadeInUp"></span>
                    </h1>
                    <p class="lead animated" data-animation="fadeInUp">
                        Typically, customers turn to us when they need:
                    </p>
                    <div class="spacer-single"></div>
                </div>
            </div>

            <div class="row">
                <!-- feature box begin -->
                <div class="feature-box-small-icon col-md-4 animated" data-animation="fadeInUp" data-delay="0">
                    <div class="inner">
                        <i class="icon-tools"></i>
                        <div class="text">
                            <h3>Talent</h3>
                            <!-- Our passionate designers and front-end developers can create a trully beautiful and easy-to-use UI for your system. -->
                            <ul>
                                <li>They can't find the talent they need</li>
                                <li>They need experienced developers</li>
                                <li>They need developers with custom domain knowledge</li>
                                <li>There's no ready solution to the problems they are facing</li>
                                <li>They need better, more scalable architecture</li>
                                <li>They need Product Managers with expirience in technological and feature research</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- feature box close -->

                <!-- feature box begin -->
                <div class="feature-box-small-icon col-md-4 animated" data-animation="fadeInUp" data-delay="600">
                    <div class="inner">
                        <i class="icon-phone"></i>
                        <div class="text">
                            <h3>Process Management</h3>
                            <ul>
                                <li>They can't manage their development process</li>
                                <li>They feel their development process can be improved</li>
                                <li>They have a bottleneck in their development pipeline</li>
                                <li>They need a better documentation structure for their development life-cycle</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- feature box close -->


                <!-- feature box begin -->
                <div class="feature-box-small-icon col-md-4 animated" data-animation="fadeInUp" data-delay="800">
                    <div class="inner">
                        <i class="icon_piechart"></i>
                        <div class="text">
                            <h3>Scale</h3>
                            <li>They can't scale as a company</li>
                            <li>They feel like they can't add more teams to work on their product</li>
                            <li>They feel that there is a bottleneck in their organizational structure</li>
                            <li>They feel like they are adding more teams but they are not getting more work done</li>
                        </div>
                    </div>
                </div>
                <!-- feature box close -->

            </div>

            <div class="row">
                <!-- feature box begin -->
                <div class="feature-box-small-icon col-md-4 animated" data-animation="fadeInUp" data-delay="200">
                    <div class="inner">
                        <i class="icon_cogs"></i>
                        <div class="text">
                            <h3>Reliable Service</h3>
                            <ul>
                                <li>They need a better release process</li>
                                <li>They need a 24/7 Support center staffed with highly qualified engineers</li>
                                <li>They need to better organize their support ticket management</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- feature box close -->

                <!-- feature box begin -->
                <div class="feature-box-small-icon col-md-4 animated" data-animation="fadeInUp" data-delay="400">
                    <div class="inner">
                        <i class="icon-global"></i>
                        <div class="text">
                            <h3>Quality</h3>
                            <ul>
                                <li>They feel like they can improve their product's quality</li>
                                <li>They need to automate their QA process</li>                                            
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- feature box close -->

                <!-- feature box begin -->
                <div class="feature-box-small-icon col-md-4 animated" data-animation="fadeInUp" data-delay="1000">
                    <div class="inner">
                        <i class="icon_flowchart_alt"></i>
                        <div class="text">
                            <h3>Visibility</h3>
                            <li>They don't have enough visibility into their departments</li>
                            <li>They can't assess the productivity of their teams</li>
                        </div>
                    </div>
                </div>
                <!-- feature box close -->

                <div class="spacer-single"></div>

                <div class="col-md-12 text-center animated" data-animation="fadeInUp" data-delay="400">
                    <?php echo $this->html->img('cubic_ss.png', array('class' => 'img-responsive')) ?>
                </div>
            </div>
        </div>
    </section>
    <!-- section close -->

    <!-- section begin -->
    <section id="section-portfolio">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="animated" data-animation="fadeInUp">Past <span class="id-color">Work</span>
                        <span class="small-border animated" data-animation="fadeInUp"></span>
                    </h1>
                    <div class="spacer-double"></div>
                </div>

                <div class="animated" data-animation="fadeInUp" data-delay="200">
                    <div class="col-md-4 bloglist">
                        <div class="post-content">
                            <div class="post-image">
                                <div class="flexslider blog-slider">
                                    <div class="overlay">
                                    </div>
                                    <ul class="slides">
                                        <li>
                                            <?php echo $this->html->img('works/dcr.png') ?>
                                        </li>                                    
                                    </ul>
                                </div>

                            </div>

                            <div class="post-text" style="padding-left: 0px;">
                                <h3><a href="project.php?log=2" target="_blank">Filings and Forms data extractor</a></h3>


                                <a href="project.php?log=2 " target="_blank" class="btn-text">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 bloglist">
                        <div class="post-content">
                            <div class="post-image">
                                <div class="flexslider blog-slider">
                                    <div class="overlay">
                                    </div>
                                    <ul class="slides">
                                        <li>
                                            <?php echo $this->html->img('works/nms.png') ?>
                                        </li>
                                    </ul>
                                </div>

                            </div>

                            <div class="post-text" style="padding-left: 0px;">
                                <h3><a href="project.php?log=1" target="_blank">Network performance management and monitoring system</a></h3>

                                <a href="project.php?log=1 target="_blank"" class="btn-text">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 bloglist">
                        <div class="post-content">
                            <div class="post-image">
                                <div class="flexslider blog-slider">
                                    <div class="overlay">
                                    </div>
                                    <ul class="slides">
                                        <li>
                                            <?php echo $this->html->img('works/admin.png') ?>
                                        </li>
                                    </ul>
                                </div>

                            </div>

                            <div class="post-text" style="padding-left: 0px;">
                                <h3><a href="project.php?log=3" target="_blank">Custom accounting system</a></h3>

                                <a href="project.php?log=3 target="_blank"" class="btn-text">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="spacer-single"></div>
                </div>
            </div>
        </div>

    </section>
    <!-- section close -->


    <!-- section begin -->
    <section id="view-all-projects" class="call-to-action bg-color dark text-center" data-speed="5" data-type="background">

    </section>
    <!-- logo carousel section close -->

    <!-- section begin -->
    <section id="section-testimonial" class="dark">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="animated" data-animation="fadeInUp"><span class="id-color">Testimonial</span></h1>
                    <span class="small-border animated" data-animation="fadeInUp"></span>
                    <div class="spacer-single"></div>
                </div>
            </div>
            <div id="testimonial-carousel" class="de_carousel row animated" data-animation="fadeInUp" data-delay="200">

                <div class="col-md-4 item">
                    <div class="de_testi">
                        <blockquote>
                            <p>I would highly recommend Programista If you have been considering outstaffing -  they are fast, efficient and capable of anything.</p>
                        </blockquote>
                        <div class="de_testi_by">
                            <div class="de_testi_pic">
                                <?php echo $this->html->img('testimonial/testi_rob_cromwell.jpg', array('class' => 'img-circle')) ?>
                            </div>
                            <div class="de_testi_company">
                                <strong>Robert Cromwell</strong>, CEO of UGT Group
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 item">
                    <div class="de_testi">
                        <blockquote>
                            <p>The people at Programista; are great minds, but this is not their best quality. What makes them really exceptional is that they think and act as part of your organization.</p>
                        </blockquote>
                        <div class="de_testi_by">
                            <span class="de_testi_pic">
                                <?php echo $this->html->img('testimonial/testi_daniela_nachkova.jpg', array('class' => 'img-circle')) ?>
                                <div class="de_testi_company">
                                    <strong>Daniela Dimitrova</strong>, CEO of 2x2 Ltd.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- section close -->

        <!-- section begin -->
        <section id="logo-full">
            <div class="container">

                <div class="row">
                    <div class="logo-carousel text-center">
                        <ul id="logo-carousel" class="slides">
                            <li>
                                <div class="col-md-2">
                                    <?php echo $this->html->img('logo/logo_sevone.png', array('alt' => 'SevOne Inc.')) ?>
                                </div>
                            </li>
                            <li>
                                <div class="col-md-2">
                                    <?php echo $this->html->img('logo/logo_2x2.png', array('alt' => '2 plus 2')) ?>
                                </div>
                            </li>
                            <li>
                                <div class="col-md-2">
                                    <?php echo $this->html->img('logo/logo_utg_group.png', array('alt' => 'UGT Group')) ?>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>
        </section>
        <!-- section close -->


        <!-- section begin -->
        <section id="section-contact" class="dark" data-speed="5" data-type="background">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="animated" data-animation="fadeInUp">Contact <span class="id-color">Us</span>
                           <span class="small-border animated" data-animation="fadeInUp"></span>
                       </h1>
                       <p class="animated" data-animation="fadeIn">
                        Get in touch with us. Feel free to use the contact form below.
                    </p>
                    <div class="spacer-single"></div>
                </div>

                <div class="col-md-8">

                    <form name="contactForm" id='contact_form' method="post" action="email.php" style="font-family: 'Helvetica Neue', Helvetica;">
                        <div class="row">
                            <div class="col-md-6">
                                <div id='name_error' class='error'>Please enter your name.</div>
                                <div>
                                    <input type='text' name='name' id='name' class="form-control" placeholder="Your Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div id='email_error' class='error'>Please enter your valid E-mail ID.</div>
                                <div>
                                    <input type='text' name='email' id='email' class="form-control" placeholder="Your Email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div id='message_error' class='error'>Please enter your message.</div>
                                <div>
                                    <textarea name='message' id='message' class="form-control" placeholder="Your Message"></textarea>
                                </div>
                            </div>
                            <div id='mail_success' class='success'>Your message has been sent successfully.</div>
                            <div id='mail_fail' class='error'>Sorry, error occured this time sending your message.</div>
                            <div class="col-md-12">
                                <p id='submit'>
                                    <input type='submit' id='send_message' value='Submit Form' class="btn btn-border">
                                </p>
                            </div>
                        </div>
                    </form>

                </div>

                <div class="col-md-4">
                    <address style="font-family: 'Helvetica Neue', Helvetica;">
                        <span><i class="fa fa-map-marker fa-lg"></i>1, "11-ti Avgust" Street, Plovdiv 4000, Bulgaria</span>
                        <span><i class="fa fa-phone fa-lg"></i>o: +359 32 339 296, m: +359 877 656 838</span>
                        <span><i class="fa fa-envelope-o fa-lg"></i><a href="mailto:contact@programista.bg">office@programista.pro</a></span>
                        <span><i class="fa fa-globe fa-lg"></i><a href="#">programista.pro</a></span>
                    </address>
                </div>
            </div>
        </div>
    </section>
    <!-- section close -->

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
    <script src="<?php echo SITE_ROOT ?>/webroot/js/jquery.min.js"></script>
    <script src="<?php echo SITE_ROOT ?>/webroot/js/jpreLoader.js"></script>
    <script src="<?php echo SITE_ROOT ?>/webroot/js/bootstrap.min.js"></script>
    <script src="<?php echo SITE_ROOT ?>/webroot/js/jquery.isotope.min.js"></script>
    <script src="<?php echo SITE_ROOT ?>/webroot/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo SITE_ROOT ?>/webroot/js/easing.js"></script>
    <script src="<?php echo SITE_ROOT ?>/webroot/js/jquery.ui.totop.js"></script>
    <script src="<?php echo SITE_ROOT ?>/webroot/js/jquery.flexslider-min.js"></script>
    <script src="<?php echo SITE_ROOT ?>/webroot/js/jquery.scrollto.js"></script>
    <script src="<?php echo SITE_ROOT ?>/webroot/js/owl.carousel.js"></script>
    <script src="<?php echo SITE_ROOT ?>/webroot/js/jquery.countTo.js"></script>
    <script src="<?php echo SITE_ROOT ?>/webroot/js/classie.js"></script>
    <script src="<?php echo SITE_ROOT ?>/webroot/js/video.resize.js"></script>
    <script src="<?php echo SITE_ROOT ?>/webroot/js/custom.js"></script>
    <script src="<?php echo SITE_ROOT ?>/webroot/js/validation.js"></script>

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
