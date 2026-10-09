<?php
$conn = new mysqli("localhost", "tecna", "umbrella", "tecna");
if ($conn->connect_error) { die("Databasfel: " . $conn->connect_error); }