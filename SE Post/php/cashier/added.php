<?php
	include('header.php')
?>

<html>
<body>

		<div class="wrapper">
		
    <?php
	//get form data
	$name = $_POST["customerName"];
	$password = $_POST["customerPasswrod"];
	$type=$_POST["type"];
	
	if($name=="" | $password=="")
	{
		?><div align="center"><h1><?php echo "Enter Something!!!";?></h1></div>
	<?php
	}
	else
	{	//connection
   include 'dbcon.php';
		
	//insert into db
	$sql="INSERT INTO person(Name, Password, Type) VALUES('$name','$password','$type')";
		if (mysql_query($sql,$con))
  		{
  			echo "Record of ".$name." added successfully.";
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