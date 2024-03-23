<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "users";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirmPassword = $_POST["confirm_password"];
        $collegeId = $_POST["college_id"];
        $address = $_POST["address"];
        $username = $_POST["username"];
        $sql = "INSERT INTO users (name, email, password, college_id, address, username) VALUES ('$name', '$email', '$password', '$collegeId', '$address', '$username')";

        if ($conn->query($sql) === TRUE) {
            echo "Registration successful!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    $conn->close();
?>