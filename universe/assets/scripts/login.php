<?php

//////////////////////////////////////////////////////////////////////////////////////DEBUG EN PANTALLA
//error_reporting(E_ALL);
//ini_set('display_errors', 1);

require ("conn.php"); /////////////////////////////////////////////////////////////////////////CONEXION A LA DB

session_start();
$jas_user = $_POST["user"];
$jas_pass = $_POST["pass"];
/////////////////////////////////////////////////////////////////////////////////////////////////VALIDAMOS EL USUARIO Y LA CONTRASE:A Y EL ROL, LUEGO DIRECCIONAMOS A SU RESPECTIVA PAGINA SEGUN SU ROL
$val_select = "SELECT passUsuario,nombreUsuario,rolUsuario,temaUsuario FROM jas_usuario WHERE userUsuario = '" . $jas_user . "'";
$val_result = $link->query($val_select) or die($link->error);
$val_row = $val_result->fetch_array(MYSQLI_BOTH);

if ($jas_pass == $val_row['passUsuario']) {
    $_SESSION["user"] = $jas_user;
    $_SESSION["rol"] = $val_row['rolUsuario'];
    $_SESSION["tema"] = $val_row['temaUsuario'];
    $_SESSION["panel"] = "home";
    $_SESSION['login'] = "true";
    $rol = $_SESSION["rol"];
    header("Location: ../../main.php");
} else {
    $_SESSION['msg'] = "No pudimos validar tus datos, intente de nuevo";
    $_SESSION['box'] = "primary";
    $_SESSION['login'] = "false";
    header("Location: ../../index.php");
}
mysqli_close($link);
?>