<?php

//////////////////////////////////////////////////////////////////////////////// TOOLS CONTROLLER
/////////////////////////////////////////////////////////////////////////////////////////////DEBUG EN PANTALLA
//error_reporting(E_ALL);
//ini_set('display_errors', 1);

require ("../../scripts/conn.php");

session_start();
$user = $_SESSION["user"];



if (isset($_POST['newtheme'])) {
    $update_theme = mysqli_query($link, "UPDATE jas_usuario SET temaUsuario = '" . $_POST['theme'] . "' WHERE userUsuario = '" . $user . "'");
    $_SESSION["tema"] = $_POST['theme'];
    $msg_theme .= " Tema actualizado con éxito. ";
    $box = "primary";

    $_SESSION['msg'] = $msg_theme;
    $_SESSION['box'] = $box;
    header("Location: ../../../main.php");
}


if (isset($_POST["submitnewavatar"])) {
    $target_dir = "../../assets/img/users/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        $msg_avatar .= " Archivo - " . $imageFileType . " - examinado con éxito.";
        $uploadOk = 1;
    } else {
        $msg_avatar .= " El archivo no es una imagen. <br/>";
        $uploadOk = 0;
    }
    //// Check if file already exists
    //if (file_exists($target_file)) {
    //    echo "Sorry, file already exists.";
    //    $uploadOk = 0;
    //}
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        $msg_avatar .= " El archivo es demasiado grande.<br/>";
        $box = "danger";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if ($imageFileType != "jpg") {
        $msg_avatar .= " Solo se permite formato JPG.<br/>";
        $box = "danger";
        $uploadOk = 0;
    } else {
        $target_file = $target_dir . $user . ".jpg";
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $msg_avatar .= " No se logró actualizar su foto de perfil.<br/>";
        $box = "danger";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            $msg_avatar .= " El archivo " . basename($_FILES["fileToUpload"]["name"]) . " Ahora es tu foto de Perfil.<br/>";
            $box = "primary";
        } else {
            $msg_avatar .= " No se logró actualizar su foto de perfil.";
            $box = "danger";
        }
    }
    $_SESSION['msg'] = $msg_avatar;
    $_SESSION['box'] = $box;
    header("Location: ../../../main.php");
}


if (isset($_POST["submitnewpass"])) {

    $select_compare = mysqli_query($link, "SELECT passUsuario FROM jas_usuario WHERE userUsuario = '" . $user . "'");
    $row_compare = mysqli_fetch_row($select_compare);
    $compare = $row_compare[0];
    if ($_POST["oldpass"] == $compare) {
        $update_pass = mysqli_query($link, "UPDATE jas_usuario SET passUsuario = '" . $_POST['newpass'] . "' WHERE userUsuario = '" . $user . "'");
        $msg_pass .= " Contraseña cambiada con éxito. ";
        $box = "primary";
    } else {
        $msg_pass .= " No pudimos validar su contraseña anterior, por favor ingresela nuevamente. ";
        $box = "danger";
    }

    $_SESSION['msg'] = $msg_pass;
    $_SESSION['box'] = $box;
    header("Location: ../../../main.php");
    
}