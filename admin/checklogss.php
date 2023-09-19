 <?php 
define("myClass","_others/_includethis/");
define('CON', 'dbconnections/');
require_once(CON."dbcon.php");
require_once(myClass."_myclass.php");

	date_default_timezone_set('Asia/Manila');
	$datein=date("Y-m-d h:i:s A");
	$username =$function->escape_string($_POST['txtuser1']);
	$password =$function->escape_string($_POST['txtpass1']);
	$fullname =$function->escape_string($_POST['txtfname1']);

	$script="SELECT * FROM tbl_login WHERE fullname='$fullname' OR Username='$username'";
	$query = mysqli_query($con,$script) or die(mysqli_error());
	if (mysqli_num_rows($query)>0)
	 {

		header("Location: edit_delete.php?notif=error");
	 }
	else
		{
				$script ="INSERT into tbl_login (datein, Fullname, Username, Password)
		values(
		'$datein',
		'$fullname',
		'$username',
		'$password'
		)
		";
				$query = mysqli_query($con,$script) or die(mysqli_error());
				header("Location: edit_delete.php?notif=save");

}
 ?>