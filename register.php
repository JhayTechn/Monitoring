<!DOCTYPE html>
<html>
<head>
	<?php 
			define("myClass","_others/_includethis/");
			define('connect', 'dbconnections/');
			require_once(connect."dbcon.php");
			require_once(myClass."_myclass.php");
	 ?>
	<title>Registration Form</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style type="text/css">
		#vot
		{
			background-image:url(senior.png);
			background-position: center;
			background-size: cover;
			background-repeat: no-repeat;
		}
		#vot:hover
		{
			background-image: url(bgsign.jpg);
			background-position: center;
			background-size: cover;
			background-repeat: no-repeat;
		}
		.ulw
		{
			float: right;
			list-style-type: none;
			margin-top: 25px;
		}
		.ulw .liw
		{
			display: inline-block;
		}
		.ulw .liw .aw
		{
			text-decoration:none;
			color:#fff;
			padding: 5px 20px;
			border:1px solid #fff;
			transition: 0.6s ease;
		}
		.ulw .liw .aw:hover
		{
			background-color: transparent;
			color: transparent;
		}

	</style>
</head>
<body style="background-image: url(bggb.jpg); background-size: cover; background-position: center; background-repeat: no-repeat;">
	<header class="first">
		<div class="main" >
			<ul class="ulw">
				<li class="liw"><a class="aw" href="dashboard1.php">Home</a></li>
				<li class="liw"><a class="aw" href="b_official.php">Barangay Official</a></li>
				<li class="liw"><a class="aw" href="b_skoffcial.php">Barangay SK-Official</a></li>
			</ul>
		</div>
		<br>
		<br>
		<br>
		<br>
<div class="container" id="vot">
	<div class="title">Registration Form For Senior Citizen</div>
	<form method="POST" action="save_category.php" enctype="multipart/form-data">
		<?php  
				
					$notif = @$_GET['notif'];
					if(isset($notif))
					{
						if($notif=="exit")
						{
							$var = "<script>alert('Record Already Exist')</script>";
					print $var;
				?>
				<?php  
						}
					}
				?>
		<div class="user-details">
			<div class="input-box">
				<span class="details">Last Name:</span>
				<input type="text" placeholder="Enter Your Fullname" name="txtlname" required="">
			</div>
			<div class="input-box">
				<span class="details">First Name:</span>
				<input type="text" placeholder="Enter Your Fullname" name="txtfname" required="">
			</div>
			<div class="input-box">
				<span class="details">Middle Name:</span>
				<input type="text" placeholder="Enter Your Fullname" name="txtmname" required="">
			</div>
			<div class="input-box">
				<span class="details">District:</span>
				<!-- <input type="text" placeholder="Enter Your District" name="txtdist" required=""> -->
				<select type="text" name="txtdist" style="font-size: 20px; height: 40px; width: 300px;">
					<option value="">*-Select District-*</option>
					<option>NHA-Pandacaqui</option>
					<option>Hacienda-Pandacaqui</option>
					<option>District -1</option>
					<option>District -2</option>
					<option>District -3</option>
					<option>District -4</option>
					<option>District -5</option>
					<option>District -6</option>
					<option>District -7</option>
					<option>District -8</option>
					<option>District -9</option>
					<option>District -10</option>
					<option>District -11</option>
					<option>District -12</option>
					<option>District -13</option>
					<option>District -14</option>
					<option>District -15</option>
				
				</select>
			</div>
				<div class="input-box">
				<span class="details">Gender:</span>
				<!-- <input type="text" placeholder="Enter Your Gender" name="txtgender" required=""> -->
				<select name="txtgender"  style="font-size: 20px; height: 40px; width: 300px;" >
					<option value="">*-Select Gender-*</option>
					<option>Male</option>
					<option>Female</option>
					<option>LGBTQ</option>
				</select>
			</div>
				<div class="input-box">
				<span class="details">Birthday:</span>
				<input type="datetime-local" placeholder="Enter Your Birthday" name="txtbday" required="">
			</div>
			<div class="input-box">
				<span class="details">Place of Birth:</span>
				<input type="text" placeholder="Enter Your Birth of place" name="txtbplace" required="">
			</div>
			<div class="input-box">
				<span class="details">Occupation:</span>
				<input type="text" placeholder="Enter Your Occupation" name="txtoccupation" required="">
			</div>
				<div class="input-box">
				<span class="details">Religion:</span>
				<input type="text" placeholder="Enter Your Religion" name="txtreligion" required="">
			</div>
				<div class="input-box">
				<span class="details">Status:</span>
				<input type="text" placeholder="Enter Your Status" name="txtstatus" required="">
			</div>
				<div class="input-box">
				<span class="details">Cellphone Number:</span>
				<input type="text" placeholder="Enter Your Cellphone Number" name="txtcnumber" required="">
			</div>
			</div>
				<div class="input-box">
				<span class="details">Formal-Picture:</span>
				<input type="file" placeholder="" name="txtpic">
			</div>
			<br>
			<br>
			<div class="button">
				<input type="Submit" name="Register">
			</div>
		</div>
	</form>
</div>
<script type="text/javascript">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</script>
</body>
</html>