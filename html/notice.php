<?php 
	require("../includes/config.php");

	// check if logged in
	if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == true) {

		// If something was submitted
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$notice_value = htmlspecialchars(trim($_POST["notice_value"]));
			$date         = htmlspecialchars($_POST["day"].", ".$_POST["month"].", ".$_POST["year"]);
			$tag          = htmlspecialchars($_POST["tag"]);

			// lets update the sql db now
			$rows = query("INSERT INTO notices (date, notice, tag) VALUES(?, ?, ?)", $date, $notice_value, $tag);

			// we need to use redirect in order to solve double submission problem
			redirect("notice.php");
		}

		// so lets render the notice now
		$past_notice = query("SELECT * FROM `notices` ORDER BY `notices`.`date` DESC");
		render("notice_view.php", ["title" => "Notices", "past_notice" => $past_notice]);
		
	}
	// else just render the notice page for students
	else {
		$past_notice = query("SELECT * FROM notices");
		render("notice_student.php", ["title" => "Notices", "past_notice" => $past_notice]);
		
	}
?>