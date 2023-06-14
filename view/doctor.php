<!DOCTYPE html>
<html>
<head>
    <title>Doctor Portal</title>
    <link rel="stylesheet" href="../Static/homepage.css">
    <link rel="stylesheet" href="../Static/form.scss">
    <link rel="icon" href="../images/logo.jpg">
</head>
<body>
<!--The Navigation Bar-->
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
            <li><a href="../Templates/homepage.html">Home</a></li>
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
				Welcome Doc<br>
				<small>Add Prescription</small>
			</h2>
		</div>
		  <form class="card-form" method="post" action="../config/doctor.php">
			  <div class="input">
				  <input type="number" class="input-field" name="patientID"  required/>
				  <label class="input-label">Patient ID</label>
			  </div>
        <div class="input">
          <input type="text" class="input-field" name="prescriptionDescription" required/>
          <label class="input-label">Prescription Description</label>
        </div>
        <div class="input">
				  <input type="date" class="input-field" name="prescriptionDuration"  required/>
				  <label class="input-label">Prescription Duration</label>
			  </div>   
        <div class="action">
          <input type="submit" class="action-button" value="Add Prescription" />
        </div>
      </form>
	</div>
</div>

<!--The footer-->
<footer class="footer">
    <div class="footer-container">
      <div class="row">
        <div class="footer-col">
          <h3>About Us</h3>
          <p>Excellence</p>
        </div>
        <div class="footer-col">
          <h3>Contact Us</h3>
          <ul>
            <li>Address: 123 Main St, Anytown </li>
            <li>Phone: 555-123-4567</li>
            <li>Email: info@example.com</li>
          </ul>
        </div>
        <div class="footer-col">
          <h3>Follow Us</h3>
          <ul>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Instagram</a></li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="footer-col">
          <p>&copy; 2023 Me-Dawa. All rights reserved.</p>
        </div>
      </div>
    </div>
  </footer>