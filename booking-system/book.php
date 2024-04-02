<?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "database";
    $conn = new mysqli($servername, $username, $password, $dbname);

    $date = $_POST['date'];
    $origin = $_POST['origin'];
    $destination = $_POST['destination'];
    $name = $_SESSION['name'];    
    $email = $_SESSION['email'];

    $sql = "SELECT * FROM routes WHERE origin = '$origin' AND destination = '$destination'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $booking_id = uniqid();
        $route_id = $row['route_id'];
        $bus_number = $row['bus_number'];
        $sql = "INSERT INTO bookings (booking_id, route_id, bus_number, name, email, date, origin, destination) VALUES ('$booking_id', '$route_id', '$bus_number', '$name', '$email', '$date', '$origin', '$destination')";
        if ($conn->query($sql) === TRUE) {
            include 'booked.html';
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        include 'book-failed.html'; 
    }

?>