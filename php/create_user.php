<!-- Create account and validate credentials -->
<?php

$servername = "localhost";
$username = "dbuser";
$password = "dbpassword";
$dbname = "ist440w";

$user_email = $_POST["email"];
$user_password = $_POST["password"];
$user_id = rand();

$conn = mysqli_connect($servername, $username, $password, $dbname);

//Create the user
if($conn)
{
	$m_query = "INSERT INTO Users (id, email, password) VALUES ('$user_id', '$user_email', '$user_password')";
	if ($conn->query($m_query) === TRUE) {
    	echo "success";
    	//redirect success
    	header("Location: http://localhost/IST440Project/index.php?resp=success"); 
		exit();
	} 
	else {
	    echo "error: " . $sql . "<br>" . $conn->error;
	    //redirect success
    	header("Location: http://localhost/IST440Project/index.php?resp=fail"); 
		exit();
	}
}
else if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>