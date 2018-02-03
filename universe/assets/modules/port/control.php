<?php

/////////////////////////////////////////////////////////////////////////////// PORTFOLIO CONTROL
/////////////////////////////////////////////////////////////////////////////////////////////DEBUG EN PANTALLA
//error_reporting(E_ALL);
//ini_set('display_errors', 1);


require ("../../scripts/conn.php");
session_start();

if (isset($_POST['edittitles'])) {

    $val_select = "UPDATE jas_misc SET portTitle ='" . $_POST['portTitle'] . "', portSubtitle ='" . $_POST['portSubtitle'] . "', shareTitle ='" . $_POST['portTitle2'] . "', shareSubtitle ='" . $_POST['portSubtitle2'] . "' WHERE idSite = '1'";
    $val_result = $link->query($val_select) or die($link->error);

    $msg_menu = " Titulos actualizado con éxito. ";
    $box = "primary";
    $_SESSION['msg'] = $msg_menu;
    $_SESSION['box'] = $box;
}

if (isset($_POST['newport'])) {

    $directorio = opendir("../../../../assets/img/portfolio/");
    
    $filename = 0;
    while ($archivo = readdir($directorio)) {
        if (!is_dir($archivo)) {
            $filename++;
        }
    }
    $target_dir = "../../../../assets/img/portfolio/";
    $target_file = $target_dir . basename($_FILES["img1Port"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["img1Port"]["tmp_name"]);
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
    if ($_FILES["img1Port"]["size"] > 500000) {
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
        $img1Port = $filename;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $msg_logo .= " No se logró actualizar su fondo para la seccion.<br/>";
        $box = "danger";
        $_SESSION['msg'] = $msg_logo;
        $_SESSION['box'] = $box;
        return;
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["img1Port"]["tmp_name"], $target_file)) {
            $msg_logo .= " Imagen1 cargada exitosamente.";
            $box = "primary";
        } else {
            $msg_logo .= " No se logró actualizar su fondo de la seccion.";
            $box = "danger";
            $_SESSION['msg'] = $msg_logo;
            $_SESSION['box'] = $box;
            return;
        }
    }
    
    
    $directorio = opendir("../../../../assets/img/portfolio/");
    $filename = 0;
    while ($archivo = readdir($directorio)) {
        if (!is_dir($archivo)) {
            $filename++;
        }
    }
    $target_dir = "../../../../assets/img/portfolio/";
    $target_file = $target_dir . basename($_FILES["img2Port"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["img2Port"]["tmp_name"]);
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
    if ($_FILES["img2Port"]["size"] > 500000) {
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
        $img2Port = $filename;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $msg_logo .= " No se logró actualizar su fondo para la seccion.<br/>";
        $box = "danger";
        $_SESSION['msg'] = $msg_logo;
        $_SESSION['box'] = $box;
        return;
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["img2Port"]["tmp_name"], $target_file)) {
            $msg_logo .= " Imagen2 cargada exitosamente.";
            $box = "primary";
        } else {
            $msg_logo .= " No se logró actualizar su fondo de la seccion.";
            $box = "danger";
            $_SESSION['msg'] = $msg_logo;
            $_SESSION['box'] = $box;
            return;
        }
    }
    
    
    $directorio = opendir("../../../../assets/img/portfolio/");
    $filename = 0;
    while ($archivo = readdir($directorio)) {
        if (!is_dir($archivo)) {
            $filename++;
        }
    }
    $target_dir = "../../../../assets/img/portfolio/";
    $target_file = $target_dir . basename($_FILES["img3Port"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["img3Port"]["tmp_name"]);
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
    if ($_FILES["img3Port"]["size"] > 500000) {
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
        $img3Port = $filename;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $msg_logo .= " No se logró actualizar su fondo para la seccion.<br/>";
        $box = "danger";
        $_SESSION['msg'] = $msg_logo;
        $_SESSION['box'] = $box;
        return;
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["img3Port"]["tmp_name"], $target_file)) {
            $msg_logo .= " Imagen3 cargada exitosamente.";
            $box = "primary";
        } else {
            $msg_logo .= " No se logró actualizar su fondo de la seccion.";
            $box = "danger";
            $_SESSION['msg'] = $msg_logo;
            $_SESSION['box'] = $box;
            return;
        }
    }

    $val_select = "INSERT INTO jas_portfolio(titlePort,subtitlePort,textPort,img1Port,img2Port,img3Port,statusPort) VALUES ('" . $_POST['portTitle'] . "', '" . $_POST['portSubtitle'] . "', '" . $_POST['portText'] . "', '" . $img1Port . "', '" . $img2Port . "', '" . $img3Port . "', '" . $_POST['portCheck'] . "')";
    $val_result = $link->query($val_select) or die($link->error);

    $msg_menu = " Nuevo Proyecto Agregado al Portafolio exitosamente. ";
    $box = "primary";
    $_SESSION['msg'] = $msg_menu;
    $_SESSION['box'] = $box;
    return;
}

