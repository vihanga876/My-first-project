<!-- < ?php
include_once('header.php');
?> -->
<link rel="shortcut icon" href="icon/logo copy.png">
<link rel="stylesheet" href="stylee.css">
<div class="cont">
<div class="container">

    <form action="Include/suplierRegback.php"  method="post" enctype="multipart/form-data">
        <div class="title">Suplier registration</div>
        <div class="input-box">
            <input type="text" placeholder="Enter your suplierName" name="suplierName">
            <div class="underline"></div>
        </div>
        <div class="input-box">
            <input type="text" placeholder="Enter your suplierContact" name="suplierContact">
            <div class="underline"></div>
        </div>

        <div class="input-box">
            <input type="text" placeholder="Enter your suplierAddress" name="suplierAddress">
            <div class="underline"></div>
        </div>

        <div class="input-box">
            <input type="text" placeholder="Enter your suplierEmail" name="suplierEmail">
            <div class="underline"></div>
        </div>

        <div class="input-box">
            <input type="password" placeholder="Enter your suplierPassword" name="suplierPassword">
            <div class="underline"></div>

            <input type="file" name="imageUpload">

            <div class="underline"></div>
        </div>
        <div class="input-box button">
            <input type="submit" name="submit">
        </div>
        <!-- <a href="login.php" class="log">login</a> -->
        <div class="login-register">
            <p>Do you want to <a href="suplierLogin.php" class="register-link">Login</a></p>
        </div>

    </form>

</div>
</div>