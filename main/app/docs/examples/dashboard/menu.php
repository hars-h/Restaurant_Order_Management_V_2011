<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">
  <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
  <link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
    <link rel="icon" href="../../favicon.ico">

    <title>Menu</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  <link href="menutab.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

<style>.sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }</style>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

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
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
          
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="startwaiting.php">Start Waiting </a></li>
            <li><a href="neworder.php">New Order</a></li>
            <li><a href="checkouttable.php">Check-out Table</a></li>
            <li><a href="">Home Delivery</a></li>
            <li><a href="">Pick - Up</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li class="active"><a href="report.php">Reports<span class="sr-only">(current)</span></a></li>
            <li><a href="#">Restaurant Configuration</a></li>
            <li><a href="#">User Setup</a></li>  
          </ul>
         
        </div>
        </div>
<h1 style="text-align: center; margin-top: -100px;">MENU</h1>


<div style="padding-left: 300px;">



<div id="accordion" role="tablist" aria-multiselectable="true">
  

    <?php
              require 'conn.php';

              $sql = "SELECT CAT_ID,CAT_DESC FROM f_cat";
              $result = $db->query($sql);

   if ($result->num_rows > 0) {
      // output data of each row
        while($row = $result->fetch_assoc()) {
         

    echo "<div class=\"card\">
        <div class=\"card-header\" role=\"tab\" id=\"headingOne\">
        <h5 class=\"mb-0\">
          <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=#\"". @$row["CAT_DESC"]."\" aria-expanded=\"true\" aria-controls=\"". @$row["CAT_DESC"]."\">
            ". @$row["CAT_DESC"]."
          </a>
        </h5>
      </div>";
      $cat=@$row["CAT_ID"];
      

      $sql1 = "SELECT ITEM_ID,ITM_DESC,PRICE FROM f_item where CAT_ID='".$cat."'";
              $result1 = $db->query($sql1);

            
      // output data of each row
      

      echo "<div id=\"". @$row["CAT_DESC"]."\" class=\"collapse in\" role=\"tabpanel\" aria-labelledby=\"headingOne\">
        <div class=\"card-block\">   <main>";
              if ($result1->num_rows > 0) {
              while($row1 = $result1->fetch_assoc()) {
              
                echo "<a href=\"".@$row1["ITM_DESC"]."\" class=\"cd-add-to-cart\" data-productId=\"".@$row1["ITEM_ID"]."\"
                 data-productdes=\"".@$row1["ITEM_ID"]."\" data-price=\"".@$row1["PRICE"]."\">".@$row1["ITM_DESC"]."<br/>".@$row1["PRICE"]."</a>";
                
              }
            }
            else {
      echo "No Items in this Category.";
    }
     echo "</main>
              

        </div>
      </div>
      
    </div>
";}}


  

    else {
      echo "No Food Category/Items configured";
  }
  $db->close();
    ?>










  
 </div>
  

    <div class="cd-cart-container empty">
  <a href="#0" class="cd-cart-trigger">
    Cart
    <ul class="count"> <!-- cart items count -->
      <li>0</li>
      <li>0</li>
    </ul> <!-- .count -->
  </a>

  <div class="cd-cart">
    <div class="wrapper">
      <header>
        <h2>Cart</h2>
        <span class="undo">Item removed. <a href="#0">Undo</a></span>
      </header>
      
      <div class="body">
        <ul>
          <!-- products added to the cart will be inserted here using JavaScript -->
        </ul>
      </div>

      <footer>
        <a href="#0" class="checkout btn"><em>Checkout - $<span>0</span></em></a>
      </footer>
    </div>
  </div> <!-- .cd-cart -->
</div> <!-- cd-cart-container -->  







</div>





       
            
     
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script>
  if( !window.jQuery ) document.write('<script src="js/jquery-3.0.0.min.js"><\/script>');
</script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
          
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
