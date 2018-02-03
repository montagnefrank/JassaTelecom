<?php

//////////////////////////////////////////////////////////////////////////////////////DEBUG EN PANTALLA
//error_reporting(E_ALL);
//ini_set('display_errors', 1);


session_start();

$panel = $_POST['panel'];
$_SESSION['panel'] = $panel;

?>