<?php include "../connection.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="name">Name</label>
        <input type="text" name="name" placeholder="enter your name" required>

        <label for="email">Email</label>
        <input type="text" name="email" placeholder="Enter Email" required>

        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Enter Password" required>             

        <label for="number">Number</label>
        <input type="number" name="contact" placeholder="Enter contact no" required>

        <label for="address">Address</label>
        <input type="text" name="address" placeholder="Enter Address" required>

        <button name="btn">Login</button>
    </form>

    <?php
    if (isset($_POST["btn"])) {
        $name = trim($_POST["name"]);
        $email = trim($_POST["email"]);
        $number = trim($_POST["contact"]);
        $address = trim($_POST["address"]);
        $password = trim($_POST["password"]);


        $sql = "SELECT * FROM owner_registration 
                WHERE email='$email' 
                AND number='$number'  
                AND password='$password'";

        $run = mysqli_query($connection, $sql);

        if ($run) {
            if (mysqli_num_rows($run) > 0) {
                header("Location:./dashboard.php");
                exit();
            } else {
                header("Location:register.php");
                exit();
            }
        } else {
            echo "Query failed: " . mysqli_error($connection);
        }
    }
    ?>
</body>
</html>
