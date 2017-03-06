<?php
require('require/header.php');
require('bdd_connect.php');

echo "<div class=\"container-fluid container_style\">
                <div class=\"container\">
                    <div class=\"row\">";

// Verification si l'utilisateur est authentifié avec la variable de session
if(isset($_SESSION['auth']))
{
    if($_SESSION['auth'] == true)
    {
        // Si il y a authentification, on lance une requête afin d'avoir toutes les videos en lien avec l'utilisateur en question
        $sql = "SELECT * FROM videos INNER JOIN users on videos.user_id = users.id WHERE user_id ='".$_SESSION['id']."' AND videos.is_active = 1";
        $result = mysql_query($sql);
        
        echo "<h2>Vos Nouvelles Videos (page privée)coucou</h2>";
        
        while($row = mysql_fetch_assoc($result))
        {
            // découpage de l'url afin d'avoir une url clean
            $url = $row['url'];            
            $url_clean = explode("=", $url);
            $_SESSION['link']= $url_clean[1];

            
            //Affichage de la video avec titre           
            echo    "<div class=\"col-sm-6 col-md-2\">
                        <div class=\"thumbnail\">
                            <img src=\"https://img.youtube.com/vi/".$url_clean[1]."/0.jpg\" alt=\"...\">
                            <div class=\"caption\">
                            <h3><a href=\"check_url.php?watch=".$url_clean[1]."\">".$row['title']."</a></h3>
                            <p>".$row['nb_views']." vues</p>
                            <p>Ajouté le <br>".$row['add_date']."</p>
                            </div>
                        </div>
                    </div>";
        }

    }
    else
    {
        echo "vous devez être connecté";
        
    }
    
    
    
}else{
        echo "vous devez être connecté";

}

echo "</div></div></div>";





?>