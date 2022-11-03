<?php

@include 'db.php';


if(isset($_POST['add_to_cart'])){

   $name = $_POST['name'];
   $price = $_POST['price'];
   $image = $_POST['image'];
   $quantity = 1;

   $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$name'");

   if(mysqli_num_rows($select_cart) > 0){
	echo '<script type="text/javascript"> alert ("Item already added to cart") </script>';
 }else{
	$insert_product = mysqli_query($conn, "INSERT INTO `cart`(name, price, image, quantity) VALUES('$name', '$price', '$image', '$quantity')");
	echo '<script type="text/javascript"> alert ("Item added to cart succesfully") </script>';
 }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Homepage</title>
<link rel="stylesheet" href="css/acc.css">
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
<div class="top">
	<img src="images/homebg.jpg" style="width:100%;">
	<div class="centeredtop" style="font-size:270%;">WELCOME TO GISUL™
</div>
</div>

<div class="intro">
	<p>기술, (GISUL), means Technology in Korean. It's hard to stay up to date with the ever-growing, forever-changing tech space.<br>
	We all love the arrival of a new gadget, something that will make life more convenient and 
	entertaining for yourself, or help you out with a clever gift idea for a family or friend. <br>
	That’s why we’ve put together some of the most interesting and innovative bits of tech out there 
	right now in our list of the coolest, new gadgets we think you’ll love. <br>Feel free to browse through
	some of our popular products below and also navigate across our variety of products on our navigation bar above!
	</p>
</div>

<div class="product">
<div class="box-container">
      <?php
      
      $select_product = mysqli_query($conn, "SELECT * FROM `bestsellers`");
      if(mysqli_num_rows($select_product) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_product)){
      ?>

      <form action="" method="post">
         <div class="box">
			<div class="img_wrap">
			<img src="<?php echo $fetch_product['image']; ?>" alt="" name="image" class="img_img">
			<p class="img_description"><?php echo $fetch_product['description']; ?></p>
			</div>
			
            <h3><?php echo $fetch_product['name']; ?></h3>
            <div class="price">$<?php echo $fetch_product['price']; ?></div>
            <input type="hidden" name="name" value="<?php echo $fetch_product['name']; ?>">
            <input type="hidden" name="price" value="<?php echo $fetch_product['price']; ?>">
            <input type="hidden" name="image" value="<?php echo $fetch_product['image']; ?>">
            <input type="submit" class="btn" value="Add To Cart" name="add_to_cart">
         </div>
      </form>

      <?php
         };
      };
      ?>
</div>

<div class="aboutus">
	<h4>About Us</h4>
	<p>GISUL™ is a creation of two individuals being passionate about the advancement of technology
	in our modern world. <br>Our name is inspired by the korean characters, 기술, which means Techonology.<br>
	Equipped with smart devices and accessories that are in trend with modern times,
	we hope to deliver a great user experience by deep understanding what people want and love.<br> We want
	our customers to be happy and satisfied with our services here at GISUL™. 
	</p>
	<img src="images/gisul-black.png" style="width:15%;">
</div>

	<footer class="footer">
		<h3>COPYRIGHT &copy; 2022 Gisul Techonology <a href="mailto:Gisul@technology.com.sg">Gisul@technology.com.sg</a></h3>
	</footer>
</div>

</body>
</html>