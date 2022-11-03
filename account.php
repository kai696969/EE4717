<?php
	include 'db.php';
	if(!empty($_SESSION["id"])){
		$id = $_SESSION["id"];
		$result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
		$row = mysqli_fetch_assoc($result);
	}
	else{
		header("Location: login.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Computers</title>
   <link rel="stylesheet" href="css/login.css">
</head>
<body>
   

<header>
   <nav class="navbar1">
      <a href="home.php"><img src="./images/logo.png" alt="Homepage" id="homelogo"></a> 
      <a href="acc.php">Accessories</a>
      <a href="computers.php">Computers</a>
      <a href="phones.php">Phones&Tablets</a>
      <a href="Contact.php">Contact Us</a>
      <a href="cart.php">Cart (<?php echo mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `cart`")); ?>)</a>
	  <a href="account.php">Account</a>
   </nav>
</header>
<div class="logincontainer">
<h1>Welcome, <font color='#0071e3'><?php echo $row["name"]; ?></font>!</h1>
<img src="images/welcome.jpg">
<h2>You are currently logged in as <big><font color='#9e9e9e'><?php echo $row["email"]; ?></font></big></h2>

<br><hr style="border-top:solid 1px; width: 19em;" >
<a href="checkout.php" class="hyperlinks">Go to Order Confirmation</a> or <a href="logout.php" class="hyperlinks">Log Out</a></h2>
</div>



<footer class="footer"  style="margin-top: 370px">
	<h3>COPYRIGHT &copy; 2022 Gisul Techonology <a href="mailto:Gisul@technology.com.sg">Gisul@technology.com.sg</a></h3>
</footer>

</body>
</html>