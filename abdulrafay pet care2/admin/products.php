<?php include '../connection.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Products</h1>
    <p>find the best products for your pets here</p>
    <form action="" method="POST">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required><br>

        <label for="desc">Description</label>
        <textarea id="desc" name="desc" required></textarea><br>

        <label for="price">Price</label>
        <input type="number" id="price" name="price" required><br>

        <button type="submit" name="btn">Add Product</button>
    </form>
</body>
</html>
<?php
    if(isset($_POST['btn'])){
        $name = $_POST['name'];
        $desc = $_POST['desc'];
        $price = $_POST['price'];
    }
?>
<?php
    if(isset($_POST['btn'])){
        $name = $_POST['name'];
        $desc = $_POST['desc'];
        $price = $_POST['price'];
        $sql = "INSERT INTO admin_products (name, description, price) VALUES ('$name', '$desc', '$price')";
        $result = mysqli_query($connection, $sql);
        if($result){
            echo "<script>alert('Product added successfully')</script>";
        }
    }
?>
