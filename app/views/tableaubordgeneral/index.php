<!DOCTYPE html>
<html lang="en">

<body>

    <!--Header-->
    <?php $this->view("home/header_home")?>
    <!--End Header-->


     <!--Header-->
    <div class="row mx-auto mt-5 mb-5 w-50 container d-flex align-items-evenly" style="max-height:100%">
    
    <div class="col ">
        <div class="card border border-1 shadow-lg p-2 mb-5 bg-body rounded">
                <p class="text-center text-white bg-secondary card-img-top h4 p-1" style="font-family:Arial, Helvetica, sans-serif">TABLEAU DE BORD GENERAL</p>
        </div>
    </div>
        
    </div>

    <form class="row d-flex mx-auto w-25">
            <button class="fw-bold fs-5 btn btn-outline-primary" type="submit" name="suivant">SUIVANT</button>   
    </form>
    
    <!--End Header-->




    <!--Header-->
    <?php $this->view("home/footer_home")?>
    <!--End Header-->

    
    
</body>
</html>