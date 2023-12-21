<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="addminLoginStyle.css">
</head>
<body>
    <div class="wrapper">
        <div class="top">
            <img src="icon\sequre.gif" alt="">

        </div>
        <div class="bottom">
            <div class="info">
                Hello! <br>Enter your email and password
            </div>
            <form action="Include/adminLoginBack.php" method="POST">
                <div class="input-box">
                    <input type="text" placeholder="Enter your email" name="adminemail">
                </div>
                <div class="input-box">
                    <input type="password" placeholder="Enter your password" name="adminPassword">
                </div>

                <div class="input-box">
                    <input type="submit" value="Login" name="submit">
                </div>
            </form>
            <div class="footer">
                HighSecurity
            </div>
        </div>
    </div>
</body>
</html>