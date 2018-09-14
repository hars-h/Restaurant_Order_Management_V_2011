<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Start Waiting</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

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
</style>
         
<style>
body {
     margin-top:60px;
margin-left: 250px;
    padding: 0;
    text-align: center; /* !!! */
}

.centered {
    margin: 0 auto;
    color: black;
    width: 800px;
}
</style>
<script src="angular.min.js"></script>

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

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar" style="background-color:#384038;">
  <ul class="nav nav-sidebar">
              <li class="active"><a href="startwaiting.php"><button style="width:100%; color:black; height:80px"><i class="glyphicon glyphicon-play"></i> Start Waiting<span class="sr-only">(current)</span></button></a></li>
              <li><a href="neworder.php"><button style="width:100%; height:80px"><i class="glyphicon glyphicon-pause"></i> Running Orders</button></a></li>
              <li><a href="checkouttable.php"><button style="width:100%; height:80px"><i class="glyphicon glyphicon-stop"></i> Check-out Table</button></a></li>
             
            </ul>
           
        
        </div>
       
<div class="centered">
<?php
   include("conn.php");
  

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
    
      $tableid = mysqli_real_escape_string($db,$_POST['tableid']);
      $tableid = preg_replace('/\s+/', '', $tableid);


   }?>

<div ng-app="myApp" ng-controller="myCtrl">
 
<table><tbody>

<tr><td></td><td><p id="demo" style="color:white;">No of Guests : {{ count }}</p></td></tr>
<tr><td></td><td><button style="width: 100px;height: 100px;"  ng-click="count = count + 1">+ 1</button></td><td><button style="width: 100px;height: 100px;"  ng-click="count = count + 2">+ 2</button></td></tr>
<tr><td></td><td><button style="width: 100px;height: 100px;"  ng-click="count = count + 3">+ 3</button></td><td><button style="width: 100px;height: 100px;"  ng-click="count = count + 4">+ 4</button></td></tr>

<tr><td></td>

<td><button id="myBtn" style="width: 100px;height: 100px; color: black;   font-size: 100%;  font-weight: 900; " >Cancel</button></td>
<td><button style="width: 100px;height: 100px;"  ng-click="count = 0">RESET</button></td>
</tr>

  </tbody></table>

<table>
<tbody>

<?php

         echo "<div class=\"col-xs-6 col-sm-3 placeholder\"  style=\"top-margin:100px \">";
            
            echo "<form name=\"myform\" action=\"ctable.php\"  method=\"post\">
<input style=\" width: 100px;  height: 100px; color: black; font-size: 100%; font-weight: 900; 
  \" type=\"submit\" name=\"tablename\" value=\"Continue\"><br/>
  <input type=\"hidden\" style=\"width: 100px;\" name=\"tableid\" value=\"".$tableid."\">
<input type=\"hidden\" style=\"width: 100px;\" name=\"custno\" value=\"{{count}}\">


</form>

</div>";

?>
</div>
</tbody></table>
</div>


          </div>
</div>
</div>
<!--script>
	
myCtrl();

document.getElementById("demo").innerHTML="count";
function myCtrl() {
    if ($scope.count()<0) {
    	$scope.count('0');
    }
}

</script-->
<script>

var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope) {
    $scope.count = 0 ;

    
});

var btn = document.getElementById('myBtn');
btn.addEventListener('click', function() {
  document.location.href = 'startwaiting.php';
});

</script>
       
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
  </body>
</html>


