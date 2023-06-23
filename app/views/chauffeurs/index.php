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
            <span class="mt-2 mb-1 col badge bg-secondary fs-5"><?php echo $this->displayedData[2] ?></span>    
        </div>    
        </div>
        
        <div class=" mt-1 card border-dark" style="height:5rem">
        <div class="card text-center bg-light fw-bold">Echues</div>
         <div class="text-dark row">
        <h6 class="text-center fs-2 <?php if($this->displayedData[3]>0)echo "text-danger" ?>"><?php echo $this->displayedData[3] ?></h6>                      
        </div>    
        </div>   
    </div>

    <div class="col shadow p-2" style="max-width: 11rem;">
        <div class=" card border-dark" >
        <div class="card-header bg-light fw-bold">Formation de Recyclages</div>
        <div class="card-body text-dark row">
        <h6 class="card-title">(Prochaine échéance)</h6>                 
            <span class="mt-2 mb-1 col badge bg-secondary fs-5"><?php echo $this->displayedData[6] ?></span>    
        </div>
       </div>
       
       <div class=" mt-1 card border-dark" style="height:5rem">
        <div class="card text-center bg-light fw-bold">Echues</div>
         <div class="text-dark row">
        <h6 class="text-center fs-2 <?php if($this->displayedData[7]>0)echo "text-danger" ?>"><?php echo $this->displayedData[7] ?></h6>                      
        </div>    
        </div>   
    </div>

    <div class="col shadow p-2" style="max-width: 11rem;">
        <div class=" card border-dark" >
        <div class="card-header bg-light fw-bold">Experience Professionnelle.</div>
        <div class="card-body text-dark row">
        <h6 class="card-title">(Années de Conduite)</h6>                 
            <span class="mt-2 mb-1 col badge bg-secondary fs-5"><?php echo $this->displayedData[4] ?></span>    
        </div>
       </div>  
       
       <div class=" mt-1 card border-dark" style="height:5rem">
        <div class="card text-center bg-light fw-bold">Dessus Moy</div>
         <div class="text-dark row">
        <h6 class="text-center fs-2"><?php echo $this->displayedData[5] ?></h6>                      
        </div>    
        </div>
    </div>

    <div class="col shadow p-2" style="max-width: 11rem;">
        <div class=" card border-dark" >
        <div class="card-header bg-light fw-bold">Moyenne Gle Evaluations.</div>
        <div class="card-body text-dark row">
        <h6 class="card-title">(Moyenne des notes en %)</h6>                 
            <span class="mt-2 mb-1 p-1 col badge bg-secondary fs-2"><?php echo $this->displayedData[8] ?></span>    
        </div>
       </div>  
       
       <div class=" mt-1 card border-dark" style="height:5rem">
        <?php if($this->displayedData[8]<=60){echo '<svg class="mx-auto mt-3" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"><path fill="red" fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12s4.477 10 10 10s10-4.477 10-10ZM12 6.25a.75.75 0 0 1 .75.75v6a.75.75 0 0 1-1.5 0V7a.75.75 0 0 1 .75-.75ZM12 17a1 1 0 1 0 0-2a1 1 0 0 0 0 2Z" clip-rule="evenodd"/></svg>';}elseif($this->displayedData[8]<=80){echo '<svg class="mx-auto mt-3" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><g fill="none" stroke="orange" stroke-width="4"><path stroke-linejoin="round" d="M24 5L2 43h44L24 5Z" clip-rule="evenodd"/><path stroke-linecap="round" d="M24 35v1m0-17l.008 10"/></g></svg>';}else{echo '<svg class="mx-auto mt-3" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><circle cx="24" cy="24" r="21" fill="#4CAF50"/><path fill="#CCFF90" d="M34.6 14.6L21 28.2l-5.6-5.6l-2.8 2.8l8.4 8.4l16.4-16.4z"/></svg>';} ?> 
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
