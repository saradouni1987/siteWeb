<?php
include "db.php";
session_start();



if(isset($_POST['loginemail']) && isset($_POST['password'])){
    $email=$_POST['loginemail'];
    $password=$_POST['password'];

    //echo $email;
    $email=mysqli_real_escape_string($con,$email);
    $email=htmlentities($email);

    $password=md5($password);

    $sql="SELECT * FROM user_info WHERE email='$email' AND password='$password'";
    $result=mysqli_query($con,$sql);
    $count=mysqli_num_rows($result);
    if($count==1){
        $row=mysqli_fetch_array($result);

        $_SESSION['userid']=$row['user_id'];
        $_SESSION['name']=$row['first_name'];
       

        $ip_add=getenv("REMOTE_ADDR");

        
        if(isset($_COOKIE["product_list"])){

            $p_list = stripcslashes($_COOKIE["product_list"]);
            
            $product_list = json_decode($p_list,true);



    for($i=0; $i<count($product_list);$i++){
             
          $j=$product_list[$i]; 
          $k=trim($j,"/");
          $verify_cart="SELECT id FROM cart WHERE user_id=$_SESSION[userid] AND p_id =$k";
        //  echo $verify_cart;
          $result=mysqli_query($con,$verify_cart);
       
           if(mysqli_num_rows($result)<1){
             
                 $update_cart_query = "UPDATE cart SET user_id = '$_SESSION[userid]' WHERE ip_add = '$ip_add' AND user_id = -1";
                 
                 mysqli_query($con,$update_cart_query);
               
           }else{


                    $delete_existing_item="DELETE FROM cart WHERE user_id= -1 AND ip_add ='$ip_add' AND p_id=$k";
                    mysqli_query($con,$delete_existing_item);

                
            }
      
    }

            
            setcookie("product_list","",strtotime("-1 day"),"/");
            
            echo "cart_login";
            exit();            


        }else{
            
            echo "Connexion réussie";
            exit();
        }

    }else{
        echo "<span style='color:red;'>Email et/ou mot de passe incorrect(s)</span>";
        exit();
    }
}

?>