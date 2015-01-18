<?php 
	require("../includes/config.php");

	if (isset($_SESSION["export"]) && $_SESSION["export"] == true)
	{
		$rows = query("SELECT * FROM FORM");
		echo "<pre>";print_r($rows);echo "</pre>";
		echo count($rows[0]);
	}
	elseif (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == true)
	{
		// Get All The Candidate Details
		$details = query("SELECT * FROM FORM");
		// Render the view and passin all the data
		render("admin_view.php", ["title" => "Admin Page", "details" => $details]);
	}
	else
		render("login.php", ["title" => "Admin Login"]);
?>