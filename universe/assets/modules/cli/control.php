<?php

/////////////////////////////////////////////////////////////////////////////// CLIENTES CONTROL

/////////////////////////////////////////////////////////////////////////////////////////////DEBUG EN PANTALLA
//error_reporting(E_ALL);
//ini_set('display_errors', 1);

require ("../../scripts/conn.php");
session_start();

if (isset($_POST['edittitles'])) {

    $val_select = "UPDATE jas_misc SET clientsTitle ='" . $_POST['clientsTitle'] . "', clientsSubtitle ='" . $_POST['clientsSubtitle'] . "' WHERE idSite = '1'";
    $val_result = $link->query($val_select) or die($link->error);

    $msg_menu = " Titulos actualizado con éxito. ";
    $box = "primary";
    $_SESSION['msg'] = $msg_menu;
    $_SESSION['box'] = $box;
}

if (isset($_POST['newclient'])) {

    $directorio = opendir("../../../../assets/img/clientes/");

    $filename = 1;
    while ($archivo = readdir($directorio)) {
        if (!is_dir($archivo)) {
            $filename++;
        }
    }
    $target_dir = "../../../../assets/img/clientes/";
    $target_file = $target_dir . basename($_FILES["photoClient"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["photoClient"]["tmp_name"]);
    if ($check !== false) {
        $msg_logo .= " Archivo - " . $imageFileType . " - examinado con éxito.";
        $uploadOk = 1;
    } else {
        $msg_logo .= " El archivo no es una imagen. <br/>";
        $box = "danger";
        $uploadOk = 0;
        $_SESSION['msg'] = $msg_logo;
        $_SESSION['box'] = $box;
        return;
    }
    // Check file size
    if ($_FILES["photoClient"]["size"] > 500000) {
        $msg_logo .= " El archivo es demasiado grande.<br/>";
        $box = "danger";
        $_SESSION['msg'] = $msg_logo;
        $_SESSION['box'] = $box;
        return;
        $uploadOk = 0;
    }
    // Allow certain file formats
    if ($imageFileType != "jpg") {
        $msg_logo .= " Solo se permite formato JPG.<br/>";
        $box = "danger";
        $_SESSION['msg'] = $msg_logo;
        $_SESSION['box'] = $box;
        return;
        $uploadOk = 0;
    } else {
        $target_file = $target_dir . $filename . ".jpg";
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $msg_logo .= " No se logró actualizar su imagen del cliente.<br/>";
        $box = "danger";
        $_SESSION['msg'] = $msg_logo;
        $_SESSION['box'] = $box;
        return;
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["photoClient"]["tmp_name"], $target_file)) {
            chmod($target_file, 0666);
            $msg_logo .= " Foto de cliente cargada exitosamente.";
            $box = "primary";
        } else {
            $msg_logo .= " No se logró actualizar su logo del cliente.";
            $box = "danger";
            $_SESSION['msg'] = $msg_logo;
            $_SESSION['box'] = $box;
            return;
        }
    }

    $val_select = "INSERT INTO jas_clients(photoClient,nameClient,statusClient) VALUES ('" . $filename . "','" . $_POST['nameClient'] . "','" . $_POST['statusClient'] . "')";
    $val_result = $link->query($val_select) or die($link->error);


    $msg_menu = " Nuevo cliente cargado en sistema exitosamente. ";
    $box = "primary";
    $_SESSION['msg'] = $msg_menu;
    $_SESSION['box'] = $box;
}

if (isset($_POST['editclient'])) {
    
    $loop = $_POST['idList'];
    $loop = explode(',', $loop);

    foreach ($loop as $id){
        if (isset($_POST[$id . '_check'])) {
            $val_select = "UPDATE jas_clients SET statusClient ='" . $_POST[$id . '_check'] . "' WHERE idClient = '".$id."'";
            $val_result = $link->query($val_select) or die($link->error);
        } else {
            $val_select = "UPDATE jas_clients SET statusClient ='0' WHERE idClient = '".$id."'";
            $val_result = $link->query($val_select) or die($link->error);
        }
    }
    
    $msg_menu = " Soluciones Corporativas Actualizadas. ";
    $box = "primary";
    $_SESSION['msg'] = $msg_menu;
    $_SESSION['box'] = $box;
    header("Location: ../../../main.php");
}

if (isset($_POST['deleteclient'])) {
    $val_select = "DELETE FROM jas_clients WHERE idClient = '" . $_POST['deleteid'] . "'";
    $val_result = $link->query($val_select) or die($link->error);

    $msg_menu = " Solucion corporativa eliminada exitosamente. ";
    $box = "primary";
    $_SESSION['msg'] = $msg_menu;
    $_SESSION['box'] = $box;
}
