<!DOCTYPE html>
<html>
<head>
	<?php 
			define("myClass","_others/_includethis/");
			define('connect', 'dbconnections/');
			require_once(connect."dbcon.php");
			require_once(myClass."_myclass.php");
			$id =$function->escape_string(@$_GET['editid']);
			$script= "SELECT * FROM tbl_fill WHERE id='$id'";
			$query=mysqli_query($con,$script) or die (mysqli_error());
			$rs=mysqli_fetch_assoc($query);
			$Lastname =$function->escape_string($rs['Lastname']);
			$Middlename =$function->escape_string($rs['Middlename']);
			$Firstname =$function->escape_string($rs['Firstname']);
			$Gender =$function->escape_string( $rs['Gender']);
			$Birthday = $function->escape_string($rs['Birthday']);
			$BirthofPlace =$function->escape_string( $rs['BirthofPlace']);
			$Religion =$function->escape_string( $rs['Religion']);
			$Occupation =$function->escape_string( $rs['Occupation']);
			$Status =$function->escape_string( $rs['Status']);
			$CellphoneNumber =$function->escape_string( $rs['CellphoneNumber']);
			$District =$function->escape_string( $rs['District']);
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
				<li class="liw"><a class="aw" href="dashboard1.php" onclick="return confirmlog();">Back</a></li>
			</ul>
		</div>
		<br>
		<br>
		<br>
		<br>
<div class="container" id="vot">
	<div class="title">Registration Form For Senior Citizen</div>
	<form method="POST" action="update.php?id=<?php echo urlencode($id);?>" enctype="multipart/form-data">
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
				<input type="text"  name="txtlname" required="" value="<?php echo $Lastname; ?>">
			</div>
			<div class="input-box">
				<span class="details">First Name:</span>
				<input type="text"  name="txtfname" required="" value="<?php echo $Firstname; ?>">
			</div>
			<div class="input-box">
				<span class="details">Middle Name:</span>
				<input type="text"  name="txtmname" required="" value="<?php echo $Middlename; ?>">
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
				<input type="datetime-local"  name="txtbday" required="" value="<?php echo $Birthday; ?>">
			</div>
			<div class="input-box">
				<span class="details">Place of Birth:</span>
				<input type="text"  name="txtbplace" required="" value="<?php echo $BirthofPlace; ?>">
			</div>
			<div class="input-box">
				<span class="details">Occupation:</span>
				<input type="text"  name="txtoccupation" required="" value="<?php echo $Occupation; ?>">
			</div>
				<div class="input-box">
				<span class="details">Religion:</span>
				<input type="text"  name="txtreligion" required="" value="<?php echo $Religion; ?>">
			</div>
				<div class="input-box">
				<span class="details">Status:</span>
				<input type="text"  name="txtstatus" required="" value="<?php echo $Status; ?>">
			</div>
				<div class="input-box">
				<span class="details">Cellphone Number:</span>
				<input type="text"  name="txtcnumber" required="" value="<?php echo $CellphoneNumber; ?>">
			</div>
			</div>
				<div class="input-box">
				<span class="details">Formal-Picture:</span>
				<input type="file" placeholder="" name="txtpic" >
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