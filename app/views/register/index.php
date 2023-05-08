<?php $this->view("home/header_home"); ?>
<!----------------------------------------------------------------------------------------------------------------->

  

<!--Registration Content-->
 <div class="container">
<h1 class="h3 mt-1 mb-1 fw-normal text-center ">Enregistrez - Vous</h1>


<!--Password matching alertes-->
<?php if(1===1){echo $this->view("register/password_matching_error");}?>
<!--End of Password matching alertes-->


<!--Register form-->
<div class="row w-75 border border-3 rounded-3 mx-auto">
    <div class="col-md-5"><img class="" src="<?=ASSETS ?>images/operatrice.jpg " alt="Image_accueil " srcset=" " /></div>
    <div class="col-md-7">

            <form class="p-1 bg-light" method= "post" action = "confirmation_compte.php" onsubmit="return VerifCreationCompte();">
        
                <div class="ms-1 me-1 mt-1 row mb-1 w-100">
                    <label for="inputNom" class="col-sm-4 col-form-label">Nom</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputNom" name="inputNom" required >
                    </div>
                </div>

                <div class="ms-1 me-1 mt-1 row mb-1 w-100">
                    <label for="inputPrenom" class="col-sm-4 col-form-label">Prénom</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputPrenom" name ="inputPrenom" required>
                    </div>
                </div>

                <div class="ms-1 me-1 row mt-1 mb-1 w-100">
                    <label for="inputEmail" class="col-sm-4 col-form-label">Email</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" id="inputEmail" name="inputEmail" required >
                    </div>
                </div>

                <div class="ms-1 me-1 row mt-1 mb-1 w-100">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Password</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control" id="inputPassword" name="inputPassword" minlength="8" maxlength="12" required>
                    </div>
                </div>

                <div class="ms-1 me-1 row mt-1 mb-1 w-100">
                    <label for="confirmPassword" class="col-sm-4 col-form-label">Confirm Password</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" minlength="8" maxlength="12" required>
                    </div>
                </div>

                <fieldset class="ms-1 me-1 row mt-2 mb-1">
                        <legend class="col-form-label col-sm-4 pt-0">Profil d'utilisateur</legend>
                            <div class="col-sm-8">

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="administrateur" value="1" >
                                        <label class="form-check-label" for="administrateur">
                                        Administrateur
                                        </label> 
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="superviseur" value="2">
                                        <label class="form-check-label" for="superviseur">
                                        Superviseur
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gestionChauffeurs" value="3">
                                        <label class="form-check-label" for="gestionChauffeurs">
                                        Gestionnaire des chauffeurs
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gestionVoyages" value="4">
                                        <label class="form-check-label" for="gestionVoyages">
                                        Gestionnaire des voyages
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gestionCamions" value="5">
                                        <label class="form-check-label" for="gestionCamions">
                                        Gestionnaire des camions
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="autre" value="6" checked>
                                        <label class="form-check-label" for="autre">
                                        Autre
                                        </label>
                                    </div>
                            
                            
                            </div>
                </fieldset>


                <div class="row ms-2 mt-2 mb-1">
                    
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="acceptConditions" name="acceptConditions" required>
                        <label class="form-check-label" for="acceptConditions">
                            J'accepte les termes et conditions
                        </label>
                        </div>
                    
                </div>

                <div class="mb-4 w-25 mx-auto">
                    <button type="submit" class="btn btn-primary" name="creerCompte">S'enregistrer</button>
                </div>

        </form>


    </div>
</div>

 <!-- End of Register Form -->


</div>

   <!----------------------------------------------------------------------------------------------------------------->
   <?php $this->view("home/footer_home"); ?>

