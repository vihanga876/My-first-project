<?php
include('Include/conection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="suplierTabel.css">
    <link rel="shortcut icon" href="icon/logo copy.png">
    <style type="text/css">
        main.tabel {
            text-align: center;
            width: 100%;
            height: 90vh;
            background-color: #fff5;
            /* backdrop-filter: blur(7px); */
            box-shadow: 0 .4rem .8rem #0005;
            border-radius: .8rem;
            overflow: scroll;
        }

        .tabel_header {
            width: 100%;
            height: 10%;
            background-color: rgba(5, 15, 124, 0.267);
            padding: .8rem 1rem;
        }

        .tabel_body {
            width: 95%;
            max-height: calc(89% - .8rem);
            background-color: #fffb;
            margin: .8rem auto;
            border-radius: .6rem;
            overflow: .6rem;
        }

        .tabel_body::-webkit-scrollbar {
            width: 0.5rem;
            height: 0.5rem;
        }

        .tabel_body::-webkit-scrollbar-thumb {
            border-radius: .5rem;
            background-color: #0004;
        }

        td img {
            width: 70px;
            height: 70px;
            margin-right: .5rem;
            border-radius: 50%;

            vertical-align: middle;
        }

        table,
        th,
        td {
            /* border-collapse: collapse; */
            padding: 1rem;
        }

        thead th {
            position: sticky;
            left: 0;
            top: 0;
            background-color: #d5d1de;
        }

        tbody tr:nth-child(even) {
            background-color: #0000000b;
        }

        tbody tr:hover {
            background-color: #21202338;
        }

        .status {
            width: 100px;
            background-color: #86e49d;
            padding: .4rem 0;
            border-radius: 2rem;
        }
    </style>
</head>

<body><?php
session_start();
if(isset($_SESSION['supid'])){
 
    ?>
    <div class="container">
    <nav>
        <ul>
            <li><a href="#" class="logo">
                    <img src="icon/admin.png">
                    <span class="nav-item">Suplier</span>
                </a></li>

            <li><a href="#">
                    <img src="icon/dashbord.png">
                    <span>Dashboard</span>
                </a></li>

            <li><a href="#">
                    <img src="icon/msg.png">
                    <span>Message</span>
                </a></li>

            <li><a href="#">
                    <img src="icon/report.png">
                    <span>Report</span>
                </a></li>

            <li><a href="#">
                    <img src="icon/sup.png">
                    <span>Supliers</span>
                </a></li>

            <li><a href="#">
                    <img src="icon/set.png">
                    <span>Setting</span>
                </a></li>

            <li><a href="suplierProduct.php?id='$_SESSION[supid]'">
                <img src="icon/buy.png">
                <span>add Product</span>
            </a></li>

            <li><a href="include/logout.php" class="logout">
                    <img src="icon/logout.png">
                    <span>Log out</span>
                </a></li>
        </ul>
    </nav>

    <section class="main">
        <div class="main-top">
            <h1>Products</h1>
            <img src="icon/dashbord1.png">
        </div>
        <div class="users">
            <!-- <div class="card">
                <img src="icon/users.png">
                <h4>Custermers</h4>
                <p>manage</p>
                <div class="per">
                    <table>
                        <tr>
                            <td><span>85%</span></td>
                            <td><span>87%</span></td>
                        </tr>
                        <tr>
                            <td>Month</td>
                            <td>Year</td>
                        </tr>
                    </table>
                </div>
                <button>View</button>
            </div>

            <div class="card">
                <img src="icon/suplier.png">
                <h4>suplier</h4>
                <p>manage</p>
                <div class="per">
                    <table>
                        <tr>
                            <td><span>85%</span></td>
                            <td><span>87%</span></td>
                        </tr>
                        <tr>
                            <td>Month</td>
                            <td>Year</td>
                        </tr>
                    </table>
                </div>
                <button>View</button>
            </div>

            <div class="card">
                <img src="icon/order.png">
                <h4>Custermers Order</h4>
                <p>manage</p>
                <div class="per">
                    <table>
                        <tr>
                            <td><span>85%</span></td>
                            <td><span>87%</span></td>
                        </tr>
                        <tr>
                            <td>Month</td>
                            <td>Year</td>
                        </tr>
                    </table>
                </div>
                <button>View</button>
            </div> -->

            <!-- <div class="card">
                <img src="icon/chart.png">
                <h4>Profit</h4>
                <p>manage</p>
                <div class="per">
                    <table>
                        <tr>
                            <td><span>85%</span></td>
                            <td><span>87%</span></td>
                        </tr>
                        <tr>
                            <td>Month</td>
                            <td>Year</td>
                        </tr>
                    </table>
                </div>
                <button>View</button>
            </div>

        </div> -->

            <section class="attendance">
                <div class="attendance-list">
                    <h1>Products</h1>
                    <main class="tabel">
                        <section class="tabel_header">
                            <h1>suplier tabel</h1>
                        </section>
                        <section class="tabel_body">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Product id</th>
                                        <th>suplier id</th>
                                        <th>Product name</th>
                                        <th>product price</th>
                                        <th>Product Description</th>
                                        <th>Product img1(front side)</th>
                                       
                                        <th>Permission</th>
                                        <th>Delete</th>
                                        <th>Update</th>
                                        <!-- <th>Update</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $supid=$_SESSION['supid'];
                                    $query="SELECT * from products where suplierId='$supid'";
                                    $result=mysqli_query($conn,$query);
                                    $count=0;
                                    while ($row = mysqli_fetch_assoc($result)){
                            
                                ?>
                                
                                    <tr>
                                        <td><?php echo $row['productId'];?></td>
                                        <td><?php echo $row['suplierId'];?></td>
                                        <td><?php echo $row['itemName'];?></td>
                                        <td><?php echo $row['price'];?></strong></td>
                                        <td><?php echo $row['description'];?></td>
                                        <td><img src="../folderImg/productImages/<?php echo $row['img'];?>"></td>

                                        <td><?php echo $row['permision'];?></td>
                                        <td><button><a href="Include/deleteProduct.php?deleteId='<?php echo $row['productId'];?>'" class="status delevered">Delete</a></button></td>
                                        <td><button><a href="Include/updateImage.php?updateId='<?php echo $row['productId'];?>'" class="status delevered">Update</a></button></td>
                                    </tr>
                                    <?php
                                }
                                    ?>
                                </tbody>
                            </table>
                        </section>
                    </main>
                </div>
            </section>
    </section>
</div>
<?php
}else{
    // echo"not here";
}

?>
    
</body>

</html>