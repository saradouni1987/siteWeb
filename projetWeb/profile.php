<?php
include "db.php";
session_start();

if(!isset($_SESSION['userid'])){
   header("Location:index.php");
}

?>

<!--Project definataion-SHOPPING CART APP using AJAX,JQUERY,PHP,MYSQLI-->
<!--I HAVE USED BOOTSTRAP FOR FRONT END-->
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

<!-----------------------------------navbar start here----------------------------------------->

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

      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Rechercher" id="search" aria-label="Search">
        <button class="btn btn-primary my-2 my-sm-0" id="search_btn" name="search_btn">Rechercher</button>
      </form>

      

                    <div class="card-body">
                        <div id="getcartproducts"></div>
                      <!--<div class="row">
                            <div class="col-md-3">No.</div>
                            <div class='col-md-3'><img src='img/$pro_image' style='width:60px; height:70px;'>Product Image</div>
                            <div class="col-md-3">Product Name</div>
                            <div class="col-md-3">Price</div>
                          </div><hr/>-->
                     
                    </div>

                </div>
            </div>
        </li>

        
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"
          id="signindropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user"  ></i>  <?php echo $_SESSION['name']; ?> </a>
        
           <div class="dropdown-menu" aria-labelledby="signindropdown">
               <ul style="width: 200px;">
                   
                   
                 <!--<li><a href="#">Change Password</a></li>-->
                  
                   <li><a href="logout.php">Se déconnecter</a></li>
               </ul>
           </div>
        </li>
           
   
      </ul>

    </div>
  </nav>
<br/><br/><br/>
<!-----------------------------------navbar ------------------------------------------>
<!-----------------------------------code for shopping cart start here----------------------->

<div class="container-fluid">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-2">

        <div id="get_category"></div>
            
              <div id="get_brand"></div>
             

        </div>

        <div class="col-md-8">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
              <div id="addtoproduct_msg"></div>
            </div>
          </div>
           <div class="card">
             <div class="card-header" style="font-family:Apple Chancery, cursive;color:blue; text-align:center;float: left;font-size: :300px;">Dons</div>
             <div class="card-body" >
             
             <div id="get_products"></div>
           
                  

             </div>
             
           </div>
        </div>

        <div class="col-md-1"></div>
    </div>
<!----------------------------------pagination here---------------->
</br>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" style="text-align: center;">
      <center>
     <nav aria-label="Page navigation example" style="display: inline-block;">
        <ul class="pagination" id="pageno">
           
           
         </ul>
     </nav>
      </center>
      </div>
    </div>
  </div>
   
</div>

    <!-----------------------------------code for shopping cart end here----------------------->
<!------------------------BOOTSTRAP------------------------------------------>
<script src="jquery-3.5.1.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<script src="index.js"></script>


</body>
</html>