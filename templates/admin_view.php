	<div class="row">
		<form action="admin.php" method="post">
			<div class="form-group">
				<div class="col-md-2 pull-pull-left" style="text-align: center;">
					<button type="submit" name="notice" value="true" class="btn btn-primary btn-lg">Pubish Notice</button>
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
			<th>Class</th>
			<th>Photo</th>
			<th>Name</th>
			<th>Father's Name</th>
			<th>School</th>
			<th>Category</th>
			<th>Contact</th>
			<th>Stream</th>
			<th>E-mail</th>
			<th>Address</th>
		</thead>
	<?php foreach ($details as $student): ?>
		<tbody>
			<tr>
				<td><?=$student["srial"]?></td>
				<td><?=$student["class"]?>th</td>
				<td><div class="img_prev" style="background-image: url(<?=$student["images_path"]?>)"></div></td>
				<td><?php echo $student["first_name"]." ".$student["last_name"]?></td>
				<td><?=$student["father_name"]?></td>
				<td><?=$student["school"]?></td>
				<td><?=$student["category"]?></td>
				<td><?=$student["mob"]?></td>
				<td><?=$student["stream"]?></td>
				<td><?=$student["email"]?></td>
				<td><?=$student["address"]?></td>
			</tr>
		</tbody>
	<?php endforeach?>
	</table>