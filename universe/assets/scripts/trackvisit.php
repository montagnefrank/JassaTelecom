<?php

////////////////////////////////////////////////////////////////////////////////////////DEBUG EN PANTALLA
//error_reporting(E_ALL);
//ini_set('display_errors', 1);


////////////////////////////////////////////////////////////////////////////////CREAR LA TABLA EN LA DB
//$result = "CREATE TABLE track(
//`id` int(6) NOT NULL auto_increment,
//`tm` varchar(20) NOT NULL default '',
//`ref` varchar(250) NOT NULL default '',
//`agent` varchar(250) NOT NULL default '',
//`ip` varchar(20) NOT NULL default '',
//`ip_value` varchar(250) NOT NULL default '0',
//`domain` varchar(20) NOT NULL default '',
//`tracking_page_name` varchar(200) NOT NULL default '',
// UNIQUE KEY `id` (`id`)
// ) ENGINE=MyISAM DEFAULT CHARSET=latin1 "; 
//mysqli_query($link, $result);

function trackvisitor($page) {
    require ("conn.php");
    $tracking_page_name = $page;
    if (isset($_SERVER['HTTP_REFERER'])) {
        $ref = $_SERVER['HTTP_REFERER'];
    } else {
        $ref = "DIRECTO";
    }
    $agent = $_SERVER['HTTP_USER_AGENT'];
    $ip = $_SERVER['REMOTE_ADDR'];
    $host_name = gethostbyaddr($_SERVER['REMOTE_ADDR']);
    $query = "INSERT INTO jas_track(tm, ref, agent, ip, tracking_page_name, domain, ip_value)    VALUES('" . date('Y-m-d') . "','$ref','$agent','$ip','$tracking_page_name','$host_name','" . date('H:i:s') . "')";
    $track = mysqli_query($link, $query) or die("no inserto" . mysqli_error($link));
};