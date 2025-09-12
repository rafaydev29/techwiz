<?php
include '../connection.php';

$vet_id = $_GET['vet_id'];
$query = "SELECT * FROM vet_profile WHERE id = $vet_id";
$result = mysqli_query($connection, $query);
$vet = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Book Appointment</title>
</head>
<body>
    <h1>Book Appointment with <?php echo $vet['name']; ?></h1>

    <form action="./save_appoint.php" method="POST">
        <input type="hidden" name="vet_id" value="<?php echo $vet['id']; ?>">

        <label>Your Name</label>
        <input type="text" name="owner_name" required><br><br>

        <label>Pet Name</label>
        <input type="text" name="pet_name" required><br><br>

        <label>Reason for Visit</label>
        <textarea name="reason" required></textarea><br><br>

        <label>Date</label>
        <input type="date" name="date" required><br><br>

        <label>Time</label>
        <input type="time" name="time" required><br><br>

        <button type="submit">Confirm Appointment</button>
    </form>
</body>
</html>
