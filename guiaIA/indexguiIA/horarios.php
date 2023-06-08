<?php 
    session_start();

    $curso = $_SESSION['curso'];

    if($curso == "IA23"){
        header('location: hIA23.php');
    }
    if($curso == "IA22"){
        header('location: hIA22.php');
    }
    if($curso == "IA21"){
        header('location: hIA21.php');
    }
?>