<?php
include 'dbh.inc.php';

$student_id = $_POST["id"];

$name = $_POST["name"];
$mark = $_POST["mark"];
$sql = "INSERT INTO subject (student_id,subject_name, subject_mark) VALUES ('$student_id','$name','$mark')";
$conn->query($sql);
$conn->close();
header("location: ../user-dashboard/upload_marks.php");