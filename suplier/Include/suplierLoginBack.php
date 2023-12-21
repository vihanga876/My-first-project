<?php

session_start();
if(isset($_POST['submit'])){

    include "conection.php";
    $suplierEmail=$_REQUEST['suplierEmail'];
    $suplierPassword=$_REQUEST['suplierPassword'];

    echo $suplierEmail;
    echo $suplierPassword;
    $query="SELECT * FROM suplier WHERE suplierEmail='$suplierEmail' AND suplierPassword='$suplierPassword'";
    $result=mysqli_query($conn,$query);

    
     if(mysqli_num_rows($result)>0){
        $query="SELECT * FROM suplier";
        $row=mysqli_fetch_assoc($result);
        $_SESSION['supid']=$row['suplierId'];
        header("location:../suplierRules.php?id='$_SESSION[supid]'");

     }else{
         header("location:../suplierLogin.php?error=invalid");
         exit();
     }
    
}


?>