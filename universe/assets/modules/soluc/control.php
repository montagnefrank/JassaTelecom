<?php

/////////////////////////////////////////////////////////////////////////////// SOLUC CONTROL

/////////////////////////////////////////////////////////////////////////////////////////////DEBUG EN PANTALLA
//error_reporting(E_ALL);
//ini_set('display_errors', 1);


require ("../../scripts/conn.php");
session_start();

if (isset($_POST['edittitles'])) {

    $val_select = "UPDATE jas_misc SET solucTitle ='" . $_POST['solucTitle'] . "', solucSubtitle ='" . $_POST['solucSubtitle'] . "' WHERE idSite = '1'";
    $val_result = $link->query($val_select) or die($link->error);

    $msg_menu = " Titulos actualizado con éxito. ";
    $box = "primary";
    $_SESSION['msg'] = $msg_menu;
    $_SESSION['box'] = $box;
}

if (isset($_POST['editsoluc'])) {
    
    $loop = $_POST['idList'];
    $loop = explode(',', $loop);

    foreach ($loop as $id){
        if (isset($_POST[$id . '_check'])) {
            $val_select = "UPDATE jas_soluc SET titlesoluc ='" . $_POST[$id . '_title'] . "', textSoluc ='" . $_POST[$id . '_text'] . "', statusSoluc ='" . $_POST[$id . '_check'] . "' WHERE idSoluc = '".$id."'";
            $val_result = $link->query($val_select) or die($link->error);
        } else {
            $val_select = "UPDATE jas_soluc SET titleSoluc ='" . $_POST[$id . '_title'] . "', textSoluc ='" . $_POST[$id . '_text'] . "', statusSoluc ='0' WHERE idSoluc = '".$id."'";
            $val_result = $link->query($val_select) or die($link->error);
        }
    }
    
    $msg_menu = " Soluciones Corporativas Actualizadas. ";
    $box = "primary";
    $_SESSION['msg'] = $msg_menu;
    $_SESSION['box'] = $box;
    header("Location: ../../../main.php");
}

if (isset($_POST['deletesoluc'])) {
    $val_select = "DELETE FROM jas_soluc WHERE idSoluc = '" . $_POST['deleteid'] . "'";
    $val_result = $link->query($val_select) or die($link->error);

    $msg_menu = " Solucion corporativa eliminada exitosamente. ";
    $box = "primary";
    $_SESSION['msg'] = $msg_menu;
    $_SESSION['box'] = $box;
}

if (isset($_POST['newsoluc'])) {
    
    $val_select = "INSERT INTO jas_soluc(iconSoluc,titleSoluc,textSoluc,statusSoluc) VALUES ('<i class=\"fa " . $_POST['icon'] . "\"></i>','" . $_POST['newsolucTitle'] . "','" . $_POST['newsolucSubtitle'] . "','1')";
    $val_result = $link->query($val_select) or die($link->error);

    $msg_menu = " Nueva solucion corporativa agregada exitosamente. ";
    $box = "primary";
    $_SESSION['msg'] = $msg_menu;
    $_SESSION['box'] = $box;
}

if (isset($_POST['slouc_bg_btn'])) {
    $target_dir = "../../../../assets/img/";
    $target_file = $target_dir . basename($_FILES["slouc_bg_file"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["slouc_bg_file"]["tmp_name"]);
    if ($check !== false) {
        $msg_logo .= " Archivo - " . $imageFileType . " - examinado con éxito.";
        $uploadOk = 1;
    } else {
        $msg_logo .= " El archivo no es una imagen. <br/>";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["slouc_bg_file"]["size"] > 500000) {
        $msg_logo .= " El archivo es demasiado grande.<br/>";
        $box = "danger";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if ($imageFileType != "jpg") {
        $msg_logo .= " Solo se permite formato JPG.<br/>";
        $box = "danger";
        $uploadOk = 0;
    } else {
        $target_file = $target_dir . "corp.jpg";
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $msg_logo .= " No se logró actualizar su fondo para la seccion.<br/>";
        $box = "danger";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["slouc_bg_file"]["tmp_name"], $target_file)) {
            $msg_logo .= " El archivo " . basename($_FILES["slouc_bg_file"]["name"]) . " Ahora es tu fondo de la seccion.<br/>";
            $box = "primary";
        } else {
            $msg_logo .= " No se logró actualizar su fondo de la seccion.";
            $box = "danger";
        }
    }
    $_SESSION['msg'] = $msg_logo;
    $_SESSION['box'] = $box;
}
?>