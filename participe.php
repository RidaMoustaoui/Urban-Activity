<?php
if (!isset($_SESSION['Mail'])) {
    session_start();
}

include('connect.php');

try {
    if ($_POST['getMax'] > 0 or $_POST['getAct'] > 0) {
        if ($_POST['getPar'] < $_POST['getMax']) {
            $sql = "INSERT INTO participe (UserID, ActId) VALUES ('" . $_SESSION['UserID'] . "', '" . $_POST['getAct'] . "');";
            if (mysqli_query($conn, $sql)) {
                echo "Vous avez participé à l'activité.";
                include('house.php');
            } else {
                echo "Erreur.";
                include('house.php');
            }
        } else {
            echo "Erreur : Nombre max de participants atteint.";
            include('house.php');
        }
    } else {
        echo "Erreur : Veuillez réessayer";
        include('index.php');
    }
} catch (Exception $e) {
    echo $e;
}
