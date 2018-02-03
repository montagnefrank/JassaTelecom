<?php
////////////////////////////////////////////////////////////////////////////////////////DEBUG EN PANTALLA
//error_reporting(E_ALL);
//ini_set('display_errors', 1);

require ("universe/assets/scripts/conn.php");
require ("universe/assets/scripts/trackvisit.php");
trackvisitor("jassa_home");
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

    <head>

        <head>
            <meta http-equiv="content-type" content="text/html; charset=utf-8" />
            <meta name="keywords" content="jassatelecom, jassa, telecom, telecomunicaciones,soluciones corporativas,redes,servicio,empresa,tecnologia" />
            <meta name="rights" content="Jassatelecom © 2017. Derechos reservados" />
            <meta name="description" content="Empresa dedicada al diseño y supervisión de soluciones tecnológicas en base a los más altos estándares, normas y procedimientos. Cumpliendo y superando siempre las expectativas de nuestros clientes con gran respeto a las políticas en curso y el medio ambiente." />
            <meta name="generator" content="JassaTelecom - Soluciones tecnologicas" />
            <title>JassaTelecom - Diseños y Soluciones ICT</title>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
            <!--Favicon -->
            <link rel="icon" type="image/png" href="assets/img/jassa.ico" />

            <!-- CSS Files -->
            <link rel="stylesheet" href="assets/css/reset.css" />
            <link rel="stylesheet" href="assets/css/animate.min.css" />
            <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
            <link rel="stylesheet" href="assets/css/font-awesome.min.css" />
            <link rel="stylesheet" href="assets/css/socials.css" />
            <link rel="stylesheet" href="assets/css/magnific-popup.css" />
            <link rel="stylesheet" href="assets/css/flexslider.css" />
            <link rel="stylesheet" href="assets/css/simpletextrotator.css" />
            <link rel="stylesheet" href="assets/css/cubeportfolio.min.css" />
            <link rel="stylesheet" href="assets/css/timeline.css" />
            <link rel="stylesheet" href="assets/css/owl.carousel.css" />
            <link rel="stylesheet" href="assets/css/settings-ie8.css" />
            <link rel="stylesheet" href="assets/css/settings.css" />
            <!-- Page Styles -->
            <link rel="stylesheet" href="assets/css/style.css" />
            <link rel="stylesheet" href="assets/css/backgrounds.css" />
            <link rel="stylesheet" href="assets/css/responsive.css" />
            <link rel="stylesheet" href="assets/css/custom.css" />
            <!-- End Page Styles -->

            <!-- Page Layout Color, night or dark -->
            <link id="changeable_tone" rel="stylesheet" href="assets/css/page_tones/dark.css" />
            <!-- End Page Layout Color -->

            <!-- Page Elements Color -->
            <link id="changeable_color" rel="stylesheet" href="assets/css/colors/orange.css" />
            <!-- End Page Elements Color -->

            <!-- Page Fonts / Pacifico-->
            <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css' />
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
            <!-- Raleway-->
            <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,,200,300,600,700' rel='stylesheet' type='text/css' />

            <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDNKHfgmZn07ALAsAYWwytbK7SrLqrhLX8"></script>
            <!-- End CSS Files -->

        </head>

        <!-- Body Start -->

        <body class="parallax">

            <!-- Page Loader -->
            <article id="pageloader" class="white-loader">
                <div class="spinner">
                    <div class="bounce1"></div>
                    <div class="bounce2"></div>
                    <div class="bounce3"></div>
                </div>
            </article>

            <!-- MENU PRINCIPAL -->
            <nav id="navigation" class="white-nav">
                <!-- Navigation -->
                <div class="navigation first-nav double-nav raleway">
                    <!-- Navigation Inner -->
                    <div class="nav-inner clearfix">

                        <!-- Logo Area -->
                        <div class="logo f-left">
                            <!-- Logo Link -->
                            <a href="#home" class="logo-link scroll">
                                <!-- Logo Image / data-second-logo for only white nav -->
                                <img src="assets/img/imagotipo.png" data-second-logo="assets/img/imagotipo.png" alt="jassatelecom_logo" />
                            </a>
                        </div>
                        <!-- End Logo Area -->

                        <!-- Mobile Menu Button -->
                        <a class="mobile-nav-button"><i class="fa fa-bars"></i></a>

                        <!-- Navigation Links -->
                        <div class="nav-menu clearfix f-right">
                            <!-- Nav List -->
                            <ul class="nav uppercase normal raleway">
                                <?php
                                $menu_select = "SELECT idMenu,nombreMenu,enlaceMenu,estadoMenu FROM jas_menu ";
                                $menu_result = $link->query($menu_select) or die($link->error);

                                while ($menu_row = $menu_result->fetch_array(MYSQLI_BOTH)) {
                                    if ($menu_row["estadoMenu"] == "1") {
                                        echo ' 
                                        <li><a href="' . $menu_row["enlaceMenu"] . '" class="scroll">' . $menu_row["nombreMenu"] . '</a></li>
                                    ';
                                    }
                                }
                                ?>

                            </ul>
                            <!-- End Nav List -->
                        </div>
                        <!-- End Navigation Links -->
                    </div>
                    <!-- End Navigation Inner -->
                </div>
            </nav>
            <!-- FIN MENU -->

            <!-- SLIDER PRINCIPAL -->
            <section id="home" class="home rev-slider container">
                <!-- Container  -->
                <div class="tp-banner-container">
                    <!-- Banner  -->
                    <div class="revslider t-center">
                        <?php
                        $slider_select = "SELECT * FROM jas_slider ";
                        $slider_result = $link->query($slider_select) or die($link->error);
                        $slider_row = array();
                        $slider_result->data_seek(0);
                        $slider_row[0] = $slider_result->fetch_array(MYSQLI_NUM);
                        $slider_result->data_seek(1);
                        $slider_row[1] = $slider_result->fetch_array(MYSQLI_NUM);
                        $slider_result->data_seek(2);
                        $slider_row[2] = $slider_result->fetch_array(MYSQLI_NUM);
                        ?>
                        <ul>
                            <!-- Slide  -->
                            <li data-transition="fade" data-slotamount="1" data-masterspeed="1500" data-thumb="assets/img/slide1.jpg" data-delay="5000" data-saveperformance="off" data-title="Jassa telecom">
                                <!-- Background Image -->
                                <img src="assets/img/slide1.jpg" alt="slidebg" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                                    <!-- LAYERS / LAYER NR. 1 -->
                                    <div class="tp-caption customin customout rs-parallaxlevel-5 normal gray-light fourth_text raleway uppercase" data-0="opacity:1;" data-600="opacity:0;" data-x="center" data-hoffset="8" data-y="center" data-voffset="-105" data-customin="x:0;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%%;" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="900" data-start="1400" data-easing="Power4.easeOut" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">
                                        <!-- Layer Item  -->
                                        <?php echo $slider_row[0][1]; ?>
                                    </div>

                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption customin customout rs-parallaxlevel-5 second_text normal white raleway uppercase" data-0="opacity:1;" data-600="opacity:0;" data-x="center" data-hoffset="0" data-y="center" data-voffset="-35" data-customin="x:0;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%%;" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="900" data-start="1500" data-easing="Power4.easeOut" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">
                                        <!-- Layer Item  -->
                                        <?php echo $slider_row[0][2]; ?>
                                    </div>

                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption customin customout rs-parallaxlevel-5 third_text normal white normal" data-0="opacity:1;" data-600="opacity:0;" data-x="center" data-hoffset="0" data-y="center" data-voffset="37" data-customin="x:0;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%%;" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="900" data-start="1600" data-easing="Power4.easeOut" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">
                                        <!-- Layer Item  -->
                                        <?php echo $slider_row[0][3]; ?>
                                    </div>

                                    <!-- LAYER NR. 4 -->
                                    <div class="tp-caption customin customout rs-parallaxlevel-5" data-x="center" data-hoffset="0" data-y="center" data-voffset="285" data-customin="x:0;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%%;" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="900" data-start="1700" data-easing="Power4.easeOut" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">
                                        <!-- Layer Item  -->
                                        <a href="#about" class="home-button dark-button uppercase normal raleway scroll bounce_ani darkfont" data-0="opacity:1;" data-600="opacity:0;">
                                            <?php echo $slider_row[0][4]; ?>
                                            <br />
                                            <i class="fa fa-chevron-down"> </i>
                                        </a>
                                    </div>

                            </li>
                            <!-- End Slide  -->

                            <!-- Slide  -->
                            <li data-transition="fade" data-slotamount="1" data-masterspeed="1500" data-thumb="img/slide2.jpg" data-delay="5000" data-saveperformance="off" data-title="Servicios">
                                <!-- Background Image -->
                                <img src="assets/img/slide2.jpg" alt="slidebg" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                                    <!-- LAYERS / LAYER NR. 1 -->
                                    <div class="tp-caption customin customout rs-parallaxlevel-5 normal gray-light raleway uppercase" data-0="opacity:1;" data-600="opacity:0;" data-x="center" data-hoffset="8" data-y="center" data-voffset="-105" data-customin="x:0;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%%;" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="900" data-start="1400" data-easing="Power4.easeOut" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">
                                        <!-- Layer Item  -->
                                        <?php echo $slider_row[1][1]; ?>
                                    </div>

                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption customin customout rs-parallaxlevel-5 second_text normal white raleway uppercase" data-0="opacity:1;" data-600="opacity:0;" data-x="center" data-hoffset="0" data-y="center" data-voffset="-35" data-customin="x:0;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%%;" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="900" data-start="1500" data-easing="Power4.easeOut" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">
                                        <!-- Layer Item  -->
                                        <?php echo $slider_row[1][2]; ?>
                                    </div>

                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption customin customout rs-parallaxlevel-5 third_text normal white normal raleway" data-0="opacity:1;" data-600="opacity:0;" data-x="center" data-hoffset="0" data-y="center" data-voffset="37" data-customin="x:0;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%%;" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="900" data-start="1600" data-easing="Power4.easeOut" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">
                                        <!-- Layer Item  -->
                                        <?php echo $slider_row[1][3]; ?>
                                    </div>

                                    <!-- LAYER NR. 4 -->
                                    <div class="tp-caption customin customout rs-parallaxlevel-5" data-x="center" data-hoffset="0" data-y="center" data-voffset="185" data-customin="x:0;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%%;" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="900" data-start="1700" data-easing="Power4.easeOut" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">
                                        <!-- Layer Item  -->
                                        <a href="#about" class="home-button dark-button uppercase normal raleway scroll bounce_ani" data-0="opacity:1;" data-600="opacity:0;">
                                            <?php echo $slider_row[1][4]; ?>
                                            <br />
                                            <i class="fa fa-chevron-down"> </i>
                                        </a>
                                    </div>
                            </li>
                            <!-- End Slide  -->

                            <!-- Slide  -->
                            <li data-transition="fade" data-slotamount="1" data-masterspeed="1500" data-thumb="assets/img/slide3.jpg" data-delay="5000" data-saveperformance="off" data-title="Soluciones">
                                <!-- Background Image -->
                                <img src="assets/img/slide3.jpg" alt="slidebg" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                                    <!-- LAYERS / LAYER NR. 1 -->
                                    <div class="tp-caption customin customout rs-parallaxlevel-5 normal gray-light raleway uppercase" data-0="opacity:1;" data-600="opacity:0;" data-x="center" data-hoffset="8" data-y="center" data-voffset="-105" data-customin="x:0;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%%;" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="900" data-start="1400" data-easing="Power4.easeOut" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">
                                        <!-- Layer Item  -->
                                        <?php echo $slider_row[2][1]; ?>
                                    </div>

                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption customin customout rs-parallaxlevel-5 second_text normal white raleway uppercase" data-0="opacity:1;" data-600="opacity:0;" data-x="center" data-hoffset="0" data-y="center" data-voffset="-35" data-customin="x:0;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%%;" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="900" data-start="1500" data-easing="Power4.easeOut" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">
                                        <!-- Layer Item  -->
                                        <?php echo $slider_row[2][2]; ?>
                                    </div>

                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption customin customout rs-parallaxlevel-5 third_text normal white normal" data-0="opacity:1;" data-600="opacity:0;" data-x="center" data-hoffset="0" data-y="center" data-voffset="37" data-customin="x:0;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%%;" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="900" data-start="1600" data-easing="Power4.easeOut" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">
                                        <!-- Layer Item  -->
                                        <?php echo $slider_row[2][3]; ?>
                                    </div>

                                    <!-- LAYER NR. 4 -->
                                    <div class="tp-caption customin customout rs-parallaxlevel-5" data-x="center" data-hoffset="0" data-y="center" data-voffset="85" data-customin="x:0;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%%;" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="900" data-start="1700" data-easing="Power4.easeOut" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">
                                        <!-- Layer Item  -->
                                        <a href="#soluciones" class="home-button dark-button uppercase normal raleway scroll" data-0="opacity:1;" data-600="opacity:0;">
                                            <?php echo $slider_row[2][4]; ?>
                                        </a>
                                    </div>
                            </li>
                            <!-- End Slide  -->

                        </ul>
                    </div>
                    <!-- End Slider  -->
                </div>
                <!-- End Container  -->
            </section>
            <!-- FIN SLIDER -->

            <!-- SERVICIOS -->
            <section id="about">
                <!-- Inner -->
                <?php
                $titles_select = "SELECT * FROM jas_misc";
                $titles_result = $link->query($titles_select) or die($link->error);
                $titles_row = array();
                $titles_result->data_seek(0);
                $titles_row[0] = $titles_result->fetch_array(MYSQLI_ASSOC);
                ?>
                <div class="inner t-center">

                    <!-- Header -->
                    <h1 class="header header-style-1 dark raleway uppercase t-center animated" data-animation="fadeIn" data-animation-delay="100">
                        <?php echo $titles_row[0]['serviceTitle']; ?>
                    </h1>
                    <!-- Header Text -->
                    <p class="normal t-center animated" data-animation="fadeIn" data-animation-delay="100">
                        <?php echo $titles_row[0]['serviceSubtitle']; ?>
                    </p>

                    <!-- Boxes and Box Type -->
                    <div class="boxes boxes-type-2 box-carousel four-items clearfix">
                        <?php
                        $menu_select = "SELECT idService,iconService,titleService,textService,statusService FROM jas_services ";
                        $menu_result = $link->query($menu_select) or die($link->error);

                        while ($menu_row = $menu_result->fetch_array(MYSQLI_BOTH)) {
                            $delay = 4;
                            if ($menu_row['statusService'] == 1) {
                                echo '   
                                    <div class="box animated" data-animation="fadeIn" data-animation-delay="' . $delay . '00">
                                        <div class="box-icon fullwidth t-center normal">
                                            <a href="#" class="changeable-icon">
                                                ' . $menu_row['iconService'] . '
                                            </a>
                                        </div>
                                        <h4 class="box-header no-padding">
                                            ' . $menu_row['titleService'] . '
                                        </h4>
                                        <p class="no-padding no-margin">
                                            ' . $menu_row['textService'] . '
                                        </p>
                                    </div>
                                ';
                                $delay++;
                                $delay++;
                            }
                        }
                        ?>

                    </div>
                    <!-- End Boxes -->

                    <!-- If you add here more boxes, here will be slider automatically -->

                </div>
                <!-- End Inner -->
            </section>
            <!-- FIN SERVICIOS -->

            <!--SOLUCIONES CORPORATIVAS-->
            <section id="soluciones" class="container corpbg parallax1">

                <!-- Features Inner -->
                <div class="inner t-center">

                    <!-- Header -->
                    <h2 class="header header-style-1 white semibold uppercase animated" data-animation="fadeIn" data-animation-delay="100">
                        <?php echo $titles_row[0]['solucTitle']; ?>
                    </h2>
                    <!-- Header Text -->
                    <p class="light animated" data-animation="fadeIn" data-animation-delay="100">
                        <?php echo $titles_row[0]['solucSubtitle']; ?>
                    </p>

                    <!-- Boxes  -->
                    <div class="feature-boxes clearfix">

                        <?php
                        $menu_select = "SELECT idSoluc,iconSoluc,titleSoluc,textSoluc,statusSoluc FROM jas_soluc ";
                        $menu_result = $link->query($menu_select) or die($link->error);
                        $delay = 4;
                        $i = 1;
                        while ($menu_row = $menu_result->fetch_array(MYSQLI_BOTH)) {
                            if ($menu_row['statusSoluc'] == 1) {
                                if ($i == 1) {
                                    echo '<div class="row">';
                                }
                                echo '   
                                    <div class="feature-box col-xs-4 animated" data-animation="fadeIn" data-animation-delay="' . $delay . '00">
                                        <!-- Box Icon  -->
                                        <div class="f-left feature-icon">
                                                ' . $menu_row['iconSoluc'] . '
                                            </div>
                                        <!-- Box Texts  -->
                                        <div class="feature-text f-left t-left white">
                                            <!-- Box Header  -->
                                            <h4 class="no-margin normal no-padding">
                                            ' . $menu_row['titleSoluc'] . '
                                        </h4>
                                        <!-- Box Description  -->
                                        <p>
                                            ' . $menu_row['textSoluc'] . '
                                        </p>
                                        </div>
                                    </div>
                                ';
                                if ($i == 3) {
                                    echo '</div>';
                                    $i = 1;
                                } else {
                                    $i++;
                                }
                                $delay++;
                                $delay++;
                            }
                        }
                        ?>

                    </div>
                    <!-- End Boxes  -->
                </div>
                <!-- End Features Inner  -->
            </section>
            <!--FIN SOLUCIONES CORPORATIVAS-->

            <!-- TWEETS CLIENTES -->
            <section id="tweets" class="testimonials type-1 backgroundjassa1 parallax10 xdark-bg">
                <!-- Inner -->
                <div class="inner">
                    <!-- Quote -->
                    <div class="quote white t-center circle light">
                        <i class="fa fa-hashtag"></i>
                    </div>
                    <!-- Slider -->
                    <div class="testimonial-slide">
                        <?php
                        $menu_select = "SELECT idTweet,nameTweet,textTweet,statusTweet FROM jas_tweets ";
                        $menu_result = $link->query($menu_select) or die($link->error);
                        while ($menu_row = $menu_result->fetch_array(MYSQLI_BOTH)) {
                            if ($menu_row['statusTweet'] == 1) {
                                echo ' 
                                    <div class="cbp-item">
                                        <h2 class="t-center light">
                                            ' . $menu_row['textTweet'] . '
                                        </h2>
                                        <p class="uppercase light white t-center">' . $menu_row['nameTweet'] . '</p>
                                    </div>
                                ';
                            }
                        }
                        ?>
                    </div>
                    <!-- End Slider -->
                </div>
                <!-- End Inner -->
            </section>
            <!--  FIN TWEETS CLIENTES -->

            <!-- QUIENES SOMOS -->
            <section id="profile">

                <!-- Inner -->
                <div class="inner t-center clearfix">
                    <!-- Header -->
                    <h1 class="header header-style-1 dark raleway uppercase t-center ">
                        <?php echo $titles_row[0]['aboutTitle']; ?>
                    </h1>
                    <!-- Header Text -->
                    <p class="normal t-center">
                        <?php echo $titles_row[0]['aboutSubtitle']; ?>
                    </p>

                    <!-- Boxes -->
                    <div class="boxes boxes-type-3 f-left col-xs-12 t-left">

                        <!-- Box -->
                        <div class="box clearfix">
                            <!-- Box Icon -->
                            <div class="box-icon t-center normal f-left col-xs-2">
                                <!-- Icon -->
                                <a href="#" class="changeable-icon">
                                    <!-- Icon Selector -->
                                    <i class="fa fa-id-badge"></i>
                                </a>
                            </div>
                            <!-- End Box Icon -->
                            <!-- Box Texts -->
                            <div class="box-texts f-left col-xs-10">
                                <!-- Box Header -->
                                <h4 class="box-header  no-padding">
                                    ¿Qui&eacute;nes Somos?
                                </h4>

                                <!-- Box Description -->
                                <p class="no-padding light no-margin">
                                    <?php echo $titles_row[0]['quisomText']; ?>
                                </p>
                            </div>
                            <!-- End Box Texts -->
                        </div>
                        <!-- End Box -->

                        <!-- Box -->
                        <div class="box clearfix">
                            <!-- Box Icon -->
                            <div class="box-icon t-center normal f-left col-xs-2">
                                <!-- Icon -->
                                <a href="#" class="changeable-icon">
                                    <!-- Icon Selector -->
                                    <i class="fa fa-heart"></i>
                                </a>
                            </div>
                            <!-- End Box Icon -->
                            <!-- Box Texts -->
                            <div class="box-texts f-left col-xs-10">
                                <!-- Box Header -->
                                <h4 class="box-header  no-padding">
                                    Misión
                                </h4>

                                <!-- Box Description -->
                                <p class="no-padding light no-margin">
                                    <?php echo $titles_row[0]['misionText']; ?>
                                </p>
                            </div>
                            <!-- End Box Texts -->
                        </div>
                        <!-- End Box -->

                        <!-- Box -->
                        <div class="box clearfix">
                            <!-- Box Icon -->
                            <div class="box-icon t-center normal f-left col-xs-2">
                                <!-- Icon -->
                                <a href="#" class="changeable-icon">
                                    <!-- Icon Selector -->
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                            <!-- End Box Icon -->
                            <!-- Box Texts -->
                            <div class="box-texts f-left col-xs-10">
                                <!-- Box Header -->
                                <h4 class="box-header  no-padding">
                                    Visión
                                </h4>

                                <!-- Box Description -->
                                <p class="no-padding light no-margin">
                                    <?php echo $titles_row[0]['visionText']; ?>
                                </p>
                            </div>
                            <!-- End Box Texts -->
                        </div>
                        <!-- End Box -->

                    </div>

                </div>
                <!-- End Inner -->
            </section>
            <!-- FIN QUIENES SOMOS -->

            <!-- DATOS CURIOSOS -->
            <section class="fun-facts backgroundjassa2 parallax4 xdark-bg">

                <!-- Facts -->
                <div class="facts clearfix t-center white">

                    <!-- Fact -->
                    <div class="fact" data-perc="<?php echo $titles_row[0]['ff1']; ?>">
                        <!-- Fact Tag -->
                        <h1 class="factor raleway"></h1>
                        <!-- Fact Name -->
                        <h3 class="light">
                            <?php echo $titles_row[0]['ff1title']; ?>
                        </h3>
                    </div>
                    <!-- End Fact -->

                    <!-- Fact -->
                    <div class="fact" data-perc="<?php echo $titles_row[0]['ff2']; ?>">
                        <!-- Fact Tag -->
                        <h1 class="factor raleway"></h1>
                        <!-- Fact Name -->
                        <h3 class="light">
                            <?php echo $titles_row[0]['ff2title']; ?>
                        </h3>
                    </div>
                    <!-- End Fact -->

                    <!-- Fact -->
                    <div class="fact" data-perc="<?php echo $titles_row[0]['ff3']; ?>">
                        <!-- Fact Tag -->
                        <h1 class="factor raleway"></h1>
                        <!-- Fact Name -->
                        <h3 class="light">
                            <?php echo $titles_row[0]['ff3title']; ?>
                        </h3>
                    </div>
                    <!-- End Fact -->

                    <!-- Fact -->
                    <div class="fact" data-perc="<?php echo $titles_row[0]['ff4']; ?>">
                        <!-- Fact Tag -->
                        <h1 class="factor raleway"></h1>
                        <!-- Fact Name -->
                        <h3 class="light">
                            <?php echo $titles_row[0]['ff4title']; ?>
                        </h3>
                    </div>
                    <!-- End Fact -->

                </div>
                <!-- End Facts -->

            </section>
            <!-- FIN DATOS CURIOSOS -->


            <!-- PORTAFOLIO -->
            <section id="portfolio" class="background9 xdark-bg parallax2 pattern-black">

                <!-- Inner -->
                <div class="inner t-center animated" data-animation="fadeIn" data-animation-delay="100">
                    <!-- Header -->
                    <h1 class="header header-style-1 white raleway normal uppercase t-center ">
                        <?php echo $titles_row[0]['portTitle']; ?>
                    </h1>
                    <!-- Header Text -->
                    <p class="normal t-center">
                        <?php echo $titles_row[0]['portSubtitle']; ?>
                    </p>
                </div>
                <!-- End Inner -->

                <!-- Categories -->
                <div class="categories fullwidth">
                    <!-- Boxes -->
                    <div class="category-boxes minimal-texts double-slider relative clearfix">

                        <?php
                        $menu_select = "SELECT idPort,titlePort,subtitlePort,textPort,img1Port,img2Port,img3Port,statusPort FROM jas_portfolio ";
                        $menu_result = $link->query($menu_select) or die($link->error);
                        $delay = 3;
                        while ($menu_row = $menu_result->fetch_array(MYSQLI_BOTH)) {
                            if ($menu_row['statusPort'] == 1) {
                                echo ' 
                                    <div class="box animated showmodal" data-toggle="modal" data-target="#member1" data-animation="fadeIn" data-animation-delay="' . $delay . '00">
                                        <div class="category-inner-slider inner-slider">
                                            <div class="image">
                                                <img src="assets/img/portfolio/' . $menu_row['img1Port'] . '.jpg" alt="jassatelecom" />
                                            </div>
                                            <div class="image">
                                                <img src="assets/img/portfolio/' . $menu_row['img2Port'] . '.jpg" alt="jassatelecom" />
                                            </div>
                                            <div class="image">
                                                <img src="assets/img/portfolio/' . $menu_row['img3Port'] . '.jpg" alt="jassatelecom" />
                                            </div>
                                        </div>
                                        <div class="box-texts white">
                                            <h2 class="t-shadow raleway antialiased">
                                                ' . $menu_row['titlePort'] . '
                                            </h2>
                                            <p class="t-shadow light">
                                                ' . $menu_row['subtitlePort'] . '
                                            </p>
                                            <p class="t-shadow light">
                                                ' . $menu_row['textPort'] . '
                                            </p>
                                        </div>
                                    </div>
                                ';
                            }
                            $delay++;
                            $delay++;
                        }
                        ?>

                    </div>
                    <!-- End Category Boxes -->
                    <!-- Bottom Page Texts -->
                    <div class="bottom-page-texts relative t-center">
                        <!-- Slider Texts Area -->
                        <h2 class="raleway normal"><?php echo $titles_row[0]['shareTitle']; ?></h2>
                        <p class="normal raleway"><?php echo $titles_row[0]['shareSubtitle']; ?></p>
                        <!-- Bottom Buttons -->
                        <div class="bottom-page-buttons">
                            <!-- First Button -->
                            <a href="assets/files/jassa.pdf" class="t-center scroll  content-button" target="_blank">
                                <p class="uppercase">Presentación</p>
                                <p class="normal">Clic para ver presentación</p>
                            </a>
                        </div>
                        <!-- End Buttons -->
                    </div>
                    <!-- End Bottom Page Texts -->
                </div>
                <!-- End Categories -->
            </section>
            <!-- FIN PORTAFOLIO -->


            <!-- EQUIPO -->
            <section id="skills" class="container type-2">

                <!-- Featured Works Inner -->
                <div class="inner t-center">

                    <!-- Header -->
                    <h2 class="header header-style-1 dark normal raleway uppercase animated" data-animation="fadeIn" data-animation-delay="100">
                        <?php echo $titles_row[0]['teamTitle']; ?>
                    </h2>
                    <!-- Header Text -->
                    <p class="light animated" data-animation="fadeIn" data-animation-delay="100">
                        <?php echo $titles_row[0]['teamSubtitle']; ?>
                    </p>
                    <!-- Team Boxes -->
                    <div class="team-boxes box-carousel antialiased four-items clearfix">

                        <?php
                        $menu_select = "SELECT idTeam,photoTeam,nameTeam,jobTeam,profileTeam,fbTeam,igTeam,twTeam,statusTeam FROM jas_team ";
                        $menu_result = $link->query($menu_select) or die($link->error);
                        $delay = 3;
                        while ($menu_row = $menu_result->fetch_array(MYSQLI_BOTH)) {
                            if ($menu_row['statusTeam'] == 1) {
                                echo ' 
                                    <div class="team-box animated" data-animation="fadeIn" data-animation-delay="' . $delay . '00">
                                        <div class="member-image fullwidth">
                                            <img src="assets/img/team/' . $menu_row['photoTeam'] . '.jpg" alt="jassatelecom" />
                                        </div>
                                        <div class="member-details light">
                                            <h3>
                                                ' . $menu_row['nameTeam'] . '
                                            </h3>
                                            <h5>
                                                ' . $menu_row['jobTeam'] . '
                                            </h5>
                                            <div class="strip"></div>
                                            <p class="normal">
                                                ' . $menu_row['profileTeam'] . '
                                            </p>
                                            <div class="socials">
                                                <a href="' . $menu_row['fbTeam'] . '">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                                <a href="' . $menu_row['twTeam'] . '">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                                <a href="' . $menu_row['igTeam'] . '">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                ';
                            }
                            $delay++;
                            $delay++;
                        }
                        ?>

                    </div>
                    <!-- End Boxes -->
                </div>
                <!-- End Inner -->

            </section>
            <!-- FIN EQUIPO -->

            <!-- CLIENTES -->
            <section id="clients" class="backgroundjassa1 parallax6 xdark-bg">

                <!-- Inner -->
                <div class="inner t-center clearfix">
                    <!-- Header -->
                    <h1 class="header strip header-style-1 white raleway t-center uppercase animated" data-animation="fadeIn" data-animation-delay="100">
                        <?php echo $titles_row[0]['clientsTitle']; ?>
                    </h1>
                    <!-- Header Text -->
                    <p class="normal t-center antialiased animated" data-animation="fadeIn" data-animation-delay="100">
                        <?php echo $titles_row[0]['clientsSubtitle']; ?>
                    </p>

                    <div class="boxes boxes-type-4 light box-carousel three-items clearfix animated" data-animation="fadeIn" data-animation-delay="500">

                        <?php
                        $menu_select = "SELECT idClient,photoClient,nameClient,statusClient FROM jas_clients ";
                        $menu_result = $link->query($menu_select) or die($link->error);
                        while ($menu_row = $menu_result->fetch_array(MYSQLI_BOTH)) {
                            if ($menu_row['statusClient'] == 1) {
                                echo ' 
                                    <div class="box white raleway antialiased normal">
                                        <div class="box-image fullwidth t-center normal">
                                            <a class="changeable-image">
                                                <img class="fitimg" src="assets/img/clientes/' . $menu_row['photoClient'] . '.jpg" alt="jassatelecom">
                                            </a>
                                        </div>
                                        <h4 class="box-header no-padding uppercase">
                                            ' . $menu_row['nameClient'] . '
                                        </h4>
                                    </div>
                                ';
                            }
                        }
                        ?>

                    </div>
                    <!-- End Boxes -->
                </div>
                <!-- End Inner -->
            </section>
            <!-- FIN CLIENTES -->

            <!-- BANNER  -->
            <section class="content clearfix">
                <!-- Left  -->
                <div class="left col-md-6 no-padding">
                    <!-- Slider  -->
                    <div class="images basic_slider">
                        <!-- Image Slider  -->
                        <ul class="image_slider">
                            <!-- Slide  -->
                            <li class="slide">
                                <!-- Image SRC  -->
                                <img src="assets/img/banner1.jpg" alt="Content" />
                            </li>
                            <!-- Slide  -->
                            <li class="slide">
                                <!-- Image SRC  -->
                                <img src="assets/img/banner2.jpg" alt="Content" />
                            </li>
                            <!-- Slide  -->
                            <li class="slide">
                                <!-- Image SRC  -->
                                <img src="assets/img/banner3.jpg" alt="Content" />
                            </li>
                        </ul>
                        <!-- End Image Slider -->
                    </div>
                    <!-- End Slider  -->
                </div>
                <!-- End Left -->

                <!-- Right -->
                <div class="right col-md-6 gray-bg no-padding">
                    <!-- Texts -->
                    <div class="texts clearfix table">
                        <div class="table-cell v-center">
                            <!-- Header -->
                            <h2 class="content-header extra-light">
                                <?php echo $titles_row[0]['bannerTitle']; ?>
                            </h2>
                            <!-- Texts -->
                            <p class="note mt-20">
                                <?php echo $titles_row[0]['bannerSubtitle']; ?>
                            </p>
                            <p class="note mt-20">
                                <?php echo $titles_row[0]['bannerText']; ?>
                            </p>
                        </div>
                    </div>
                    <!-- End Texts  -->
                </div>
                <!-- End Right  -->
            </section>
            <!-- FIN BANNER -->

            <!-- CONTACTO -->
            <section id="contact" class="relative contact">

                <div class="grayscale-bg absolute backgroundjassa2 parallax9 xdark-bg"></div>

                <!-- Inner -->
                <div class="inner t-center clearfix no-black-white animated" data-animation="fadeIn" data-animation-delay="800">
                    <!-- Header -->
                    <h1 class="header header-style-1 white raleway uppercase t-center ">
                        <?php echo $titles_row[0]['contactTitle']; ?>
                    </h1>
                    <!-- Header Text -->
                    <p class="light t-center">
                        <?php echo $titles_row[0]['contactSubtitle']; ?>
                    </p>

                    <!-- Address and Form -->
                    <div class="fullwidth clearfix">

                        <!-- Address -->
                        <div class="address f-left t-left">

                            <!-- Address Header -->
                            <div class="address_head">
                                <!-- Header -->
                                <h3>
                                    Visita nuestras oficinas
                                </h3>
                            </div>
                            <!-- End Address Header -->


                            <!-- Address Box -->
                            <a href="tel:025150500" class="box light hover">
                                <!-- Icon -->
                                <div class="icon">
                                    <!-- Icon SRC -->
                                    <i class="fa fa-phone colored"></i>
                                </div>
                                <!-- Details -->
                                <div class="details">
                                    <h4>
                                        Oficina:
                                    </h4>
                                    <p>
                                        02 515-0500
                                    </p>
                                </div>
                                <!-- Right Secret Button -->
                                <div class="button">
                                    <img src="../assets/images/plus.png" alt="Jassa">
                                </div>
                            </a>
                            <!-- End Box -->


                            <!-- Address Box -->
                            <a href="mailto:ventas@jassatelecom.com" class="box light hover">
                                <!-- Icon -->
                                <div class="icon">
                                    <!-- Icon SRC -->
                                    <i class="fa fa-envelope colored"></i>
                                </div>
                                <!-- Details -->
                                <div class="details">
                                    <h4>
                                        E-Mail:
                                    </h4>
                                    <p>
                                        ventas@jassatelecom.com
                                    </p>
                                </div>
                                <!-- Right Secret Button -->
                                <div class="button">
                                    <img src="../assets/images/plus.png" alt="Jassa">
                                </div>
                            </a>
                            <!-- End Box -->


                            <!-- Address Box -->
                            <a href="#map" class="box light hover scroll">
                                <!-- Icon -->
                                <div class="icon">
                                    <!-- Icon SRC -->
                                    <i class="fa fa-map-marker colored"></i>
                                </div>
                                <!-- Details -->
                                <div class="details">
                                    <h4>
                                        Mapa:
                                    </h4>
                                    <p>
                                        Martín de Utreras N31-276 y Mariana de Jesus
                                    </p>
                                </div>
                                <!-- Right Secret Button -->
                                <div class="button">
                                    <img src="../assets/images/plus.png" alt="Jassa">
                                </div>
                            </a>
                            <!-- End Box -->


                            <!-- Address Box -->
                            <a class="box light">
                                <!-- Details -->
                                <div class="address-note">
                                    <h4>
                                        Unete a la comunidad
                                    </h4>
                                    <p>
                                        Puedes seguirnos en nuestras redes sociales
                                    </p>
                                </div>
                            </a>
                            <!-- End Box -->

                            <!-- Address Box -->
                            <div class="socials">

                                <!-- Social Button -->
                                <a href="#" class="facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>

                                <!-- Social Button -->
                                <a href="#" class="twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>

                                <!-- Social Button -->
                                <a href="#" class="instagram">
                                    <i class="fa fa-instagram"></i>
                                </a>

                                <!-- Social Button -->
                                <a href="#" class="linkedin">
                                    <i class="fa fa-linkedin"></i>
                                </a>

                            </div>
                            <!-- End Box -->

                        </div>
                        <!-- End Address -->

                        <!-- Contact Form -->
                        <div class="contact_form f-right">
                            <!-- Form -->
                            <form id="contact_form" name="cform" class="clearfix form dark_form" method="post" action="#">

                                <!-- Name -->
                                <input type="text" name="name" id="name" required placeholder="Nombre" />

                                <!-- Email -->
                                <input type="email" name="email" id="email" required placeholder="E-Mail" />

                                <!-- Subject -->
                                <input type="text" name="subject" id="subject" required placeholder="Asunto" />

                                <!-- Message -->
                                <textarea name="message" id="message" required placeholder="Mensaje"></textarea>

                                <!-- Verify -->
                                <input type="text" name="verify" id="verify" required placeholder="" />

                                <!-- Reset Button -->
                                <button type="reset" id="clear" name="clear">Limpiar</button>
                                <!-- End Reset Button -->

                                <!-- Send Button -->
                                <button type="submit" id="submit" name="submit" class="colored-bg contactformsubmit">Enviar</button>
                                <!-- End Send Button -->

                                <!-- Error Message -->
                                <div class="error_message">
                                    <p class="t-left no-margin">
                                        <!-- Error Message Icon -->
                                        <i class="fa fa-warning"></i> Error, por favor rellene los campos.
                                    </p>
                                </div>
                                <!-- Submit Message -->
                                <div class="submit_message">
                                    <p class="t-left no-margin">
                                        <!-- Error Message Icon -->
                                        <i class="fa fa-check"></i> Gracias! muy pronto te responderemos.
                                    </p>
                                </div>
                            </form>
                            <!-- End Form -->
                        </div>
                        <!-- End Contact Form -->
                    </div>
                    <!-- End Contact, Address Area -->
                </div>
                <!-- End Inner -->
            </section>
            <!-- FIN CONTACTO -->

            <!-- CINTA CONTACTO -->
            <section class="address type-2 background46 parallax9 dark-bg">
                <!-- Boxed div -->
                <div class="boxed clearfix relative">

                    <!-- Box -->
                    <a class="box clearfix block f-left" href="tel:0123456789">
                        <!-- Icon -->
                        <div class="f-left icon">
                            <i class="fa fa-mobile"></i>
                        </div>
                        <!-- Texts -->
                        <div class="f-right texts">
                            <!-- Arrow -->
                            <span class="arrow"></span>
                            <!-- Header -->
                            <h3 class="no-padding no-margin extra-light">
                                Oficina
                            </h3>
                            <!-- Detail -->
                            <p class="no-margin no-padding extra-light">
                                02 515-0500
                            </p>
                        </div>
                        <!-- End Texts -->
                    </a>
                    <!-- End Box -->

                    <!-- Box -->
                    <a class="box clearfix block f-left" href="mailto:ventas@jassatelecom.com">
                        <!-- Icon -->
                        <div class="f-left icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <!-- Texts -->
                        <div class="f-right texts">
                            <!-- Arrow -->
                            <span class="arrow"></span>
                            <!-- Header -->
                            <h3 class="no-padding no-margin extra-light">
                                E-Mail
                            </h3>
                            <!-- Detail -->
                            <p class="no-margin no-padding extra-light">
                                ventas@jassatelecom.com
                            </p>
                        </div>
                        <!-- End Texts -->
                    </a>
                    <!-- End Box -->

                    <!-- Box -->
                    <a class="box clearfix block f-left scroll" href="#map">
                        <!-- Icon -->
                        <div class="f-left icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <!-- Texts -->
                        <div class="f-right texts">
                            <!-- Arrow -->
                            <span class="arrow"></span>
                            <!-- Header -->
                            <h3 class="no-padding no-margin extra-light">
                                Mapa
                            </h3>
                            <!-- Detail -->
                            <p class="no-margin no-padding extra-light">
                                Martín de Utreras N31-276 y Mariana de Jesus
                            </p>
                        </div>
                        <!-- End Texts -->
                    </a>
                    <!-- End Box -->

                </div>
                <!-- End Boxed div -->
            </section>
            <!-- FIN CINTA CONTACTO -->

            <!-- MAPA -->
            <section id="map" class="fullwidth">
                <!-- Google Map Script -->
                <!-- Google Map ID -->
                <div id="google_map"></div>
            </section>
            <!-- FIN MAPA -->

            <!-- FOOTER -->
            <footer class="fullwidth black-bg t-center">

                <a href="#home" class="scroll top-button black-bg">
                    <i class="fa fa-angle-double-up"></i>
                </a>

                <div class="footer-inner relative t-center">
                    <div class="logo relative">
                        <img class="logofooter" src="assets/img/imagotipo.png" alt="jassatelecom Logo">
                    </div>

                    <p class="copyright">
                        <a href="universe/" target="_blank" class="copyright_link">©2017</a> Todos los derechos reservados. Website hecho por <a href="http://www.burtonservers.com" target="_blank" class="copyright_link">Burton Technology</a>
                    </p>
                </div>
            </footer>
            <!-- FIN FOOTER -->

            <!-- MODALES -->
            <div id="member-modals">
                <!-- Modal -->
                <div class="modal fade" id="member1" tabindex="-1" role="dialog" aria-hidden="true">
                    <!-- Modal Dialog -->
                    <div class="modal-dialog t-left">
                        <!-- Body -->
                        <div class="modal-body t-center clearfix">
                            <!-- Close Button -->
                            <a class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></a>
                            <!-- Details -->
                            <div class="details t-left pushbottom">
                                <!-- Member Name -->
                                <h2 class="member-header light" id="modaltitulo">
                                    EBC
                                </h2>
                                <!-- Member Position -->
                                <h4 class="member-position light colored " id="modalsubtitulo">
                                    Proyecto
                                </h4>
                                <!-- Description -->
                                <p class="no-padding light " id="modaltexto">
                                    Nuestro proyecto de diseños de EBC abarcan aproximadamente el 60 % del mercado nacional de las operadoras de telefonía móvil, en especial de Claro y CNT.
                                </p>
                            </div>
                            <!-- Slider  -->
                            <div class="images basic_slider showcontrols">
                                <!-- Image Slider  -->
                                <ul class="image_slider" >
                                    <!-- Slide  -->
                                    <li class="slide" id="modalimg1">
                                        <!-- Image SRC  -->
                                        <img  src="assets/img/portfolio/10.jpg" alt="Content" />
                                    </li>
                                    <!-- Slide  -->
                                    <li class="slide" id="modalimg2">
                                        <!-- Image SRC  -->
                                        <img  src="assets/img/portfolio/08.jpg" alt="Content" />
                                    </li>
                                    <!-- Slide  -->
                                    <li class="slide" id="modalimg3">
                                        <!-- Image SRC  -->
                                        <img src="assets/img/portfolio/09.jpg" alt="Content" />
                                    </li>
                                </ul>
                                <!-- End Image Slider -->
                            </div>
                            <!-- End Slider  -->
                        </div>
                        <!-- End Body -->
                        <div class="modal-footer t-center clearfix">

                        </div>
                    </div>
                    <!-- End Dialog -->
                </div>
                <!-- End Modal -->
            </div>
            <!-- FIN MODALES -->


            <!-- JS Files -->
            <script type="text/javascript" src="assets/js/jquery-2.1.3.min.js"></script>
            <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
            <script type="text/javascript" src="assets/js/jquery.appear.js"></script>
            <script type="text/javascript" src="assets/js/waypoint.js"></script>
            <script type="text/javascript" src="assets/js/modernizr-latest.js"></script>
            <script type="text/javascript" src="assets/js/jquery.easing.1.3.js"></script>
            <script type="text/javascript" src="assets/js/SmoothScroll.js"></script>
            <script type="text/javascript" src="assets/js/jquery.magnific-popup.min.js"></script>
            <script type="text/javascript" src="assets/js/jquery.superslides.js"></script>
            <script type="text/javascript" src="assets/js/jquery.flexslider.js"></script>
            <script type="text/javascript" src="assets/js/jquery.simple-text-rotator.js"></script>
            <script type="text/javascript" src="assets/js/jquery.cubeportfolio.js"></script>
            <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
            <script type="text/javascript" src="assets/js/jquery.parallax-1.1.3.js"></script>
            <script type="text/javascript" src="assets/js/google-map.js"></script>
            <script type="text/javascript" src="assets/js/jquery.timeline.js"></script>
            <script type="text/javascript" src="assets/js/skrollr.min.js"></script>
            <script type="text/javascript" src="assets/js/jquery.fitvids.js"></script>
            <script type="text/javascript" src="assets/js/jquery.mb.YTPlayer.js"></script>
            <!-- Revolution Slider -->
            <script type="text/javascript" src="assets/js/rev_slider/jquery.themepunch.revolution.min.js"></script>
            <script type="text/javascript" src="assets/js/rev_slider/jquery.themepunch.tools.min.js"></script>
            <script type="text/javascript" src="assets/js/rev_slider/rev_plugins.js"></script>
            <!-- Contact Form -->
            <script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
            <script type="text/javascript" src="assets/js/contact-form.js"></script>
            <!-- Page Plugins -->
            <script type="text/javascript" src="assets/js/plugins.js"></script>
            <!-- Portfolio Plugins -->
            <script type="text/javascript" src="assets/js/portfolio.js"></script>
            <!-- Theme Panel -->
            <script type="text/javascript" src="assets/theme_panel/themepanel.js"></script>
            <script type="text/javascript" src="assets/js/custom.js"></script>
            <!-- End JS Files -->

        </body>
        <!-- Body End -->

</html>