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
					<td><input style="border-radius:10px;"type="text" name="customerName" id="customerName" /></td></br></br>
					</tr>
					<tr>
					<td>Password</td>
					<td><input style="border-radius:10px;"type="text" name="customerPasswrod" id="customerPasswrod" /></td></br></br>
					</tr>
					<tr>
                    <td>Type</td>
                    <td>
                    <select id="type" name="type" size="2">
					<option value="Administrator">Administrator</option>
					<option value="Cashier">Cashier</option>
					</select>

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
		<a href="../admin.php"><img style="float:left;" src="../../images/left.png" /></a>
		</div>
</html>
</body>