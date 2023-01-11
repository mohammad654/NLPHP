<?php

include 'connect.php';
include 'header.php';
?>

<h1 class="text-center pt-4">Nederlands C2</h1>
<!-- Formulier om een taak te versturen naar de database en in de taak tabel -->
    <form method="post" action="create.php " class='text-center mb-2 ' >
        <input type="text" placeholder="woord" name="woord" class="form-control"  value="<br>"><br>
        <textarea name="zindeel1" rows="4" cols="10" class="form-control container mb-2"><br><br></textarea>
        <textarea name="zindeel2" rows="4" cols="10" class="form-control container"><br><br></textarea>
        <input type="submit" name="submit" value="Verzenden" class="m-2 btn btn-success"><br>
    </form>
    <br>
    <?php include 'read.php'; ?>
    <?php include 'footer.php'; ?>
