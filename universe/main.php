<?php

///////////////////////////////////////////////////////////////////////////////////////////DEBUG EN PANTALLA
//error_reporting(E_ALL);
//ini_set('display_errors', 1);

require ("assets/scripts/conn.php");


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////CONEXION A DB
session_start();
$user = $_SESSION["user"];
$rol = $_SESSION["rol"];
$tema = $_SESSION["tema"];
$panel = $_SESSION["panel"];

if(!isset($_SESSION['login'])){
    header("Location: index.php");
}
require ("assets/scripts/trackvisit.php");
trackvisitor("jassa_univ_main:".$panel);
?>
<!DOCTYPE html>
<html lang="es">
    <head>        
        <title>Burton Universe - Administraci&oacute;n de sitios web</title>          
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" href="assets/img/logotipo.png">
        <link rel="stylesheet" type="text/css" id="theme" href="assets/css/theme-universe-<?php
        echo $tema;
        ?>.css"/>
        <link rel="stylesheet" type="text/css" id="theme" href="assets/css/custom.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
        <link rel="stylesheet" href="assets/plugins/bootstrap/iconpick/icon-fonts/elusive-icons-2.0.0/css/elusive-icons.min.css"/>
        <link rel="stylesheet" href="assets/plugins/bootstrap/iconpick/icon-fonts/map-icons-2.1.0/css/map-icons.min.css"/>
        <link rel="stylesheet" href="assets/plugins/bootstrap/iconpick/dist/css/bootstrap-iconpicker.min.css"/>
        <link rel="stylesheet" href="assets/plugins/bootstrap/iconpick/node_modules/mocha/mocha.css">
    </head>
    <body class="page-container-boxed">
        <div class="page-container page-navigation-top-fixed">
            <!-- SIDEBAR -->
            <?php
            require ("assets/content/sidebar.php");
            ?>
            <div class="page-content">
                <!-- STATUSBAR -->
                <?php require ("assets/content/statusbar.php"); ?>          
                <!--PANEL A MOSTRAR-->                      
                <?php require ("assets/modules/".$panel."/view.php"); ?>                           
            </div>
        </div>
        <!-- MENSAJE DE SALIDA-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Salir del <strong>Panel Administrativo</strong> ?</div>
                    <div class="mb-content">
                        <p>¿Está seguro que desea salir?</p>                    
                        <p>Presione No si desea continuar trabajando. Presione Si para salir.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="index.php" class="btn btn-info btn-lg">Si</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FIN MENSAJE DE SALIDA-->
        <!-- PRELOADS -->
        <audio id="audio-alert" src="assets/sounds/audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="assets/sounds/audio/fail.mp3" preload="auto"></audio>
        <!-- FIN PRELOADS --> 

        <!--SCRIPTS Y PULGINS-->
        <?php require ("assets/scripts/pagescripts.php"); ?>
        <?php require ("assets/modules/".$panel."/model.php"); ?>
    </body>
</html>
<?php mysqli_close($link); ?>