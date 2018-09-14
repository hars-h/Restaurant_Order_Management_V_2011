<!DOCTYPE html>
<?php 
session_start();
         
if(!$_SESSION['login']){
   header("location:../login.php");
   die;
}?>
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
    <link href="../../../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../../../assets/js/ie-emulation-modes-warning.js"></script>
  

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <style type="text/css">
#navtext-toggle{
margin-left: 10px;
text-align: center;
padding-bottom: 5px;
padding-top: 5px;

}



#background {
background-color: #2d3331;
color: white;
background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
-webkit-background-size: cover;
}

.fa-2x {
font-size: 2em;
}
.fa {
position: relative;
display: table-cell;
width: 40px;
height: 36px;
text-align: center;
vertical-align: middle;

}

#aaa{
  padding-top: 20px;
}
</style>
    <style>
table.one {
  margin-top: 30px;
  margin-left: 100px;
    border-style: solid;
    border-width: 2px;
    height: 230px;
    width: 600px;
    border-color: ;
    background-color: #e6dfdf;
}
</style>
<style type="text/css">
#background {
background-color: #2d3331;
background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
-webkit-background-size: cover;
}
</style>
<link rel="stylesheet" type="text/css" href="color.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
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
            
            echo $_SESSION["username"];?></a></li>
            <li><a href="../logout.php">Logout</a></li>
          </ul>
          
        </div>
      </div>
    </nav>

<nav class="main-menu">
            <ul><div id="navtext-toggle">
                <li>
                    <a href="../dashboardhome.php">
                        <i class="glyphicon glyphicon-home fa-2x"></i>
                        <span class="nav-text" >  
                            Dashboard
                        </span>
                    </a>
                  
                </li>
                </div>
                <div id="navtext-toggle">
                <li class="has-subnav">
                    <a href="../startwaiting.php">
                        <i class="glyphicon glyphicon-play fa-2x" ></i>
                        <span class="nav-text">
                            Empty Table
                        </span>
                    </a>
                  </li>
                  </div>
                 <div id="navtext-toggle"> 
                <li class="has-subnav">
                    <a href="../neworder.php">
                      <i class="glyphicon glyphicon-pause fa-2x" ></i>
                        <span class="nav-text">
                            Running Table
                        </span>
                    </a>
                </li>
                </div>
                <div id="navtext-toggle">
                <li class="has-subnav">
                    <a href="../checkouttable.php">
                      <i class="glyphicon glyphicon-stop fa-2x"></i>
                        <span class="nav-text">
                           Checkout
                        </span>
                    </a>
                </li>
                </div>
                <div id="navtext-toggle">
                <li>
                    <a href="../reports.php">
                        <i class="glyphicon glyphicon-list-alt fa-2x" ></i>
                        <span class="nav-text">
                            Reports
                        </span>
                    </a>
                </li>
                </div>
                <div id="navtext-toggle">
                <li>
                    <a href="../restconf.php">
                        <i class="glyphicon glyphicon-cog fa-2x"></i>
                        <span class="nav-text">
                            Restaurant Set Up
                        </span>
                    </a>
                </li>
                </div>
                <div id="navtext-toggle">
                <li>
                   <a href="../userconf.php">
                       <i class="glyphicon glyphicon-user fa-2x"></i>
                        <span class="nav-text">
                            User Configuration
                        </span>
                    </a>
                </li>
                </div>
                <div id="navtext-toggle">
                <li>
                   <a href="../closing.php">
                        <i class="glyphicon glyphicon-lock fa-2x"></i>
                        <span class="nav-text">
                            Closing
                        </span>
                    </a>
                </li>
        </div>

            <ul class="logout"><div id="navtext-toggle">
                <li>
                   <a href="../logout.php">
                         <i class="glyphicon glyphicon-off fa-2x"></i>
                        <span class="nav-text">
                            Logout
                        </span>
                    </a>
                </li> </div> 
            </ul>
        </nav>




        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header" style="margin-top: 60px">Add Tax Information</h1>






 
<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
<table> <tr><th>
  <p>Service Charge: </th><th><input style="color:black"; type="text" name="sc"
    size="5" />(%)</p></th></tr>

  <tr> <th>
  <p>VAT on Alc: </th><th><input style="color:black"; type="text"
    name="vat1" size="5" />(%)</p></th></tr>

   <tr><th>
   <p>VAT on Non-Alc: </th><th><input style="color:black"; type="text"
    name="vat2" size="5" />(%)</p></th></tr>

   <tr><th>
   <p>Service Tax: </th><th><input style="color:black"; type="text" name="st"
    size="5" /> (%)</p></th></tr>

 </table>


   <tr><th><input style="color: black;"  type="submit" name="submit"
    value="submit" /></th></tr>
 
  </form>

<?php
require ("../conn.php");
 if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
  $sc = $_POST['sc'];
  $vat1 = $_POST['vat1'];
  $vat2 = $_POST['vat2'];
  $st = $_POST['st'];

  $sql="UPDATE tax SET ser_charge=$sc, vat_acl=$vat1, vat_nonalc=$vat2, ser_tax=$st where 1=1";
   if ($db->query($sql))	 {
    echo "Record updated successfully";

} else {
    echo "Error in updating record: " . mysqli_error($db);
}
}


  ?>





<!--===================================== -->

 <div class="row placeholders">
  
  

                    

  </div>



</div>

   
         
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   
   
         
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
