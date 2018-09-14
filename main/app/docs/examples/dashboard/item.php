



<?php
   include("conn.php");
 
   
  if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
       
      $cid = mysqli_real_escape_string($db,$_POST['id']);
      

      $sql = "SELECT ITEM_ID,ITM_DESC,PRICE FROM f_item WHERE CAT_ID = ".$cid."";
      $result = mysqli_query($db,$sql);
   
     
      
      // If result matched $myusername and $mypassword, table row must be 1 row
      
      
        if ($result->num_rows > 0) {
      // output data of each row
 
   
    
        while($row = $result->fetch_assoc()) {
        echo "<div class=\"col-xs-6 col-sm-3 placeholder\">";
echo "<button style=\"width: 100%; color:black; height: 70px;
    \"  class=\"additem\" value=".@$row["ITEM_ID"]." data-itmdes=\"".@$row["ITM_DESC"]."\" data-price=".@$row["PRICE"]." data-itmid=".@$row["ITEM_ID"]." type=\"submit\">".@$row["ITM_DESC"]."  <br/>Rs.  ".@$row["PRICE"]."</button>";
    echo "</div>";




}



}

else {
      echo "No Items in this Category.";
    }


     
   }
$db->close(); 



?>





