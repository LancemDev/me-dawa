<!DOCTYPE html>
<html>
<head>
  <title>Admin Dashboard</title>
  <link rel="stylesheet" type="text/css" href="../Static/dashboard.css">
  <link rel="icon" href="../images/logo.jpg">
</head>
<body>
  <div class="container">
    <div class="sidebar">
      <ul>
        <li><a href="dashboard.php?entity=patients">Patients</a></li>
        <li><a href="dashboard.php?entity=doctors">Doctors</a></li>
        <li><a href="dashboard.php?entity=supervisors">Supervisors</a></li>
      </ul>
    </div>
    <div class="content">
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
        echo '<table>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <!-- Additional columns here -->
                </tr>';
        if($entity === 'patients'){
          foreach ($users as $user) {
            echo '<tr>
                    <td>' . $user['ID'] . '</td>
                    <td>' . $user['patientFirstName'] . '</td>
                    <td>' . $user['patientEmail'] . '</td>
                    <!-- Additional columns here -->
                  </tr>';
          }
        }
        else if($entity === 'doctors'){
          foreach ($users as $user) {
            echo '<tr>
                    <td>' . $user['ID'] . '</td>
                    <td>' . $user['doctorFirstName'] . '</td>
                    <td>' . $user['doctorEmail'] . '</td>
                    <!-- Additional columns here -->
                  </tr>';
          }
        }
        else if($entity === 'supervisors'){
          foreach ($users as $user) {
            echo '<tr>
                    <td>' . $user['ID'] . '</td>
                    <td>' . $user['supervisorFirstName'] . '</td>
                    <td>' . $user['supervisorEmail'] . '</td>
                    <!-- Additional columns here -->
                  </tr>';
          }
        }

        echo '</table>';

        // Pagination links
        $total_results = $database->getTotalUsersByEntity($entity); // Get total number of users for the entity
        $total_pages = ceil($total_results / $results_per_page); // Calculate total number of pages

        echo '<div class="pagination">';

        // Previous page link
        if ($current_page > 1) {
          echo '<a href="dashboard.php?entity=' . $entity . '&page=' . ($current_page - 1) . '">Previous</a>';
        }

        // Page numbers
        for ($i = 1; $i <= $total_pages; $i++) {
          echo '<a href="dashboard.php?entity=' . $entity . '&page=' . $i . '">' . $i . '</a>';
        }

        // Next page link
        if ($current_page < $total_pages) {
          echo '<a href="dashboard.php?entity=' . $entity . '&page=' . ($current_page + 1) . '">Next</a>';
        }

        echo '</div>';

        // Form to delete user
        echo '<form method="post" action="../config/dashboard.php">
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
