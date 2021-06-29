<html>
    <head>      
        </head>
    <body> 
        <h1>Passport </h1>
        <div>
            <br>
            <a href="4add.php">ADD New Passport</a>
            <br>
            <br>
            <br>
            <table>
                <tr>    
                    <th>Passport Number</th>
                    <th>First Name</th>
                    <th>Mid Name</th>
                    <th>Last Name</th>
                    <th>DOB</th>
                    <th>Nationality</th>
                    <th>Address</th>
                    <th>Geneder</th>
                    <th>Photo</th>
                    <th></th>
                </tr>
                <?PHP
                    $con = mysqli_connect('localhost','root');
                    mysqli_select_db($con,'awt_5');
                    $query = " SELECT  * FROM `passport`";
                    $queryfire = mysqli_query($con, $query);
                    while($product = mysqli_fetch_array($queryfire)){
                ?>  
                <tr>
                    <td><?php echo $product['pass_number'];  ?></td>
                    <td><?php echo $product['pass_f_name'];  ?></td>
                    <td><?php echo $product['pass_m_name'];  ?></td>
                    <td><?php echo $product['pass_l_name'];  ?></td>
                    <td><?php echo $product['pass_dob'];  ?></td>
                    <td><?php echo $product['pass_nation'];  ?></td>
                    <td><?php echo $product['pass_address'];  ?></td>
                    <td><?php echo $product['pass_gender'];  ?></td>
                    <td><img src="<?php echo $product['pass_photo'];  ?>" width="80" height="80"></td>
                    <td>
                        <a href="4update.php?id=<?php echo $product['id'];  ?>">UPDATE</a>
                        <a href="4delete.php?id=<?php echo $product['id'];  ?>">DELETE</a>

                    </td>

                </tr>
                <?php  
                 }
                 ?> 
            </table>
        </div>
       
    </body>
</html>