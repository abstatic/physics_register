<?php 
	require("../includes/config.php");

	if ($_SERVER["REQUEST_METHOD"] == "GET") 
	{
		// Are we logged in ?
		if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == true)
		{
			// Get All The Candidate Details
			$details = query("SELECT * FROM form");
	
			// Render the view and passin all the data
			render("admin_view.php", ["title" => "Admin Page", "details" => $details]);
		}
		// Or are we trying to login ?
		else
			render("login.php", ["title" => "Admin Login"]);

	}
	// if something was submitted...
	elseif ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
		// or are we trying to log out ?
		if (isset($_POST["logout"]) && $_POST["logout"] == true) {
			// logout the user
			logout();
			redirect("admin.php");
		}

		// or are we tryinbg to publish a notice
		elseif (isset($_POST["notice"]) && $_POST["notice"] == true) {

			$past_notice = query("SELECT * FROM notices");
			render("notice_view.php", ["title" => "Notices", "past_notice" => $past_notice]);
		}

		// or are we trying to login
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
			apologize("Unknown error occured");
	}
?>