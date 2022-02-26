<?php

session_start();
if(!isset($_SESSION['userid'])){
   header("Location:index.php");
}
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAINDOR</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/1a40f3df8b.js" crossorigin="anonymous"></script>
   <style type="text/css">
     
   <style> @import url('https://fonts.googleapis.com/css2? family=Advent+Pro:wght@100&family=Dancing+Script&display=swap');</style>


</head>
<body>

<!-----------------------------------debut navbar ----------------------------------------->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
    <a class="navbar-brand"  style="
  font-family:'Dancing Script',cursive; color:white;float: left;" href="#" >MAINDOR</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" 
    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">

        <li class="nav-item active">
          <a class="nav-link" href="#" >
            <i class="fas fa-home " style="font-size: larger;"></i>  Accueil <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#" >
            <i class="fab fa-algolia" style="font-size: larger;"></i>  Dons</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="add_product.php" >
            <i class="fas fa-plus-circle" style="font-size: larger;"></i>  Ajouter un don</a>
        </li>
      </ul>

      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Rechercher" id="Rechercher" aria-label="Rechercher">
        <button class="btn btn-primary my-2 my-sm-0" id="bouton-rechercher" name="bouton-rechercher">Rechercher</button>
      </form>


                </div>
            </div>
        </li>

        <li class="nav-item dropdown active" >
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" 
          id="signindropdown" role="button" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user"  ></i>  S'identifier </a>
           <div class="dropdown-menu" aria-labelledby="signindropdown">
               <div class="card text-left text-white bg-info" style="width: 300px;">
                   <div class="card-header ">Connexion</div>
                   <div class="card-body">
                       <form  onsubmit="return false" id="login">
                           <label for="email">Email</label>
                           <input type="email" class="form-control" id="loginemail" name="loginemail" placeholder="Email">
                           <label for="Password">Mot de passe</label>
                           <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe">
                           
                           <input type="submit" class="btn btn-success btn-xs" value="Connexion" style="display:block; margin-top:1%; margin-bottom:1%;">

                           <a href="#" style="border:none; display:block;color:white;">Mot de passe oublié ?</a>
                           <a href="customer_register_form.php"  style="border:none; display:block;color:white;">Créer un nouveau compte</a>
                           
                       </form>
                   </div>
                   <div class="card-footer"><div id="login_msg"></div></div>    
                  
               </div>
           </div> 
        </li>

        <li class="nav-item active">
            <a class="nav-link" href="customer_register_form.php" >
              <i class="fas fa-user"></i>  S'inscrire</a>
          </li>
      </ul>

    </div>
  </nav>
<br/><br/><br/>

<!-----------------------------------fin navbar ------------------------------------------>


<!-------------------------BOOTSTRAP------------------------------------------>
<script src="jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<script src="index.js"></script>


</body>
</html>