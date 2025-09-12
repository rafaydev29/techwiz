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
    <title>Document</title>
</head>
<body>
    <h1>Health Records</h1>
    <div class="health-records">
        <h2>Pet Health Records</h2>
        <p>View and manage your pet's health records, including vaccinations, medications, and other important information.</p>
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
        // echo "<p>Edit: <a href='edit-health.php?id=" . $fetch['id'] . "'>Edit</a></p>";
        echo "</div>";
    }
    exit();
    ?>
</body>
</html>