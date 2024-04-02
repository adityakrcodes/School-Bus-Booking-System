<?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "database";
    $conn = new mysqli($servername, $username, $password, $dbname);

    // cancel the booking
    $booking_id = $_POST['booking_id'];
    $sql = "DELETE FROM bookings WHERE booking_id = '$booking_id'";
    if ($conn->query($sql) === TRUE) {
        include 'cancelled.html';
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
