<?php 
    include '../connection.php' ;
    $query = "SELECT * FROM admin_products";
    $result=mysqli_query($connection,$query);
    // $fetch=mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Admin</h1>
    <p>Welcome to the admin dashboard</p>
    
    <div class="sidebar">
        <a href="./products.php">products</a>
        <a href="./vets.php">vets</a>
        <a href="./owners.php">owners</a>
        <a href="./shelters.php">shelters</a>
    </div>

    <?php while($fetch = mysqli_fetch_assoc($result)){
       echo "<div class='card'>
                     <h2>".$fetch['name']."</h2>
                     <p>".$fetch['description']."</p>
                     <p>".$fetch['price']."</p>
                    </div>";
    } 
    // exit();
    ?>
</body>
</html>
