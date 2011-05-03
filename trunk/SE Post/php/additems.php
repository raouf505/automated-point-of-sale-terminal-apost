<?php
	include('header.php');
?>

<html>
<body>

		<div class="wrapper">
		<div class="add">
		<form action="added.php" method="post" enctype="multipart/form-data">
		
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
					<td><select id="type" name="type">
					<option value="grocery">Grocery</option>
					<option value="utilities">Utilities</option>
					<option value="electronics">Electronics</option>
					</select></td>		
					</tr>
                    <tr>
					<td>Picture</td>
					<td>
					  <input type="file" name="file" id="file">
					</td>		
		</tr>	
					<tr>
					<td><input style="float:right; border-radius:10px;" type="submit"  value="ADD"  /></td>	
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