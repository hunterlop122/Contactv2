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

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Login</title>

  <link rel="stylesheet" href="css/styles.css?v=1.0">

</head>

<body>
	<form action="new_user.php" method="post">
		<label>New User</label>
		<br>
		<label>Username:</label>
		<input type="text" id="username" name="username">
		<br>
		<label>Password:</label>
		<input type="password" id="password" name="password">
		<br>
		<input type="submit" id="submit" name="submit">
	</form>
  <script src="js/scripts.js"></script>
</body>