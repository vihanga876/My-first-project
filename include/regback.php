<?php

if(isset($_REQUEST['reg'])){
include('connection.php');
session_start();
$UsName=$_REQUEST['UsName'];
$fName=$_REQUEST['First'];
$Email=$_REQUEST['Email'];
$pass=md5($_REQUEST['pass']);
$cPass=md5($_REQUEST['Cpass']);

$Image=$_FILES['ImgFile']['name'];
$img_size=$_FILES['ImgFile']['size'];
$temp_name=$_FILES['ImgFile']['tmp_name'];
$folder="../folderImg/registerImages/".$Image;

if(empty($UsName)||empty($fName)||empty($Email)||empty($pass)||empty($cPass)){
    header('location:../register.php?error=empty');
    exit();
}
if(!filter_var($Email,FILTER_VALIDATE_EMAIL)){
    header('location:../register.php?error=EmailInvalid');
    exit();
}
if($img_size>10000000){
    header('location:../register.php?error=tolarg');
    exit();
}
if($_REQUEST['pass'] != $_REQUEST['Cpass']){
    header('location:../register.php?error=passward');
    exit(); 
}

$query="SELECT * FROM users2 where Email='$Email' or UserName='$UsName'";
$result=mysqli_query($con,$query);

if(mysqli_num_rows($result)>0){
    header('location:../register.php?error=userExists');
    exit(); 
}else{
    $query2="INSERT INTO users2(UserName,FirstName,Email,Password,Image)values('$UsName','$fName','$Email','$pass','$Image')";
    $result=mysqli_query($con,$query2);
    if($result){
        move_uploaded_file($temp_name,$folder);
        header('location:../login.php');
    }else{
        header('location:../register.php?error=RegisterFalis');
        exit();
    }
}




}else{
    header('location:../register.php');
}


?>