<?php include("includes/layout/header.php");?>
<?php include("database.php");?>

<?php  //Start the Session
session_start();
 //3. If the form is submitted or not.
//3.1 If the form is submitted
if (isset($_POST['username']) and isset($_POST['password'])){
//3.1.1 Assigning posted values to variables.
$username = $_POST['username'];
$password = $_POST['password'];
//3.1.2 Checking the values are existing in the database or not
$query = "SELECT * FROM `loginC` WHERE username='$username' and password='$password'";
 
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);
//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
if ($count == 1){
$_SESSION['username'] = $username;
}else{
//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
$fmsg = "Invalid Login Credentials.";
}
}
//3.1.4 if the user is logged in Greets the user with message
if (isset($_SESSION['username'])){
$username = $_POST['username'];
$URL="admin.php";
echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';

 
}else{
//3.2 When the user visits the page first time, simple login form will be displayed.
}
?>


<body>
	<div id="login">
	<form action="login.php" method="post">
		<label>Username:</label>
		<input type="text" id="username" name="username">
		<br>
		<label>Password:</label>
		<input type="password" id="password" name="password">
		<br>
		<input type="submit" id="submit" name="submit">
	</form>
</div>
  <script src="js/scripts.js"></script>
</body>
<?php include("includes/layout/footer.php");?>