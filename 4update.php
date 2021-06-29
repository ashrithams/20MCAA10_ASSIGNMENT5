<?php
$pass_photo = '';
    if(isset($_POST['form_submit']))
        {
        $pass_number = $_POST['pass_number'];
        $pass_f_name = $_POST['pass_f_name'];
        $pass_m_name = $_POST['pass_m_name'];
        $pass_l_name = $_POST['pass_l_name'];
        $pass_dob = $_POST['pass_dob'];
        $pass_nation = $_POST['pass_nation'];
        $pass_gender = $_POST['pass_gender'];
        $pass_address = $_POST['pass_address'];
        $pass_photo = $_POST['pass_photo'];
    $link = mysqli_connect("localhost", "root", "", "awt_5"); 
    if($link === false){ 

        die("ERROR: Could not connect. "  

                    . mysqli_connect_error()); 
    } 
            
    $sql = "UPDATE passport SET pass_number='$pass_number',pass_f_name='$pass_f_name',pass_m_name='$pass_m_name',pass_l_name='$pass_l_name',pass_dob='$pass_dob',pass_nation='$pass_nation',pass_address='$pass_address',pass_gender='$pass_gender',pass_photo='$pass_photo' WHERE id='$_GET[id]'"; 
    if(mysqli_query($link, $sql)){ 
        header("refresh:0.5; url=4.php");
        echo "Passport Updated"; 
    } else { 
        echo "ERROR: Could not able to execute $sql. "  
         . mysqli_error($link); 
    }  
    mysqli_close($link); 
  }
    ?>
<html>
    <head>
    </head>
    <body> 
        <h1>Passport Form</h1>
        &nbsp;&nbsp;<a href="4.php">Got to Passport List></a>

        <div>
            <br>
            <br>
            <?PHP
                    $con = mysqli_connect('localhost','root','');
                    mysqli_select_db($con,'awt_5');
                    $query = " SELECT  * FROM `passport` WHERE id='$_GET[id]' ";
                    $queryfire = mysqli_query($con, $query);
                    while($product = mysqli_fetch_array($queryfire)){
                ?> 
            <form method="POST">
                <input type="text"  name="pass_number" placeholder="Enter Passport Number" value="<?php echo $product['pass_number'];  ?>">
                <br>
                <input type="text"  name="pass_f_name" placeholder="Enter First Name" value="<?php echo $product['pass_f_name'];  ?>">
                <br>
                <input type="text"  name="pass_m_name" placeholder="Enter Middle Name" value="<?php echo $product['pass_m_name'];  ?>">
                <br>
                <input type="text"  name="pass_l_name" placeholder="Enter Last Name" value="<?php echo $product['pass_l_name'];  ?>">
                <br>
                <label for="dob">Enter Date of Birth</label>
                <input type="date"  name="pass_dob" id="dob" placeholder="Enter Date of Birth" value="<?php echo $product['pass_dob'];  ?>">
                <br>
                <input type="text" name="pass_nation" placeholder="Enter Nationality" value="<?php echo $product['pass_nation'];  ?>">
                <br>
                <textarea  placeholder="Enter Address" name="pass_address" value="<?php echo $product['pass_address'];  ?>"></textarea>
                <label><span>(<b>Note:</b>Need to write address each time when you update.) </span></label>
                <br>
                <br>
                <label>Select Gender</label>
                <br>
                <?php
                    $var_male =  '';
                    $var_female = '' ;
                    $var_others = '';
                    if($product['pass_gender'] == 'Male')
                    {
                        $var_male = 'checked';
                    }
                    elseif($product['pass_gender'] == 'Female')
                    {
                        $var_female = 'checked';
                    }
                    elseif($product['pass_gender'] == 'Others')
                    {
                        $var_others = 'checked';
                    }
                    

                ?>
                <input type="radio"  name="pass_gender" <?php  echo $var_male;  ?> value="Male">
                <label>Male</label>
                <input type="radio"  name="pass_gender" <?php  echo $var_female;  ?> value="Female">
                <label>Female</label>
                <input type="radio"  name="pass_gender" <?php  echo $var_others;  ?> value="Others">
                <label>Others</label>
                <br>
                <br>
                <label>Previous Photo</label>
                <br>
                <img src="<?php echo $product['pass_photo'];  ?>" width="150" height="150">
                <br>
                <br>
                <label>Select New Photo <span >(<b>Note:</b>Need to select photo each time when you update.) </span></label>
                <br>
                <input type="file"  name="pass_photo">
                <br>
                <br>
                <input type="submit" name="form_submit"  value="Update">
            </form>
            <?php  
                 }
                 ?> 
            <br>
        </div>
    </body>
</html>