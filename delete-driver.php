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