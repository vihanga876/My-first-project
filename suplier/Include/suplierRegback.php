<?php

if(isset($_REQUEST['submit'])){
    include('conection.php');

    $suplierName=$_REQUEST['suplierName'];
    $suplierContact=$_REQUEST['suplierContact'];
    $suplierAddress=$_REQUEST['suplierAddress'];
    $suplierEmail=$_REQUEST['suplierEmail'];
    $suplierPassword=$_REQUEST['suplierPassword'];

    $image=$_FILES['imageUpload']['name'];
    $imagesize=$_FILES['imageUpload']['size'];
    $tempname=$_FILES['imageUpload']['tmp_name'];
    $folder='../suplierImg/'.$image;
    
echo $suplierName;
echo $suplierContact;
echo $suplierAddress;
echo $suplierEmail;
echo $suplierPassword;
echo $image;


     if(empty($suplierName)||empty($suplierContact)||empty($suplierAddress)||empty($suplierEmail)||empty($suplierPassword)||empty($image)){
         header("location:../suplierReg.php?error=empty");
         exit();
     }

     if(!filter_var($suplierEmail,FILTER_VALIDATE_EMAIL)){
         header("location:../suplierReg.php?error=emailnot");
         exit();
     }
  
     if($imagesize>1000000){
         header("location:../suplierReg.php?error=tolarge");
         exit();
     }

     $query="SELECT * FROM suplier WHERE suplierEmail='$suplierEmail' or suplierPassword='$suplierPassword'";
     $result=mysqli_query($conn,$query);

     if(mysqli_num_rows($result)>0){
        header("location:../suplierReg.php?error=userExsist");
         exit();
     }else{
         $query2="INSERT INTO suplier(suplierName,suplierContact,suplierAddress,suplierImg,suplierEmail,suplierPassword)VALUES('$suplierName','$suplierContact','$suplierAddress','$image','$suplierEmail','$suplierPassword')";
         $result=mysqli_query($conn,$query2);

         if($result){
             move_uploaded_file($tempname,$folder);
             header("location:../suplierLogin.php");
         }else{
             header("location:../suplierReg.php?error=vv");
             exit();
         }
     }

 }else{
     header("location:suplierProduct.php");
 }

?>