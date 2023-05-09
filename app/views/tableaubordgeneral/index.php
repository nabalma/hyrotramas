<!DOCTYPE html>
<html lang="en">

<body>

    <!--Header-->
    <?php $this->view("home/header_home")?>
    <!--End Header-->


     <!--Title-->
    <div class="row mx-auto mt-2 mb-1 w-75 container d-flex align-items-center" style="max-height:100%">
    
    <div class="col ">
        <div class="card border border-1 shadow-lg p-0 mb-1 bg-body rounded">
                <p class="text-center text-white bg-secondary card-img-top h4 p-1" style="font-family:Arial, Helvetica, sans-serif">TABLEAU DE BORD GENERAL</p>
        </div>
    </div>
    <div class="col">
        <form class="row d-flex mx-auto w-50">
                <button class="fw-bold fs-5 btn btn-outline-primary" type="submit" name="suivant">SUIVANT</button>   
        </form>

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

  <!-- Volumes transportés, ,Representation 1 -->
<div class="col">

      <div class="card">  
          <div class="card-body">
               <div class="row">
                      <h5 class="col card-title h6 fw-bold">Volumes transportés</h5>
                      <div class="col btn-group" role="group" aria-label="Basic outlined example">
                          <button type="submit" name="" class="btn btn-outline-primary">2023</button>
                          <button type="submit" name="" class="btn btn-outline-primary">2024</button>
                          <button type="submit"  name="" class="btn btn-outline-primary">2025</button>
                      </div>
              </div>
              <canvas id="representation1"></canvas>      
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