<?php

if(!isset($_SESSION['Mail']))
  {
    session_start();
  }

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
    $sql = "INSERT INTO activity (Titre, Description, ActLien, DateAct, MaxPart, Image, UserID) VALUES ('".$titre."', '".$desc."', '".$actlien."', '".$dateact."', '".$maxpart."', '".$img."', '".$_SESSION['UserID']."');";
    if(mysqli_query($conn, $sql))
    {
        $sql2 = "SELECT MAX(ActId) FROM activity";
              $res2 = mysqli_query($conn, $sql2);
          
              if (!$res2) {
                  printf("Error: %s\n", mysqli_error($conn));
                  exit();
              }
              
              while($row2=mysqli_fetch_array($res2))
              {
                $sql1 = "INSERT INTO participe (UserID, ActId) VALUES ('".$_SESSION['UserID']."','".$row2[0]."')";
                if(mysqli_query($conn, $sql1))
                {
                    
                }
              }

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