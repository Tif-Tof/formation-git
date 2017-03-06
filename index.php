<?php
require("require/header.php");
require("bdd_connect.php");
?>

<div class="container-fluid container_style">
    <div class="container">
        <div class="row">
           <h2>Toutes les Nouvelles Videos (page public)</h2>
<?php
            $sql = "SELECT * FROM videos WHERE is_active = 1  ORDER BY id DESC  LIMIT 5";
            $resultat = mysql_query($sql);
            while( $row = mysql_fetch_assoc($resultat))
            {
                $url = $row['url'];            
                $url_clean = explode("=", $url);
    
                echo            "<div class=\"col-sm-6 col-md-2\">
                                    <div class=\"thumbnail\">
                                        <img src=\"https://img.youtube.com/vi/".$url_clean[1]."/0.jpg\" alt=\"...\">
                                        <div class=\"caption\">
                                        <h3><a href=\"check_url.php?watch=".$url_clean[1]."&id_vid=".$row['id']."\">".$row['title']."</a></h3>
                                        <p>".$row['nb_views']." vues</p>
                                        <p>Ajouté le <br>".$row['add_date']."</p>
                                        </div>
                                    </div>
                                </div>";
                
            }


?>
        </div>
        
        <div class="row">
           <h2>Videos les + vues </h2>
<?php
            $sql = "SELECT * FROM videos ORDER BY nb_views DESC LIMIT 5";
            $resultat = mysql_query($sql);
            while( $row = mysql_fetch_assoc($resultat))
            {
                $url = $row['url'];            
                $url_clean = explode("=", $url);
    
                echo            "<div class=\"col-sm-6 col-md-2\">
                                    <div class=\"thumbnail\">
                                        <img src=\"https://img.youtube.com/vi/".$url_clean[1]."/0.jpg\" alt=\"...\">
                                        <div class=\"caption\">
                                        <h3><a href=\"check_url.php?watch=".$url_clean[1]."&id_vid=".$row['id']."\">".$row['title']."</a></h3>
                                        <p>".$row['nb_views']." vues</p>
                                        <p>Ajouté le <br>".$row['add_date']."</p>
                                        </div>
                                    </div>
                                </div>";
                
            }


?>
        </div>
        
        
        
        
        
        
        
        
        
        
        
    </div>
</div>













</body>
</html>