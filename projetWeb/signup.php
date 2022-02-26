<?php

include "db.php";

$f_name=$_POST['f_name'];
$l_name=$_POST['l_name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$pass=$_POST['pass'];
$repass=$_POST['repass'];
$address1=$_POST['address1'];
$address2=$_POST['address2'];

//nous allons créer des expressions régulières (motif de recherche) POUR LA VALIDATION comme SUIT :

$name="/^[A-Z][a-zA-Z ]+$/";
$emailValidation = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z]{2,3})$/';
$number="/^[0-9]+$/";

$regpass1="@[a-z]@";
$regpass2="@[A-Z]@";
$regpass3="@[0-9]@";
$regpass4="@[^\w]@";

//echo "$f_name";

if(empty($f_name) || empty($l_name) || empty($email) || empty($mobile) ||
   empty($pass) || empty($repass) || empty($address1) || empty($address2)){

         echo "<div class='alert alert-warning' role='alert'>
                  All fields are required
                 </div>";
         exit();
   }else{

if(!preg_match($name,$f_name)){
        echo "<div class='alert alert-warning' role='alert'>
                Le prénom est invalide. (La première lettre doit être en majuscule.)
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                   <span aria-hidden='true'>&times;</span>
                </button>
              </div>";
      exit();
   }

   if(!preg_match($name,$l_name)){
    echo "<div class='alert alert-warning' role='alert'>
             Le prénom est invalide. (La première lettre doit être en majuscule.)
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                   <span aria-hidden='true'>&times;</span>
            </button>
          </div>";
  exit();
}

if(!preg_match($emailValidation,$email)){
           echo "<div class='alert alert-warning' role='alert'>
                    Email est invalide.
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                 </div>";
         exit();
}

if(strlen($mobile)<10){
    echo "<div class='alert alert-warning' role='alert'>
           Le numéro de téléphone doit comporter un minimum de longueur de 10 chiffres
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                   <span aria-hidden='true'>&times;</span>
            </button>
          </div>";
  exit();
}

if(!preg_match($number,$mobile)){
    echo "<div class='alert alert-warning' role='alert'>
           Le numéro de téléphone est invalide.
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                   <span aria-hidden='true'>&times;</span>
            </button>
          </div>";
  exit();
}

if(strlen($pass)<8){
        echo "<div class='alert alert-warning' role='alert'>
               Le mot de passe doit comporter un minimum de longueur de 8 caractères<br/>
                Password should be at least 8 characters in length.and should include at least one upper case letter,one lower case letter one number, and one special character.
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                       <span aria-hidden='true'>&times;</span>
                </button>
              </div>";
      exit();
    }

    if(!preg_match($regpass1,$pass) || !preg_match($regpass2,$pass) || !preg_match($regpass3,$pass) || !preg_match($regpass4,$pass)){
        echo "<div class='alert alert-warning' role='alert'>
                Password : $pass is not valid.<br/>
                Le mot de passe doit contenir au minimum 8 caractères, à savoir : au moins une lettre minuscule et une lettre majuscule, un caractère spécial et un chiffre.
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                       <span aria-hidden='true'>&times;</span>
                </button>
              </div>";
      exit();
    }

    if($repass != $pass){
        echo "<div class='alert alert-warning' role='alert'>
               Les mots de passe ne correspondent pas. 
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                       <span aria-hidden='true'>&times;</span>
                </button>
              </div>";
      exit();
    }




$f_name=mysqli_real_escape_string($con,$f_name);
$l_name=mysqli_real_escape_string($con,$l_name);
$email=mysqli_real_escape_string($con,$email);
$mobile=mysqli_real_escape_string($con,$mobile);
$address1=mysqli_real_escape_string($con,$address1);
$address2=mysqli_real_escape_string($con,$address2);

$f_name=htmlentities($f_name);
$l_name=htmlentities($l_name);
$email=htmlentities($email);
$mobile=htmlentities($mobile);
$address1=htmlentities($address1);
$address2=htmlentities($address2);

$pass=md5($pass);

//verifier si l'email est déja existé sur notre bd

$sql="SELECT user_id FROM user_info WHERE email = '$email' LIMIT 1";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
        echo "<div class='alert alert-danger' role='alert'>
               cet émail a déja été utilisé. Veuillez vous Connecter pour continuer .
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                       <span aria-hidden='true'>&times;</span>
                </button>
              </div>";
  }else{
        $sql1="INSERT INTO user_info (`first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`)
         VALUES ('$f_name','$l_name','$email','$pass','$mobile','$address1','$address2')";

         $result1=mysqli_query($con,$sql1);
         if($result1){ 
                echo "<div class='alert alert-success' role='alert'>
Bravo, vous êtes bien inscrit            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                       <span aria-hidden='true'>&times;</span>
                </button>
              </div>";
         }else{
                echo "<div class='alert alert-success' role='alert'>
                 Une erreur s'est produite,veuillez réessayer plus tard.
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                       <span aria-hidden='true'>&times;</span>
                </button>
              </div>";
         }  
      }


    
   }
?>