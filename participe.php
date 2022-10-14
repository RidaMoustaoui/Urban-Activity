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
                echo '<script type="text/javascript">';
        echo ' alert("Vous avez participé à l\'activité.")';  //not showing an alert box.
        echo '</script>';
                include('index.php');
            } else {
                echo '<script type="text/javascript">';
        echo ' alert("Erreur : Vous participez déjà à cette activité.")';  //not showing an alert box.
        echo '</script>';
                include('index.php');
            }
        } else {
            echo '<script type="text/javascript">';
        echo ' alert("Erreur : Nombre max de participants atteint.")';  //not showing an alert box.
        echo '</script>';
            include('index.php');
        }
    } else {
        echo '<script type="text/javascript">';
        echo ' alert("Erreur : Veuillez réessayer.")';  //not showing an alert box.
        echo '</script>';
        include('index.php');
    }
} catch (Exception $e) {
    echo $e;
}
