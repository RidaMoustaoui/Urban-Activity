<?php

$mail = $_POST['login'];
$mdp = $_POST['mdp'];

include('connect.php');

try {
    $sql = "SELECT Mail, Mdp FROM users WHERE Mail=".$mail." AND Mdp=".$mdp ;
    $res = mysqli_query($conn, $sql);

    if (!$res) {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }

    // Tableau numérique
    $row = mysqli_fetch_array($res, MYSQLI_NUM);
    echo $row[0] . "yo";
} catch (Exception $e) {
    echo $e;
}
