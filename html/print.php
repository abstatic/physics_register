<?php
	require("../includes/config.php");

	if ($_SERVER["REQUEST_METHOD"] == "GET") 
	{
		render("print_form.php", ["title"=>"Print your receipt"]);
	}
	else if (isset($_POST["print"]) && $_POST["print"] == "true")
	{
		$srial = htmlspecialchars(trim($_POST["srial"]));
		
		// lets prepare the query
		$rows = query("SELECT * FROM form WHERE srial = ?", $srial);

		if ($rows == "false")
			apologize("Wrong ID");
		else
		{	
			$student = $rows[0];

			$_SESSION["myForm"]["serial"]      = $student["srial"]     ;   
			$_SESSION["myForm"]["course"]     = $student["course"]     ; 
			$_SESSION["myForm"]["f_name"]     = $student["first_name"] ; 
			$_SESSION["myForm"]["l_name"]     = $student["last_name"]  ; 
			$_SESSION["myForm"]["fr_name"]    = $student["father_name"]; 
			$_SESSION["myForm"]["mr_name"]    = $student["mother_name"]; 
			$_SESSION["myForm"]["email"]      = $student["email"]      ; 
			$_SESSION["myForm"]["dob"]        = $student["dob"]        ; 
			$_SESSION["myForm"]["mob"]        = $student["mob"]        ; 
			$_SESSION["myForm"]["gender"]     = $student["gender"]     ; 
			$_SESSION["myForm"]["category"]   = $student["category"]   ; 
			$_SESSION["myForm"]["address"]    = $student["address"]    ; 
			$_SESSION["myForm"]["stream"]     = $student["stream"]     ; 
			$_SESSION["myForm"]["marks_10"]   = $student["marks_10"]   ; 
			$_SESSION["myForm"]["class"]      = $student["class"]      ; 
			$_SESSION["myForm"]["school"]     = $student["school"]     ;

			$_SESSION["photo_path"] = $student["images_path"]; 

			render("success_page.php", ["title" => "Print Form"]); 
		}
	}
	else 
	{
		apologize("Unknown error occured");
	}
?>