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
   <title>Accessories</title>
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

<div class="product">
<div class="box-container">

      <?php
      $select_product = mysqli_query($conn, "SELECT * FROM `products`");
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
	<footer class="footer">
		<h3>COPYRIGHT &copy; 2022 Gisul Techonology <a href="mailto:Gisul@technology.com.sg">Gisul@technology.com.sg</a></h3>
	</footer>
	


</div>



</body>
</html>