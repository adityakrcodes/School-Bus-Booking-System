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
        // write for driver registration with the following fields name, age, address, phone, email, driving licence, password
        $name = $_POST['name'];
        $age = $_POST['age'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $driving_licence = $_POST['driving_licence'];
        $password = $_POST['password'];

        $sql = "INSERT INTO drivers (name, age, address, phone, email, driving_licence, password) VALUES ('$name', '$age', '$address', '$phone', '$email', '$driving_licence', '$password')";
        if ($conn->query($sql) === TRUE) {
            include "registered.html";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    $conn->close();
?>