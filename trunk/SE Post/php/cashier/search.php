<?php
	include('header.php')
?>

<html>
<body>

		<div class="wrapper">
		<div class="search">
		<form method="post" action="updatePerson.php">
		
		<table border="0" height="200px;" width="450px;">	
					<tr>
					<td>Name</td>
					<td><input style= "-moz-border-radius:10px; -webkit-border-radius:10px;" type="text" name="cashierName" id="cashierName" /></td></br></br>
					</tr>	
					<tr>
					<td><input style="float:right; border-radius:10px;" type="submit" name="submit" id="submit" value="SEARCH"/></td>	
					</tr>		
		
		</table>
		</form>
		</div>
		</div>
	
	<a href="../admin.php"><img style="float:left; border:0px; padding-left:10px;" src="../../images/left.png" /></a>
</html>


</body>