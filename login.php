<?php include("includes/layout/header.php");?>
<?php include("database.php");?>

<?php

	$username = $_POST["username"];
	$password = $_POST["password"];

	  //$logincheck = mysqli_query($conn, "SELECT username, password * FROM loginC");
	  $query = "SELECT username AND password FROM loginC WHERE username = $username and password = $password";
	  $result = mysqli_query($conn, $query);

	  if($_POST["submit"]) {
		if($result->num_rows > 0) { 
		echo "<script>window.top.location='admin.php'</script>";
        }
        else
        {
        echo 'The username or password are incorrect!';

        }
	  }
        

?>


<body>
	<form action="login.php" method="post">
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