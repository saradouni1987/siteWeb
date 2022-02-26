<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAINDOR</title>
  <link rel="stylesheet" type="text/css" href="stylee.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/1a40f3df8b.js" crossorigin="anonymous"></script>


</head>
<?php
  include "db.php";
?>
<body>
<!-----------------------------------début navbar ----------------------------------------->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
    <a class="navbar-brand" href="#" >MAIN-D'OR</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" 
    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">

        <li class="nav-item active">
          <a class="nav-link" href="index.php" >
            <i class="fas fa-home " style="font-size: larger;"></i>  Accueil <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="index.php" >
            <i class="fab fa-algolia" style="font-size: larger;"></i>  Dons</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="add_product.php" >
            <i class="fas fa-plus-circle" style="font-size: larger;"></i>  Ajouter un don</a>
        </li>
      </ul>

    </div>
  </nav>
<br/>
<!----------------------------------- fin navbar------------------------------------------>
<!-------------------------------------formulaire d'inscription ------------------------------------>

<div class="container">
      
<form class="box" action="" method="post" name="login">
<h1 class="box-title">Contacter</h1>
<input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur">
<br>
<input type="text" class="box-input" name="email" placeholder="votre email">
<br>
<textarea class="box-input" placeholder="votre message ici....."></textarea>
<br>
<input type="submit" value="envoyer " name="submit" class="box-button">
</form>
<div id="deuxièmeTrait"></div>
</body>
<div id="copyrightEtIcons">
    <div id="copyright">
      <span>&copy fromScratch(); 2022 by azeddineyasmina</span>
    </div>
    <div id="icons">
    <a href="https://www.twitter.fr"><i class="fa fa-twitter"></i></a>
    <a href="https://www.facebook.fr"><i class="fa fa-facebook"></i></a>
    <a href="https://www.instagram"><i class="fa fa-instagram"></i></a>  
    </div>
  </div>
</html>

                    </div>

                    
                  

                  
                    </form>
                    </div>
                </div>
            
        </div>
        
    </div>
</div>



<!-------------------------------------fin formulaire d'inscription ------------------------------------>
<!------------------------- BOOTSTRAP------------------------------------------>
<script src="jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<script src="index.js"></script>

</body>
</html>