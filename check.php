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
        $result = $conn->query($check_user);
        
        $check_user = "SELECT * FROM users WHERE username='$username'";
        if ($result->num_rows > 0) {
            return FALSE;
        }
        $check_email = "SELECT * FROM users WHERE email='$email'";
        $result = $conn->query($check_email);
        if ($result->num_rows > 0) {
            return FALSE;
        }
        $check_college_id = "SELECT * FROM users WHERE college_id='$collegeId'";
        $result = $conn->query($check_college_id);
        if ($result->num_rows > 0) {
            return FALSE;
        }
        
        $sql = "INSERT INTO users (name, email, password, college_id, address, username) VALUES ('$name', '$email', '$password', '$collegeId', '$address', '$username')";
        if ($conn->query($sql) === TRUE) {
            echo "Registration successful!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    $conn->close();
?>