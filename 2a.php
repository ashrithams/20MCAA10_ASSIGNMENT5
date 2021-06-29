<!DOCTYPE html>
<html>
<head>
</head>
<body>

	<form action="2a.php" method="post" >
		    	<div ><u>JSD FLIGHTS </u></div>
		    	<div>
		    		<label>Thank You for choosing JSD Flight</label>
		    	</div>
		    	<div>
		    		<label>The Cookie values are</label>
		    	</div>
		    	<div>
		    		<label>Name : <?php echo $_COOKIE["name"]; ?></label><br>
		    		<label>Seat : <?php echo $_COOKIE["seat"]; ?></label><br>
		    		<label>Food : <?php echo $_COOKIE["meal"]; ?></label><br>
		    		<label>---------------------------------------------------</label>
		    	</div>
	</form>
</body>
</html>
