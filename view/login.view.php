<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Static/login.css">
    <link rel="stylesheet" href="../Static/form.scss">
    <title>Login</title>
</head>
<body>

    <!--Login using username and password. Remember that the POST is being taken to a login.php-->
<div class="container">
	<!-- code here -->
	<div class="card">
		<div class="card-image">	
			<h2 class="card-heading">
				Get right back in<br>
				<small>Login</small>
			</h2>
		</div>
		<form class="card-form" method="post" action="../config/login.php">
			<div class="input">
				<input type="text" class="input-field" name="username"  required/>
				<label class="input-label">Username</label>
			</div>
            <div class="input">
                <input type="password" class="input-field" name="password" required/>
                <label class="input-label">Password</label>
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
                <input type="submit" class="action-button" value="Login" />
            </div>
        </form>
        <div class="card-info">
            <p>By signing up you are agreeing to our <a href="#">Terms and Conditions</a></p>
        </div>
	</div>
</div>

    </div>
</body>
</html>

