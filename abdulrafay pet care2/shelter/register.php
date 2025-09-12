<?php
  include "../connection.php";  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form action="" method="POST">
        <label for="name">Name</label>
        <input type="text" name="name" placeholder="Enter your name" required>

        <label for="email">Email</label>
        <input type="text" name="email" placeholder="Enter Email" required>

        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Enter Password" required>

        <label for="number">Number</label>
        <input type="number" name="contact" placeholder="Enter contact no" required>

        <label for="address">Address</label>
        <input type="text" name="address" placeholder="Enter Address" required>

        <button name="btn">Register</button>
    </form>

    <?php
    if (isset($_POST["btn"])) {
        $name     = trim($_POST["name"]);
        $email    = trim($_POST["email"]);
        $number   = trim($_POST["contact"]);
        $address  = trim($_POST["address"]);
        $password = trim($_POST["password"]);

    
        $query1 = "SELECT * FROM shelter_registration WHERE password='$password' and email='$email' and number='$number'";
        $result1 = mysqli_query($connection, $query1);

        if (mysqli_num_rows($result1) > 0) {
            echo "<script>alert('User already exists! Redirecting to login...');</script>";
            echo "<script>window.location.href='./login.php';</script>";
            exit();
        } else {
            
            $query2 = "INSERT INTO shelter_registration (name, email, number, address, password ,role) 
                       VALUES ('$name', '$email', '$number', '$address', '$password', 'shelter')";
            $result2 = mysqli_query($connection, $query2);

            if ($result2) {
                echo "<script>alert('You have been registered successfully! Redirecting to dashboard...');</script>";
                echo "<script>window.location.href='./dashboard.php';</script>";
                exit();
            } else {
                echo "<script>alert('Registration failed!');</script>";
            }
        }
    }
    ?>
</body>
</html>
