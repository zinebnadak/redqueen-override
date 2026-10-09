<?php
session_start();
include "_config.php";

$name = $_POST['executive'];
$code = hash('sha256', $_POST['override_code']);

$stmt = $conn->prepare("SELECT id FROM executives WHERE name = ? AND override_code = ?");
$stmt->bind_param("ss", $name, $code);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 1) {
    $_SESSION['executive'] = $name;
    header("Location: index.php?site=status");
    exit;
} else {
    header("Location: index.php?error=1");
    exit;
}