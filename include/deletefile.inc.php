<?php
include 'dbh.inc.php';
$id = $_GET["file_id"];
$sql = "DELETE FROM documents WHERE id=$id";
$conn->query($sql);
$conn->close();
header("location: ../user-dashboard/document.php");