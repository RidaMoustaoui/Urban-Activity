<?php

$mail = $_POST['login'];
$mdp = $_POST['mdp'];

include('connect.php');

try {
    $sql = "SELECT Mail, Mdp FROM users WHERE Mail='" . $mail . "' AND Mdp='" . $mdp . "'";
    $res = mysqli_query($conn, $sql);

    if (!$res) {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }

    $row = mysqli_fetch_array($res, MYSQLI_NUM);
    if ($mail == "" or $mdp == "") {
        echo "Echec de connexion";
        header("Location: login.php");
        exit;
    } else {
        if ($row[0] == $mail and $row[1] == $mdp) {
            session_start();
            $_SESSION['Mail'] = $row[0];
            $_SESSION["time"] = time();
            include("index.php");
        } else {
            echo "Echec de connexion";
            header("Location: login.php");
            exit;
        }
    }
} catch (Exception $e) {
    echo $e;
}

?>