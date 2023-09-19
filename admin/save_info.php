 <?php 
define("myClass","_others/_includethis/");
define('CON', 'dbconnections/');
require_once(CON."dbcon.php");
require_once(myClass."_myclass.php");

	date_default_timezone_set('Asia/Manila');
	$datein=date("Y-m-d h:i:s A");
	$Lastname =$function->escape_string($_POST['txtlname']);
	$Middlename =$function->escape_string($_POST['txtmname']);
	$Firstname =$function->escape_string($_POST['txtfname']);
	$Gender =$function->escape_string($_POST['txtgender']);
	$Birthday =$function->escape_string($_POST['txtbday']);
	$BirthofPlace =$function->escape_string( $_POST['txtbplace']);
	$Religion =$function->escape_string($_POST['txtreligion']);
	$Occupation =$function->escape_string($_POST['txtoccupation']);
	$Status = $function->escape_string($_POST['txtstatus']);
	$CellphoneNumber =$function->escape_string( $_POST['txtcnumber']);
	$District = $function->escape_string($_POST['txtdist']);

	$filename= $_FILES['txtpic']['name'];
	$imgName= date("Ymdhis-").$_FILES['txtpic']['name'];
	$imgFile= $_FILES['txtpic']['tmp_name'];

	$script="SELECT * FROM tbl_fill WHERE Lastname='$Lastname'";
	$query = mysqli_query($con,$script) or die(mysqli_error());
	if (mysqli_num_rows($query)>0)
	 {
		header("Location: register.php?notif=exit");
	 }
	else
	{
		if ($filename!="")
		{
			move_uploaded_file($imgFile, "Images/".$imgName);
			$script ="INSERT into tbl_fill (datein, Lastname, Middlename, Firstname, Gender, Birthday, BirthofPlace, Status, Occupation, Religion, CellphoneNumber, District, Picture)
		values(
		'$datein',
		'$Lastname',
		'$Middlename',
		'$Firstname',
		'$Gender',
		'$Birthday',
		'$BirthofPlace',
		'$Status',
		'$Occupation',
		'$Religion',
		'$CellphoneNumber',
		'$District',
		'$imgName'
		)
		";
				$query = mysqli_query($con,$script) or die(mysqli_error());
				header("Location: dashboard1.php?notif=save");	
		}
	else
		{
				$script ="INSERT into tbl_fill (datein, Lastname, Middlename,  Firstname, Age, Gender, Birthday, BirthofPlace, Status, Occupation, Religion, CellphoneNumber, District)
		values(
		'$datein',
		'$Lastname',
		'$Middlename',
		'$Firstname',
		'$Age',
		'$Gender',
		'$Birthday',
		'$BirthofPlace',
		'$Status',
		'$Occupation',
		'$Religion',
		'$CellphoneNumber',
		'$District'
		)
		";
			$query = mysqli_query($con,$script) or die(mysqli_error());
			header("Location: dashboard1.php?notif=save");
		}
	}
 ?>