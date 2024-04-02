<?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "database";
    $conn = new mysqli($servername, $username, $password, $dbname);
    // delete the driver from getting email from the url

    // get the email from the url
    $email = $_GET["email"];
    $sql = "DELETE FROM drivers WHERE email = '$email'";
    if ($conn->query($sql) === TRUE) {
        header("Location: ../logout.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
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