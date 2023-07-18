<?php

session_start();

include_once '../database/database.php';

$database = new Database();

if(isset($_GET['action'])){
  $action = $_GET['action'];

  switch($action){
  }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Doctor Portal</title>
    <link rel="stylesheet" href="../Static/form.scss">
    <link rel="stylesheet" href="../Static/doctor.css">
    <link rel="stylesheet" href="../Static/homepage.css">
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

<section id="sidebar">
<a href="#" class="brand">
    <i class='bx bxs-smile'></i>
    <span class="text">Doctor Portal</span>
</a>
<ul class="side-menu top">
    <li>
        <a href="dash.php?action=viewHistory">
            <i class='bx bxs-group' ></i>
            <span class="text">View History</span>
        </a>
    </li>
    <li>
        <a href="dash.php?action=addPrescription">
            <i class='bx bxs-group' ></i>
            <span class="text">Add Prescription</span>
        </a>
    </li>
    <li>
        <a href="dash.php?action=searchPatient">
            <i class='bx bxs-group' ></i>
            <span class="text">Search Patient</span>
        </a>
    </li>
</ul>
</section>


<!-- MAIN PAGE -->
<main>
    <div class="head-title">
        <div class="left">
            <h1>Dashboard</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li><i class='bx bx-chevron-right' ></i></li>
                <li>
                    <a class="active" href="#">Home</a>
                </li>
            </ul>
        </div>

    </div>

    <div class="table-data">
        <div class="order">
            <table>

                <!-- VIEW HISTORY -->
                <?php if($action == 'viewHistory'): ?>
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

                <?php endif; ?>

                

                <!-- ADD PRESCRIPTION -->
                <?php if($action == 'addPrescription'): ?>
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

                            <!-- getting the drug names from the db -->
                            <div class="input">
                                <select name="  drugID" id="drugID" class="input-field" value="">
                                <option value="" class="input" disabled selected>Drug Name</option>
                                <?php
                                    include_once '../database/database.php';
                                    $database = new database();
                                    $items = $database->getDrugs();
                                    foreach ($items as $item):
                                ?>
                                <option class="input" value="<?php $item['ID'] ?>" <?php echo $item['drugName'] ?> "><?php echo $item['drugName'] ?></option> 
                                <label class="input-label">Drug Name</label>
                                <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="input">
                                <input type="text" class="input-field" name="prescriptionDescription" required/>
                                <label class="input-label">Prescription Description</label>
                            </div>
                            <div class="input">
                                <input type="date" class="input-field" name="prescriptionDuration"  required/>
                                <label class="input-label">Prescription Duration</label>
                            </div>   
                            <div class="input">
                                <input type="text" class="input-field" name="prescriptionNotes" required/>
                                <label class="input-label">Prescription Notes</label>
                            </div>
                            <div class="action">
                                <input type="submit" class="action-button" value="Add Prescription" />
                            </div>
                            </form>
                        </div>
                    </div>

                <?php endif; ?>

                <!-- SEARCH PATIENT -->
                <?php if($action == 'searchPatient'): ?>
                    <form method="POST" action="../view/dash.php?action=searchSpecificPatient">
                        <div class="input">
                            <input type="text" class="input-field" name="patientName" required/>
                            <label class="input-label">Patient Name</label>
                        </div>
                        <div class="action">
                            <input type="submit" class="action-button" value="Search Patient" />
                        </div>
                    </form>
                <?php endif; ?>

                <!-- SEARCH PATIENT -->
                <?php 
                if($action == 'searchSpecificPatient'): 
                    $patientName = $_POST['patientName'];
                    $data = $database->searchPatient($patientName);
                ?>
                    <form method="POST" action="../view/dash.php?action=searchSpecificPatient">
                        <div class="input">
                            <input type="text" class="input-field" name="patientName" required/>
                            <label class="input-label">Patient Name</label>
                        </div>
                        <div class="action">
                            <input type="submit" class="action-button" value="Search Patient" />
                        </div>
                    </form>

