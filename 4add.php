<?php
    if(isset($_POST['form_submit']))
        {
        $pass_number = $_POST['pass_number'];
        $pass_f_name = $_POST['pass_f_name'];
        $pass_m_name = $_POST['pass_m_name'];
        $pass_l_name = $_POST['pass_l_name'];
        $pass_dob = $_POST['pass_dob'];
        $pass_nation = $_POST['pass_nation'];
        $pass_gender = $_POST['pass_gender'];
        $pass_photo = $_POST['pass_photo'];
        $pass_address = $_POST['pass_address'];
    $link = mysqli_connect("localhost", "root", "", "awt_5"); 
    if($link === false){ 

        die("ERROR: Could not connect. "  

                    . mysqli_connect_error()); 
    } 
            
    $sql = "INSERT INTO passport(pass_number,pass_f_name,pass_m_name,pass_l_name,pass_dob,pass_nation,pass_gender,pass_photo,pass_address) VALUES('$pass_number','$pass_f_name','$pass_m_name','$pass_l_name','$pass_dob','$pass_nation','$pass_gender','$pass_photo','$pass_address')"; 
    if(mysqli_query($link, $sql)){ 
        echo "Thank your for registering"; 
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
        &nbsp;&nbsp;<a href="4.php">Got to Passport List</a>

        <div >
            <br>
            <br>
            
            <form method="POST">
                <input type="text" name="pass_number" placeholder="Enter Passport Number">
                <br>
                <input type="text"  name="pass_f_name" placeholder="Enter First Name">
                <br>
                <input type="text" name="pass_m_name" placeholder="Enter Middle Name">
                <br>
                <input type="text"  name="pass_l_name" placeholder="Enter Last Name">
                <br>
                <label for="dob">Enter Date of Birth</label>
                <input type="date"  name="pass_dob" id="dob" placeholder="Enter Date of bort">
                <br>
                <input type="text"  name="pass_nation" placeholder="Enter Nationality">
                <br>
                <textarea  placeholder="Enter Address" name="pass_address"></textarea>
                <br>
                <label>Select Gender</label>
                <br>
                <input type="radio"  name="pass_gender" value="Male">
                <label>Male</label>
                <input type="radio"  name="pass_gender" value="Female">
                <label>Female</label>
                <input type="radio"  name="pass_gender" value="Others">
                <label>Others</label>
                <br>
                <br>
                <label>Upload Photo </label>
                <br>
                <input type="file"  name="pass_photo">
                <br>
                <br>
                <input type="submit" name="form_submit" >
            </form>
            <br>
        </div>
       
    </body>
</htssml>