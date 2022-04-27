<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'dairy';

$connect = mysqli_connect($host, $user, $pass, $db);

if(isset($connect)){
    echo "Connected to database";
}else{
    echo "Not connected to database";
}

