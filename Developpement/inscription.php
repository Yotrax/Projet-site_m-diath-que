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
<?php


try
{
    $bdd = new PDO('mysql:host=localhost;dbname=médiathèque;charset=utf8', 'root', '');
}

catch(Exception $e)
{
    die('Erreur : ' .$e->getMessage());
}




?>

<h3>Inscription</h3>
 
 
 <p>Pour vous inscrire, veuillez remplir les champs suivants :</p>
  
 
 Nom :	<INPUT TYPE="TEXT" SIZE="40" NAME="nom"><br><br>
 Prenom :	<INPUT TYPE="TEXT" SIZE="40" NAME="prenom"><br><br>
 Login : choisir un surnom	<INPUT TYPE="TEXT" SIZE="40" NAME="login"><br><br>
 Adresse e-mail :	<INPUT TYPE="TEXT" SIZE="40" NAME="email"><br><br>
 Confirmer adresse e-mail :	<INPUT TYPE="TEXT" SIZE="40" NAME="emailverif"><br><br>
 Entrer un mot de passe :	<INPUT TYPE="TEXT" SIZE="40" NAME="mdp"><br><br>
 Confirmer le mot de passe :	<INPUT TYPE="TEXT" SIZE="40" NAME="mdpverif"><br><br>
 <br><br>
 <input type="submit" name="envoi" value="Valider" />

</body>
</html>