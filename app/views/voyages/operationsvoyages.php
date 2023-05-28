<!DOCTYPE html>
<html lang="en">

<title>HYROTRAMAS | Operations Voyages </title>


<body>

    <!--Header-->
    <?php $this->view("home/header_home")?>
    <!--End Header-->


     <!--Title-->
     <div class="row mx-auto mt-2 mb-1 w-75 container d-flex align-items-center" style="max-height:100%">

    <div class="col-10">
        <div class="card border border-1 shadow-lg p-0 mb-1 bg-body rounded">
                <p class="text-center text-white bg-secondary card-img-top h4 p-1" style="font-family:Arial, Helvetica, sans-serif">OPERATIONS GESTIONNAIRE DES VOYAGES</p>
        </div>
    </div>
    <div class="col-2">
        <div class="card border border-1 shadow-lg p-0 mb-1 bg-danger rounded">
                <button class="border border-0 btn-outline-primary text-center text-danger bg-body card-img-top h4 p-1" style="font-family:Arial, Helvetica, sans-serif">BACK UP</button>
        </div>
    </div>
    
        
    </div>
  <!--End Title-->
    
    <!--End Header-->

    <div class="container">
        <div class="mt-2 mb-2 row">
        <div class="col"></div>
                <div class="col card shadow-lg bg-body rounded">

                            <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="mt-2 accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                       
                        <svg class= "me-2" xmlns="http://www.w3.org/2000/svg" width="1.8rem" height="1.8rem" viewBox="0 0 20 20"><path fill="#646465" d="M3 17a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H3Zm6 0a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H9Zm6 0a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1Z"/></svg>
                        SAFE TO DISPATCH
                        </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col "><a href="<?php ROOT ?>safetodispatch" class="btn btn-outline-primary shadow-lg rounded">Créer STo Dispatch</a></div>
                                <div class="col"><button type="button" class="btn btn-outline-primary shadow-lg rounded">Lister STo Dispatch</button></div>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="mt-2 accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        <svg class= "me-2" xmlns="http://www.w3.org/2000/svg" width="1.8rem" height="1.8rem" viewBox="0 0 16 16"><g fill="#646465"><path fill-rule="evenodd" d="m13.71 4.29l-3-3L10 1H4L3 2v12l1 1h5.354a4.019 4.019 0 0 1-.819-1H4V2h6l3 3v3.126c.355.091.69.23 1 .41V5l-.29-.71ZM8.126 11H6v1h2c0-.345.044-.68.126-1ZM6 6h2V4h1v2h2v1H9v2H8V7H6V6Z" clip-rule="evenodd"/><path d="M12 9a3 3 0 1 0 0 6a3 3 0 0 0 0-6Z"/></g></svg>
                         VOYAGES
                        </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                        <div class="row">
                                <div class="col "><button type="button" class="btn btn-outline-primary shadow-lg rounded">Créer Voyage</button></div>
                                <div class="col"><button type="button" class="btn btn-outline-primary shadow-lg rounded">Lister Voyages</button></div>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="mt-2 accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="1.8rem" height="1.8rem" viewBox="0 0 48 48"><path fill="#646465" fill-rule="evenodd" d="M29 6v8h13v2H29v7h13V8c0-1.105-.836-2-1.867-2H29Zm0 19h13v7H29v-7Zm0 9h13v6c0 1.105-.836 2-1.867 2H29v-8Zm-2 0v8H15.867C14.836 42 14 41.105 14 40v-6h13Zm0-20H14V8c0-1.105.836-2 1.867-2H27v8Zm-3.948 2v7H27v-7h-3.948Zm0 9v7H27v-7h-3.948ZM6 17a1 1 0 0 1 1-1h13.158a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V17Zm3.607 2h2.26l1.834 3.754L15.64 19h2.112l-2.91 5l2.976 5H15.59l-1.999-3.93l-1.99 3.93H9.34l3.024-5.018L9.607 19Z" clip-rule="evenodd"/></svg>
                        EXPORTS EXCEL
                        </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="mb-1 row">
                                <div class="col"><button style="width:10.5rem" type="button" class="btn btn-outline-primary shadow-lg rounded">Liste des Chauffeurs</button></div>
                                <div class="col"><button style="width:10.5rem" type="button" class="btn btn-outline-primary shadow-lg rounded">Liste STo Dispatch</button></div>
                            </div>
                            <div class="mb-1 row">
                                <div class="col "><button style="width:10.5rem" type="button" class="btn btn-outline-primary shadow-lg rounded">Liste des Camions</button></div>
                                <div class="col"><button style="width:10.5rem" type="button" class="btn btn-outline-primary shadow-lg rounded">Liste des Voyages</button></div>
                            </div>
                            <div class="mb-1 row">
                                <div class="col "><button style="width:10.5rem" type="button" class="btn btn-outline-primary shadow-lg rounded">--- </button></div>
                                <div class="col"><button style="width:10.5rem" type="button" class="btn btn-outline-primary shadow-lg rounded">--- </button></div>
                            </div>
                        </div>
                        </div>
                    </div>

                    </div>
                </div>
       
        
        <div class="col"></div>
       
        
    </div>
    <div class="row">
        <div class="col"></div>
        <div class="col"></div>
        <div class="col d-flex justify-content-end">
        <div class="card border border-1 shadow-lg p-1 mb-1 bg-body w-50 rounded">
            <form method="post" class="row d-flex mx-auto w-100">
                   
                      <a href="<?php ROOT ?>gestionvoyages" class="p-0 w-100 fw-bold fs-5 btn btn-outline-primary">
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