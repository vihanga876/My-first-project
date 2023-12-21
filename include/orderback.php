<?php
if(isset($_REQUEST['subOdno'])) {
    // Check if the form was submitted using POST and the specific submit button was clicked
include('connection.php');
    // Retrieve the data from the arrays
    echo $customer_ids = $_POST['customer_id'];
    echo $product_ids = $_POST['product_id'];
    echo $quantities = $_POST['quantity'];
    echo $product_prices = $_POST['product_price'];

    // Loop through the arrays and insert data into the database
    for ($i = 0; $i < count($customer_ids); $i++) {
        $customer_id = $customer_ids[$i];
        $product_id = $product_ids[$i];
        $quantity = $quantities[$i];
        $product_price = $product_prices[$i];



    $sql = "INSERT INTO ordertable (CusermerId, ProductId, qty, Price) VALUES ('$customer_id', '$product_id', '$quantity', '$product_price')";
    $result=mysqli_query($con,$sql);
    if($result){
       
     $sql="DELETE From cart where customer='$customer_id'";
     $result=mysqli_query($con,$sql);
     header("location:../index.php?error=newDataAdded");
     
       
    }        // Execute the SQL query using mysqli_query or another database API

        // Perform error handling as needed
    }

    // Redirect or display a success message
    // header('Location: success.php');
    // exit();
}
?>