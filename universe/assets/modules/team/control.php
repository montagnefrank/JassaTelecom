<?php

/////////////////////////////////////////////////////////////////////////////// TEAM CONTROL
/////////////////////////////////////////////////////////////////////////////////////////////DEBUG EN PANTALLA
//error_reporting(E_ALL);
//ini_set('display_errors', 1);


require ("../../scripts/conn.php");
session_start();

if (isset($_POST['edittitles'])) {

    $val_select = "UPDATE jas_misc SET teamTitle ='" . $_POST['teamTitle'] . "', teamSubtitle ='" . $_POST['teamSubtitle'] . "' WHERE idSite = '1'";
    $val_result = $link->query($val_select) or die($link->error);

    $msg_menu = " Titulos actualizado con éxito. ";
    $box = "primary";
    $_SESSION['msg'] = $msg_menu;
    $_SESSION['box'] = $box;
}

if (isset($_POST['editmember'])) {
    
    $directorio = opendir("../../../../assets/img/team/");

    $filename = 1;
    while ($archivo = readdir($directorio)) {
        if (!is_dir($archivo)) {
            $filename++;
        }
    }
    $target_dir = "../../../../assets/img/team/";
    $target_file = $target_dir . basename($_FILES["photoTeam"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["photoTeam"]["tmp_name"]);
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
    if ($_FILES["photoTeam"]["size"] > 500000) {
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
        $msg_logo .= " No se logró actualizar su imagen de miembro.<br/>";
        $box = "danger";
        $_SESSION['msg'] = $msg_logo;
        $_SESSION['box'] = $box;
        return;
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["photoTeam"]["tmp_name"], $target_file)) {
            chmod($target_file, 0666);
            $msg_logo .= " Foto de miembro cargada exitosamente.";
            $box = "primary";
        } else {
            $msg_logo .= " No se logró actualizar su imagen de perfil.";
            $box = "danger";
            $_SESSION['msg'] = $msg_logo;
            $_SESSION['box'] = $box;
            return;
        }
    }

    $val_select = "UPDATE jas_team SET photoTeam = '" . $filename . "', nameTeam = '" . $_POST['nameTeam'] . "', jobTeam = '" . $_POST['jobTeam'] . "', profileTeam = '" . $_POST['profileTeam'] . "', fbTeam = '" . $_POST['fbTeam'] . "', igTeam = '" . $_POST['igTeam'] . "', twTeam = '" . $_POST['twTeam'] . "', statusTeam = '" . $_POST['statusTeam'] . "' WHERE idTeam  = '" . $_POST['idTeam'] . "'";
    $val_result = $link->query($val_select) or die($link->error);


    $msg_menu = " Miembro Editado exitosamente. ";
    $box = "primary";
    $_SESSION['msg'] = $msg_menu;
    $_SESSION['box'] = $box;
}

if (isset($_POST['deletemember'])) {
    $val_select = "DELETE FROM jas_team WHERE idTeam = '" . $_POST['deleteid'] . "'";
    $val_result = $link->query($val_select) or die($link->error);

    $msg_menu = " Miembro Eliminado exitosamente. ";
    $box = "primary";
    $_SESSION['msg'] = $msg_menu;
    $_SESSION['box'] = $box;
}

if (isset($_POST['newmember'])) {

    $directorio = opendir("../../../../assets/img/team/");

    $filename = 1;
    while ($archivo = readdir($directorio)) {
        if (!is_dir($archivo)) {
            $filename++;
        }
    }
    $target_dir = "../../../../assets/img/team/";
    $target_file = $target_dir . basename($_FILES["photoTeam"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["photoTeam"]["tmp_name"]);
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
    if ($_FILES["photoTeam"]["size"] > 500000) {
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
        $msg_logo .= " No se logró actualizar su imagen de miembro.<br/>";
        $box = "danger";
        $_SESSION['msg'] = $msg_logo;
        $_SESSION['box'] = $box;
        return;
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["photoTeam"]["tmp_name"], $target_file)) {
            chmod($target_file, 0666);
            $msg_logo .= " Foto de miembro cargada exitosamente.";
            $box = "primary";
        } else {
            $msg_logo .= " No se logró actualizar su fondo de la seccion.";
            $box = "danger";
            $_SESSION['msg'] = $msg_logo;
            $_SESSION['box'] = $box;
            return;
        }
    }

    $val_select = "INSERT INTO jas_team(photoTeam,nameTeam,jobTeam,profileTeam,fbTeam,igTeam,twTeam,statusTeam) VALUES ('" . $filename . "','" . $_POST['nameTeam'] . "','" . $_POST['jobTeam'] . "','" . $_POST['profileTeam'] . "','" . $_POST['fbTeam'] . "','" . $_POST['igTeam'] . "','" . $_POST['twTeam'] . "','" . $_POST['statusTeam'] . "')";
    $val_result = $link->query($val_select) or die($link->error);


    $msg_menu = " Nuevo miembro del equipo cargado en sistema exitosamente. ";
    $box = "primary";
    $_SESSION['msg'] = $msg_menu;
    $_SESSION['box'] = $box;
}
?>