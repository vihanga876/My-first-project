<?php

if(isset($_REQUEST['submit'])){
    include('conection.php');

    $productID=$_REQUEST['productID'];
    $suplierID=$_REQUEST['suplierID'];
    $ProductName=$_REQUEST['ProductName'];
    $ProductPrice=$_REQUEST['ProductPrice'];
    $productDes=$_REQUEST['productDes'];
    $select=$_REQUEST['Category'];
    

    $image=$_FILES['img1']['name'];
    $imagesize=$_FILES['img1']['size'];
    $tempname=$_FILES['img1']['tmp_name'];
    $folder='../../client/folderImg/productImages/'.$image;
   
     if(empty($productID)||empty($suplierID)||empty($ProductName)||empty($ProductPrice)||empty($productDes)){
         header("location:../suplierProduct.php?error=empty");
         exit();
     }
    //  if($imagesize>1000000){
    //      header("location:../suplierProduct.php?error=tolarge");
    //      exit();
    //  }

    $query="SELECT * FROM products WHERE productId ='$productID' and suplierId='$suplierID'";
    $result=mysqli_query($conn,$query);

    if(mysqli_num_rows($result)>0){
        header("location:../suplierProduct.php?error=Product_suplir_Id_allreadyExit");
         exit();
    }else{
         $query2="INSERT INTO products(productId,suplierId,itemName,price,description,category,img)VALUES('$productID','$suplierID','$ProductName','$ProductPrice','$productDes','$select','$image')";
         $result=mysqli_query($conn,$query2);
        // ....................upload many images for tabel in dataBase....................
        if($result){
            move_uploaded_file($tempname,$folder);
            header("location:../suplierTabe.php");
        }





        //  for($i=1;$i<=1;$i++){
        //     $img="img".$i;
        //     $temp=$_FILES["$img"]["tmp_name"];
    
        //     $name_x=$_FILES["$img"]["name"];
        //     $name="pic_".date('YmgHis')."_".rand(10,999999)."_".$name_x;
        //     $destination="../../client/folderImg/productImages/".$name;
        //     move_uploaded_file($temp,$destination);
        //     $query1="UPDATE products SET $img='$name' WHERE productId='$productID' ";
        //     $result=mysqli_query($conn,$query1);


        //     header("location:../suplierProduct.php");
            
        // }

         
        //  if($result){
        //     move_uploaded_file($tempname,$folder);
        //     move_uploaded_file($tempname1,$folder1);
        //     header("location:../suplierProduct.php");
        //  }else{
        //     header("location:../suplierProduct.php?error=vv");
        //     exit();
        //  }     
        
    }

 }else{
    // header("location:suplierTabe.php");
}

?>