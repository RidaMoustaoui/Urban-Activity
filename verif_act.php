<?php

if (!isset($_SESSION['Mail'])) {
    session_start();
}

$titre = str_replace("'", "\'", $_POST['Titre']);
$desc = str_replace("'", "\'", $_POST['Desc']);
$actlien = str_replace("'", "\'", $_POST['ActLien']);
$dateact = str_replace("'", "\'", $_POST['DateAct']);
$maxpart = str_replace("'", "\'", $_POST['MaxPart']);
$img = str_replace("'", "\'", $_POST['Img']);

if ($titre == "" or $dateact == "" or $maxpart == "") {
    echo '<script type="text/javascript">';
        echo ' alert("Erreur : Veuillez saisir un titre, une date de début et un nombre max de participants.")';  //not showing an alert box.
        echo '</script>';
    include('house.php');
} else {
    include('connect.php');

    try {
        if ($_SESSION['UserID'] > 0)
            $sql = "INSERT INTO activity (Titre, Description, ActLien, DateAct, MaxPart, Image, UserID) VALUES ('" . $titre . "', '" . $desc . "', '" . $actlien . "', '" . $dateact . "', '" . $maxpart . "', '" . $img . "', '" . $_SESSION['UserID'] . "');";
        if (mysqli_query($conn, $sql)) {
            $sql2 = "SELECT MAX(ActId) FROM activity";
            $res2 = mysqli_query($conn, $sql2);

            if (!$res2) {
                printf("Error: %s\n", mysqli_error($conn));
                exit();
            }

            if ($row2 = mysqli_fetch_array($res2)) {
                if ($row2[0] > 0) {
                    $sql1 = "INSERT INTO participe (UserID, ActId) VALUES ('" . $_SESSION['UserID'] . "','" . $row2[0] . "')";
                    if (mysqli_query($conn, $sql1)) {
                    }
                }
                else
                {
                    echo '<script type="text/javascript">';
        echo ' alert("Erreur : Problème dans la requête.")';  //not showing an alert box.
        echo '</script>';
                    include("house.php");
                }
            }

            echo '<script type="text/javascript">';
        echo ' alert("L\'activité a été créée.")';  //not showing an alert box.
        echo '</script>';
            include('house.php');
        } else {
            echo '<script type="text/javascript">';
        echo ' alert("Erreur : Problème rencontré pendant la création de l\'activité.")';  //not showing an alert box.
        echo '</script>';
            include('house.php');
        }
    } catch (Exception $e) {
        echo $e;
    }
}
