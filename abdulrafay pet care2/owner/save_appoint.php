<?php
include '../connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $vet_id = $_POST['vet_id'];
    $owner_name = $_POST['owner_name'];
    $pet_name = $_POST['pet_name'];
    $reason = $_POST['reason'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    $query = "INSERT INTO appointments (vet_id, owner_name, pet_name, reason, date, time)
              VALUES ('$vet_id', '$owner_name', '$pet_name', '$reason', '$date', '$time')";

    if (mysqli_query($connection, $query)) {
        echo "Appointment booked successfully!";
        echo "<br><a href='./view_appointements.php'>View Your Appointments</a>";
    } else {
        echo "Error: " . mysqli_error($connection);
    }
}
?>
