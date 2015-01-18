<div class="row">
	<div class="col-md-8 col-xs-8 col-md-offset-2 col-xs-offset-2" style="border: 1px solid black;">
		<table class="table table-bordered table-striped">
			<tr>
				<td colspan="4" style="text-align: center;">
					<div id="img_prev">
						<img class="img-responsive" src=<?=$_SESSION["photo_path"]?> alt="Candidate Photo" style="height: 100%;">
					</div>
				</td>
			</tr>
			<tr>
				<td>Course Applied For: </td>
				<td><?=$_SESSION["myForm"]["course"]?></td>
				<td>Category</td>
				<td><?=$_SESSION["myForm"]["category"]?></td>
			</tr>
			<tr>
				<td>First Name: </td>
				<td><?=$_SESSION["myForm"]["f_name"]?></td>
				<td>Last Name: </td>
				<td><?=$_SESSION["myForm"]["l_name"]?></td>
			</tr>
			<tr>
				<td>Father's Name</td>
				<td><?=$_SESSION["myForm"]["fr_name"]?></td>
				<td>Mother's Name</td>
				<td><?=$_SESSION["myForm"]["mr_name"]?></td>
			</tr>
			<tr>
				<td>E-mail</td>
				<td><?=$_SESSION["myForm"]["email"]?></td>
				<td>Gender</td>
				<td><?=$_SESSION["myForm"]["gender"]?></td> 
			</tr>
			<tr>
				<td>Mobile: </td>
				<td><?=$_SESSION["myForm"]["mob"]?></td>
				<td>DOB</td>
				<td><?=$_SESSION["myForm"]["dob"]?></td>
				
			</tr>
			<tr>
				
			</tr>
			<tr>
				<td>Address</td>
				<td colspan="3"><?=$_SESSION["myForm"]["address"]?></td>
			</tr>
			<tr>
				<td colspan="4" style="text-align: center">
					<form>
						<input id="noDisplay" type="button" class="btn btn-lg btn-success" value="Print" onclick="window.print()">
					</form>
				</td>
			</tr>
		</table>
	</div>
</div>
<?php session_unset()?>