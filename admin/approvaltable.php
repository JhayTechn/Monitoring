 <!DOCTYPE html>
<html>
<head>
	<?php 
			define("myClass","_others/_includethis/");
			define('connect', 'dbconnections/');
			require_once(connect."dbcon.php");
			require_once(myClass."_myclass.php");
	 ?>
	<title>Table</title>
	<!-- <link rel="stylesheet" type="text/css" href="css/style1.css"> -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
	<style>
.bot
{
	border:1px solid black;
	color: black;
	float: right;
	height: 40px;
	width: 360px; 
	font-size: 25px;
	font-family: rockwell;
	font-weight: bolder;
	text-decoration: none;
	text-align: center;
}
	</style>

</head>
<body>
	<?php  
				
					$notif = @$_GET['notif'];
					if(isset($notif))
					{
						if($notif=="delete")
						{
						
				?>
				<center>
					<div class="alert">
					<strong>DELETED</strong><br>
					Successfully Record Deleted!
				</div>
				</center>
				<?php  
						}
					}
				?>
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
	<div class="res-tab">
		<table id="example" class="display nowrap" style="width:100%">
			<thead>
					<th>FullName</th>
					<th>Age</th>
					<th>Gender</th>
					<th>Birthday</th>
					<th>BirthofPlace</th>
					<th>Address</th>
					<th>Municipality</th>
					<th>Zipcode</th>
					<th>Status</th>
					<th>Occupation</th>
					<th>Religion</th>
					<th>CellphoneNumber</th>
					<th>District</th>
					<th>Picture</th>
					<th>Action</th>
			</thead>
			<tbody>
				<?php
					$script ="SELECT * FROM tbl_fill ORDER BY id ASC"; 
					$query= mysqli_query($con,$script) or  die(mysqli_error());
					while($rs=mysqli_fetch_assoc($query))
					{
						if($rs['Picture']!="")
							$pic = $rs['Picture'];
						else
							$pic = "default.png";
						print'<tr>
									<td>'.$function->entitiesHtml($rs['FullName']).'</td>
									<td>'.$function->entitiesHtml($rs['Age']).'</td>
									<td>'.$function->entitiesHtml($rs['Gender']).'</td>
									<td>'.$function->entitiesHtml($rs['Birthday']).'</td>
									<td>'.$function->entitiesHtml($rs['BirthofPlace']).'</td>
									<td>'.$function->entitiesHtml($rs['Address']).'</td>
									<td>'.$function->entitiesHtml($rs['Municipality']).'</td>
									<td>'.$function->entitiesHtml($rs['Zipcode']).'</td>
									<td>'.$function->entitiesHtml($rs['Status']).'</td>
									<td>'.$function->entitiesHtml($rs['Occupation']).'</td>
									<td>'.$function->entitiesHtml($rs['Religion']).'</td>
									<td>'.$function->entitiesHtml($rs['CellphoneNumber']).'</td>
									<td>'.$function->entitiesHtml($rs['District']).'</td>
									<td> <img src="Images/'.$pic.'" height="40" width="40"></td>
									<td>
											<a href="update_category.php?editid='.urlencode($rs['Id']).'">Approve</a>
									<a href="delete.php?delid='.urlencode($rs['Id']).'" onclick="return confirmdel();" >Delete</a>
								</td>

							</tr>';
					}
				 ?>
			</tbody>
		</table>
	</div>
<br><br><br><br><br>
<div class="res-tab">
		<table id="example" class="display nowrap" style="width:100%">
			<thead>
				    <th>Username</th>
					<th>Password</th>
					<th>Confirm Password</th>
					<th>Date in</th>
					<th>ACTION</th>
			</thead>
			<tbody>
				<?php
					$script ="SELECT * FROM tbl_logins ORDER BY id ASC"; 
					$query= mysqli_query($con,$script) or  die(mysqli_error());
					while($rs=mysqli_fetch_assoc($query))
					{
						// if($rs['Picture']!="")
						// 	$pic = $rs['Picture'];
						// else
						// 	$pic = "default.png";
						print'<tr>
									<td>'.$function->entitiesHtml($rs['datein']).'</td>
									<td>'.$function->entitiesHtml($rs['Username']).'</td>
									<td>'.$function->entitiesHtml($rs['Password']).'</td>
									<td>'.$function->entitiesHtml($rs['Fullname']).'</td>
								
									<td>
											<a href="save_login.php?editid='.urlencode($rs['id']).'">Approve</a>
											<a href="deleteapproved.php?delid='.urlencode($rs['id']).'" onclick="return confirmdel();" >Delete</a>
																	<h3 style="color:red">Pending..</h3>
								</td>

							</tr>';
					}
				 ?>
			</tbody>
		</table>
	</div>

	<br>
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>
		<script type="text/javascript">
			function confirmdel()
			{
				if(confirm("Are You Sure You Want to Delete?"))
					return true;
				return false;
			}
			$(document).ready(function() {
			    $('#example').DataTable( {
			        dom: 'Bfrtip',
			        buttons: [
			            'copy', 'csv', 'excel', 'pdf', 'print'
			        ]
			    } );
			} );
		</script>
</body>
</html>