$(document).ready(function(){
  // alert("hello2");
   console.log("hello world");
   
   cat();
   brand();
   products();
   

   function cat() {
      $.ajax({
             url:'action.php',
             method:'post',
             data:{category:1},
             success:function (data,success) {
               // console.log(data);
               $("#get_category").html(data);

             }
      });//fin de l'appel de  $.ajax 
   }//la fin de la fonction cat()

   function brand() {
      $.ajax({
              url:'action.php',
              method:'post',
              data:{brand:1},
              success:function (data,success) {
                // console.log(data);
                $("#get_brand").html(data);
              }
             })
   }//end of function brand()

   function products(){
      $.ajax({
        url: 'action.php',
        method:'post',
        data:{products:1},
        success:function (data,success) {
         // console.log(data);
          $("#get_products").html(data);
        }
      })
   }//fin de la fonction products()


   //---delegate est une classe spéciale qui permet de passer la méthode en tant que paramètre. elle est utilisée pour la gestion des événements

    $("body").delegate(".category","click",function(event){
    event.preventDefault();
    var cid=$(this).attr('cid');
       console.log(cid);

       $.ajax({
        url:'action.php',
        method:'post',
        data:{'get_selected_category':1,'cat_id':cid},
        success:function (data,success) {
          console.log(data);
          $("#get_products").html(data);
        }
      })//fin de la méthode ajax m

    })//ela fin de la classe delegate


  //--------------------------------------------------------------------------------------------------
  $("body").delegate(".brand","click",function(event){
    event.preventDefault();
    var bid=$(this).attr('bid');
       console.log(bid);

       $.ajax({
        url:'action.php',
        method:'post',
        data:{'get_selected_brand':1,'brand_id':bid},
        success:function (data,success) {
          console.log(data);
          $("#get_products").html(data);
        }
      })//end of ajax 

    })//end of delegate 

//-------------------------------fonctionnalité rechercher:--------------------------------

$("#search_btn").click(function(event){
  event.preventDefault();
  var sword =$("#search").val();
  console.log(sword);
  //alert(sword);
  if(sword != ""){

    $.ajax({
      url:'action.php',
      method:'post',
      data:{'search':1,'searchword':sword},
      success:function (data,success) {
        console.log(data);
        $("#get_products").html(data);
      }
    })//la fin de la recherche


  }
})

//-------------------------user signup ---------------------------------------------

$("#signup").click(function(event){
event.preventDefault();

    $.ajax({
            url:'signup.php',
            method:'post',
            data:$("form").serialize(),
            success:function(data,success) {
              //console.log(data);
            $("#signupmsg").html(data);
            }
            
        })//$.ajax  fin

})//signup fin

$("#addproduct").click(function(event){
var listIDs = "f_brand_id="+$("#f_brand_id").val()+"&"+"f_product_id="+$("#f_product_id").val()+"&"
event.preventDefault();

    $.ajax({
            url:'addproducttoDB.php',
            method:'post',
            data:listIDs + $("form").serialize(),
            success:function(data,success) {
              //console.log(data);
            $("#addproductmsg").html(data);
            }
            
        })//$.ajax fin

})//ajout prodit

$("#login").on("submit",function(event) {
  event.preventDefault(event);
 
  $.ajax({
        url:'login.php',
        method:'POST',
        data:$("#login").serialize(),
        success:function (data,success) {
          if(data == "login_success"){
            //alert(data)
            window.location.href="profile.php";
          }else if(data == "cart_login"){
            //alert(data)
           window.location.href="cart.php";
          }else{
           $("#login_msg").html(data);
           // alert(data)

          }
        }
  })//fin $.ajax({})
  
})//fin login

//---------------------------login fin---------------------------------------------



//-----------------------pagination debut-------------------------------------------------------
//-------------------------------nombre de page affichées----------------------------
page();
function page(){
  
  $.ajax({
    url:'action.php',
    method:'post',
    data:{page:1},
    success:function(data,success){
      console.log(data);
      $("#pageno").html(data);
    }

  })//end of ajax
}
//-------------------------------nombre de page fin---------------------------

//--------------------------------------quand on clique sur une page debut-----------------------------------

$("body").delegate("#page","click",function(){
  var pn= $(this).attr('page');
  //alert(pn);

  $.ajax({
    url:"action.php",
    method:"post",
    data:{products:1,setpage:1,pageno:pn},
    success:function(data,success){
     // alert(data);
     $("#get_products").html(data);

    }
  })
})

//--------------------------------------wquand on clique sur une page fin-----------------------------------
//-----------------------pagination fin-------------------------------------------------------


});