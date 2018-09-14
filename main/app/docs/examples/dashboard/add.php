



<?php
  include("conn.php");
 
   session_start();
  if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
       $baritem="F";
       $kitchenitem="F";

      $itmdes = mysqli_real_escape_string($db,$_POST['itmdes']);  
      $itmid = mysqli_real_escape_string($db,$_POST['itmid']);
      $tableid= $_SESSION["tableid"];
 
      $trid=$_SESSION["trid"];
      $price = mysqli_real_escape_string($db,$_POST['price']);
      
           

      $sql = "INSERT INTO day_order_dtl(TR_ID,T_ID,ITEM_ID,ITM_DESC,QTY,PRICE) values (".$trid.",".$tableid.",".$itmid.",'".$itmdes."',1,".$price.")";
      $result1 = mysqli_query($db,$sql);




      

      $sql1="SELECT A.ITM_DESC,SUM(A.QTY) as QTY FROM day_order_dtl A join f_item B on A.ITEM_ID=B.ITEM_ID where A.T_ID=".$tableid." and A.TR_ID=".$trid."  and A.FG=0 and B.BAR=1 group by A.ITM_DESC";

      $sql2="SELECT A.ITM_DESC,SUM(A.QTY) as QTY FROM day_order_dtl A join f_item B on A.ITEM_ID=B.ITEM_ID where A.T_ID=".$tableid." and A.TR_ID=".$trid."  and A.FG=0 and B.BAR=0 group by A.ITM_DESC";


                     $result1 = mysqli_query($db,$sql1);




                     if ($result1->num_rows > 0) {
      // output data of each row
              $baritem="T";
              echo "<h4>BAR</h4><div id=\"barorder\"><table class=\"table\">
               <thead class=\"thead-inverse\">
                <tr><th>Table No. $tableid</th><th>TR id.  $trid</th></tr><tr><th>ITEM</th><th>QTY</th></tr>
              </thead>
              <tbody>";
   
              while($row1 = $result1->fetch_assoc()) {
                echo "<tr>"; 
                echo "<td>".@$row1["ITM_DESC"]."</td><td>".@$row1["QTY"]."</td>"; 
                echo "</tr>";
                }
                echo "</tbody>
                </table></div>";




}    else {
      echo "No Bar Items Ordered.";

  }
 

  $result2 = mysqli_query($db,$sql2);

                     if ($result2->num_rows > 0) {
                      $kitchenitem="T";
      // output data of each row

              echo "<h4>KITCHEN</h4><div id=\"kitchenorder\"><table class=\"table\">
              <thead class=\"thead-inverse\">
                <tr><th>Table No. $tableid</th><th>TR id.  $trid</th></tr><tr><th>ITEM</th><th>QTY</th></tr>
              </thead>
              <tbody>";
   
              while($row2 = $result2->fetch_assoc()) {
                echo "<tr>"; 
                echo "<td>".@$row2["ITM_DESC"]."</td><td>".@$row2["QTY"]."</td>"; 
                echo "</tr>";
                }
                echo "</tbody>
                </table></div>";


                  


}    else {
      echo "No Kitchen Items Ordered.";

  }





            echo "<button style=\"display: block; width: 50%; color:black; height: 50px; margin: 0 auto;\" onclick=\"document.location.href='bar.php'\">CONFIRM</button></div>";


}
$db->close(); 
?>





