<?php
  include("conn.php");
 
   session_start();
 
  echo "in BAR";
      // username and password sent from form 
      
   
      $tableid= $_SESSION["tableid"];
 
      $trid=$_SESSION["trid"];
      
           


 

      $sql1="SELECT A.ITM_DESC,SUM(A.QTY) as QTY FROM day_order_dtl A join f_item B on A.ITEM_ID=B.ITEM_ID where A.T_ID=".$tableid." and A.TR_ID=".$trid."  and A.FG=0 and B.BAR=1 group by A.ITM_DESC";

      $sql2="SELECT A.ITM_DESC,SUM(A.QTY) as QTY FROM day_order_dtl A join f_item B on A.ITEM_ID=B.ITEM_ID where A.T_ID=".$tableid." and A.TR_ID=".$trid."  and A.FG=0 and B.BAR=0 group by A.ITM_DESC";


                     $result1 = mysqli_query($db,$sql1);




                     if ($result1->num_rows > 0) {
      // output data of each row
              $baritem="T";
ob_start();
              echo "<h4>BAR</h4><div id=\"barorder\"><table class=\"table table-striped\">
              <thead>
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


$varbar = ob_get_clean();

$barfilename = '/var/www/html/main/bar'.$trid.'.html';

if (file_exists($barfilename)) {
    echo "The file $barfilename exists";
unlink($barfilename);
echo "bar file deleted";
if (file_exists($barfilename))
{
echo "after delete The file $barfilename exists";
}
else {
    echo "after delete The file $barfilename does not exist";
}
	
}else {
    echo "no delete - The file $barfilename does not exist";
}

$myfile = fopen('/var/www/html/main/bar'.$trid.'.html', "a+") or die("Unable to create bar file!");


fwrite($myfile, $varbar);

fclose($myfile); 
echo "file created";

exec('html2ps http://localhost/main/bar'.$trid.'.html | lpr');
echo " bar Printed";


}    
 

  $result2 = mysqli_query($db,$sql2);

                     if ($result2->num_rows > 0) {
                      $kitchenitem="T";
      // output data of each row
ob_start();
              echo "<h4>KITCHEN</h4><div id=\"kitchenorder\"><table class=\"table table-striped\">
              <thead>
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



$varktchn = ob_get_clean();
$ktchnfilename = '/var/www/html/main/ktchn'.$trid.'.html';

if (file_exists($ktchnfilename)) {
    echo "The file $ktchnfilename exists";
unlink($ktchnfilename);	
}
else {
    echo "The file $ktchnfilename does not exist";
}
$myfile = fopen('/var/www/html/main/ktchn'.$trid.'.html', "a+") or die("Unable to create kitchen file!");
                  
fwrite($myfile, $varktchn);

fclose($myfile); 
echo "file created";

exec('html2ps http://localhost/main/ktchn'.$trid.'.html | lpr');
echo "kitchen Printed";

}    

/*
ob_start();



        if ($result->num_rows > 0) {
      // output data of each row




              echo "<div id=\"cartconfirm\"><table class=\"table table-striped\">
              <thead>
                <tr>
                  <th>Table No. $tableid</th>
                  <th>TR id.  $trid</th>
                 </tr>
                 <tr> 
                  <th>ITEM</th>
                  <th>QTY</th>
                  
                </tr>
              </thead>
              <tbody>";
   
        while($row = $result->fetch_assoc()) {

echo "<tr>"; 
echo "<td>".@$row["ITM_DESC"]."</td><td>".@$row["QTY"]."</td>"; 
echo "</tr>";
}
echo "</tbody>
            </table></div>";



$var = ob_get_clean();

$myfile = fopen("/var/www/html/main/test.html", "a+") or die("Unable to open file!");


fwrite($myfile, $var);

fclose($myfile); 
echo "file created";

exec('html2ps http://localhost/main/test.html | lpr');
echo "Printed";
}
    else {
      echo "No Food Category/Items configured";
	  }

   
*/



$db->close(); 
   header('location: confirm.php');
?>





