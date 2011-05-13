<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>POINT OF SALE</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<META http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="icon" type="images/jpg"  href="images/favicon.jpg"/>

<script type="text/javascript" src="jquery/jquery.js"></script>
<script type="text/javascript" src="jquery/jquery.validate.js"></script>

<script type="text/javascript">
		
	$(function() {
		// highlight 
		var elements = $("input[type!='submit'], textarea, select");
		elements.focus(function(){
			$(this).parents('li').addClass('highlight');
		});
		elements.blur(function(){
			$(this).parents('li').removeClass('highlight');
		});
		
		$("#forgotpassword").click(function() {
			$("#password").removeClass("required");
			$("#login").submit();
			$("#password").addClass("required");
			return false;
		});
		
		$("#login").validate()
	});
	</script>
    
</head>
<body>

			<div class="centerwrapper">
				<div class="header">
				<a href="index.php" ><img style="padding-left:150px; margin-top:15px;" src="images/home.png" /></a>
				</div> 
			</div>	
			
			
			<div class="wrapper">
				<div class="container">
				
                
                <form action="php/check.php" method='post' id="login">	
					<ul>
						<li>
							<label for="email" style="color:#fff; font-weight:bold;"><span class="required style1">Username</span></label>
                            
                            <input style="-moz-border-radius:10px; -webkit-border-radius:10px;" type="text" name="username" id="username" class="text required" />
                            
							
						</li>
						
						<li>
							<label for="password" style="color:#fff; font-weight:bold;"><span class="required style1">Password</span></label>
                            
                           <input style="-moz-border-radius:10px; -webkit-border-radius:10px;"type="password" name="password" id="password" minlength="0" class="text required"/>
                            
						</li>

					</ul>
				
				
				<fieldset class="submit">
                    <input style="font-size:14pt; float:right; -moz-border-radius:10px;- webkit-border-radius:10px; padding-bottom:10px; background-color:#2C5D72; border:5px solid #565656; color:#fff; height:40px; font-family: Ubuntu, sans-serif; line-height:25px;" type="submit" value="Log In" id="log" />
				</fieldset>
				
				<div class="clear"></div>
				</form>

				</div>
			</div>
	
	
	
	
</body>
</html>