<?php
$host = "us-cdbr-east-03.cleardb.com";
$user = "b87aebeadc728a";
$password = "67f1b56b";
$database = "heroku_258eba848b19846";
$conn = new mysqli($host, $user, $password, $database);
mysqli_set_charset($conn, "utf8");
date_default_timezone_set("Asia/Bangkok");

?>