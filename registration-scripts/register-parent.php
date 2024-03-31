<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "database";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $register = $_POST["register"];
        $parent_name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirmPassword = $_POST["confirm_password"];
        $relationship = $_POST["relationship"];
        $sql = "INSERT INTO parents (register, name, email, password, relationship) VALUES ('$register', '$parent_name', '$email', '$password', '$relationship')";
        if ($conn->query($sql) === TRUE) {
            include "registered.html";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    $conn->close();
?>