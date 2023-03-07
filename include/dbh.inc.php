<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "nikithemba_db";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

//check if connection failed

if(!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}