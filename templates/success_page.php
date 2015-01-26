
	<hr>
	<div class="row">
		<div class="col-md-8 col-xs-8 col-md-offset-2 col-xs-offset-2">
		<div style="text-align: center;" class="text-danger noDisplay">
		Bring this print receipt to avail discount !
	</div>
			<table class="table table-bordered">
				<tr>
					<td style="text-align: center;">
						<div id="img_prev">
							<img class="img-responsive" src=<?=$_SESSION["photo_path"]?> alt="Candidate Photo" style="height: 100%;">
						</div>
					</td>
					<td colspan="3" class="table_head">
						<span class="text-muted" style="font-weight: normal;" class="noDisplay">
							Note down the serial number. You can print the receipt using it.
						</span>
						<br>
						Unique Serial Number- <?=$_SESSION["myForm"]["serial"]?>
					</td>
				</tr>
				<tr>
					<td class="table_head">Course Applied For: </td>
					<td><?=$_SESSION["myForm"]["course"]?></td>
					<td class="table_head">Category</td>
					<td><?=$_SESSION["myForm"]["category"]?></td>
				</tr>
				<tr>
					<td class="table_head">First Name: </td>
					<td><?=$_SESSION["myForm"]["f_name"]?></td>
					<td class="table_head">Last Name: </td>
					<td><?=$_SESSION["myForm"]["l_name"]?></td>
				</tr>
				<tr>
					<td class="table_head">Father's Name</td>
					<td><?=$_SESSION["myForm"]["fr_name"]?></td>
					<td class="table_head">Mother's Name</td>
					<td><?=$_SESSION["myForm"]["mr_name"]?></td>
				</tr>
				<tr>
					<td class="table_head">E-mail</td>
					<td><?=$_SESSION["myForm"]["email"]?></td>
					<td class="table_head">Gender</td>
					<td><?=$_SESSION["myForm"]["gender"]?></td> 
				</tr>
				<tr>
					<td class="table_head">Mobile: </td>
					<td><?=$_SESSION["myForm"]["mob"]?></td>
					<td class="table_head">DOB</td>
					<td><?=$_SESSION["myForm"]["dob"]?></td>
				</tr>
				<tr>
					<td class="table_head">Class</td>
					<td><?=$_SESSION["myForm"]["class"]?>th</td>
					<td class="table_head">Stream</td>
					<td><?=$_SESSION["myForm"]["stream"]?></td>
				</tr>
				<tr>
					<td class="table_head">School</td>
					<td><?=$_SESSION["myForm"]["school"]?></td>
					<td class="table_head">10th Marks</td>
					<td><?php printf("%.1f", $_SESSION["myForm"]["marks_10"]);?></td>
				</tr>
				<tr>
					<td class="table_head">Address</td>
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

<?php session_destroy();?>