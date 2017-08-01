<?php include("includes/layout/header.php");?>
<?php include("database.php");?>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/jquery.validate.js"></script>
<script src="js/script.js"></script>

<?php
		$sql = "INSERT INTO dataC (firstname, lastname, email, message)
			VALUES ('".$_POST["firstname"]."','".$_POST["lastname"]."','".$_POST["email"]."','".$_POST["message"]."')";

			if (mysqli_multi_query($conn, $sql)) {
			   // echo "New records created successfully";
			} else {
			    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
?>


<div id="thankyoumg">
	<h1>Thanks for submiting your message, well get back to you as so as possible!</h1>
	<a href="index.php"><button type="button" id="backhome">Back To Home</button></a>
</div>
<?php mysqli_close($conn);?>
<?php include("includes/layout/footer.php");?>
