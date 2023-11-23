<?php
    session_start();
    $error = "";
    if(isset($_SESSION['errorMsg'])){
        $error = $_SESSION['errorMsg'];
    }
    else{
        unset($error); // ajout à modifier
    }
?>