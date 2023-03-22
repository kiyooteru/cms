<?php

$servername = "localhost";
$username = "root";
$password = "";
$name = "cms";

$connection = new mysqli($servername, $username, $password, $name);
if(!$connection) {
    echo "Connection failed";
}
?>