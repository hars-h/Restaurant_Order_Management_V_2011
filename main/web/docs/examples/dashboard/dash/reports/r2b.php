

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

      
 



      

 $sql1="SELECT c.CAT_ID,c.CAT_DESC, SUM(a.QTY) as QTY,SUM(a.PRICE) as PRICE FROM `order_dtl` a join f_item b on a.ITEM_ID=b.ITEM_ID join f_cat c on c.CAT_ID=b.CAT_ID where a.TR_ID in (SELECT TR_ID from day_order_hdr where  CO>'$startdt' and CO<'$enddt') group by c.CAT_ID,c.CAT_DESC";

                       $result1 = mysqli_query($db,$sql1);



         if ($result1->num_rows > 0) {
      // output data of each row
             
              echo "<table align=\"center\" border=\"1 solid black\" class=\"table\" >
               
                <tr><th>Category Id.</th><th>Category Description</th><th>Items Sold</th><th>Revenue Generated(₹)</th></tr>";
   
              while($row1 = $result1->fetch_assoc()) {
                echo "<tr>"; 
                echo "<td>".@$row1["CAT_ID"]."</td><td>".@$row1["CAT_DESC"]."</td><td>".@$row1["QTY"]."</td><td>₹ ".@$row1["PRICE"]."</td>"; 
                echo "</tr>";
                }
                echo "
                </table>";

         

} 




         

}
$db->close(); 

?>





