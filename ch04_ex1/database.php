<?php
    $dsn = 'mysql:host=sql2.njit.edu;dbname=djn9';
    $username = 'djn9';
    $password = 'WsNtfldv';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>
