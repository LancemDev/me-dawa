<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacy SignUp</title>
    <link rel="stylesheet" href="../Static/form.scss">
    <link rel="icon" href="../Static/logo.png">
</head>
<body>
    <div>
        <!-- code here -->
        <div class="card">
            <div class="card-image">	
                <h2 class="card-heading">
                    Get started<br>
                    <small>Sign Up your Company</small>
                </h2>
            </div>
            <form class="card-form" method="POST" action="../config/pharmacySignup.php">
                <div class="input">
                    <input type="text" class="input-field" name="pharmacyName"  required/>
                    <label class="input-label">Pharmacy Name</label>
                </div>
                <div class="input">
                    <input type="email" class="input-field" name="pharmacyEmail"  required/>
                    <label class="input-label">Pharmacy Email Address</label>
                </div>
                <div class="input">
                    <input type="password" class="input-field" name="pharmacyPassword"  required/>
                    <label class="input-label">Password</label>
                </div>
                <div class="input">
                    <input type="text" class="input-field" name="pharmacyPhoneNumber"  required/>
                    <label class="input-label">Pharmacy Phone Number</label>
                </div>
                <div class="input">
                    <input type="text" class="input-field" name="pharmacyAddress"  required/>
                    <label class="input-label">Pharmacy Address</label>
                </div>
                <div class="action">
                    <input type="submit" class="action-button" value="Sign Up" />
                </div>
            </form>
            <div class="card-info">
                <p>By signing up you are agreeing to our <a href="#">Terms and Conditions</a></p>
            </div>
        </div>
    </div>  
</body>
</html>