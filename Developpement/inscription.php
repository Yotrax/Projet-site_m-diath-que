<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">    <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
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
<!--
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

 -->

 <div id="container">
            <!-- zone de connexion -->
            
            <form action="verification.php" method="POST">
                <h1>Inscription</h1>
                
                <label><b>Nom</b></label>
                <input type="text" placeholder="Entrez votre nom" name="nom" required>

                <label><b>Prénom</b></label>
                <input type="text" placeholder="Entrez votre prénom" name="prenom" required>

                <label><b>Nom de compte</b></label>
                <input type="text" placeholder="Entrez votre nom de compte" name="login" required>

                <label><b>Adresse e-mail</b></label>
                <input type="text" placeholder="Entrez votre email" name="email" required>

                <label><b>Confirmez votre adresse e-mail></label>
                <input type="text" placeholder="Entrez votre email" name="emailverif" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrez votre mot de passe" name="mdp" required>

                <label><b>Confirmez votre mot de passe</b></label>
                <input type="password" placeholder="Entrez votre mot de passe" name="mdpverif" required>

                

                <input type="submit" id='submit' value='LOGIN' >
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
            </form>
        </div>

</body>
</html>