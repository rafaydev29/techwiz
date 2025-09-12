<?php 
include '../connection.php';
$query1="SELECT * FROM vet_profile";
$query2="SELECT * FROM shelter_registration";
$run1=mysqli_query($connection,$query1);
$run2=mysqli_query($connection,$query2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>search for a vet</h1>
    <form action="" method="post">
        <input type="text" name="search" placeholder="search for a vet">
        <button type="submit">search</button>
    </form>

    <div class="container">
        <h1>vets</h1>   
        <div class="card">
           <?php while($fetch=mysqli_fetch_assoc($run1)){
            echo "<h2>Name</h2> " . $fetch['name'];
            echo "<h3>Email</h3> " . $fetch['email'];
            echo "<h3>Phone</h3> " . $fetch['phone'];
            echo "<h3>Address</h3> " . $fetch['address'];
            echo "<h3>about me</h3>"."<p>" . $fetch['about'] . "</p>";
            echo "<button onclick=\"window.location.href='../owner/appoint.php?vet_id=" . $fetch['id'] . "'\">Appoint him</button>";
           } 
           ?>
        </div>

    </div>
</body>
</html>