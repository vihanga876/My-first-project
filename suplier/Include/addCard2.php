
<?php
$dissaprove=$_REQUEST['dissaprove'];
include('conection.php');


$query="UPDATE products set permision='No' WHERE productId=$dissaprove";
$result=mysqli_query($conn,$query);
header("location:../abminDashbord.php");
?>
