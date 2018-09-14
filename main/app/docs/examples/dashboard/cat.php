<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">
  <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
  <link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
    <link rel="icon" href="../../favicon.ico">

    <title>Menu</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  <link href="menutab.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

<style>.sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }</style>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->



<style type="text/css">
#background {
background-color: #2d3331;
color: white;
background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
-webkit-background-size: cover;
}


#cartlist {

}
</style>





  </head>

  <body id="background">

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">i - POS</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
           <li><a href="#"><?php 
            session_start();

if(!$_SESSION['login']){
   header("location:login.php");
   die;
}            
            echo $_SESSION["username"];?></a></li>
          
            <li><a href="logout.php">Logout</a></li>
          </ul>
          
        </div>
      </div>
    </nav>

<div class="row">
  <div class="col-sm-3" style="background-blend-mode: all;">

  <form id="product" action="" method="post">


 <?php
              require 'conn.php';

              $sql = "SELECT CAT_ID,CAT_DESC FROM f_cat";
              $result = $db->query($sql);

   if ($result->num_rows > 0) {
      // output data of each row
    echo "<ul>"; 
        while($row = $result->fetch_assoc()) {
          
        
echo "<li><button style=\"width: 100%; color:black; height: 50px;
    padding: 1px 1px 1px 1px;\"  class=\"category\" value=".@$row["CAT_ID"]." data-catid=".@$row["CAT_ID"]." type=\"submit\">".@$row["CAT_DESC"]." </button></li>";


}echo "</ul>";}


    else {
      echo "No Food Category/Items configured";
  }
  $db->close();
    ?>

</form>




  </div>



  <div class="col-sm-6">
     <div class="itemlist">

     </div>
 





</div>


  

  <div class="col-sm-3" style="background-color: #606a65;
color:white;
height:100%;"><h2 style="text-align: center;">CART</h2>
  
 <div class="cartlist">

     </div>

<form action="cancel.php" method="post">
<input  type="submit" name="tableid" value="Cancel" style="display: block; width: 50%; color:black;	 height: 50px; margin: 0 auto;">
</form>

</div>

</div>



     
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script>
  if( !window.jQuery ) document.write('<script src="js/jquery-3.0.0.min.js"><\/script>');
</script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
          
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>




<script>
$(function(){
    $('.category').on('click', function(e){
        e.preventDefault(); // stops the link doing what it normally 
        $a = $(this).data('catid');

         $.post("item.php",
        {
          id: $a,        
        },
        function(data,status){    
            $(".itemlist").html(data);
        }
        );
    });
});
</script>





<script>
$(function(){
     $(document).on("click",".additem",function(e){
        e.preventDefault(); // stops the link doing what it normally 
        $b = $(this).data('itmid');
        $c = $(this).data('price');
        $d = $(this).data('itmdes');

         $.post("add.php",
        {
          itmid: $b,        
          price: $c,
          itmdes: $d,
        },
        function(data,status){    
            $(".cartlist").html(data);
        }
        );
    });
});

</script>

<script>
function printContent(bo,bi,ko,ki){

  if(bi=="T"){
// var restorepage = document.body.innerHTML;
 //var printcontent = document.getElementById(bo).innerHTML;
//document.body.innerHTML = printcontent;
 // window.print();

 getRequest('bar.php');

}
//document.body.innerHTML=restorepage; 

if(ki=="T"){
var printcontent = document.getElementById(ko).innerHTML;
document.body.innerHTML = printcontent;
  window.print();
}
  document.location.href = "confirm.php"; 
}
</script>



  </body>
</html>
