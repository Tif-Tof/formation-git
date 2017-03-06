<?php
session_start();
//Connexion à la base de donnée
require('bdd_connect.php');


//Requête qui selectionne toutes les information d'un users via son pseudo
$req = "SELECT * FROM users WHERE pseudo ='".$_POST['pseudo']."'"; //recupp mdp req


$result = mysql_query($req);
$row = mysql_fetch_assoc($result);


///////////////////// FORMULAIRE DE CONNEXION ///////////////////

//Verification du formulaire de connexion_user qui permet de se connecter 
if(isset($_POST) && $_POST['pseudo'] == $row['pseudo'] && $_POST['email'] == $row['email'] && $_POST['pass'] == $row['password'])
{   
    //Si la verification se passe bien alors on transmet toutes les informations en session

    $_SESSION['id'] = $row['id'];
    $_SESSION['pseudo'] = $row['pseudo'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['pass'] = $row['password'];
    // Session qui permet de savoir si un utilisateur est authentifié 
    $_SESSION['auth'] = true;
    //die("ici connexion");
    
    //var_dump($_SESSION);    
    // On renvoie l'utilisateur sur la page d'accueil avec toutes les donnée en session   
    header("Location: index.php");
    
}else
{
    $_SESSION['auth'] = false;
    header("Location: connexion_user.php?e=1");
}


var_dump($_POST);



///////////////////// DECONNEXION ///////////////////

// Vérification de l'utilisateur si il est deconnecté 
if(isset($_GET['logout']) && $_GET['logout'] == 0)
{
    die("ici logout");
    //var_dump($_GET);
    // initialise la session auth à false
    $_SESSION['auth'] = false;
    // Destruction de la session
    session_destroy();
    //Redirection vers la page index.php
    header("Location: index.php");
}

if(isset($_GET['watch']) && $_GET['watch'] == true)
{
    echo "on affiche une video";
}






?>
