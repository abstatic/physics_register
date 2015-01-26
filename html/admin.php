<?php 
	require("../includes/config.php");


	// or are we trying to log out ?
	if (isset($_POST["logout"]) && $_POST["logout"] == true) {
		// logout the user
		logout();
		redirect("admin.php");
	}

	// Are we logged in ?
	if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == true)
	{
		// Get All The Candidate Details
		$details = query("SELECT * FROM form");
		
		// Render the view and passin all the data
		render("admin_view.php", ["title" => "Admin Page", "details" => $details]);
	}
	// Or are we trying to login ?
	elseif (isset($_POST["login"]) && $_POST["login"] == true) {
		// yes we are.
		if (!empty($_POST["username"]) && !empty($_POST["pwd"]))
		{
			if ($_POST["username"] === "om" && $_POST["pwd"] === "arun")
			{
				$_SESSION["loggedIn"] = true;
				redirect("admin.php");
			}
			else
				apologize("Invalid Credentials");
		}
		else
			apologize("Please fill out all the fields.");
	}
	else
		render("login.php", ["title" => "Admin Login"]);

?>