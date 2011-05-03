<?php
	include('header.php')
?>

<html>
<body>

		<div class="wrapper">
		
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
	{	
		while($row = mysql_fetch_array($result))
  		{
  			if($name==$row['Name'])
			{
				?><input type="hidden" name="price" id="price"  value=<?php echo $row['Price']; ?> />
				<input type="hidden" name="quantity" id="quantity"  value=<?php echo $row['Quantity']; ?> />
				<input type="hidden" name="type" id="type"  value=<?php echo $row['Type']; ?> /><?php
				$flag=1;
				break;
				header("Location: php/admin.php");
			}
			if($flag==1)
				break;
  		}

	}
	mysql_close($con);
	?>
		</div>


</html>

</body>