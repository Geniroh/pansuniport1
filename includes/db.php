<?php

// define("DB_HOST", "localhost");
// define("DB_USERNAME", "root");
// define("DB_PASSWORD", "");
// define("DB_DATABASE", "systemdata");

// $conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

// if (!$conn) {
//     die("connection failed:" . mysqli_connect_error());
// }


define("DB_HOST", "localhost");
define("DB_USERNAME", "pansunip_Johnny");
define("DB_PASSWORD", "adminJohnny19");
define("DB_DATABASE", "pansunip_systemdata");

$conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

if (!$conn) {
    die("connection failed:" . mysqli_connect_error());
}
