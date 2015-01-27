<?php 
	require("../includes/config.php");

	// check if logged in
	if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == true) {

		// If something was submitted
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$notice_value = htmlspecialchars(trim($_POST["notice_value"]));
			$tag          = htmlspecialchars($_POST["tag"]);
			$batch        = htmlspecialchars($_POST["batch"]);
			$nmonth       = date('m',strtotime($_POST["month"]));
			$date         = htmlspecialchars($_POST["year"]."-".$nmonth."-".$_POST["day"]);

			// lets update the sql db now
			$rows = query("INSERT INTO notices (date, batch, notice, tag) VALUES(?, ?, ?, ?)",
							 $date, $batch, $notice_value, $tag);

			// we need to use redirect in order to solve double submission problem
			redirect("notice.php");
		}

		// so lets render the notice now
		$past_notice = query("SELECT * FROM `notices` ORDER BY `notices`.`date` DESC");
		render("notice_view.php", ["title" => "Notification Panel", "past_notice" => $past_notice]);
		
	}
	// else just render the notice page for students
	else {
		$past_notice = query("SELECT * FROM `notices` ORDER BY `notices`.`date` DESC");
		render("notice_student.php", ["title" => "Notices", "past_notice" => $past_notice]);
		
	}
?>