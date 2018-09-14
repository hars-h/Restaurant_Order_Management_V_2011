<?php
   include("conn.php");
  
   session_start();
      
      
       $tableid=$_SESSION["tableid"];
       $trid=$_SESSION["trid"];


                     


      $sql1 = "UPDATE day_order_dtl set FG=1  where T_ID=$tableid and TR_ID=$trid  and FG=0";
     



 if ($db->query($sql1) === TRUE)  {
     
      header('location: neworder.php');
      
      }

      else {

      echo "Not working properly";
      }

   $db->close();
?>
