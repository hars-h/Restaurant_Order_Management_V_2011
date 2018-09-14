<!DOCTYPE html>
<html lang="en">
  <head>
</head>
<body>

<?php
   include("conn.php");
  $noaprice=0;
  $aprice=0;
   
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

     
         $trid = @$row2["TR_ID"];
         
      }
    }
      else {
         echo  "Unable to fetch Transaction ID";
      }
 



  $sql5="SELECT ser_charge, vat_acl, vat_nonalc, ser_tax FROM tax";

 $result5 = $db->query($sql5);

   if ($result5->num_rows > 0) {
      // output data of each row
     
        while($row5 = $result5->fetch_assoc()) {

     
         $sc = @$row5["ser_charge"];
         $st = @$row5["ser_tax"];
         $vnac = @$row5["vat_nonalc"];
         $vac = @$row5["vat_acl"];
      }
    }
      else {
            $sc = 0;
         $st = 0;
         $vnac = 0;
         $vac = 0;
      }
      


 $sql3="SELECT SUM(A.PRICE) as NOAPRICE FROM day_order_dtl A join f_item B on A.ITEM_ID=B.ITEM_ID where  T_ID=".$tableid." and TR_ID=".$trid."  and B.ALCOHOL=0 group by A.TR_ID";

 $result3 = $db->query($sql3);

   if ($result3->num_rows > 0) {
      // output data of each row
     
        while($row3 = $result3->fetch_assoc()) {

     
         $noaprice = @$row3["NOAPRICE"];
         
      }
    }
      else {
         $noaprice=0;
      }

      $sql4="SELECT SUM(A.PRICE) as APRICE FROM day_order_dtl A join f_item B on A.ITEM_ID=B.ITEM_ID where  T_ID=".$tableid." and TR_ID=".$trid."  and B.ALCOHOL=1 group by A.TR_ID";

      $result4 = $db->query($sql4);

   if ($result4->num_rows > 0) {
      // output data of each row
     
        while($row4 = $result4->fetch_assoc()) {

     
         $aprice = @$row4["APRICE"];
         
      }
    }
      else {
   $aprice=0;
      }



//====================================================


 $sql = "SELECT ITM_DESC,SUM(QTY) as QTY,PRICE,SUM(PRICE) as TOTAL FROM day_order_dtl where T_ID=".$tableid." and TR_ID=".$trid." and FG=1 group by ITM_DESC,PRICE";

                     $result = mysqli_query($db,$sql);


$totalbill=0;

                     if ($result->num_rows > 0) {
      // output data of each row

              echo "<div id=\"checkout\"><table class=\"table table-striped\">

              <thead>
              
                  <th><tr><td></td><td> SAKAE </td><td></td></tr></tr></th>
                <tr>
                  <th><tr><td>Table No.</td><td> $tableid</td>
                  <td>TR id. </td><td> $trid</td></tr></th>
                 </tr>
                 <tr> 
                  <th>ITEM</th>
                  <th>QTY</th>
                  <th>U.PRICE</th>
                  <th>TOTAL PRICE</th>
                </tr>
              </thead>
              <tbody>";
   
        while($row = $result->fetch_assoc()) {
           echo "<tr>"; 
echo "<td>".@$row["ITM_DESC"]."</td><td>".@$row["QTY"]."</td><td>".@$row["PRICE"]."</td><td>".@$row["TOTAL"]."</td>"; 
echo "</tr>";
}


 
//---



$sql1 = "SELECT SUM(PRICE) as TOTAL_BILL FROM day_order_dtl where T_ID=".$tableid." and TR_ID=".$trid." and FG=1 group by T_ID,TR_ID";

                     $result1 = mysqli_query($db,$sql1);

                     if ($result1->num_rows > 0) {
                while($row1 = $result1->fetch_assoc()) {
                  $totalbill= @$row1["TOTAL_BILL"];

$ser_charge1=$sc*$totalbill*0.01;
$vat_nonalc1=$vnac*$noaprice*0.01;
$vat_acl1=$vac*$aprice*0.01;
$st1=$st*($totalbill+$ser_charge1)*0.01;
$totalbill1=$totalbill+$ser_charge1+$vat_nonalc1+$vat_acl1+$st1;


echo "<tr>"; 
echo "<td>________</td><td>_______</td><td>_______</td><td>_______</td></tr><br/>";
echo "<td>Bill</td><td></td><td></td><td>".$totalbill."</td></tr><br/>";
echo "<tr><td>S.C.</td><td>".$sc."</td><td></td><td>".$ser_charge1."</td></tr><br/>"; 
echo "<tr><td>VAT.</td><td>".$vnac."</td><td></td><td>".$vat_nonalc1."</td></tr><br/>"; 
echo "<tr><td>VAT. alc</td><td>".$vac."</td><td></td><td>".$vat_acl1."</td></tr><br/>"; 
echo "<tr><td>S.T.</td><td>".$st."</td><td></td><td>".$st1."</td></tr><br/>"; 
echo "<td>________</td><td>_______</td><td>_______</td><td>_______</td></tr><br/>";
echo "<tr><td>Total</td><td>Bill</td><td></td><td>".$totalbill1."</td><br/>"; 
echo "</tr>";
echo "</tbody></table></div>";
                          }
 $sql = "UPDATE f_table set FLAG=0 where TABLE_NO=".$tableid."";
      $result = mysqli_query($db,$sql);

      $sql1 = "UPDATE day_order_hdr set CO=(now()) , COF=1, BILL=".$totalbill.", SC=".$ser_charge1.", VAT_N_AL=".$vat_nonalc1.", VAT_AL=".$vat_acl1.", ST=".$st1.", TOTAL_BILL=".$totalbill1." where COF=0 and  BILL=0 and CO='1000-01-01 00:00:00' and T_ID=".$tableid." and TR_ID=".$trid."";
      $result1 = mysqli_query($db,$sql1);
      





            echo "<table class=\"table table-striped\"><tr><td><button style =\" background-color:green;\" onclick=\"printContent('checkout')\">CHECKOUT</button></td></tr></table>";

                        
         

                     }
                     else{
                      $totalbill=0;
                     }
//----
          
}



    else {
      echo "<div id=\"checkout\"><table class=\"table table-striped\">No Item Ordered</div>";
       $totalbill=0;
  

   

//==================================================================

      $sql = "UPDATE f_table set FLAG=0 where TABLE_NO=".$tableid."";
      $result = mysqli_query($db,$sql);

      $sql1 = "UPDATE day_order_hdr set CO=(now()) , COF=1, BILL=0 where COF=0 and  BILL=0 and CO='1000-01-01 00:00:00' and T_ID=".$tableid." and TR_ID=".$trid."";
      $result1 = mysqli_query($db,$sql1);
      





            echo "<table class=\"table table-striped\"><tr><td><button class=\"print\" style =\" background-color:green;\" onclick=\"printContent('checkout')\">CHECKOUT</button></td></tr></table>";

}
      //header('location: neworder.php');
   }
   $db->close();
?>






<script>
function printContent(el){
  var restorepage = document.body.innerHTML;
  
 var printcontent = document.getElementById(el).innerHTML;

document.body.innerHTML = printcontent;
  window.print();

  document.location.href = "neworder.php"; 
}
</script>

</body>
</html>