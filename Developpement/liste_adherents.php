<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
<h2>Voici la liste de tout les adhérents !</h2>

<?php
// Sous WAMP (Windows)
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=médiathèque;charset=utf8', 'root', '');
}

catch(Exception $e)
{
    die('Erreur : ' .$e->getMessage());
}

$reponse1 = $bdd->query('SELECT nom, prenom FROM adherent ORDER BY nom');

while ($donnees = $reponse1->fetch())
{
    echo $donnees['nom'] . ' ' . $donnees['prenom'] . '</br>';
}

$reponse1->closeCursor();

?>
    
</body>
</html>