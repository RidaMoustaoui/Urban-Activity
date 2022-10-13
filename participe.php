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
                echo "Vous avez participé à l'activité";
                include('house.php');
            } else {
                echo "erreur";
                header("Location: house.php");
            }
        } else {
            echo "erreur";
            header("Location: house.php");
        }
    } else {
        echo "erreur";
        header("Location: house.php");
    }
} catch (Exception $e) {
    echo $e;
}
