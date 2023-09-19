<!DOCTYPE html>
<html>
<head>
	<?php 
define("myClass","_others/_includethis/");
define('CON', 'dbconnections/');
require_once(CON."dbcon.php");
require_once(myClass."_myclass.php");
	 ?>
	<title>Dashboard!</title>
		<link rel="stylesheet" type="text/css" href="stylesheet.css">
		<link rel="stylesheet" type="text/css" href="konsehal/style.css">
		<style>
	.design
	{
		border:1px solid green;
		background-color: green;
		font-family: rockwell;
		font-size: 25px;
		text-align: center;
		color: white;
		height: 210px;
		width: 300px;
		margin-left:10px;
		 box-shadow: 2px 2px green, 5px 5px white;
		 border-radius: 10px;
		 transition: ease 0.5s;
	}
	.design:hover
	{
		cursor: pointer;
		background-color:red;
	}
	.design:hover
	{
		background-color: red;
	}
	.design1
	{
		border:1px solid green;
		background-color: green;
		font-family: rockwell;
		font-size: 25px;
		text-align: center;
		color: white;
		height: 210px;
		width: 300px;
		 box-shadow: 2px 2px green, 5px 5px white;
		 border-radius: 10px;
		 transition: ease 0.5s;
	}
	.design1:hover
	{
		cursor: pointer;
		background-color: red;
	}
	.design1:hover
	{
		background-color: red;
	}
</style>
</head>
<body>
		<?php  
				
					$notif = @$_GET['notif'];
					if(isset($notif))
					{
						if($notif=="save")
						{
							$var = "<script>alert('Successfully Added')</script>";
					print $var;
				?>
				<?php  
						}
					}
				?>
		
	<header class="first">
		<div class="main">
			<ul class="ulw">
				<li class="liw"><a class="aw" href="dashboard.php">Home</a></li>
				<li class="liw"><a class="aw" href="b_official.php">Barangay Official</a></li>
				<li class="liw"><a class="aw" href="b_skoffcial.php">Barangay SK-Official</a></li>
				<li class="liw"><a class="aw" href="index.php" onclick="return confirmlog();">Logout</a></li>
			</ul>
		</div>
		<br><br><br><br>
		<center>
			<div class="design">
				<h2 style="color: white;">Number Of Senior Citizen</h2>
				<?php 
					$script ="SELECT id FROM tbl_fill ORDER BY id"; 
					$query= mysqli_query($con,$script) or  die(mysqli_error());
					$row=mysqli_num_rows($query);
					echo'<h1>'.$row.'</h1>';
				 ?>
			</div>
			<br>
			<br>
			<div class="design1">
				<h2 style="color: white;">Number Of Signing Account</h2>
				<?php 
					$script ="SELECT * FROM tbl_login ORDER BY id ASC"; 
					$query= mysqli_query($con,$script) or  die(mysqli_error());
					$row=mysqli_num_rows($query);
					echo'<h1>'.$row.'</h1>';
				 ?>
			</div>	
			</center>	
	</header>
	<center>
		<footer class="bottom-foot">
			<span class="bot-text"><a href="https://www.facebook.com/skpandacaqui2018" class="bot-text">Facebook</a></span>
			<span class="bot-text"><a href="#" class="bot-text">Instagram</a></span>
			<span class="bot-text"><a href="#" class="bot-text">Twitter</a></span>
			<span class="bot-text"><a href="#" class="bot-text">Gmail</a></span><br> <br>
			<span style="color: white;">&copy; -!AceToUtak! Creating web design-</span>
		</footer>
	</center>
	<script>
		function confirmlog()
			{
				if(confirm("Are You Sure do you Want to logout?"))
					return true;
				return false;
			}
	</script>
</body>
</html>