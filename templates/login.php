<?php
	// Code for login
	if (!empty($_POST))
	{
		if (!empty($_POST["username"]) && !empty($_POST["pwd"]))
		{
			if ($_POST["username"] === "om" && $_POST["pwd"] === "arun")
			{
				$_SESSION["loggedIn"] = true;
				redirect("admin.php");
			}
			else
				print(" <div class='row' style='text-align: center;'>
					   		<p class='bg-danger text-danger col-md-2 col-md-offset-5 wrong'>Invalid credentials</p>
				   		</div>
			   		  ");	
		}
		else
			print(" <div class='row' style='text-align: center;'>
				   		<p class='bg-danger text-danger col-md-2 col-md-offset-5 wrong'>Please fill out all the fields</p>
				    </div>
			      ");
	}
?>
<div class="row">
	<form action="" class="form-horizontal" method="post">
		<div class="form-group">
			<label for="username" class="control-label col-md-2 col-md-offset-3">Username</label>
			<div class="col-sm-2">
				<input class="form-control" id="username" type="text" placeholder="Username" name="username"> 
			</div>
		</div>
		<div class="form-group">
			<label for="pwd" class="control-label col-md-2 col-md-offset-3">Password</label>
			<div class="col-sm-2">
				<input class="form-control" id="pwd" type="password" placeholder="Password" name="pwd"> 
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-12" style="text-align: center;">
				<button type="submit" class="btn btn-primary btn-lg">LogIn</button>
			</div>
		</div>
	</form>

</div>