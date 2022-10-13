<?php
    if(!isset($_SESSION['Mail']))
    {
      session_start();
    }

    include('connect.php');

try
{   
    if($_POST['getPar'] <= $_Post['getMax'])
    {
        $sql = "INSERT INTO participe (UserID, ActId) VALUES ('".$_SESSION['UserID']."', '".$_POST['getAct']."');";
    if(mysqli_query($conn, $sql))
    {
        echo "Vous avez participé à l'activité";
        include('house.php');
    }
    else
    {
        echo "erreur";
        include('house.php');
    }
    }else
    {
        echo "erreur";
        include('house.php');
    }
    
    
} catch (Exception $e) {
    echo $e;
}

?>