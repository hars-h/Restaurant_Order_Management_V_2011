<!DOCTYPE html>
<html lang="en">
<head>
  <title>i-POS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript">
    
    // Load the Visualization API and the piechart package.
    google.charts.load('current', {'packages':['corechart']});
      
    // Set a callback to run when the Google Visualization API is loaded.
    google.charts.setOnLoadCallback(pie_chart);
    
      
    function pie_chart() {
      var jsonData = $.ajax({
          url: "pie_chart.php",
          dataType: "json",
          async: false
          }).responseText;
          
      // Create our data table out of JSON data loaded from server.
   // alert(jsonData);return false;
      var data = new google.visualization.DataTable(jsonData);

      // Instantiate and draw our chart, passing in some options.
      var chart = new google.visualization.PieChart(document.getElementById('piechart_div'));

      chart.draw(data, {width: 350 ,height: 270, backgroundColor: { fill: "#C5CCCE" } });

    }

   
    </script>
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

<style>
table,td,th
{
 padding:10px;
 border-collapse:collapse;
 font-family:Georgia, "Times New Roman", Times, serif;
 border:solid #ddd 0px;
}

</style>

  <style type="text/css">
#background {
background-color: #1c1a1a; 
background-size: cover;

            }
   </style>


<link rel="stylesheet" type="text/css" href="color.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">


</head>
<body id="background">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">i-POS</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">SAKAE</a></li>
  
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Log Out</a></li>
      
    </ul>
  </div>
</nav>
  


<table border="2"  style="margin-right: 50px; " align="right"><tbody>
 <tr>  <td><div  id="piechart_div" ></div></td></tr></tbody></table>




<?php
          $db=mysqli_connect("localhost","root","","ipos");

          $res=mysqli_query($db,"SELECT SUM(PRICE) AS SP FROM day_order_dtl");
while ($row=$res->fetch_assoc()){       


       echo "<table class=\"one\"><tr><th><h2 ><span style=\"text-decoration: underline;\">Total Sale :</span></h2></th></tr>
              <tr><th><h4 style=\" float:left\">Completed Transaction :</h4></th><th> ".@$row['SP']."</th></tr>
              <tr><th> <h4 style=\" float:left\">Running Transaction :</h4><br></th></tr>
              <tr><th> <h4 style=\" float:left\">Total Customers :</h4><br></th></tr>
              
            
              ";
}
          
          ?>





<nav class="main-menu">
            <ul>
                <li>
                    <a href="dashboardhome.php">
                        <i class="fa fa-home fa-2x"></i>
                        <span class="nav-text">
                            Dashboard
                        </span>
                    </a>
                  
                </li>
                <li class="has-subnav">
                    <a href="startwaiting.php">
                        <i class="fa fa-laptop fa-2x"></i>
                        <span class="nav-text">
                            Start Waiting
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="neworder.php">
                       <i class="fa fa-list fa-2x"></i>
                        <span class="nav-text">
                            Running Orders
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="checkouttable.php">
                       <i class="fa fa-folder-open fa-2x"></i>
                        <span class="nav-text">
                           Checkout
                        </span>
                    </a>
                   
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-bar-chart-o fa-2x"></i>
                        <span class="nav-text">
                            Reports
                        </span>
                    </a>
                </li>
                <li>
                    <a href="restconf.php">
                        <i class="fa fa-font fa-2x"></i>
                        <span class="nav-text">
                            Restaurant Set Up
                        </span>
                    </a>
                </li>
                <li>
                   <a href="userconf.php">
                       <i class="fa fa-table fa-2x"></i>
                        <span class="nav-text">
                            User Configuration
                        </span>
                    </a>
                </li>
                <li>
                   <a href="closing.php">
                        <i class="fa fa-map-marker fa-2x"></i>
                        <span class="nav-text">
                            Close
                        </span>
                    </a>
                </li>
        

            <ul class="logout">
                <li>
                   <a href="login.php">
                         <i class="fa fa-power-off fa-2x"></i>
                        <span class="nav-text">
                            Logout
                        </span>
                    </a>
                </li>  
            </ul>
        </nav>
 






</body>
</html>










        