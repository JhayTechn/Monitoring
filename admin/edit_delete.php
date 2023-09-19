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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
.ulw
{
	list-style-type: none;
	margin-top: 25px;
	margin-right: 50px;
}
.ulw .liw
{
	display: inline-block;
}
.ulw .liw .aw
{
	text-decoration:none;
	color: black;
	padding: 5px 20px;
	border:1px solid black;
	transition: 0.6s ease;
}
.ulw .liw .aw:hover
{
	background-color: transparent;
	color: transparent;
}
.size
{
	overflow-y: auto;
	overflow-x: auto;
	font-family: rockwell;
	font-size: 15px;	
}

	</style>

</head>
<body style="background-image: url(bggb.jpg); background-size: cover; background-position: center;">
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
				<ul class="ulw">
				<li class="liw"><a class="aw" href="index.php" onclick="return confirmlog();">Logout</a></li>
				</ul>
				<div class="size">
	<div class="res-tab">
		<table id="example" class="display nowrap" style="width:100%" style="background-image: url(bggb.jpg); background-size: cover; background-position: center;">
			<thead>
					<th>Lastname</th>
					<th>Middlename</th>
					<th>Firstname</th>
					<th>Gender</th>
					<th>Birthday</th>
					<th>BirthofPlace</th>
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
						// $dstid=$rs['name'];
						// $scriptdst="SELECT * FROM tbl_district WHERE id ='$dstid'";
						// $querydst=mysqli_query($con,$scriptdst) or die(mysqli_error());
						// $dst = mysqli_fetch_assoc($querydst);
						// $genid=$rs['id'];
						// $scriptgen="SELECT * FROM tbl_gen WHERE id ='$dstid'";
						// $querygen=mysqli_query($con,$scriptgen) or die(mysqli_error());
						// $dst = mysqli_fetch_assoc($querygen);
						print'<tr>
									<td>'.$function->entitiesHtml($rs['Lastname']).'</td>
									<td>'.$function->entitiesHtml($rs['Middlename']).'</td>
									<td>'.$function->entitiesHtml($rs['Firstname']).'</td>
									<td>'.$function->entitiesHtml($rs['Gender']).'</td>
									<td>'.$function->entitiesHtml($rs['Birthday']).'</td>
									<td>'.$function->entitiesHtml($rs['BirthofPlace']).'</td>
									<td>'.$function->entitiesHtml($rs['Status']).'</td>
									<td>'.$function->entitiesHtml($rs['Occupation']).'</td>
									<td>'.$function->entitiesHtml($rs['Religion']).'</td>
									<td>'.$function->entitiesHtml($rs['CellphoneNumber']).'</td>
									<td>'.$function->entitiesHtml($rs['District']).'</td>
									<td><img src="Images/'.$pic.'" height="40" width="40"></td>
									<td>
											<a href="update_category.php?editid='.urlencode($rs['Id']).'">Edit</a>
									<a href="delete.php?delid='.urlencode($rs['Id']).'" onclick="return confirmdel();" >Delete</a>
									<a href="myprofile.php?editid='.urlencode($rs['Id']).'">Profile</a>
								</td>

							</tr>';
					}
				 ?>
			</tbody>
		</table>
	</div>
</div>
	<br>
	<!-- <button  class="btn btn-primary"><a href="update_category.php?editid='.urlencode($rs['Id']).'"></a>Edit</button> -->
		<a href="Register.php" class="bot" style="float: left;">Back To Registration Form</a>
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
			function confirmlog()
			{
				if(confirm("Are You Sure do you Want to logout?"))
					return true;
				return false;
			}

		</script>
<!-- 		  <script> 
      $('.mydatatable').DataTable();
      ordering: false,
      lengthMenu: [[4]],
      createdRow: function(row, data, index)
    </script>
 --></body>
</html>