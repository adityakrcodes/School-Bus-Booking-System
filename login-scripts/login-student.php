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
        $password = $_POST["password"];

        $sql = "SELECT * FROM students WHERE (register = '$register' OR email = '$register') AND password = '$password'";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            session_start();
            $_SESSION["register"] = $register;
            // store all the info in session
            $row = $result->fetch_assoc();
            $_SESSION["name"] = $row["name"];
            $_SESSION["email"] = $row["email"];
            $_SESSION["area"] = $row["area"];
            $_SESSION["address"] = $row["address"];
            $_SESSION["user"] = "student";
            include "../home-pages/student-home.php";
        } else {
            include "../invalid-pass.html";
        }
    }
?>


<!--
Developed by AdityaKrCodes
GitHub: https://github.com/adityakrcodes
Repo: https://github.com/adityakrcodes/School-Bus-Booking-System
Instagram: https://instagram.com/adityakrcodes
X: https://x.com/adityakrcodes

NOTE: You are free to copy the code but credits will be appreciated.

-->
