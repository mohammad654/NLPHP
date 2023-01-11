


<?php
// Query maken om alle rijen uit de tabel taak op te halen
$query = $conn->query("SELECT * FROM woorden");

?>

<!-- Tabel aanmaken in HTML -->
<div class="container">
<table class="table table-bordered border-primary p-2 table-hover ">
    <tr>
        <th>Woord</th>
        <th>zindeel1</th>
        <th>zindeel2</th>
        <th class='text-success text-center'>Update</th>
        <th class='text-danger text-center'>verwijderen</th>
    </tr>

    <!-- While loop die door alle opgehaalde rijen van de tabel taak gaat -->
    <?php while ($row = $query->fetch()) { ?>

    <!-- Alle data van de opgehaalde rij in table row stoppen -->
    <tr>
        <td><?php echo $row['woord']; ?></td>
        <td><?php echo $row['zindeel1']; ?></td>
        <td><?php echo $row['zindeel2']; ?></td>
        <td class="text-center"><a href="update.php?id=<?php echo $row['id']; ?>" class='text-success'><img width="30" height="30" src="img/refresh-svgrepo-com.svg" alt=""></a></td>
        <td class="text-center"><a href="delete.php?id=<?php echo $row['id']; ?>" class='text-danger'><img width="30" height="30" src="img/icon-delete-16.jpg" alt=""></a></td>
    </tr>

    <?php } ?>
</table>
</div>

