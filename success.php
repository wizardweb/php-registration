<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You!</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>


    <div class="vh-100 d-flex justify-content-center align-items-center">
            <div>
                <div class="mb-4 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="75" height="75"
                        fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                        <path
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                    </svg>
                </div>
                <div class="text-center">
                 <h1>Thank You!</h1>
					<?php
					// Assuming you have stored the user's name in a session variable after successful registration
					session_start();
					if(isset($_SESSION['name'])) {
						echo "<p>Dear " . $_SESSION['name'] . ", thank you for registering!</p>";
						// You can add additional messages or instructions here
						// For example: echo "<p>An email has been sent to " . $_SESSION['email'] . " with further instructions.</p>";
					} else {
						echo "<p>Thank you for registering!</p>";
					}
					?>
                    <button class="btn btn-primary" id="backHomeButton">Back Home</button>
                </div>
            </div>
    <div>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>