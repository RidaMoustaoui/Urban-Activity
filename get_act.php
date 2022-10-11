<?php
include('connect.php');

try {
    $sql = "SELECT * FROM activity";
    $res = mysqli_query($conn, $sql);

    if (!$res) {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }

    $row = mysqli_fetch_array($res, MYSQLI_NUM);

} catch (Exception $e) {
    echo $e;
}

try {
    $sql1 = "SELECT COUNT(ActId) FROM activity";
    $res1 = mysqli_query($conn, $sql1);

    if (!$res1) {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }

    $row1 = mysqli_fetch_array($res1, MYSQLI_NUM);

} catch (Exception $e) {
    echo $e;
}

?>