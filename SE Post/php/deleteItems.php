<?php
	include('header.php')
?>

<html>
<body>

		<div class="wrapper">
		<div class="delete">
		<form>
		
		<table border="0" height="200px;" width="450px;">	
					<tr>
					<td>Name</td>
					<td><input style="border-radius:10px;"type="text" name="itemname" id="itemname" /></td></br></br>
					</tr>
					<tr>
					<td>Price</td>
					<td><input style="border-radius:10px;"type="text" name="itemprice" id="itemprice" /></td></br></br>
					</tr>
					<tr>
					<td>Quantity</td>
					<td><input style=" border-radius:10px;" type="text" name="itemquant" id="itemquant" /></td>	
					</tr>
					<tr>
					<td>Type</td>
					<td><select>
					<option value="volvo">Electronics</option>
					<option value="saab">Utilities</option>
					<option value="mercedes">Electronics</option>
					<option value="audi">Utilities</option>
					</select></td>		
					</tr>	
					<tr>
					<td><input style="float:right; border-radius:10px;" type="button"  value="Delete"  /></td>	
					</tr>		
		
		</table>
		</form>
		</div>
		</div>
		
			<div class="right">
		<a href="admin.php"><img style="float:left;" src="../images/left.png" /></a>
		</div>
		


</html>
</body>