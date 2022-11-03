<?php
	include 'db.php';
	if(!empty($_SESSION["id"])){
		header("Location: login.php");
	}
	if(isset($_POST["submit"])){
		$name = $_POST["name"];
		$username = $_POST["username"];
		$email = $_POST["email"];
		$password = $_POST["password"];
		$confirmpassword = $_POST["confirmpassword"];
		$duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' OR email = '$email'");
		if(mysqli_num_rows($duplicate) > 0){
			echo "<script>alert('Username or Email is already taken');</script>";
		}
		else{
			if($password == $confirmpassword){
				$query = "INSERT INTO tb_user VALUES('', '$name', '$username', '$email', '$password')";
				mysqli_query($conn,$query);
				echo "<script>alert('Registration Successful');</script>";
			}
			else{
				echo "<script>alert('Passwords do not match');</script>";
			}
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Computers</title>
   <link rel="stylesheet" href="css/signup.css">
   <script type="text/javascript" src="validate.js"></script>
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

	<h1>Register</h1>
	<h2>Please fill in this form to create an account!</h2>

		
	<form class="" action="" method="post" autocomplete="off">
	<div class="signupcontainer">
		<label for="name"></label>
		<input type="text" name="name" id="name" required placeholder="Name:" onchange="chkName()"><br>
		<label for="username"></label>
		<input type="text" name="username" id="username" required placeholder="Username:"><br>
		<label for="email"></label>
		<input type="email" name="email" id="email" required placeholder="Email:" onchange="chkEmail()"><br>
		<label for="password"></label>
		<input type="password" name="password" id="password" required placeholder="Password:" onchange="chkPassword()"><br>
		<label for="confirmpassword"></label>
		<input type="password" name="confirmpassword" id="confirmpassword" required placeholder="Re-enter password:"><br>
		<br>
		
		<div><label for="submit"></label>
        <input type="submit" name="submit" id="submit" value="Register"></div>
	</form>
		<br><hr style="border-top:solid 1px; width: 19em;" >
		<a href="login.php" class="hyperlinks">Back to Sign In</a>   
    </div>
      
   
	<footer class="footer">
		<h3>COPYRIGHT &copy; 2022 Gisul Techonology <a href="mailto:Gisul@technology.com.sg">Gisul@technology.com.sg</a></h3>
	</footer>

       
</body>
</html>