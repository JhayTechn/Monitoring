<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Monitoring_System</title>
	<link rel="stylesheet"  href="style.css"> 
</head>
<body>
		<img src="profile.png" style="height: 150px", style="top:10%">
		<center>
		<h1 class="pndq">BARANGAY PANDACAQUI</h1>
		<span class="pndq">BARYU KU, PAGMARAGUL KU</span>
		</center>
		</header>
		<?php  
				
					$notif = @$_GET['notif'];
					if(isset($notif))
					{
						if($notif=="exist")
						{
							$var = "<script>alert('Record Are Already Exist')</script>";
					print $var;
				?>
				<!-- <div class="alert">
					<strong>LOGIN</strong><br>
					Invalid Username or Password! <br> Try Again!
				</div> -->
				<?php  
						}
					}
				?>
				<?php  
				
					$notif = @$_GET['notif'];
					if(isset($notif))
					{
						if($notif=="save")
						{
							$var = "<script>alert('Successfully Added Record')</script>";
					print $var;
				?>
				<!-- <div class="alert">
					<strong>LOGIN</strong><br>
					Invalid Username or Password! <br> Try Again!
				</div> -->
				<?php  
						}
					}
				?>
	<form class="box" action="checklogs.php" method="post">
		<?php  
				
					$notif = @$_GET['notif'];
					if(isset($notif))
					{
						if($notif=="error")
						{
							$var = "<script>alert('Waiting for Approved By Admistration!!')</script>";
					print $var;
				?>
				<!-- <div class="alert">
					<strong>LOGIN</strong><br>
					Invalid Username or Password! <br> Try Again!
				</div> -->
				<?php  
						}
					}
				?>
		<h1>SIGN IN</h1>
		<input type="text" placeholder="Username"  name="txtuser" required="">
		<input type="password" placeholder="Password" name="txtpass" required="">
		<input type="Submit" name="btnlog" value="Sign in">
	</form>
	
	<footer class="foot1">
		<div class="foot1">
			
		</div>
	</footer>
</body>
</html>