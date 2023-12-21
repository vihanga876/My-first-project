<?php
include('header.php');
?>
<style>
    * {
    box-sizing: border-box;
    padding: 0;
    margin: 0;

}

/* html,
body {
    background-size: cover;
    background-position: center;
} */

.wrapper3 {
width: 100%;
display: flex;
justify-content: center;
align-items: center;
height: 100vh  ;
}

.wrapper4{
    width: 450px;
    /* background: transparent; */
    border: 2px solid rgba(255, 255, 255, .2);
    backdrop-filter: blur(20px);
    box-shadow: 0 0 10px rgba(0, 0, 0, .2);
    color: #fff;
    border-radius: 10px;
    padding: 30px 40px;
}

.wrapper4 h1 {
    font-size: 36px;
    text-align: center;
}

.wrapper4 .input-box {
    position: relative;
    width: 100%;
    height: 50px;
    margin: 30px 0;
}

.input-box input {
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    border: 2px solid rgba(255, 255, 255, .2);
    color: #fff;
    border-radius: 40px;
    padding: 20px 45px 20px 20px;


}

.input-box input::placeholder {
    color: #fff;
}

.input-box i {
    position: absolute;
    right: 20px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 20px;
    color: #fff;
}

.wrapper4 .remember-frogot {

    display: flex;
    justify-content: space-between;
    font-size: 14.5px;
    margin: -15px 0 15px;
}

.remember-frogot label input {

    accent-color: #fff;
    margin-right: 3px;
}

.remember-frogot a {
    color: #fff;
    text-decoration: none;
}

.remember-frogot a:hover {
    text-decoration: underline;
}

.wrapper4 .btn {

    width: 100%;
    height: 45px;
    background: #fff;
    border: none;
    outline: none;
    border-radius: 40px;
    box-shadow: 0 0 10px rgba(0, 0, 0, .1);
    cursor: pointer;
    font-size: 16px;
    color: #333;
    font-weight: 600;
}

.wrapper4 .register-link {

    font-size: 14.5px;
    text-align: center;
    margin: 20px 0 15px;

}

.register-link p a {
    color: #fff;
    text-decoration: none;
    font-weight: 600;
}

.register-link p a:hover {
    text-decoration: underline;
}


</style>
<div class="wrapper3">
    <div class="wrapper4">
            <form action="include/logback.php" method="POST">

                <h1>Login</h1>
                <div class="input-box">
                    <input type="text" placeholder="Email" required name="Email">
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="password" placeholder="password" required name="Password">
                    <i class='bx bxs-lock-alt'></i>
                </div>

                <div class="remember-frogot">
                    <label><input type="checkbox">Remember me</label>
                    <label>
                        <a href="#">Frogot password</a>
                    </label>
                </div>
                <button type="submit" class="btn" name="login">Login</button>
                <div class="register-link">
                    <p>Dont't have an account? <a href="register.php">Register</a></p>
                </div>


            </form>
    </div>
</div>

<?php
include('footer.php');
?>