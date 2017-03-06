<?php
require('require/header.php');


echo 
    "<div class=\"container-fluid container_style\">
    <div class=\"container\">
        <div class=\"row header\">
            <div class=\"col-lg-12\">";

echo "

<form action=\"check.php\" method=\"post\">

  <div class=\"form-group\">  
    <label for=\"Pseudo\">Pseudo</label>
    <input type=\"text\" name=\"pseudo\" class=\"form-control\" placeholder=\"Pseudo\">
  </div>
  
  <div class=\"form-group\">     
    <label for=\"email\">Email</label>
    <input type=\"mail\" name=\"email\" class=\"form-control\" placeholder=\"Email\">
   </div>
   
   <div class=\"form-group\">
    <label for=\"pass\">Password</label>
    <input type=\"password\" name=\"pass\" class=\"form-control\" placeholder=\"Password\">
   </div>
   <input type=\"submit\" class=\"btn btn-default\" value=\"Envoyer\">
</form>";

if(isset($_GET['e']) &&  $_GET['e'] == 1 )
{
    echo "<div class=\"alert alert-danger\">
    <strong>Danger!</strong> Mots de passe / pseudo incorrect.
    </div>";
    
}


echo "</div></div></div></div>";
    
?>


                
