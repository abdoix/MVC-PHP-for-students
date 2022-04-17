<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/sketchy/bootstrap.min.css">




</head> 

<BODY>
  <!--    Entete      !-->
    <div class="container sticky-top">
  <header>

    <nav  class="navbar navbar-dark navbar-expand-sm bg-dark pl-5">
     <a class="text-white" style="text-decoration:none" href="#">
	 <h1 style="font-family:Georgia">TDM-Classroom <span style="color:orange">.</span></h1></a>
    
    <button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
      <span class="navbar-toggler-icon"></span>
	
    </button>
    
    <div class="collapse navbar-collapse" id="menu">
    <ul class="navbar-nav ml-5">
      <li class="nav-item active">
        <a class="nav-link" href="<?= URL ?>accueil">Accueil</a>
      </li>
	  <li class="nav-item ">
        <a class="nav-link" href="<?= URL ?>save">Nouveau</a>
      </li>
	  <li class="nav-item ">
        <a class="nav-link" href="<?= URL ?>search">Rechercher</a>
      </li>
    </ul>
      </div>
  </nav>
 
  
  </header>
 </div> 













  <!--    Section 1 Image(background)    !-->
 <section>
 <div class="container" id="acc"> 
 
 <!-- AFFICHAGE DU JUMBOTRON -->
<div class="jumbotron jumbotron-fluid text-white" style="background-image: url('<?= URL ?>public/images/school.jpg'); background-size: cover; background-position: center">
 
    <div class="display-4 pl-2"   style="color:white">Bienvenue à<br/> TDM-Classroom.</div>
   
</div>
 
 
 
 
 
 
 </div>


 </section>















  <!--    Section Login    !-->
  <div class="container" id="acc">
<section class="bg-dark p-2 text-white">
  <div class="mx-auto w-50">
    <h2><?=$titre?></h2>
         <?=$content?> 
    
    
</section>

<?php      





?>


</div>



  



   <!--    Footer      !-->



<footer>
 <div class="container m-5 mx-auto text-center" style="background-color: #444">
               <h3 style="font-family:Georgia" class="text-white">TDM-Classroom <span style="color:orange;font-size:50">.</span></h3>
                <div>Copyright © Tous droits reservés.</div>
			</div>


</footer>
   
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    
    <script>

 $(function(){
           // action authentification***********************
              $('#ibc').click(function (){
               
               var login=$('#ilog').val();
               var password=$('#ipass').val();
               
             $.ajax({ 
                              type: "POST",   
                              url: "<?= URL ?>accueil/aut", 
                             data: 'login=' + login+'&pass='+password,   
                            dataType: 'json'
                     }).done(function(res){ 
     
                              let message=res.message;
                               if(message=='ok')
                                       {
                                 window.location="<?= URL ?>save";
                                       }
                 $("#imsg").html(res.message)  }) 
                               });    
      // action enregister with ajax *************************
      /*
      * https://www.codexworld.com/ajax-file-upload-with-form-data-jquery-php-mysql/
      * 
      * Upload Ajax 
      * 
      * 
      * 
      */
    // action afficher all***********************
              $('#iball').click(function (){
               
             
               
             $.ajax({ 
                              type: "POST",   
                              url: "<?= URL ?>search/all", 
                             data: 'display=all',   
                            dataType: 'json'
                     }).done(function(res){ 
     $("#iresall").html('');
    
                   
                                $("#iresall").append("<tr>");
                                       $("#iresall").append("<th>Nom</th>");
                                       $("#iresall").append("<th>Prenom</th>");
                                       $("#iresall").append("<th>ville</th>");
                                       $("#iresall").append("<th>image</th>");
                               $("#iresall").append("</tr>");
                 
        for(let i in res.all)
                                                 { 
                     
                         $("#iresall").append("<tr>");
                                           $("#iresall").append("<td>"+res.all[i].nom+"</td>"); 
        $("#iresall").append("<td>"+res.all[i].prenom+"</td>"); 
          $("#iresall").append("<td>"+res.all[i].ville+"</td>"); 
                    $("#iresall").append(`<td><img src='${res.all[i].image}' witth='50'  height='50'/></td>`); 
                          $("#iresall").append("</tr>");
    }
  
       
       
      
})
                 
                 }) 
// action Rechercher par ville***********************
              $('#ibyville').click(function (){
               
             let ville=$('#iville').val();
             
             $.ajax({ 
                              type: "POST",   
                              url: "<?= URL ?>search/ville", 
                             data: 'byville='+ville,   
                            dataType: 'json'
                     }).done(function(res){ 
     $("#iresall").html('');
    
                   
                                $("#iresall").append("<tr>");
                                       $("#iresall").append("<th>Nom</th>");
                                       $("#iresall").append("<th>Prenom</th>");
                                       $("#iresall").append("<th>ville</th>");
                                       $("#iresall").append("<th>image</th>");
                               $("#iresall").append("</tr>");
                 
        for(let i in res.all)
                                                 { 
                     
                         $("#iresall").append("<tr>");
                                           $("#iresall").append("<td>"+res.all[i].nom+"</td>"); 
        $("#iresall").append("<td>"+res.all[i].prenom+"</td>"); 
          $("#iresall").append("<td>"+res.all[i].ville+"</td>"); 
                    $("#iresall").append(`<td><img src='${res.all[i].image}' witth='50'  height='50'/></td>`); 
                          $("#iresall").append("</tr>");
    }
  
       
       
      
})
                 
                 })                           




}); 
              

             
    





</script>
 </BODY>