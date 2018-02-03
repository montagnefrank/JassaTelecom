<?php

/////////////////////////////////////////////////////////////////////////////// ABOUT CONTROL

/////////////////////////////////////////////////////////////////////////////////////////////DEBUG EN PANTALLA
//error_reporting(E_ALL);
//ini_set('display_errors', 1);

require ("../../scripts/conn.php");
session_start();

if (isset($_POST['edittitles'])) {

    $val_select = "UPDATE jas_misc SET aboutTitle ='" . $_POST['aboutTitle'] . "', aboutSubtitle ='" . $_POST['aboutSubtitle'] . "' WHERE idSite = '1'";
    $val_result = $link->query($val_select) or die($link->error);

    $msg_menu = " Titulos actualizado con éxito. ";
    $box = "primary";
    $_SESSION['msg'] = $msg_menu;
    $_SESSION['box'] = $box;
}

if (isset($_POST['editquisom'])) {
    $val_select = "UPDATE jas_misc SET quisomText ='" . $_POST['quisomText'] . "', misionText ='" . $_POST['misionText'] . "', visionText ='" . $_POST['visionText'] . "' WHERE idSite = '1'";
    $val_result = $link->query($val_select) or die($link->error);

    $msg_menu = " Contenido actualizado con éxito. ";
    $box = "primary";
    $_SESSION['msg'] = $msg_menu;
    $_SESSION['box'] = $box;
}

if (isset($_POST['newFF'])) {

    $val_select = "UPDATE jas_misc SET ". $_POST['newFF_type'] ." ='" . $_POST['newFF_data'] . "', ". $_POST['newFF_type'] ."title ='" . $_POST['newFF_title'] . "' WHERE idSite = '1'";
    $val_result = $link->query($val_select) or die($link->error);

    $msg_menu = " Cantidad actualizada con exito. ";
    $box = "primary";
    $_SESSION['msg'] = $msg_menu;
    $_SESSION['box'] = $box;
}