<?php include("includes/layout/header.php");?>
<?php include("database.php");?>
<?php
  $result1 = mysqli_query($conn, "SELECT * FROM loginC");
  $result2 = mysqli_query($conn, "SELECT * FROM dataC");
?>


<body>

<h1>Welcome User</h1>
<div id="dataCtb">
<?php
echo "This is the Members Area
";
echo "<a href='logout.php'>Logout</a>";

echo "<table border='1'>
<tr>
<th>firstname</th>
<th>lastname</th>
<th>email</th>
<th>message</th>
</tr>";

while($row = mysqli_fetch_array($result2))
{
echo "<tr>";
echo "<td>" . $row['firstname'] . "</td>";
echo "<td>" . $row['lastname'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['message'] . "</td>";
echo "</tr>";
}
?>
</div>
<br>
<div id="loginCtb">
<?php
echo "<table border='1'>
<tr>
<th>Username</th>
<th>Password</th>
</tr>";

while($row = mysqli_fetch_array($result1))
{
echo "<tr>";
echo "<td>" . $row['username'] . "</td>";
echo "<td>" . $row['password'] . "</td>";
echo "</tr>";
}
?>
</div>

  <script src="js/scripts.js"></script>

</body>
<?php include("includes/layout/footer.php");?>