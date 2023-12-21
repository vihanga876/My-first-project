<?php
if(isset($_REQUEST['login'])){

session_start();
include('connection.php');
$usName=$_REQUEST['Email'];
$passward=md5($_REQUEST['Password']);
$query="SELECT * FROM users2 WHERE (Email='$usName' or UserName='$usName') AND Password='$passward'";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)>0){
$row=mysqli_fetch_assoc($result);
$_SESSION['userid']=$row['id'];
$_SESSION['UsName']=$row['UserName'];
$_SESSION['UsImage']=$row['Image'];
header('location:../index.php');


}else{
    header('location:../login.php?error=userNotExists');
    exit();

}


}else{
    header('location:../login.php');
    exit();
}



?>