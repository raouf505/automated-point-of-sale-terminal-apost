<?php
	include('header.php')
?>

<html>
<body>

		<div class="wrapper">
		
    <?php
	//get form data
	$id=$_POST["id"];
	$name = $_POST["itemname"];
	$price = $_POST["itemprice"];
	$quantity = $_POST["itemquant"];
	$type=$_POST["itemtype"];
	
	if($name=="" | $price=="" | $quantity=="" | $type=="")
	{
		?><div align="center"><h1><?php echo "Enter Something!!!";?></h1></div>
	<?php
	}
	else
	{	//connection
   include 'dbcon.php';
		
	//insert into db
	$sql = "UPDATE item SET Name = '$name', Price='$price', Quantity = '$quantity', Type = '$type' WHERE Id = '$id';";
	if (mysql_query($sql,$con))
  	{
  		echo "Record of Item ".$name." updated successfully.";
  	}
	else{
		echo "Sorry! Try again...";
	}
	mysql_close($con);
	}			
	?>
		
		</div>


</html>

</body>