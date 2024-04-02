<?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "database";
    $conn = new mysqli($servername, $username, $password, $dbname);

    // check if there are any routes available on the date
    $date = $_POST['date'];
    $sql = "SELECT * FROM routes WHERE schedule='$date'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "Route: " . $row["origin"]." to ".$row["destination"] ." - Bus: " . $row["bus_number"]. " - Schedule: " . $row["schedule"]. "<br>";
        }
    } else {
        echo "No routes available on this date";
    }
?>