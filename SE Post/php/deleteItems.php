<?php
	include('header.php')
?>

<html>
<body>

		<div class="wrapper">
		<div class="update">
		<form action="deleted.php" method="post">
		<?php
	//get form data
	$name = $_POST["itemname"];
	$flag=0;
	
	
	//connection
   	include 'dbcon.php';
	$result = mysql_query("SELECT * FROM item ORDER BY Name");	
	if($name=="")
	{
		?><div align="center"><h1><?php echo "Enter Something to Search!!!";?></h1></div>
	<?php
	}
	else
	{	?><table border="0" height="200px;" width="450px;"><?php
		while($row = mysql_fetch_array($result))
  		{
  			if($name==$row['Name'])
			{
				?>	
					<tr><input name="id" type="hidden" value=<?php echo $row['Id']; ?>>
					<td>Name</td>
					<td><label><?php echo $row['Name']; ?></label></td></br></br>
					</tr>
					<tr>
					<td>Price</td>
					<td><label><?php echo $row['Price']; ?></label></td></br></br>
					</tr>
					<tr>
					<td>Quantity</td>
					<td><label><?php echo $row['Quantity']; ?></label></td>	
					</tr>
					<tr>
					<td>Type</td>
					<td><label><?php echo $row['Type']; ?></label></td>		
					</tr>	
					<tr>
					<td><input style="float:right; border-radius:10px;" type="submit"  value="Delete"  /></td>	
					</tr>		
		
		</table><?php
				break;
				//header("Location: php/admin.php");
			}
			if($flag==1)
				break;
  		}

	}
	mysql_close($con);
	?>
		
		</form>
		</div>
		</div>
			<div class="right">
		<a href="admin.php"><img style="float:left;" src="../images/left.png" /></a>
		</div>


</html>
</body>