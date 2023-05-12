<!DOCTYPE html>
<html lang="en">

<title>HYROTRAMAS | Operations Admin </title>


<body>

    <!--Header-->
    <?php $this->view("home/header_home")?>
    <!--End Header-->

    <!--Liste des utilisateurs a approuver -->
    <?php if (count($this->displayedData[0])!=0) :?>
<div class="container w-75 mx-auto">
    <table class="table">
  <thead>
    <tr>
      <th class="invisible" scope="col">#</th>
      <th scope="col">Noms</th>
      <th scope="col">Prénoms</th>
      <th scope="col">Emails</th>
      <th scope="col">Profils</th>
      <th scope="col">Approuver</th>
      <th scope="col">Rejeter</th>
      <th scope="col">Supprimer</th>
    </tr>
  </thead>
  <tbody>
   
            <?php foreach ($this->displayedData[0] as $key => $value) :?>
            <tr>
                <form method="post"> 
            <th class="invisible" scope="row"><input type="text" name="ref" value=<?= $value["ref"]?> style="width:1rem"></th>
            
            <td><?= $value["nom"]?></td>
            <td><?= $value["prenom"]?></td>
            <td><?= $value["email"]?></td>
            <td><?= $value["profil"]?></td>
            <td class="text-center">
                <button class="border border-0 p-0 bg-body" type="submit" name="approuver" value="approuver">
                    <svg  xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" viewBox="0 0 16 16"><path fill="green" d="M4.5 2A2.5 2.5 0 0 0 2 4.5v7A2.5 2.5 0 0 0 4.5 14h7a2.5 2.5 0 0 0 2.5-2.5v-7A2.5 2.5 0 0 0 11.5 2h-7Zm6.354 4.854l-3.5 3.5a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 9.293l3.146-3.147a.5.5 0 0 1 .708.708Z"/>
                    </svg>
                </button>
            </td>
            <td class="text-center">
                <button class="border border-0 p-0 bg-body" type="submit" name="rejeter" value="rejeter">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" viewBox="0 0 24 24"><path fill="red" d="M19.1 4.9C15.2 1 8.8 1 4.9 4.9S1 15.2 4.9 19.1s10.2 3.9 14.1 0s4-10.3.1-14.2zm-4.3 11.3L12 13.4l-2.8 2.8l-1.4-1.4l2.8-2.8l-2.8-2.8l1.4-1.4l2.8 2.8l2.8-2.8l1.4 1.4l-2.8 2.8l2.8 2.8l-1.4 1.4z"/>
                    </svg>
                </button>
            </td>
            <td class="text-center">
                <button class="border border-0 p-0 bg-body" type="submit" name="supprimer" value="supprimer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" viewBox="0 0 24 24"><path fill="red" d="M9 3v1H4v2h1v13a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V6h1V4h-5V3H9M7 6h10v13H7V6m2 2v9h2V8H9m4 0v9h2V8h-2Z"/>
                    </svg>
                </button>
            </td>  
                </form>
            </tr>

            <?php endforeach;?>
  
  </tbody>
</table>
</div>   
<?php endif;?>


 <!----------------------------------------------------------------------------------------------------------->
    <!--Footer-->
    <?php $this->view("home/footer_home")?>
    <!--End Footer-->

    
    
</body>
</html>