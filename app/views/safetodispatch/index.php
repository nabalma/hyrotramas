<!DOCTYPE html>
<html lang="en">

<title>HYROTRAMAS | Safe To Dispatch </title>


<body>

    <!--Header-->
    <?php $this->view("home/header_home")?>
    <!--End Header-->


     <!--Title-->
     <div class="row mx-auto w-75 container d-flex align-items-center" style="max-height:100%">

    <div class="col-10">
        <div class="card border border-1 shadow-lg p-0 bg-body rounded">
                <p class="text-center text-white bg-secondary card-img-top h4 p-1" style="font-family:Arial, Helvetica, sans-serif">SAFE TO DISPATCH TRANSPORTEUR</p>
        </div>
    </div>
    <div class="col-2">
       
    </div>
    
        
    </div>
  <!--End Title-->
    
    <!--End Header-->

    <div class="container">
    <form action="" method="post">  <!-- Main Form -->


    <form id="subFormTransporteur" action="" method="post">  <!-- SubForm Submit Transporteur-->
            <!-- Header Safe To Dispatch -->
            <div class="row mx-auto" style="width:35rem">
                <div class="input-group">
                    <span style="width:11rem" class="input-group-text" id="basic-addon1">Réference</span>
                    <input id="reference" name="reference" type="text" class="form-control" placeholder="Réference" aria-label="Username" aria-describedby="basic-addon1" value="<?php if(isset($_SESSION["SafetoDispatch"]["reference"])) echo $_SESSION["SafetoDispatch"]["reference"] ?>">
                </div>
            </div>

            <div class="row mx-auto" style="width:35rem">
                <div class="input-group">
                    <span style="width:11rem" class="input-group-text" id="basic-addon1">Date d'établissement</span>
                    <input id="dateSTD" name="dateSTD" type="date" class="form-control text-primary" placeholder="" aria-label="Username" aria-describedby="basic-addon1" value="<?php if(isset($_SESSION["SafetoDispatch"]["dateSTD"])) echo $_SESSION["SafetoDispatch"]["dateSTD"] ?>">
                </div>
            </div>

            <div class="row mx-auto" style="width:35rem">
                <div class="input-group">
                <span style="width:11rem" class="input-group-text" id="basic-addon1">Transporteur</span>                      
                
                <select id="transporteur" name="transporteur" class="form-select text-primary" aria-label="Default select example">
                        <option selected>Selectionner Transporteur</option>
                        <?php foreach ($_SESSION["SafetoDispatch"]["transporters"] as $transporter) : ?>
                            <option value="<?php echo $transporter['Ref_Transporteur']; ?>"<?php if(isset($_SESSION["SafetoDispatch"]["leTransporteur"]) && $_SESSION["SafetoDispatch"]["leTransporteur"]== $transporter['Ref_Transporteur']) {echo "selected";}?>>
                                <?php echo $transporter['Designation_Transporteur']; ?>
                            </option>

                           

                        <?php endforeach; ?>
                </select>

                <button id="submit_Transporteur" name="submit_Transporteur" type="submit" class="btn btn-outline-danger">Confirmer</button>
                </div>
                
            </div>
          


         <!-- End Header Safe To Dispatch -->
    </form> <!-- End SubForm Submit Transporteur-->


         <!-- Informations Camion -->
         <div class="row card text-center shadow-lg p-1 rounded text-danger">
            INFORMATIONS CAMION   
        </div>

    <form id="subFormCamion" action="" method="post"> <!-- SubForm Submit Camion-->
            <div class="row mx-auto" style="width:65.5rem">           
                <div class="input-group">
                    <span style="width:2.5rem" class="input-group-text" id="basic-addon1">1.</span>
                    <span style="width:23rem" class="input-group-text" id="basic-addon1">Immatriculation Tracteur et Citerne</span>
                    
                    <select id="camionSelect" name="camionSelect" class="form-select text-primary" aria-label="Default select example">
                        <option selected>Selectionner Camion</option>
                        <?php foreach ($_SESSION["SafetoDispatch"]["camions"] as $item): ?>
                        <option value="<?php echo $item['ref_Camion']; ?>"<?php if(isset($_SESSION["SafetoDispatch"]["dataCamion"]) && $_SESSION["SafetoDispatch"]["dataCamion"][0]["ref_Camion"]== $item['ref_Camion']) {echo "selected";}?>><?php echo $item['immatriculation_Tracteur'];echo"/"; echo $item['immatriculation_Semi_Remorque'] ?></option>  
                    <?php endforeach; ?>
                    </select>


                    <button id="submit_Camion" name="submit_Camion" type="submit" class="btn btn-outline-danger">Confirmer</button>
                    <div class="d-flex justify-content-center align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 48 48"><circle cx="24" cy="24" r="21" fill="#4CAF50"/><path fill="#CCFF90" d="M34.6 14.6L21 28.2l-5.6-5.6l-2.8 2.8l8.4 8.4l16.4-16.4z"/></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 32 32"><g fill="none"><path fill="#F8312F" d="M30 16c0 7.732-6.268 14-14 14S2 23.732 2 16S8.268 2 16 2s14 6.268 14 14Z"/><path fill="#fff" d="M6 15a1 1 0 0 1 1-1h18a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-2Z"/></g></svg>
                    </div>                
                </div>    
            </div>

    </form> <!-- End SubForm Submit Camion-->
   
        <div class="row mx-auto" style="width:65.5rem">
            <div class="input-group">
                <span style="width:2.5rem" class="input-group-text" id="basic-addon1">2.</span>
                <span style="width:23rem" class="input-group-text" id="basic-addon1">Nature du Produit Transporté</span>
                <input type="text" id="produit" class="form-control" placeholder="Produit" aria-label="Username" aria-describedby="basic-addon1" value="<?php if(isset($_POST["submit_Camion"])) {echo ($_SESSION["SafetoDispatch"]["dataCamion"][0]["designation_Produit"]);} ?>">
               
                <div class="d-flex justify-content-center align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 48 48"><circle cx="24" cy="24" r="21" fill="#4CAF50"/><path fill="#CCFF90" d="M34.6 14.6L21 28.2l-5.6-5.6l-2.8 2.8l8.4 8.4l16.4-16.4z"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 32 32"><g fill="none"><path fill="#F8312F" d="M30 16c0 7.732-6.268 14-14 14S2 23.732 2 16S8.268 2 16 2s14 6.268 14 14Z"/><path fill="#fff" d="M6 15a1 1 0 0 1 1-1h18a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-2Z"/></g></svg>
                </div>
               
               
            </div>
        </div>

    <div class=" row mx-auto gx-0" style="width:64rem">
    
        <div class="col-2" style="width:2.5rem">
            <div  class="input-group-text" id="basic-addon1">3.</div>
            <div  class="input-group-text" id="basic-addon1">4.</div>
            <div  class="input-group-text" id="basic-addon1">5.</div>
        </div>

        <div class="col-3" style="width:23rem">
            <div  class="input-group-text " id="basic-addon1">Date du dernier dépotage</div>
            <div  class="input-group-text " id="basic-addon1">Site/Lieu de dépotage</div>
            <div  class="input-group-text " id="basic-addon1">Date du dernier Safe to Load</div>
        </div>

        <div class="col-3" style="width:17rem">
            <input type="date" class="form-control" placeholder="Dernier Dépotage" aria-label="Username" aria-describedby="basic-addon1">
            <input type="text" class="form-control " placeholder="Site/Lieu de dépotage" aria-label="Username" aria-describedby="basic-addon1">
            <input type="date" class="form-control " placeholder="Dernier Safetoload" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <div class="col-2 ms-1" style="width:17rem;height:7rem">
            <div style="height:7rem;font-size:12px" class="input-group-text bg-body text-wrap text-start" id="basic-addon1">
            Cela nous permettra de réclammer rapidement auprès des Opérateurs et Dépôts MINES,les STL non disponibles sur ARIOFLOW au moment de la demande de Bons
            </div>
        </div>

        <div class="ms-1 col-1" style="width:4rem">
            <div class="row mb-1 gx-0 d-flex justify-content-center align-items-center">
                    <svg class="col" xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 48 48"><circle cx="24" cy="24" r="21" fill="#4CAF50"/><path fill="#CCFF90" d="M34.6 14.6L21 28.2l-5.6-5.6l-2.8 2.8l8.4 8.4l16.4-16.4z"/></svg>
                    <svg class="col" xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 32 32"><g fill="none"><path fill="#F8312F" d="M30 16c0 7.732-6.268 14-14 14S2 23.732 2 16S8.268 2 16 2s14 6.268 14 14Z"/><path fill="#fff" d="M6 15a1 1 0 0 1 1-1h18a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-2Z"/></g></svg>
            </div>
            <div class="row mb-1 gx-0 d-flex justify-content-center align-items-center">
                    <svg class="col" xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 48 48"><circle cx="24" cy="24" r="21" fill="#4CAF50"/><path fill="#CCFF90" d="M34.6 14.6L21 28.2l-5.6-5.6l-2.8 2.8l8.4 8.4l16.4-16.4z"/></svg>
                    <svg class="col" xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 32 32"><g fill="none"><path fill="#F8312F" d="M30 16c0 7.732-6.268 14-14 14S2 23.732 2 16S8.268 2 16 2s14 6.268 14 14Z"/><path fill="#fff" d="M6 15a1 1 0 0 1 1-1h18a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-2Z"/></g></svg>
            </div>
            <div class="row mb-1 gx-0 d-flex justify-content-center align-items-center">
                    <svg class="col" xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 48 48"><circle cx="24" cy="24" r="21" fill="#4CAF50"/><path fill="#CCFF90" d="M34.6 14.6L21 28.2l-5.6-5.6l-2.8 2.8l8.4 8.4l16.4-16.4z"/></svg>
                    <svg class="col" xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 32 32"><g fill="none"><path fill="#F8312F" d="M30 16c0 7.732-6.268 14-14 14S2 23.732 2 16S8.268 2 16 2s14 6.268 14 14Z"/><path fill="#fff" d="M6 15a1 1 0 0 1 1-1h18a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-2Z"/></g></svg>
            </div>
        </div>
       

    </div>


    <div class=" row mx-auto gx-0" style="width:64rem">
    
    <div class="col-2" style="width:2.5rem">
        <div  class="input-group-text" id="basic-addon1">6.</div>
        <div  class="input-group-text" id="basic-addon1">7.</div>
        <div  class="input-group-text" id="basic-addon1">8.</div>
        <div  class="input-group-text" id="basic-addon1">9.</div>
        <div  class="input-group-text" id="basic-addon1">10.</div>
    </div>

    <div class="col-3" style="width:23rem">
        <div  class="input-group-text" id="basic-addon1">Date échéance Assurance Camion</div>
        <div  class="input-group-text" id="basic-addon1">Date échéance Assurance Produit</div>
        <div  class="input-group-text" id="basic-addon1">Date échéance CCVA</div>
        <div  class="input-group-text" id="basic-addon1">Date échéance BUMIGEB</div>
        <div  class="input-group-text" id="basic-addon1">Date échéance Contrôle Technique</div>
    </div>

    <div class="col-4" style="width:17rem">
        <input type="date" class="form-control" placeholder="Dernier Dépotage" aria-label="Username" aria-describedby="basic-addon1">
        <input type="date" class="form-control" placeholder="Site/Lieu de dépotage" aria-label="Username" aria-describedby="basic-addon1">
        <input type="date" class="form-control" placeholder="Dernier Safetoload" aria-label="Username" aria-describedby="basic-addon1">
        <input type="date" class="form-control" placeholder="Site/Lieu de dépotage" aria-label="Username" aria-describedby="basic-addon1">
        <input type="date" class="form-control" placeholder="Dernier Safetoload" aria-label="Username" aria-describedby="basic-addon1">
    </div>

    <div class="col-3 ms-1" style="width:17rem;height:7.5rem">
    <div style="height:11.7rem;font-size:12px" class="input-group-text bg-body text-wrap text-start" id="basic-addon1">
        En cas de renouvellement, joindre au dossier, une copie de chaque document</div>
    </div>


    <div class="ms-1 col-1" style="width:4rem">
            <div class="row mb-1 gx-0 d-flex justify-content-center align-items-center">
                    <svg class="col" xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 48 48"><circle cx="24" cy="24" r="21" fill="#4CAF50"/><path fill="#CCFF90" d="M34.6 14.6L21 28.2l-5.6-5.6l-2.8 2.8l8.4 8.4l16.4-16.4z"/></svg>
                    <svg class="col" xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 32 32"><g fill="none"><path fill="#F8312F" d="M30 16c0 7.732-6.268 14-14 14S2 23.732 2 16S8.268 2 16 2s14 6.268 14 14Z"/><path fill="#fff" d="M6 15a1 1 0 0 1 1-1h18a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-2Z"/></g></svg>
            </div>
            <div class="row mb-1 gx-0 d-flex justify-content-center align-items-center">
                    <svg class="col" xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 48 48"><circle cx="24" cy="24" r="21" fill="#4CAF50"/><path fill="#CCFF90" d="M34.6 14.6L21 28.2l-5.6-5.6l-2.8 2.8l8.4 8.4l16.4-16.4z"/></svg>
                    <svg class="col" xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 32 32"><g fill="none"><path fill="#F8312F" d="M30 16c0 7.732-6.268 14-14 14S2 23.732 2 16S8.268 2 16 2s14 6.268 14 14Z"/><path fill="#fff" d="M6 15a1 1 0 0 1 1-1h18a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-2Z"/></g></svg>
            </div>
            <div class="row mb-1 gx-0 d-flex justify-content-center align-items-center">
                    <svg class="col" xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 48 48"><circle cx="24" cy="24" r="21" fill="#4CAF50"/><path fill="#CCFF90" d="M34.6 14.6L21 28.2l-5.6-5.6l-2.8 2.8l8.4 8.4l16.4-16.4z"/></svg>
                    <svg class="col" xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 32 32"><g fill="none"><path fill="#F8312F" d="M30 16c0 7.732-6.268 14-14 14S2 23.732 2 16S8.268 2 16 2s14 6.268 14 14Z"/><path fill="#fff" d="M6 15a1 1 0 0 1 1-1h18a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-2Z"/></g></svg>
            </div>
            <div class="row mb-1 gx-0 d-flex justify-content-center align-items-center">
                    <svg class="col" xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 48 48"><circle cx="24" cy="24" r="21" fill="#4CAF50"/><path fill="#CCFF90" d="M34.6 14.6L21 28.2l-5.6-5.6l-2.8 2.8l8.4 8.4l16.4-16.4z"/></svg>
                    <svg class="col" xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 32 32"><g fill="none"><path fill="#F8312F" d="M30 16c0 7.732-6.268 14-14 14S2 23.732 2 16S8.268 2 16 2s14 6.268 14 14Z"/><path fill="#fff" d="M6 15a1 1 0 0 1 1-1h18a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-2Z"/></g></svg>
            </div>
            <div class="row mb-1 gx-0 d-flex justify-content-center align-items-center">
                    <svg class="col" xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 48 48"><circle cx="24" cy="24" r="21" fill="#4CAF50"/><path fill="#CCFF90" d="M34.6 14.6L21 28.2l-5.6-5.6l-2.8 2.8l8.4 8.4l16.4-16.4z"/></svg>
                    <svg class="col" xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 32 32"><g fill="none"><path fill="#F8312F" d="M30 16c0 7.732-6.268 14-14 14S2 23.732 2 16S8.268 2 16 2s14 6.268 14 14Z"/><path fill="#fff" d="M6 15a1 1 0 0 1 1-1h18a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-2Z"/></g></svg>
            </div>
    </div>

