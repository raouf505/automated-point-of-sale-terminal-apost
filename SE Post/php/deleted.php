<?php
	include('header.php')
?>

<html>
<body>

		<div class="wrapper">
		
    <?php
	//get form data
	$id=$_POST["id"];
	
	//connection
   include 'dbcon.php';
		
	//insert into db
	$sql = "DELETE FROM item WHERE Id = '$id';";
	if (mysql_query($sql,$con))
  	{
  		?><div align="center"><h1><?php echo "Record of Item ".$name." deleted successfully.";?></h1></div><?php
  	}
	else{
		echo "Sorry! Try again...";
	}
	mysql_close($con)			
	?>
		
		</div>


</html>

</body>