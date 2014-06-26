<?php
session_start();

// the name of the directory, relative to the web root, under which wivet is
// extracted. Don't forget to put leading and trailing /
// $installDir =  "/mycustomdir/";
$installDir =  "/";
// If you extract the contents of wivet directly under the web root directory,
// then leave the value as is; "/"

$_SESSION['baseaddr'] = currentHost() . $installDir;
$_SESSION['baseaddrwithnoprotocol'] = currentHostWithNoProtocol() . $installDir;
$_SESSION['statisticsdir'] = dirname(__FILE__) . "/offscanpages/statistics/";
$_SESSION['pagesdir'] = dirname(__FILE__) . "/pages/";

if(!isset($_SESSION['time'])){
  $_SESSION['time'] = time();
}

date_default_timezone_set('America/Los_Angeles');

if(!isset($_SESSION['currenturlsvisited'])){
  $_SESSION['currenturlsvisited'] = array();
}

 function currentHost() {
    $pageURL = 'http';
    if ($_SERVER["SERVER_PORT"] == '443') {
        $pageURL .= "s";
    }
    $pageURL .= "://";
    if ($_SERVER["SERVER_PORT"] != '80') {
        $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"];
    }
    else {
        $pageURL .= $_SERVER["SERVER_NAME"];
    }
    return $pageURL;
 }

 function currentHostWithNoProtocol() {
    $pageURL = "//";
    if ($_SERVER["SERVER_PORT"] != '80') {
        $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"];
    }
    else {
        $pageURL .= $_SERVER["SERVER_NAME"];
    }
    return $pageURL;
 }
?>


