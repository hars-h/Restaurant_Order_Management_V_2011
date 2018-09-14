<!DOCTYPE html>
<?php    session_start(); ?>
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
    <link href="../../../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../../../assets/js/ie-emulation-modes-warning.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap/3/css/bootstrap.css" />
<!-- Include Date Range Picker -->
<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
  

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

table{
border: 3px solid black;
width: 90%;
}

table,tr,th,td{
border: 2px solid black;
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
    
<style type="text/css">
#background {
background-color: #d1d2d3;
color: black; 
background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
-webkit-background-size: cover;
}
</style>
<link rel="stylesheet" type="text/css" href="color.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Include Required Prerequisites -->
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap/3/css/bootstrap.css" />
 
<!-- Include Date Range Picker -->
<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />



<script type="text/javascript">
$(function() {
    $('input[name="daterange"]').daterangepicker({
      timePicker: true,
        timePickerIncrement: 15,
        locale: {
            format: 'MM/DD/YYYY HH:mm'
        }
      },
      function(start,end, label) {
var start_date = start.format('YYYY-MM-DD HH:mm');
var end_date = end.format('YYYY-MM-DD HH:mm');
        $.ajax({
            url: 'r1b.php',
            type: 'POST',
            data: {"sdate": start_date, "edate": end_date},
            dataType: 'html',
            method: 'post',
            success: function(data) {
              $("span").html(data);
            }
        })
    });
  });
</script>



  </head>

  <body id="background">

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <div class="sr-only">Toggle navigation</div>
            <div class="icon-bar"></div>
            <div class="icon-bar"></div>
            <div class="icon-bar"></div>
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
                        <div class="nav-text" >  
                            Dashboard
                        </div>
                    </a>
                  
                </li>
                </div>
                <div id="navtext-toggle">
                <li class="has-subnav">
                    <a href="../startwaiting.php">
                        <i class="glyphicon glyphicon-play fa-2x" ></i>
                        <div class="nav-text">
                            Empty Table
                        </div>
                    </a>
                  </li>
                  </div>
                 <div id="navtext-toggle"> 
                <li class="has-subnav">
                    <a href="../neworder.php">
                      <i class="glyphicon glyphicon-pause fa-2x" ></i>
                        <div class="nav-text">
                            Running Table
                        </div>
                    </a>
                </li>
                </div>
                <div id="navtext-toggle">
                <li class="has-subnav">
                    <a href="../checkouttable.php">
                      <i class="glyphicon glyphicon-stop fa-2x"></i>
                        <div class="nav-text">
                           Checkout
                        </div>
                    </a>
                </li>
                </div>
                <div id="navtext-toggle">
                <li>
                    <a href="../reports.php">
                        <i class="glyphicon glyphicon-list-alt fa-2x" ></i>
                        <div class="nav-text">
                            Reports
                        </div>
                    </a>
                </li>
                </div>
                <div id="navtext-toggle">
                <li>
                    <a href="../restconf.php">
                        <i class="glyphicon glyphicon-cog fa-2x"></i>
                        <div class="nav-text">
                            Restaurant Set Up
                        </div>
                    </a>
                </li>
                </div>
                <div id="navtext-toggle">
                <li>
                   <a href="../userconf.php">
                       <i class="glyphicon glyphicon-user fa-2x"></i>
                        <div class="nav-text">
                            User Configuration
                        </div>
                    </a>
                </li>
                </div>
                <div id="navtext-toggle">
                <li>
                   <a href="../closing.php">
                        <i class="glyphicon glyphicon-lock fa-2x"></i>
                        <div class="nav-text">
                            Closing
                        </div>
                    </a>
                </li>
        </div>

            <ul class="logout"><div id="navtext-toggle">
                <li>
                   <a href="../logout.php">
                         <i class="glyphicon glyphicon-off fa-2x"></i>
                        <div class="nav-text">
                            Logout
                        </div>
                    </a>
                </li> </div> 
            </ul>
        </nav>




        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header" style="margin-top: 60px">Sales Report</h1>


<!--===================================== -->

 <div class="row placeholders">
  <p>View Sales by selecting relevant period.</p>
  
<input style="width: 250px;" type="text" name="daterange" value="01/01/2017 04:30  - 01/31/2015 15:30" />
 
<div id="result" style="padding-top: 50px;">

<span><h2>Today's Sale</h2>

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
  echo "No Sales Recorded till now.";
}
$db->close(); 
?>




</span>
</div>  



</div>
</div>
</div>
</div>

   
         
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   


<!-- Include Required Prerequisites -->

   
  </body>
</html>
