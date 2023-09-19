<!DOCTYPE html>
<html>
<head>
	<title>Confirmation</title>
	<link rel="stylesheet"  href="style.css"> 

</head>
<body>
<img src="profile.png" style="height: 150px", style="top:10%">
		<center>
		<h1 class="pndq">BARANGAY PANDACAQUI</h1>
		<span class="pndq">BARYU KU, PAGMARAGUL KU</span>
		</center>
		</header>
	<form class="box" action="checkinfo.php" method="post">
		<?php  
				
					$notif = @$_GET['notif'];
					if(isset($notif))
					{
						if($notif=="error")
						{
							$var = "<script>alert('Invalid Username and Password')</script>";
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
		<h1>Confirmation For Admin</h1>
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