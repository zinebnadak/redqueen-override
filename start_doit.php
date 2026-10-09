<?php
session_start();
include "_config.php";
if (isset($_SESSION['executive'])) {
    $conn->query("UPDATE redqueen SET status = 'Online' WHERE id = 1");
}
header("Location: index.php?site=status");
exit;