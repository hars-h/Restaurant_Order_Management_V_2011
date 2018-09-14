<?php
   include("conn.php");
  
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {



      // username and password sent from form 
       session_start();
      $tableid = mysqli_real_escape_string($db,$_POST['tableid']);

      $tableid = preg_replace('/\s+/', '', $tableid);
     

      $sql2 = "SELECT TR_ID FROM day_order_hdr WHERE T_ID = '$tableid' and COF=0";
       
              $result2 = $db->query($sql2);

   if ($result2->num_rows > 0) {
      // output data of each row
     
        while($row2 = $result2->fetch_assoc()) {

     
         $_SESSION['trid'] = @$row2["TR_ID"];
          $_SESSION['tableid'] = "$tableid";
           
         header('location: modorder.php');
      }
    }
      else {
         echo  "Unable to fetch Transaction ID";
      }
 
      
   }
   $db->close();
?>
