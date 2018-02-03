<?php
require ("assets/scripts/conn.php");

session_start();
$user = $_SESSION["user"];
$rol = $_SESSION["rol"];
$tema = $_SESSION["tema"];
$panel = $_SESSION["panel"];
?>
<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        
        <title>Eblooms - Sistema de gestión de pedidos</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" type="text/css" id="theme" href="assets/css/theme-universe-<?php
        echo $tema;
        ?>.css"/>
        <link rel="stylesheet" type="text/css" id="theme" href="assets/css/custom.css"/>
        <link rel="stylesheet" href="assets/css/videocontainer.css" type="text/css">                                   
    </head>
    <body>
        <div class="lockscreen-container">
            <video class="fullscreen-bg__video" poster="assets/img/background/poster.png" autoplay="" muted="" loop="">
                <source type="video/mp4" src="assets/img/background/loop.mp4"/>
            </video>
            <div class="lockscreen-box animated fadeInDown">
                <div class="lsb-access">
                    <div class="lsb-box">
                        <div class="fa fa-lock"></div>
                        <div class="user animated fadeIn">
                            <img src="assets/img/users/<?php echo $user ?>.jpg" alt="<?php echo $user ?>"/>
                            <div class="user_signin animated fadeIn">
                                <div class="fa fa-sign-in"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lsb-form animated fadeInDown">
                    <form id="loginform" name="loginform" class="form-horizontal" action="assets/scripts/login.php" method="post" enctype="multipart/form-data">
                        <div class="form-group sign-in animated fadeInDown">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <span class="fa fa-user"></span>
                                    </div>
                                    <input name="user" type="text" class="form-control" placeholder="Usuario" id="user"  maxlength="20" data-toggle="tooltip" data-placement="right" title="Ingrese su usuario" autofocus="autofocus" value="<?php echo $user ?>"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <span class="fa fa-lock"></span>
                                    </div>
                                    <input name="pass" type="password" class="form-control" placeholder="Contraseña" id="pass" maxlength="20" data-toggle="tooltip" data-placement="right" title="Ingrese su contraseña"/>
                                </div>
                            </div>
                        </div>
                        <input type="submit" name="button"  id="button" data-toggle="tooltip" data-placement="right" class="hidden"/>
                        <input type="hidden" name="error" id="error" value="<?php echo $error ?>">
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
            </div>
        </div>
        <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="assets/js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="assets/js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="assets/js/plugins/bootstrap/bootstrap.min.js"></script>        
        <!-- END PLUGINS -->
        <!-- START TEMPLATE -->                
        <script type="text/javascript" src="assets/js/plugins.js"></script>
        <script type="text/javascript" src="assets/js/actions.js"></script>
        <!-- END TEMPLATE -->
        <!-- END SCRIPTS --> 
    </body>
</html>
<?php mysqli_close($link); ?>