<?php

/////////////////////////////////////////////////////////////////////////////// SERVICES CONTROL

/////////////////////////////////////////////////////////////////////////////////////////////DEBUG EN PANTALLA
//error_reporting(E_ALL);
//ini_set('display_errors', 1);


require ("../../scripts/conn.php");
session_start();

if (isset($_POST['edittitles'])) {

    $val_select = "UPDATE jas_misc SET serviceTitle ='" . $_POST['serviceTitle'] . "', serviceSubtitle ='" . $_POST['serviceSubtitle'] . "' WHERE idSite = '1'";
    $val_result = $link->query($val_select) or die($link->error);

    $msg_menu = " Titulos actualizado con éxito. ";
    $box = "primary";
    $_SESSION['msg'] = $msg_menu;
    $_SESSION['box'] = $box;
}

if (isset($_POST['editserv'])) {
    
    $loop = $_POST['idList'];
    $loop = explode(',', $loop);
    
    foreach ($loop as $id){
        if (isset($_POST[$id . '_check'])) {
            $val_select = "UPDATE jas_services SET titleService ='" . $_POST[$id . '_title'] . "', textService ='" . $_POST[$id . '_text'] . "', statusService ='" . $_POST[$id . '_check'] . "' WHERE idService = '".$id."'";
            $val_result = $link->query($val_select) or die($link->error);
        } else {
            $val_select = "UPDATE jas_services SET titleService ='" . $_POST[$id . '_title'] . "', textService ='" . $_POST[$id . '_text'] . "', statusService ='0' WHERE idService = '".$id."'";
            $val_result = $link->query($val_select) or die($link->error);
        }
    }
    
    $msg_menu .= " Servicios Actualizados exitosamente. ";
    $box = "primary";
    $_SESSION['msg'] = $msg_menu;
    $_SESSION['box'] = $box;
    header("Location: ../../../main.php");
}

if (isset($_POST['deleteserv'])) {
    $val_select = "DELETE FROM jas_services WHERE idService = '" . $_POST['deleteid'] . "'";
    $val_result = $link->query($val_select) or die($link->error);

    $msg_menu = " Servicio eliminado exitosamente. ";
    $box = "primary";
    $_SESSION['msg'] = $msg_menu;
    $_SESSION['box'] = $box;
}

if (isset($_POST['newservice'])) {
    
    $val_select = "INSERT INTO jas_services(iconService,titleService,textService,statusService) VALUES ('<i class=\"fa " . $_POST['icon'] . "\"></i>','" . $_POST['newserviceTitle'] . "','" . $_POST['newserviceSubtitle'] . "','1')";
    $val_result = $link->query($val_select) or die($link->error);

    $msg_menu = " Nuevo servicio agregado exitosamente. ";
    $box = "primary";
    $_SESSION['msg'] = $msg_menu;
    $_SESSION['box'] = $box;
}

?>