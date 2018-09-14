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
            <li><a href="../report.php"><i class="glyphicon glyphicon-list-alt"></i> Reports</a></li>
            <li><a href="../restconf.php"><i class="glyphicon glyphicon-cog"></i> Restaurant Setup</a></li>
            <li class="active"><a href="../userconf.php"><i class="glyphicon glyphicon-user"></i> User Setup<span class="sr-only">(current)</span></a></li>  
          </ul>
         
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Add User</h1>








<?php
require ("../conn.php");
if (!isset($_POST['submit'])) {
  
  echo "<form action=".$_SERVER['PHP_SELF']." method=\"post\">
      <table>
<tr>
       <th> UNAME</th> <th><input type=\"text\" name=\"tableno1\" /></th><br /></tr>
<tr>
       <th> USER NAME</th> <th><input type=\"text\" name=\"tableno2\" /></th><br /></tr>
<tr>
       <th> PASSWORD </th> <th><input type=\"password\" name=\"tableno3\" /></th><br /></tr>
      
 <tr>
        <th></th><th> <input type=\"submit\" name=\"submit\" value=\"Add User\" /></th>
</table>
    </form>

      </div>
    </div>
  </div>";



} else {
## connect mysql server
    
    # check connection
    if ($db->connect_errno) {
        echo "<p>MySQL error no {$db->connect_errno} : {$db->connect_error}</p>";
        exit();
    }
## query database
    # prepare data for insertion
    

    $tableno1 = $_POST['tableno1'];
    $tableno2 = $_POST['tableno2'];
    $tableno3 = $_POST['tableno3'];
   
 
 $exists = 0;
    $result = $db->query("SELECT USER_NAME from app_user WHERE USER_NAME = '{$tableno2}' LIMIT 1");
    if ($result->num_rows == 1) {
        $exists = 1;
        
    } 
 
    if ($exists == 1) {echo "<p>User already exists!</p>";
    echo "<a href=\"../userconf.php\">Try again...</a>";
    }
    else {
    
        $sql = "INSERT  INTO app_user (`U_NAME`,`USER_NAME`,`PASSWD`) 
                VALUES ('{$tableno1}','{$tableno2}','{$tableno3}')";
 
        if ($db->query($sql)) {
            //echo "New Record has id ".$mysqli->insert_id;
            echo "<p>Registred successfully!</p>";
              echo "<a href=\"../userconf.php\">Add New User...</a>";
        } else {
           echo "not registered due to error";

            exit();
   }
    }
}
?>             





<!--===================================== -->

 <div class="row placeholders">
  
  

                    

  



</div>
</div>
</div>
</div>

   
         
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   

   
</body>
</html>
