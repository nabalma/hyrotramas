<!DOCTYPE html>
<html lang="en">

<body>

    <!--Header-->
    <?php $this->view("home/header_home")?>
    <!--End Header-->


     <!--Header-->
    <div class="row mx-auto mt-2 mb-2 w-50 container d-flex align-items-evenly" style="max-height:100%">
    
    <div class="col ">
        <div class="card border border-1 shadow-lg p-2 mb-1 bg-body rounded">
                <p class="text-center text-white bg-secondary card-img-top h4 p-1" style="font-family:Arial, Helvetica, sans-serif">GESTIONNAIRE DES CHAUFFEURS</p>
        </div>
    </div>
        
    </div>
    
    <!--End Header-->




    
    <div class="ms-1 row">


        <div class="col">
        <div class="card border border-1 shadow-lg p-2 mb-2 bg-body rounded" style="width: 21rem;">
            <svg xmlns="http://www.w3.org/2000/svg" width="3rem" height="3rem" viewBox="0 0 65 64"><path fill="#070776" d="M11.231 48.686a4.116 4.116 0 1 1 .001-8.231a4.116 4.116 0 0 1-.001 8.231zM2.943 63.612v-8.064c0-2.908 2.389-5.271 5.3-5.271h5.683c2.911 0 5.511 2.363 5.511 5.271v8.064H2.942zm50.955-15.275a4.119 4.119 0 0 0 4.115-4.117a4.116 4.116 0 1 0-8.23 0a4.118 4.118 0 0 0 4.115 4.117zm8.284 15.275v-8.064c0-2.908-2.389-5.271-5.302-5.271h-5.677c-2.916 0-5.512 2.363-5.512 5.271v8.064h16.49zM32.557 48.664c-2.3 0-4.163-1.849-4.163-4.128s1.863-4.129 4.163-4.129c2.298 0 4.161 1.849 4.161 4.129c0 2.28-1.862 4.128-4.161 4.128zM22.532 63.612l3.276-8.925c1.312-4.559 5.133-4.418 5.133-4.418h3.243s3.819-.14 5.133 4.418l3.276 8.925H22.532zm10.025-28.416v-9.765l-1.621-1.621v9.76H6.413V2.522h24.523v15.95l1.621 1.62V.899H4.798v34.296z"/><path fill="#070776" d="M18.436 9.195a2.19 2.19 0 0 0 0-4.376a2.188 2.188 0 0 0 0 4.376zm7.225 9.093s-1.795-6.097-1.798-6.102c-.715-2.373-2.717-2.302-2.717-2.302H15.73s-2.005-.071-2.719 2.302l-1.795 6.102a.933.933 0 1 0 1.79.526l1.714-5.835l.004.002l.764-.002v6.64l-3.017 10.354a1.28 1.28 0 0 0 1.228 1.64c.555 0 1.067-.363 1.231-.921l2.98-10.224h1.055l2.98 10.224a1.278 1.278 0 0 0 1.588.869a1.28 1.28 0 0 0 .87-1.588l-3.017-10.349V12.98l.764.002l.004-.002l1.716 5.835a.932.932 0 1 0 1.79-.526zm28.218-.919a4.11 4.11 0 0 1 0-8.218a4.103 4.103 0 0 1 4.106 4.111a4.101 4.101 0 0 1-4.106 4.107zm0 6.111s.997.129 1.607-.716c.552-.772.593-3.33.597-3.793h-4.412c-.015 1.841.199 3.183.639 3.859c.444.69 1.569.651 1.569.651z"/><path fill="#070776" d="M35.975 27.103c-.151.248-.386.752-.386 1.07c0 .96.775 1.731 1.732 1.731h5.697c.647 0 1.497-.261 1.86-.805c1.225-1.819 2.52-3.736 2.902-4.309v10.772h14.348V24.515c0-2.889-2.257-5.49-4.927-5.49c.007 1.356-.175 3.608-.969 4.594c-.829 1.007-1.805.919-1.805.919v4.203a1.43 1.43 0 0 1-.548 2.754a1.43 1.43 0 0 1-1.431-1.433c0-.595.362-1.105.88-1.321v-4.222s-.852.07-1.657-.737c-1.075-1.12-1.115-4.294-1.113-4.813h-.261a5.264 5.264 0 0 0-4.385 2.346l-3.411 5.147l-5.175-.002l-7.308-7.309a.701.701 0 0 0-.995 0a.704.704 0 0 0-.002.997l6.955 6.956z"/></svg>
            <div class="card-body">
                <h5 class="card-title">Formations/Evaluations</h5>
            </div>
            <ul class="list-group list-group-flush">
            <li class="list-group-item">
                    <div class="row gx-1">
                            <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
                                <strong>Succès!</strong> Formation bien ajoutée
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                    </div>
            </li>
                <li class="list-group-item d-flex">
                    <button class="btn btn-outline-secondary w-100">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.8rem" height="1.8rem" viewBox="0 0 20 20"><path fill="currentColor" d="M11 9V5H9v4H5v2h4v4h2v-4h4V9h-4zm-1 11a10 10 0 1 1 0-20a10 10 0 0 1 0 20z"/>
                        </svg>
                        Nouvelle formation
                    </button>
                </li>
                <li class="list-group-item">
                <div class="mb-1 text-center fw-bold" style="color:#23181C;font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 16 16"><path fill="#36028C" d="m15.504 13.616l-3.79-3.223c-.392-.353-.811-.514-1.149-.499a6 6 0 1 0-.672.672c-.016.338.146.757.499 1.149l3.223 3.79c.552.613 1.453.665 2.003.115s.498-1.452-.115-2.003zM6 10a4 4 0 1 1 0-8a4 4 0 0 1 0 8z"/></svg>
                        Selectionner une Formation
                    </div>
                    <form class="">                       
                        <select class="mb-1 form-select btn btn-outline-secondary" aria-label="Default select example">
                            <option selected>Selectionner Transporteur</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <select class="mb-1 form-select btn btn-outline-secondary" aria-label="Default select example">
                            <option selected>Selectionner Chauffeur</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <div class="row d-flex justify-content-center" >
                        <div style="width:18rem"><button class="w-100 btn btn-outline-primary">Consulter</button></div>                           
                        </div>
                    </form>
                </li>
            </ul>
           
        </div>

        </div>


        <div class="col">
        <div class="card border border-1 shadow-lg p-2 mb-2 bg-body rounded" style="width: 21rem;">
        <svg xmlns="http://www.w3.org/2000/svg" width="3rem" height="3rem" viewBox="0 0 512 512"><path fill="#070776" d="M184 48h144c4.4 0 8 3.6 8 8v40H176V56c0-4.4 3.6-8 8-8zm-56 8v424h256V56c0-30.9-25.1-56-56-56H184c-30.9 0-56 25.1-56 56zM96 96H64c-35.3 0-64 28.7-64 64v256c0 35.3 28.7 64 64 64h32V96zm320 384h32c35.3 0 64-28.7 64-64V160c0-35.3-28.7-64-64-64h-32v384zM224 208c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v48h48c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16h-48v48c0 8.8-7.2 16-16 16h-32c-8.8 0-16-7.2-16-16v-48h-48c-8.8 0-16-7.2-16-16v-32c0-8.8 7.2-16 16-16h48v-48z"/></svg>
            <div class="card-body">
                <h5 class="card-title">Aptitudes Médicales</h5>
           
            </div>
            <ul class="list-group list-group-flush">
            <li class="list-group-item">
                    <div class="row gx-1">
                            <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
                                <strong>Succès!</strong> Aptitude bien ajoutée
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                    </div>
            </li>
                <li class="list-group-item d-flex">
                    <button class="btn btn-outline-secondary w-100">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.8rem" height="1.8rem" viewBox="0 0 20 20"><path fill="currentColor" d="M11 9V5H9v4H5v2h4v4h2v-4h4V9h-4zm-1 11a10 10 0 1 1 0-20a10 10 0 0 1 0 20z"/>
                        </svg>
                        Nouvelle formation
                    </button>
                </li>
                <li class="list-group-item">
                <div class="mb-1 text-center fw-bold" style="color:#23181C;font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 16 16"><path fill="#36028C" d="m15.504 13.616l-3.79-3.223c-.392-.353-.811-.514-1.149-.499a6 6 0 1 0-.672.672c-.016.338.146.757.499 1.149l3.223 3.79c.552.613 1.453.665 2.003.115s.498-1.452-.115-2.003zM6 10a4 4 0 1 1 0-8a4 4 0 0 1 0 8z"/></svg>
                        Selectionner une Aptitude
                    </div>
                    <form class="">                       
                        <select class="mb-1 form-select" aria-label="Default select example">
                            <option selected>Selectionner Transporteur</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <select class="mb-1 form-select" aria-label="Default select example">
                            <option selected>Selectionner Chauffeur</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <div class="row d-flex justify-content-center" >
                        <div style="width:18rem"><button class="w-100 btn btn-outline-primary">Consulter</button></div>                           
                        </div>
                    </form>
                </li>
            </ul>
           
        </div>

        </div>


        <div class="col">
        <div class="card border border-1 shadow-lg p-2 mb-2 bg-body rounded" style="width: 21rem;">
        <svg xmlns="http://www.w3.org/2000/svg" width="3rem" height="3rem" viewBox="0 0 512 512"><path fill="#070776" d="M256 25C128.3 25 25 128.3 25 256s103.3 231 231 231s231-103.3 231-231S383.7 25 256 25zm0 30c110.9 0 201 90.1 201 201s-90.1 201-201 201S55 366.9 55 256S145.1 55 256 55zM80.52 203.9c-4.71 19.2-7.52 37-7.52 54c144.7 30.3 121.5 62.4 148 177.8c11.4 2.1 23 3.3 35 3.3s23.6-1.2 35-3.3c26.5-115.4 3.3-147.5 148-177.8c-.6-18.9-3-38.4-7.5-54C346.7 182.7 301.1 172 256 172c-45.1 0-90.7 10.7-175.48 31.9zM256 183c40.2 0 73 32.8 73 73s-32.8 73-73 73s-73-32.8-73-73s32.8-73 73-73zm0 18c-30.5 0-55 24.5-55 55s24.5 55 55 55s55-24.5 55-55s-24.5-55-55-55z"/></svg>
            <div class="card-body">
                <h5 class="card-title">Gestion Chauffeurs</h5>
            </div>
            <ul class="list-group list-group-flush">
           

            <?php if (isset($this->displayedData[1]) && $this->displayedData[1]) : ?>
            <li class="list-group-item">
                    <div class="row gx-1">
                        <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
                            <strong>Succès!</strong> Chauffeur bien ajouté
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
            </li>
            <?php endif; ?>

            <li class="list-group-item">
                    <div class="row gx-1">
                    <div class="row">   
       <div class="col">
        <div class="row">
           <!-- Button trigger modal -->          
               <button type="button" class="mb-1 btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
               <svg xmlns="http://www.w3.org/2000/svg" width="1.8rem" height="1.8rem" viewBox="0 0 20 20"><path fill="currentColor" d="M11 9V5H9v4H5v2h4v4h2v-4h4V9h-4zm-1 11a10 10 0 1 1 0-20a10 10 0 0 1 0 20z"/>
                </svg>
                        Nouveau Chauffeur
               </button>

           <!-- Modal -->
       <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
           <div class="modal-dialog">
               <div class="modal-content">
                   <div class="modal-header">
                       <h5 class="modal-title" id="staticBackdropLabel">Inscription Chauffeur</h5>
                       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                   </div>
                   <div class="modal-body">

                       <form action="" method="post" enctype="multipart/form-data">
                       
                           <div class="card p-1 border border-1 shadow-lg p-2 mb-5 bg-body rounded">
                               <div class="row gx-0">           
                                   <div class="col">
                                       <div class="input-group">
                                               <span class="input-group-text" id="basic-addon1" style="width:6rem">Actif ?</span>
                                               <input id="actifOuNon" name="actifOuNon" type="text" class="form-control" placeholder="Inactif" aria-label="Username" aria-describedby="basic-addon1" disabled>
                                       </div>
                                   </div>
                                   <div class="col">
                                       <div class="input-group">
                                           <span class="input-group-text" id="basic-addon1" style="width:6rem">Ref.</span>
                                           <input id="reference" name="reference" type="text" class="form-control" placeholder="Reference" aria-label="Username" aria-describedby="basic-addon1" disabled>
                                       </div>
                                   </div>
                               </div>
                               <div class="row mt-1 mb-1 gx-0">           
                                                                     
                               </div>
                   
                               <div class="row gx-0">  
                                   <div class="col input-group">
                                       <span class="input-group-text" id="basic-addon1" style="width:6rem">Code</span>
                                       <input id="code" name="code" type="text" class="form-control" placeholder="Code" aria-label="Username" aria-describedby="basic-addon1">
                                   </div>
                                   <div class="col input-group">
                                       <span class="input-group-text" id="basic-addon1" style="width:6rem">Matricule</span>
                                       <input id="numero" name="numero" type="text" class="form-control" placeholder="Matricule" aria-label="Username" aria-describedby="basic-addon1">
                                   </div>
                               </div>
                   
                               <div class="gx-0 row">  
                                   <div class="col input-group">
                                       <span class="input-group-text" id="basic-addon1" style="width:6rem">Nom</span>
                                       <input id="nom" name="nom" type="text" class="form-control" placeholder="Nom" aria-label="Username" aria-describedby="basic-addon1">
                                   </div>
                                   <div class="col input-group">
                                       <span class="input-group-text" id="basic-addon1" style="width:6rem">Prénom</span>
                                       <input id="prenom" name="prenom" type="text" class="form-control" placeholder="Prénom" aria-label="Username" aria-describedby="basic-addon1">
                                   </div>
                               </div>
                   
                               <div class="gx-0 row">  
                                   <div class="col input-group">
                                       <span class="input-group-text" id="basic-addon1" style="width:6rem">Naissance</span>
                                       <input id="dateNaissance" name="dateNaissance" type="date" class="form-control" placeholder="Date de naissance" aria-label="Username" aria-describedby="basic-addon1">
                                   </div>
                                   <div class="col input-group">
                                       <span class="input-group-text" id="basic-addon1" style="width:6rem">Num. Permis</span>
                                       <input id="numeroPermis" name="numeroPermis" type="text" class="form-control" placeholder="Nom" aria-label="Numero Permis" aria-describedby="basic-addon1">
                                   </div>
                               </div>
                   
                               <div class="gx-0 row">             
                                   <div class="col input-group">
                                       <span class="input-group-text" id="basic-addon1" style="width:6rem">Date Obtent.</span>
                                       <input id="dateObtentionPermis" name="dateObtentionPermis" type="date" class="form-control" placeholder="Prénom" aria-label="Date Obtention" aria-describedby="basic-addon1">
                                   </div>
                                   <div class="col input-group">
                                       <span class="input-group-text" id="basic-addon1" style="width:6rem">Cat. Permis</span>
                                       <input id="categoriePermis" name="categoriePermis" type="text" class="form-control" placeholder="Categorie Permis" aria-label="Categorie Permis" aria-describedby="basic-addon1">
                                   </div>
                               </div>
                   
                               <div class="gx-0 row">      
                                   <div class="col input-group">
                                       <span class="input-group-text" id="basic-addon1" style="width:6rem">Date Recrut.</span>
                                       <input id="dateRecrutement" name="dateRecrutement" type="date" class="form-control" placeholder="Date Recrutement" aria-label="Username" aria-describedby="basic-addon1">
                                   </div>
                                   <div class="col input-group">
                                       <span class="input-group-text" id="basic-addon1" style="width:6rem">Date Integ.</span>
                                       <input id="dateIntegration" name="dateIntegration" type="date" class="form-control" placeholder="Date Integration" aria-label="Username" aria-describedby="basic-addon1">
                                   </div>
                               </div>
                   
                               <div class="gx-0 row">  
                                   <div class="col input-group">
                                       <span class="input-group-text" id="basic-addon1" style="width:6rem">Contrat</span>
                                       <input id="typeContrat" name="typeContrat" type="text" class="form-control" placeholder="Contrat" aria-label="Username" aria-describedby="basic-addon1">
                                   </div>
                                   <div class="col input-group">
                                       <span class="input-group-text" id="basic-addon1" style="width:6rem">Telephone</span>
                                       <input id="telephone" name="telephone" type="text" class="form-control" placeholder="Téléphone" aria-label="Username" aria-describedby="basic-addon1">
                                   </div>
                               </div>
                   
                               <div class="gx-0 row">  
                                   <div class="col input-group">
                                       <span class="input-group-text" id="basic-addon1" style="width:6rem">Contrat</span>
                                       <input id="titulaireBackup" name="titulaireBackup" type="text" class="form-control" placeholder="titulaire ou Backup" aria-label="Username" aria-describedby="basic-addon1">
                                   </div>
                                   <div class="col input-group">
                                       <span class="input-group-text" id="basic-addon1" style="width:6rem">Camion</span>
                                       <input id="camion" name="camion" type="text" class="form-control" placeholder="camion" aria-label="Username" aria-describedby="basic-addon1">
                                   </div>
                               </div>
                               <div class="input-group mt-1">
                                   <input type="file" class="form-control" id="inputGroupFile">
                                   <label class="input-group-text" for="inputGroupFile">Téléverser</label>
                               </div>
                               <div class="gx-0 row mt-1">  
                                              
                               </div>  
                           </div>

                           <div class="modal-footer">
                               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                               <button  type="submit" name="submit_nouveau_chauffeur" class="btn btn-outline-primary">Créer Chauffeur</button>
                           </div>

                       </form>
           
                   </div>
               </div>
           </div>
       </div>
       </div>
   </div>   
   </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row gx-1">
                        <div class="col"><button class="btn btn-outline-secondary w-100">Permis</button></div>
                        <div class="col"><button class="btn btn-outline-secondary w-100">Contrats</button></div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row gx-1">
                        <div class="col"><button class="btn btn-outline-secondary w-100">Evaluations</button></div>
                        <div class="col"><button class="btn btn-outline-secondary w-100">Aptitudes</button></div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row gx-1">
                        <div class="col"><button class="btn btn-outline-secondary w-100">Décision</button></div>
                        <div class="col"><button class="btn btn-outline-secondary w-100">Titl-BackUp?</button></div>
                    </div>
                </li>
            </ul>           
        </div>

        </div>


        <div class="col">
        <div class="card border border-1 shadow-lg p-2 mb-2 bg-body rounded" style="width: 21rem;">
        <svg xmlns="http://www.w3.org/2000/svg" width="2.3rem" height="3rem" viewBox="0 0 384 512"><path fill="#070776" d="M64 0C28.7 0 0 28.7 0 64v384c0 35.3 28.7 64 64 64h256c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H64zm96 320h64c44.2 0 80 35.8 80 80c0 8.8-7.2 16-16 16H96c-8.8 0-16-7.2-16-16c0-44.2 35.8-80 80-80zm-32-96a64 64 0 1 1 128 0a64 64 0 1 1-128 0zm16-160h96c8.8 0 16 7.2 16 16s-7.2 16-16 16h-96c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/></svg>
            <div class="card-body">
                <h5 class="card-title">Carte d'Identité Chauffeur</h5>
      
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex">
                    <button class="btn btn-secondary w-100" style="height:2.5rem">
                        
                        
                    </button>
                </li>
                <li class="list-group-item">
                    <div class="mb-1 text-center fw-bold" style="color:#23181C;font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 16 16"><path fill="#36028C" d="m15.504 13.616l-3.79-3.223c-.392-.353-.811-.514-1.149-.499a6 6 0 1 0-.672.672c-.016.338.146.757.499 1.149l3.223 3.79c.552.613 1.453.665 2.003.115s.498-1.452-.115-2.003zM6 10a4 4 0 1 1 0-8a4 4 0 0 1 0 8z"/></svg>
                        Selectionner une Carte
                    </div>
                    <form class="">                       
                        <select class="mb-1 form-select" aria-label="Default select example">
                            <option selected>Selectionner Transporteur</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <select class="mb-1 form-select" aria-label="Default select example">
                            <option selected>Selectionner Chauffeur</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <div class="row d-flex justify-content-center" >
                        <div style="width:18rem"><button class="w-100 btn btn-outline-primary">Consulter</button></div>                           
                        </div>
                    </form>
                </li>
            </ul>
           
        </div>

        </div>




    </div>



    <div class="row ms-1 me-1">  
        <div class="mx-auto card border border-1 shadow-lg p-2 mb-2 bg-body rounded" style="color:yellow">
            
        </div>  
    </div>

    <div class="row ms-5">
           <!-- Button trigger modal -->          
               <button type="button" class="d-flex justify-content-start w-25 mb-1 btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#listechauffeurs">
               <svg xmlns="http://www.w3.org/2000/svg" width="1.8rem" height="1.8rem" viewBox="0 0 16 16"><path fill="currentColor" d="M0 0h4v3H0V0zm0 4h4v3H0V4zm0 8h4v3H0v-3zm0-4h4v3H0V8zm5-8h11v3H5V0zm0 4h11v3H5V4zm0 8h11v3H5v-3zm0-4h11v3H5V8z"/>
            </svg>
                        <span class="ms-3">Liste des chauffeurs</span>
               </button>

           <!-- Modal -->
       <div class="modal fade" id="listechauffeurs" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="listechauffeursLabel" aria-hidden="true">
           <div class="modal-dialog modal-fullscreen">
               <div class="modal-content">
                   <div class="modal-header">
                       <h5 class="modal-title" id="listechauffeursLabel">Liste des chauffeurs</h5>
                       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                   </div>
        <div class="modal-body">
                <div class="card p-1 border border-1 shadow-lg p-2 mb-5 bg-body rounded">
                            <div class="row ms-1 me-1">  
                                    <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                <th scope="col">#</th>
                                            
                                                <th scope="col">Nom</th>
                                                <th scope="col">Prénom</th>
                                                <th scope="col">Matricule</th>
                                                <th scope="col">Date de Naissance</th>
                                                <th scope="col">Numéro Permis</th>
                                                <th scope="col">Téléphone</th>
                                                <th scope="col">Echéance Evaluation</th>
                                                <th scope="col">Echéance Medicale</th>
                                                <th scope="col">Actif ?</th>            
                                                <th scope="col">Autres Détails</th>
                                                </tr>
                                            </thead>
                                            <tbody>   

                                                <?php foreach ($this->displayedData[0] as $row) : ?>
                                                <tr>
                                                    <th scope="row"><?php echo $row['ref_Chauffeur']; ?></td>
                                                    <td><?php echo $row['nom_Chauffeur']; ?></td>
                                                    <td><?php echo $row['prenom_Chauffeur']; ?></td>
                                                    <td><?php echo $row['numero_Matricule_Chauffeur']; ?></td>      
                                                    <td><?php echo $row['date_de_naissance_Chauffeur']; ?></td>
                                                    <td><?php echo $row['numero_Permis_Chauffeur']; ?></td>
                                                    <td><?php echo $row['numero_Telephone_Chauffeur']; ?></td>
                                                    <td><?php echo $row['echeanceVisite']; ?></td>
                                                    <td><?php echo $row['echeanceFormation']; ?></td>
                                                    <td><?php echo $row['actifOuNon']; ?></td>
                                                   
                                                    <td>
                                                        
                                                        
          
                                                        <!-- Button trigger modal -->          
                                                            <button type="button" class="mb-1 btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#identityCard" 
                                                            data-chauffeur-ref="<?php echo $row['ref_Chauffeur']; ?>"
                                                            data-chauffeur-age="<?php echo $row['age']; ?>"
                                                            data-chauffeur-nom="<?php echo $row['nom_Chauffeur']; ?>"
                                                            data-chauffeur-prenom="<?php echo $row['prenom_Chauffeur']; ?>"
                                                            data-chauffeur-experience="<?php echo $row['experience']; ?>"
                                                            data-chauffeur-camion="<?php echo $row['camion_associe']; ?>"
                                                            
                                                            >
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="5rem" height="1.5rem" viewBox="0 0 36 36"><path fill="#278F05" d="M32 6H4a2 2 0 0 0-2 2v20a2 2 0 0 0 2 2h28a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2ZM19 22H9a1 1 0 0 1 0-2h10a1 1 0 0 1 0 2Zm8-4H9a1 1 0 0 1 0-2h18a1 1 0 0 1 0 2Zm0-4H9a1 1 0 0 1 0-2h18a1 1 0 0 1 0 2Z" class="clr-i-solid clr-i-solid-path-1"/><path fill="none" d="M0 0h36v36H0z"/>
                                                            </svg>
                                                            </button>

                                                                <!-- Modal -->
                                                            <div class="modal fade" id="identityCard" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="identityCardLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="identityCardLabel">Réf. Chauffeur : <span class="ms-1"></span></h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">                    
                                                                            
                                                                            <div class="card p-1 border border-1 shadow-lg p-2 mb-5 bg-body rounded">
                                                                                <div class="card-header">
                                                                                        Autres infos
                                                                                    </div>
                                                                                    <div class="card-body">
                                                                                        <div class="row">
                                                                                            <div class="col fw-bold">Nom :</div>
                                                                                            <div class="col" id="nom"></div>
                                                                                            <div class="col fw-bold">Prénom :</div>
                                                                                            <div class="col" id="prenom"></div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col fw-bold">Age :</div>
                                                                                            <div class="col" id="age"></div>
                                                                                            <div class="col fw-bold">Maturité :</div>
                                                                                            <div class="col" id="experience"></div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col fw-bold">RefCam :</div>
                                                                                            <div class="col" id="camion"></div>
                                                                                            <div class="col fw-bold">111 :</div>
                                                                                            <div class="col" id="111"></div>
                                                                                        </div>
                                                                                        
                                                                                    </div>
                                                                                    <div class="card-footer text-muted">
                                                                                        -------
                                                                                    </div>                                                                                                                  
                                                                            </div>                                                                
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>                                                    
                                                    </td>
                                                </tr>
                                                <?php endforeach; ?>


                                            </tbody>
                                    </table>
                            </div>
                                    
                                    

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>

                      
                </div>
        </div>
               </div>
           </div>
       </div>
      




        <div class="col"></div>
        <div class="col"></div>
        <div class="col d-flex justify-content-end">
        <div class="card border border-1 shadow-lg p-1 mb-1 bg-body w-50 rounded">
            <form method="post" class="row d-flex mx-auto w-100">
                   
                      <a href="<?php ROOT ?>gestionchauffeurs" class="p-0 w-100 fw-bold fs-5 btn btn-outline-primary">
                      <svg xmlns="http://www.w3.org/2000/svg" width="1.8rem" height="1.8rem" viewBox="0 0 512 512"><path fill="currentColor" d="M321.94 98L158.82 237.78a24 24 0 0 0 0 36.44L321.94 414c15.57 13.34 39.62 2.28 39.62-18.22v-279.6c0-20.5-24.05-31.56-39.62-18.18Z"/></svg>
                      PRECEDENT
                    </a>
                      
            </form>
        </div>
    </div>
    
    </div>
    

    <!--Header-->
    <?php $this->view("home/footer_home")?>
    <!--End Header-->

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var identityCardModal = document.getElementById('identityCard');
        identityCardModal.addEventListener('show.bs.modal', function(event) {            
            var button = event.relatedTarget;


            var chauffeurRef = button.getAttribute('data-chauffeur-ref');
            var titleElement = identityCardModal.querySelector('.modal-title span');
            titleElement.textContent = chauffeurRef;


            var chauffeurNom = button.getAttribute('data-chauffeur-nom');
            var affichageNom = identityCardModal.querySelector('.modal-body #nom');
            affichageNom.textContent = chauffeurNom;

            var chauffeurPreNom = button.getAttribute('data-chauffeur-prenom');
            var affichagePreNom = identityCardModal.querySelector('.modal-body #prenom');
            affichagePreNom.textContent = chauffeurPreNom;

            var chauffeurExperience = button.getAttribute('data-chauffeur-experience');
            var affichageExperience = identityCardModal.querySelector('.modal-body #experience');
            affichageExperience.textContent = chauffeurExperience;
           

            var chauffeurAge = button.getAttribute('data-chauffeur-age');
            var afficheAge = identityCardModal.querySelector('.modal-body #age');
            afficheAge.textContent = chauffeurAge;


            var chauffeurCamion = button.getAttribute('data-chauffeur-camion');
            var afficheCamion = identityCardModal.querySelector('.modal-body #camion');
            afficheCamion.textContent = chauffeurCamion;





        });
    });
</script>  
    
</body>
</html>