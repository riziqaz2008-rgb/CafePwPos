<?php

require_once __DIR__ . '/../config/database.php';

function query($sql)
{
    global $conn;

    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die(mysqli_error($conn));
    }

    return $result;
}