</div>


<div class=" row mx-auto gx-0" style="width:64rem;height:36px">
    
    <div class="col-2" style="width:2.5rem">
        <div  class="input-group-text" id="basic-addon1">11.</div>
    </div>

    <div class="col-3" style="width:23rem">
        <div  class="input-group-text" id="basic-addon1">Extraction Vidéo realisée ?</div>
    </div>

    <div class="col-4 mb-1 mt-1" style="width:17rem;padding-left:5rem;">
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
            <label class="form-check-label" for="inlineCheckbox1">Oui</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">Non</label>
        </div>       
    </div>

    <div class="col-2 ms-1" style="width:17rem;height:2.5rem">
    <div style="height:2.5rem;font-size:12px" class="input-group-text bg-body text-wrap text-start" id="basic-addon1">
    Si oui, joindre la fiche OBC
    </div>
    
    </div>

    <div class="ms-1 col-1" style="width:4rem">
            <div class="row mb-1 gx-0 d-flex justify-content-center align-items-center">
                    <svg class="col" xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 48 48"><circle cx="24" cy="24" r="21" fill="#4CAF50"/><path fill="#CCFF90" d="M34.6 14.6L21 28.2l-5.6-5.6l-2.8 2.8l8.4 8.4l16.4-16.4z"/></svg>
                    <svg class="col" xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 32 32"><g fill="none"><path fill="#F8312F" d="M30 16c0 7.732-6.268 14-14 14S2 23.732 2 16S8.268 2 16 2s14 6.268 14 14Z"/><path fill="#fff" d="M6 15a1 1 0 0 1 1-1h18a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-2Z"/></g></svg>
            </div>
    </div>


