<?php
    
    $mysqli = new mysqli("localhost", "root", "", "users");

    if ($mysqli->connect_errno) {
        echo "Не удалось подключиться к MySQL: " . $mysqli->connect_error;
    }

?>