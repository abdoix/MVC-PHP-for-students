 <?php
       

  ob_start();
          ?>
 <form action="<?= URL ?>save/add"  method="POST"     enctype="multipart/form-data">
      <div class="form-group">
        <label>Nom:</label>
        <input name="nom" type="text" class="form-control" placeholder="Entrez votre Nom">
          </div>
      <div class="form-group">
        <label>Prenom:</label>
        <input name="prenom" type="text" class="form-control" placeholder="Entrez votre Prenom">
      </div>
      <div class="form-group">
        <label>Ville:</label>
        <input name="ville" type="text" class="form-control" placeholder="Entrez votre Ville">
      </div>
      <div class="form-group">
        <label>Photo:</label>
        <input name="photo" type="file" class="form-control" placeholder="Entrez votre Ville">
      </div>
	 
	 
     <input type="submit" id="ibsave" name="Enregistrer" class="btn btn-outline-light" value="Enregistrer"/>
     <button type="reset" class="btn btn-outline-light">Annuler</button>
   
    </form>
<div id="imsg"></div>
<?php 
if(!empty($messageadd)){
    echo "$messageadd";
}
$content= ob_get_clean();
$titre="Formulaire d'inscription";
require 'template.php';
   