<?php

/////////////////////////////////////////////////////////////////////////////// HEADER CONTROL
///////////////////////////////////////////////////////////////////////////////////////////DEBUG EN PANTALLA
//error_reporting(E_ALL);
//ini_set('display_errors', 1);


require ("../../scripts/conn.php");
session_start();

if (isset($_POST['editmenu'])) {
    if (isset($_POST['1_check'])) {
        $val_select = "UPDATE jas_menu SET estadoMenu ='1' WHERE idMenu = '" . $_POST['1_check'] . "'";
        $val_result = $link->query($val_select) or die($link->error);
    } else {
        $val_select = "UPDATE jas_menu SET estadoMenu ='0' WHERE idMenu = '1'";
        $val_result = $link->query($val_select) or die($link->error);
    }

    if (isset($_POST['2_check'])) {
        $val_select = "UPDATE jas_menu SET estadoMenu ='1' WHERE idMenu = '" . $_POST['2_check'] . "'";
        $val_result = $link->query($val_select) or die($link->error);
    } else {
        $val_select = "UPDATE jas_menu SET estadoMenu ='0' WHERE idMenu = '2'";
        $val_result = $link->query($val_select) or die($link->error);
    }

    if (isset($_POST['3_check'])) {
        $val_select = "UPDATE jas_menu SET estadoMenu ='1' WHERE idMenu = '" . $_POST['3_check'] . "'";
        $val_result = $link->query($val_select) or die($link->error);
    } else {
        $val_select = "UPDATE jas_menu SET estadoMenu ='0' WHERE idMenu = '3'";
        $val_result = $link->query($val_select) or die($link->error);
    }

    if (isset($_POST['4_check'])) {
        $val_select = "UPDATE jas_menu SET estadoMenu ='1' WHERE idMenu = '" . $_POST['4_check'] . "'";
        $val_result = $link->query($val_select) or die($link->error);
    } else {
        $val_select = "UPDATE jas_menu SET estadoMenu ='0' WHERE idMenu = '4'";
        $val_result = $link->query($val_select) or die($link->error);
    }

    if (isset($_POST['5_check'])) {
        $val_select = "UPDATE jas_menu SET estadoMenu ='1' WHERE idMenu = '" . $_POST['5_check'] . "'";
        $val_result = $link->query($val_select) or die($link->error);
    } else {
        $val_select = "UPDATE jas_menu SET estadoMenu ='0' WHERE idMenu = '5'";
        $val_result = $link->query($val_select) or die($link->error);
    }

    if (isset($_POST['6_check'])) {
        $val_select = "UPDATE jas_menu SET estadoMenu ='1' WHERE idMenu = '" . $_POST['6_check'] . "'";
        $val_result = $link->query($val_select) or die($link->error);
    } else {
        $val_select = "UPDATE jas_menu SET estadoMenu ='0' WHERE idMenu = '6'";
        $val_result = $link->query($val_select) or die($link->error);
    }

    if (isset($_POST['1_newname']) && $_POST['1_newname'] != '') {
        $val_select = "UPDATE jas_menu SET nombreMenu ='" . $_POST['1_newname'] . "' WHERE idMenu = '1'";
        $val_result = $link->query($val_select) or die($link->error);
    }

    if (isset($_POST['2_newname']) && $_POST['2_newname'] != '') {
        $val_select = "UPDATE jas_menu SET nombreMenu ='" . $_POST['2_newname'] . "' WHERE idMenu = '2'";
        $val_result = $link->query($val_select) or die($link->error);
    }

    if (isset($_POST['3_newname']) && $_POST['3_newname'] != '') {
        $val_select = "UPDATE jas_menu SET nombreMenu ='" . $_POST['3_newname'] . "' WHERE idMenu = '3'";
        $val_result = $link->query($val_select) or die($link->error);
    }

    if (isset($_POST['4_newname']) && $_POST['4_newname'] != '') {
        $val_select = "UPDATE jas_menu SET nombreMenu ='" . $_POST['4_newname'] . "' WHERE idMenu = '4'";
        $val_result = $link->query($val_select) or die($link->error);
    }

    if (isset($_POST['5_newname']) && $_POST['5_newname'] != '') {
        $val_select = "UPDATE jas_menu SET nombreMenu ='" . $_POST['5_newname'] . "' WHERE idMenu = '5'";
        $val_result = $link->query($val_select) or die($link->error);
    }

    if (isset($_POST['6_newname']) && $_POST['6_newname'] != '') {
        $val_select = "UPDATE jas_menu SET nombreMenu ='" . $_POST['6_newname'] . "' WHERE idMenu = '6'";
        $val_result = $link->query($val_select) or die($link->error);
    }

    $msg_menu = " Menu actualizado con éxito. ";
    $box = "primary";
    $_SESSION['msg'] = $msg_menu;
    $_SESSION['box'] = $box;
    header("Location: ../../../main.php");
}

if (isset($_POST['submitnewlogo'])) {
    unset($_POST['slide1newimg']);
    $target_dir = "../../../../assets/img/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        $msg_logo .= " Archivo - " . $imageFileType . " - examinado con éxito.";
        $uploadOk = 1;
    } else {
        $msg_logo .= " El archivo no es una imagen. <br/>";
        $uploadOk = 0;
    }
    //// Check if file already exists
    //if (file_exists($target_file)) {
    //    echo "Sorry, file already exists.";
    //    $uploadOk = 0;
    //}
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        $msg_logo .= " El archivo es demasiado grande.<br/>";
        $box = "danger";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if ($imageFileType != "png") {
        $msg_logo .= " Solo se permite formato PNG.<br/>";
        $box = "danger";
        $uploadOk = 0;
    } else {
        $target_file = $target_dir . "imagotipo.png";
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $msg_logo .= " No se logró actualizar su logo del sitio.<br/>";
        $box = "danger";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            $msg_logo .= " El archivo " . basename($_FILES["fileToUpload"]["name"]) . " Ahora es tu logo del sitio web.<br/>";
            $box = "primary";
        } else {
            $msg_logo .= " No se logró actualizar su logo.";
            $box = "danger";
        }
    }
    $_SESSION['msg'] = $msg_logo;
    $_SESSION['box'] = $box;
    header("Location: ../../../main.php");
}

