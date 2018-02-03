<?php
////////////////////////////////////////////////////////////////////////////////////////DEBUG EN PANTALLA
//error_reporting(E_ALL);
//ini_set('display_errors', 1);

require ("universe/assets/scripts/conn.php");
require ("universe/assets/scripts/trackvisit.php");
trackvisitor("jassa_blog");
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

    <head>

        <head>
            <meta http-equiv="content-type" content="text/html; charset=utf-8" />
            <meta name="keywords" content="jassa telecom, jassa, telecom, telecomunicaciones" />
            <meta name="rights" content="Jassa Telecom © 2017. Derechos reservados" />
            <meta name="description" content="Empresa dedicada al diseño y supervisión de soluciones tecnológicas en base a los más altos estándares, normas y procedimientos. Cumpliendo y superando siempre las expectativas de nuestros clientes con gran respeto a las políticas en curso y el medio ambiente." />
            <meta name="generator" content="Burtontech - Soluciones tecnologicas" />
            <title>Jassa Telecom - Diseños y Soluciones ICT</title>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
            <!--Favicon -->
            <link rel="icon" type="image/png" href="jassa.ico" />

            <!-- CSS Files -->
            <link rel="stylesheet" href="css/reset.css" />
            <link rel="stylesheet" href="css/animate.min.css" />
            <link rel="stylesheet" href="css/bootstrap.min.css" />
            <link rel="stylesheet" href="css/font-awesome.min.css" />
            <link rel="stylesheet" href="css/socials.css" />
            <link rel="stylesheet" href="css/magnific-popup.css" />
            <link rel="stylesheet" href="css/flexslider.css" />
            <link rel="stylesheet" href="css/simpletextrotator.css" />
            <link rel="stylesheet" href="css/cubeportfolio.min.css" />
            <link rel="stylesheet" href="css/timeline.css" />
            <link rel="stylesheet" href="css/owl.carousel.css" />
            <link rel="stylesheet" href="css/settings-ie8.css" />
            <link rel="stylesheet" href="css/settings.css" />
            <!-- Page Styles -->
            <link rel="stylesheet" href="css/style.css" />
            <link rel="stylesheet" href="css/backgrounds.css" />
            <link rel="stylesheet" href="css/responsive.css" />
            <link rel="stylesheet" href="css/custom.css" />
            <!-- End Page Styles -->

            <!-- Page Layout Color, night or dark -->
            <link id="changeable_tone" rel="stylesheet" href="css/page_tones/dark.css" />
            <!-- End Page Layout Color -->

            <!-- Page Elements Color -->
            <link id="changeable_color" rel="stylesheet" href="css/colors/orange.css" />
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
                                <img src="img/imagotipo.png" data-second-logo="img/imagotipo.png" alt="jassatelecom_logo" />
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

            <section id="page-header" class="bg2 sdark-bg parallax big-header">
                <!-- Page Header Inner -->
                <div class="page_header_inner clearfix white">
                    <!-- Left -->
                    <div class="left f-left">
                        <!-- Header -->
                        <h2 class="page_header thin">
                            Titulo de la publicacion
                        </h2>
                        <!-- Sub Page Text -->
                        <h5 class="page_note extra-light">
                            Subtitulo de la publicacion texto de apoyo
                        </h5>
                    </div>
                </div>
                <!-- End Inner -->
            </section>
            <!-- End #page-header -->







            <!-- Blog -->
            <section id="blog" class="clearfix boxed pt-40 mb-80">
                <!-- Posts -->
                <div class="posts pl-00 pr-10 mt-90">

                    <!-- Post -->
                    <div class="post clearfix">
                        <!-- Left, Dates -->
                        <div class="dates f-left">
                            <!-- Post Time -->
                            <h6 class="date">
                                <span class="day colored helvetica">
                                    06
                                </span>
                                Diciembre, 2017
                            </h6>
                            <!-- Details -->
                            <div class="details">
                                <ul class="t-right fullwidth">
                                    <!-- Posted By -->
                                    <li>
                                        Publicado por <a href="#">Yanko Ibarra</a>
                                        <i class="fa fa-user"></i>
                                    </li>
                                    <!-- Comments -->
                                    <li>
                                        <a href="#">3 Comentarios</a>
                                        <i class="fa fa-comments"></i>
                                    </li>
                                    <!-- Tags -->
                                    <li>
                                        <a href="#">Telecomunicacion</a>,
                                        <a href="#">Redes</a>,
                                        <a href="#">Jassa</a>
                                        <i class="fa fa-user"></i>
                                    </li>
                                    <!-- Liked -->
                                    <li>
                                        <a href="#">Link externo</a>
                                        <i class="fa fa-link"></i>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Details -->
                        </div>
                        <!-- End Left, Dates -->
                        <!-- Post Inner -->
                        <div class="post-inner f-right">
                            <!-- Header -->
                            <h2 class="post-header semibold">
                                Titulo de la publicacion
                            </h2>
                            <!-- Media -->
                            <div class="post-media fitvid">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/5kFc5-D4PUs" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                            </div>
                            <!-- Description -->
                            <p class="post-text light">
                                Es un hecho establecido desde hace mucho tiempo que un lector se distraerá con el contenido legible de una página al mirar su diseño. El objetivo de usar Lorem Ipsum es que tiene una distribución de letras más o menos normal, en lugar de utilizar 'Cont aquí, contenido aquí', lo que hace que parezca inglés legible. Muchos paquetes de autoedición y editores de páginas web ahora usan Lorem Ipsum como su texto modelo predeterminado, y una búsqueda de 'lorem ipsum' descubrirá muchos sitios web aún en su infancia. Varias versiones han evolucionado a lo largo de los años, a veces por accidente, a veces a propósito (humor inyectado y cosas por el estilo).
                            </p>
                            <!-- Description -->
                            <p class="post-text light">
                                Es un hecho establecido desde hace mucho tiempo que un lector se distraerá con el contenido legible de una página al mirar su diseño. El objetivo de usar Lorem Ipsum es que tiene una distribución de letras más o menos normal, en lugar de utilizar 'Cont aquí, contenido aquí', lo que hace que parezca inglés legible. Muchos paquetes de autoedición y editores de páginas web ahora usan Lorem Ipsum como su texto modelo predeterminado, y una búsqueda de 'lorem ipsum' descubrirá muchos sitios web aún en su infancia. Varias versiones han evolucionado a lo largo de los años, a veces por accidente, a veces a propósito (humor inyectado y cosas por el estilo).
                            </p>
                            <!-- BlockQuote -->
                            <blockquote class="mt-25">
                                <p class="light">
                                    Es un hecho establecido desde hace mucho tiempo que un lector se distraerá con el contenido legible de una página al mirar su diseño. </p>
                                <p class="light mini-text">
                                    Es un hecho establecido desde hace mucho tiempo
                                </p>
                            </blockquote>
                            <!-- Description -->
                            <p class="post-text light mb-10">
                                Es un hecho establecido desde hace mucho tiempo que un lector se distraerá con el contenido legible de una página al mirar su diseño. El objetivo de usar Lorem Ipsum es que tiene una distribución de letras más o menos normal, en lugar de utilizar 'Cont aquí, contenido aquí', lo que hace que parezca inglés legible. Muchos paquetes de autoedición y editores de páginas web ahora usan Lorem Ipsum como su texto modelo predeterminado, y una búsqueda de 'lorem ipsum' descubrirá muchos sitios web aún en su infancia. Varias versiones han evolucionado a lo largo de los años, a veces por accidente, a veces a propósito (humor inyectado y cosas por el estilo).
                            </p>
                            <!-- Sub Header -->
                            <h3 class="mt-15 mb-00 pb-00 text-20 light">
                                Es un hecho establecido 
                            </h3>
                            <!-- Description -->
                            <p class="post-text mt-10 light">
                                Es un hecho establecido desde hace mucho tiempo que un lector se distraerá con el contenido legible de una página al mirar su diseño. El objetivo de usar Lorem Ipsum es que tiene una distribución de letras más o menos normal, en lugar de utilizar 'Cont aquí, contenido aquí', lo que hace que parezca inglés legible. Muchos paquetes de autoedición y editores de páginas web ahora usan Lorem Ipsum como su texto modelo predeterminado, y una búsqueda de 'lorem ipsum' descubrirá muchos sitios web aún en su infancia. Varias versiones han evolucionado a lo largo de los años, a veces por accidente, a veces a propósito (humor inyectado y cosas por el estilo).
                            </p>
                            <!-- Sub Header -->
                            <h3 class="mt-15 mb-00 pb-00 text-30 light">
                                Subtitulo
                                <span class="mini-text italic">- Texto -</span>
                            </h3>
                            <!-- Description -->
                            <p class="post-text mt-10 light">
                                Es un hecho establecido desde hace mucho tiempo que un lector se distraerá con el contenido legible de una página al mirar su diseño. El objetivo de usar Lorem Ipsum es que tiene una distribución de letras más o menos normal, en lugar de utilizar 'Cont aquí, contenido aquí', lo que hace que parezca inglés legible. Muchos paquetes de autoedición y editores de páginas web ahora usan Lorem Ipsum como su texto modelo predeterminado, y una búsqueda de 'lorem ipsum' descubrirá muchos sitios web aún en su infancia. Varias versiones han evolucionado a lo largo de los años, a veces por accidente, a veces a propósito (humor inyectado y cosas por el estilo).
                            </p>
                            <!-- List -->
                            <ul class="list-disc post-text ml-25 mt-25">
                                <li class="mb-10">
                                    Contrario a la creencia popular, Lorem Ipsum no es simplemente texto aleatorio. Tiene sus raíces en una pieza de literatura latina clásica del año 45 aC, lo que hace más de 2000 años.
                                <li class="mb-10">
                                    El pasaje de Lorem Ipsum, y pasando por las citas de la palabra en la literatura clásica, descubrió la fuente indudable. Lorem Ipsum viene.
                                </li>
                                <li class="mb-10">
                                    Hay muchas variaciones de pasajes de Lorem Ipsum disponibles, pero la mayoría ha sufrido alteración clásica de la literatura latina en alguna forma, por humor inyectado, o palabras aleatorias que.
                                </li>
                            </ul>


                            <div class="fullwidth">

                                <!-- Comments -->
                                <div class="comments mt-60">
                                    <!-- Header -->
                                    <h2 class="comments-header text-20 mt-40">
                                        Comentarios
                                    </h2>
                                    <!-- Media -->
                                    <div class="media mt-60">
                                        <!-- Image, Left -->
                                        <div class="media-left">
                                            <a href="#">
                                                <img class="media-object" src="img/team/01.jpg" alt="User">
                                            </a>
                                        </div>
                                        <!-- Body -->
                                        <div class="media-body">
                                            <div class="details">
                                                <!-- Header -->
                                                <h4 class="media-heading">
                                                    Alexander Trejo
                                                    <span class="light mini-text ml-15">28 Nov 2017</span>
                                                </h4>
                                                Excelente publicaci&oacute;n
                                                <!-- Votes -->
                                                <p class="votes t-right helvetica mt-20">
                                                    <!-- Like -->
                                                    <a href="#" class="like">
                                                        <i class="fa fa-thumbs-o-up"></i>
                                                        <span>+22</span>
                                                    </a>
                                                    <!-- Unlike -->
                                                    <a href="#" class="unlike">
                                                        <i class="fa fa-thumbs-o-down"></i>
                                                        <span>-3</span>
                                                    </a>
                                                    <!-- Reply -->
                                                    <a href="#" class="reply">
                                                        <i class="fa fa-reply"></i>
                                                        <span>Responder</span>
                                                    </a>
                                                </p>
                                            </div>

                                            <!-- Second Inner Media -->
                                            <div class="media">
                                                <!-- Image, Left -->
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="img/team/04.jpg" alt="User">
                                                    </a>
                                                </div>
                                                <!-- Body -->
                                                <div class="media-body">
                                                    <div class="details">
                                                        <!-- Header -->
                                                        <h4 class="media-heading">
                                                            Yanko Ibarra
                                                            <span class="light mini-text ml-15">28 Nov 2017</span>
                                                        </h4>
                                                        Muchas gracias!
                                                        <!-- Votes -->
                                                        <p class="votes t-right helvetica mt-20">
                                                            <!-- Like -->
                                                            <a href="#" class="like">
                                                                <i class="fa fa-thumbs-o-up"></i>
                                                                <span>+4</span>
                                                            </a>
                                                            <!-- Unlike -->
                                                            <a href="#" class="unlike">
                                                                <i class="fa fa-thumbs-o-down"></i>
                                                                <span>0</span>
                                                            </a>
                                                            <!-- Reply -->
                                                            <a href="#" class="reply">
                                                                <i class="fa fa-reply"></i>
                                                                <span>Responder</span>
                                                            </a>
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- End Body -->
                                            </div>
                                            <!-- End Second Media -->

                                            <!-- Third Inner Media -->
                                            <div class="media">
                                                <!-- Image, Left -->
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="img/team/02.jpg" alt="User">
                                                    </a>
                                                </div>
                                                <!-- Body -->
                                                <div class="media-body">
                                                    <div class="details">
                                                        <!-- Header -->
                                                        <h4 class="media-heading">
                                                            Jonathan Garcia
                                                            <span class="light mini-text ml-15">28 Nov 2017</span>
                                                        </h4>
                                                        Muy buena informaci&oacute;n
                                                        <!-- Votes -->
                                                        <p class="votes t-right helvetica mt-20">
                                                            <!-- Like -->
                                                            <a href="#" class="like">
                                                                <i class="fa fa-thumbs-o-up"></i>
                                                                <span>+9</span>
                                                            </a>
                                                            <!-- Unlike -->
                                                            <a href="#" class="unlike">
                                                                <i class="fa fa-thumbs-o-down"></i>
                                                                <span>-5</span>
                                                            </a>
                                                            <!-- Reply -->
                                                            <a href="#" class="reply">
                                                                <i class="fa fa-reply"></i>
                                                                <span>Responder</span>
                                                            </a>
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- End Body -->
                                            </div>
                                            <!-- End Third Media -->

                                        </div>
                                        <!-- End Body -->
                                    </div>
                                    <!-- End Media -->

                                    
                                </div>
                                <!-- End Comments -->

                                <!-- Reply Form -->
                                <div class="reply-form">
                                    <!-- Header -->
                                    <p class="uppercase comments-header light post-text">
                                        Comentar
                                    </p>
                                    <!-- Form -->
                                    <form method="post">
                                        <!-- Half / Name -->
                                        <div class="col-xs-6 pl-00 pr-10">
                                            <input type="text" name="name" id="name" class="transparent fullwidth light-form" placeholder="Nombre *">
                                        </div>
                                        <!-- Half / Email -->
                                        <div class="col-xs-6 pl-10 pr-00">
                                            <input type="email" name="email" id="email" class="transparent fullwidth light-form" placeholder="Email *">
                                        </div>
                                        <!-- Message -->
                                        <div class="col-xs-12 pr-00 pl-00 mt-15">
                                            <textarea name="message" id="message" class="transparent fullwidth light-form" placeholder="Escribe tu mensaje"></textarea>
                                        </div>
                                        <!-- Button -->
                                        <button type="submit" id="submit" name="submit" class="colored-bg uppercase">Comentar</button>
                                    </form>
                                </div>
                                <!-- End Reply Form -->
                            </div>


                        </div>
                        <!-- End Post Inner -->
                    </div>
                    <!-- End Post -->
                </div>
                <!-- End Posts -->

            </section>
            <!-- End Blog -->



            <!-- CONTACTO -->
            <section id="contact" class="relative contact">

                <div class="grayscale-bg absolute backgroundjassa2 parallax9 xdark-bg"></div>

                <!-- Inner -->
                <div class="inner t-center clearfix no-black-white animated" data-animation="fadeIn" data-animation-delay="800">
                    <!-- Header -->
                    <h1 class="header header-style-1 white raleway uppercase t-center ">
                        Dejanos un mensaje!
                    </h1>
                    <!-- Header Text -->
                    <p class="light t-center">
                        Puedes contactarnos por nuestro formulario de contacto
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
                                    <img src="../images/plus.png" alt="Jassa">
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
                                    <img src="../images/plus.png" alt="Jassa">
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
                                    <img src="../images/plus.png" alt="Jassa">
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
                                <input type="text" name="name" id="name" required placeholder="Nombre">

                                    <!-- Email -->
                                    <input type="email" name="email" id="email" required placeholder="E-Mail">

                                        <!-- Subject -->
                                        <input type="text" name="subject" id="subject" required placeholder="Asunto">

                                            <!-- Message -->
                                            <textarea name="message" id="message" required placeholder="Mensaje"></textarea>

                                            <!-- Verify -->
                                            <input type="text" name="verify" id="verify" required placeholder="">

                                                <!-- Reset Button -->
                                                <button type="reset" id="clear" name="clear">Limpiar</button>
                                                <!-- End Reset Button -->

                                                <!-- Send Button -->
                                                <button type="submit" id="submit" name="submit" class="colored-bg">Enviar</button>
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
                                                            <img class="logofooter" src="img/imagotipo.png" alt="jassatelecom Logo">
                                                        </div>

                                                        <p class="copyright">
                                                            <a href="./universe" target="_blank" class="copyright_link">©2017</a> Todos los derechos reservados. Website hecho por <a href="http://www.burtonservers.com" target="_blank" class="copyright_link">Burton Technology</a>
                                                        </p>
                                                    </div>
                                                </footer>
                                                <!-- FIN FOOTER -->
                                                
                                                <!-- JS Files -->
                                                <script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
                                                <script type="text/javascript" src="js/bootstrap.min.js"></script>
                                                <script type="text/javascript" src="js/jquery.appear.js"></script>
                                                <script type="text/javascript" src="js/waypoint.js"></script>
                                                <script type="text/javascript" src="js/modernizr-latest.js"></script>
                                                <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
                                                <script type="text/javascript" src="js/SmoothScroll.js"></script>
                                                <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
                                                <script type="text/javascript" src="js/jquery.superslides.js"></script>
                                                <script type="text/javascript" src="js/jquery.flexslider.js"></script>
                                                <script type="text/javascript" src="js/jquery.simple-text-rotator.js"></script>
                                                <script type="text/javascript" src="js/jquery.cubeportfolio.js"></script>
                                                <script type="text/javascript" src="js/owl.carousel.min.js"></script>
                                                <script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
                                                <script type="text/javascript" src="js/google-map.js"></script>
                                                <script type="text/javascript" src="js/jquery.timeline.js"></script>
                                                <script type="text/javascript" src="js/skrollr.min.js"></script>
                                                <script type="text/javascript" src="js/jquery.fitvids.js"></script>
                                                <script type="text/javascript" src="js/jquery.mb.YTPlayer.js"></script>
                                                <!-- Revolution Slider -->
                                                <script type="text/javascript" src="js/rev_slider/jquery.themepunch.revolution.min.js"></script>
                                                <script type="text/javascript" src="js/rev_slider/jquery.themepunch.tools.min.js"></script>
                                                <script type="text/javascript" src="js/rev_slider/rev_plugins.js"></script>
                                                <!-- Contact Form -->
                                                <script type="text/javascript" src="js/jquery.validate.min.js"></script>
                                                <script type="text/javascript" src="js/contact-form.js"></script>
                                                <!-- Page Plugins -->
                                                <script type="text/javascript" src="js/plugins.js"></script>
                                                <!-- Portfolio Plugins -->
                                                <script type="text/javascript" src="js/portfolio.js"></script>
                                                <!-- Theme Panel -->
                                                <script type="text/javascript" src="theme_panel/themepanel.js"></script>
                                                <script type="text/javascript" src="js/custom.js"></script>
                                                <!-- End JS Files -->

                                                </body>
                                                <!-- Body End -->

                                                </html>