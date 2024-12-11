<?php
define('DB_SERVER', 'localhost');//mặc định là localhost
define('DB_USERNAME', 'root');//mặc định là root
define('DB_PASSWORD', '');//mặc định là ''
define('DB_DATABASE', 'atd_management');//điền tên database cần sử dụng.
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

// Check connection
if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// else{
//     echo'good job, brrr';
// }

