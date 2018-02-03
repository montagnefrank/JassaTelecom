<?php
//////////////////////////////////////////////////////////////////////////////////////DEBUG EN PANTALLA
//error_reporting(E_ALL);
//ini_set('display_errors', 1);

session_start();

if (!isset($_SESSION['login'])) {
    session_destroy();
    session_start();
}

require ("assets/scripts/conn.php");

require ("assets/scripts/trackvisit.php");
trackvisitor("jassa_univ_login");
?>
<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        
        <title>Burton Universe - Administraci&oacute;n de sitios web</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" type="text/css" id="theme" href="assets/css/theme-universe-dark.css"/>
        <link rel="stylesheet" type="text/css" id="theme" href="assets/css/custom.css"/>
        <link rel="stylesheet" href="assets/css/videocontainer.css" type="text/css"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    </head>
    <body>
        <div  class="login-container">
            <video class="fullscreen-bg__video" autoplay="" muted="" loop="">
                <source type="video/mp4" src="assets/img/background/loop.mp4"/>
            </video>
            <div class="login-box animated fadeInDown">
                <div class="login-logo"></div>
                <div class="login-title"><strong>Acceso al Sistema de </strong> Adrministración de página web</div>
                <div class="login-body">
                    <div class="login-title"><strong>Bienvenido</strong>, Estábamos esperando por ti</div>
                    <form id="loginform" name="loginform" class="form-horizontal" action="assets/scripts/login.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="col-md-12">
                                <input name="user" type="text" class="form-control" placeholder="Usuario" id="user"  maxlength="20" data-toggle="tooltip" data-placement="right" title="Ingrese su usuario" autofocus="autofocus"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input name="pass" type="password" class="form-control" placeholder="Contraseña" id="pass" maxlength="20" data-toggle="tooltip" data-placement="right" title="Ingrese su contraseña"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6">
                                <!--                            <a href="#" class="btn btn-link btn-block">¿olvidaste tu contraseña?</a>-->
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-info btn-block" name="button"  type="submit"  id="submitlogin" data-toggle="tooltip" data-placement="right" title="Ingresar">Iniciar Sesión</button>
                            </div>
                        </div>
                    </form>
                </div>
                <?php
                if (isset($_SESSION['msg'])) {
                    echo '
                            <div style="margin-top: 20px;" class="alert alert-danger" role="alert">
                                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                <span class="sr-only">Error:</span>
                                ' . $_SESSION['msg'] . '
                            </div>';
                    unset($_SESSION['msg']);
                }
                ?>
                <div class="login-footer">
                    <div class="pull-right">&copy; 2018 Burton Universe <span class="glyphicon glyphicon-registration-mark"></span></div>
                    <div class="pull-right">
                        <a href="http://www.burtonservers.com">La empresa</a> |
                        <a href="http://www.burtonservers.com">Términos y condiciones</a> |
                        <a href="http://www.burtonservers.com">Contacto</a>
                    </div>
                </div>
            </div>
        </div>
        <?php require ("assets/scripts/pagescripts.php"); ?>
    </body>
</html>
<?php mysqli_close($link); ?>