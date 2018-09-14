  <!DOCTYPE html>
  <html lang="en">
    <head>
      <script>
      function validation(){
        var name=document.myform.name.value;
        var username=document.myform.username.value;
        var password=document.myform.password.value;
        if(name==null||name==""||username==null||username==""||password==null||password==""){
          result=false;
        }
      }

    </script>


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
    .container {
        width: 500px;
        clear: both;
        text-align: center;

    }
    .container input {
      padding-top: 15px;
      padding-bottom: 15px;
      text-align: center;
        width: 100%;
        clear: both;
    }

    </style>
    <style type="text/css">
#background {
background: url(img/bg3.jpg) no-repeat 50% 50% fixed;
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
              <li><a href="logout.php">Logout</a></li>
            </ul>
            
          </div>
        </div>
      </nav>

    <div class="container-fluid">
        <div class="row">
          <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
              <li><a href="startwaiting.php"><i class="glyphicon glyphicon-play"></i> Start Waiting</a></li>
              <li><a href="neworder.php"><i class="glyphicon glyphicon-pause"></i> Running Orders</a></li>
              <li><a href="checkouttable.php"><i class="glyphicon glyphicon-stop"></i> Check-out Table</a></li>
             
            </ul>
            <ul class="nav nav-sidebar">
              <li><a href="report.php"><i class="glyphicon glyphicon-list-alt"></i> Reports</a></li>
              <li><a href="restconf.php"><i class="glyphicon glyphicon-cog"></i> Restaurant Setup</a></li>  
              <li class="active"><a href="userconf.php"><i class="glyphicon glyphicon-user"></i> User Setup <span class="sr-only">(current)</span></a></li>  
            </ul>
           
          </div>

          </div>
</div>
</div>
          <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">User Setup</h1>

    <div class="row placeholders">
              
      
                
 <a href="php/addusr.php"><button type="button" style="background-color: #72D00D;  margin: 20px; padding: 20px;" class="btn btn-info btn-lg"><img src="img/user.png" width="120px" height="120px" /><br/> <i class="glyphicon glyphicon-plus"></i> </button> </a>
<a href="php/delusr.php"><button type="button"  style="background-color: #D0100D; padding: 20px;  margin: 20px;" class="btn btn-info btn-lg"><img src="img/user.png" width="120px" height="120px" /><br/><i class="glyphicon glyphicon-minus"></i> </button> </a>
 


             
           


            
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
