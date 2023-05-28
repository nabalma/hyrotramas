<!DOCTYPE html>
<html lang="en">

<title>HYROTRAMAS | Voyages TDB </title>


<body>

    <!--Header-->
    <?php $this->view("home/header_home")?>
    <!--End Header-->

      <!--Title-->
    <div class="row mx-auto mt-2 mb-1 w-75 container d-flex align-items-center" style="max-height:100%">
    
    <div class="col-4">
        <div class="card border border-1 shadow-lg p-0 mb-1 bg-body rounded">
                <p class="text-center text-white bg-secondary card-img-top h4 p-1" style="font-family:Arial, Helvetica, sans-serif">TABLEAU DE BORD</p>
        </div>
    </div>

    <div class="col-5">
        <div class="card border border-1 shadow-lg p-0 mb-1 bg-body rounded">
                <p class="text-center text-white bg-secondary card-img-top h4 p-1" style="font-family:Arial, Helvetica, sans-serif">GESTIONNAIRE DES VOYAGES</p>
        </div>
    </div>

    <div class="col-3">
        <div class="card border border-1 shadow-lg p-0 mb-1 bg-body rounded">
                <p class="text-center text-white bg-secondary card-img-top h4 p-1" style="font-family:Arial, Helvetica, sans-serif">Performances YTD</p>
        </div>
    </div>
    
        
    </div>
  <!--End Title-->
    
    <!--End Header-->

    <!----------------------------------------------------------------------------------------------------------->
    

<!--les lignes des KPIS -->
<div class="container mx-auto mt-1 row">   <!--Premiere ligne des KPIS -->

<div class="col shadow p-2">

    <div class=" card border-dark" style="max-width: 18rem;">
    <div class="card-header bg-light fw-bold">Voyages en cours d'exécution</div>
    <div class="card-body text-dark">
          <h6 class="card-title fw-bold"></h6>
          <p class="card-text">
          <button type="button" class="btn border border-dark w-100">
          Notifications <span class="ms-5 badge bg-secondary fs-6">44</span>
          </button>
          <button type="button" class="mt-1 btn border border-dark w-100">
          Notifications <span class="ms-5 badge bg-secondary fs-6">23</span>
          </button>
          <button type="button" class="mt-1 btn btn-primary w-100">
          Total Général   <span class="ms-5 badge bg-secondary fs-6">67</span>
          </button>
          </p>
    </div>
    </div>        
</div>

<div class="col shadow p-2">

<div class="card border-dark" style="max-width: 18rem;">
    <div class="card-header bg-light fw-bold">Voyages terminées</div>
      <div class="card-body text-dark">
          <h6 class="card-title fw-bold"></h6>
          <p class="card-text">
          <button type="button" class="btn border border-dark w-100">
          Notifications <span class="ms-5 badge bg-secondary fs-6">14</span>
          </button>
          <button type="button" class="mt-1 btn border border-dark w-100">
          Notifications <span class="ms-5 badge bg-secondary fs-6">21</span>
          </button>
          <button type="button" class="mt-1 btn btn-warning w-100">
          Total Général <span class="ms-5 badge bg-secondary fs-6">35</span>
          </button>

        </p>
      </div>
      </div>        
</div>

<!--
<div class="col shadow p-2">

<div class="card border-dark" style="max-width: 18rem;">
    <div class="card-header bg-light fw-bold">Voyages</div>
      <div class="card-body text-dark">
      <h6 class="m-0 fw-bold">Durée</h6>
            
            <div class="row d-flex justify-content-center align-items-center">                
                <span class="bg-dark text-white fs-5 fw-bold rounded-circle text-center p-2" style="height:3.5rem;width:3.5rem"><?php echo 450 ?></span>
            </div>

            <h6 class="mt-1 mb-2 row fw-bold">
              Plus de <input class="ms-2 me-2 w-50 text-center" type="text" name="nbrejours" id="nbrejours"> Jours
            </h6>

           

            <div class="row mb-1 d-flex justify-content-center">
              <button type="submit" class="mt-1 btn btn-dark">Calculer</button>
            </div>

      </div>

  </div>        
</div>
-->

<div class="col shadow p-2">

<div class="card border-dark" style="max-width: 18rem;">
    <div class="card-header bg-light fw-bold">Durées moyennes des tournées</div>
      <div class="card-body text-dark">
      <h6 class="m-0 fw-bold"></h6>
            
      <table class="mt-0 mb-0 table table-hover">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Char 1</th>
                <th scope="col">Char 2</th>
                <th scope="col">Char 3</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">Livr 1</th>
                <td>21</td>
                <td>45</td>
                <td>75</td>
                </tr>
                <tr>
                <th scope="row">Livr 2</th>
                <td>90</td>
                <td>35</td>
                <td>48</td>
                </tr>
                <tr>
                <th scope="row">Livr 3</th>
                <td>80</td>
                <td>55</td>
                <td>28</td>
                </tr>
               
            </tbody>
    </table>

      </div>

  </div>        
</div>



<div class="col shadow p-2">

