<?php include("includes/layout/header.php");?>
<?php include("database.php");?>

<?php

//echo "Connected successfully";
if(isset($_POST["submit"])) {
		$sql = "INSERT INTO loginC (username, password)
	VALUES ('".$_POST["username"]."','".$_POST["password"]."')";

	if (mysqli_query($conn, $sql)) {
	    //echo "New record created successfully";
	} else {
	    //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}

?>



<body>
	<div id="newUser">
		<form action="new_user.php" method="post">
			<h1>New User</h1>
			<br>
			<label>Username:</label>
			<input type="text" id="username" name="username">
			<br>
			<label>Password:</label>
			<input type="password" id="password" name="password">
			<br>
			<input type="submit" id="submit" name="submit">
		</form>
	</div>

	<a href="logout.php"><button>Logout</button></a>

  <script src="js/scripts.js"></script>
</body>

<?php include("includes/layout/footer.php");?>