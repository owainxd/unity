<?php
include("database.php");
// Requête SQL pour récupérer toutes les données de la table "players"
$sql = "SELECT * FROM players";
$result = mysqli_query($db,$sql);
mysqli_close($db);
?>
