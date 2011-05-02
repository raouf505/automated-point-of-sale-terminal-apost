<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>POINT OF SALE</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<META http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="icon" type="images/jpg"  href="images/favicon.jpg"/>
<!--<script language="javascript" type="text/javascript">

function checkfor(){
	
	var username=document.getElementById('username').value;
	var pass=document.getElementById('password').value;
	if(username =='admin' && pass=='admin')
	{
		
		window.location="php/admin.php"
	}
	else if(username=="casheir" && pass=="casheir")
	{
		window.location="php/casheir.php"
	}
	else
	{
		alert('Invalid Username or Password');
	}
		
	
}


</script>-->
</head>
<body>

			<div class="centerwrapper">
				<div class="header">

				</div>
			</div>	
			
			
			<div class="wrapper">
				<div class="container">
				
				<form action="php/check.php" method='post'>
				<table border="0" height="200px;" width="450px;">
					<tr>
					<td>Username</td>
					<td><input style="border-radius:10px;"type="text" name="username" id="username" /></td></br></br>
					</tr>
					<tr>
					<td>Password</td>
					<td><input style="border-radius:10px;"type="password" name="password" id="password" /></td></br></br>
					</tr>
					<tr>
					<td>
<input style="font-size:14pt; float:right; border-radius:10px; padding-bottom:10px; background-color:#2C5D72; border:5px solid #565656; color:#fff; height:40px; font-family: Ubuntu, sans-serif; line-height:25px;" type="submit" value="Log In" id="log" /></td>	
					</tr>	
				</table>
				</form>	
				</div>
			</div>
	
	
	
	



</body>
</html>