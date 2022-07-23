<?php
// connect to database
include 'dbconn.php';
$sql = "SELECT * FROM csc574";
$result = mysqli_query($db, $sql);

$doc = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>