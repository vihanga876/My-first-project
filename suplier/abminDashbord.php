<?php
include('Include/conection.php');
include("adminDashHead.php");
?>

        <nav>
            <ul>
                <li><a href="#" class="logo">
                        <img src="icon/admin.png">
                        <span class="nav-item">Admin</span>
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

                <li><a href="adminLogin.php" class="logout">
                        <img src="icon/logout.png">
                        <span>Log out</span>
                    </a></li>
            </ul>
        </nav>

        <section class="main">
            <div class="main-top">
                <h1>Manage</h1>
                <img src="icon/dashbord1.png">
            </div>
            <div class="users">
                <div class="card">
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
                    <a href="adminCustermer.php"><button>View</button></a>
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
                    <a href="adminSuplier.php"><button>View</button></a>
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
                </div>

                <div class="card">
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

            </div>

            <section class="attendance">
                <div class="attendance-list">
                    <h1>Products</h1>
                    <main class="tabel">
                        <section class="tabel_header">
                            <h1>suplier tabel</h1>
                        </section>
                        <section class="tabel_body">
                        <div class="input-box">
                    <!-- <span class="details">Product ID</span>
                    <input type="text" name="productID"> -->
                    
                    
                    </div>
                   
                            <table>
                                <thead>
                                    <tr>
                                    <th>Product id</th>
                                        <th>suplier id</th>
                                        <th>Product name</th>
                                        <th>product price</th>
                                        <th>Product Description</th>
                                        <th>Product img</th>
                                        <th>YES/No</th>
                                        <th>approve</th>
                                        <th>disapprove</th>
                                         <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                        
                                        $query="select * from products";
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
                                            <td><img src="../folderImg/productImages/<?php echo $row['img']; ?>"></td>
                                            <td><?php echo $row['permision'];?></td>
                                            <td><button><a href="Include/addCard.php? updateid='<?php echo $row['productId'];?>'" class="status delevered">approve</a></button></td>
                                            
                                            <td><button><a href="Include/addCard2.php? dissaprove='<?php echo $row['productId'];?>'" class="status delevered">disapprove</a></button></td>
                                            <td><button><a href="Include/deletesuplierTable.php? deleteid='<?php echo $row['productId'];?>'" class="status delevered">delete</a></button></td>
                                           
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
</body>

</html>