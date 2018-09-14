<?php
 require('conn.php');

$sql1="update pie set total=(SELECT count(TABLE_NO) FROM f_table where FLAG=0) where act_inact='Empty'";
$sql2="update pie set total=(SELECT count(TABLE_NO) FROM f_table where FLAG=1) where act_inact='Occupied'";
$query1 = mysqli_query($db,$sql1);
$query2 = mysqli_query($db,$sql2);


$sql = "select * from pie";
$query = mysqli_query($db,$sql);
while($result = mysqli_fetch_array($query))
{
  $rows[]=array("c"=>array("0"=>array("v"=>$result['act_inact'],"f"=>NULL),"1"=>array("v"=>(int)$result['total'],"f" =>NULL)));
  
}

echo $format = '{
"cols":
[
{"sl_no":"","label":"act_inact","pattern":"","type":"string"},
{"sl_no":"","label":"total","pattern":"","type":"number"}
],
"rows":'.json_encode($rows).'}';



?>








