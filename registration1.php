<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sign Up</title>
	<link rel="stylesheet"  href="style.css"> 
</head>
<body>
		<img src="profile.png" style="height: 150px", style="top:10%">
		<center>
		<h1 class="pndq">BARANGAY PANDACAQUI</h1>
		<span class="pndq">BARYU KU, PAGMARAGUL KU</span>
		</center>
		</header>
	<form class="box" action="signup.php" method="post">
		<?php  
				
					$notif = @$_GET['notif'];
					if(isset($notif))
					{
						if($notif=="error")
						{
							$var = "<script>alert('Record Already Exist! Try Again!')</script>";
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
		<h1>SIGN UP</h1>
		<input type="text" placeholder="Enter Fullname" name="txtfname1" required="">
		<input type="text" placeholder="Username"  name="txtuser1" required="">
		<input type="password" placeholder="Password" name="txtpass1" required="">
		<input type="Submit" value="Sign up">
		<a href="index.php" style="text-decoration: none; font-size: 15px; font-family: rockwell; color: blue; font-weight: bolder;">Login Here?</a> <br><span>if you already account!</span>
	</form>
	
	<footer class="foot1">
		<div class="foot1">
			
		</div>
	</footer>
</body>
</html>