<?php
include('connection.php');
session_start();
$uid=$_SESSION['uid'];
if(isset($_REQUEST['updateProfile'])){
    
    $upName=$_REQUEST['upName'];
    $upFirstName=$_REQUEST['UpFirstName'];
    $UpEmail=$_REQUEST['UpEmail'];
    $Old_Pass=$_REQUEST['Old_Pass'];
    $Old_Up_Pass=md5($_REQUEST['New_Old_Pass']);
    $NewPass=md5($_REQUEST['UpNewPass']);
    $conifrm=md5($_REQUEST['UpConfirmPass']);

    $Update_Img_file=$_FILES['UpUsImg']['name'];
    $Update_Img_tempName=$_FILES['UpUsImg']['tmp_name'];
    $Update_Img_Size=$_FILES['UpUsImg']['size'];
    $Update_folder="../folderImg/productImages/".$Update_Img_file;
    
    $UpQuery="UPDATE users2 SET UserName='$upName',FirstName='$upFirstName',Email='$UpEmail' where id='$uid'";
    $result=mysqli_query($con,$UpQuery);
    header("location:../profile.php");

    if(!empty($_REQUEST['New_Old_Pass'])|| !empty($_REQUEST['UpNewPass'])){
        if($Old_Up_Pass!=$Old_Pass){
            header("location:../profile.php?error=invalidOldPassward");
            exit();
        }elseif($NewPass!=$conifrm){
            header("location:../profile.php?error=invalidNewPassward");
            exit();
        }else{
            $queryUp="UPDATE users2 set Password='$conifrm' where id=$uid";
            $result=mysqli_query($con,$queryUp);
            header("location:../profile.php?error=none");
        }

    }

    if(!empty($Update_Img_file)){
        if($Update_Img_Size > 2000000){
            header("location:../profile.php?error=tolarg");
        }else{

            $queryUp2="UPDATE users2 set Image='$Update_Img_file' where id=$uid";
            $result=mysqli_query($con,$queryUp2);

            if($result){
                move_uploaded_file($Update_Img_tempName,$Update_folder);
            }
            header("location:../profile.php?error=none");

        }
    }

}
?>