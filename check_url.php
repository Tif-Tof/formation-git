<?php
require('require/header.php');
require('bdd_connect.php');


if(isset($_GET['logout']) && $_GET['logout'] == 1)
{
    //var_dump($_GET);
    // initialise la session auth à false
    $_SESSION['auth'] = false;
    // Destruction de la session
    session_destroy();
    //Redirection vers la page index.php
    header("Location: index.php");
}

$sql = "SELECT * FROM videos WHERE url LIKE '%".$_GET['watch']."'";    
$resultat = mysql_query($sql); 
$row = mysql_fetch_assoc($resultat);
    
if($_GET['id_vid'] == $row['id'])
{   

        
    $nombre_vues = $row['nb_views'];
    $nombre_vues ++;
        
    $update = "UPDATE videos SET nb_views =".$nombre_vues." WHERE id =".$_GET['id_vid']."";
    $save = mysql_query($update);
        
}



if(isset($_GET['watch']) && $_GET['watch'] == true)
{
            
    
    $sql = "SELECT * FROM videos WHERE url LIKE '%".$_GET['watch']."'";    
    $resultat = mysql_query($sql); 

    

        
    while($row = mysql_fetch_assoc($resultat))
    {
        

        

    echo "<div class=\"container-fluid container_style\">
                <div class=\"container\">
                    <div class=\"row\">";
    
    echo    "<div class=\"col-sm-6 col-md-12\">
                        <div class=\"thumbnail\">";
?>
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/<?php echo $_GET['watch']; ?>" frameborder="0" allowfullscreen></iframe>
<?php

                            echo 
                            "<div class=\"caption\">
                            <h3>".$row['title']."</h3>
                            <p>".$row['nb_views']." vues</p>
                            <p>Ajouté le <br>".$row['add_date']."</p>
                            </div>
                        </div>
                    </div>";            
echo "</div></div></div>";
        }

    
    

}


if(isset($_POST) && !empty($_POST['pseudo_inscrip']) && !empty($_POST['email_inscrip']) && !empty($_POST['pass_inscrip']) && $_POST['email_inscrip'] != $row['email'])
{   
    var_dump($_POST);
    $sql = "INSERT INTO users VALUES('','".$_POST['pseudo_inscrip']."','".$_POST['email_inscrip']."','".$_POST['pass_inscrip']."','1')";
    $save = mysql_query($sql);
    
    $req = "SELECT * FROM users WHERE pseudo ='".$_POST['pseudo_inscrip']."'";


    $result = mysql_query($req);
    $row = mysql_fetch_assoc($result);

    
    
    
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
    header("Location: profil_user.php");
    
}else
{
    $_SESSION['auth'] = false;
    header("Location: connexion_user.php?e=1");
}


?>


