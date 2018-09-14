<?php
   include("conn.php");
  
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
       session_start();
      
      
       $tableid=$_SESSION["tableid"];
       $trid=$_SESSION["trid"];

     


      $sql = "DELETE FROM day_order_dtl  where T_ID=$tableid and TR_ID=$trid  and FG=0";
     



 if ($db->query($sql) === TRUE)  {
     
      header('location: neworder.php');
      
      }

      else {

      echo "Not working properly";
      }
   }
   $db->close();
?>
