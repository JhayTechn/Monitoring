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
			$Occupation =$function->escape_string( $rs['Occupation']);
			$Religion =$function->escape_string( $rs['Religion']);
			$Status =$function->escape_string( $rs['Status']);
			$CellphoneNumber =$function->escape_string( $rs['CellphoneNumber']);
			$District =$function->escape_string( $rs['District']);
		 ?>
	<title>Updating Form</title>
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
	</style>
</head>
<body style="background-image: url(bggb.jpg); background-size: cover; background-position: center; background-repeat: no-repeat;">
<div class="container" id="vot">
	<div class="title"> <center>MY PROFILE INFORMATION<br>--THIS PROFILE IS VIEWING ONLY--</center>
	</div>
	<form method="POST" action="update.php?id=<?php echo urlencode($id);?>" enctype="multipart/form-data">
	 <?php  
				
		 $notif = @$_GET['notif'];
					if(isset($notif))
				 {
						if($notif=="updated")
					{
							$var = "<script>alert('Successfully Updated')</script>";
					print $var;
		?>
		<?php  
						}
					}
		?>

		<?php 
					$script ="SELECT * FROM tbl_fill WHERE Id='$id'"; 
					$query= mysqli_query($con,$script) or  die(mysqli_error());
					while($rs=mysqli_fetch_assoc($query))
					{
						if($rs['Picture']!="")
							$pic = $rs['Picture'];
						else
							$pic = "default.png";
						print'<center><tr>

									<td><img src="Images/'.$pic.'" height="150" width="200"></td><br>
									Formal-Profile Picture
							</tr></center>';
					}
				 ?>
		<div class="user-details">
			<div class="input-box">
				<span class="details">District:</span>
				<input type="text" disabled="" name="txtdist" required="" value="<?php echo $District; ?>">
			</div>
				<div class="input-box">
				<span class="details">Fullname:</span>
				<input type="text" disabled=""  name="txtfname" required="" value="<?php echo $FullName; ?>">
			</div>
				<div class="input-box">
				<span class="details">Gender:</span>
				<input type="text" disabled=""  name="txtgender" required="" value="<?php echo $Gender; ?>">
			</div>
				<div class="input-box">
				<span class="details">Birthday:</span>
				<input type="text" disabled=""  name="txtbday" required="" value="<?php echo $Birthday; ?>">
			</div>
				<div class="input-box">
				<span class="details">Place Of Birth:</span>
				<input type="text" disabled="" name="txtbplace" required="" value="<?php echo $BirthofPlace; ?>">
			</div>
				<div class="input-box">
				<span class="details">Occupation:</span>
				<input type="text" disabled=""  name="txtoccupation" required="" value="<?php echo $Occupation; ?>">
			</div>
				<div class="input-box">
				<span class="details">Religion:</span>
				<input type="text" disabled=""  name="txtreligion" required="" value="<?php echo $Religion; ?>">
			</div>
				<div class="input-box">
				<span class="details">Status:</span>
				<input type="text" disabled=""  name="txtstatus" required="" value="<?php echo $Status; ?>">
			</div>
				<div class="input-box">
				<span class="details">Cellphone Number:</span>
				<input type="number" disabled="" maxlength="11" name="txtcnumber" required="" value="<?php echo $CellphoneNumber; ?>">
			</div><br><br><br>
			<div><center> Data Privacy Act of 2012</center></div>
		<br>
		<br>
	</form>
</body>
</html>