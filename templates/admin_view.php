<?php
	if (!empty($_POST))
	{
		if (isset($_POST["logout"]) && $_POST["logout"] == true)
		{
			session_destroy();
			redirect("admin.php");
		}
		else if (isset($_POST["export"]) && $_POST["export"] == true)
		{
			$_SESSION["export"]	= true;
			redirect("admin.php");
		}
	}
?>
<div class="row">
	<form action="" method="post">
		<div class="form-group">
			<div class="col-md-1 pull-left" style="text-align: center">
				<button type="submit" name="export" value="true" class="btn btn-primary btn-lg">Export To CSV</button>
			</div>
			<div class="col-md-1 pull-right" style="text-align: center;">
				<button type="submit" name="logout" value="true" class="btn btn-primary btn-lg">Logout</button>
			</div>
		</div>
	</form>
</div>
<table class="table table-hover">
	<thead>
		<th>Serial</th>
		<th>Course</th>
		<th>Photo</th>
		<th>Name</th>
		<th>Father's Name</th>
		<th>Gender</th>
		<th>Category</th>
		<th>Contact</th>
		<th>DOB</th>
		<th>E-mail</th>
		<th>Address</th>
	</thead>
<?php foreach ($details as $student): ?>
	<tbody>
		<tr>
			<td><?=$student["serial"]?></td>
			<td><?=$student["course"]?></td>
			<td><div class="img_prev" style="background-image: url(<?=$student["images_path"]?>)"></div></td>
			<td><?php echo $student["first_name"]." ".$student["last_name"]?></td>
			<td><?=$student["father_name"]?></td>
			<td><?=$student["gender"]?></td>
			<td><?=$student["category"]?></td>
			<td><?=$student["mob"]?></td>
			<td><?=$student["dob"]?></td>
			<td><?=$student["email"]?></td>
			<td><?=$student["address"]?></td>
		</tr>
	</tbody>
<?php endforeach?>
</table>