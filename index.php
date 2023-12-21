<?php
include('header.php');
?>

<?php
if(isset($_SESSION['userid'])){?>

<div class="Index-cotainer">
<section>
    <div class="cont">
        <p>For all your furry family members</p>
        <button><a href="shop.php">Orders</a></button>
    </div>
</section>



<section>
<link href="css/category.css" rel="stylesheet">
    <div class="hero-section">
        <div class="card-grid">

            <?php
        include('include/connection.php');
        $query="SELECT * FROM  category ";
        $result=mysqli_query($con,$query);
        while($row=mysqli_fetch_assoc($result)){?>
            <a class="card" href="Pagination.php?paId=<?php echo $row['Category']?>">
                <div class="card__background" style="background-image: url(folderImg/categoryImages/<?php echo $row['img']?>)">
                </div>
                <div class="card__content">
                    <h3 class="card__heading"><?php echo $row['Category']?></h3>
                </div>
            </a>

        <?php
        }
        ?>
        </div>
    </div>


</section>

<?php
if(!isset($_REQUEST['error'])){
    $ok=null;

}else{
    $ok=$_REQUEST['error'];
    if($ok=='newDataAdded'){
    echo "<script>";
    echo "alert('Thanks for your order! We’re working hard to get it shipped to you. We hope to see you again in the future.')";
    echo "</script>";
    }
}
?>

<section class="p-slider">
    <h3 class="product-slider-heading">New Products</h3>
    <div class="slider-btn">
        <button aria-label="Previous" class="glider-prev">
            <span>
            </span>
        </button>
        <button aria-label="Next" class="glider-next">
            <span>
            </span>
        </button>
    </div>

    <div class="glider-contain">
        <div class="glider">
            <?php
include('include/connection.php');
$query="SELECT * FROM  products where permision='yes'";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($result)){?>


            <div class="product-box">

                <!-- <span class="p-discount">Sale</span> -->

                <div class="p-img-container">
                    <div class="p-img">
                        <a href="">
                            <img src="folderImg/productImages/<?php echo $row['img']?>" alt="font">
                            <!-- <img src="71VR6c3j2bL.jpg" class="p-img-back" alt="back"> -->
                        </a>

                    </div>
                </div>

                <div class="p-box-text">
                    <div class="product-category">
                        <span>Headphone</span>
                    </div>

                    <a href="#" class="product-title"><?php echo $row['itemName']?>.</a>
                    <div class="price-buy">
                        <span class="p-price"><?php echo $row['price']?></span>
                        <a href="detail.php?detailId=<?php echo $row['id'] ?>" class="p-buy-btn">Buy Now</a>
                    </div>

                </div>
            </div>


            <?php
}
    ?>


        </div>



    </div>




</section>

</div>



<?php
}
else
{?>


<div class="Index-cotainer">
<section>
    <div class="cont">
        <p>For all your furry family members</p>
        <button><a href="shop.php">Orders</a></button>
    </div>
</section>



<section>
<link href="css/category.css" rel="stylesheet">
    <div class="hero-section">
        <div class="card-grid">

            <?php
include('include/connection.php');
$query="SELECT * FROM category";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($result)){?>
            <a class="card" href="Pagination.php?paId=<?php echo $row['Category']?>">
                <div class="card__background" style="background-image: url(folderImg/categoryImages/<?php echo $row['img']?>)">
                </div>
                <div class="card__content">
                    <h3 class="card__heading"><?php echo $row['Category']?></h3>
                </div>
            </a>

    <?php
    }
    ?>
        </div>
    </div>


</section>


<section class="p-slider">
    <h3 class="product-slider-heading">New Products</h3>
    <div class="slider-btn">
        <button aria-label="Previous" class="glider-prev">
            <span>
            </span>
        </button>
        <button aria-label="Next" class="glider-next">
            <span>
            </span>
        </button>
    </div>

    <div class="glider-contain">
        <div class="glider">
            <?php
include('include/connection.php');
$query="SELECT * FROM  products where permision='yes'";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($result)){?>


            <div class="product-box">

                <!-- <span class="p-discount">Sale</span> -->

                <div class="p-img-container">
                    <div class="p-img">
                        <a href="">
                            <img src="folderImg/productImages/<?php echo $row['img']?>" alt="font">
                            <!-- <img src="71VR6c3j2bL.jpg" class="p-img-back" alt="back"> -->
                        </a>

                    </div>
                </div>

                <div class="p-box-text">
                    <div class="product-category">
                        <span>Headphone</span>
                    </div>

                    <a href="#" class="product-title"><?php echo $row['itemName']?></a>
                    <div class="price-buy">
                        <span class="p-price"><?php echo $row['price']?></span>
                        <a href="login.php" class="p-buy-btn">Buy Now</a>
                    </div>

                </div>
            </div>


            <?php
}
    ?>


        </div>



    </div>




</section>

</div>



<?php
}

?>


<script src="js/glider.min.js"></script>



<script>
    new Glider(document.querySelector('.glider'), {
        slidesToScroll: 1,
        slidesToShow: 4,
        draggable: true,
        dots: '.dots',
        arrows: {
            prev: '.glider-prev',
            next: '.glider-next'
        },responsive: [
    {
      // screens greater than >= 775px
      breakpoint: 1200,
      settings: {
        // Set to `auto` and provide item width to adjust to viewport
        slidesToShow: 4,
        slidesToScroll: 2,
      }
    },{
      // screens greater than >= 1024px
      breakpoint: 900,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
     
      }
    },{
      // screens greater than >= 1024px
      breakpoint: 640,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
     
      }
    },{
      // screens greater than >= 1024px
      breakpoint: 304,
      settings: {
        slidesToShow: 1.5,
        slidesToScroll: 1,
     
      }
    },{
      // screens greater than >= 1024px
      breakpoint: 0,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
     
      }
    }
  ]
    });
</script>

<?php
include('footer.php');
?>