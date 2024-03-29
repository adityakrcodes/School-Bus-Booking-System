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
        $register = $_POST["register"];
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirmPassword = $_POST["confirm_password"];
        $area = $_POST["area"];
        $address = $_POST["address"];
        $sql = "INSERT INTO users (register, name, email, password, area, address) VALUES ('$register', '$name', '$email', '$password', '$area', '$address')";
        if ($conn->query($sql) === TRUE) {
            echo "Registration successful!";
            echo "<br>";
            echo "Redirecting to login page in 3 seconds...";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    $conn->close();
?>