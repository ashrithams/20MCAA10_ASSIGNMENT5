<!DOCTYPE html>
<html>
<head>
</head>
<body>

	<form method="post" >
		
		    	<div><u>See Flight Peference!</u> </div>
		    	<table border="1">
		    		<tr>
		    			<th>Name</th>
		    			<td><input type="text" name="first_name"></td>
		    		</tr>
		    		<tr>
		    			<th>Seat Selection</th>
		    			<td>
		    				<input type="radio" name="seat" value="Aside"> Aside 
		    				<input type="radio" name="seat" value="Window"> Window 
		    				<input type="radio" name="seat" value="Center"> Center 
		    			</td>
		    		</tr>
		    		<tr>
		    			<th>Meal Selection</th>
		    			<td>
		    				<input type="radio" name="meal" value="Veg"> Veg 
		    				<input type="radio" name="meal" value="Non-Veg"> Non-veg 
		    				<input type="radio" name="meal" value="Diabetie"> Diabetie 
		    				<input type="radio" name="meal" value="child"> Child 
		    			</td>
		    		</tr>
		    		<tr>
		    			<td colspan="2"><input type="submit" name="save" Value="SUBMIT"></td>
		    		</tr>
		    	</table>
	</form>
</body>
</html>

<?php
if (isset($_POST['save'])) {

	session_start();
	$name = $_POST['first_name'];
	$seat = $_POST['seat'];
	$meal = $_POST['meal'];
	setcookie("name",$name);
	setcookie("seat",$seat);
	setcookie("meal",$meal);
	if (isset($_COOKIE["name"]) && isset($_COOKIE["meal"]) && isset($_COOKIE["seat"])) {
		echo "Cookie has been set!.<br><br>____________________<br><br>";
		echo "Press <a href='2a.php' style='border:1px solid black;padding:4px;'>Go</a> to view Cookie..<br>";
	}else{
		echo "Cookie not set";
	}
}
?>