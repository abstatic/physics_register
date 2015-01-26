
	<hr>
	<div class="well row">
	
		<form name="admission_form" action="form.php" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">
			<div class="form-group row">
				<label for="course" class="control-label col-md-2 col-md-offset-4">Choose The Course</label>
				<div class="col-md-2">
					<select class="form-control" name="course" id="course" disabled>
						<option value="physics coaching">Physics Coaching</option>
					</select>
				</div>
			</div>

			<fieldset disabled>
				<legend>Personal Details</legend>
				<div class="form-group row">
					<label for="fn" class="control-label col-md-2">First Name:</label>
					<div class="col-md-2" >
						<input class="form-control" name="f_name" id="fn" type="text" value=<?=$_SESSION["myForm"]["f_name"]?>>
					</div>
					<label for="ln" class="control-label col-md-2">Last Name:</label>
					<div class="col-md-2">
						<input class="form-control" name="l_name" id="ln" type="text" value=<?=$_SESSION["myForm"]["l_name"]?>>
					</div>
				</div>

				<div class="form-group row">
					<label for="fr_name" class="control-label col-md-2" >Father's Name:</label>
					<div class="col-md-2">
						<input id="fr_name" type="text" class="form-control" name="fr_name" value=<?php echo '"'.$_SESSION["myForm"]["fr_name"].'"';?>>
					</div>
					<label for="mr_name" class="control-label col-md-2" >Mother's Name:</label>
					<div class="col-md-2">
						<input id="mr_name" type="text" class="form-control" name="mr_name" value=<?php echo '"'.$_SESSION["myForm"]["mr_name"].'"';?>>
					</div>
					<label for="em" class="control-label col-md-2">E-Mail:</label>
					<div class="col-md-2">
						<input type="text" id="em" class="form-control" name="email" value=<?=$_SESSION["myForm"]["email"]?>>
					</div>
				</div>

				<div class="form-group row">
					<label for="datepicker" class="control-label col-md-2">Date Of Birth:</label>
					<div class="col-md-2">
						<input class="form-control" type="text" name="dob" id="datepicker" value=<?=$_SESSION["myForm"]["dob"]?>>
					</div>
					<label for="mb" class="control-label col-md-2">Mobile Number:</label>
					<div class="col-md-2">
						<input id="mb" type="text" class="form-control" id="mb" name="mob" value=<?=$_SESSION["myForm"]["mob"]?>>
					</div>
				</div>

				<div class="form-group row">
					<label class="control-label col-md-2">Gender: </label>
					
					<div class="col-md-2">
						<label for="male" class="radio-inline">
							<input type="radio" value="MALE" id="male" name="gender" <?php if($_SESSION["myForm"]["gender"] === "MALE") echo "checked"?>> Male
						</label>
						
						<label for="female" class="radio-inline">
							<input type="radio" value="FEMALE" id="female" name="gender" <?php if($_SESSION["myForm"]["gender"] === "FEMALE") echo "checked"?>> Female
						</label>
					</div>

					<label for="" class="control-label col-md-2">Category: </label>
					<div class="col-md-3">
						<label for="gen" class="radio-inline">
							<input type="radio" value="GEN" id="gen" name="category" <?php if($_SESSION["myForm"]["category"] === "GEN") echo "checked"?>> General
						</label>
						
						<label for="sc" class="radio-inline">
							<input type="radio" value="SC" id="sc" name="category" <?php if($_SESSION["myForm"]["category"] === "SC") echo "checked"?>> SC
						</label>

						<label for="st" class="radio-inline">
							<input type="radio" value="ST" id="st" name="category" <?php if($_SESSION["myForm"]["category"] === "ST") echo "checked"?>> ST
						</label>

						<label for="obc" class="radio-inline">
							<input type="radio" value="OBC" id="obc" name="category" <?php if($_SESSION["myForm"]["category"] === "OBC") echo "checked"?>> OBC
						</label>
					</div>
					<label for="" class="control-label col-md-1">Stream: </label>
					<div class="col-md-2">
						<label for="maths" class="radio-inline">
							<input type="radio" value="MATHS" id="maths" name="stream" <?php if($_SESSION["myForm"]["stream"] == "MATHS") echo "checked"?>>Maths
						</label>
						<label for="science" class="radio-inline">
							<input type="radio" value="SCIENCE" id="science" name="stream" <?php if($_SESSION["myForm"]["stream"] == "SCIENCE") echo "checked"?>>Science
						</label>
					</div>
				</div>

				<div class="form-group row">
					<label for="add" class="control-label col-md-2">Address:</label>
					<div class="col-md-6">
						<textarea name="address" id="add" cols="6" rows="1" class="form-control"><?=$_SESSION["myForm"]["address"]?></textarea>
					</div>
					<label for="school" class="control-label col-md-2">School:</label>
					<div class="col-md-2">
						<input class="form-control" name="school" id="school" type="text" value=<?php echo '"'.$_SESSION["myForm"]["school"].'"';?>>
					</div>
				</div>

				<div class="form-group row">
					<label for="pic" class="control-label col-md-2">Passport Size Photo</label>
					<div class="img-thumbnail img_prev">
						<img class="img-responsive img-rounded" src=<?=$_SESSION["photo_path"]?> style="height: 100%;">
					</div>
				</div>

				<div class="form-group row">
					<label for="" class="control-label col-md-1">Class: </label>
					<div class="col-md-2">
						<label for="11th" class="radio-inline">
							<input type="radio" value="11" id="11th" name="class" <?php if($_SESSION["myForm"]["class"] == "11") echo "checked"?>>11th
						</label>
						<label for="12th" class="radio-inline">
							<input type="radio" value="12" id="12th" name="class" <?php if($_SESSION["myForm"]["class"] == "12") echo "checked"?>>12th
						</label>
					</div>
					
					<label for="marks_10" class="control-label col-md-2">Percentage/CGPA in 10th:</label>
					<div class="col-md-2">
						<input id="marks_10" type="text" class="form-control" name="marks_10" value=<?=$_SESSION["myForm"]["marks_10"]?>>
					</div>
				</div>
			</fieldset>

			<div style="text-align: center;">
				<button type="submit" name="submit" value ="true" class="btn btn-success btn-lg">Submit</button>
			</div>
		</form>
		<div id="error"></div>
	</div>
