<?php
require('require/header.php');


echo 
    "<div class=\"container-fluid container_style\">
    <div class=\"container\">
        <div class=\"row header\">
            <div class=\"col-lg-12\">";

echo "

<form action=\"check_url.php\" method=\"post\">

  <div class=\"form-group\">  
    <label for=\"pseudo_inscrip\">Pseudo</label>
    <input type=\"text\" name=\"pseudo_inscrip\" class=\"form-control\" placeholder=\"Pseudo\">
  </div>
  
  <div class=\"form-group\">     
    <label for=\"email_inscrip\">Email</label>
    <input type=\"mail\" name=\"email_inscrip\" class=\"form-control\" placeholder=\"Email\">
   </div>
   
   <div class=\"form-group\">
    <label for=\"pass_inscrip\">Password</label>
    <input type=\"password\" name=\"pass_inscrip\" class=\"form-control\" placeholder=\"Password\">
   </div>
   <input type=\"submit\" class=\"btn btn-default\" value=\"Envoyer\">
</form>";

echo "</div></div></div></div>";
    
?>