<!-- < ?php

include 'conection.php';
session_start();
$uid=$_SESSION['updateId'];


if(isset($_REQUEST['abc'])){
  
    $username=$_POST['uname'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];

    $hidden=$_POST['hidden'];
    $oldpassword=$_POST['oldpassword'];
    $newpassword=$_POST['newpassword'];
    $conpassword=$_POST['conpassword'];

    $updateimage=$_FILES['updateimage']['name'];
    $updateimagesize=$_FILES['updateimage']['size'];
    $updatetemp_name=$_FILES['updateimage']['tmp_name'];
    $folder="../../client/folderImg/productImages/".$updateimage;

    echo $hidden;
    echo "<br>";
    echo $oldpassword;

    $queryup="UPDATE users SET userName='$username',firstName='$fname',lastNmae='$lname',email='$email' WHERE id=$uid ";
    $result=mysqli_query($conn,$queryup);
    $_SESSION['userName']=$username;

    if(!empty($oldpassword)||!empty($newpassword)||empty($conpassword)){
        if($oldpassword != $hidden){
            header("location:../profile.php?error=oldnotmatch");
        }else if($newpassword != $conpassword){
            header("location:../profile.php?error=confirmnotmatch");
        }else{
            $queryup ="UPDATE user SET passWord='$conpassword' WHERE id=$uid ";
            $result=mysqli_query($conn,$queryup);
            header("location:../profile.php?error=succesfuly");
        }

    }

    // <img src="../../client/folderImg/" alt="">

    if(!empty($updateimage)){
        if($updateimagesize>2000000){
            header("location:../profile.php?error=largeimage");
        }else{
            $queryup ="UPDATE users SET image='$updateimage' WHERE id=$uid ";
            $result=mysqli_query($conn,$queryup);

            if($result){
                $_SESSION['img']=$updateimage;
                move_uploaded_file($updatetemp_name,$folder);
            }
            header("location:../profile.php?error=none");
        }
    }
    
}


header("location:../profile.php");

?> -->




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="icon/logo copy.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="sendmsgStyle.css"> -->
    <style type="text/css">
       *{margin: 0;
padding: 0;
box-sizing: border-box;

}

body{
    display: flex;
    height: 100vh;
    justify-content: center;
    align-items: center;
    padding: 10px;
    background: black;
}

.container{
    max-width: 700px;
    width: 100%;
    background: #fff;
    padding: 25px 30px;
    border-radius: 5px;
}

.container .title{
    font-size: 25px;
    font-weight: 500;
    position: relative;
}

