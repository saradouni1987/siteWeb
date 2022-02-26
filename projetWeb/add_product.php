<?php
include "db.php";
session_start();

if(!isset($_SESSION['userid'])){
   header("Location:login_form.php");
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
<!----------------------------------- début navbar ---------------------------------------->

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
<!-----------------------------------la fin navbar------------------------------------------>
<!-------------------------------------le formulaire d'inscription de l'utilisateur ------------------------------------>

<div class="container">
    <div class="row" style="text-align: center;">
       
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" style="display: block;" >
        <div id="addproductmsg" style="margin: 50px 100px 50px 50px;"></div>
                <div class="card">
               
                    <div class="card-header text-center" >
                        <h4>Ajouter un don</h4>
                    </div>
                   
                    <div class="card-body">
                    <form style="text-align: left;">

                    <div class="row">
                     
                      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                       <label for="f_product_id">Catégorie</label>
                         <?php
                              $sql='SELECT * FROM `categories`';
                              $result = mysqli_query($con,$sql);

                              if(mysqli_num_rows($result)>0){
                                echo "<select class='form-control name='f_product_id' id='f_product_id'>";
                                while($row=mysqli_fetch_array($result)){

                                  $cat_id=$row['cat_id'];
                                  $cat_title=$row['cat_title'];
                                 

                                  echo "
                                  <option value=$cat_id> $cat_title</option>


                                  ";

                                }
                                echo "</select>";
                              }
                        ?>                      </div>

                     <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                       <label for="f_brand_id">Commune</label>
                       <?php
                              $sql='SELECT * FROM `commune`';
                              $result = mysqli_query($con,$sql);

                              if(mysqli_num_rows($result)>0){
                                echo "<select class='form-control name='f_brand_id' id='f_brand_id'>";
                                while($row=mysqli_fetch_array($result)){

                                  $brand_id=$row['commune_id'];
                                  $brand_title=$row['commune_title'];
                                 

                                  echo "
                                  <option value=$brand_id> $brand_title</option>


                                  ";

                                }
                                echo "</select>";
                              }
                        ?>      
                      </div>

                    </div>

                    <div class="row">

                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                       <label for="f_product_title">Titre du don</label>
                       <input type="text" class="form-control" id="f_product_title" name="f_product_title" placeholder="Titre du don">
                      </div>
                       <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                       <label for="f_product_image">URL de l'image</label>
                       <input type="text" class="form-control" id="f_product_image" name="f_product_image" placeholder="URL de l'image">
                      </div>

                    </div>

                    <div class="row">

                      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                       <label for="f_product_keyword">Mot clés</label>
                       <input type="text" class="form-control" id="f_product_keyword" name="f_product_keyword" placeholder="Mot clés">
                      </div>
                      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                       <label for="f_product_keyword">Description</label>
                       <input type="text" class="form-control" id="f_product_desc" name="f_product_desc" placeholder="Description">
                      </div>

                    </div>

                   
                 

                       <button class="btn btn-primary" id="addproduct" name="addproduct" style="margin-top:2%;">Ajouter le don</button>
                    </form>
                    </div>
                </div>
           
        </div>
       
    </div>
</div>


<!-------------------------------------fin du formulaire d'inscription------------------------------------>
<!-------------------------CODE POUR ACTIVER LE BOOTSTRAP------------------------------------------>
<script src="jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<script src="index.js"></script>

</body>
</html>