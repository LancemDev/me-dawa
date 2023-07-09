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
    <?php
        require_once '../database/database.php';

        // Create an instance of the database class
        $database = new Database();
        $patientID = $_SESSION['username'];
        $entity = $_SESSION['entity'];
        $results_per_page = 5; // Number of results per page
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1; // Get the current page from URL
        $start_index = ($current_page - 1) * $results_per_page; // Calculate the starting index for results

        // Get users from the database
        $users = $database->getApprovedDrugs($start_index, $results_per_page, $entity);

        // Display users in a table
        echo '
        <table style="width: 100%; border-collapse: collapse;">
        <!-- Table Heading -->
        <caption style="padding: 8px; text-align: center; border-bottom: 1px solid #ddd; color: #333;">Approved Drugs Ready for Dispensation</caption>
          <tr>
              <th style="padding: 8px; text-align: center; border-bottom: 1px solid #ddd; color: #333;">Drug ID</th>
              <th style="padding: 8px; text-align: center; border-bottom: 1px solid #ddd; color: #333;">Drug Name</th>
              <th style="padding: 8px; text-align: center; border-bottom: 1px solid #ddd; color: #333;">Drug Description</th>
              <th style="padding: 8px; text-align: center; border-bottom: 1px solid #ddd; color: #333;">Drug Price</th>
              <th style="padding: 8px; text-align: center; border-bottom: 1px solid #ddd; color: #333;">Drug Quantity</th>
              <th style="padding: 8px; text-align: center; border-bottom: 1px solid #ddd; color: #333;">Drug Expiry Date</th>
              <th style="padding: 8px; text-align: center; border-bottom: 1px solid #ddd; color: #333;">Drug Manufacturing Date</th>
              <th style="padding: 8px; text-align: center; border-bottom: 1px solid #ddd; color: #333;">Drug Company</th>
              <th style="padding: 8px; text-align: center; border-bottom: 1px solid #ddd; color: #333;">Action</th>
          </tr>';
          foreach ($users as $user) {
              echo ' <tr>
                        <td style="padding: 8px; text-align: center; border-bottom: 1px solid #ddd; color: #333;">' . $user['ID'] . '</td>
                        <td style="padding: 8px; text-align: center; border-bottom: 1px solid #ddd; color: #333;">' . $user['drugName'] . '</td>
                        <td style="padding: 8px; text-align: center; border-bottom: 1px solid #ddd; color: #333;">' . $user['drugDescription'] . '</td>
                        <td style="padding: 8px; text-align: center; border-bottom: 1px solid #ddd; color: #333;">' . $user['drugPrice'] . '</td>
                        <td style="padding: 8px; text-align: center; border-bottom: 1px solid #ddd; color: #333;">' . $user['drugQuantity'] . '</td>
                        <td style="padding: 8px; text-align: center; border-bottom: 1px solid #ddd; color: #333;">' . $user['drugExpirationDate'] . '</td>
                        <td style="padding: 8px; text-align: center; border-bottom: 1px solid #ddd; color: #333;">' . $user['drugManufacturingDate'] . '</td>
                        <td style="padding: 8px; text-align: center; border-bottom: 1px solid #ddd; color: #333;">' . $user['drugCompany'] . '</td>
                        <td style="padding: 8px; text-align: center; border-bottom: 1px solid #ddd; color: #333;">
                            <form method="POST" action="../config/pharmacy.php">
                              <input type="hidden" name="drugID" value="' . $user['ID'] . '">
                              <input type="submit" name="dispense" value="dispense" style="background-color: red; color: white; border: none; padding: 5px 10px; border-radius: 5px; cursor: pointer;">
                            </form>
                        </td>
                      </tr>';
          }
  
        echo '</table>';

        $total_results = $database->getTotalUsersByEntity($entity); // Get total number of users for the entity
        $total_pages = ceil($total_results / $results_per_page); // Calculate total number of pages

        echo '<div style="margin-top: 20px;">';

        if ($current_page > 1) {
          echo '<a href="pharmacy.php?entity=' . $entity . '&page=' . ($current_page - 1) . '" style="display: inline-block; padding: 8px 16px; text-decoration: none; color: #333; border: 1px solid #ddd; margin-right: 5px;">Previous</a>';
        }

        for ($i = 1; $i <= $total_pages; $i++) {
          echo '<a href="pharmacy.php?entity=' . $entity . '&page=' . $i . '" style="display: inline-block; padding: 8px 16px; text-decoration: none; color: #333; border: 1px solid #ddd; margin-right: 5px;">' . $i . '</a>';
        }

        if ($current_page < $total_pages) {
          echo '<a href="pharmacy.php?entity=' . $entity . '&page=' . ($current_page + 1) . '" style="display: inline-block; padding: 8px 16px; text-decoration: none; color: #333; border: 1px solid #ddd; margin-right: 5px;">Next</a>';
        }

        echo '</div>';

        
        ?>

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