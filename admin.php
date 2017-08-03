<?php include("includes/layout/header.php");?>
<?php include("database.php");?>
<?php
  $result = mysqli_query($conn, "SELECT * FROM loginC");

echo "<table border='1'>
<tr>
<th>Username</th>
<th>Password</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['username'] . "</td>";
echo "<td>" . $row['password'] . "</td>";
echo "</tr>";
}
?>

<body>

	<h1>Welcome Admin!</h1>

  <script src="js/scripts.js"></script>

</body>