</div>

<div class=" row mx-auto gx-0" style="width:64rem;height:80px">
    
    <div class="col-2" style="width:2.5rem">
        <div  class="input-group-text" id="basic-addon1">12.</div>
        <div  class="input-group-text" id="basic-addon1">13.</div>
    </div>

    <div class="col-3" style="width:23rem">
        <div  class="input-group-text" id="basic-addon1">L'OBC est-il en bon état et fonctionnel ?</div>
        <div  class="input-group-text" id="basic-addon1">La caméra est-elle en bon état et fonctionnelle ?</div>
    </div>

    <div class="col-4" style="width:17rem;height:80px;padding-left:5rem;">
        <div class="mb-1 mt-1 row"> 
            <div class="d-block" style="width:15rem">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">Oui</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                        <label class="form-check-label" for="inlineCheckbox2">Non</label>
                    </div>             
            </div>    
        </div>
        
        <div class="mb-1 mt-1 row"> 
            <div class="d-block" style="width:15rem">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">Oui</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                        <label class="form-check-label" for="inlineCheckbox2">Non</label>
                    </div>             
            </div>    
        </div>       
    </div>

    <div class="col-2 ms-1" style="width:17rem;height:5rem">
    <div style="height:5rem;font-size:12px" class="input-group-text bg-body text-wrap text-start" id="basic-addon1">
    Si non, demander une intervention OBC et joindre la fiche d'intervetion ; Si oui, passer à la question 14
    </div>
    </div>

    <div class="ms-1 col-1" style="width:4rem">
            <div class="row mb-1 gx-0 d-flex justify-content-center align-items-center">
                    <svg class="col" xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 48 48"><circle cx="24" cy="24" r="21" fill="#4CAF50"/><path fill="#CCFF90" d="M34.6 14.6L21 28.2l-5.6-5.6l-2.8 2.8l8.4 8.4l16.4-16.4z"/></svg>
                    <svg class="col" xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 32 32"><g fill="none"><path fill="#F8312F" d="M30 16c0 7.732-6.268 14-14 14S2 23.732 2 16S8.268 2 16 2s14 6.268 14 14Z"/><path fill="#fff" d="M6 15a1 1 0 0 1 1-1h18a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-2Z"/></g></svg>
            </div>
            <div class="row mb-1 gx-0 d-flex justify-content-center align-items-center">
                    <svg class="col" xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 48 48"><circle cx="24" cy="24" r="21" fill="#4CAF50"/><path fill="#CCFF90" d="M34.6 14.6L21 28.2l-5.6-5.6l-2.8 2.8l8.4 8.4l16.4-16.4z"/></svg>
                    <svg class="col" xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 32 32"><g fill="none"><path fill="#F8312F" d="M30 16c0 7.732-6.268 14-14 14S2 23.732 2 16S8.268 2 16 2s14 6.268 14 14Z"/><path fill="#fff" d="M6 15a1 1 0 0 1 1-1h18a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-2Z"/></g></svg>
            </div>
    </div>

