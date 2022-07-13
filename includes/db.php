<?php
    $servername = "localhost";
    $username = "sqluser";
    $password = "sqlpass";
    $dbname = "notes";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        echo "Dying";
        die("DB connection failed" . mysqli_connect_error());
    }
    error_reporting(0);
?>