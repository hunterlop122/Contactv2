<?php include("includes/layout/header.php");?>
<?php include("database.php");?>


<body>

<div id="contact">

    <form action="thanks.php" method="post" id="contactForm">
        <h1 id="h1contact">Contact Me</h1>
        <label>First Name</label>
        <input type="text" name="firstname" id="firstname" placeholder="first name.." >
        <label>Last Name</label>
        <input type="text" name="lastname" id="lastname" placeholder="last name.." >
        <label>Email</label>
        <input type="text" name="email" id="email" placeholder="email here..">
        <label>Message</label>
        <input type="text" name="message" id="message">
        <div id="submitbtn">
        <input type="submit" name="submit" id="submit">
      </div>
      </form>


</body>
<?php mysqli_close($conn);?>
<?php include("includes/layout/footer.php");?>
