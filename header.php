<!DOCTYPE html>
<html lang="en">

<head>




    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Shop</title>
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/imagestyle.css">
    <link rel="stylesheet" href="css/log.css">
    <link rel="stylesheet" href="css/reg.css">
    <link rel="stylesheet" href="css/glider.min.css">
    <link rel="stylesheet" href="css/detail.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/cardstyle.css">


    <link rel="stylesheet" href="css/NavBarstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>
    <?php  
session_start();


if(isset($_SESSION['userid'])){?>

    <!-- <header>
        <div class="logo">
            <img src="img/logo.png" alt="" class="logo-Image">
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php?pui">Shop</a></li>
                <li><a href="../suplier/suplierLogin.php">Suplier</a></li>
                <li><a href="cart.php">Cart</a></li>
                <li><a href="profile.php?uid=$_SESSION['uid']">User</a></li>.

            </ul>
        </nav>
        <a href="include/logout.php"><button>LogOut</button></a>
    </header> -->

    <header>
        <div class="navbar">
            <div class="logo"><img src="img/logo.png" alt=""></div>
            <ul class="links">
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php?pui">Shop</a></li>
                <li><a href="suplier/suplierLogin.php">Suplier</a></li>
                <li><a href="cart.php">Cart</a></li>
                <li><a href="profile.php?uid=$_SESSION['uid']">User</a></li>
            </ul>
            <a href="include/logout.php" class="action_btn">LogOut</a>
            <div class="toggle_btn">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>

        <div class="dropdown_menu">
            <ul class="links">
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php?pui">Shop</a></li>
                <li><a href="suplier/suplierLogin.php">Suplier</a></li>
                <li><a href="cart.php">Cart</a></li>
                <li><a href="profile.php?uid=$_SESSION['uid']">User</a></li>
                <li><a href="include/logout.php" class="action_btn">LogOut</a></li>
            </ul>
        </div>

    </header>

    <script>
        const togglebtn = document.querySelector('.toggle_btn')
        const togglebtnIcon = document.querySelector('.toggle_btn i')
        const DropDownMenu = document.querySelector('.dropdown_menu')
        togglebtn.onclick = function () {
            DropDownMenu.classList.toggle('open');
            const isopen = DropDownMenu.classList.contains('open')


            togglebtnIcon.classList = isopen
                ? 'fa-solid fa-xmark'
                : 'fa-solid fa-bars'

        }
    </script>





    <div class="container1">
        <?php
        
}
else
{
?>

        <!-- <header>
            <div class="logo">
                <img src="img/logo.png" alt="" class="logo-Image">
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="shop.php?pui">Shop</a></li>
                    <li><a href="../suplier/suplierLogin.php">Suplier</a></li>
                    <li><a href="login.php">User</a></li>
                </ul>
            </nav>
            <a href="login.php"> <button>Login</button></a>
        </header> -->



        <header>
            <div class="navbar">
                <div class="logo"><img src="img/logo.png" alt=""></div>
                <ul class="links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="shop.php?pui">Shop</a></li>
                    <li><a href="suplier/suplierLogin.php">Suplier</a></li>
                    <li><a href="login.php">User</a></li>
                </ul>
                <a href="login.php" class="action_btn">Login</a>
                <div class="toggle_btn">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>
    
            <div class="dropdown_menu">
                <ul class="links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="shop.php?pui">Shop</a></li>
                    <li><a href="suplier/suplierLogin.php">Suplier</a></li>
                    <li><a href="login.php">User</a></li>
                    <li><a href="login.php" class="action_btn">Login</a></li>
                </ul>
            </div>
    
        </header>
    
        <script>
            const togglebtn2 = document.querySelector('.toggle_btn')
            const togglebtnIcon2 = document.querySelector('.toggle_btn i')
            const DropDownMenu2 = document.querySelector('.dropdown_menu')
            togglebtn2.onclick = function () {
                DropDownMenu2.classList.toggle('open');
                const isopen2 = DropDownMenu2.classList.contains('open')
    
    
                togglebtnIcon2.classList = isopen2
                    ? 'fa-solid fa-xmark'
                    : 'fa-solid fa-bars'
    
            }
        </script>

        <div class="container1">


            <?php
}
?>