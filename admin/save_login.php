<!DOCTYPE html>
<html>
<head>
	<?php 
	define("myClass","_others/_includethis/");
			define('connect', 'dbconnections/');
			require_once(connect."dbcon.php");
			require_once(myClass."_myclass.php");
			$id =$function->escape_string(@$_GET['editid']);
			$script= "SELECT * FROM tbl_logins WHERE id='$id'";
			$query=mysqli_query($con,$script) or die (mysqli_error());
			$rs=mysqli_fetch_assoc($query);
			date_default_timezone_set('Asia/Manila');
			$datein=date("Y-m-d h:i:s A");
			$username =$function->escape_string($rs['Username']);
			$password =$function->escape_string($rs['Password']);
			$fullname =$function->escape_string($rs['Fullname']);
	 ?>
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
	<form class="box" action="checklogss.php" method="post">
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
		<input type="text" placeholder="Enter Fullname" required="" value="<?php echo $fullname; ?>" >
		<input type="text" placeholder="Username" required="" value="<?php echo $username; ?>">
		<input type="password" placeholder="Password" required="" value="<?php echo $password; ?>">
		<input type="Submit" value="Register">
	</form>
	
	<footer class="foot1">
		<div class="foot1">
			
		</div>
	</footer>
</body>
</html>