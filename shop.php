<?php 
include('header.php');
?>


<?php
if(isset($_SESSION['userid'])){?>
    <section>

    <?php

    include('include/connection.php');

    $num=6;


    if(isset($_GET['page']))
{
$page=$_GET['page'];

}
else
{
    $page=1;
}


$Start_From=($page-1)*6;

$query="SELECT * FROM products where permision='yes' limit $Start_From,$num";
$result=mysqli_query($con,$query);

?>

    <div class="cardsShop">
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



        <?php
}
?>


    </div>


    <?php
$sql="SELECT * FROM products where permision='yes'";
$result=mysqli_query($con,$sql);
$totla_rec=mysqli_num_rows($result);
$total_pages=ceil($totla_rec/$num);


for($i=1;$i<=$total_pages;$i++){?>
    <div class="pga1">
    <div class="pga">
        <a href="shop.php?page=<?php echo $i ; ?>" class="button">
            <?php echo $i?>
            <?php ?>
        </a>
    </div>
    </div>
    <?php
}
?>
</section>

<?php
}else{
?>


<section>

<?php

include('include/connection.php');

$num=6;


if(isset($_GET['page']))
{
$page=$_GET['page'];

}
else
{
$page=1;
}


$Start_From=($page-1)*6;

$query="SELECT * FROM products where permision='yes' limit $Start_From,$num";
$result=mysqli_query($con,$query);

?>

<div class="cardsShop">
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
                <a href="login.php" class="p-buy-btn">Buy Now</a>
            </div>

        </div>
    </div>



    <?php
}
?>


</div>


<?php
$sql="SELECT * FROM products where permision='yes'";
$result=mysqli_query($con,$sql);
$totla_rec=mysqli_num_rows($result);
$total_pages=ceil($totla_rec/$num);


for($i=1;$i<=$total_pages;$i++){?>
<div class="pga1">
<div class="pga">
    <a href="shop.php?page=<?php echo $i ; ?>" class="button">
        <?php echo $i?>
        <?php ?>
    </a>
</div>
</div>
<?php
}
?>
</section>



<?php
}
?>

