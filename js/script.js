$(document).ready(function() {
    $('#registrationForm').submit(function(e) {
	
        e.preventDefault(); // Prevent form submission
        var formData = $(this).serialize(); // Serialize form data
        $.ajax({
            url: 'register.php', // Server-side script URL
            type: 'POST',
            data: formData,
            dataType: 'json', // Data type expected from the server
            success: function(response) {
                if (response.success) {
						alert('success');
                    // If registration is successful, redirect to the success page
                    window.location.href = 'success.php';
                } else {
					if (response.database) {
					alert(response.errors);
					}
                    // If there are errors, display them next to the input fields
                    displayErrors(response.errors);
                }
            },
        });
    });
	
	 // Function to display errors next to input fields
    function displayErrors(errors) {
		 $('.text-danger').hide();
        // Loop through the errors object
        $.each(errors, function(key, value) {
            // Find the corresponding input field and display the error message
            $('#' + key).next('.text-danger').text(value);
			var $errorElement = $('#' + key).next('.text-danger');
			$errorElement.text(value);
			$errorElement.css('display', 'block'); 
        });
    }
	
	$('#backHomeButton').on('click', function() {
    window.location.href = 'registration.php';
	});
});