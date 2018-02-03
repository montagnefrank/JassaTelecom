<?php

/////////////////////////////////////////////////////////////////////////////// BANNER CONTROL

/////////////////////////////////////////////////////////////////////////////////////////////DEBUG EN PANTALLA
//error_reporting(E_ALL);
//ini_set('display_errors', 1);

require ("../../scripts/conn.php");
session_start();

if (isset($_POST['editBanner'])) {
    
    $target_dir = "../../../../assets/img/";
    $target_file = $target_dir . basename($_FILES["img1Banner"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["img1Banner"]["tmp_name"]);
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
    if ($_FILES["img1Banner"]["size"] > 500000) {
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
        $target_file = $target_dir . "banner1.jpg";
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $msg_logo .= " No se logró actualizar su imagen para el slide.<br/>";
        $box = "danger";
        $_SESSION['msg'] = $msg_logo;
        $_SESSION['box'] = $box;
        return;
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["img1Banner"]["tmp_name"], $target_file)) {
            chmod($target_file, 0666);
            $msg_logo .= " Imagen1 cargada exitosamente.";
            $box = "primary";
        } else {
            $msg_logo .= " No se logró actualizar su imagen.";
            $box = "danger";
            $_SESSION['msg'] = $msg_logo;
            $_SESSION['box'] = $box;
            return;
        }
    }
    
    $target_dir = "../../../../assets/img/";
    $target_file = $target_dir . basename($_FILES["img2Banner"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["img2Banner"]["tmp_name"]);
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
    if ($_FILES["img2Banner"]["size"] > 500000) {
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
        $target_file = $target_dir . "banner2.jpg";
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $msg_logo .= " No se logró actualizar su imagen<br/>";
        $box = "danger";
        $_SESSION['msg'] = $msg_logo;
        $_SESSION['box'] = $box;
        return;
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["img2Banner"]["tmp_name"], $target_file)) {
            chmod($target_file, 0666);
            $msg_logo .= " Imagen2 cargada exitosamente.";
            $box = "primary";
        } else {
            $msg_logo .= " No se logró actualizar su imagen.";
            $box = "danger";
            $_SESSION['msg'] = $msg_logo;
            $_SESSION['box'] = $box;
            return;
        }
    }
    
    $target_dir = "../../../../assets/img/";
    $target_file = $target_dir . basename($_FILES["img3Banner"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["img3Banner"]["tmp_name"]);
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
    if ($_FILES["img3Banner"]["size"] > 500000) {
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
        $target_file = $target_dir . "banner3.jpg";
        $img3Port = $filename;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $msg_logo .= " No se logró actualizar su imagen.<br/>";
        $box = "danger";
        $_SESSION['msg'] = $msg_logo;
        $_SESSION['box'] = $box;
        return;
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["img3Banner"]["tmp_name"], $target_file)) {
            chmod($target_file, 0666);
            $msg_logo .= " Imagen3 cargada exitosamente.";
            $box = "primary";
        } else {
            $msg_logo .= " No se logró actualizar imagen.";
            $box = "danger";
            $_SESSION['msg'] = $msg_logo;
            $_SESSION['box'] = $box;
            return;
        }
    }

    $val_select = "UPDATE jas_misc SET bannerTitle ='" . $_POST['bannerTitle'] . "', bannerSubtitle ='" . $_POST['bannerSubtitle'] . "', bannerText ='" . $_POST['bannerText'] . "' WHERE idSite = '1'";
    $val_result = $link->query($val_select) or die($link->error);

    $msg_menu = " Seccion editada con exito. ";
    $box = "primary";
    $_SESSION['msg'] = $msg_menu;
    $_SESSION['box'] = $box;
    return;
}