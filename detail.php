<?php 
include('header.php');
?>
<?php
include('include/connection.php');


if(isset($_SESSION['userid'])){


    if(isset($_REQUEST['detailId'])){
        $uid=$_SESSION["uid"]=$_REQUEST['detailId'];
        $query="SELECT * from products where id='$uid'";
        $result=mysqli_query($con,$query);
        
        while($row=mysqli_fetch_assoc($result)){?>
        
        
        <div class="flex-box">
            <div class="left">
                <div class="big-img">
                    <img src="folderImg/productImages/<?php echo $row['img'] ?>" alt="">
                </div>
            </div>
        <form action="include/cartback.php">
            <div class="right">
                <div class="url">Home >  <?php echo $row['category']?> > <?php echo $row['itemName']?></div>
                <div class="pname"><?php echo $row['itemName']?> <input type="hidden" name="ItemName" value="<?php echo $row['itemName']?>"></div>
                <input type="hidden" name="ItemImage" value="<?php echo $row['img'] ?>">
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <div class="price" name="PrPrice">Price : <?php echo "RS.";echo $row['price']?><input type="hidden" name="PrPrice" value="<?php echo $row['price']?>" ></div>
               
                <div class="quantity">
                    <p>Quantity :</p>
                    <input type="number" name="qty" min="1" max="5" value="1">
                </div>
                <div class="btn-box">
                    <button class="cart-btn" value="<?php echo $row['id']?>" name="ProductId">Add to cart</button>
                </div>
                <div class="discrip-box">
                    <h2 class="P_Dis">
                        Discription
                    </h2>
                    <p class="disc-box"><?php echo $row['description']?></p>
                </div>
            </div>
        
        </div>
        </form>
        
        
        <?php
        }
        }else{


        }
        ?>    


<?php
}
?>



<script>
let bigImg=document.querySelector('.big-img img');
function showImg(pic){
    bigImg.src=pic;
}
</script>

