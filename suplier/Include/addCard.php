
<?php

// $ps=$_REQUEST['ps'];
$productNo=$_REQUEST['updateid'];
include('conection.php');


$query="UPDATE products set permision='yes' WHERE productId=$productNo";
$result=mysqli_query($conn,$query);
header("location:../abminDashbord.php");
?>