</div>

         <!-- End OF Informations Camion -->


        <!-- Informations Chauffeur -->
        <div class="row card text-center shadow-lg p-1rounded text-danger">
            INFORMATIONS CHAUFFEUR   
        </div>


    <form id="subFormChauffeur" action="" method="post"> <!-- SubForm Submit Chauffeur-->
        <div class="row mx-auto" style="width:65.5rem">
        
            <div class="input-group">
                <span style="width:2.5rem" class="input-group-text" id="basic-addon1">14.</span>
                <span style="width:23rem" class="input-group-text" id="basic-addon1">Noms et Prénoms Chauffeur</span>

    
                <select id="chauffeur" name="chauffeur" class="form-select text-primary" aria-label="Default select example">
                        

                    <option selected>Selectionner Chauffeur</option>
                        <?php foreach ($_SESSION["SafetoDispatch"]["chauffeurs"] as $item): ?>
                        <option value="<?php echo $item['ref_Chauffeur']; ?>"<?php       if($_SESSION["SafetoDispatch"]["dataCamion"] && $_SESSION["SafetoDispatch"]["dataCamion"][0]["chauffeur_associe"]==$item['ref_Chauffeur']) {echo "selected";} ?>><?php echo $item["nom_Chauffeur"];echo" "; echo $item["prenom_Chauffeur"] ?></option>  
                    <?php endforeach; ?>
                    </select>
              
                <button id="submit_Chauffeur" name="submit_Chauffeur" type="submit" class="btn btn-outline-danger">Confirmer</button>
    </form>   <!--End  SubForm Submit Chauffeur-->             
                <div class="d-flex justify-content-center align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 48 48"><circle cx="24" cy="24" r="21" fill="#4CAF50"/><path fill="#CCFF90" d="M34.6 14.6L21 28.2l-5.6-5.6l-2.8 2.8l8.4 8.4l16.4-16.4z"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 32 32"><g fill="none"><path fill="#F8312F" d="M30 16c0 7.732-6.268 14-14 14S2 23.732 2 16S8.268 2 16 2s14 6.268 14 14Z"/><path fill="#fff" d="M6 15a1 1 0 0 1 1-1h18a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-2Z"/></g></svg>
                </div>

            </div>
            
        </div>

    <div class="row mx-auto" style="width:65.5rem">
        <div class="input-group">
            <span style="width:2.5rem" class="input-group-text" id="basic-addon1">15.</span>
            <span style="width:23rem" class="input-group-text" id="basic-addon1">Numéro Permis de Conduire</span>
            <input type="text" class="form-control" placeholder="Num Permis" aria-label="Username" aria-describedby="basic-addon1" value="<?php if(isset($_POST["submit_Camion"])) {echo ($_SESSION["SafetoDispatch"]["dataCamion"][0]["numero_Permis_Chauffeur"]);} ?>">
            
            <div class="d-flex justify-content-center align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 48 48"><circle cx="24" cy="24" r="21" fill="#4CAF50"/><path fill="#CCFF90" d="M34.6 14.6L21 28.2l-5.6-5.6l-2.8 2.8l8.4 8.4l16.4-16.4z"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 32 32"><g fill="none"><path fill="#F8312F" d="M30 16c0 7.732-6.268 14-14 14S2 23.732 2 16S8.268 2 16 2s14 6.268 14 14Z"/><path fill="#fff" d="M6 15a1 1 0 0 1 1-1h18a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-2Z"/></g></svg>
            </div>
           
        </div>
    </div>

    <div class="row mx-auto" style="width:65.5rem">
        <div class="input-group">
            <span style="width:2.5rem" class="input-group-text" id="basic-addon1">16.</span>
            <span style="width:23rem" class="input-group-text" id="basic-addon1">Date Echéance Formation Chauffeur</span>
            <input type="date" class="form-control" placeholder="Echéance Formation" aria-label="Username" aria-describedby="basic-addon1" value="<?php if(isset($_POST["submit_Camion"])) {echo ($_SESSION["SafetoDispatch"]["echeanceformation"][0]["Date_Echéance_Evaluation_Chauffeur"]);} ?>">
            
            <div class="d-flex justify-content-center align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 48 48"><circle cx="24" cy="24" r="21" fill="#4CAF50"/><path fill="#CCFF90" d="M34.6 14.6L21 28.2l-5.6-5.6l-2.8 2.8l8.4 8.4l16.4-16.4z"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 32 32"><g fill="none"><path fill="#F8312F" d="M30 16c0 7.732-6.268 14-14 14S2 23.732 2 16S8.268 2 16 2s14 6.268 14 14Z"/><path fill="#fff" d="M6 15a1 1 0 0 1 1-1h18a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-2Z"/></g></svg>
            </div>
           
        </div>
    </div>

    <div class=" row mx-auto gx-0" style="width:64rem;height:38px">
    
        <div class="col-2" style="width:2.5rem">
            <div  class="input-group-text" id="basic-addon1">17.</div>
        </div>

        <div class="col-3" style="width:23rem">
            <div  class="input-group-text" id="basic-addon1">Date Echéance Dernière Visite Médicale</div>
        </div>

        <div class="col-4" style="width:17rem">
        <input type="date" class="form-control" placeholder="Echéance Formation" aria-label="Username" aria-describedby="basic-addon1" value="<?php if(isset($_POST["submit_Camion"])) {echo ($_SESSION["SafetoDispatch"]["echeancevisitemedicale"][0]["Date_Echéance_Certificat_Medical"]);} ?>">       
        </div>

        <div class="col-2 ms-1" style="width:17rem;height:2.5rem">
        <div style="height:2.5rem;font-size:12px" class="input-group-text bg-body text-wrap text-start" id="basic-addon1">
        En cas de renouvellement, joindre une copie de la dernière visite
        </div>
        </div>

        <div class="ms-1 col-1" style="width:4rem">
            <div class="row mb-1 gx-0 d-flex justify-content-center align-items-center">
                    <svg class="col" xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 48 48"><circle cx="24" cy="24" r="21" fill="#4CAF50"/><path fill="#CCFF90" d="M34.6 14.6L21 28.2l-5.6-5.6l-2.8 2.8l8.4 8.4l16.4-16.4z"/></svg>
                    <svg class="col" xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 32 32"><g fill="none"><path fill="#F8312F" d="M30 16c0 7.732-6.268 14-14 14S2 23.732 2 16S8.268 2 16 2s14 6.268 14 14Z"/><path fill="#fff" d="M6 15a1 1 0 0 1 1-1h18a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-2Z"/></g></svg>
            </div>
    </div>

       

    </div>


    <div class="row mx-auto" style="width:65.5rem">
        
        <div class="input-group">
            <span style="width:2.5rem" class="input-group-text" id="basic-addon1">18.</span>
            <span style="width:23rem" class="input-group-text" id="basic-addon1">Préciser le dernier Trajet effectué Aller-Retour</span>
            <input type="text" class="form-control" placeholder="Dernier Trajet" aria-label="Username" aria-describedby="basic-addon1">
            <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp</span>
        
        </div>
        
    </div>

    <div class="row mx-auto" style="width:65.5rem">
        <div class="col input-group">
            <span style="width:2.5rem" class="input-group-text" id="basic-addon1">19.</span>
            <span style="width:23rem" class="input-group-text" id="basic-addon1">Date Début et Fin du dernier Trajet effectué</span>
            <input type="date" class="form-control" placeholder="Num Permis" aria-label="Username" aria-describedby="basic-addon1">
            <input type="date" class="form-control" placeholder="Num Permis" aria-label="Username" aria-describedby="basic-addon1">
            <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp</span>
        
        </div>
        
    </div>

    <div class=" row mx-auto gx-0" style="width:64rem">
    
    <div class="col-2" style="width:2.5rem">
        <div  class="input-group-text" id="basic-addon1">20.</div>
        <div  class="input-group-text" id="basic-addon1">21.</div>
        <div  class="input-group-text" id="basic-addon1">22.</div>
        <div  class="input-group-text" id="basic-addon1">23.</div>
        <div  class="input-group-text" id="basic-addon1">24.</div>
    </div>

    <div class="col-3" style="width:23rem">
        <div  class="input-group-text" id="basic-addon1">Le chauffeur a t-il commis une violation ?</div>
        <div  class="input-group-text" id="basic-addon1">Type de violation enregistrée</div>
        <div  class="input-group-text" id="basic-addon1">Date de la Violation</div>
        <div  class="input-group-text" id="basic-addon1">Nature de la sanction prononcée</div>
        <div  class="input-group-text" id="basic-addon1">Nombre de Jours restants Sanction</div>
    </div>

    <div class="col-4" style="width:17rem">
        <input type="date" class="form-control" placeholder="Dernier Dépotage" aria-label="Username" aria-describedby="basic-addon1">
        <input type="date" class="form-control" placeholder="Site/Lieu de dépotage" aria-label="Username" aria-describedby="basic-addon1">
        <input type="date" class="form-control" placeholder="Dernier Safetoload" aria-label="Username" aria-describedby="basic-addon1">
        <input type="date" class="form-control" placeholder="Site/Lieu de dépotage" aria-label="Username" aria-describedby="basic-addon1">
        <input type="date" class="form-control" placeholder="Dernier Safetoload" aria-label="Username" aria-describedby="basic-addon1">
    </div>

    <div class="col-3 ms-1" style="width:17rem;height:7.5rem">
    <div style="height:11.8rem;font-size:12px" class="input-group-text bg-body text-wrap text-start" id="basic-addon1">
    Si oui, remplir cette partie et joindre la note de sanction proncée à l'encontre du chauffeur ;Si non, passer à la question 25</div>
    </div>


    <div class="ms-1 col-1" style="width:4rem">
            <div class="row mb-1 gx-0 d-flex justify-content-center align-items-center">
                    <svg class="col" xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 48 48"><circle cx="24" cy="24" r="21" fill="#4CAF50"/><path fill="#CCFF90" d="M34.6 14.6L21 28.2l-5.6-5.6l-2.8 2.8l8.4 8.4l16.4-16.4z"/></svg>
                    <svg class="col" xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 32 32"><g fill="none"><path fill="#F8312F" d="M30 16c0 7.732-6.268 14-14 14S2 23.732 2 16S8.268 2 16 2s14 6.268 14 14Z"/><path fill="#fff" d="M6 15a1 1 0 0 1 1-1h18a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-2Z"/></g></svg>
            </div>
            <div class="row mb-1 gx-0 d-flex justify-content-center align-items-center">
                    <svg class="col" xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 48 48"><circle cx="24" cy="24" r="21" fill="#4CAF50"/><path fill="#CCFF90" d="M34.6 14.6L21 28.2l-5.6-5.6l-2.8 2.8l8.4 8.4l16.4-16.4z"/></svg>
                    <svg class="col" xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 32 32"><g fill="none"><path fill="#F8312F" d="M30 16c0 7.732-6.268 14-14 14S2 23.732 2 16S8.268 2 16 2s14 6.268 14 14Z"/><path fill="#fff" d="M6 15a1 1 0 0 1 1-1h18a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-2Z"/></g></svg>
            </div>
            <div class="row mb-1 gx-0 d-flex justify-content-center align-items-center">
                    <svg class="col" xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 48 48"><circle cx="24" cy="24" r="21" fill="#4CAF50"/><path fill="#CCFF90" d="M34.6 14.6L21 28.2l-5.6-5.6l-2.8 2.8l8.4 8.4l16.4-16.4z"/></svg>
                    <svg class="col" xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 32 32"><g fill="none"><path fill="#F8312F" d="M30 16c0 7.732-6.268 14-14 14S2 23.732 2 16S8.268 2 16 2s14 6.268 14 14Z"/><path fill="#fff" d="M6 15a1 1 0 0 1 1-1h18a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-2Z"/></g></svg>
            </div>
            <div class="row mb-1 gx-0 d-flex justify-content-center align-items-center">
                    <svg class="col" xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 48 48"><circle cx="24" cy="24" r="21" fill="#4CAF50"/><path fill="#CCFF90" d="M34.6 14.6L21 28.2l-5.6-5.6l-2.8 2.8l8.4 8.4l16.4-16.4z"/></svg>
                    <svg class="col" xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 32 32"><g fill="none"><path fill="#F8312F" d="M30 16c0 7.732-6.268 14-14 14S2 23.732 2 16S8.268 2 16 2s14 6.268 14 14Z"/><path fill="#fff" d="M6 15a1 1 0 0 1 1-1h18a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-2Z"/></g></svg>
            </div>
            <div class="row mb-1 gx-0 d-flex justify-content-center align-items-center">
                    <svg class="col" xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 48 48"><circle cx="24" cy="24" r="21" fill="#4CAF50"/><path fill="#CCFF90" d="M34.6 14.6L21 28.2l-5.6-5.6l-2.8 2.8l8.4 8.4l16.4-16.4z"/></svg>
                    <svg class="col" xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 32 32"><g fill="none"><path fill="#F8312F" d="M30 16c0 7.732-6.268 14-14 14S2 23.732 2 16S8.268 2 16 2s14 6.268 14 14Z"/><path fill="#fff" d="M6 15a1 1 0 0 1 1-1h18a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-2Z"/></g></svg>
            </div>
    </div>



    </div>


    <div class="row mx-auto" style="width:65.5rem">
        
            <div class="input-group">
                <span style="width:2.5rem" class="input-group-text" id="basic-addon1">25.</span>
                <span style="width:23rem" class="input-group-text" id="basic-addon1">Solde des points SCP</span>
                <input type="text" class="form-control" placeholder="Points" aria-label="Username" aria-describedby="basic-addon1">
             

                <div class="d-flex justify-content-center align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 48 48"><circle cx="24" cy="24" r="21" fill="#4CAF50"/><path fill="#CCFF90" d="M34.6 14.6L21 28.2l-5.6-5.6l-2.8 2.8l8.4 8.4l16.4-16.4z"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 32 32"><g fill="none"><path fill="#F8312F" d="M30 16c0 7.732-6.268 14-14 14S2 23.732 2 16S8.268 2 16 2s14 6.268 14 14Z"/><path fill="#fff" d="M6 15a1 1 0 0 1 1-1h18a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-2Z"/></g></svg>
                </div>
            
            </div>
            
        </div>



         <!-- End of Informations Chauffeur -->

        <!-- Sensibilisation obligatoire -->
        <div class="row card text-center shadow-lg p-1 rounded text-danger">
            SENSIBILISATION OBLIGATOIRE   
        </div>

        <div class=" row mx-auto gx-0" style="width:64rem">
    
    <div class="col-2" style="width:2.5rem">
        <div  class="input-group-text" id="basic-addon1">26.</div>
        <div  class="input-group-text" id="basic-addon1">27.</div>
      
    </div>

    <div class="col-3" style="width:23rem">
        <div  class="input-group-text" id="basic-addon1">Date dermiére sensibilisation Chauffeur</div>
        <div  class="input-group-text" id="basic-addon1">Thème(s) abordé(s) - Joindre la liste d'émargement</div>
       
    </div>

    <div class="col-4" style="width:17rem">
        <input type="date" class="form-control" placeholder="Dernier Dépotage" aria-label="Username" aria-describedby="basic-addon1">
        <input type="date" class="form-control" placeholder="Site/Lieu de dépotage" aria-label="Username" aria-describedby="basic-addon1">
        
    </div>

    <div class="col-2 ms-1" style="width:17rem;height:5rem">
    <div style="height:5rem;font-size:12px" class="input-group-text bg-body text-wrap text-start" id="basic-addon1">
    A compter de la diffusion de la présente liste, Total Burkina fera un rappel des ALERTES HSE pour toute fin utile.</div>
    </div>

    <div class="ms-1 col-1" style="width:4rem">
            <div class="row mb-1 gx-0 d-flex justify-content-center align-items-center">
                    <svg class="col" xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 48 48"><circle cx="24" cy="24" r="21" fill="#4CAF50"/><path fill="#CCFF90" d="M34.6 14.6L21 28.2l-5.6-5.6l-2.8 2.8l8.4 8.4l16.4-16.4z"/></svg>
                    <svg class="col" xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 32 32"><g fill="none"><path fill="#F8312F" d="M30 16c0 7.732-6.268 14-14 14S2 23.732 2 16S8.268 2 16 2s14 6.268 14 14Z"/><path fill="#fff" d="M6 15a1 1 0 0 1 1-1h18a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-2Z"/></g></svg>
            </div>
            <div class="row mb-1 gx-0 d-flex justify-content-center align-items-center">
                    <svg class="col" xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 48 48"><circle cx="24" cy="24" r="21" fill="#4CAF50"/><path fill="#CCFF90" d="M34.6 14.6L21 28.2l-5.6-5.6l-2.8 2.8l8.4 8.4l16.4-16.4z"/></svg>
                    <svg class="col" xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 32 32"><g fill="none"><path fill="#F8312F" d="M30 16c0 7.732-6.268 14-14 14S2 23.732 2 16S8.268 2 16 2s14 6.268 14 14Z"/><path fill="#fff" d="M6 15a1 1 0 0 1 1-1h18a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-2Z"/></g></svg>
            </div>
    </div>

    </div>
         <!-- End of Sensibilisation obligatoire -->


         <div class="row">
 
            <div class="col">
                    <div class="card border border-1 shadow-lg p-1 bg-body rounded row mx-auto">
                        <h5 class="card-header fs-6">VISA DU TRANSPORTEUR</h5>
                        <div class="card-body">
                            <h5 class="card-title fs-6 ">Nom(s) et Prénom(s)</h5>
                            <p class="card-text text-wrap">----------------------------------------------------------------------------------</p>
                        </div>
                    </div>
            </div>

            <div class="col"></div>
            <div class="col"></div>
         </div>
         
         

           <!-- Input Modal -->
    <div class="container">
            <div class="mt-1 mb-1 row">

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
</div>
<!-- Input Safe To Dispatch -->






         <!-- Bouton Precedent -->
    <div class="row">
        <div class="col"></div>
      
        <div class="col">
        <div class="card border border-1 shadow-lg p-1 mb-1 bg-body w-50 rounded">
            <form method="post" class="row d-flex mx-auto w-100">                  
                      <a href="<?php ROOT ?>operationsvoyages" class="p-0 w-100 fw-bold fs-5 btn btn-outline-primary">
                      <svg xmlns="http://www.w3.org/2000/svg" width="1.8rem" height="1.8rem" viewBox="0 0 512 512"><path fill="currentColor" d="M321.94 98L158.82 237.78a24 24 0 0 0 0 36.44L321.94 414c15.57 13.34 39.62 2.28 39.62-18.22v-279.6c0-20.5-24.05-31.56-39.62-18.18Z"/></svg>
                      PRECEDENT
                    </a>
                      
            </form>
        </div>
        </div>
        <div class="col d-flex justify-content-end">
        <div class="card border border-1 shadow-lg p-1 mb-1 bg-body w-50 rounded">
            <form method="post" class="row d-flex mx-auto w-100">                  
                      <button name="create_STD" type="submit" class="p-0 w-100 fw-bold fs-5 btn btn-outline-danger">
                      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><path fill="currentColor" d="M16 2A14.172 14.172 0 0 0 2 16a14.172 14.172 0 0 0 14 14a14.172 14.172 0 0 0 14-14A14.172 14.172 0 0 0 16 2Zm8 15h-7v7h-2v-7H8v-2h7V8h2v7h7Z"/><path fill="none" d="M24 17h-7v7h-2v-7H8v-2h7V8h2v7h7v2z"/></svg>
                      CREER 
                    </button >
                      
            </form>
        </div>
    </div>


    </div>
    </form>  <!-- End Main Form -->
    </div>
   
        



 <!----------------------------------------------------------------------------------------------------------->
    <!--Footer-->
    <?php $this->view("home/footer_home")?>
    <!--End Footer-->

    
    
</body>
</html>