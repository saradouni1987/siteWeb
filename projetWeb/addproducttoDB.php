<?php

include "db.php";

$f_product_id=$_POST['f_product_id'];
$f_brand_id=$_POST['f_brand_id'];
$f_product_title=$_POST['f_product_title'];

$f_product_image=$_POST['f_product_image'];
$f_product_desc=$_POST['f_product_desc'];
$f_product_keyword=$_POST['f_product_keyword'];


$result2 = mysqli_query($con, "select count(1) FROM products");
$row = mysqli_fetch_array($result2);

$total = $row[0] + 20;


  $sql="INSERT INTO `products` (`product_id`, `product_cat_id`, `product_brand_id`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`)
  VALUES ('$total','$f_product_id','$f_brand_id','$f_product_title',0,'$f_product_desc', '$f_product_image', '$f_product_keyword')";

$result=mysqli_query($con,$sql);




if($result){
        echo "<div class='alert alert-success' role='alert'>
              LE DON A ETE BIEN AJOUTE
              </div>";
  }else{
       echo "<div class='alert alert-danger' role='alert'>
                LE DON NE PEUT PAS ETRE AJOUTE
              </div>";
      }


    
//end of else (form validation)
?>