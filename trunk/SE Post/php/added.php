<?php
	include('header.php')
?>

<html>
<body>

		<div class="wrapper">
		
    <?php
	//get form data
	$name = $_POST["itemname"];
	$price = $_POST["itemprice"];
	$quantity = $_POST["itemquant"];
	$type=$_POST["type"];
	
	if($name=="" | $price=="" | $quantity=="" | $type=="")
	{
		?><div align="center"><h1><?php echo "Enter Something!!!";?></h1></div>
	<?php
	}
	else
	{	//connection
   include 'dbcon.php';
		
	//insert into db
	$sql="INSERT INTO item(Name, Price, Quantity, Type) VALUES('$name','$price','$quantity','$type')";
		if (mysql_query($sql,$con))
  		{
  			echo "Record of Item ".$name." added successfully.";
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