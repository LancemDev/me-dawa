
<!DOCTYPE html>
<html>
<head>
    <title>Patient Portal</title>
    <link rel="stylesheet" href="../Static/homepage.css">
    <link rel="stylesheet" href="../Static/form.scss">
    <link rel="stylesheet" href="../Static/table.scss">
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

<div>
<table>
  <thead>
    <tr>
      <th>Prescription ID</th>
      <th>Doctor ID</th>
      <th>Prescription Date</th>
      <th>Prescription Valid Until</th>
      <th>Prescription Notes from Doctor</th>
    </tr>
  </thead>
    <tbody>
      <?php
        include '../database/database.php';

        // Create an instance of the database class
        $database = new Database();
        $patientID = $_SESSION['username'];
        $result = $database->getPrescriptionHistoryForPatient($patientID);
        // Change array $result to object $result
        $result = json_decode(json_encode($result), true);
        
        // Check if there are any rows returned
        if ($result->rowCount() > 0) {
          echo "<table><tr><th>Prescription ID</th><th>Doctor ID</th><th>Prescription Date</th<th>Prescription Duration</th><th>Prescription Notes</th></tr>";
          while ($row = $result->fetch()) {
            echo "<tr><td>" . $row["ID"] . "</td><td>" . $row["doctorID"] . "</td><td>" . $row["prescriptionDate"] . "</td><td>" . $row["prescriptionDuration"] . "</td><td>". $row["prescriptionNotes"]."</td></tr>";
          }
          echo "</table>";
        } else {
          echo "0 results";
        }
        ?>
  </tbody>
</table> 
</div>





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
            <li>Address: 12 West Madaraka, Nairobi </li>
            <li>Phone: 555-123-4567</li>
            <li>Email: me-dawa@yahoo.com</li>
          </ul>
        </div>
        <div class="footer-col">
          <h3>Follow Us</h3>
          <ul>
            <li><a href="#">Facebook</a></li>
            <li><a href="twitter.com/LancemDev">Twitter</a></li>
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