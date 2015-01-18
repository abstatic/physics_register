<div id="top">
            <span class="head"><?= isset($title) ? htmlspecialchars($title) : 'Arun Computers' ?></span>
</div>
<div class="container-fluid  col-md-12">
	<hr>
	<div class="well row">
	
		<form name="admission_form" action="form.php" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">
			<div class="form-group row">
				<label for="course" class="control-label col-md-2 col-md-offset-4">Choose The Course</label>
				<div class="col-md-2">
					<select class="form-control" name="course" id="course">
						<option value="physics coaching" selected>Physics Coaching</option>
					</select>
				</div>
			</div>

			<fieldset>
				<legend>Personal Details</legend>
				<div class="form-group row">
					<label for="fn" class="control-label col-md-2">First Name:</label>
					<div class="col-md-2" >
						<input class="form-control" name="f_name" id="fn" type="text" placeholder="First Name">
					</div>
					<label for="ln" class="control-label col-md-2">Last Name:</label>
					<div class="col-md-2">
						<input class="form-control" name="l_name" id="ln" type="text" placeholder="Last Name">
					</div>
				</div>

				<div class="form-group row">
					<label for="fr_name" class="control-label col-md-2" >Father's Name:</label>
					<div class="col-md-2">
						<input id="fr_name" type="text" class="form-control" name="fr_name" placeholder="Father's Name">
					</div>
					<label for="mr_name" class="control-label col-md-2" >Mother's Name:</label>
					<div class="col-md-2">
						<input id="mr_name" type="text" class="form-control" name="mr_name" placeholder="Mother's Name">
					</div>
					<label for="em" class="control-label col-md-2">E-Mail:</label>
					<div class="col-md-2">
						<input type="text" id="em" class="form-control" name="email" placeholder="E-Mail">
					</div>
				</div>

				<div class="form-group row">
					<label for="datepicker" class="control-label col-md-2">Date Of Birth:</label>
					<div class="col-md-2">
						<input class="form-control" type="text" name="dob" id="datepicker" placeholder="DD-MM-YYYY">
					</div>
					<label for="mb" class="control-label col-md-2">Mobile Number:</label>
					<div class="col-md-2">
						<input id="mb" type="text" class="form-control" id="mb" name="mob" placeholder="Contact Number">
					</div>
				</div>

				<div class="form-group row">
					<label class="control-label col-md-2">Gender: </label>
					
					<div class="col-md-2">
						<label for="male" class="radio-inline">
							<input type="radio" value="male" id="male" name="gender"> Male
						</label>
						
						<label for="female" class="radio-inline">
							<input type="radio" value="female" id="female" name="gender"> Female
						</label>
					</div>

					<label for="" class="control-label col-md-2">Category: </label>
					<div class="col-md-3">
						<label for="gen" class="radio-inline">
							<input type="radio" value="gen" id="gen" name="category"> General
						</label>
						
						<label for="sc" class="radio-inline">
							<input type="radio" value="sc" id="sc" name="category"> SC
						</label>

						<label for="st" class="radio-inline">
							<input type="radio" value="st" id="st" name="category"> ST
						</label>

						<label for="obc" class="radio-inline">
							<input type="radio" value="obc" id="obc" name="category"> OBC
						</label>
					</div>
				</div>

				<div class="form-group row">
					<label for="add" class="control-label col-md-2">Address:</label>
					<div class="col-md-6">
						<textarea name="address" id="add" cols="6" rows="1" class="form-control" placeholder="Enter Your Post Address"></textarea>
					</div>
				</div>

				<div class="form-group row">
					<label for="pic" class="control-label col-md-2">Upload Your Passport size photo</label>
					<div class="col-md-3">
						<input type="file" class="form-control" id="pic" name="photo" value=$_SESSION["photo"]["name"]>
						<span class="text-warning">Photosize should not exceed 500kb.</span><br>
						<span class="text-warning">Image Type: jpg</span>
					</div>
					<label for="" class="control-label col-md-1">Stream: </label>
					<div class="col-md-2">
						<label for="maths" class="radio-inline">
							<input type="radio" value="maths" id="maths" name="stream">Maths
						</label>
						<label for="science" class="radio-inline">
							<input type="radio" value="science" id="science" name="stream">Science
						</label>
					</div>
					
					<label for="marks_10" class="control-label col-md-2">Percentage/CGPA in 10th:</label>
					<div class="col-md-2">
						<input id="marks_10" type="text" class="form-control" name="marks_10" placeholder="%age or GPA">
					</div>
				</div>

				<div class="form-group row">
					<div class="col-md-2 col-md-offset-2">
						<div id="imagePreview">
							
						</div>
					</div>
				</div>

			</fieldset>
			
			<div style="text-align: center;">
				<button type="submit" name="preview" value ="true" class="btn btn-primary btn-lg">Next</button>
			</div>
		</form>
		<div id="error"></div>
	</div>
</div>
<!-- 
	style="border: 1px solid black;"
 -->