.container .title:before{
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    height: 3px;
    width: 30px;
    background: linear-gradient(135deg, #71b7e6, #9b59b6);
}

.container form .user-details{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin: 20px 0 12px 0;
}

form .user-details .input-box{
   margin-bottom: 15px;
    width: calc(100% / 2 - 20px);
}

.user-details .input-box .details{
    display: block;
    font-weight: 500;
    margin-bottom: 5px;
}

.user-details .input-box input{
    height: 45px;
    width: 100%;
    outline: none;
    border-radius: 5px;
    border: 1px solid #ccc;
    padding-left: 15px;
    font-size: 16px;
    border-bottom-width: 2px;
    transition: all 0.3s ease;
}


.user-details .input-box input:focus,
.user-details .input-box input:valid{
    border-color: #9b59b6;
}

form .gender-deatails .gender-title{
    font-size: 20px;
    font-weight: 500;
}

form .gender-deatails .category{
    display: flex;
    width: 80%;
    margin: 14px 0;
    justify-content: space-between;
}

.gender-deatails .category label{
    display: flex;
    align-items: center;
}


/* 
enter image  */
.gender-deatails .category .dot{
    width: 18px;
    height: 18px;
    background: rgb(255, 255, 255);
    border-radius: 50%;
    margin-right: 10px;
    border: 5px solid rgb(51, 6, 107);
}

form .button input{
    height: 50px;
    width: 100%;
    outline: none;
    color: #fff;
    border: none;
    font-size: 18px;
    font-weight: 500;
    border-radius: 5px;
    letter-spacing: 1px;
    background: linear-gradient(135deg, #71b7e6, #9b59b6);
}

form .button input:hover{
    background: linear-gradient(-135deg, #71b7e6, #9b59b6);

}

#pImage{
    width: 200px;0px;
    height:200px;
    border-radius:50%;
}
    </style>
</head>
<body>
    <!-- < ?php
    session_start();
    if(isset($_SESSION['supid'])){
        ?> -->
        <?php
if(isset($_REQUEST['updateId'])){
    

    $productNo=$_REQUEST['updateId'];
    include('conection.php');
    
    
    $query="SELECT * FROM products WHERE productId=$productNo";
    $result=mysqli_query($conn,$query);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            // $id=$row['id'];
            $suplierId=$row['suplierId'];
            $productNo=$row['productId'];
            $name=$row['itemName'];
            $price=$row['price'];
            $description=$row['description'];      
            $newimage=$row['img'];
            $category=$row['category']; 
        }
    
    }

}

?>




        <div class="container">
        <div class="title">Update Product</div>
        <form action="" method="post" enctype="multipart/form-data">

            <div>
                <img src="../../client/folderImg/productImages/<?php echo $newimage ?>" id="pImage">
            </div>

            <div class="user-details">

                
                <!-- <div class="input-box"> -->
                    <!-- <span class="details">Product ID</span>
                    <input type="text" name="productID"> -->
                    <!-- <select name="ps">
                    <option value="Mens">Mens</option>
                    <option value="Ladie">Ladie</option>
                    <option value="Kids">Kids</option>
                </select>
                </div> -->
                
                

                <div class="input-box">
                    <span class="details">Suplier ID</span>
                    <input type="text" placeholder="Enter your Product Name" name="suplierID" value="<?php echo $suplierId?>">
                </div>

                <div class="input-box">
                    <span class="details">Product ID</span>
                    <input type="text" placeholder="Enter your Product ID" name="productID" value="<?php echo $productNo?>">
                </div>

                <div class="input-box">
                    <span class="details">product Name</span>
                    <input type="text" placeholder="Enter your Product price" name="ProductName" value="<?php echo $name?>">
                </div>

                <div class="input-box">
                    <span class="details">Product Price</span>
                    <input type="text" placeholder="Enter your Product Description" name="ProductPrice" value="<?php echo $price?>">
                </div>


                <div class="input-box">
                    <span class="details">product Description</span>
                    <input type="text" placeholder="Enter your Product Description" name="productDes" value="<?php echo $description?>">
                </div>

                <div class="input-box">
                    <span class="details">Product image1(frontSide)</span>
                    <input type="file" name="img1">
                </div>


                <div class="input-box">
                    <span class="details">product Category</span>
                <select name="Category">
                    <option>Select the Category</option>
                    <option>Dog Foods</option>
                    <option>Cat Foods</option>
                    <option>Dog Toys</option>
                    <option>Cat Toys</option>
                    <option>Dog Accessories</option>
                    <option>Cat Accessories</option>
                </select>
                </div>

                <!-- <div class="input-box">
                    <span class="details">Product image2(backSide)</span>
                    <input type="file" name="img2">
                </div> -->

                

                
            </div>
            <div class="gender-deatails">
                <span class="gender-title">/...add Details.../</span>
                <div class="category">
                    <label for="">
                        <span class="dot one"></span>
                        <a href=""><span class="gender">view rules</span></a>
                    </label>
                    <label for="">
                        <span class="dot one"></span>
                        <a href=""><span class="gender">our company</span></a>
                    </label>
                    <label for="">
                        <span class="dot one"></span>
                        <a href="suplierTabe.php"><span class="gender">My Dashboard</span></a>
                    </label>
                </div>
            </div>
            <div class="button">
                <input type="submit" value="update" name="update">
                
            </div>
        </form>
    </div>
    <!-- < ?php
    }
    ?> -->
    
</body>


<?php
    if(isset($_REQUEST['update'])){

      
    $suplierID=$_REQUEST['suplierID'];
    $productID=$_REQUEST['productID'];
    $ProductName=$_REQUEST['ProductName'];
    $ProductPrice=$_REQUEST['ProductPrice'];
    $productDes=$_REQUEST['productDes'];
    $Category=$_REQUEST['Category'];
    
    $filename=$_FILES['img1']['name'];
    $tempname=$_FILES['img1']['tmp_name'];
    $folder="../../client/folderImg/productImages/".$filename;


        if($filename==""){
            $filename=$newimage;
        }else{
        $imgpath="../../client/folderImg/productImages/".$newimage;
        unlink($imgpath);

    }
        $query="UPDATE products set productId='$productID',itemName='$ProductName',price='$ProductPrice',description='productDes',category='Category',img='$filename' WHERE suplierId=$suplierID";

        mysqli_query($conn,$query);
        move_uploaded_file($tempname,$folder);
       
    }

    //  header("location:../suplierTabe.php");

?>

</html>

