<?php
   include('database.php');

   session_start();
   
   $player = $_SESSION['pseudo'];
   
   $ses_sql = mysqli_query($db,"select * from players where pseudo = '$player' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $id = $row['id_player'];
   $pseudo = $row['pseudo'];
   $email = $row['email'];
   $password = $row['password'];
   $country = $row['country'];
   
   if(!isset($_SESSION['pseudo'])){
      header("location: connexion.php");
      die();
   }
?>