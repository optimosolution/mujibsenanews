<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	
<html> <!--<![endif]-->
    <head>
        <meta charset="utf-8" />
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <meta name="author" content="S.M. Saidur Rahman">
        <meta name="generator" content="Optimo CMS" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- mobile settings -->
        <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
        <!-- Favicon -->
        <link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/demo/favicon.ico" />
        <!-- WEB FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&amp;subset=latin,latin-ext,cyrillic,cyrillic-ext" rel="stylesheet" type="text/css" />
        <!-- CORE CSS -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/font-awesome.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/sky-forms.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/weather-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/line-icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/owl-carousel/owl.pack.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/animate.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/flexslider.css" rel="stylesheet" type="text/css" />
        <!-- REVOLUTION SLIDER -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/revolution-slider.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/layerslider.css" rel="stylesheet" type="text/css" />
        <!-- BLOG -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/layout-blog.css" rel="stylesheet" type="text/css" />
        <!-- THEME CSS -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/essentials.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/layout.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/header-default.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/footer-default.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/color_scheme/red.css" rel="stylesheet" type="text/css" id="color_scheme" />
        <!-- Morenizr -->
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/modernizr.min.js"></script>
        <!--[if lte IE 8]>
                <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/respond.js"></script>
        <![endif]-->
    </head>
    <body class="smoothscroll">
        <div id="wrapper">
            <div id="header"><!-- class="sticky" for sticky menu -->
                <!-- Top Bar -->
                <header id="topBar">
                    <div class="container">
                        <div class="pull-right fsize13 margin-top10 hide_mobile">
                            <!-- mail , phone -->
                            <a href="mailto:info@ircbd.org">info@mujibsenanews.com</a> &bull; +880 0000 000000
                            <div class="block text-right"><!-- social -->
                                <a href="#" class="social fa fa-facebook"></a>
                                <a href="#" class="social fa fa-twitter"></a>
                                <a href="#" class="social fa fa-google-plus"></a>
                                <a href="#" class="social fa fa-linkedin"></a>
                                <a href="#" class="social fa fa-pinterest"></a>
                            </div><!-- /social -->
                        </div>
                        <!-- Logo -->
                        <?php
                        $logo = CHtml::image(Yii::app()->theme->baseUrl . '/assets/images/logo.png', 'Logo', array('alt' => Yii::app()->name, 'class' => '', 'title' => Yii::app()->name, 'style' => 'height:80px;'));
                        echo CHtml::link($logo, array('site/index'), array('class' => 'logo'));
                        ?>
                    </div><!-- /.container -->
                </header>
                <!-- /Top Bar -->
                <!-- Top Nav -->
                <header id="topNav">
                    <div class="container">
                        <!-- Mobile Menu Button -->
                        <button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
                            <i class="fa fa-bars"></i>
                        </button>
                        <!-- Top Nav -->
                        <div class="navbar-collapse nav-main-collapse collapse">
                            <nav class="nav-main">
                                <ul id="topMain" class="nav nav-pills nav-main">
                                    <?php echo '<li class="mega-menu active">' . CHtml::link(Title::get_title(1), array('site/index'), array('class' => '')) . '</li>'; ?>                                    
                                    <?php echo '<li class="mega-menu">' . CHtml::link(ContentCategory::getCategoryName(2), array('news/index', 'id' => 2), array('class' => '')) . '</li>'; ?>
                                    <?php echo '<li class="mega-menu">' . CHtml::link(ContentCategory::getCategoryName(3), array('news/index', 'id' => 3), array('class' => '')) . '</li>'; ?>
                                    <?php echo '<li class="mega-menu">' . CHtml::link(ContentCategory::getCategoryName(4), array('news/index', 'id' => 4), array('class' => '')) . '</li>'; ?>
                                    <?php echo '<li class="mega-menu">' . CHtml::link(ContentCategory::getCategoryName(5), array('news/index', 'id' => 5), array('class' => '')) . '</li>'; ?>
                                    <?php echo '<li class="mega-menu">' . CHtml::link(ContentCategory::getCategoryName(6), array('news/index', 'id' => 6), array('class' => '')) . '</li>'; ?>
                                    <?php echo '<li class="mega-menu">' . CHtml::link(ContentCategory::getCategoryName(7), array('news/index', 'id' => 7), array('class' => '')) . '</li>'; ?>
                                    <?php echo '<li class="mega-menu">' . CHtml::link(ContentCategory::getCategoryName(8), array('news/index', 'id' => 8), array('class' => '')) . '</li>'; ?>
                                    <?php echo '<li class="mega-menu">' . CHtml::link(ContentCategory::getCategoryName(9), array('news/index', 'id' => 9), array('class' => '')) . '</li>'; ?>
                                </ul>
                            </nav>
                        </div>
                        <!-- /Top Nav -->
                    </div><!-- /.container -->
                </header>
                <!-- /Top Nav -->
            </div>      
            <?php echo $content; ?>                        
            <!-- FOOTER -->
            <footer id="footer">
                <div class="container">
                    <div class="row">
                        <!-- col #1 -->
                        <div class="logo_footer dark col-md-3">
                            <h4>Contact <strong>Us</strong></h4>
                            <p class="block">
                                4th Street, Suite 88<br />
                                New York NY 10887<br />
                                Email: info@mujibsenanews.com<br />
                                Phone: +40 (0) 111 1234 567<br />
                                Fax: +40 (0) 111 1234 568<br />
                            </p>
                            <p class="block"><!-- social -->
                                <a href="#" class="social fa fa-facebook"></a>
                                <a href="#" class="social fa fa-twitter"></a>
                                <a href="#" class="social fa fa-google-plus"></a>
                                <a href="#" class="social fa fa-linkedin"></a>
                            </p><!-- /social -->
                        </div>
                        <!-- /col #1 -->
                        <!-- col #2 -->
                        <div class="spaced col-md-3 col-sm-4">
                            <h4>Footer <strong>Menu</strong></h4>
                            <ul class="list-unstyled">
                                <li><?php echo CHtml::link('<i class="fa fa-sign-out"></i> ENGLISH', array('news/index', 'id' => 10), array()); ?></li>                                
                                <li><?php echo CHtml::link('<i class="fa fa-sign-out"></i> ' . ContentCategory::getCategoryName(11), array('news/index', 'id' => 11), array()); ?></li>                                
                                <li><?php echo CHtml::link('<i class="fa fa-sign-out"></i> ' . Title::get_title(6), array('youtube/index'), array()); ?></li>                                
                                <li><?php echo CHtml::link('<i class="fa fa-sign-out"></i> WebLink', array('weblink/index'), array()); ?></li>                                
                                <li><?php echo CHtml::link('<i class="fa fa-sign-out"></i> ' . Title::get_title(7), array('gallery/index', 'id' => 3), array()); ?></li>                                
                                <li><?php echo CHtml::link('<i class="fa fa-sign-out"></i> ' . Content::get_title(1), array('content/view', 'id' => 1), array()); ?></li>                                
                            </ul>
                        </div>
                        <!-- /col #2 -->
                        <!-- col #3 -->
                        <div class="spaced col-md-3 col-sm-4">
                            <h4>Recent <strong>Tweets</strong></h4>
                            <ul class="list-unstyled fsize13">
                                <li>
                                    <i class="fa fa-twitter"></i> <a href="#">@John Doe</a> Pilsum dolor lorem sit consectetur adipiscing orem sequat <small class="ago">8 mins ago</small>
                                </li>
                                <li>
                                    <i class="fa fa-twitter"></i> <a href="#">@John Doe</a> Remonde sequat ipsum dolor lorem sit consectetur adipiscing  <small class="ago">8 mins ago</small>
                                </li>
                                <li>
                                    <i class="fa fa-twitter"></i> <a href="#">@John Doe</a> Imperdiet condimentum diam dolor lorem sit consectetur adipiscing <small class="ago">8 mins ago</small>
                                </li>
                            </ul>
                        </div>
                        <!-- /col #3 -->

                        <!-- col #4 -->
                        <div class="spaced col-md-3 col-sm-4">
                            <h4>Subscribe <strong>Us</strong></h4>
                            <p>Exclusive reporting, including insider sports coverage of Colorado's teams, investigative reporting, featured content, local coverage and access to premium stories.</p>

                            <h4><small><strong>Subscribe to our Newsletter</strong></small></h4>
                            <form id="newsletterSubscribe" method="post" action="php/newsletter.php" class="input-group">
                                <input required type="email" class="form-control" name="newsletter_email" id="newsletter_email" value="" placeholder="E-mail Address">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary">SUBMIT</button>
                                </span>
                            </form>
                        </div>
                        <!-- /col #4 -->
                    </div>
                </div>
                <hr />
                <div class="copyright">
                    <div class="container text-center fsize12">
                        Copyright &copy; <?php echo date('Y'); ?> <?php echo Yii::app()->name; ?>. Developed by <?php echo CHtml::link('Optimo Solution', 'http://www.optimosolution.com', array('target' => '_blank')); ?>
                    </div>
                </div>
            </footer>
            <!-- /FOOTER -->
            <a href="#" id="toTop"></a>
        </div><!-- /#wrapper -->
        <!-- JAVASCRIPT FILES -->
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/jquery.isotope.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/masonry.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/owl-carousel/owl.carousel.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/knob/js/jquery.knob.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/flexslider/jquery.flexslider-min.js"></script>
        <!-- REVOLUTION SLIDER -->
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/revolution_slider.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/scripts.js"></script>       
    </body>
</html>
