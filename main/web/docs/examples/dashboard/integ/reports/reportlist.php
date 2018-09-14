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

	<title>Reports</title>

	<!-- Bootstrap core CSS -->
	<link href="../../../dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<link href="../../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="../dashboard.css" rel="stylesheet">

	<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
	<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
	<script src="../../../assets/js/ie-emulation-modes-warning.js"></script>


	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

      <style type="text/css">
      	#background {
      		background: url(../img/bg6.jpg) no-repeat 50% 50% fixed;
      		background-size: cover;
      		-moz-background-size: cover;
      		-o-background-size: cover;
      		-webkit-background-size: cover;
      	}
      	table, td, th {    
      		border: 1px solid #ddd;

      	}
      	table {

      		border-collapse: collapse;
      		width: 100%;
      		border: 1px solid black;
      		background-color: white;
      	}
      	th{
      		text-align: center;
      		padding: 15px;
      		background-color: darkred;
      		color: white;
      		font-weight: bold;


      	}

      	td {
      		text-align: center;
      		padding: 8px;
      		

      	}

      	tr:nth-child(odd){background-color: #E9F8FB;}


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
  						echo $_SESSION["username"];?></a></li>
  						<li><a href="../logout.php">Logout</a></li>
  					</ul>

  				</div>
  			</div>
  		</nav>

  		<div class="container-fluid">
  			<div class="row">
  				<div class="col-sm-3 col-md-2 sidebar">
  					<ul class="nav nav-sidebar">
  						<li><a href="../startwaiting.php"><i class="glyphicon glyphicon-play"></i> Start Waiting</a></li>
  						<li><a href="../neworder.php"><i class="glyphicon glyphicon-pause"></i> Running Orders</a></li>
  						<li><a href="../checkouttable.php"><i class="glyphicon glyphicon-stop"></i> Check-out Table</a></li>

  					</ul>
  					<ul class="nav nav-sidebar">
  						<li  class="active"><a href="../report.php"><i class="glyphicon glyphicon-list-alt"></i> Reports<span class="sr-only">(current)</span></a></li>
  						<li><a href="../restconf.php"><i class="glyphicon glyphicon-cog"></i> Restaurant Setup</a></li>
  						<li><a href="../userconf.php"><i class="glyphicon glyphicon-user"></i> User Setup</a></li>  
  					</ul>

  				</div>
  				<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  					<h1 class="page-header">REPORTS</h1>
  					<div>
  						<table style="width: 100%">
  							<tr>
  								<th>Report Name</th>

  								<th>View Report</th>
  							</tr>
  							<tr>
  								<td>Item wise Summary</td>

  								<td><button onclick="location.href = 'iwsum.php';">View</button></td>
  							</tr>
  							<tr>
  								<td>Day Wise Summary</td>

  								<td><button onclick="location.href = 'dwsum.php';">View</button></td>
  							</tr>
  							<tr>
  								<td>Category Wise Summary</td>

  								<td><button onclick="location.href = 'cwsum.php';">View</button></td>
  							</tr>
  							<tr>
  								<td>All Restaurants Sales Summary</td>

  								<td><button onclick="location.href = 'arssum.php';">View</button></td>
  							</tr>
  							<tr>
  								<td>Orders Summary</td>

  								<td><button onclick="location.href = 'osum.php';">View</button></td>
  							</tr>
  							<tr>
  								<td>Order Print Count Summary</td>

  								<td><button onclick="location.href = 'opcsum.php';">View</button></td>
  							</tr>
  							<tr>
  								<td>After Print Modification Summary</td>

  								<td><button onclick="location.href = 'apmsum.php';">View</button></td>
  							</tr>
  							<tr>
  								<td>Coupon Summary</td>

  								<td><button onclick="location.href = 'cupsum.php';">View</button></td>
  							</tr>
  							<tr>
  								<td>Coupon Count</td>

  								<td><button onclick="location.href = 'cupcou.php';">View</button></td>
  							</tr>
  							<tr>
  								<td>Highest Selling Item Summary</td>

  								<td><button onclick="location.href = 'hsisum.php';">View</button></td>
  							</tr>
  							<tr>
  								<td>Payment Wise Order Summary</td>

  								<td><button onclick="location.href = 'pwosum.php';">View</button></td>
  							</tr>
  							<tr>
  								<td>Customer Paymentwise Summary</td>

  								<td><button onclick="location.href = 'cpsum.php';">View</button></td>
  							</tr>
  							<tr>
  								<td>Item wise Discount Summary</td>

  								<td><button onclick="location.href = 'iwdsum.php';">View</button></td>
  							</tr>
  							<tr>
  								<td>Hourly Item Sales Summary For All Restaurants</td>

  								<td><button onclick="location.href = 'hissfar.php';">View</button></td>
  							</tr>
  							<tr>
  								<td>Item Wise Sales Summary (Consolidated)</td>

  								<td><button onclick="location.href = 'iwssc.php';">View</button></td>
  							</tr>
  							<tr>
  								<td>Restaurent Timing  Summary</td>

  								<td><button onclick="location.href = 'rtsum.php';">View</button></td>
  							</tr>

  						</table>
  					</div>









  					

  				</div>
  			</div>
  		</div>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->



</body>
</html>