if (isset($_POST['slide1newimg'])) {

    //    var_dump($_FILES);
    //    var_dump($_POST);die;
    $text_select = "UPDATE jas_slider SET textosuperiorSlide ='".$_POST['uptext']."', textomedioSlide ='".$_POST['centertext']."', textoinferiorSlide ='".$_POST['bottomtext']."', textobotonSlide ='".$_POST['buttext']."'  WHERE idSlide = '1'";
    $text_result = $link->query($text_select) or die($link->error);
    $target_dir = "../../../../assets/img/";
    $target_file = $target_dir . basename($_FILES["slide1file"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["slide1file"]["tmp_name"]);
    if ($check !== false) {
        $msg_logo .= " Archivo - " . $imageFileType . " - examinado con éxito.";
        $uploadOk = 1;
    } else {
        $msg_logo .= " El archivo no es una imagen. <br/>";
        $uploadOk = 0;
    }
    //// Check if file already exists
    //if (file_exists($target_file)) {
    //    echo "Sorry, file already exists.";
    //    $uploadOk = 0;
    //}
    // Check file size
    if ($_FILES["slide1file"]["size"] > 500000) {
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
        $target_file = $target_dir . "slide1.jpg";
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $msg_logo .= " No se logró actualizar su fondo para e lslider.<br/>";
        $box = "danger";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["slide1file"]["tmp_name"], $target_file)) {
            $msg_logo .= " El archivo " . basename($_FILES["slide1file"]["name"]) . " Ahora es tu fondo de slider.<br/>";
            $box = "primary";
        } else {
            $msg_logo .= " No se logró actualizar su fondo.";
            $box = "danger";
        }
    }
    $_SESSION['msg'] = $msg_logo;
    $_SESSION['box'] = $box;
}

if (isset($_POST['slide2newimg'])) {

//    var_dump($_FILES);
//    var_dump($_POST);die;
    $text_select = "UPDATE jas_slider SET textosuperiorSlide ='".$_POST['uptext']."', textomedioSlide ='".$_POST['centertext']."', textoinferiorSlide ='".$_POST['bottomtext']."', textobotonSlide ='".$_POST['buttext']."'  WHERE idSlide = '2'";
    $text_result = $link->query($text_select) or die($link->error);
    $target_dir = "../../../../assets/img/";
    $target_file = $target_dir . basename($_FILES["slide2file"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["slide2file"]["tmp_name"]);
    if ($check !== false) {
        $msg_logo .= " Archivo - " . $imageFileType . " - examinado con éxito.";
        $uploadOk = 1;
    } else {
        $msg_logo .= " El archivo no es una imagen. <br/>";
        $uploadOk = 0;
    }
    //// Check if file already exists
    //if (file_exists($target_file)) {
    //    echo "Sorry, file already exists.";
    //    $uploadOk = 0;
    //}
    // Check file size
    if ($_FILES["slide2file"]["size"] > 500000) {
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
        $target_file = $target_dir . "slide2.jpg";
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $msg_logo .= " No se logró actualizar su fondo para el slider.<br/>";
        $box = "danger";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["slide2file"]["tmp_name"], $target_file)) {
            $msg_logo .= " El archivo " . basename($_FILES["slide2file"]["name"]) . " Ahora es tu fondo de slider.<br/>";
            $box = "primary";
        } else {
            $msg_logo .= " No se logró actualizar su fondo.";
            $box = "danger";
        }
    }
    $_SESSION['msg'] = $msg_logo;
    $_SESSION['box'] = $box;
}

if (isset($_POST['slide3newimg'])) {

//    var_dump($_FILES);
//    var_dump($_POST);
//    die;
    $text_select = "UPDATE jas_slider SET textosuperiorSlide ='".$_POST['uptext']."', textomedioSlide ='".$_POST['centertext']."', textoinferiorSlide ='".$_POST['bottomtext']."', textobotonSlide ='".$_POST['buttext']."'  WHERE idSlide = '3'";
    $text_result = $link->query($text_select) or die($link->error);
    $target_dir = "../../../../assets/img/";
    $target_file = $target_dir . basename($_FILES["slide3file"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["slide3file"]["tmp_name"]);
    if ($check !== false) {
        $msg_logo .= " Archivo - " . $imageFileType . " - examinado con éxito.";
        $uploadOk = 1;
    } else {
        $msg_logo .= " El archivo no es una imagen. <br/>";
        $uploadOk = 0;
    }
    //// Check if file already exists
    //if (file_exists($target_file)) {
    //    echo "Sorry, file already exists.";
    //    $uploadOk = 0;
    //}
    // Check file size
    if ($_FILES["slide3file"]["size"] > 500000) {
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
        $target_file = $target_dir . "slide3.jpg";
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $msg_logo .= " No se logró actualizar su fondo para el slider.<br/>";
        $box = "danger";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["slide3file"]["tmp_name"], $target_file)) {
            $msg_logo .= " El archivo " . basename($_FILES["slide3file"]["name"]) . " Ahora es tu fondo de slider.<br/>";
            $box = "primary";
        } else {
            $msg_logo .= " No se logró actualizar su fondo.";
            $box = "danger";
        }
    }
    $_SESSION['msg'] = $msg_logo;
    $_SESSION['box'] = $box;
}
?>