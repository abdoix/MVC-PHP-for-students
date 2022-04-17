
     <?php  
ob_start();
  
  ?>

    
<h2><button  id="iball">Afficher Tous</button></h2>
   
      
      <form>
      <div class="form-group">
        <label>Ville:</label>
        <input id='iville'  name="ville" type="text" class="form-control" placeholder="Entrez la ville">
          </div>
      
	 
	 
	 
        <input type="button" id="ibyville" name="search" class="btn btn-outline-light" value="Rechercher"/>
     <button type="reset" class="btn btn-outline-light">Annuler</button>
   
    </form>
      

    
    
    <div class='container mt-4'>
           <div class='row'>
             <table id="iresall" class="table table-striped table-bordered">
         
                 
                  
                </table>
            </div>
        </div>  
</div>
    
      
      
      
      
  <?php 
  $content= ob_get_clean();
  $titre="Liste des etudiants ";
  require 'template.php';
  ?>