<?php
include '../connection.php';
$result = mysqli_query($connection, "SELECT a.*, v.name AS vet_name 
                                     FROM appointments a 
                                     JOIN vet_profile v ON a.vet_id = v.id");

while ($row = mysqli_fetch_assoc($result)) {
    echo "<div class='appt'>
            <h2>Vet: ".$row['vet_name']."</h2>
            <p>Owner: ".$row['owner_name']."</p>
            <p>Pet: ".$row['pet_name']."</p>
            <p>Date: ".$row['date']." | Time: ".$row['time']."</p>
            <p>Reason: ".$row['reason']."</p>
            <p>Status: ".$row['status']."</p>
          </div><hr>";
}
?>
<style>
    .appt{
        border: 1px solid black;
        padding: 10px;
        margin-bottom: 10px;
    }
</style>
