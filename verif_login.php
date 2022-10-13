<?php

$mail = str_replace("'", "\'", $_POST['login']);
$mdp = str_replace("'", "\'", $_POST['mdp']);

include('connect.php');

try {
    $sql = "SELECT Mail, Mdp, Nom, Prenom, UserID FROM users WHERE Mail='" . $mail . "' AND Mdp='" . $mdp . "'";
    $res = mysqli_query($conn, $sql);

    if (!$res) {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }

    $row = mysqli_fetch_array($res, MYSQLI_NUM);
    if ($mail == "" or $mdp == "") {
        echo "Echec de connexion.";
        include("index.php");
        exit;
    } else {
        if ($row[0] == $mail and $row[1] == $mdp) {
            session_start();
            $_SESSION['Mail'] = $row[0];
            $_SESSION['Nom'] = $row[2];
            $_SESSION['Prenom'] = $row[3];
            $_SESSION['UserID'] = $row[4];
            $_SESSION["time"] = time();
            include("index.php");
        } else {
            echo "Echec de connexion.";
            include("index.php");
            exit;
        }
    }
} catch (Exception $e) {
    echo $e;
}

?>