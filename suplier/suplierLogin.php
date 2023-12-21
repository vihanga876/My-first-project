<?php
include_once('header.php');
?>
<link rel="stylesheet" href="loginStyle.css">
<body>
    <div class="wrapper2">
        <div class="top2">
            <img src="icon\login.gif" alt="">

        </div>
        <div class="bottom2">
            <div class="info2">
                Hello! Suplier<br> Enter your email and password
            </div>
            <form action="Include/suplierLoginBack.php" method="POST">
                <div class="input-box2">
                    <input type="text" placeholder="Enter your email" name="suplierEmail">
                </div>
                <div class="input-box2">
                    <input type="password" placeholder="Enter your password" name="suplierPassword">
                </div>

                <div class="input-box2">
                <input type="submit" value="Login" name="submit">
                </div>
            </form>
            <div class="foo2">
            <a href="suplierReg.php">Do you want to Register now!</a>
            </div>
        </div>
    </div>
</body>
</html>



