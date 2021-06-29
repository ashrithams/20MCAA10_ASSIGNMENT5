<!DOCTYPE html>
<html>
<head>
</head>
<body>

	<form method="post">
		    	<div>Login Session </div>
		    	<table border="1">
		    		<tr>
		    			<th><label>Username</label></th>
		    			<td><input type="text" name="Username"></td>
		    		</tr><tr>
		    			<th><label>password</label></th>
		    			<td><input type="password" name="pass"></td>
		    		</tr>
		    		<tr>
		    			<td colspan="2"><input type="submit" name="save" Value="LOGIN"></td>
		    		</tr>
		    	</table>
	</form>
</body>
</html>

<?php
if (isset($_POST['save'])) {

	session_start();
		$_SESSION['name'] = $_POST['Username'];
	
	if (!isset($_SESSION['count'])) {
		$_SESSION['count'] = 1;
		echo "<b>".$_SESSION['name']."<b><br><br><br>";
		echo "This is your first visit";
	}else{
		$_SESSION['count']++;

		echo "<b>".$_SESSION['name']."<b><br><br><br>";
		echo "Your Visiting count is <b>".$_SESSION['count'];
	}
	
}
?>