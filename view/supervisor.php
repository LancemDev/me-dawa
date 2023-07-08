<!DOCTYPE html>
<html>
<head>
    <title>Supervisor Portal</title>
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
        <li><?php 
          session_start();
          $username = $_SESSION['username'];
          echo "Welcome, $username";
          ?></li>
            <li><a href="../view/homepage.php">Home</a></li>
            <li><a href="../config/signout.php">Sign Out</a></li>
        </div>
    </ul>
</nav>
</div>

<div class="">
	<!-- code here -->
	<div class="card">
		<div class="card-image">	
			<h2 class="card-heading">
				Welcome back<br>
				<small>Approve drugs</small>
			</h2>
		</div>
		<form class="card-form" method="post" action="../config/supervisor.php">
			<div class="input">
				<input type="number" class="input-field" name="drugID"  required/>
				<label class="input-label">Drug ID</label>
			</div>
      <div class="action">
          <input type="submit" class="action-button" value="Approve" />
      </div>
        </form>
	</div>
</div>

<!-- The content of the page for supervisor-->
<div class="content">
    <div class="content-container">
        <div class="row">
            <div class="content-col">
                <h3>Supervisor Portal</h3>
                <p>Here, you, can approve drugs </p>
            </div>
        </div>
    </div>
</div>



<!-- Contact Support 
<div class="container card">
    <h1>Contact Support</h1>
    <form action="" method="" class="card-form">
        <label for="email">Email</label>
        <div class="input">
          <input type="text" id="email" name="email" placeholder="Your email..">
          <label for="subject" class="input-label">Subject</label>
        </div>
        <div>
          <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
        </div>
        <input type="submit" value="Submit">
    </form>
-->




<!--The footer-->
<!-- <footer class="footer">
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
  </footer> -->
</body>
</html>