<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Signup</title>
    <link rel="icon" href="../images/logo.jpg">
    <link rel="stylesheet" href="../Static/login.css">
    <link rel="stylesheet" href="../Static/form.scss">
</head>
<body>
    <div class="container">
        <!-- code here -->
        <div class="card">
            <div class="card-image">	
                <h2 class="card-heading">
                    Get started<br>
                    <small>Sign Up your Company</small>
                </h2>
            </div>
            <form class="card-form" method="POST" action="../config/companySignUp.php">
                <div class="input">
                    <input type="text" class="input-field" name="companyName"  required/>
                    <label class="input-label">Company Name</label>
                </div>
                <div class="input">
                    <input type="email" class="input-field" name="companyEmailAddress"  required/>
                    <label class="input-label">Company Email Address</label>
                </div>
                <div class="input">
                    <input type="password" class="input-field" name="companyPassword"  required/>
                    <label class="input-label">Password</label>
                </div>
                <div class="input">
                    <input type="text" class="input-field" name="companyPhoneNumber"  required/>
                    <label class="input-label">Company Phone Number</label>
                </div>
                <div class="input">
                    <input type="text" class="input-field" name="companyAddress"  required/>
                    <label class="input-label">Company Address</label>
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