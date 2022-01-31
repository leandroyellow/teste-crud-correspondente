<?php

$db_name = 'correspondencia';
$db_host = 'localhost';
$db_pass = '';
$db_user = 'root';

$pdo = new PDO("mysql:dbname=$db_name;host=$db_host", $db_user, $db_pass);

