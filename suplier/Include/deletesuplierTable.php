<?php
$di=$_REQUEST['deleteid'];
include('conection.php');
?>

<?php
$query="SELECT * FROM products WHERE productId =$di";
$result=mysqli_query($conn,$query);

if($result){
   
    while($row=mysqli_fetch_assoc($result)){
        $imagename1=$row['suplierImg'];
        // $imagename2=$row['img2'];
        $imgpath1="../suplierImg/".$imagename1;
        // $imgpath2="../ProductImage/".$imagename2;

        unlink($imgpath1);
        // unlink($imgpath2);
    }
}

?>

<?php
$query="DELETE from products WHERE productId=$di";
$result=mysqli_query($conn,$query);
header("location:../abminDashbord.php");

?>