<!DOCTYPE html>
<html>
<head>
    <title>Doctor Portal</title>
    <link rel="stylesheet" href="../Static/form.scss">
    <link rel="stylesheet" href="../Static/homepage.css">
    <link rel="icon" href="../images/logo.jpg">
</head>
<body>
  <div class="body">
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

<?php
        require_once '../database/database.php';

        // Create an instance of the database class
        $database = new Database();
        $doctorID = $_SESSION['username'];
        $entity = $_SESSION['entity'];
        $results_per_page = 5; // Number of results per page
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1; // Get the current page from URL
        $start_index = ($current_page - 1) * $results_per_page; // Calculate the starting index for results

        // Query to fetch users from the database based on the entity and pagination
        $users = $database->getUsersByEntityAndIDForDoctor($entity, $doctorID, $start_index, $results_per_page);

        // Display users in a table
        echo '
        <table style="width: 100%; border-collapse: collapse;">
        <!-- Table Heading -->
        <caption style="padding:8px; text-align: center; border-bottom: 1px solid #ddd; color: #333;">Prescription History</caption>
          <tr>
              <th style="padding: 8px; text-align: center; border-bottom: 1px solid #ddd; color: #333;">Prescription ID</th>
              <th style="padding: 8px; text-align: center; border-bottom: 1px solid #ddd; color: #333;">Patient ID</th>
              <th style="padding: 8px; text-align: center; border-bottom: 1px solid #ddd; color: #333;">Prescription Date</th>
              <th style="padding: 8px; text-align: center; border-bottom: 1px solid #ddd; color: #333;">Prescription Valid Until</th>
              <th style="padding: 8px; text-align: center; border-bottom: 1px solid #ddd; color: #333;">Prescription Notes from Doctor</th>
          </tr>';
          foreach ($users as $user) {
              echo ' <tr>
                        <td style="padding: 8px; text-align: center; border-bottom: 1px solid #ddd; color: #333;">' . $user['ID'] . '</td>
                        <td style="padding: 8px; text-align: center; border-bottom: 1px solid #ddd; color: #333;">' . $user['patientID'] . '</td>
                        <td style="padding: 8px; text-align: center; border-bottom: 1px solid #ddd; color: #333;">' . $user['prescriptionDate'] . '</td>
                        <td style="padding: 8px; text-align: center; border-bottom: 1px solid #ddd; color: #333;">' . $user['prescriptionDuration'] . '</td>
                        <td style="padding: 8px; text-align: center; border-bottom: 1px solid #ddd; color: #333;">' . $user['prescriptionNotes'] . '</td>
                        <!-- Additional columns here -->
                      </tr>';
          }
  
        echo '</table>';

        $total_results = $database->getTotalUsersByEntity($entity); // Get total number of users for the entity
        $total_pages = ceil($total_results / $results_per_page); // Calculate total number of pages

        echo '<div style="margin-top: 20px;">';

        if($current_page > 1) {
          echo '<a href="patient.php?entity=' . $entity . '&page=' . ($current_page - 1) . '" style="display: inline-block; padding: 8px 16px; text-decoration: none; color: #333; border: 1px solid #ddd; margin-right: 5px;">Previous</a>';
        }

        for ($i = 1; $i <= $total_pages; $i++) {
          echo '<a href="patient.php?entity=' . $entity . '&page=' . $i . '" style="display: inline-block; padding: 8px 16px; text-decoration: none; color: #333; border: 1px solid #ddd; margin-right: 5px;">' . $i . '</a>';
        }

        if ($current_page < $total_pages) {
          echo '<a href="patient.php?entity=' . $entity . '&page=' . ($current_page + 1) . '" style="display: inline-block; padding: 8px 16px; text-decoration: none; color: #333; border: 1px solid #ddd; margin-right: 5px;">Next</a>';
        }

        echo '</div>';
        
        ?>

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
</div>
</body>
</html>