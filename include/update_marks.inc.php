<?php
include 'dbh.inc.php';
$id = $_POST["id"];
$name = $_POST["name"];
$mark = $_POST["mark"];
$sql = "UPDATE subject SET subject_name='$name' subject_mark='$mark' WHERE id=$id";
$conn->query($sql);
$conn->close();
header("location: ../user-dashboard/upload_marks.php");