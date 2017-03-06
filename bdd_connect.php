<?php
try
{
    $link = mysql_connect("localhost", "root", "");
    mysql_select_db("partagetavideo",$link);
    
}
catch(Exception $e)
{
    echo "Message erreur : ".$e;
}



?>