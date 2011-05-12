<?php
	include('header.php')
?>

<html>
<body>

		<div class="wrapper">
		<div class="add">
		<form action="added.php" method="post" enctype="multipart/form-data">
		
<table border="0" height="200px;" width="450px;">	
					<tr>
					<td>Add Name</td>
					<td><input style="-moz-border-radius:10px; -webkit-border-radius:10px;"type="text" name="custname" id="custname" /></td></br></br>
					</tr>
					<tr>
					<td>Add Password</td>
					<td><input style="-moz-border-radius:10px; -webkit-border-radius:10px;"type="text" name="custpass" id="custpass" /></td></br></br>
					</tr>
					
                    <tr>
					<td>CV</td>
					<td>
					  <input type="file" name="file" id="file">
					</td>		
					</tr>	
					<tr>
					<td><input style="float:right; -moz-border-radius:10px; -webkit-border-radius:10px;" type="submit"  value="ADD"  /></td>	
					</tr>		
		
		</table>
		</form>
		</div>
		</div>

			<div class="right">
		<a href="casheir.php"><img style="float:left;" src="../images/left.png" /></a>
		</div>
</html>
</body>