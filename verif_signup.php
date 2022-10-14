<?php

$mail = str_replace("'", "\'", $_POST['Mail']);
$mdp = str_replace("'", "\'", $_POST['Mdp']);
$nom = str_replace("'", "\'", $_POST['Nom']);
$prenom = str_replace("'", "\'", $_POST['Prenom']);

if($mail=="" or $mdp=="" or $nom=="" or $prenom=="")
{
    echo '<script type="text/javascript">';
    echo ' alert("Erreur : Veuillez saisir un mail, un mot de passe, un nom et un prenom.")';  //not showing an alert box.
    echo '</script>';
    include('signup.php');
}
else
{
    include('connect.php');

try {
    $sql = "INSERT INTO users (Mail, Mdp, Nom, Prenom) VALUES ('".$mail."', '".$mdp."', '".$nom."', '".$prenom."');";
    if(mysqli_query($conn, $sql))
    {
        echo '<script type="text/javascript">';
        echo ' alert("Erreur : L\'utilisateur a été créé.")';  //not showing an alert box.
        echo '</script>';
        include('login.php');
    }
    else
    {
        echo '<script type="text/javascript">';
        echo ' alert("Erreur : Problème dans la requête.")';  //not showing an alert box.
        echo '</script>';
        include('signup.php');
    }
    
} catch (Exception $e) {
    echo $e;
}
}

?>