<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacy Portal</title>
    <link rel="stylesheet" href="../Static/homepage.css">
    <link rel="stylesheet" href="../Static/form.scss">
    <link rel="icon" href="../images/logo.jpg">
</head>
<body>
    <div>
        <nav class="navbar">
            <!-- LOGO -->
            <div class="logo">Me-Dawa</div>

            <!-- NAVIGATION MENU -->
            <ul class="nav-links">
                <div class="menu">
                    <li>
                        <?php 
                        session_start();
                        $username = $_SESSION['username'];
                        echo "Welcome, $username";
                        ?>
                    </li>
                    <li><a href="../view/homepage.php">Home</a></li>
                    <li><a href="../config/signout.php">Sign Out</a></li>
                </div>
            </ul>
        </nav>
    </div>

    <div class="container">
        <!-- code here -->
        <div class="card">
            <div class="card-image">	
                <h2 class="card-heading">
                    Hello<br>
                    <small>Dispense your drug</small>
                </h2>
            </div>
            <form class="card-form" method="POST" action="../config/pharmacy.php">
                <div class="input">
                    <input type="text" class="input-field" name="prescriptionID"  required/>
                    <label class="input-label">Prescription ID</label>
                </div>
                <div class="action">
                    <input type="submit" class="action-button" value="Dispense Drug" />
                </div>
            </form>
        </div>
    </div>

    
    
</body>
</html>