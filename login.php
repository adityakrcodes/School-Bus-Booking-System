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
        $username = $_POST["username"];
        $password = $_POST["password"];

        $sql = "SELECT * FROM users WHERE (username = '$username' OR email = '$username') AND password = '$password'";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            echo "Login successful!";
            echo "Logged in as:$username";
        } else {
            echo "Invalid username/email or password.";
        }
    }
?>