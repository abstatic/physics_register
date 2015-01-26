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
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css" />
        <link rel="stylesheet" type="text/css" href="css/print.css" media="print" />
        <link rel="stylesheet" type="text/css" href="css/landing-page.css">
        <link rel="stylesheet" type="text/css" href="css/styles.css" />
     
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
        <script src="js/bootstrap.min.js"></script>
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
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top noDisplay" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="http://www.aruncomputers.in">Arun Computers</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        
                        <li>
                            <a href="index.php#home"><i class="fa fa-home"></i> Home</a>
                        </li>

                        <li>
                            <a href="index.php#contact"><i class="fa fa-phone"></i> Contact</a>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                More <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="index.php#about"><i class="fa fa-list-alt"></i> About</a></li>
                                <li><a href="index.php#services"><i class="fa fa-users"></i> Services</a></li>
                                <li><a href="index.php#physics"><i class="fa fa-cogs"></i> Physics Simplified</a></li>
                                <li><a href="print.php"><i class="fa fa-print"></i> Print Receipt</a></li>
                            </ul>
                        </li>
                        
                        <li>
                            <a href="form.php"><i class="fa fa-pencil-square-o"></i> Register</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bell-o"></i> Notices</a>
                        </li>
                        
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
    
        <?php if ($title != "Arun Computers"): ?>

        <div class="container-fluid wrapper">
            <div class="row" id="top">
                <span class="head"><?= isset($title) ? htmlspecialchars($title) : 'Arun Computers' ?></span>
            </div>
        <?php endif ?>    