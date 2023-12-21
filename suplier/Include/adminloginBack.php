<?php

session_start();
if(isset($_POST['submit'])){

    include "conection.php";


    $adminemail=$_REQUEST['adminemail'];
    $adminPassword=$_REQUEST['adminPassword'];
    $query="SELECT * FROM admin WHERE adminemail='$adminemail' AND adminpassword='$adminPassword'";
    $result=mysqli_query($conn,$query);

    
    if(mysqli_num_rows($result)>0){
        $row=mysqli_fetch_assoc($result);
        header("location:../abminDashbord.php");
    }else{
        header("location:../adminLogin.php?error=invalid");
        exit();
    }

}


?>