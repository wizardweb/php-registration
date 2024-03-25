<?php


require_once 'connection.php';
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	    // Connect to the database
    $db = new Database();
    $conn = $db->getConnection();
	

	
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
	
	// Check if the user already exists
	$userName = $conn->real_escape_string($_POST['name']);
	$user_query = "SELECT * FROM users WHERE username = '$userName'";
	$result_user = $conn->query($user_query);

	// Check if the email already exists
	$email = $conn->real_escape_string($_POST['email']);
	$email_query = "SELECT * FROM users WHERE email = '$email'";
	$result_email = $conn->query($email_query);
	
	 if ($result_user->num_rows > 0) {
	// User already exists
	  $errors['name'] = "Username already exists";	
	} elseif ($result_email->num_rows > 0) {
		// Email already exists
	   $errors['email'] = "Email already exists";
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
		
		$hashed_password = sha1($password); // SHA1 hashing
		
		// Hash the password
		$hashed_password = sha1($password);

		// SQL query to insert data into the users table
		$sql = "INSERT INTO users (name, email, telephone, address1, address2, city, stateprovince, zipcode, username, password) 
				VALUES ('$name', '$email', '$telephone', '$address1', '$address2', '$city', '$stateprovince', '$zipcode', '$username', '$hashed_password')";

			
		
		 // Setting session variable
		session_start(); // Start the session if it's not already started
		$_SESSION['name'] = $name;


	   // Send email to the user
		//$to = $email;
		//$subject = "Registration";
		//$message = "Dear $name,\n\nThank you for registering with us!";
		//$headers = "From: test@example.com";

		//if (mail($to, $subject, $message, $headers)) {
			// Email sent successfully
			//$response = array('success' => true);
		//} else {
			// Email sending failed
			//$response = array('success' => false, 'errors' => 'Failed to send email.');
		//}
		
				
		if ($conn->query($sql) === TRUE) {
			//echo "New record created successfully";
			$response = array('success' => true);
		} else {
			 $response = array('success' => false, 'errors' => $errors);
			//echo "Error: " . $sql . "<br>" . $conn->error;
		}
		
		
        $response = array('success' => true);
    } else {
        // Registration failed due to validation errors
        $response = array('success' => false, 'errors' => $errors);
    }
	
	echo json_encode($response);
   
}

?>