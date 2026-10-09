<?php
session_start();
include "_config.php";

$site = "login";
if (isset($_GET['site'])) {
    $site = $_GET['site'];
}

if ($site != "login" && $site != "status" && $site != "shutdown") {
    $site = "login";
}

if ($site != "login" && !isset($_SESSION['executive'])) {
    $site = "login";
}

include "_master_top.php";
include $site . ".php";
include "_master_bottom.php";
?>