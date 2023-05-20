<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Static/signup.css">
    <title>Sign Up</title>
</head>
<body>
    <!--Sign Up form for patients, doctors and supervisors having the firstName, lastName, password, emailaddress, residence, gender and a dropdown list having values patient, supervisor and doctor-->
    <div class="container">
        <form action="../config/signup.php" method = "POST">
            <label for="firstName"> First Name :</label>
            <input type="text" name="firstName" placeholder="First Name">
            <label for="lastName"> Last Name :</label>
            <input type="text" name="lastName" placeholder="Last Name">
            <label for="password"> Password :</label>
            <input type="password" name="password" placeholder="Password">
            <label for="emailaddress"> Email Address :</label>
            <label for ="confirmPassword"> Confirm Password :</label>
            <input type="password" name="confirmPassword" placeholder="Confirm Password">
            <input type="email" name="emailaddress" placeholder="Email Address">
            <label for="residence"> Residence :</label>
            <input type="text" name="residence" placeholder="Residence">
            <div>
                <label for="entity">Choose what type of user you are:</label>
                <select name="entity" id="entity">
                    <option value="Doctor">Doctor</option>
                    <option value="Patient">Patient</option>
                    <option value="Supervisor">Supervisor</option>
                </select>
            </div>
            <input type="submit" value="Sign Up">
        </form>
    </div>
</body>
</html>