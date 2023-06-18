<!DOCTYPE html>
<html lang="en">

<title>HYROTRAMAS | Chauffeurs TDB </title>


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
                <p class="text-center text-white bg-secondary card-img-top h4 p-1" style="font-family:Arial, Helvetica, sans-serif">GESTIONNAIRE DES CHAUFFEURS</p>
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
<div class="container mx-auto mt-1 row d-flex justify-content-around">   <!--Premiere ligne des KPIS -->

    <div class="col shadow p-2" style="max-width: 11rem;">
        <div class=" card border-dark" >
        <div class="card-header bg-light fw-bold">Chauffeurs Actifs</div>
        <div class="card-body text-dark row">
        <h6 class="card-title">(Nbre de Chauffeurs)</h6>                 
            <span class="mt-1 mb-1 p-1 col badge bg-secondary fs-2"><?php echo $this->displayedData[0] ?></span>    
        </div>
        </div> 
        
        <div class=" mt-1 card border-dark" style="height:5rem">
        <div class="card text-center bg-light fw-bold">Age moyen, YTD</div>
         <div class="text-dark row">
        <h6 class="text-center fs-2"><?php echo $this->displayedData[1] ?></h6>                      
        </div>    
        </div>
    </div>

    <div class="col shadow p-2" style="max-width: 11rem;">
        <div class=" card border-dark" >
        <div class="card-header bg-light fw-bold">Visites Medicales</div>
         <div class="card-body text-dark row">
        <h6 class="card-title">(Prochaine échéance)</h6>                 
            <span class="mt-2 mb-1 col badge bg-secondary fs-6">10/06/2023</span>    
        </div>    
        </div>
        
        <div class=" mt-1 card border-dark" style="height:5rem">
        <div class="card text-center bg-light fw-bold">Echues</div>
         <div class="text-dark row">
        <h6 class="text-center fs-1">0</h6>                      
        </div>    
        </div>   
    </div>

    <div class="col shadow p-2" style="max-width: 11rem;">
        <div class=" card border-dark" >
        <div class="card-header bg-light fw-bold">Formation de Recyclages</div>
        <div class="card-body text-dark row">
        <h6 class="card-title">(Prochaine échéance)</h6>                 
            <span class="mt-2 mb-1 col badge bg-secondary fs-6">10/07/2023</span>    
        </div>
       </div>
       
       <div class=" mt-1 card border-dark" style="height:5rem">
        <div class="card text-center bg-light fw-bold">Echues</div>
         <div class="text-dark row">
        <h6 class="text-center fs-1">0</h6>                      
        </div>    
        </div>   
    </div>

    <div class="col shadow p-2" style="max-width: 11rem;">
        <div class=" card border-dark" >
        <div class="card-header bg-light fw-bold">Experience Professionnelle.</div>
        <div class="card-body text-dark row">
        <h6 class="card-title">(Années de Conduite)</h6>                 
            <span class="mt-2 mb-1 col badge bg-secondary fs-6">29</span>    
        </div>
       </div>  
       
       <div class=" mt-1 card border-dark" style="height:5rem">
        <div class="card text-center bg-light fw-bold">Dessus Moy</div>
         <div class="text-dark row">
        <h6 class="text-center fs-1">25</h6>                      
        </div>    
        </div>
    </div>

    <div class="col shadow p-2" style="max-width: 11rem;">
        <div class=" card border-dark" >
        <div class="card-header bg-light fw-bold text-danger">Experience Professionnelle.</div>
        <div class="card-body text-dark row">
        <h6 class="card-title">(Années de Conduite)</h6>                 
            <span class="mt-2 mb-1 col badge bg-secondary fs-6">10/07/2023</span>    
        </div>
       </div>  
       
       <div class=" mt-1 card border-dark" style="height:5rem">
        <div class="card text-center bg-light fw-bold">Over Average</div>
         <div class="text-dark row">
        <h6 class="text-center fs-1">25</h6>                      
        </div>    
        </div>
    </div>

    <div class="col shadow p-2" style="max-width: 11rem;">
        <div class=" card border-dark" >
        <div class="card-header bg-light fw-bold text-danger">Experience Professionnelle.</div>
        <div class="card-body text-dark row">
        <h6 class="card-title">(Années de Conduite)</h6>                 
            <span class="mt-2 mb-1 col badge bg-secondary fs-6">10/07/2023</span>    
        </div>
       </div>  
       
       <div class=" mt-1 card border-dark" style="height:5rem">
        <div class="card text-center bg-light fw-bold">Over Average</div>
         <div class="text-dark row">
        <h6 class="text-center fs-1">25</h6>                      
        </div>    
        </div>
    </div>

</div> 

<div class="container row">

    <div class="col-3">
       
    </div>

    <div class="col-3">
        
    </div>

    <div class="col-6 d-flex justify-content-end">
        <div class="card border border-1 shadow-lg p-1 mb-1 bg-body w-50 rounded">
            <form method="post" class="row d-flex mx-auto w-100">
                   
                      <a href="<?php ROOT ?>operationschauffeurs" class="p-0 w-100 fw-bold fs-5 btn btn-outline-primary">OPERATIONS CHAUFFEURS</a>
                      
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
