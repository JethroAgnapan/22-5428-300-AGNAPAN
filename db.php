<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbnme = "phonebook";

    $conn = new mysqli($servername, $username, $password, $dbnme);

    if ($conn->connect_error) {
        die("Connection Failed: " . $conn->connect_error);
    }
?>
