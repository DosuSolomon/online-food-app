/*mysql://bd5e572a99bd72:d30a54e4@us-cdbr-east-02.cleardb.com/heroku_bbd3b6878b9f671?reconnect=true*/
<?php
session_start();
$servername = "us-cdbr-east-02.cleardb.com";
$server_user = "bd5e572a99bd72";
$server_pass = "d30a54e4";
$dbname = "heroku_bbd3b6878b9f671";
$name = $_SESSION['name'];
$role = $_SESSION['role'];
$con = new mysqli($servername, $server_user, $server_pass, $dbname);
?>
