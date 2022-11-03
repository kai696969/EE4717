<?php

@include 'db.php';

if(isset($_POST['update_update_btn'])){
   $update_value = $_POST['update_quantity'];
   $update_id = $_POST['update_quantity_id'];
   $update_quantity_query = mysqli_query($conn, "UPDATE `cart` SET quantity = '$update_value' WHERE id = '$update_id'");
   if($update_quantity_query){
      header('location:cart.php');
   };
};

if(isset($_GET['remove'])){
   $remove_id = $_GET['remove'];
   mysqli_query($conn, "DELETE FROM `cart` WHERE id = '$remove_id'");
   header('location:cart.php');
};

if(isset($_GET['delete_all'])){
   mysqli_query($conn, "DELETE FROM `cart`");
   header('location:cart.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>shopping cart</title>


   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <link rel="stylesheet" href="css/cart.css">

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
    </div>
   </nav>
</header>

<div class="container">

<section class="shopping-cart">
<h1>Your Shopping Cart</h1>
<img src="images/shoppingcart.jpg" style="width: 100%">
   <table>
      <thead>
         <th></th>
         <th>Name</th>
         <th>Price</th>
         <th>Quantity</th>
         <th>Total price</th>
         <th>Action</th>
      </thead>

      <tbody>

         <?php 
         
         $select_cart = mysqli_query($conn, "SELECT * FROM `cart`");
         $total = 0;
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
         ?>

         <tr>
            <td><img src="<?php echo $fetch_cart['image']; ?>" height="100" alt=""></td>
            <td><?php echo $fetch_cart['name']; ?></td>
            <td>$<?php echo number_format($fetch_cart['price']); ?></td>
            <td>
               <form action="" method="post">
                  <input type="hidden" name="update_quantity_id"  value="<?php echo $fetch_cart['id']; ?>" >
                  <input type="number" name="update_quantity" min="1"  value="<?php echo $fetch_cart['quantity']; ?>" >
                  <input type="submit" value="Update" name="update_update_btn">
               </form>   
            </td>
            <td>$<?php $sub_total = $fetch_cart['price'] * $fetch_cart['quantity']; 
						echo number_format($sub_total) ?></td>
            <td><a href="cart.php?remove=<?php echo $fetch_cart['id']; ?>" onclick="return confirm('remove item from cart?')" class="remove-btn"> <i class="fas fa-trash"></i> Remove</a></td>
         </tr>
         <?php
           $total += $sub_total;  
            };
         };
         ?>
         <tr class="table-bottom">
            <td><a href="acc.php" class="option-btn" style="margin-top: 0;" >Continue shopping</a></td>
            <td colspan="3">Total</td>
            <td>$<?php echo number_format($total); ?></td>
            <td><a href="cart.php?delete_all" class="remove-btn"> <i class="fas fa-trash"></i> Remove All </a></td>
         </tr>

      </tbody>

   </table>

   <div class="checkout-btn">
      <a href="checkout.php" class="btn">Confirm Order</a>
   </div>

</section>
</div>
	<footer class="footer">
		<h3>COPYRIGHT &copy; 2022 Gisul Techonology <a href="mailto:Gisul@technology.com.sg">Gisul@technology.com.sg</a></h3>
	</footer>

</body>
</html>