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
 <style type="text/css">
#background {
background-color: #2d3331;
color: white;
background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
-webkit-background-size: cover;
}
#aaa{
  padding-top: 20px;
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
 
        
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" style="margin-top: 20px;">
          <h1 class="page-header">Running Tables</h1>

          <div class="row placeholders">
            
            
             <?php
            require '../conn.php';

            $sql = "SELECT TABLE_NO FROM f_table where FLAG=1 order by TABLE_NO asc";
            $result = $db->query($sql);

            if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       

      
               echo "<div class=\"col-xs-6 col-sm-3 placeholder\">";
            
            echo "<form action=\"otable.php\" method=\"post\" id=\"aaa\">
<input style=\" width: 100px;  height: 100px; color: yellow; background: url('img/t1.png') no-repeat center; background-color:darkorange; font-size: 200%; font-weight: 900; color : white; 
  \" type=\"submit\" name=\"tableid\" value=\" " . @$row["TABLE_NO"]. "\"><br/>


</form>





  </div>



";
    }  
} else {

    echo "No empty Tables";
}
$db->close();


           

         
         
          // ?> 
           
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
