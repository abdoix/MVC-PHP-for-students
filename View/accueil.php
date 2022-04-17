<?php 
ob_start();


?>
    
    <form>
      <div class="form-group">
        <label>Login:</label>
        <input id="ilog" name="login" type="text" class="form-control" placeholder="Entrez votre Login">
          </div>
      <div class="form-group">
        <label>Password:</label>
        <input id="ipass" name="pass" type="password" class="form-control" placeholder="*****">
      </div>
	 
	 
	 
        <input  id="ibc" type="button" name="conn" class="btn btn-outline-light" value="Connexion"/>
     <button type="reset" class="btn btn-outline-light">Annuler</button>
   
    </form>
<div id="imsg"></div>

 <?php 
 
 if(!empty($messagerr))
 {
     echo "$messagerr";
 }
   $content= ob_get_clean();
   $titre ="Veuillez vous authentifier";
   require 'template.php';
 
  
  ?> 