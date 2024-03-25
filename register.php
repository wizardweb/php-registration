<?php

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
    // Define your validation rules here
    $errors = [];
    if (empty($_POST['name'])) {
        $errors['name'] = "Name is required";
    }

    if (empty($_POST['email'])) {
        $errors['email'] = "Email is required";
    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Invalid email format";
    }

    if (empty($_POST['telephone'])) {
        $errors['telephone'] = "Telephone is required";
    }

    if (empty($_POST['address1'])) {
        $errors['address1'] = "Address 1 is required";
    }

    if (empty($_POST['city'])) {
        $errors['city'] = "City is required";
    }

    if (empty($_POST['stateprovince'])) {
        $errors['stateprovince'] = "State/Province is required";
    }

    if (empty($_POST['zipcode'])) {
        $errors['zipcode'] = "Zip/Post Code is required";
    }

    if (empty($_POST['username'])) {
        $errors['username'] = "Username is required";
    }

    if (empty($_POST['password'])) {
        $errors['password'] = "Password is required";
    } elseif (strlen($_POST['password']) < 6) {
        $errors['password'] = "Password must be at least 6 characters long";
    }

    if ($_POST['password'] !== $_POST['password_confirmation']) {
        $errors['password_confirmation'] = "Passwords do not match";
    }


    // If there are no validation errors, proceed with registration
    if (empty($errors)) {
		
        // Handle registration logic here, for example, you can save the data to a database
        // Simulating successful registration
		
		$name = $_POST['name'];
        $email = $_POST['email'];
        $telephone = $_POST['telephone'];
        $address1 = $_POST['address1'];
        $address2 = $_POST['address2'];
        $city = $_POST['city'];
        $stateprovince = $_POST['stateprovince'];
        $zipcode = $_POST['zipcode'];
        $username = $_POST['username'];
        $password = $_POST['password'];
		
		 // Setting session variable
		session_start(); // Start the session if it's not already started
		$_SESSION['name'] = $name;

		
		
        $response = array('success' => true);
    } else {
        // Registration failed due to validation errors
        $response = array('success' => false, 'errors' => $errors);
    }
	
	echo json_encode($response);
   
}

?>