<!-- Create account and validate credentials -->
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ist440test";

$conn = mysqli_connect($servername, $username, $password, $dbname);

//Create the user
if($conn)
{
	
}
else if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>