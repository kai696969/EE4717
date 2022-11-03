<?php

include 'db.php';

if (isset($_POST['submit'])){


	if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['tel']) && !empty($_POST['email']) && !empty($_POST['msg']))
	{
	
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$tel = $_POST['tel'];
		$email = $_POST['email'];
		$msg = $_POST['msg'];
		
		$query = "INSERT INTO contact (fname, lname, tel, email, msg) VALUES ('$fname', '$lname', '$tel', '$email', '$msg')";
		$run = mysqli_query($conn,$query);

		if($run)
		{
			echo '<script type="text/javascript"> alert ("Form Submitted") </script>';
		}
		else 
		{
			echo "Form Not Submitted";
		}
	}else {
		echo "Fields not filled";
	}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/contact.css">
<script type="text/javascript" src="validate.js"></script>
<script type="text/javascript" src="validate2.js"></script>
<title>4717 Project</title>
<meta charset="utf-8">
</head>

	<<nav class="navbar1">
      <a href="home.php"><img src="./images/logo.png" alt="Homepage" id="homelogo"></a> 
      <a href="acc.php">Accessories</a>
      <a href="computers.php">Computers</a>
      <a href="phones.php">Phones&Tablets</a>
      <a href="Contact.php">Contact Us</a>
      <a href="cart.php">Cart (<?php echo mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `cart`")); ?>)</a>
	  <a href="account.php">Account</a>
    </div>
   </nav>
	<h1>Contact Us</h1>
	<img src="images/contact.jpg" class="center" style="width:25%">
	<p class="title"><i>Any questions or remarks? Just write us a message!</i></p>

	<div class="container">
	<div id="leftcolumn">
		<h3>Contact Information</h3>
		<p>Fill up the form and our team will get back to you within 24 hours.</p>
		<img src="./images/phoneicon.png" alt="." width="25" height="25" > +65 6250 3000<br><br>
		<img src="./images/emailicon.png" alt="." width="30" height="25" > Gisul@technology.com.sg<br><br>
		<img src="./images/locationicon.png" alt="." width="30" height="25" > 50 Nanyang Ave, 639798
	</div>


	<div id="rightcolumn">

	<form action="contact.php" method="post" >
	<div class="logincontainer">

	<div>
	<input type="text" name="fname" id="fname" required placeholder = "First Name:" onchange = "chkfirstName()" >
	<input type="text" name="lname" id="lname" required placeholder = "Last Name:" onchange = "chklastName()">
	</div><br>
	
	<div>
	<input type="number" name="tel" id="tel" required placeholder = "Phone:" onchange = "chkPhone()" >
	<input type="email" name="email" id="email" required placeholder = "Email ID:" onchange = "chkEmail()" >
	</div><br>
	<div>
	</div>
	
	<label for="msg">Message:</label><br>
	<textarea name="msg" id="msg" rows = "6" cols = "40" placeholder = "Write your message here..."></textarea>
	<br><br>
	</div>	

	<input type="reset" value="Clear">
	<input type="submit" value="Submit" name="submit" id="submit"><br>
	</form>

	</div>

	<footer class="footer">
		<h3>COPYRIGHT &copy; 2022 Gisul Techonology <a href="mailto:Gisul@technology.com.sg">Gisul@technology.com.sg</a></h3>
	</footer>

       
</body>
</html>
