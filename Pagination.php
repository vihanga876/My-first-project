<?php 
include('header.php');
?>


<?php
if(isset($_SESSION['userid'])){


if(isset($_REQUEST['paId'])){


include('include/connection.php');

$category=$_REQUEST['paId'];



$query="SELECT * FROM products where category='$category' and permision='yes'";
$result=mysqli_query($con,$query);

?>

<div class="cards">
    <form action="detail.php" method="post">
        <?php
    while ($data=mysqli_fetch_assoc($result)) {?>



        <div class="product-box2">
            <div class="p-img-container">
                <div class="p-img">
                    <a href="">
                        <img src="folderImg/productImages/<?php echo $data['img']?>" alt="font">

                    </a>

                </div>
            </div>

            <div class="p-box-text">
                <div class="product-category">
                    <span>
                        <?php echo $data['itemName']?>
                    </span>
                </div>

             
                <div class="price-buy">
                    <span class="p-price">
                        <?php echo "Rs."; echo  $data['price']?>
                    </span>
                    <a href="detail.php?detailId=<?php echo $data['id'] ?>" class="p-buy-btn">Buy Now</a>
                </div>

            </div>
        </div>
    </form>


    <?php
    }
    ?>


</div>

<?php
}
?>

<?php
}else{

header("location:login.php");


}

?>