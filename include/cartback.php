<?php

if(isset($_REQUEST['ProductId'])){

session_start();
    include('connection.php');
    $PrId=$_REQUEST['ProductId'];
    $query1="SELECT * from cart where ProductId='$PrId'";
    $result1=mysqli_query($con,$query1);
    
    echo $uid=$_SESSION['userid'];
    echo $price=$_REQUEST['PrPrice'];
    echo $qty=$_REQUEST['qty'];
    echo $itemName=$_REQUEST['ItemName'];
    echo $image=$_REQUEST['ItemImage'];


if(mysqli_num_rows($result1)>0){
    $query2="UPDATE cart set qty='$qty' where ProductId='$PrId'";
    $result2=mysqli_query($con,$query2);
    if( $result2){
        header("location:../index.php");
    }
   
}else{
$query2="INSERT INTO cart(customer,ProductId,PrPrice,qty,ItemName,ItemImage)VALUES('$uid','$PrId','$price','$qty','$itemName','$image')";
$result2=mysqli_query($con,$query2);
if($result2){
    header("location:../index.php");
}

}




    
}




?>