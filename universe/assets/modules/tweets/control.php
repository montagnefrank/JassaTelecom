<?php

/////////////////////////////////////////////////////////////////////////////// TWEETS CONTROL

/////////////////////////////////////////////////////////////////////////////////////////////DEBUG EN PANTALLA
//error_reporting(E_ALL);
//ini_set('display_errors', 1);


require ("../../scripts/conn.php");
session_start();

if (isset($_POST['edittweets'])) {
    
    $loop = $_POST['idList'];
    $loop = explode(',', $loop);

    foreach ($loop as $id){
        if (isset($_POST[$id . '_check'])) {
            $val_select = "UPDATE jas_tweets SET nameTweet ='" . $_POST[$id . '_name'] . "', textTweet ='" . $_POST[$id . '_text'] . "', statusTweet ='" . $_POST[$id . '_check'] . "' WHERE idTweet = '".$id."'";
            $val_result = $link->query($val_select) or die($link->error);
        } else {
            $val_select = "UPDATE jas_tweets SET nameTweet ='" . $_POST[$id . '_title'] . "', textTweet ='" . $_POST[$id . '_text'] . "', statusTweet ='0' WHERE idTweet = '".$id."'";
            $val_result = $link->query($val_select) or die($link->error);
        }
    }
    
    $msg_menu = " Testimonios Actualizasos exitosamente. ";
    $box = "primary";
    $_SESSION['msg'] = $msg_menu;
    $_SESSION['box'] = $box;
    header("Location: ../../../main.php");
}

if (isset($_POST['bgTweet_btn'])) {
    $target_dir = "../../../../assets/img/";
    $target_file = $target_dir . basename($_FILES["bgTweet_file"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["bgTweet_file"]["tmp_name"]);
    if ($check !== false) {
        $msg_logo .= " Archivo - " . $imageFileType . " - examinado con éxito.";
        $uploadOk = 1;
    } else {
        $msg_logo .= " El archivo no es una imagen. <br/>";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["bgTweet_file"]["size"] > 500000) {
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
        $target_file = $target_dir . "bg1.jpg";
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $msg_logo .= " No se logró actualizar su fondo para la seccion.<br/>";
        $box = "danger";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["bgTweet_file"]["tmp_name"], $target_file)) {
            $msg_logo .= " El archivo " . basename($_FILES["bgTweet_file"]["name"]) . " Ahora es tu fondo de la seccion.<br/>";
            $box = "primary";
        } else {
            $msg_logo .= " No se logró actualizar su fondo de la seccion.";
            $box = "danger";
        }
    }
    $_SESSION['msg'] = $msg_logo;
    $_SESSION['box'] = $box;
}

if (isset($_POST['deleteTweet'])) {
    $val_select = "DELETE FROM jas_tweets WHERE idTweet = '" . $_POST['deleteid'] . "'";
    $val_result = $link->query($val_select) or die($link->error);

    $msg_menu = " Testimonio eliminado exitosamente. ";
    $box = "primary";
    $_SESSION['msg'] = $msg_menu;
    $_SESSION['box'] = $box;
}

if (isset($_POST['newtweet'])) {
    
    $val_select = "INSERT INTO jas_tweets(nameTweet,textTweet,statusTweet) VALUES ('" . $_POST['nameTweet'] . "','" . $_POST['textTweet'] . "','1')";
    $val_result = $link->query($val_select) or die($link->error);

    $msg_menu = " Nuevo testimonio agregado exitosamente. ";
    $box = "primary";
    $_SESSION['msg'] = $msg_menu;
    $_SESSION['box'] = $box;
}

?>