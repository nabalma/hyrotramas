<!DOCTYPE html>
<html lang="en">
<title>HYROTRAMAS | Administration </title>
<body>

    <!--Header-->
    <?php $this->view("home/header_home")?>
    <!--End Header-->


     <!--Header-->
    
     <!--Title-->
     <div class="row mx-auto mt-2 mb-1 w-75 container d-flex align-items-center" style="max-height:100%">
    
    <div class="col col-md-8">
        <div class="card border border-1 shadow-lg p-0 mb-1 bg-body rounded">
                <p class="text-center text-white bg-secondary card-img-top h4 p-1" style="font-family:Arial, Helvetica, sans-serif">ADMINISTRATION</p>
        </div>
    </div>
    <div class="col col-md-4">
    
    </div>
        
    </div>
  <!--End Title-->

    <div class="container">
        <div class="col">
            <div class="card shadow-lg bg-body rounded" style="width: 10rem;">
            <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" width="3rem" height="3rem" viewBox="0 0 24 24"><path fill="#0713A0" d="M17.988 22a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h11.988zM9 5h6v2H9V5zm5.25 6.25A2.26 2.26 0 0 1 12 13.501c-1.235 0-2.25-1.015-2.25-2.251S10.765 9 12 9a2.259 2.259 0 0 1 2.25 2.25zM7.5 18.188c0-1.664 2.028-3.375 4.5-3.375s4.5 1.711 4.5 3.375v.563h-9v-.563z"/>
            </svg>
                <div class="pb-2 card-body">
                    <h5 class="card-title text-center" style="font-size:15px">En attente d'approbation</h5>
                    <div class="d-flex justify-content-center">
                        <h5 class="card-title text-center border border-dark rounded-3" style="width:2rem;height:2rem;">
                        <?php echo $this->displayedData[0]?>
                        </h5>
                    </div>                  
                </div>
            </div>
        </div>
        <div class="col"></div>
        <div class="col"></div>
    </div>
    
    <!--End Header-->


    <div class="container row">

    <div class="col-3">
       
    </div>

    <div class="col-3">
        
    </div>

    <div class="col-6 d-flex justify-content-end">
        <div class="card border border-1 shadow-lg p-1 mb-1 bg-body w-50 rounded">
            <form method="post" class="row d-flex mx-auto w-100">        
                      <a href="<?php ROOT ?>operationsadmin" class="p-0 w-100 fw-bold fs-5 btn btn-outline-primary">OPERATIONS ADMIN</a>            
            </form>
        </div>
    </div>

</div>



    <!--Header-->
    <?php $this->view("home/footer_home")?>
    <!--End Header-->

    
    
</body>
</html>