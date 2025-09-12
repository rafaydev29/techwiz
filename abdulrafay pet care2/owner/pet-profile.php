<?php include '../connection.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pet Profile</h1>
    <form action="" method="post">
        <label for="pet-name">Pet Name:</label>
        <input type="text" id="pet-name" name="pet-name" required><br>

        <label for="pet-type">Pet Type:</label>
        <input type="text" id="pet-type" name="pet-type" required><br>

        <label for="pet-breed">Pet Breed:</label>
        <input type="text" id="pet-breed" name="pet-breed" required><br>

        <label for="pet-age">Pet Age:</label>
        <input type="number" id="pet-age" name="pet-age" required><br>

        <label for="pet-gender">Pet Gender:</label>
        <input type="text" id="pet-gender" name="pet-gender" required><br>

         <button name="btn">submit</button>
    </form>
    <?php
    if (isset($_POST["btn"])) {
       $name = $_POST['pet-name'];
       $type = $_POST['pet-type'];
       $breed = $_POST['pet-breed'];
       $age = $_POST['pet-age'];
       $gender = $_POST['pet-gender'];

            
        $query2 = "INSERT INTO owner_pet_profile (name, type, breed, age, gender) 
                    VALUES ('$name', '$type', '$breed', '$age', '$gender')";
        $result2 = mysqli_query($connection, $query2);

        if ($result2) {
            echo "<script>alert('your pet has been registered sucessfully !');</script>";
            echo "<script>window.location.href='./dashboard.php';</script>";
            exit();
        } else {
            echo "<script>alert('Registration failed!');</script>";
        }
        }
    ?>

   
</body>
</html>