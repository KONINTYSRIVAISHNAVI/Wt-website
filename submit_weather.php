<?php
$conn = mysqli_connect("localhost", "root", "", "userdb");

if (!$conn) {
    die("Database connection failed ❌");
}

/* 1️⃣ Clean input using string functions */
$current_weather = trim($_POST['current_weather']);
$location = trim($_POST['location']);
$description = trim($_POST['description']);

/* Remove unwanted characters */
$location = htmlspecialchars($location);
$description = htmlspecialchars($description);

/* 2️⃣ Validate input length */
if (strlen($location) < 3) {
    die("Location must contain at least 3 characters ❌");
}

/* 3️⃣ Format strings properly */
$current_weather = ucfirst(strtolower($current_weather));
$location = ucwords(strtolower($location));

/* 4️⃣ Insert into database */
$sql = "INSERT INTO weather_report (Current_Weather, Location, Description)
        VALUES ('$current_weather', '$location', '$description')";

if (mysqli_query($conn, $sql)) {
    echo "<h2>Weather report submitted successfully ✅</h2>";
    print "<a href='forms.html'>Go Back</a>";
} else {
    die("Insertion failed ❌");
}

mysqli_close($conn);
?>