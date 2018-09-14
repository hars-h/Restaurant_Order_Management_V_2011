

<?php
  include("../conn.php");

   session_start();
  if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      

      $startdt = mysqli_real_escape_string($db,$_POST['sdate']);  
    
      $enddt = mysqli_real_escape_string($db,$_POST['edate']);  
        
 echo "<p>Start Date : ";  
 echo "$startdt";
 
  echo "           End Date : ";  
 echo "$enddt</p>";

      
 



      

 $sql1="SELECT * FROM day_order_hdr where COF=1 and CO>'$startdt' and CO<'$enddt'";

                       $result1 = mysqli_query($db,$sql1);




                     if ($result1->num_rows > 0) {
      // output data of each row
             
              echo "<table class=\"table\" style=\"text-align:center;\">
               
                <tr><th>Tr Id.</th><th>Table</th><th>CUSTOMER</th><th>Check-in Time</th><th>Check-out Time</th><th>BILL</th></tr>";
   
              while($row1 = $result1->fetch_assoc()) {
                echo "<tr style=\"text-align:center;\">"; 
                echo "<td>".@$row1["TR_ID"]."</td><td>".@$row1["T_ID"]."</td><td>".@$row1["USR"]."</td><td>".@$row1["CIN"]."</td><td>".@$row1["CO"]."</td><td>".@$row1["BILL"]."</td>"; 
                echo "</tr>";
                }
                echo "
                </table>";




} 




         

}
$db->close(); 

?>





