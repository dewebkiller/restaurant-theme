<!DOCTYPE html>
<html>
    <head>
        <title>Cafe 4se7en</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="The Dirt Hunter">
        <meta name="keywords" content="The Dirt Hunter">
        <meta name="author" content="Murphys Technology">
        <!-- Bootstrap -->
        <link href="css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="css/reset.css" rel="stylesheet">
        <link href="css/layout.css" rel="stylesheet">
        <link href="css/tabs.css" rel="stylesheet">
        <link href="css/form.css" rel="stylesheet">
        <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
        <link href="css/owl.carousel.css" rel="stylesheet">
        <link href="css/owl.theme.default.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/hover.css" rel="stylesheet">
        <link href="css/preloader.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css"/>


    </head>
    <body class="<?php basename($_SERVER['PHP_SELF'], '.php') ?>">
        <div id="loader-wrapper">
            <div id="loader"></div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
        <header>
            <section class="header-wrapper">
                <section class="top-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <ul>
                                    <li>
                                        <div class="th-content">
                                            <i class="fa fa-map-marker"></i><a href="#"> Shop 47 1 Ingham drive Casula 2170</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="th-content pull-right">
                                            <i class="fa fa-phone"></i> 0450 050 578
                                        </div>
                                    </li>
                                </ul>

                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 social-icon"></div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 social-icon">
                                <ul class="header-social">
                                    <li>
                                        <div class="th-content">
                                            <a href="#"> Sunday to Saturday : 6am to 5 :30 pm</a>
                                        </div>
                                    </li>
                                    <li><div class="th-content"><a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Like us on Facebook"><i class="fa fa-facebook"></i></a></div></li>
                                    <li><div class="th-content"><a href="#" data-toggle="tooltip" data-placement="top" title="Dirt Hunter on Instagram"><i class="fa fa-instagram"></i></a></div></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </section>
                <section class="btm-header">
                    <div class="menu-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="main-menu">
                                        <nav class="navbar navbar-expand-lg navbar-light">
                                            <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Cafe 4se7en"></a>
                                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                                <span class="navbar-toggler-icon"></span>
                                            </button>

                                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                                <ul class="navbar-nav mr-auto">
                                                    <?php
                                                    $url_pages = $_SERVER['REQUEST_URI'];
                                                    $ex_pages = explode("/", $url_pages);
                                                    $curr_page = $ex_pages[count($ex_pages) - 1];
                                                    ?>    
                                                    <li class="nav-item <?php
                                                    if (($curr_page == 'index.php') || $curr_page == "") {
                                                        echo "active-nav";
                                                    }
                                                    ?>">
                                                        <a class="nav-link" href="./">Home</a>
                                                    </li>

                                                    <li class="nav-item <?php
                                                    if ($curr_page == 'about.php') {
                                                        echo "active-nav";
                                                    }
                                                    ?>">
                                                        <a class="nav-link" href="about.php">About</a>
                                                    </li>
                                                    <li class="nav-item <?php
                                                    if ($curr_page == 'gallery.php') {
                                                        echo "active-nav";
                                                    }
                                                    ?>">
                                                        <a class="nav-link" href="gallery.php">Contact</a>
                                                    </li>
                                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 companylogo">
                                                        <div class="logo"><img src="images/logo.png" alt="Cafe 4se7en"></div>
                                                    </div>
                                                    <li class="nav-item dropdown <?php
                                                    if (($curr_page == 'services.php')) {
                                                        echo "active";
                                                    }
                                                    ?> ">
                                                        <a class="nav-link" href="service.php" id="navbarDropdown">
                                                            Menu
                                                        </a>

                                                    </li>
                                                    <li class="nav-item dropdown <?php
                                                    if ((($curr_page == 'brisbane.php') || ($curr_page == 'gold-coast.php') || ($curr_page == 'sunshine-coast.php'))) {
                                                        echo "active-nav";
                                                    }
                                                    ?>">
                                                        <a class="nav-link" href="#" id="navbarDropdown">
                                                            Book a table
                                                        </a>

                                                    </li>

                                                </ul>

                                            </div>
                                        </nav>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </section>
        </header>