<!DOCTYPE html>
<html>
<head>
  <title>Admin Dashboard</title>
  <link rel="icon" href="../images/logo.jpg">
</head>
<body>
  <div style="display: flex;">
    <div style="width: 200px; background-color: #f2f2f2;">
      <ul style="list-style-type: none; padding: 0;">
        <li style="margin-bottom: 10px;"><a href="dashboard.php?entity=patients" style="text-decoration: none; color: #333;">Patients</a></li>
        <li style="margin-bottom: 10px;"><a href="dashboard.php?entity=doctors" style="text-decoration: none; color: #333;">Doctors</a></li>
        <li style="margin-bottom: 10px;"><a href="dashboard.php?entity=supervisors" style="text-decoration: none; color: #333;">Supervisors</a></li>
      </ul>
    </div>
    <div style="flex-grow: 1; padding: 20px;">
      <h2>Admin Dashboard</h2>
      <?php
      session_start();

      include '../database/database.php';

      $database = new Database();
      // Check if the entity is set in the URL
      if(isset($_GET['entity'])){
        $entity = $_GET['entity'];
        $_SESSION['entity'] = $entity;

        // Display existing users with pagination
        $results_per_page = 10; // Number of results per page
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1; // Get the current page from URL
        $start_index = ($current_page - 1) * $results_per_page; // Calculate the starting index for results

        // Query to fetch users from the database based on the entity and pagination
        $users = $database->getUsersByEntity($entity, $start_index, $results_per_page);

        // Display users in a table
        echo '
        <table style="width: 100%; border-collapse: collapse;">
                <tr>
                  <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">ID</th>
                  <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">Name</th>
                  <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">Email</th>
                  <!-- Additional columns here -->
                </tr>';
        if($entity === 'patients'){
          foreach ($users as $user) {
            echo '<tr>
                    <td style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">' . $user['ID'] . '</td>
                    <td style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">' . $user['patientFirstName'] . '</td>
                    <td style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">' . $user['patientEmail'] . '</td>
                    <!-- Additional columns here -->
                  </tr>';
          }
        }
        else if($entity === 'doctors'){
          foreach ($users as $user) {
            echo '<tr>
                    <td style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">' . $user['ID'] . '</td>
                    <td style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">' . $user['doctorFirstName'] . '</td>
                    <td style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">' . $user['doctorEmail'] . '</td>
                    <!-- Additional columns here -->
                  </tr>';
          }
        }
        else if($entity === 'supervisors'){
          foreach ($users as $user) {
            echo '<tr>
                    <td style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">' . $user['ID'] . '</td>
                    <td style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">' . $user['supervisorFirstName'] . '</td>
                    <td style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">' . $user['supervisorEmail'] . '</td>
                    <!-- Additional columns here -->
                  </tr>';
          }
        }

        echo '</table>';

        // Pagination links
        $total_results = $database->getTotalUsersByEntity($entity); // Get total number of users for the entity
        $total_pages = ceil($total_results / $results_per_page); // Calculate total number of pages

        echo '<div style="margin-top: 20px;">';

        // Previous page link
        if ($current_page > 1) {
          echo '<a href="dashboard.php?entity=' . $entity . '&page=' . ($current_page - 1) . '" style="display: inline-block; padding: 8px 16px; text-decoration: none; color: #333; border: 1px solid #ddd; margin-right: 5px;">Previous</a>';
        }

        // Page numbers
        for ($i = 1; $i <= $total_pages; $i++) {
          echo '<a href="dashboard.php?entity=' . $entity . '&page=' . $i . '" style="display: inline-block; padding: 8px 16px; text-decoration: none; color: #333; border: 1px solid #ddd; margin-right: 5px;">' . $i . '</a>';
        }

        // Next page link
        if ($current_page < $total_pages) {
          echo '<a href="dashboard.php?entity=' . $entity . '&page=' . ($current_page + 1) . '" style="display: inline-block; padding: 8px 16px; text-decoration: none; color: #333; border: 1px solid #ddd; margin-right: 5px;">Next</a>';
        }

        echo '</div>';

        // Form to delete user
        echo '<form method="post" action="../config/dashboard.php" style="margin-top: 20px;">
                <label for="user_id">Enter User ID to delete:</label>
                <input type="text" name="user_id" id="user_id" required>
                <input type="submit" value="Delete">
              </form>';

        // Additional code to display user details based on the selected entity
        // ...
      }
      ?>
    </div>
  </div>
</body>
</html>
