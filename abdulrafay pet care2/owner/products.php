<?php 
session_start();
include '../connection.php';

$query = "SELECT * FROM admin_products";
$result = mysqli_query($connection, $query);

while($fetch = mysqli_fetch_assoc($result)){
   echo "
   <div class='card'>
       <h2>".$fetch['name']."</h2>
       <p>".$fetch['description']."</p>
       <p>Price: ".$fetch['price']."</p>

       <form action='add_to_cart.php' method='POST'>
           <input type='hidden' name='product_id' value='".$fetch['id']."'>
           <input type='hidden' name='name' value='".$fetch['name']."'>
           <input type='hidden' name='price' value='".$fetch['price']."'>
           <button type='submit'>Add to Cart</button>
       </form>
   </div>";
}
?>
