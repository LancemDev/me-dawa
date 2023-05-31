<!DOCTYPE html>
<html>
<head>
    <title>Adding drugs</title>
    <link rel="stylesheet" href="../Static/form.scss">
    <link rel="stylesheet" href="../Static/homepage.css">
</head>
<body>

<body>
<!--The Navigation Bar-->
<div>
<nav class="navbar">
    <!-- LOGO -->
    <div class="logo">Me-Dawa</div>

    <!--Centered name-->


    <!-- NAVIGATION MENU -->
    <ul class="nav-links">
        <div class="menu">
            <li><a href="">Home</a></li>
            <li><a href="">Sign Out</a></li>
        </div>
    </ul>
</nav>
</div>

<!--A form for the company to add drugs-->
<div class="container">
	<!-- code here -->
	<div class="card">
		<div class="card-image">	
			<h2 class="card-heading">
				Welcome back<br>
				<small>Add drugs here</small>
			</h2>
		</div>
		<form class="card-form" method="post" action="../config/company.php">
			<div class="input">
				<input type="text" class="input-field" name="drugName"  required/>
				<label class="input-label">Drug Name</label>
			</div>
      <div class="input">
          <input type="text" class="input-field" name="drugDescription" required/>
          <label class="input-label">Drug Description</label>
      </div>
      <div class="input">
          <input type="number" step="0.01" min="0" class="input-field" name="drugPrice" required/>
          <label class="input-label">Drug Price</label>
      </div>
      <div class="input">
          <input type="number" class="input-field" name="drugQuantity" required/>
          <label class="input-label">Drug Quantity</label>
      </div>
      <div class="input">
          <input type="date" class="input-field" name="drugExpirationDate" required/>
          <label class="input-label">Drug Exp Date</label>
      </div>
      <div class="input">
          <input type="date" class="input-field" name="drugManufacturingDate" required/>
          <label class="input-label">Drug Manufacturing Date</label>
      </div>
      <div class="input">
          <input type="text" class="input-field" name="drugCompany" required/>
          <label class="input-label">Drug Company</label>
      </div>
      <div class="action">
          <input type="submit" class="action-button" value="Add drug" />
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
</body>
</html>