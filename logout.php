<?php include("includes/layout/header.php");?>
<?php include("database.php");?>
<?php
session_start();
session_destroy();
$URL="login.php";
echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
?>
<body>

</body>

<?php include("includes/layout/footer.php");?>