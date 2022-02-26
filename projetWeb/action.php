<?php

session_start();
include "db.php";

$ip_add = getenv("REMOTE_ADDR");//fetch ip address in PHP


if(isset($_POST['category'])){

    $cat_query="SELECT * FROM categories";
    $result=mysqli_query($con,$cat_query);
    

    echo "<ul class='nav nav-pills flex-column'>
              <li class='nav-item'>
                <a class='nav-link active' href='#'><h4>Categories</h4></a>
              </li>";
     if(mysqli_num_rows($result)>0){
     while ($row=mysqli_fetch_array($result)) {
       // print_r($row);

       $cat_id=$row['cat_id'];
       $cat_name=$row['cat_title'];

       echo   "<li class='nav-item'>
                 <a class='nav-link category' href='#' cid='$cat_id'>$cat_name</a>
              </li>";
        }   
        
    }
    echo "</ul>";

}

if(isset($_POST['brand'])){
  $brand_query="SELECT * FROM commune";
  $result=mysqli_query($con,$brand_query);

     echo "<ul class='nav nav-pills flex-column'>
              <li class='nav-item'>
                 <a class='nav-link active' href='#'><h4>Commune</h4></a>
              </li>";

  if(mysqli_num_rows($result)>0){
      while($row=mysqli_fetch_array($result)){
          $brand_id=$row['commune_id'];
          $brand_name=$row['commune_title'];
          echo "<li class='nav-item'>
                  <a class='nav-link brand' href='#' bid='$brand_id'>$brand_name</a>
                </li>";
      }
     }
     echo "</ul>";
}


//-------------pagination debut-------------------
if(isset($_POST['page'])){
  $sql="SELECT * FROM products";
  $result=mysqli_query($con,$sql);
  
  $count=mysqli_num_rows($result);
 

$pageno=ceil($count/9);


for($i=1;$i<=$pageno;$i++){
 echo
         "<li class='page-item' >
         <a class='page-link' id='page' page='$i' href='#'>$i</a>
         </li>";
}

}

if(isset($_POST['products'])){

  $limit=9;

  if(isset($_POST['setpage'])){
    $pageno=$_POST['pageno'];
    $start=($pageno*$limit) - $limit;
  }else{
    $start=0;
  }
  $product_query="SELECT * FROM products  LIMIT $start,$limit"  ;
  $result=mysqli_query($con,$product_query);

echo "<div class='row'>";

  if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){

      $product_id=$row['product_id'];
      $product_cat_id=$row['product_cat_id'];
      $product_brand_id=$row['product_brand_id'];
      $product_title=$row['product_title'];
      $product_image=$row['product_image'];
      $product_keywords=$row['product_keywords'];
      $product_desc=$row['product_desc'];

            if(!filter_var($product_image, FILTER_VALIDATE_URL)) {
           $product_image = "img/" . $product_image;
        }

      echo "
      <div class='col-md-6 col-lg-4' style='padding: 1%;'>
                           <div class='card'>
                               <div class='card-header'>$product_title</div>
                               <div class='card-body'>
                                   <img src='$product_image' class='card-img img-fluid' style='width:auto; height:40vh;'
                                    alt='$product_title'>
                               </div>
                      <div class='card-footer'>$product_desc
                                <a href='contact.php' class='bbtn btn-danger btn-sm' style='float: right;'>Réserver</a>
                               </div>
                               
              
                              
                           </div>
                       </div>
      ";
    }
  }

  echo "</div>";
}//fin isset($_POST['products'])



if(isset($_POST['get_selected_category'])){
  $cid=$_POST['cat_id'];

  $selected_product_query="SELECT * FROM products WHERE product_cat_id= '$cid'";
  $result=mysqli_query($con,$selected_product_query);

  echo "<div class='row'>";
  if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_array($result)){

      $product_id=$row['product_id'];
      $product_cat_id=$row['product_cat_id'];
      $product_brand_id=$row['product_brand_id'];
      $product_title=$row['product_title'];
      $product_image=$row['product_image'];
      $product_keywords=$row['product_keywords'];
      $product_desc=$row['product_desc'];

           if(!filter_var($product_image, FILTER_VALIDATE_URL)) {
           $product_image = "img/" . $product_image;
        }
      echo "
      <div class='col-md-6 col-lg-4' style='padding: 1%;'>
                           <div class='card'>
                               <div class='card-header'>$product_title</div>
                               <div class='card-body'>
                                   <img src='$product_image' class='card-img img-fluid' style='width:auto; height:40vh;'
                                    alt='$product_title'>
                               </div>
                               <div class='card-footer'>$product_desc
                                <a href='contact.php' class='bbtn btn-danger btn-sm' style='float: right;'>Réserver</a>
                               </div>
                              
                           </div>
                       </div>
      ";

    }
  }

}//fin of isset($_POST['get_selected_category'])


if(isset($_POST['get_selected_brand'])){
  $bid=$_POST['brand_id'];

  $selected_product_query="SELECT * FROM products WHERE product_brand_id= '$bid'";
  $result=mysqli_query($con,$selected_product_query);

  echo "<div class='row'>";
  if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_array($result)){

      $product_id=$row['product_id'];
      $product_cat_id=$row['product_cat_id'];
      $product_brand_id=$row['product_brand_id'];
      $product_title=$row['product_title'];
      $product_image=$row['product_image'];
      $product_keywords=$row['product_keywords'];
      $product_desc=$row['product_desc'];

      if(!filter_var($product_image, FILTER_VALIDATE_URL)) {
           $product_image = "img/" . $product_image;
        }

      echo "
      <div class='col-md-6 col-lg-4' style='padding: 1%;'>
                           <div class='card'>
                               <div class='card-header'>$product_title</div>
                               <div class='card-body'>
                                   <img src='$product_image' class='card-img img-fluid' style='width:auto; height:40vh;'
                                    alt='$product_title'>
                               </div>

                               <div class='card-footer'>$product_desc
                                <a href='contact.php' class='bbtn btn-danger btn-sm' style='float: right;'>Réserver</a>
                               </div>
                               
                        
                           </div>
                       </div>
      ";

    }
  }

}//fin of isset($_POST['get_selected_brand'])


//-----------------query pour la fonction rechercher---------------------------------------

if(isset($_POST['search'])){
  $searchword=$_POST['searchword'];

  $selected_product_query="SELECT * FROM products WHERE product_keywords LIKE '%$searchword%'";
  $result=mysqli_query($con,$selected_product_query);

  echo "<div class='row'>";
  if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_array($result)){

      $product_id=$row['product_id'];
      $product_cat_id=$row['product_cat_id'];
      $product_brand_id=$row['product_brand_id'];
      $product_title=$row['product_title'];
      $product_image=$row['product_image'];
      $product_keywords=$row['product_keywords'];
      $product_desc=$row['product_desc'];

            if(!filter_var($product_image, FILTER_VALIDATE_URL)) {
           $product_image = "img/" . $product_image;
        }

      echo "
      <div class='col-md-6 col-lg-4' style='padding: 1%;'>
                           <div class='card'>
                               <div class='card-header'>$product_title</div>
                               <div class='card-body'>
                                   <img src='$product_image' class='card-img img-fluid' style='width:auto; height:40vh;'
                                    alt='$product_title'>
                               </div>
                      
                           </div>
                       </div>";
    

    }

  }

}//fin  isset($_POST['search'])


