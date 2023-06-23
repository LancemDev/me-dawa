<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../Static/homepage.css">
    <link rel="stylesheet" href="../Static/form.scss">
	<link rel="icon" href="../images/logo.jpg">
    <title>Sign Up</title>
</head>
<body>
    <!--Sign Up form for patients, doctors and supervisors having the firstName, lastName, password, emailaddress, residence, gender and a dropdown list having values patient, supervisor and doctor-->

   <div>
	<!-- code here -->
	<div class="card">
		<div class="card-image">	
			<h2 class="card-heading">
				Get started<br>
				<small>Sign Up</small>
			</h2>
		</div>
		<form class="card-form" method="POST" action="../config/signup.php">
			<div class="input">
				<input type="text" class="input-field" name="firstName"  required/>
				<label class="input-label">First Name</label>
			</div>
            <div class="input">
				<input type="text" class="input-field" name="lastName"  required/>
				<label class="input-label">Last Name</label>
			</div>
            <div class="input">
				<input type="email" class="input-field" name="emailaddress"  required/>
				<label class="input-label">Email Address</label>
			</div>
            <div class="input">
				<input type="password" class="input-field" name="password"  required/>
				<label class="input-label">Password</label>
			</div>
            <div class="input">
				<input type="text" class="input-field" name="phoneNumber"  required/>
				<label class="input-label">Phone Number</label>
			</div>
            <div class="input">
				<input type="text" class="input-field" name="address"  required/>
				<label class="input-label">Address</label>
			</div>
            <div class="input">
				<input type="text" class="input-field" name="gender"  required/>
				<label class="input-label">Gender</label>
			</div>
            <div class="input">
				<input type="date" class="input-field" name="dob"  required/>
				<label class="input-label">Date of Birth</label>
			</div>
            <div class="input">
                <select name="entity" id="entity" class="input-field" value="">
                    <option value="Doctor" class="input">Doctor</option>
                    <option value="Patient" class="input">Patient</option>
                    <option value="Supervisor" class="input">Supervisor</option>
                </select>
				<label class="input-label">Entity</label>
			</div>
            <div class="action">
                <input type="submit" class="action-button" value="Sign Up" />
            </div>
        </form>
        <div class="card-info">
			<p>Already have an account? <a href="../view/login.php">Login</a></p>
            <p>For your Pharmaceutical company, signup <a href="../view/companySignup.php">here</a></p>
			<p>For your Pharmacy, signup <a href="../view/pharmacySignUp.php">here</a></p>
        </div>
	</div>
</div>
</body>
</html>