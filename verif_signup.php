<?php

$mail = $_POST['Mail'];
$mdp = $_POST['Mdp'];
$nom = $_POST['Nom'];
$prenom= $_POST['Prenom'];

if($mail=="" or $mdp=="" or $nom=="" or $prenom=="")
{
    echo "Erreur : Veuillez saisir un mail, un mot de passe, un nom et un prenom.";
    include('signup.php');
}
else
{
    include('connect.php');

try {
    $sql = "INSERT INTO users (Mail, Mdp, Nom, Prenom) VALUES ('".$mail."', '".$mdp."', '".$nom."', '".$prenom."');";
    if(mysqli_query($conn, $sql))
    {
        echo "L'utilisateur a été créé.";
        include('login.php');
    }
    else
    {
        echo "Erreur : Problème dans la requête.";
        include('signup.php');
    }
    
} catch (Exception $e) {
    echo $e;
}
}

?>