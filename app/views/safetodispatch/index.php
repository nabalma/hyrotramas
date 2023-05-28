<!DOCTYPE html>
<html lang="en">

<title>HYROTRAMAS | Safe To Dispatch </title>


<body>

    <!--Header-->
    <?php $this->view("home/header_home")?>
    <!--End Header-->


     <!--Title-->
     <div class="row mx-auto mt-2 mb-1 w-75 container d-flex align-items-center" style="max-height:100%">

    <div class="col-10">
        <div class="card border border-1 shadow-lg p-0 mb-1 bg-body rounded">
                <p class="text-center text-white bg-secondary card-img-top h4 p-1" style="font-family:Arial, Helvetica, sans-serif">SAFE TO DISPATCH</p>
        </div>
    </div>
    <div class="col-2">
       
    </div>
    
        
    </div>
  <!--End Title-->
    
    <!--End Header-->

    <div class="container">
        <div class="mt-2 mb-2 row">
            <div class="col"></div>
            <div class="col"></div>
            <div class="col"></div>     
        </div>

          <!-- Input Modal -->
        <div class="mt-2 mb-2 row">

                    <!-- Button trigger modal -->
                <div class="card border border-1 shadow-lg p-1 mb-1 bg-body w-25 rounded">
                    <button type="button" class="btn btn-outline-dark shadow-lg p-1 mb-1 rounded" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Afficher Liste Safe To Dispatch
                    </button>
                </div>
                <!-- Modal -->
               
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Liste des Safe to Dispatch</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                       <div class="row">Ceci est une row</div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Understood</button>
                    </div>
                    </div>
                </div>
                </div>
               
        </div>

        <!-- Input Safe To Dispatch -->
        <div class="mt-2 mb-2 row card shadow-lg p-1 mb-1 rounded">
            <div class="row mx-auto w-25 text-dark">FICHE SAFE TO DISPATCH TRANSPORTEUR</div>
        </div>
       
        <div class="row mx-auto" style="width:25rem">
            <div class="input-group mb-1">
                <span style="width:11rem" class="input-group-text" id="basic-addon1">Réference</span>
                <input type="text" class="form-control" placeholder="Réference" aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </div>
        <div class="row mx-auto" style="width:25rem">
            <div class="input-group mb-1">
                <span style="width:11rem" class="input-group-text" id="basic-addon1">Date d'établissement</span>
                <input type="date" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </div>
        <div class="row mx-auto" style="width:25rem">
            <div class="input-group mb-1">
                <span style="width:11rem" class="input-group-text" id="basic-addon1">Transporteur</span>
                <select class="form-select" aria-label="Default select example">
                        <option selected >Open this select menu</option>
                        <option  value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                </select>
            </div>
        </div>

        


    <div class="row">
        <div class="col"></div>
        <div class="col"></div>
        <div class="col d-flex justify-content-end">
        <div class="card border border-1 shadow-lg p-1 mb-1 bg-body w-50 rounded">
            <form method="post" class="row d-flex mx-auto w-100">
                   
                      <a href="<?php ROOT ?>operationsvoyages" class="p-0 w-100 fw-bold fs-5 btn btn-outline-primary">
                      <svg xmlns="http://www.w3.org/2000/svg" width="1.8rem" height="1.8rem" viewBox="0 0 512 512"><path fill="currentColor" d="M321.94 98L158.82 237.78a24 24 0 0 0 0 36.44L321.94 414c15.57 13.34 39.62 2.28 39.62-18.22v-279.6c0-20.5-24.05-31.56-39.62-18.18Z"/></svg>
                      PRECEDENT
                    </a>
                      
            </form>
        </div>
    </div>


    </div>

    </div>
   




 <!----------------------------------------------------------------------------------------------------------->
    <!--Footer-->
    <?php $this->view("home/footer_home")?>
    <!--End Footer-->

    
    
</body>
</html>