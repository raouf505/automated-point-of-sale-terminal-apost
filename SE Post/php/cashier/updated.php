<?php
	include('header.php')
?>

<html>
<body>

		<div class="wrapper">
		
    <?php
	//get form data
	$id=$_POST["id"];
	$name = $_POST["cashierName"];
	$pass = $_POST["cashierPassword"];
	
	
	if($name=="" | $pass=="")
	{
		?><div align="center"><h1><?php echo "Enter Something!!!";?></h1></div>
	<?php
	}
	else
	{	//connection
   include 'dbcon.php';
		
	//insert into db
	$sql = "UPDATE person SET Name = '$name', Password='$pass' WHERE Id = '$id';";
	if (mysql_query($sql,$con))
  	{
  		echo "Record of ".$name." updated successfully.";
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