<?php
$conn = mysqli_connect("localhost", "root", "", "userdb");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$current_weather = $_POST['current_weather'];
$location = $_POST['location'];
$description = $_POST['description'];


$sql = "INSERT INTO weather_report (Current_Weather, Location, Description)
        VALUES ('$current_weather', '$location', '$description')";

if (mysqli_query($conn, $sql)) {
    echo "<h2>Weather report submitted successfully ✅</h2>";
    echo "<a href='forms.html'>Go Back</a>";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>