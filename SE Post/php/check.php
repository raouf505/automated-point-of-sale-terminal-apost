<?php
	include 'dbcon.php';
  	$username=$_POST["username"];
	$pass=$_POST["password"];
	$result = mysql_query("SELECT * FROM person ORDER BY Name");
	if($username=="" | $pass=="")
	{
		?><div align="center"><h1><?php echo "Enter Something!!!";?></h1></div>
	<?php
	}
	else
	{	
		while($row = mysql_fetch_array($result))
  		{
  			if($username==$row['Name'] & $pass==$row['Password'])
			{
				header("Location: admin.php");
			}
  		}
	}
	mysql_close($con);

		
?>