<?php

	$servername = "localhost";
	$username = "root";
	$password = "root";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password);

	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$db = "CREATE DATABASE formC";

	if ($conn->query($db) === TRUE) {
    	echo "Database created successfully";
    	$tb = "CREATE TABLE dataC (
				id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				firstname VARCHAR(30) NOT NULL,
				lastname VARCHAR(30) NOT NULL,
				email VARCHAR(50) NOT NULL,
				message VARCHAR(70) NOT NULL)";
	} else {
		//Alert if database wasnt created 
    	//echo "Error creating database: " . $conn->error;
	}

	mysqli_close($conn);

	$servername = "localhost";
	$username = "root";
	$password = "root";
	$mydb = "formC";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $mydb);

?>