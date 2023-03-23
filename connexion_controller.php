<?php
    include("database.php");
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        // username and password sent from form 
        $pseudo = mysqli_real_escape_string($db,$_POST['pseudo']); 
        $password = mysqli_real_escape_string($db,$_POST['password']); 
    
        $sql = "SELECT * FROM players WHERE pseudo = '$pseudo' and password = '$password'";
        $result = mysqli_query($db,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        # $active = $row['active'];
        $count = mysqli_num_rows($result);
        session_start();
        if($count == 1) {
            $_SESSION['pseudo'] = $pseudo;
            header("location: profile.php");
         }else {
            $error = "Your Pseudo or Password is invalid";
            $_SESSION['errorMsg'] = $error;
            header("location: connexion.php");
         }
    mysqli_close($db);
    }
?>