<div class="card border-dark" style="max-width: 18rem;">
    <div class="card-header bg-light fw-bold">Volumes transportés et livrés</div>
          <div class="card-body text-dark">
              <h6 class="mb-2 card-title fw-bold"></h6>
              <p class="card-text">
                
                    <button type="button" class="mt-1 btn border border-secondary position-relative">
                      Transportés, à ce jour
                      <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary fs-6">
                      1 245 000
                      <span class="fs-6"> Litres </span>
                      </span>
                    </button>
                    <hr>
                    <button type="button" class="btn border border-secondary position-relative">
                      Livrés, à ce jour 
                      <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary fs-6">
                      1 009 364
                      <span class="fs-6"> Litres</span>
                      </span>
                    </button>

              </p>
          </div>
    </div>        
</div>
 <hr>
</div>



<div class="container mx-auto mt-1 row">   <!--Deuxieme ligne des KPIS -->


<div class="col shadow p-2" style="max-width: 9rem;">

    <div class=" card border-dark" >
    <div class="card-header bg-light fw-bold">Requètes Ouvertes</div>
    <div class="card-body text-dark row">
    <h6 class="card-title">(Nbre de Requètes)</h6>                 
          <span class="mt-2 mb-1 col badge bg-secondary fs-6">44</span>    
    </div>
    </div>        
</div>






<div class="col shadow p-2" style="max-width: 9rem;">

    <div class=" card border-dark" >
    <div class="card-header bg-light fw-bold">Coulages</div>
    <div class="card-body text-dark">
   
          <h6 class="col card-title">(Litres)</h6>                 
          <span class="col badge bg-secondary fs-6">12454758</span>
  

    
          <h6 class="col card-title">(%)</h6>                 
          <span class="col badge bg-secondary fs-6">0.355</span>
   
    </div>
    </div>        
</div>


     <!-- Coulages,,Representation 1 , visually-hidden obligatoire-->
     <div class="visually-hidden col shadow p-2" style="max-width: 21rem;">

<div class="card">  
        <div class="card-body">
        <div class="row">
             <h5 class="col-9 card-title h6 fw-bold">Tendances Coulages</h5>
             <div class="col-3 btn-group" role="group" aria-label="Basic outlined example">
                <button type="submit" name="" class="btn btn-outline-primary"><?=date("Y")?></button>
               
             </div>
        </div>
        <canvas id="representation1"></canvas>          
        </div> 
</div>

</div>

     <!-- Coulages,,Representation 2 -->
     <div class="col shadow p-2">

<div class="card">  
        <div class="card-body">
        <div class="row">
             <h5 class="col-9 card-title h6 fw-bold">Tendances Coulages</h5>
             <div class="col-3 btn-group" role="group" aria-label="Basic outlined example">
                <button type="submit" name="" class="btn btn-outline-primary"><?=date("Y")?></button>
               
             </div>
        </div>
        <canvas id="representation2"></canvas>          
        </div> 
</div>

</div>


 <!--Coulages,,Representation 3  -->
 <div class="col shadow p-2">

<div class="card">  
        <div class="card-body">
        <div class="row">
             <h5 class="col-9 card-title h6 fw-bold">Local Content</h5>
             <div class="col-3 btn-group" role="group" aria-label="Basic outlined example">
                <button type="submit" name="" class="btn btn-outline-primary"><?=date("Y")?></button>
                
             </div>
        </div>
        <canvas id="representation3"></canvas>          
        </div> 
</div>

</div>


<div class="col shadow p-2" style="max-width: 9rem;">

    <div class=" card border-dark" >
    <div class="card-header bg-light fw-bold">Moyenne Tournée</div>
    <div class="card-body text-dark row">
        <h6 class="card-title">(Nombre de Jours)</h6>                 
        <span class="col badge bg-secondary fs-6">21</span> 

    </div>
    </div>        
</div>


<div class="col shadow p-2" style="max-width: 9rem;">

    <div class=" card border-dark" >
    <div class="card-header bg-light fw-bold">Distances parcourues</div>
    <div class="card-body text-dark row">
        <h6 class="card-title">(Milliers de Kms)</h6>                 
        <span class="col badge bg-secondary fs-6">124554</span> 

    </div>
    </div>        
</div>

 <hr class="">
</div>




<div class="container row">

    <div class="col-3">
       
    </div>

    <div class="col-3">
        
    </div>

    <div class="col-6 d-flex justify-content-end">
        <div class="card border border-1 shadow-lg p-1 mb-1 bg-body w-50 rounded">
            <form method="post" class="row d-flex mx-auto w-100">
                   
                      <a href="<?php ROOT ?>operationsvoyages" class="p-0 w-100 fw-bold fs-5 btn btn-outline-primary">OPERATIONS VOYAGES</a>
                      
            </form>
        </div>
    </div>

</div>









 <!----------------------------------------------------------------------------------------------------------->
    <!--Footer-->
    <?php $this->view("home/footer_home")?>
    <!--End Footer-->

    
    
</body>
</html>