<?php
	require("../includes/config.php");

	if ($_SERVER["REQUEST_METHOD"] == "GET") 
	{
		render("print_form.php", ["title"=>"Print your receipt"]);
	}