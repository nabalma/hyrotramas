<?php $this->view("home/header_home"); ?>


  <!----------------------------------------------------------------------------------------------------------------->

  

<!--Login Content-->
 <div class="row mt-3 mb-5">

<div class="mt-4 mb-3 col-6 d-none d-md-block">
    <img class="ms-4 rounded mx-auto d-block img-thumbnail " src="<?=ASSETS ?>images/camions.jpg " alt="Image_accueil " srcset=" " />
</div>
<div class="mt-4 mb-3 col-4 container align-middle login-formulaire card bg-dark text-white ">
    <main class="form-signin w-100 m-auto">
        <form class="" method="post">

            <h1 class="h3 mt-4 mb-3 fw-normal text-center ">Connectez - Vous</h1>

            <hr>

            <?php if(isset( $_SESSION["login_error"]) &&  $_SESSION["login_error"]!=""){$this->view("login/login_error");}  ?>
           

            <div class="mb-1 form-floating me-2 text-dark">
                <input name = "email" type="email " class="col form-control " id="floatingInput " placeholder="name@example.com ">
                <label for="floatingInput">Email address</label>
            </div>

            <div class="mb-1 form-floating me-2 text-dark">
                <input name = "password" type="password" class="form-control " id="floatingPassword " placeholder="Password " minlength="8" maxlength="12">
                <label for="floatingPassword ">Password</label>
            </div>

            <div class="me-2 ">
                <button name ="login" class="mb-1 w-100 btn btn-lg btn-primary" type="submit">Se connecter</button>
            </div>
            <hr>
            <p> Première Visite ? <a href="<?=ROOT ?>register">Créer votre compte</a></p>



           

        </form>
    </main>
</div>

</div>






  <!----------------------------------------------------------------------------------------------------------------->
  <?php $this->view("home/footer_home"); ?>

