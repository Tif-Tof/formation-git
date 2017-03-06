<?php
session_start();
?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partage ta video</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container-fluid container_style">
    <div class="container">
        <div class="row header">
            <div class="col-lg-4"><h1 class="logo">Partage ta video</h1></div>
            
            <?php
            require("bdd_connect.php");            
            
            if(isset($_SESSION['pseudo'])) 
            {
                $req = "SELECT * FROM users WHERE pseudo ='".$_SESSION['pseudo']."'";
                $result = mysql_query($req);
                $row = mysql_fetch_assoc($result);
                if($_SESSION['pseudo'] == $row['pseudo'])
                {
                    echo "<div class=\"col-lg-4\">Hello ".$row['pseudo']."</div>";
                    echo "<div class=\"col-lg-2\"><a href=\"profil_user.php\">Mon Profil</a></div>";
                    echo "<div class=\"col-lg-2\"><a href=\"check_url.php?logout=1\">Deconnexion</a></div>";
                    
                }

            }
            else{
                //die("ici index connexion");
                echo "<div class=\"col-lg-4\"><a href=\"connexion_user.php\">Connexion</a></div>";
                echo "<div class=\"col-lg-4\"><a href=\"inscription.php\">Inscription</a></div>";
            }
            
            ?>

        </div>
    </div>
</div>
