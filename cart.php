<?php
include('header.php');
?>

<?php
include('include/connection.php');
?>
<link rel="stylesheet" href="css/cart.css">


<form action="include/orderback.php" method="post">
    <div class="main">
        <div class="table">
            <table border=0 cellspacing=0 style="padding: 25px;">
                <thead>
                    <tr>
                        <th>
                            <p>Custormer Id</p>
                        </th>
                        <th>
                            <p>Product Id</p>
                        </th>
                        <th>
                            <p>Product Image</p>
                        </th>
                        <th>
                            <p>Product Name</p>
                        </th>
                        <th>
                            <p>Quantity</p>
                        </th>
                        <th>
                            <p>Sub Price</p>
                        </th>
                        <th>
                            <p>Price</p>
                        </th>
                        <th>
                            <p>Delete the Item</p>
                        </th>
                        <!-- Other table headers -->
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $qty=0;
                    $price=0;
                    $Totprice=0;
                    $M_price=0;
                    $query2 = "SELECT * from cart";
                    $result2 = mysqli_query($con, $query2);
                    while ($row = mysqli_fetch_assoc($result2)) {
                        $qty = $row['qty'];
                        $price = $row['PrPrice'];
                        $M_price = $_SESSION['pri'] = $qty * $price;
                        $Totprice= $Totprice+ $M_price;
                    ?>
                    <tr>
                        <td>
                            <p>
                                <?php echo $_SESSION['userid'] ?>
                            </p>
                            <input type="hidden" name="customer_id[]" value="<?php echo $_SESSION['userid'] ?>">
                        </td>
                        <td>
                            <p>
                                <?php echo $row['ProductId'] ?>
                            </p>
                            <input type="hidden" name="product_id[]" value="<?php echo $row['ProductId'] ?>">
                        </td>
                        <td class="imgTd"><img src="folderImg/productImages/<?php echo $row['ItemImage'] ?>" alt="">
                        </td>
                        <td>
                            <p>
                                <?php echo $row['ItemName'] ?>
                            </p>
                        </td>
                        <td>
                            <p>
                                <?php echo $row['qty'] ?>
                                <!-- < ?php
                                $qty2=$row['qty']*$row['qty'];
                                ?> -->
                            </p>
                            <input type="hidden" name="quantity[]" value="<?php echo $row['qty'] ?>">
                        </td>
                        <td>
                            <p>
                                <?php echo $row['PrPrice'] ?>
                                <!-- < ?php
                                $qty2=$row['qty']*$row['qty'];
                                ?> -->
                            </p>
                           
                        </td>
                        <td>
                            <p>
                                <?php echo $M_price ?>
                            </p>
                            <input type="hidden" name="product_price[]" value="<?php echo $M_price ?>">
                        </td>
                        <td class="delete">
                            <a href="include/cart_delete.php?deleteId=<?php echo $row['ProductId'] ?>"
                                class="c-deleteBtn"> Delete</a>
                        </td>
                    </tr>

                    <?php
                    }
                    ?>
                </tbody>
                <tbody class="totalTable">
                    <tr class="totalTableTr">
                        <td colspan="4" class="totalTableTd">
                            Total
                        </td>
                        <td colspan="1" class="totalTableTd">
                        <?php
                         echo  $Totprice;
                        ?>    
                        </td>
                        <td colspan="2" class="totalTableTd">
                            
                        </td>
                    </tr>
                </tbody>

            </table>
            <div class="buttons">
                <input type="submit" name="subOdno" value="Buy ALL">
            </div>
        </div>
    </div>
</form>





<?php
include('footer.php');
?>







<!-- < ?php
include('connection.php');
session_start();
$tot=0;
$tot2=0;
if(isset($_GET['subOdno'])){
  $odno=$_SESSION['oderNo']=$_GET['orderNumber'];
}else if(isset($_GET['no'])){
  $odno=$_GET['no'];
}else{
  $odno=0;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    < ?php
$query="SELECT * FROM products";
$result=mysqli_query($con,$query);
while ($data=mysqli_fetch_assoc($result)) {?>
    <form action="oderback.php" method="GET">

        <div class="con">
            <div class="card2">
                <img src="imgProduct/< ?php echo $data['CakeImg']?>" alt="">
                <h3 class="name">< ?php echo $data['cakeName']?></h3>

                <input type="hidden" name="pid" value="< ?php echo $data['pid']?>">
                <input type="text" name="pdPrice" value="< ?php echo $data['Price']?>">

                <input type="hidden" name="orderId" value="< ?php echo $odno?>">
                <input type="number" name="qty" min="0">


                <input type="submit">
            </div>

    </form>

    < ?php
}
?>
    <div class="oder">
        <form action="">
            <input type="number" name="orderNumber" min="0" value="< ?php echo $odno?>">
            <input type="submit" name="subOdno">

        </form>

    </div>


    <div class="table">
        <table border="0" style="color: white;">
            <thead>

                <tr>
                    <th>
                        Oder Id
                    </th>
                    <th>
                        Product Id
                    </th>
                    <th>
                        Cake price
                    </th>
                    <th>
                        Quality
                    </th>
                    <th>
                        Total Price
                    </th>
                    <th>
                        Action
                    </th>
                </tr>
            <tbody>
                < ?php
              $query="SELECT * from oderlist where oderId ='$odno'";
              $result=mysqli_query($con,$query);
              while($row=mysqli_fetch_assoc($result)){?>

                  <tr>
                    <td>
                        <  ?php echo $row['oderId']?>
                    </td>
                    <td>
                    <  ?php echo $row['pid']?>
                    </td>
                    <td>
                    <  ?php echo $row['price']?>
                    </td>
                    <td>
                    <  ?php echo $row['qty']?>
                    </td>
                    <td>
                    <  ?php  $tot=$row['qty'] * $row['price']?>
                    <  ?php  $tot2+=$row['qty'] * $row['price']?>
                  <  ?php
                  echo "$tot.00";
                  ?>
                    </td>
                    <td>
                        <a href="delete.php?deleteid=< ? php echo $row['oderId'];?>&id=< ? php echo $row['pid']?>">remove</a>
                    </td>

                  </tr>


              < ? php
              }
              echo '<tr>';
              echo '<td colspan=4>Total</>';
              echo '<td>'.$tot2.'</td>';
              echo '</tr>';
              ?>
                
            </tbody>
            </thead>
        </table>
    </div>


    </div>


</body>

</html> -->