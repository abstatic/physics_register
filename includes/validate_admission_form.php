<?php
			# validation for first name
			if (!ctype_alpha($first_name))
				apologize("First Name should only contain alphabets");
			if (strlen($first_name) < 3 OR strlen($first_name) > 20)
				apologize("Length Of First Name should be between 3 & 20");

			# validation for last name
			if (!ctype_alpha($last_name))
				apologize("Last Name should only contain alphabets");
			if (strlen($last_name) < 3 OR strlen($last_name) > 20)
				apologize("Length Of Last Name Should be between 3 & 20");

			# validation for fathers name
			if (!ctype_alpha(str_replace(" ", "", $father_name)))
				apologize("Father Name should only contain alphabets");
			if (strlen($father_name) < 3 OR strlen($father_name) > 40)
				apologize("Length Of Father Name Should be between 3 & 40");

			# validation for mothers name
			if (!ctype_alpha(str_replace(" ", "", $mother_name)))
				apologize("Mother Name should only contain alphabets");
			if (strlen($mother_name) < 3 OR strlen($mother_name) > 40)
				apologize("Length Of Mother Name Should be between 3 & 40");

			# validation for email
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
            	apologize("Invalid E-mail");
        
			# validation for dob
			###### PENDING #########

        	# validation for photo
        	// Check for maximum size error
        	if ($_FILES["photo"]["error"] != 0)
        		apologize("Error in uploading file. Use a smaller size.");
        	if ($ext != '.jpg' && $ext != '.png')
        		apologize("Only .jpg and .png is allowed");
        	if ($size > 500000)
        		apologize("Maximum upload file size is 500kb");

			# validation for mob
			if (!ctype_digit($mob) OR strlen($mob) != 10) 
            	apologize("Ivalid Mobile Number");

	
			# validation for address
			$aValid = array('-', '\\', '/', '.', ',' , '(', ')', ' ');
			if (!ctype_alnum(str_replace($aValid, '', $address)))
				apologize("Invalid Address, only - / \\ . , ( ) are allowed.");

			# validation for 10th marks
			if ($marks_10 < 0.0 && $_marks > 100.00)
				apologize("Enter marks in correct form.");
			// print($course."<br>");
			// print($first_name."<br>");
			// print($last_name."<br>");	
			// print($father_name."<br>");
			// print($mother_name."<br>");
			// print($email."<br>");
			// print($dob."<br>");
			// print($mob."<br>");
			// print($gender."<br>");
			// print($category."<br>");
			// print($address."<br>");
			// print_r($_POST);

			// //For debugging, Image Details
	  //   	print("File Name: ".$file_name."<br>");
	  //   	print("Temp Name: ".$temp_name."<br>");
	  //   	print("Image Type: ".$imgtype."<br>");
	  //   	print("Extension: ".$ext."<br>");
	  //   	print("Image Name: ".$imagename."<br>");
	  //   	print("Target Path: ".$target_path."<br>");
?>