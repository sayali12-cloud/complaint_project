<?php

$dbuser = "root";
$dbpass = "";
$host = "localhost";
$dbname = "complaint";

$connec = new mysqli($host, $dbuser, $dbpass, $dbname);

if ($connec->connect_error) {
    die("Connection failed: " . $connec->connect_error);
}

?>