<?php

$host ='127.0.0.1';
$database = 'tests';
$username = 'root';
$password = '';

$db = mysqli_connect($host , $username, $password);
if(!$db){
    printf("Невозможно подключиться к БД", mysqli_connect_error());
    exit();
}
if(!mysqli_select_db($db, $database)) {
    printf("Не могу подключиться к БД");
    exit();
}
