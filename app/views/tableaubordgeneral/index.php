<!DOCTYPE html>
<html lang="en">

<body>

    <!--Header-->
    <?php $this->view("home/header_home")?>
    <!--End Header-->


     <!--Title-->
    <div class="row mx-auto mt-2 mb-1 w-75 container d-flex align-items-center" style="max-height:100%">
    
    <div class="col-8">
        <div class="card border border-1 shadow-lg p-0 mb-1 bg-body rounded">
                <p class="text-center text-white bg-secondary card-img-top h4 p-1" style="font-family:Arial, Helvetica, sans-serif">TABLEAU DE BORD GENERAL</p>
        </div>
    </div>
    <div class="col-4">
    <div class="card border border-1 shadow-lg p-1 mb-1 bg-body w-50 rounded">
        <form method="post" class="row d-flex mx-auto w-100">
                <button  class="fw-bold fs-5 btn btn-outline-primary" type ="submit" name="suivant" >SUIVANT</button>   
        </form>
    </div>
    </div>
        
    </div>
  <!--End Title-->

    <div class="mt-1 container">

  <div class="row mb-0 d-flex justify-content-around">

    <div class="col"></div> 
    <!--Titre de la page -->
  
    <div class="col text-center mt-0 mx-auto card">
    <div class="py-2">
        <h5 class="h4 card-title">Tableau de bord Opérations</h5>
    </div>
    </div>

    <!--Titre de la page -->
    <div class="ms-2 col text-center mt-0 mx-auto card">
    <div class="py-2">
        <h5 class="h4 card-title">Performances Globales</h5>
    </div>
    </div>

  </div>
  

  <div class="row mt-1">

  <!-- Volumes transportés, Representation 1 -->
<div class="col">

      <div class="card">  
          <div class="card-body">
              <div class="row">
                      <h5 class="col card-title h6 fw-bold">Volumes transportés</h5>
                      <div class="col btn-group" role="group" aria-label="Basic outlined example"> 
                        
                       <!--Boucle pour recuperer les dernieres années dexploitation -->
                        <?php  
                        foreach ($this->displayedData as $key => $value) :
                            if ($key == "annees") :
                                foreach ($value as $annee) :?>
                                <form method="post"><button type="submit" name="selectAnnee_Volume_Transporte" value="<?= $annee['annee']?>" class="btn btn-outline-primary <?php if($annee['annee']==$this->displayedData["annee_selection"]){echo "active";}?>"><?= $annee['annee']?></button></form>
                                <?php endforeach;  
                                endif; 
                        endforeach; ?> 
                       <!--Boucle pour recuperer les dernieres années dexploitation -->
                      </div>
              </div>
         <!--Canvas erreur quote     <canvas id="representation1" data-labels="['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet']" data-values="[12, 19, 3, 5, 2, 3, 8]"></canvas> -->
          <!--Canvas donnees brutes    <canvas id="representation1" data-labels='["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet"]' data-values="[12, 19, 13, 15, 2, 3, 8]"></canvas> -->
            <canvas id="representation1" 
                       
            data-labels=<?php echo $this->displayedData["liste_des_mois_volume_transporte"] ?>        
            data-values=<?php echo $this->displayedData["liste_des_volumes_transportes_json"] ?> >
           
            </canvas>
          </div>  
      </div> 

</div>


  <!-- Volumes livrés, ,Representation 2 -->
  <div class="col">

  <div class="card">  
          <div class="card-body">
              <div class="row">
                      <h5 class="col card-title h6 fw-bold">Volumes livrés</h5>
                      <div class="col btn-group" role="group" aria-label="Basic outlined example">
                          <button type="submit" name="" class="btn btn-outline-primary">2023</button>
                          <button type="submit" name="" class="btn btn-outline-primary">2024</button>
                          <button type="submit"  name="" class="btn btn-outline-primary">2025</button>
                      </div>
              </div>
              <canvas id="representation2"></canvas> 
          </div>  
  </div> 

  </div>


  <!-- Coulages,,Representation 3 -->
  <div class="col">

      <div class="card">  
              <div class="card-body">
              <div class="row">
                   <h5 class="col card-title h6 fw-bold">Coulages</h5>
                   <div class="col btn-group" role="group" aria-label="Basic outlined example">
                      <button type="submit" name="" class="btn btn-outline-primary">2023</button>
                      <button type="submit" name="" class="btn btn-outline-primary">2024</button>
                      <button type="submit"  name="" class="btn btn-outline-primary">2025</button>
                   </div>
              </div>
              <canvas id="representation3"></canvas>          
              </div> 
    </div>

  </div>




  </div>


 
  <div class=" mt-0 row">
 <!-- Contributions Volumes,Representation 4  -->
<div class="col">
       <div class="card">  
            <div class="card-body">
              <div class="row">
                   <h5 class="col card-title h6 fw-bold">Contributions </h5>
                   <div class="col btn-group" role="group" aria-label="Basic outlined example">
                      <button type="submit" name="" class="btn btn-outline-primary">2023</button>
                      <button type="submit" name="" class="btn btn-outline-primary">2024</button>
                      <button type="submit"  name="" class="btn btn-outline-primary">2025</button>
                   </div>
              </div>
              <canvas id="representation4"></canvas>
            </div>  
      </div> 


</div>
 <!-- Representation 5  -->
<div class="col">

<div class="card">  
            <div class="card-body">
              <div class="row">
                   <h5 class="col card-title h6 fw-bold">Camions disponibles </h5>
                   <div class="col btn-group" role="group" aria-label="Basic outlined example">
                      <button type="submit" name="" class="btn btn-outline-primary">2023</button>
                      <button type="submit" name="" class="btn btn-outline-primary">2024</button>
                      <button type="submit"  name="" class="btn btn-outline-primary">2025</button>
                   </div>
              </div>
              <canvas id="representation5"></canvas>
            </div>  
      </div> 

</div>

 <!-- Representation 6  -->
<div class="col">
<div class="card">  
            <div class="card-body">
              <div class="row">
                   <h5 class="col card-title h6 fw-bold">HSSE KPI'S </h5>
                   <div class="col btn-group" role="group" aria-label="Basic outlined example">
                      <button type="submit" name="" value = "" class="btn btn-outline-primary">2023</button>
                      <button type="submit" name="" value = "" class="btn btn-outline-primary">2024</button>
                      <button type="submit"  name="" value = "" class="btn btn-outline-primary">2025</button>
                   </div>
              </div>

              <div class="row mt-5">
                   
              <div class="col">
                        <button type="button" class="btn btn-light border border-dark position-relative"> Kms parcourus (k000)
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-dark"> 1200</span>
                        </button>
                  </div>
                  <div class="col">
                        <button type="button" class="btn btn-light border border-dark position-relative"> Déversements
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-dark"> 9</span>
                        </button>
                  </div>
                  
              </div>

              <div class="row mt-3 mb-5">
                 <div class="col">
                        <button type="button" class="btn btn-light border border-dark  position-relative"> Rollovers
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-dark"> 0</span>
                        </button>
                  </div>

                  <div class="col">
                        <button type="button" class="btn btn-light border border-dark position-relative"> Incidents
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-dark"> 1</span>
                        </button>
                  </div>

                  <div class="col">
                        <button type="button" class="btn btn-light border border-dark position-relative"> PI
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-dark"> 125</span>
                        </button>
                  </div>
                  
                  
              </div>


            </div>  
      </div> 
</div>
</div>






  
    
    <!--End Header-->




    <!--Header-->
    <?php $this->view("home/footer_home")?>
    <!--End Header-->

    
    
</body>
</html>