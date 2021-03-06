</div>
    <!-- Footer -->
    <footer class="footer noDisplay">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="copyright text-muted small">
                    	Copyright &copy; <a href="http://www.aruncomputers.in">Arun Computers 2014. All Rights Reserved</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
	
    <script>
    	// Scrolls to the selected menu item on the page
	    $(function() {
	        $('a[href*=#]:not([href=#])').click(function() {
	            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

	                var target = $(this.hash);
	                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
	                if (target.length) {
	                    $('html,body').animate({
	                        scrollTop: target.offset().top
	                    }, 1000);
	                    return false;
	                }
	            }
	        });
	    });
    </script>

	<?php if (isset($title) && ($title === "Registration Form")): ?>
		<script>
			var error_console = document.getElementById("error");
			/* Validation Objects, This will handle client side validation*/
			var validator = new FormValidator('admission_form', [{
				name: 'course',
				display: 'Course Name',
				rules: 'required'
				}, {
				name: 'f_name',
				display: 'First Name',
				rules: 'required|max_length[15]|min_length[3]|alpha'
				}, {
				name: 'm_name',
				display: 'Middle Name',
				rules: 'max_length[15]|min_length[2]|alpha'
				}, {
				name: 'l_name',
				display: 'Last Name',
				rules: 'required|max_length[15]|min_length[3]|alpha'
				}, {
				name: 'fr_name',
				display: "Father's Name",
				rules: 'required|max_length[25]|min_length[3]'
				}, {
				name: 'mr_name',
				display: "Mother's Name",
				rules: 'required|max_length[25]|min_length[3]'
				}, {
				name: 'email',
				display: 'E-mail',
				rules: 'required|valid_email',
				}, {
				name: 'dob',
				display: 'Date Of Birth',
				rules: 'required'
				}, {
				name: 'mob',
				display: 'Mobile Number',
				rules: 'required|numeric|exact_length[10]',
				}, {
				name: 'gender',
				display: 'Gender',
				rules: 'required',
				}, {
				name: 'category',
				display: 'Category',
				rules: 'required',
				}, {
				name: 'address',
				display: 'Address',
				rules: 'required|max_length[100]',
				}, {
				name: 'photo',
				display: 'Photo',
				rules: 'required|is_file_type[jpg]',
				}, {
				name: 'stream',
				display: 'Stream',
				rules: 'required',
				}, {
				name: 'marks_10',
				display: '10th Marks',
				rules: 'required|greater_than[0]|less_than[100]',
				}, {
				name: 'class',
				display: 'Class',
				rules: 'required',
				}, {
				name: 'school',
				display: 'School',
				rules: 'required|max_length[30]'
				}], function(errors, event) {
					if (errors.length > 0) {
						// Show the errors
						var errorString = '';
						for (var i = 0, errorLength = errors.length; i < errorLength; i++) {
							errorString += (i+1)+'.'+errors[i].message + '<br />';
						}
						error_console.innerHTML = errorString;
						$("#error").slideDown();
					}
			});
		</script>
	<?php endif ?>

	<?php if(isset($title) && $title === "Print your receipt"): ?>
		<script src="js/validate.min.js"></script>
	 	
	 	<script>
	 		var error_console = document.getElementById("error");

	 		// Initialize the form validator
	 		var validator = new FormValidator('print_form', [{
			name: 'srial',
			display: 'Serial',
			rules: 'required|max_length[15]'
		}], function(errors, event) {
		    if (errors.length > 0) {
		        // Show the errors
		        var errorString = '';

        		for (var i = 0, errorLength = errors.length; i < errorLength; i++) {
            		errorString += (i+1)+'.'+errors[i].message + '<br />';
        		}
        		error_console.innerHTML = errorString;
        		$("#error").slideDown();
		    }
		});
	 	</script>
 	<?php endif ?>

 	<?php if(isset($title) && $title === "Notification Panel"): ?>
		<script src="js/validate.min.js"></script>
	 	
	 	<script>
	 		var error_console = document.getElementById("error");

	 		// Initialize the form validator
	 		var validator = new FormValidator('notice_form', [{
			name: 'notice_value',
			display: 'Notice Detail',
			rules: 'required'
		}, {
			name: 'tag',
			display: 'Notice tag',
			rules: 'required'
		}, {
			name: 'day',
			display: 'Day',
			rules: 'required'
		}, {
			name: 'month',
			display: 'Month',
			rules: 'required'
		}, {
			name: 'year',
			display: 'Year',
			rules: 'required'
		}, {
			name: 'batch',
			display: 'Batch',
			rules: 'required'
		}], function(errors, event) {
		    if (errors.length > 0) {
		        // Show the errors
		        var errorString = '';

        		for (var i = 0, errorLength = errors.length; i < errorLength; i++) {
            		errorString += (i+1)+'.'+errors[i].message + '<br />';
        		}
        		error_console.innerHTML = errorString;
        		$("#error").slideDown();
		    }
		});
	 	</script>
 	<?php endif ?>

 	<?php //if(isset($)) ?>
    </body>
</html>