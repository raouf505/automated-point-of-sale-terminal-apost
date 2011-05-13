<?php
	include('header.php')
?>

<html>
<body>

		<div class="wrapper">
		<div class="search">
		<form method="post" action="deletePerson.php">
		
		<table border="0" height="200px;" width="450px;">	
					<tr>
					<td>Person Name</td>
					<td><input style="-moz-border-radius:10px;"type="text" name="personname" id="personname" /></td></br></br>
					</tr>	
					<tr>
					<td><input style="float:right; border-radius:10px;" type="submit" name="submit" id="submit" value="SEARCH"/></td>	
					</tr>		
		
		</table>
		</form>
		</div>
		</div>

	<a href="../admin.php"><img style="float:left; padding-left:10px; border:0px;" src="../../images/left.png" /></a>
</html>


</body>