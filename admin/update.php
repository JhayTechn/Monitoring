<?php 
			define("myClass","_others/_includethis/");
			define('connect', 'dbconnections/');
			require_once(connect."dbcon.php");
			require_once(myClass."_myclass.php");
			 date_default_timezone_set('Asia/Manila');
			$datein=date("Y-m-d h:i:s A");	
			$id=$function->escape_string(@$_GET['id']);
			$Lastname =$function->escape_string($_POST['txtlname']);
			$Middlename =$function->escape_string($_POST['txtmname']);
			$Firstname =$function->escape_string($_POST['txtfname']);
			$Gender = $function->escape_string($_POST['txtgender']);
			$Birthday = $function->escape_string($_POST['txtbday']);
			$BirthofPlace = $function->escape_string($_POST['txtbplace']);
			$Occupation = $function->escape_string($_POST['txtoccupation']);
			$Religion = $function->escape_string($_POST['txtreligion']);
			$Status = $function->escape_string($_POST['txtstatus']);
			$CellphoneNumber =$function->escape_string( $_POST['txtcnumber']);
			$District = $function->escape_string($_POST['txtdist']);
			$filename= $_FILES['txtpic']['name'];
			$imgName= date("Ymdhis-").$_FILES['txtpic']['name'];
			$imgFile= $_FILES['txtpic']['tmp_name'];

			if ($filename!="")
			{
				move_uploaded_file($imgFile, "Images/".$imgName);
			$script= "UPDATE tbl_fill SET datein= '$datein', Lastname= '$Lastname', Middlename= '$Middlename', Firstname= '$Firstname',Gender='$Gender',Birthday='$Birthday',BirthofPlace='$BirthofPlace',Status='$Status',Occupation='$Occupation',Religion='$Religion',CellphoneNumber='$CellphoneNumber',District='$District', Picture='$imgName' WHERE id='$id'";
			$query= mysqli_query ($con,$script) or die (mysqli_error());
			header("Location:edit_delete.php?notif=updated");
			}
			else
			{
				$script= "UPDATE tbl_fill SET datein= '$datein', Lastname= '$Lastname', Middlename= '$Middlename', Firstname= '$Firstname',Gender='$Gender',Birthday='$Birthday',BirthofPlace='$BirthofPlace',Status='$Status',Occupation='$Occupation',Religion='$Religion',CellphoneNumber='$CellphoneNumber',District='$District'  WHERE id='$id'";
			$query= mysqli_query ($con,$script) or die (mysqli_error());
			header("Location:edit_delete.php?notif=updated");
			}
 ?>