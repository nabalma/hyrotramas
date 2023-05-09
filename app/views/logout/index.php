<!DOCTYPE html>
<html lang="en">

<body>

    <!--Header-->
    <?php $this->view("home/header_home")?>
    <!--End Header-->


     <!--Header-->
    <div class="row mx-auto mt-5 mb-5 w-75 container d-flex align-items-evenly" style="max-height:100%">
    
    <div class="col ">
        <div class="card border border-1 shadow-lg p-1 mb-5 bg-body rounded rounded-3">

            <div class="alert mx-auto" role="alert">
                    <h4 class="alert-heading">Félicitations ! </h4>
                    <p>Vous avez été déconnecté de votre compte avec succès, et en toute sécurité .</p>
                    <hr>
                    <p class="mb-1">Pour vous reconnecter, vous pouvez cliquer sur le bouton ci dessous .</p>
                    <span class="d-flex justify-content-end"><a href="<?= ROOT ?>login" type="button" class="btn btn-outline-danger">Se reconnecter</a></span>
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