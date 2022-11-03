<?php

	include 'db.php';
	
	if(empty($_SESSION["id"])){
		header("Location: login.php");
	}
	else if(isset($_POST['order_btn'])){   
		$cart_query = mysqli_query($conn, "SELECT * FROM `cart`");
		if(mysqli_num_rows($cart_query)==0){
		echo '<script type="text/javascript"> alert ("Cart is empty!") </script>';
		}
		else{
			if(!empty($_SESSION["id"])){
				mysqli_query($conn, "DELETE FROM `cart`");
			}
	
			$total1 = 0;
			$total = 0;
			if(mysqli_num_rows($cart_query) > 0){	
				while($fetch_cart = mysqli_fetch_assoc($cart_query)){
				
					$name = $fetch_cart['name'];
					$price = $fetch_cart['price'];
					$quantity = $fetch_cart['quantity'];
					$total_price = $price * $quantity;
					$image = $fetch_cart['image'];
					
					number_format($total_price);
					$total = $total1 += $total_price;
					
					$update_cart_query = mysqli_query($conn, "INSERT INTO `checkout` VALUES('', '$name', '$price', '$quantity', '$total_price', '$image', '')");
				}
				$update_cart_query = mysqli_query($conn, "INSERT INTO `checkout` VALUES('', '-', '-', '-', '-', '-', '$total')");
			}
			header('location:payment.php');
	}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Homepage</title>
   <link rel="stylesheet" href="css/checkout.css">
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


<h1>Order Confirmation</h1>

<div class="content">
<form action="" method="post">
		<?php
         $select_cart = mysqli_query($conn, "SELECT * FROM `cart`");
         $total1 = 0;
         $total = 0;
         if(mysqli_num_rows($select_cart) > 0){	
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
            $total_price = $fetch_cart['price'] * $fetch_cart['quantity'];
            number_format($total_price);
            $total = $total1 += $total_price;
		?>
			<br><span class="total"><?= $fetch_cart['name']; ?> &nbsp x<?= $fetch_cart['quantity']; ?>   <img src="<?php echo $fetch_cart['image']; ?>" height="100" alt="">
			</span><br>
		<?php
			}
		}
		else{
			echo "<div class='empty'><span>Your Cart Is Empty!</span></div>";
		}
		?>
      <span class="total"><hr size="5">Total: $<?= $total; ?></hr></span><br><br>
	  
      <input type="submit" value="Proceed to Check Out" name="order_btn" class="btn">
	  <a href="cart.php" style="text-align:right" class="hyperlinks">Back to Cart</a>   
   </form>
</div>
	
	<footer class="footer">
		<h3>COPYRIGHT &copy; 2022 Gisul Techonology <a href="mailto:Gisul@technology.com.sg">Gisul@technology.com.sg</a></h3>
	</footer>

</body>
</html>