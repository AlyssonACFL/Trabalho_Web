<?php

function connectDB() {
    // mysqli_connect('localhost', 'root', '123') or die("connection failed ". mysqli_connect_error);
    $conn = mysqli_connect('localhost', 'root', '', 'web_dev');
    if (!$conn) {
        die("connection failed ". mysqli_connect_error);
    }
    return $conn;
}

function closeDB($conn) {
    mysqli_close($conn);
}


?>