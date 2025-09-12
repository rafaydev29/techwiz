<?php
include '../connection.php';
$query="SELECT * FROM `vet_profile`";
$run=mysqli_query($connection,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to the Vet Dashboard</h1>
    <button onclick="window.location.href='vet-profile.php'">make your profile</button>
    <div class="sidebar">
      <?php while($fetch=mysqli_fetch_assoc($run)){
          echo "<h2>your profile</h2>";
          echo "<h2>Name</h2> " . $fetch['name'];
          echo "<h2>Email</h2> " . $fetch['email'];
          echo "<h2>Phone</h2> " . $fetch['phone'];
          echo "<h2>Address</h2> " . $fetch['address'];
          echo "<h2>City</h2> " . $fetch['city'];
          echo "<h2>State</h2> " . $fetch['state'];
          echo "<h2>Zip</h2> " . $fetch['zip'];
          echo "<h2>Country</h2> " . $fetch['country'];
          echo "<h2>Specialty</h2> " . $fetch['speciality'];
          echo "<h2>Years of Experience</h2> " . $fetch['years_of_xp'];
          echo "<h2>About</h2> " . $fetch['about'];
       }
      ?>
      <h1>your appointments</h1>
    </div>
</body>
</html>
