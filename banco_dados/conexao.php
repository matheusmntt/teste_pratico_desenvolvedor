<?php

    define('HOST', '127.0.0.1');
    define('USER', 'root');
    define('PASSWORD', '123456');
    define('DATABASE', 'teste');

    $conn = new PDO('mysql:host' . HOST . ';dbname=' . DATABASE . ';', USER, PASSWORD);