<?php
if(isset($_REQUEST['ProductBuy'])) {
    // Check if the form was submitted using POST and the specific submit button was clicked
include('connection.php');
    // Retrieve the data from the arrays
    echo $customer_ids = $_REQUEST['customer_id'];
    echo $product_ids = $_REQUEST['product_id'];
    echo $quantities = $_REQUEST['quantity'];
    echo $product_prices = $_REQUEST['PrPrice'];

    // Loop through the arrays and insert data into the database
    // for ($i = 0; $i < count($customer_ids); $i++) {
    //     $customer_id = $customer_ids[$i];
    //     $product_id = $product_ids[$i];
    //     $quantity = $quantities[$i];
    //     $product_price = $product_prices[$i];



    $sql = "INSERT INTO ordertableNow(CusermerId, ProductId, qty, Price) VALUES ('$customer_ids', '$product_ids', '$quantities', '$product_prices')";
    $result=mysqli_query($con,$sql);
    if($result){
       
    //  $sql="DELETE From cart where customer='$customer_id'";
    //  $result=mysqli_query($con,$sql);
     header("location:../index.php?error=youBuyANewOne");
     
       
    }





       


        // Execute the SQL query using mysqli_query or another database API

        // Perform error handling as needed
    // }

    // Redirect or display a success message
    // header('Location: success.php');
    // exit();
}
?>