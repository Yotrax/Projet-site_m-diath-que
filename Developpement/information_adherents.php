<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>information des adhérents</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>

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

$reponse1 = $bdd->query('SELECT * FROM adherent');

while ($donnees = $reponse1->fetch())
{
    ?>

    <table border=1>
        <tr>
            <td><Strong>Nom</Strong></td>
            <td><?php echo $donnees['nom']; ?></td>
        </tr>

        <tr>
            <td><Strong>Prénom</Strong></td>
            <td><?php echo $donnees['prenom']; ?></td>
        </tr>

        <tr>
            <td><Strong>Ville</Strong></td>
            <td><?php echo $donnees['ville']; ?></td>
        </tr>

        <tr>
            <td><Strong>Adresse</Strong></td>
            <td><?php echo $donnees['adresse']; ?></td>
        </tr>

        <tr>
            <td><Strong>Nom de compte</Strong></td>
            <td><?php echo $donnees['login']; ?></td>
        </tr>

        <tr>
            <td><Strong>Mot de passe</Strong></td>
            <td><?php echo $donnees['mdp']; ?></td>
        </tr>

        <tr>
            <td><Strong>Adresse email</Strong></td>
            <td><?php echo $donnees['email']; ?></td>
        </tr>
    
    </table>
    <br>
    <br>


<?php

}
    $reponse1->closeCursor();

?>
</body>
</html>