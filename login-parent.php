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
        $email = $_POST["email"];
        $password = $_POST["password"];

        $sql = "SELECT * FROM parents WHERE (email = '$email') AND password = '$password'";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            session_start();
            $_SESSION["email"] = $email;
            $row = $result->fetch_assoc();
            $_SESSION["parent_name"] = $row["name"];
            $_SESSION["email"] = $row["email"];
            $_SESSION["register"] = $row["register"];
            $_SESSION["user"] = "parent";
            include "parent-home.php";
        } else {
            echo "Invalid username/email or password.";
        }
    }
?>