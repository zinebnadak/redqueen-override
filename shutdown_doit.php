<?php
session_start();
include "_config.php";

if (!isset($_SESSION['executive']) || !isset($_SESSION['color'])) {
    header("Location: index.php");
    exit;
}

$name  = $_SESSION['executive'];
$color = $_SESSION['color'];
$code  = strtoupper(trim($_POST['shutdown_code']));

$stmt = $conn->prepare("SELECT shutdown_codes.id FROM shutdown_codes JOIN executives ON executives.id = shutdown_codes.executive_id WHERE executives.name = ? AND shutdown_codes.color = ? AND shutdown_codes.code = ?");
$stmt->bind_param("sss", $name, $color, $code);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 1) {
    $conn->query("UPDATE redqueen SET status = 'Offline' WHERE id = 1");
    unset($_SESSION['color']);
    header("Location: index.php?site=status");
    exit;
} else {
    header("Location: index.php?site=shutdown&error=1");
    exit;
}