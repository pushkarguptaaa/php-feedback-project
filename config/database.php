<?php
define('DB_HOST','localhost');
define('DB_USER','Pushkar');
define('DB_PASS','a2b3c4e5');
define('DB_NAME','php_dev');

$conn = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

if($conn->connect_error){
    die('Connection failed' . $conn->connect_error);
}
