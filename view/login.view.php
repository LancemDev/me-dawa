<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Static/homepage.css">
    <title>Log In</title>
</head>
<body>

    <!--Login using username and password. Remember that the POST is being taken to a login.php-->
    <div>
        <form action="/config/login.php" method="POST">
            <label for="username"> Username :</label>
            <input type="text" name="username" placeholder="Username">
            <label for="password"> Password :</label>
            <input type="password" name="password" placeholder="Password">
            <label for="entity">Choose what type of user you are:</label>
            <select name="entity" id="entity">
                <option value="Doctor">Doctor</option>
                <option value="Patient">Patient</option>
                <option value="Supervisor">Supervisor</option>
        </form>
    </div>
</body>
</html>