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
	$path="C:'\'wamp/www/automated-point-of-sale-terminal-apost/trunk/SE Post/php/upload/" . $_FILES["file"]["name"];
	//$path="";
	if ((($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/pjpeg")) ){
		if ($_FILES["file"]["error"] > 0){
    		echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    		}
  		else{
    		//echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    		//echo "Type: " . $_FILES["file"]["type"] . "<br />";
    		//echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    		//echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

 	   		if (file_exists("upload/" . $_FILES["file"]["name"])){
      			echo $_FILES["file"]["name"] . " already exists. ";
      		}
    		else{
      			move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);
	    	//echo "Stored in: " . "C:/wamp/www/automated-point-of-sale-terminal-apost/trunk/SE Post/php/upload/" . $_FILES["file"]["name"];
			
      		}
    	}
  	}
	else{
	  echo "Invalid file";
  	}
	
	if($name=="" | $price=="" | $quantity=="" | $type=="" | $path="")
	{
		?><div align="center"><h1><?php echo "Enter Something!!!";?></h1></div>
	<?php
	}
	else
	{	//connection
   include 'dbcon.php';
		
	//insert into db
	$sql="INSERT INTO item(Name, Price, Quantity, Type,pathOfPicture) VALUES('$name','$price','$quantity','$type','$path')";
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