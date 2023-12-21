<?php
include('header.php');
?>

    <div class="wrapper1">

        <div class="wrapper2">
            <div class="img">
                <img src="img/regimg.jpg" alt="">
            </div>
            <div class="details">
                <form action="include/regback.php" method="post" enctype="multipart/form-data" class="ct1">

                    <label for="">User Name</label><br>
                    <input class="input-box" type="text" name="UsName"><br>

                    <label for="">First Name</label><br>
                    <input class="input-box" type="text" name="First"><br>

                    <label for="">Email</label><br>
                    <input class="input-box" type="text" name="Email"><br>
                    <label for="">Password</label><br>
                    <input class="input-box" type="text" name="pass"><br>


                    <label for="">Confirm Password</label><br>
                    <input class="input-box" type="text" name="Cpass"><br>

                    <input type="file" name="ImgFile" class="imgfile"><br><br>

                    <input type="submit" value="Register" class="SubBtn" name="reg">
                    <p class="ph"><br>Or <br>Already have a account <a href="login.php">Login Hear</a></p> 
                </form>
            </div>

        </div>



    </div>
