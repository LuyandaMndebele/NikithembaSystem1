<?php
include 'dbh.inc.php';
$id = $_GET["id"];

$sql = "DELETE FROM subject WHERE id=$id";
$conn->query($sql);
$conn->close();
header("location: ../user-dashboard/upload_marks.php");