<?php
include "../connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>your profile</h1>
    <form action="" method="POST">
        <label for="name">name</label>
        <input type="text" name="name" id="name">

        <label for="email">email</label>
        <input type="email" name="email" id="email">

        <label for="phone">phone</label>
        <input type="text" name="phone" id="phone">

        <label for="address">address</label>
        <input type="text" name="address" id="address">

        <label for="city">city</label>
        <input type="text" name="city" id="city">

        <label for="state">state</label>
        <input type="text" name="state" id="state">

        <label for="zip">zip</label>
        <input type="text" name="zip" id="zip">

        <label for="country">country</label>
        <input type="text" name="country" id="country">

        <label for="specialty">specialty</label>
        <input type="text" name="specialty" id="specialty">

        <label for="years_of_experience">years of experience</label>
        <input type="text" name="years_of_experience" id="years_of_experience">

        <label for="about">about</label>
        <textarea name="about" id="about" cols="30" rows="10"></textarea>

        <button name="btn">submit</button>
    </form>

    <?php
     if(isset($_POST['btn'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $zip = $_POST['zip'];
        $country = $_POST['country'];
        $specialty = $_POST['specialty'];
        $years_of_experience = $_POST['years_of_experience'];
        $about = $_POST['about'];

        $query="INSERT INTO vet_profile(name,email,phone,address,city,state,zip,country,speciality,years_of_xp,about) VALUES('$name','$email','$phone','$address','$city','$state','$zip','$country','$specialty','$years_of_experience','$about')";
        $run=mysqli_query($connection,$query);
        if($run){
            echo "<script>alert('your profile has been updates');</script>";
            echo "<script>window.location.href='./dashboard.php';</script>";
        
        } else{
            echo "<script>alert('your profile has not been updated');</script>";
            echo "<script>window.location.href='./vet-profile.php';</script>";
            exit();
        }
    }

    ?>
</body>
</html>
