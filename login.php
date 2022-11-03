<?php
	include 'db.php';

	if(!empty($_SESSION["id"])){
		header("Location: account.php");
	}
	if(isset($_POST["submit"])){
		$usernameemail = $_POST["usernameemail"];
		$password = $_POST["password"];
		$result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$usernameemail' OR email = '$usernameemail'");
		$row = mysqli_fetch_assoc($result);
		if(mysqli_num_rows($result) > 0){
			if($password == $row["password"]){
				$_SESSION["login"] = true;
				$_SESSION["id"] = $row["id"];
				$_SESSION['valid_user'] = $usernameemail;
				header("Location: account.php");
			}
			else{
				echo "<script>alert('Wrong Password');</script>";
			}
		}
		else{
			echo "<script>alert('User Not Registered');</script>";
		}
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
<h1>Sign in to Gisul</h1>
		<form class="" action="" method="post" autocomplete="off">
        <div class="logincontainer">
	
		<label for="usernameemail"></label>
		<input type="text" name="usernameemail" id="usernameemail" required placeholder="Username or Email:"><br>
		<label for="password"></label>
		<input type="password" name="password" id="password" required placeholder="Password:"><br>
		<br>
        <div><label for="submit"></label>
        <input type="submit" name="submit" id="submit" value="Login"></div>

        <br><hr style="border-top:solid 1px; width: 19em;" >
		
		<a href="signup.php" class="hyperlinks">Sign up for an account today!</a>   

		</div>
		</form>

	<footer class="footer">
		<h3>COPYRIGHT &copy; 2022 Gisul Techonology <a href="mailto:Gisul@technology.com.sg">Gisul@technology.com.sg</a></h3>
	</footer>

</body>
</html>