<?php

/////////////////////////////////////////////////////////////////////////////// CONTACT CONTROL

/////////////////////////////////////////////////////////////////////////////////////////////DEBUG EN PANTALLA
//error_reporting(E_ALL);
//ini_set('display_errors', 1);


require ("../../scripts/conn.php");
session_start();

if (isset($_POST['edittitles'])) {

    $val_select = "UPDATE jas_misc SET contactTitle ='" . $_POST['contactTitle'] . "', contactSubtitle ='" . $_POST['contactSubtitle'] . "' WHERE idSite = '1'";
    $val_result = $link->query($val_select) or die($link->error);

    $msg_menu = " Titulos actualizado con éxito. ";
    $box = "primary";
    $_SESSION['msg'] = $msg_menu;
    $_SESSION['box'] = $box;
}

?>