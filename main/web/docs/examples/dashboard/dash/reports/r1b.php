

<?php
  include("../conn.php");

   session_start();
  if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      

      $startdt = mysqli_real_escape_string($db,$_POST['sdate']);  
    
      $enddt = mysqli_real_escape_string($db,$_POST['edate']);  
        
 echo "<h3>Start Date : ";  
 echo "$startdt";
 
  echo "   |        End Date : ";  
 echo "$enddt</h3>";

      
 



      

 $sql1="SELECT * FROM order_hdr where COF=1 and CO>'$startdt' and CO<'$enddt'";

                       $result1 = mysqli_query($db,$sql1);




                     if ($result1->num_rows > 0) {
      // output data of each row
             
              echo "<table>
               
                <thead><tr><th style=\"text-align:center\">Tr Id.</th><th style=\"text-align:center\">Table</th><th style=\"text-align:center\">CUSTOMER</th><th style=\"text-align:center\">Check-in Time</th><th style=\"text-align:center\">Check-out Time</th><th style=\"text-align:center\">BILL(₹)</th><th style=\"text-align:center\">SC(₹)</th><th style=\"text-align:center\">VAT_N_AL(₹)</th><th style=\"text-align:center\">VAT_AL(₹)</th><th style=\"text-align:center\">ST(₹)</th><th style=\"text-align:center\">TOTAL(₹)</th></tr></thead>";
   
              while($row1 = $result1->fetch_assoc()) {
                echo "<tr style=\"text-align:center;\">"; 
                echo "<td>".@$row1["TR_ID"]."</td><td>".@$row1["T_ID"]."</td><td>".@$row1["USR"]."</td><td>".@$row1["CIN"]."</td><td>".@$row1["CO"]."</td><td>₹".@$row1["BILL"]."</td><td>₹".@$row1["SC"]."</td><td>₹".@$row1["VAT_N_AL"]."</td><td>₹".@$row1["VAT_AL"]."</td><td>₹".@$row1["ST"]."</td><td>₹".@$row1["TOTAL_BILL"]."</td>"; 
                echo "</tr>";
                }
                echo "
                </table>";




} 




         

}
$db->close(); 

?>





