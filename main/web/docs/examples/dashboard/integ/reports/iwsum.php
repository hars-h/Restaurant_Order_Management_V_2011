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

  <title>iwsum</title>

  <!-- Bootstrap core CSS -->
  <link href="../../../dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link href="../../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../dashboard.css" rel="stylesheet">

  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  <script src="../../../assets/js/ie-emulation-modes-warning.js"></script>

  
  
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
    $( "#datepicker1" ).datepicker();
  } );
  </script>


  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

      <style type="text/css">
        #background {
          background-color: #1C1E1E;
          color: white;
          background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          -webkit-background-size: cover;
        }

        table {

          border-collapse: collapse;
          width: 100%;
          
          
        }
        th{
          text-align: left;
          padding: 15px;
          background-color: darkred;
          color: white;
          font-weight: bold;


        }

        td {
          text-align: left;
          padding: 8px;
          

        }

        input[type=text]
         {
              width: 100%;
              padding: 12px 20px;
              margin: 8px 0;
              box-sizing: border-box;
              border: none;
              border-bottom: 2px solid black;
              background-color: transparent;
          }
          input[type=button]{
             width: 100%;
              padding: 12px 20px;
              
              
              color: white;
              background-color:darkred;

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
              <h1 class="page-header">Item  Wise Summary</h1>
              <div>
                
                  
                  <form>
                    <table>
                      <tr>

                        <td>
                          <label for="fname">Order Start Date :</label>
                          <input id="start-time" name="start-time " type="datetime-local">
                        </td>
                        <td>
                         <label for="lname">Order Close Date :</label>
                         <input type="text" id="datepicker1"> 
                        </td>
                        <td>
                          <label for="lname">Category :</label>
                          <input type="text" id="lname" name="lname">
                        </td>
                        <td>
                          <label for="lname">item :</label>
                          <input type="text" id="lname" name="lname">
                        </td>
                        </tr>
                        <tr>
                        <td>
                          <label for="lname">Code :</label>
                          <input type="text" id="lname" name="lname">
                        </td>
                        <td>
                          
                          <input type="button" value="SEARCH">
                        </td>
                      </tr>
                  </form>    

                    </table>

<div id="tabledisplay">
                     <table border="1 solid black">
                      <tr>
                      <th>id</th>
                      <th>catagory</th>
                      <th>item</th>
                      <th>quantity</th>
                      <th>code</th>
                      <th>total</th>
                      </tr>

                     
                      
                      <?php

                      $conn=mysqli_connect("localhost","root","","ipos");
                      $res=mysqli_query($conn,"SELECT id,catagory,item,quantity,code,total FROM search ");
                      while($row=mysqli_fetch_array($res))
                      {

                            echo "<tr>";  
                            echo "<td><p>".@$row['id']."</p></td>";
                            echo  "<td><p> ".@$row['catagory']. "</p></td>";
                            echo  "<td><p>".@$row['item'] ."</p></td>";
                            echo  "<td><p>" .@$row['quantity']." </p></td>";
                            echo  "<td><p> ".@$row['code']." </p></td>";
                            echo  "<td><p> ".@$row['total']." </p></td>";
                            echo  "</tr>";

                          }
                          ?>

                </table>
                
                 
                
           </div>       


                  

              </div>
            </div>
          </div>
        </div>
                 
                   
</body>
</html>




