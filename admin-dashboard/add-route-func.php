<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "database";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $route_id = uniqid();
    $bus_number = $_POST["bus_number"];
    $origin = $_POST["origin"];
    $destination = $_POST["destination"];
    $schedule = $_POST["schedule"];
    $sql = "INSERT INTO routes (route_id, bus_number, origin, destination, schedule) VALUES ('$route_id','$bus_number', '$origin', '$destination', '$schedule')";
    if ($conn->query($sql) === TRUE) {
        header("Location: ./routes.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?>