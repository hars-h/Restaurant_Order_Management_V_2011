<!DOCTYPE html>
<?php 
session_start();
         
if(!$_SESSION['login']){
   header("location:login.php");
   die;
}?>
<html lang="en">
<head>
  <title>i-POS</title>
  <meta charset="utf-8">
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="../../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../../assets/js/ie-emulation-modes-warning.js"></script>
   
 <script src="js/raphael.min.js"></script>
   
   
    </script>
<style type="text/css">
#navtext-toggle{
margin-left: 10px;
text-align: center;
padding-bottom: 5px;
padding-top: 5px;
}



#background {
background-color: #2d3331;
margin-left: 60px;
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


</style>



<link rel="stylesheet" type="text/css" href="color.css">


    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
 
    <link href="css/skillchart.css" rel="stylesheet">

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
            <li><a href="#">
            <?php
            echo $_SESSION["username"];?></a></li>
         
            <li><a href="logout.php">Logout</a></li>
          </ul>
          
        </div>
      </div>
    </nav>






<?php
          $db=mysqli_connect("localhost","root","","ipos");

          $res=mysqli_query($db,"SELECT SUM(PRICE) AS SP FROM day_order_dtl");
while ($row=$res->fetch_assoc()){       


    
              
        }
          
          ?>



  <div class="container-fluid">
      <div class="row">


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



<!--- main code -->



<div class="container">
  <div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
        <h3>SAKAE Dashboard</h3>  
    </div>
  </div><!--/row-->
  <hr>
  


  <!-- Category wise start -->
  <div class="row">
    <div class="col-md-6">
        <h3 style="margin-left: 100px;">Category wise Sale</h3>    
        <div id="donut-example" style="height: 300px; width: 400px;"></div>
    </div>


<?php
  include("../conn.php");

$sql="SELECT c.CAT_ID,c.CAT_DESC, SUM(a.QTY) as QTY,SUM(a.PRICE) as PRICE FROM `day_order_dtl` a join f_item b on a.ITEM_ID=b.ITEM_ID join f_cat c on c.CAT_ID=b.CAT_ID where a.TR_ID in (SELECT TR_ID from day_order_hdr where CO>CONCAT(CURDATE(), '04:00:00')) group by c.CAT_ID,c.CAT_DESC ";

                       $result = mysqli_query($db,$sql);



                     if ($result->num_rows > 0) {
      // output data of each row
             
              
   $json_data=array();
              while($row = $result->fetch_assoc()) {
           
                $json_array['label']=@$row["CAT_DESC"];  
                $json_array['value']=@$row["QTY"];  
                array_push($json_data,$json_array);  
               
                }



}else{


$sql="SELECT c.CAT_ID,c.CAT_DESC, SUM(a.QTY) as QTY,SUM(a.PRICE) as PRICE FROM `order_dtl` a join f_item b on a.ITEM_ID=b.ITEM_ID join f_cat c on c.CAT_ID=b.CAT_ID where a.TR_ID in (SELECT TR_ID from order_hdr where CO>CONCAT(SUBDATE(CURDATE(),1), '04:00:00')) group by c.CAT_ID,c.CAT_DESC  ";

                       $result = mysqli_query($db,$sql);
          
   $json_data=array();
              while($row = $result->fetch_assoc()) {
           
                $json_array['label']=@$row["CAT_DESC"];  
                $json_array['value']=@$row["QTY"];  
                array_push($json_data,$json_array);  
               
                }
  
}
?>





<!-- Category wise End -->


<!-- Customer visit start -->
    <div class="col-md-6">
        <h3 style="margin-left: 100px;">Customer Visit</h3>   
        <div id="bar-example" style="height: 300px; width: 400px;"></div>
    </div>



<?php
  include("../conn.php");

$sql1="SELECT HOUR(CIN) as CIN, SUM(USR) as USR FROM `day_order_hdr` group by HOUR(CIN)";

                       $result1 = mysqli_query($db,$sql1);




                     if ($result1->num_rows > 0) {
      // output data of each row
             
              
   $json_data1=array();
              while($row1 = $result1->fetch_assoc()) {
           
 
                $json_array1['y']=@$row1["CIN"];  
                $json_array1['a']=@$row1["USR"];
                array_push($json_data1,$json_array1);  
               
                }



}
else{

  $sql1="SELECT HOUR(CIN) as CIN, SUM(USR) as USR FROM `order_hdr` group by HOUR(CIN)";

                       $result1 = mysqli_query($db,$sql1);

 $json_data1=array();
              while($row1 = $result1->fetch_assoc()) {
           
 
                $json_array1['y']=@$row1["CIN"];  
                $json_array1['a']=@$row1["USR"];
                array_push($json_data1,$json_array1);  
               
                }


}


