
<?php
   include_once('header.php');
   
   ?>
    <?php
    include('include/connection.php');
    $id=$_SESSION['userid'];
    $query="SELECT * FROM users2 where id='$id'";
    $result=mysqli_query($con,$query);
    ?>
  <div class="uppr">
<div class="updateProfile">
   
<form action="include/updateBack.php" method="POST" enctype="multipart/form-data">

    <h1>Update Profile</h1>
    <div class="upimg">
        <?php
        $row=mysqli_fetch_assoc($result);
        if(isset($id)){
            if($row['image']){?>
           
           <img src="folderImg/registerImages/<?php echo $row['image']?>" class="imgno" alt="">

            <?php
            }else{?>

                <img src="folderImg/kerwin-elias-7-ToFEHzMNw-unsplash.jpg" class="imgno" alt="">
            <?php
            }
        }
        ?>
    </div>
    
    
    
    <div class="inside">

      
         
         <input type="text" name="upName" value="<?php echo $row['UserName']?>"><br>

         
         <input type="text" name="UpFirstName" value="<?php echo $row['FirstName']?>"><br>
        
         

         <input type="text" name="UpEmail" value="<?php echo $row['Email']?>"><br>


        
    
         <input type="hidden"  name="Old_Pass" value="<?php echo $row['Password']?>">


        <input type="password" placeholder="Old Passward" name="New_Old_Pass"><br>
        
        <input type="password" placeholder="New Passward" name="UpNewPass"><br>
        
        <input type="password" placeholder="Confirm Passward" name="UpConfirmPass"><br>
    
        <input type="file" name="UpUsImg" ><br>
         
    </div>

    <input type="submit" value="Update" name="updateProfile" class="upBtn">
   
</form>

</div>
</div>
       
        

   
   <?php
   include_once('footer.php');
   ?>
