<?php
	require("../includes/config.php");

	// Check if we are filling the form
	if((isset($_POST["fill"]) && $_POST["fill"] == "fill") || $_SERVER["REQUEST_METHOD"] == "GET")
	{
		// unset the session first. We want a clean slate.
		session_unset();
		// Now render the view for filling up the form.
		render("form_view.php", ["title" => "Registration Form"]);
	}

	// Check if we are to print the form
	elseif (isset($_POST["print"]) && $_POST["print"] == "print") {
		 
	}

	// Incase of submitting the form
	elseif (isset($_POST["submit"]) && $_POST["submit"] == true)
	{
		// first lets get the variables straight. Don't need to sanitize as its already been done while previewing
		$course      = $_SESSION["myForm"]["course"];
		$first_name  = $_SESSION["myForm"]["f_name"];
		$last_name   = $_SESSION["myForm"]["l_name"];
		$father_name = $_SESSION["myForm"]["fr_name"];
		$mother_name = $_SESSION["myForm"]["mr_name"];
		$email       = $_SESSION["myForm"]["email"];
		$dob         = $_SESSION["myForm"]["dob"]; 
		$mob         = $_SESSION["myForm"]["mob"];
		$gender      = $_SESSION["myForm"]["gender"];
		$category    = $_SESSION["myForm"]["category"];
		$address     = $_SESSION["myForm"]["address"];
		$photo_path  = $_SESSION["photo_path"];
		$newpath     = "./images/uploaded_pics/".time().$_SESSION["photo_ext"];

		$stream      = $_SESSION["myForm"]["stream"];
		$marks_10    = $_SESSION["myForm"]["marks_10"];

		// now move the image file
		if (rename($photo_path, $newpath)) 
		{
			$_SESSION["photo_path"] = $newpath;
			/** Allright, if we have come upto here then, it means form validation was successful 
			 *	  So, lets prepare the mysql query.
			 */
			$rows = query("INSERT INTO form (course, first_name, last_name, father_name, 
					mother_name, email, dob, mob, gender, category, address, images_path, stream, marks_10)
					 VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)", $course, $first_name, $last_name, 
					 $father_name, $mother_name, $email, $dob, $mob, $gender, $category, $address, $newpath, $stream, $marks_10);

			if ($rows === false)
				apologize("DB ERROR");
			else {

				render("success_page.php", ["title" => "Print Form"]);
			}
		}// end if rename
	}// end elseif submit

	// This is the step after the first next on form. We are validating. After this we will do the final submit.
	else // Form preview state. Preview validation
	{
		$condition1 = !empty($_POST["course"])   && !empty($_POST["f_name"])  && !empty($_POST["l_name"])
    			   && !empty($_POST["fr_name"])  && !empty($_POST["mr_name"]) && !empty($_POST["email"])
		           && !empty($_POST["dob"])      && !empty($_POST["mob"])     && !empty($_POST["gender"])
		           && !empty($_POST["category"]) && !empty($_POST["address"]) && !empty($_FILES)
		           && !empty($_POST["stream"])   && !empty($_POST["marks_10"]);

		// Validate The Form. Preview state.
        // Checking if all the input was entered.
		if ($condition1)
		{
			// means all fields were submitted, so lets get the variables
			$_SESSION["myForm"]["course"]   = $course      = strtoupper(htmlspecialchars(trim($_POST["course"])));
			$_SESSION["myForm"]["f_name"]   = $first_name  = strtoupper(htmlspecialchars(trim($_POST["f_name"])));
			$_SESSION["myForm"]["l_name"]   = $last_name   = strtoupper(htmlspecialchars(trim($_POST["l_name"])));
			$_SESSION["myForm"]["fr_name"]  = $father_name = strtoupper(htmlspecialchars(trim($_POST["fr_name"])));
			$_SESSION["myForm"]["mr_name"]  = $mother_name = strtoupper(htmlspecialchars(trim($_POST["mr_name"])));
			$_SESSION["myForm"]["email"]    = $email       = htmlspecialchars(trim($_POST["email"]));
			$_SESSION["myForm"]["dob"]      = $dob         = htmlspecialchars(trim($_POST["dob"]));
			$_SESSION["myForm"]["mob"]      = $mob         = htmlspecialchars(trim($_POST["mob"]));
			$_SESSION["myForm"]["gender"]   = $gender      = strtoupper(htmlspecialchars(trim($_POST["gender"])));
			$_SESSION["myForm"]["category"] = $category    = strtoupper(htmlspecialchars(trim($_POST["category"])));
			$_SESSION["myForm"]["address"]  = $address     = strtoupper(htmlspecialchars(trim($_POST["address"])));
			$_SESSION["myForm"]["stream"]   = $stream      = strtoupper(htmlspecialchars(trim($_POST["stream"])));
			$_SESSION["myForm"]["marks_10"] = $marks_10    = htmlspecialchars(trim($_POST["marks_10"]));

			/**** Photo Handling ****/
			$file_name   = $_FILES["photo"]["name"];
			$temp_name   = $_FILES["photo"]["tmp_name"];
			$imgtype     = $_FILES["photo"]["type"];
			$size        = $_FILES["photo"]["size"];

			$ext         = GetImageExtension($imgtype);
			$imagename   = date("d-m-Y")."_".time().$ext;
			$temp_path   = "./images/temp/".$imagename;

			// this script handles the form validation. If anything goes wrong, apologize
			require("../includes/validate_admission_form.php");

			// Lets handle the preview
			if (isset($_POST["preview"]) && ($_POST["preview"] == true))
			{	
				// Store the form data into POST ? Or are we storing it into session ? 
				//$_SESSION["myForm"] = $_POST;

				// Store the photo into a TEMPORARY FOLDER
				if (move_uploaded_file($temp_name, $temp_path)) {
					img_resize($imagename);
					//$rows = query("INSERT INTO student_data(images_path) VALUES(?)", $temp_path);
				}

				// Store the photo into session
				$_SESSION["photo_path"] = $temp_path;
				$_SESSION["photo_ext"] = $ext;
				
				// Now lets render the form.
				render("form_preview.php", ["title" => "Preview Form"]);
		    }
		    else
		    {
		    	// Something out of the ordinary happened. So we quit.
		    	apologize("Oops, an unknown error occured");
		    }
		}
		// If one or more fields were left blank then this -
		else
		{
			apologize("One Or More Fields Were Left Blank");
		}
	}
?>