<html>
    <body>
        <?php
        $con = mysqli_connect('localhost','root','');
            mysqli_select_db($con,'awt_5');
            $query = " DELETE FROM passport WHERE id='$_GET[id]'" ;
            if(mysqli_query($con, $query));
            header("refresh:0.5; url=4.php");
            echo "<br><br>
            <br><br><br><br><br><br><br><br><center><h1>Item Deleted</h1></center>"
        ?>	
    </body>
</html>