<?php
$di=$_REQUEST['deleteSup'];
include('conection.php');
?>

<?php
$query="SELECT * FROM suplier WHERE suplierId =$di";
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
$query="DELETE from suplier WHERE suplierId=$di";
$result=mysqli_query($conn,$query);
header("location:../adminSuplier.php");

?>