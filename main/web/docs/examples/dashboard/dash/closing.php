<!DOCTYPE html>
<?php 
session_start();
         
if(!$_SESSION['login']){
   header("location:login.php");
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
    <link rel="icon" href="../../../favicon.ico">

    <title>Start Waiting</title>

    <!-- Bootstrap core CSS -->
    <link href="../../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../../assets/js/ie-emulation-modes-warning.js"></script>

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

table,thead,tr,th,td{
  border: 3px solid black;
  text-align: center;
  padding: 5px;
}

#background {
background-color: #2d3331;
color: white;
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
            <a class="navbar-brand" href="#">SAKAE</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
          <li><a href="#"><?php 
            

            echo $_SESSION["username"];?></a></li>
           
            <li><a href="logout.php">Logout</a></li>
          </ul>
          
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
              <div class="col-sm-3 col-md-2 sidebar" style="background-color:#384038;">
  
<nav class="main-menu">
            <ul><div id="navtext-toggle">
                <li>
                    <a href="dashboardhome.php">
                        <i class="glyphicon glyphicon-home fa-2x"></i>
                        <span class="nav-text" >  
                            Dashboard
                        </span>
                    </a>
                  
                </li>
                </div>
                <div id="navtext-toggle">
                <li class="has-subnav">
                    <a href="startwaiting.php">
                        <i class="glyphicon glyphicon-play fa-2x" ></i>
                        <span class="nav-text">
                            Empty Table
                        </span>
                    </a>
                  </li>
                  </div>
                 <div id="navtext-toggle"> 
                <li class="has-subnav">
                    <a href="neworder.php">
                      <i class="glyphicon glyphicon-pause fa-2x" ></i>
                        <span class="nav-text">
                            Running Table
                        </span>
                    </a>
                </li>
                </div>
                <div id="navtext-toggle">
                <li class="has-subnav">
                    <a href="checkouttable.php">
                      <i class="glyphicon glyphicon-stop fa-2x"></i>
                        <span class="nav-text">
                           Checkout
                        </span>
                    </a>
                </li>
                </div>
                <div id="navtext-toggle">
                <li>
                    <a href="reports.php">
                        <i class="glyphicon glyphicon-list-alt fa-2x" ></i>
                        <span class="nav-text">
                            Reports
                        </span>
                    </a>
                </li>
                </div>
                <div id="navtext-toggle">
                <li>
                    <a href="restconf.php">
                        <i class="glyphicon glyphicon-cog fa-2x"></i>
                        <span class="nav-text">
                            Restaurant Set Up
                        </span>
                    </a>
                </li>
                </div>
                <div id="navtext-toggle">
                <li>
                   <a href="userconf.php">
                       <i class="glyphicon glyphicon-user fa-2x"></i>
                        <span class="nav-text">
                            User Configuration
                        </span>
                    </a>
                </li>
                </div>
                <div id="navtext-toggle">
                <li>
                   <a href="closing.php">
                        <i class="glyphicon glyphicon-lock fa-2x"></i>
                        <span class="nav-text">
                            Closing
                        </span>
                    </a>
                </li>
        </div>

            <ul class="logout"><div id="navtext-toggle">
                <li>
                   <a href="logout.php">
                         <i class="glyphicon glyphicon-off fa-2x"></i>
                        <span class="nav-text">
                            Logout
                        </span>
                    </a>
                </li> </div> 
            </ul>
        </nav>


</ul>
</nav>
</div>
</div>
</div>


         
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" style="margin-top: 0px; ">
          <h1 class="page-header" style="position: fixed; margin-left: -80px;" >CLOSING</h1>

          
<div class="row">
        <div class="col-sm-2 col-md-2 col-lg-2" style="margin-left: -30px;">
          <br/>
           <button style="width: 200px; margin-left: -50px; margin-top: 80px; position: fixed; color:black; height: 150px;">SHUT DOWN</button>


            <?php
  include("../conn.php");

$sql1="SELECT count(TR_ID) as NNOT,SUM(BILL) as BILL,SUM(USR) as CUST,SUM(TOTAL_BILL) as TOTAL_BILL,SUM(TOTAL_BILL)-SUM(BILL) as TAX FROM day_order_hdr where COF=1";

                       $result1 = mysqli_query($db,$sql1);



   if ($result1->num_rows > 0) {


              while($row1 = $result1->fetch_assoc()) {
                echo "<table style=\"text-align:left; border: none; margin-top: 300px; margin-left:-50px;  position: fixed;\">"; 


                echo "<tr style=\"border: none;\"><td style=\"border: none; text-align:left;\">Total Transactions : </td><td style=\"border: none; text-align:right;\">".@$row1["NNOT"]."</td></tr>
                <tr style=\"border: none;\"><td style=\"border: none; text-align:left;\">Total Revenue : </td><td style=\"border: none; text-align:right;\">₹".@$row1["TOTAL_BILL"]."</td></tr>
                <tr style=\"border: none;\"><td style=\"border: none; text-align:left;\">Total TAX : </td><td style=\"border: none; text-align:right;\">₹".@$row1["TAX"]."</td></tr>
                <tr style=\"border: none;\"><td style=\"border: none; text-align:left;\">Sub Total Revenue : </td><td style=\"border: none; text-align:right;\">₹".@$row1["BILL"]."</td></tr>
                <tr style=\"border: none;\"><td style=\"border: none; text-align:left;\">Total Customer : </td><td style=\"border: none;  text-align:right;\">".@$row1["CUST"]."</td></tr></table>"; 
                
                }
                
                



} 

else{
  echo "No Sales Recorded till now. Start sales for new day.";
}
$db->close(); 


    ?>
</div>
<div class="col-sm-10 col-md-10 col-lg-10" style="background-color:grey;">


        <h1 align="center">Today's Sale</h1>
          <?php
  include("../conn.php");

$sql1="SELECT * FROM day_order_hdr where COF=1";

                       $result1 = mysqli_query($db,$sql1);



   if ($result1->num_rows > 0) {
      // output data of each row
             
              echo "<table>
               
                <thead><tr><th style=\"text-align:center\">Tr Id.</th><th style=\"text-align:center\">Table</th><th style=\"text-align:center\">CUSTOMER</th><th style=\"text-align:center\">Check-in Time</th><th style=\"text-align:center\">Check-out Time</th><th style=\"text-align:center\">BILL(₹)</th><th style=\"text-align:center\">SC(₹)</th><th style=\"text-align:center\">VAT_N_AL(₹)</th><th style=\"text-align:center\">VAT_AL(₹)</th><th style=\"text-align:center\">ST(₹)</th><th style=\"text-align:center\">TOTAL(₹)</th></tr></thead>";
   
              while($row1 = $result1->fetch_assoc()) {
                echo "<tr style=\"text-align:center;\">"; 
                echo "<td>".@$row1["TR_ID"]."</td><td>".@$row1["T_ID"]."</td><td>".@$row1["USR"]."</td><td>".@$row1["CIN"]."</td><td>".@$row1["CO"]."</td><td>₹".@$row1["BILL"]."</td><td>₹".@$row1["SC"]."</td><td>₹".@$row1["VAT_N_AL"]."</td><td>₹".@$row1["VAT_AL"]."</td><td>₹".@$row1["ST"]."</td><td>₹".@$row1["TOTAL_BILL"]."</td>"; 
                echo "</tr>";
                }
                echo "
                </table>";




} 

else{
  echo "No Sales Recorded till now. Start sales for new day.";
}
$db->close(); 
?>
          

        </div>



</div>
          
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