?>



<!-- Customer visit end -->        
  </div><br/><br/><br/><br/>
  
<!-- prev row end-->
<!-- new row start -->
  <div class="row">

  <!-- Day wise sale start -->
  <div class="col-md-6">
        <h3 style="margin-left: 100px;">Day wise Sale</h3>   
        <div id="area-example" style="height: 300px; width: 400px;"></div>
    </div>




<?php
  include("../conn.php");

$sql3="SELECT DT, SUM(TOTAL_BILL) as TB,SUM(USR) as USR FROM `order_hdr` group by DT";

                       $result3 = mysqli_query($db,$sql3);


                     if ($result3->num_rows > 0) {
      // output data of each row
             
              
   $json_data3=array();
              while($row3 = $result3->fetch_assoc()) {
           
 
                $json_array3['y']=@$row3["DT"];  
                $json_array3['a']=@$row3["TB"];
                $json_array3['b']=@$row3["USR"];
                array_push($json_data3,$json_array3);  
               
                }



}
else{
$sql3="SELECT DT, SUM(TOTAL_BILL) as TB,SUM(USR) as USR FROM `order_hdr` group by DT";

                       $result3 = mysqli_query($db,$sql3);


                    
      // output data of each row
             
              
   $json_data3=array();
              while($row3 = $result3->fetch_assoc()) {
           
 
                $json_array3['y']=@$row3["CIN"];  
                $json_array3['a']=@$row3["TB"];
                $json_array3['b']=@$row3["USR"];
                array_push($json_data3,$json_array3);  
               
                }




}
?>







  <!-- Day wise sale end-->
  <!-- Hourly sale start-->
  
    <div class="col-md-6">
        <h3 style="margin-left: 100px;">Hourly Sale</h3>   
        <div id="line-example" style="height: 300px; width: 400px;"></div>
    </div>



<?php
  include("../conn.php");

$sql4="SELECT HOUR(CIN) as CIN, SUM(TOTAL_BILL) as TB,SUM(USR) as USR FROM `day_order_hdr` group by HOUR(CIN)";

                       $result4 = mysqli_query($db,$sql4);


                     if ($result4->num_rows > 0) {
      // output data of each row
             
              
   $json_data4=array();
              while($row4 = $result4->fetch_assoc()) {
           
 
                $json_array4['y']=@$row4["CIN"];  
                $json_array4['a']=@$row4["TB"];
                $json_array4['b']=@$row4["USR"];
                array_push($json_data4,$json_array4);  
               
                }



}
else{
$sql4="SELECT HOUR(CIN) as CIN, SUM(TOTAL_BILL) as TB,SUM(USR) as USR FROM `order_hdr` group by HOUR(CIN)";

                       $result4 = mysqli_query($db,$sql4);


                    
      // output data of each row
             
              
   $json_data4=array();
              while($row4 = $result4->fetch_assoc()) {
           
 
                $json_array4['y']=@$row4["CIN"];  
                $json_array4['a']=@$row4["TB"];
                $json_array4['b']=@$row4["USR"];
                array_push($json_data4,$json_array4);  
               
                }




}
?>


    <!-- Hourly sale end-->
  
  </div>
</div>
</div>

<!--- JS goes here -->


<!-- new row start -->
</div>

<!--- JS goes here -->
<script type="text/javascript">
//Morris charts snippet - js

//Morris charts snippet - js

$.getScript('js/raphael.min.js',function(){
$.getScript('js/morris.min.js',function(){

  Morris.Area({
    element: 'area-example',
    data: <?php echo json_encode($json_data3)?>,
    xkey: 'y',
    ykeys: ['a', 'b'],
    labels: ['Series A', 'Series B']
  });
  
   Morris.Line({
        element: 'line-example',
        data: <?php echo json_encode($json_data4)?>,
     
  xkey: 'y',
  ykeys: ['a', 'b'],
  labels: ['Sale', 'Customer']
});
     
      
      Morris.Donut({
        element: 'donut-example',
        data: <?php echo json_encode($json_data)?>
      });
      
       
      Morris.Bar({
         element: 'bar-example',
         data:<?php echo json_encode($json_data1)?>,
         xkey: 'y',
         ykeys: ['a'],
         labels: ['Visitors', 'Conversions']
      });

  
});
});

</script>



</body>
</html>










        