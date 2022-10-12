<?php

$titre = $_POST['Titre'];
$desc = $_POST['Desc'];
$actlien = $_POST['ActLien'];
$dateact= $_POST['DateAct'];
$maxpart= $_POST['MaxPart'];
$img= $_POST['Img'];

if($titre=="" or $dateact=="" or $maxpart=="")
{
    echo "Veuillez saisir un titre, une date de début, et le nombre max de participants";
    include('creAct.php');
}
else
{
    include('connect.php');

try {
    $sql = "INSERT INTO activity (Titre, Description, ActLien, DateAct, MaxPart, Image) VALUES ('".$titre."', '".$desc."', '".$actlien."', '".$dateact."', '".$maxpart."', '".$img."');";
    if(mysqli_query($conn, $sql))
    {
        echo "l'activité a été créé";
        include('house.php');
    }
    else
    {
        echo "erreur";
        include('creAct.php');
    }
    
} catch (Exception $e) {
    echo $e;
}
}

?>