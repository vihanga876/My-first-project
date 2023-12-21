<?php
if(isset($_REQUEST['deleteId'])){
include('connection.php');

$pri=$_REQUEST['deleteId'];

$query="DELETE FROM cart where	ProductId='$pri'";
$result=mysqli_query($con,$query);
if($result){

    header('location:../cart.php');

}

    



}


?>