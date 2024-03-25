


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" href="css/styles.css">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body>

  <div class="container">
  
  <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Register
                    </div>
                    <div class="card-body">
	     <form id="registrationForm" method="post">
		 <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>">
        <div class="text-danger"></div>

    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control" id="email" name="email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
         <div class="text-danger"></div>

    </div>

    <div class="mb-3">
        <label for="telephone" class="form-label">Telephone</label>
        <input type="text" class="form-control" id="telephone" name="telephone" value="<?php echo isset($_POST['telephone']) ? htmlspecialchars($_POST['telephone']) : ''; ?>">
        <div class="text-danger"></div>
 
    </div>

    <div class="mb-3">
        <label for="address1" class="form-label">Address 1</label>
        <input type="text" class="form-control" id="address1" name="address1" value="<?php echo isset($_POST['address1']) ? htmlspecialchars($_POST['address1']) : ''; ?>">
		<div class="text-danger"></div>
    </div>

    <div class="mb-3">
        <label for="address2" class="form-label">Address 2</label>
        <input type="text" class="form-control" id="address2" name="address2" value="<?php echo isset($_POST['address2']) ? htmlspecialchars($_POST['address2']) : ''; ?>">
    </div>

    <div class="mb-3">
        <label for="city" class="form-label">City</label>
        <input type="text" class="form-control" id="city" name="city" value="<?php echo isset($_POST['city']) ? htmlspecialchars($_POST['city']) : ''; ?>">
		<div class="text-danger"></div>
    </div>

    <div class="mb-3">
        <label for="stateprovince" class="form-label">State/Province</label>
        <input type="text" class="form-control" id="stateprovince" name="stateprovince" value="<?php echo isset($_POST['stateprovince']) ? htmlspecialchars($_POST['stateprovince']) : ''; ?>">
		<div class="text-danger"></div>
    </div>

    <div class="mb-3">
        <label for="zipcode" class="form-label">Zip/Post Code</label>
        <input type="text" class="form-control" id="zipcode" name="zipcode" value="<?php echo isset($_POST['zipcode']) ? htmlspecialchars($_POST['zipcode']) : ''; ?>">
		<div class="text-danger"></div>
    </div>

    <div class="mb-3">
        <label for="username" class="form-label">User Name</label>
        <input type="text" class="form-control" id="username" name="username" value="<?php echo isset($_POST['username']) ? htmlspecialchars($_POST['username']) : ''; ?>">
		<div class="text-danger"></div>
    </div>
   <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" value="<?php echo isset($_POST['password']) ? htmlspecialchars($_POST['password']) : ''; ?>">
		<div class="text-danger"></div>
    </div>

    <div class="mb-3">
        <label for="confirmPassword" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" value="<?php echo isset($_POST['password_confirmation']) ? htmlspecialchars($_POST['password_confirmation']) : ''; ?>">
        <div class="text-danger"></div>
    </div>
		<!-- Add other form fields here -->

		<button type="submit" class="btn btn-primary">Register</button>
	</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="js/script.js"></script>
</body>
</html>