<?php


if(isset($_SESSION['userid'])){
header("Location:profile.php");
}


if(isset($_POST['login_user_with_product'])){
    

    $product_list=$_POST['pid'];//this $product_list is an array

    $json_e=json_encode($product_list);
    setcookie("product_list",$json_e,strtotime("+1 day"),"/","","",TRUE);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAINDOR</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/1a40f3df8b.js" crossorigin="anonymous"></script>


</head>
<?php
  include "db.php";
?>
<body style="background-image: url('solidarité.jpg');">
<!-----------------------------------navbar start here----------------------------------------->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
    <a class="navbar-brand" style="
  font-family:'Dancing Script',cursive; color:white;float: left;" href="#" >MAINDOR</a>
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

<div class="container-fluid">
    <div class="container" style="
  
  margin: 10px auto;
  padding-bottom: 10px;">
        <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-primary text-white" style="text-align: center; padding:1%;"><h3>Connexion</h3></div>
            <div class="card-body">
            <form onsubmit="return false" id="login"> 
              <label for="loginemail">Email</label>
              <input type="text" class="form-control" id="loginemail" name="loginemail" placeholder="Email">
            <!--  <small class="text-muted form-text">We will never share this email with anyone else.</small>-->
              <label for="password">Mot de passe</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe">

              <input type="submit" class="btn btn-success btn-xs" value="Se connecter" style="display:block; margin-top:1%; margin-bottom:1%;">

              <a href="#" style="border:none; display:block;">Mot de passe oublié?</a>
              <a href="customer_register_form.php?register=1"  style="border:none; display:block;">Créer un nouveau compte</a>
              </form> 
            </div> 
            <div class="card-footer"><div id="login_msg"></div></div>     
        </div>
        </div>
        <div class="col-md-3"></div>

        </div>
    </div>
</div>
    
<!----------------BOOTSTRAP----------------------------------->
<script src="jquery-3.5.1.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<script src="index.js"></script>


</body>
</html>