<?php
   include("conn.php");
  
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
       session_start();
      $tableid = mysqli_real_escape_string($db,$_POST['tableid']);
      $custno = mysqli_real_escape_string($db,$_POST['custno']); 
    
      $tableid = preg_replace('/\s+/', '', $tableid);
      $custno = preg_replace('/\s+/', '', $custno);

     

      if($custno==null||$custno==""){

header('location: startwaiting.php');
}
else{

      $sql = "UPDATE f_table set FLAG=1 where TABLE_NO=".$tableid."";
      $result = mysqli_query($db,$sql);

      $sql1 = "INSERT INTO day_order_hdr(T_ID,USR,CIN) values (".$tableid.",".$custno.",(now()))";
      $result1 = mysqli_query($db,$sql1);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
      if($result == 1 && $result1==1) {


 
      $sql2 = "SELECT TR_ID FROM day_order_hdr WHERE T_ID = '$tableid' and COF=0";
       
              $result2 = $db->query($sql2);

   if ($result2->num_rows > 0) {
      // output data of each row
     
        while($row2 = $result2->fetch_assoc()) {

         $_SESSION['trid'] = @$row2["TR_ID"];
          $_SESSION['tableid'] = "$tableid";
           
         header('location: cat.php');
      }
    }
      else {
         echo  "Unable to fetch Transaction ID";
      }
 
      }else {
         echo  "Retry";
      }
    }
   }
   $db->close();
?>
