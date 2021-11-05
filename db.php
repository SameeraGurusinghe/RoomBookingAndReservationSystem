<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "booking";

$db = mysqli_connect($serverName, $userName, $password, $dbName);
mysqli_report(MYSQLI_REPORT_OFF);