<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="icon/logo copy.png">
    <!-- <link rel="stylesheet" href="rulesStyle.css"> -->
    <style type="text/css">
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins',sans-serif;
}

body{
    background: black;
}

.wrapper{
   margin: auto;
    /* position: absolute; */
    /* left: 40%; */
    margin-top:10%;
    transform: translate(-50 -50%);
    background: #fff;
    max-width: 400px;
    width: 100%;
    border-radius: 12px;
    text-align: center;
    box-shadow: 0 10px 10px rgba(0, 0, 0, 0.5);

}

.wrapper .top{
    border: 2px solid rgb(0, 247, 255);
    height: 140px;
    background: linear-gradient(to right, #0ecce5 0%, #090042 100%);
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 12px 12px 0 0;
    position: relative;
}



.wrapper .top::before{
    content: "";
    position: absolute;
    height: 20px;
    width: 20px;
    background: linear-gradient(to right, #ff0095 0%, #48006c 100%);
    bottom: -10px;
    transform: rotate(45deg);
}

.wrapper .top img{
    font-size: 70px;
    color: #ccc;
}

.wrapper .bottom{
    padding: 30px;
}

.wrapper .bottom .info{
    font-size: 20px;
    font-weight: 500;
}

.wrapper .bottom .btn{
    border: none;
    width: 100%;
    margin: 10px;
    height: 50px;
    border-radius: 10px;
    background: linear-gradient(to right, #2200ff 0%, #d00e6f 100%);
    cursor: pointer;
}

.wrapper .bottom .btn a{
    color: #fff;
    letter-spacing: 1px;
    text-decoration: none;
    font-size:1.2em;
}

img{
    width: 50%;
    height: 50%;
    border-radius: 50%;
}
    </style>
</head>
<body>
    <?php
    session_start();
    if(isset($_SESSION['supid'])){?>
        <div class="wrapper">
        <div class="top">
            <img src="icon\rules.gif" alt="">

        </div>
        <div class="bottom">
            <div class="info">
                Hello! Suplier<br><u>Our Laws and Regulations</u>
            </div>
            <form action="#">
                <div class="input-box">
                Follow local and internationally applicable laws and ethical standards and
                strictly prohibit bribes
                kickbacks, illegal payments and any other offer
                of items of value that may inappropriately influence or reward the order,
                purchase, recommendation or use of our products and services, whether
                provided directly or through a third party, such as a distributor, customs
                broker, or other agent. 
                </div>
                
                <div class="input-box">
                    <button class="btn"><a href="suplierTabe.php?id='$_SESSION[supid]'">I agree</a></button>
                </div>
                <div class="input-box">
                    <button class="btn"><a href="suplierLogin.php">Cancel</a></button>
                </div>
            </form>
            <div class="footer">
                <!-- shop name -->
            </div>
        </div>
    </div>
    <?php
    }
    ?>
   
</body>

</html>