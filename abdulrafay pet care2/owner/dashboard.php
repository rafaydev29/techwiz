<?php include '../connection.php' ?>
<?php 
  $query = "SELECT * FROM owner_pet_profile";
  $result1 = mysqli_query($connection, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Owner Dashboard</title>
</head>
<body>
    <h1>Welcome to the Owner Dashboard</h1>
    <div class="sidebar">
        <a href="./dashboard.php">Dashboard</a>
        <a href="./pet-profile.php">Pet Profile</a>
        <a href="./health-record.php">Health Record</a>
        <a href="./appointment.php">Appointments</a>
        <!-- <a href="./products.php">Products</a> -->
        <a href="./cart.php">Cart</a>
    </div>
    <div class="content">
        <p>You can manage your pet profile, view health records, and schedule appointments from here.</p>
    </div>

    <?php 
 
    while ($fetch = mysqli_fetch_assoc($result1)) {
        echo "<div class='pet-profile'>";
        echo "<h3>" . $fetch['name'] . "</h3>";
        echo "<p>Type: " . $fetch['type'] . "</p>";
        echo "<p>Breed: " . $fetch['breed'] . "</p>";
        echo "<p>Age: " . $fetch['age'] . "</p>";
        echo "<p>Gender: " . $fetch['gender'] . "</p>";
        echo "<p>Health Record: " . $fetch['health-records'] . "</p>";
        echo "</div>";
    }
    ?>
</body>
</html>
