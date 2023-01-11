<?php

include 'connect.php';

if (isset($_POST['submit'])) {

// Waardes van formulier ophalen en aan variabele geven
    $woord = $_POST['woord'];
    $zindeel1 = $_POST['zindeel1'];
    $zindeel2 = $_POST['zindeel2'];
   
        // Query maken om data op de juiste manier toe te voegen aan tabel
        $query = "INSERT INTO woorden (woord, zindeel1, zindeel2) VALUES ('$woord', '$zindeel1', '$zindeel2')";

        // Voer de query uit
        $conn->exec($query);

// Weer teruggaan naar index.php
// Ook te voorkomen dat een rij nog een keer wordt toegevoegd bij een refresh
        header("location: index.php");
    }

