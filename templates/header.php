<!DOCTYPE html>

<html lang="en">
    <head>
        <!-- Some meta content  -->
        <meta charset="utf-8" />
        <meta name="viewport"              content="width=device-width, initial-scale=1" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport"              content="width=device-width, initial-scale=1" />
        <meta name="description"           content="Online site for sandeep pandey's physics coaching" />
        <meta name="keywords"              content="sandeep pandey, physics, sandeep pandey coaching, arun computers, physics coaching" />
        <meta name="author"                content="Abhishek Shrivastava" />

        <!-- Link all the css -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css" />
        <link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">
        <link rel="stylesheet" type="text/css" href="css/styles.css" />
        <link rel="stylesheet" type="text/css" href="css/print.css" media="print" type="text/css" />
        <link rel="stylesheet" type="text/css" href="css/landing-page.css">
     
        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
        
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Dynamic Title -->
        <?php if (isset($title)): ?>
            <title><?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>Arun Computers</title>
        <?php endif ?>

        <!-- Scripts -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/scripts.js"></script>
        <script src="js/jquery-ui.min.js"></script>

        <?php /* Initialization in case of registration form */?>
        <?php if (isset($title) && ($title === "Registration Form")): ?>
            <script>
             $(function() {
                $( "#datepicker" ).datepicker({
                changeMonth: true,
                changeYear: true,
                yearRange: "1947:2012",
                dateFormat: "dd-mm-yy"
                });
            });

            // function for image preview
            $(function() {
                $("#pic").on("change", function() {

                    var files = !!this.files ? this.files : [];
                    if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
 
                    if (/^image/.test( files[0].type)){ // only image file
                        var reader = new FileReader(); // instance of the FileReader
                        reader.readAsDataURL(files[0]); // read the local file
 
                        reader.onloadend = function(){ // set image data as background of div
                            $("#imagePreview").css("background-image", "url("+this.result+")");
                            $("#imagePreview").slideDown();
                        }
                    }
                });
            });
            </script>
            <script src="js/validate.min.js"></script>
        <?php endif ?>
    </head>

    <body>
        <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
        <nav id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
                <li class="sidebar-brand">
                    <a href="http://www.aruncomputers.in">Arun Computers</a>
                </li>
                <li>
                    <a href="index.php?s=home"><i class="fa fa-home"></i> Home</a>
                </li>
                <li>
                    <a href="index.php?s=about"><i class="fa fa-list-alt"></i> About</a>
                </li>
                <li>
                    <a href="index.php?s=services">Services</a>
                </li>
                <li>
                    <a href="index.php?s=physics">Physics Simplified</a>
                </li>
                <li>
                    <a href="index.php?s=contact"><i class="fa fa-phone"></i> Contact</a>
                </li>
            </ul>
        </nav>