<?php
    include("db_config.php");

    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4;port=$porta", $login, $password);
?>