<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "parking";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM space";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "SR No.: " . $row["id"]. "<br> - Level: " . $row["Level"]. " "."<br>Bike Space: " . $row["bspace"] ."<br>Car Space.: " . $row["cspace"].  "<br><br><br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>