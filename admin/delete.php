 <?php 
define("myClass","_others/_includethis/");
define('connect', 'dbconnections/');
require_once(connect."dbcon.php");
require_once(myClass."_myclass.php");

	$Id=$function->escape_string($_GET['delid']);
	$script="DELETE FROM tbl_fill WHERE id='$Id'";
	$query=mysqli_query($con,$script) or die (mysqli_error());
	header("Location: edit_delete.php?notif=delete");
 ?>