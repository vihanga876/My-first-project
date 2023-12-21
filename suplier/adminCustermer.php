<?php
include('Include/conection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
    outline: none;
    scroll-behavior: smooth;
    font-family: 'Poppins', sans-serif;
}



/* header design */

:root{
    --bg-color: #1f242d;
    --second-bg-color: #323946;
    --text-color: #fff;
    --main-color: #0ef;
}



html{
    font-size: 62.5%;
    overflow-x: hidden;
}

body{
    background: var(--bg-color);
    color: var(--text-color);
}

section{
    min-height: 100vh;
    padding: 10rem 9% 2rem;
}
        
.services-container{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    gap: 2rem;
}

.services-container .services-box{
    flex: 1 1 30rem;
    background: var(--second-bg-color);
    padding: 5rem 5rem 4rem;
    border-radius: 2rem;
    text-align: center;
    border: .2rem solid var(--bg-color);
    transition: .5s ease;
    
}

/* .services-container .services-box:hover{
    border-color: var(--main-color);
    box-shadow: 0 0 2rem var(--main-color);
    transform: scale(1.02);
} */

.services-container .services-box img{
    width: 200px;
    height: 200px;
    border-radius: 50%;

}

.services-box h3{
    font-size: 2.6rem;
}

.services-box p{
    font-size: 1.6rem;
    margin: 1rem 0 3rem;
}


.btn{
    display: inline-block;
    padding: 1rem 2.8rem;
    margin:5px;
    background: var(--second-bg-color);
    border-radius: 4rem;
    box-shadow: 0 0 0.1rem var(--main-color);
    font-size: 1.6rem;
    color: var(--main-color);
    letter-spacing: .1rem;
    font-weight: 600;
    transition: .5s ease;
}

#back{
    color:white;
    font-size:10mm;
    display: inline-block;
    padding: 1rem 2.8rem;
    margin:5px;
    background: var(--second-bg-color);
    border-radius: 4rem;
    box-shadow: 0 0 0.1rem var(--main-color);
    font-size: 1.6rem;
    color: var(--main-color);
    letter-spacing: .1rem;
    font-weight: 600;
    transition: .5s ease;
}


    </style>
</head>
<body>

<a href="abminDashbord.php" id="back"> back to dash</a>

<section class="services" id="services">
   
            <!-- <h2 class="heading"><span></span></h2> -->
            <div class="services-container">
            <?php
            $query="select * from users2";
            $result=mysqli_query($conn,$query);

            while ($row = mysqli_fetch_assoc($result)){
       
            ?>
                <div class="services-box">
                    <h3><?php echo $row['UserName'];?></h3>
                    <!-- <img src="icon/profile3.png" alt=""> -->
                    <img src="clientImg/<?php echo $row['image'] ?>">
                    <!-- <h3>MEN'S</h3> -->
                    <h3><?php echo $row['id'];?></h3>
                    <!-- <h2><span>< ?php echo $row['clientContact'];?></span></h2> -->
                    <h2><span><?php echo $row['Email'];?></span></h2>
                
                    <!-- <a href="#" class="btn">View More</a> -->
                    <!-- <a href="#" class="btn">Remove</a> -->
                </div>

                <?php

                }

                ?>
            </div>
        </section>
</body>
</html>