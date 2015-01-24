<?php
$servername = "localhost";
$username = "dbuser";
$password = "dbpassword";
$dbname = "world";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connection established!\n";

$res = $conn->query("SELECT * FROM city ORDER BY population DESC LIMIT 0, 100");

while ($row = $res->fetch_assoc()) {
    echo "<p> Name = " . $row['Name'] . "</p>";
    echo "<p> Population = " . $row['Population'] . "</p>";
}

$conn->close();
echo "Connection closed";
?>