if (isset($_POST['editPort'])) {

    $directorio = opendir("../../../../assets/img/portfolio/");
    
    $filename = 0;
    while ($archivo = readdir($directorio)) {
        if (!is_dir($archivo)) {
            $filename++;
        }
    }
    $target_dir = "../../../../assets/img/portfolio/";
    $target_file = $target_dir . basename($_FILES["img1Port"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["img1Port"]["tmp_name"]);
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
    if ($_FILES["img1Port"]["size"] > 500000) {
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
        $img1Port = $filename;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $msg_logo .= " No se logró actualizar su fondo para la seccion.<br/>";
        $box = "danger";
        $_SESSION['msg'] = $msg_logo;
        $_SESSION['box'] = $box;
        return;
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["img1Port"]["tmp_name"], $target_file)) {
            $msg_logo .= " Imagen1 cargada exitosamente.";
            $box = "primary";
        } else {
            $msg_logo .= " No se logró actualizar su fondo de la seccion.";
            $box = "danger";
            $_SESSION['msg'] = $msg_logo;
            $_SESSION['box'] = $box;
            return;
        }
    }
    
    
    $directorio = opendir("../../../../assets/img/portfolio/");
    $filename = 0;
    while ($archivo = readdir($directorio)) {
        if (!is_dir($archivo)) {
            $filename++;
        }
    }
    $target_dir = "../../../../assets/img/portfolio/";
    $target_file = $target_dir . basename($_FILES["img2Port"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["img2Port"]["tmp_name"]);
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
    if ($_FILES["img2Port"]["size"] > 500000) {
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
        $img2Port = $filename;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $msg_logo .= " No se logró actualizar su fondo para la seccion.<br/>";
        $box = "danger";
        $_SESSION['msg'] = $msg_logo;
        $_SESSION['box'] = $box;
        return;
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["img2Port"]["tmp_name"], $target_file)) {
            $msg_logo .= " Imagen2 cargada exitosamente.";
            $box = "primary";
        } else {
            $msg_logo .= " No se logró actualizar su fondo de la seccion.";
            $box = "danger";
            $_SESSION['msg'] = $msg_logo;
            $_SESSION['box'] = $box;
            return;
        }
    }
    
    
    $directorio = opendir("../../../../assets/img/portfolio/");
    $filename = 0;
    while ($archivo = readdir($directorio)) {
        if (!is_dir($archivo)) {
            $filename++;
        }
    }
    $target_dir = "../../../../assets/img/portfolio/";
    $target_file = $target_dir . basename($_FILES["img3Port"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["img3Port"]["tmp_name"]);
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
    if ($_FILES["img3Port"]["size"] > 500000) {
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
        $img3Port = $filename;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $msg_logo .= " No se logró actualizar su fondo para la seccion.<br/>";
        $box = "danger";
        $_SESSION['msg'] = $msg_logo;
        $_SESSION['box'] = $box;
        return;
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["img3Port"]["tmp_name"], $target_file)) {
            $msg_logo .= " Imagen3 cargada exitosamente.";
            $box = "primary";
        } else {
            $msg_logo .= " No se logró actualizar su fondo de la seccion.";
            $box = "danger";
            $_SESSION['msg'] = $msg_logo;
            $_SESSION['box'] = $box;
            return;
        }
    }

    $val_select = "UPDATE jas_portfolio SET titlePort ='" . $_POST['portTitle'] . "', subtitlePort ='" . $_POST['portSubtitle'] . "', textPort ='" . $_POST['portText'] . "', img1Port ='" . $img1Port . "', img2Port ='" . $img2Port . "', img3Port ='" . $img3Port . "', statusPort ='" . $_POST['portCheck'] . "' WHERE idPort = '" . $_POST['portId'] . "'";
    $val_result = $link->query($val_select) or die($link->error);

    $msg_menu = " Proyecto Editado del Portafolio exitosamente. ";
    $box = "primary";
    $_SESSION['msg'] = $msg_menu;
    $_SESSION['box'] = $box;
    return;
}

if (isset($_POST['deletePort'])) {
    $val_select = "DELETE FROM jas_portfolio WHERE idPort = '" . $_POST['deleteid'] . "'";
    $val_result = $link->query($val_select) or die($link->error);

    $msg_menu = " Proyecto del portafolio eliminado exitosamente. ";
    $box = "primary";
    $_SESSION['msg'] = $msg_menu;
    $_SESSION['box'] = $box;
}

if (isset($_POST['newPDF'])) {
    
    $target_dir = "../../../../assets/files/";
    $target_file = $target_dir . basename($_FILES["newPDF_file"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
    // Check file size
    if ($_FILES["newPDF_file"]["size"] > 5000000) {
        $msg_logo .= " El archivo es demasiado grande.<br/>";
        $box = "danger";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if ($imageFileType != "pdf") {
        $msg_logo .= " Solo se permite formato PDF.<br/>";
        $box = "danger";
        $uploadOk = 0;
    } else {
        $target_file = $target_dir . "jassa.pdf";
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $msg_logo .= " No se logró actualizar su archivo pdf.<br/>";
        $box = "danger";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["newPDF_file"]["tmp_name"], $target_file)) {
            $msg_logo .= " El archivo " . basename($_FILES["newPDF_file"]["name"]) . " ha sido reempladazo con exito.<br/>";
            $box = "primary";
        } else {
            $msg_logo .= " No se logró actualizar su archivo pdf.";
            $box = "danger";
        }
    }
    
    $_SESSION['msg'] = $msg_logo;
    $_SESSION['box'] = $box;
}
?>