<?php 
    session_start();

    include '../database/database.php';

    $database = new database();


    if(isset($_GET['action'])){
        $action = $_GET['action'];
        $_SESSION['action'] = $action;

        switch($action){
            case 'viewPatients':
                $data = $database->getEntity("patients");
                break;
            case 'viewDoctors':
                $data = $database->getEntity("doctors");
                break;
            case 'viewCompanies':
                $data = $database->getEntity("companies");
                break;
            case 'viewSupervisors':
                $data = $database->getEntity("supervisors");
                break;
            case 'viewPharmacies':
                $data = $database->getEntity("pharmacies");
                break;
            case 'viewPrescriptions':
                $data = $database->getEntity("prescriptions");
                break;
            case 'viewDrugs':
                $data = $database->getEntity("drugs");
                break;
            case 'registerDoctors':
                $data = $database->getEntity("doctors");
                break;
            case 'registerSupervisors':
                $data = $database->getEntity("supervisors");
                break;
            case 'updateDrugs':
                $data = $database->getEntity("drugs");
                break;
            case 'updatePatients':
                $data = $database->getEntity("patients");
                break;
            case 'updateSupervisors':
                $data = $database->getEntity("supervisors");
                break;
            case 'updateDoctors':
                $data = $database->getEntity("doctors");
                break;
            case 'deleteDrugs':
                $data = $database->getEntity("drugs");
                break;
            default:
                echo "<script>alert('Error 101');</script>";
                break;
        }
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="../Static/dash.scss">
    <link rel="stylesheet" href="../Static/form.scss">
    <link rel="icon" href="../images/logo.jpg">

    <title>Admin Portal</title>
</head>
<body>


    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand">
            <i class='bx bxs-smile'></i>
            <span class="text">Me-dawa</span>
        </a>
        <ul class="side-menu top">
            <li class="active">
                <a href="#">
                    <i class='bx bxs-dashboard' ></i>
                    <span class="text">Admin Dashboard</span>
                </a>
            </li>
            <li>
                <a href="dash.php?action=viewPatients">
                    <i class='bx bxs-group' ></i>
                    <span class="text">View Patients</span>
                </a>
            </li>
            <li>
                <a href="dash.php?action=viewDoctors">
                    <i class='bx bxs-group' ></i>
                    <span class="text">View Doctors</span>
                </a>
            </li>
            <li>
                <a href="dash.php?action=viewCompanies">
                    <i class='bx bxs-group' ></i>
                    <span class="text">View Pharmaceutical</span>
                </a>
            </li>
            <li>
                <a href="dash.php?action=viewSupervisors">
                    <i class='bx bxs-group' ></i>
                    <span class="text">View Supervisors</span>
                </a>
            </li>
            <li>
                <a href="dash.php?action=viewPharmacies">
                    <i class='bx bxs-group' ></i>
                    <span class="text">View Pharmacies</span>
                </a>
            </li>
            <li>
                <a href="dash.php?action=viewPrescriptions">
                    <i class='bx bxs-group' ></i>
                    <span class="text">View Prescriptions</span>
                </a>
            </li>
            <li>
                <a href="dash.php?action=viewDrugs">
                    <i class='bx bxs-group' ></i>
                    <span class="text">View Drugs</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="#">
                    <i class='bx bxs-cog' ></i>
                    <span class="text">Settings</span>
                </a>
            </li>
            <li>
                <a href="../view/homepage.php" class="logout">
                    <i class='bx bxs-log-out-circle' ></i>
                    <span class="text">Logout</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->


    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu' ></i>
            <a href="#" class="nav-link">Categories</a>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
                </div>
            </form>
            <input type="checkbox" id="switch-mode" hidden>
            <label for="switch-mode" class="switch-mode"></label>
            <a href="#" class="notification">
                <i class='bx bxs-bell' ></i>
                <span class="num">11</span>
            </a>

        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
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

                        <!-- VIEW PATIENTS -->

                        <?php if($action == 'viewPatients'): ?>
                            <div class="head">
                                <h3><?php // echo "$action"; ?> Patients</h3>
                                <i class='bx bx-search'></i>
                                <i class='bx bx-filter'></i>
                            </div>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Patient Name</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Phone Number</th>
                                    <th>Address</th>
                                    <th>Gender</th>
                                    <th>DOB</th>
                                    <th>Actions</th> <!-- New column for actions -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data as $row): ?>
                                    <tr>
                                        <td>
                                            <p><?php echo $row['ID']; ?></p>
                                        </td>
                                        <td><?php echo $row['patientFirstName']." ".$row['patientLastName']; ?></td>
                                        <td><?php echo $row['patientEmail']; ?></td>
                                        <td><?php echo $row['patientPassword']; ?></td>
                                        <td><?php echo $row['patientPhoneNumber']; ?></td>
                                        <td><?php echo $row['patientAddress']; ?></td>
                                        <td><?php echo $row['patientGender']; ?></td>
                                        <td><?php echo $row['patientDOB']; ?></td>
                                        <td>
                                            <a href="delete_user.php?id=<?php echo $row['ID']; ?>&type=patient" class="action-icon" onclick="return confirm('Are you sure you want to delete this user?')"><i class='bx bx-trash'></i></a>
                                            <a href="update_user.php?id=<?php echo $row['ID']; ?>&type=patient" class="action-icon"><i class='bx bx-edit'></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        <?php endif ?>

                        <!-- VIEW DOCTORS -->

                        <?php if($action == 'viewDoctors'): ?>
                            <div class="head">
                                <h3><?php // echo "$action"; ?> Doctors</h3>
                                <i class='bx bx-search'></i>
                                <i class='bx bx-filter'></i>
                            </div>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Doctor Name</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Phone Number</th>
                                    <th>Address</th>
                                    <th>Gender</th>
                                    <th>DOB</th>
                                    <th>Actions</th> <!-- New column for actions -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data as $row): ?>
                                    <tr>
                                        <td>
                                            <p><?php echo $row['ID']; ?></p>
                                        </td>
                                        <td><?php echo $row['doctorFirstName']." ".$row['doctorLastName']; ?></td>
                                        <td><?php echo $row['doctorEmail']; ?></td>
                                        <td><?php echo $row['doctorPassword']; ?></td>
                                        <td><?php echo $row['doctorPhoneNumber']; ?></td>
                                        <td><?php echo $row['doctorAddress']; ?></td>
                                        <td><?php echo $row['doctorGender']; ?></td>
                                        <td><?php echo $row['doctorDOB']; ?></td>
                                        <td>
                                            <a href="delete_user.php?id=<?php echo $row['ID']; ?>&type=doctor" class="action-icon" onclick="return confirm('Are you sure you want to delete this user?')"><i class='bx bx-trash'></i></a>
                                            <a href="update_user.php?id=<?php echo $row['ID']; ?>&type=doctor" class="action-icon"><i class='bx bx-edit'></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        <?php endif ?>

                        <!-- VIEW SUPERVISORS -->

                        <?php if($action == 'viewSupervisors'): ?>
                            <div class="head">
                                <h3><?php // echo "$action"; ?> Supervisors</h3>
                                <i class='bx bx-search'></i>
                                <i class='bx bx-filter'></i>
                            </div>
                            <thead>
                                <tr>
                                    <th>ID</th> 
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Phone Number</th>
                                    <th>Address</th>
                                    <th>Gender</th>
                                    <th>Date of Birth</th>
                                    <th>Actions</th> <!-- New column for actions -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data as $row): ?>
                                    <tr>
                                        <td>
                                            <p><?php echo $row['ID']; ?></p>
                                        </td>
                                        <td><?php echo $row['supervisorFirstName']." ".$row['supervisorLastName']; ?></td>
                                        <td><?php echo $row['supervisorEmail']; ?></td>
                                        <td><?php echo $row['supervisorPassword']; ?></td>
                                        <td><?php echo $row['supervisorPhoneNumber']; ?></td>
                                        <td><?php echo $row['supervisorAddress']; ?></td>
                                        <td><?php echo $row['supervisorGender']; ?></td>
                                        <td><?php echo $row['supervisorDOB']; ?></td>
                                        <td>
                                            <a href="../config/deleteUser.php?id=<?php echo $row['ID']; ?>&type=supervisor" class="action-icon" onclick="return confirm('Are you sure you want to delete this user?')"><i class='bx bx-trash'></i></a>
                                            <a href="../config/updateUser.php?id=<?php echo $row['ID']; ?>&type=supervisor&data=<?php echo $row ?>" class="action-icon"><i class='bx bx-edit'></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        <?php endif ?>

                        <!-- VIEW PHARMACEUTICAL COMPANIES --> 

                        <?php if($action == 'viewCompanies'): ?>
                            <div class="head">
                                <h3><?php // echo "$action"; ?> Pharmaceutical Companies</h3>
                                <i class='bx bx-search'></i>
                                <i class='bx bx-filter'></i>
                            </div>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Phone Number</th>
                                    <th>Address</th>
                                    <th>Actions</th> <!-- New column for actions -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data as $row): ?>
                                    <tr>
                                        <td>
                                            <p><?php echo $row['ID']; ?></p>
                                        </td>
                                        <td><?php echo $row['companyName']; ?></td>
                                        <td><?php echo $row['companyEmail']; ?></td>
                                        <td><?php echo $row['companyPassword']; ?></td>
                                        <td><?php echo $row['companyPhoneNumber']; ?></td>
                                        <td><?php echo $row['companyAddress']; ?></td>
                                        <td>
                                            <a href="delete_user.php?id=<?php echo $row['ID']; ?>&type=company" class="action-icon" onclick="return confirm('Are you sure you want to delete this user?')"><i class='bx bx-trash'></i></a>
                                            <a href="update_user.php?id=<?php echo $row['ID']; ?>&type=company" class="action-icon"><i class='bx bx-edit'></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        <?php endif ?>

                        <!-- VIEW PHARMACIES -->

                        <?php if($action == 'viewPharmacies'): ?>
                            <div class="head">
                                <h3><?php // echo "$action"; ?> Pharmacies</h3>
                                <i class='bx bx-search'></i>
                                <i class='bx bx-filter'></i>
                            </div>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Pharmacy Name</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Phone Number
                                    <th>Address</th>
                                    <th>Actions</th> <!-- New column for actions -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data as $row): ?>
                                    <tr>
                                        <td>
                                            <p><?php echo $row['ID']; ?></p>
                                        </td>
                                        <td><?php echo $row['pharmacyName']; ?></td>
                                        <td><?php echo $row['pharmacyEmail']; ?></td>
                                        <td><?php echo $row['pharmacyPassword']; ?></td>
                                        <td><?php echo $row['pharmacyPhoneNumber']; ?></td>
                                        <td><?php echo $row['pharmacyAddress']; ?></td>
                                        <td>
                                            <a href="delete_user.php?id=<?php echo $row['ID']; ?>&type=pharmacy" class="action-icon" onclick="return confirm('Are you sure you want to delete this user?')"><i class='bx bx-trash'></i></a>
                                            <a href="update_user.php?id=<?php echo $row['ID']; ?>&type=pharmacy" class="action-icon"><i class='bx bx-edit'></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        <?php endif ?>

                        <!-- VIEW DRUGS -->

                        <?php if($action == 'viewDrugs'): ?>
                            <div class="head">
                                <h3><?php // echo "$action"; ?> Drugs</h3>
                                <i class='bx bx-search'></i>
                                <i class='bx bx-filter'></i>
                            </div>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Expiry Date</th>
                                    <th>Manufacturing Date</th>
                                    <th>Drug Company</th>
                                    <th>Approved</th>
                                    <th>Actions</th> <!-- New column for actions -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data as $row): ?>
                                    <tr>
                                        <td>
                                            <p><?php echo $row['ID']; ?></p>
                                        </td>
                                        <td><?php echo $row['drugName']; ?></td>
                                        <td><?php echo $row['drugDescription']; ?></td>
                                        <td><?php echo $row['drugPrice']; ?></td>
                                        <td><?php echo $row['drugQuantity']; ?></td>
                                        <td><?php echo $row['drugExpirationDate']; ?></td>
                                        <td><?php echo $row['drugManufacturingDate']; ?></td>
                                        <td><?php echo $row['drugCompany']; ?></td>
                                        <td><?php echo $row['Approved']; ?></td>
                                        <!-- <td>
                                            <a href="delete_user.php?id=<?php //echo $row['ID']; ?>&type=drug" class="action-icon" onclick="return confirm('Are you sure you want to delete this user?')"><i class='bx bx-trash'></i></a>
                                            <a href="update_user.php?id=<?php //echo $row['ID']; ?>&type=drug" class="action-icon"><i class='bx bx-edit'></i></a>
                                        </td> -->
                                        <td>
                                            <form method="POST" action="../view/dash.php?action=deleteDrugs">
                                                <input type="hidden" name="id" value="<?php echo $row['ID']; ?>">
                                                <input type="hidden" name="type" value="drug">
                                                <a href="#" onclick="if(confirm('Are you sure you want to delete this user?')) { this.parentNode.submit(); }" class="action-icon">
                                                    <i class='bx bx-trash'></i>
                                                </a>
                                            </form>
                                            <form method="POST" action="../view/dash.php?action=updateDrugs">
                                                <input type="hidden" name="id" value="<?php echo $row['ID']; ?>">
                                                <input type="hidden" name="type" value="drug">
                                                <input type="hidden" name="action" value="updateDrugs">
                                                <a href="#" onclick="this.parentNode.submit();" class="action-icon">
                                                    <i class='bx bx-edit'></i>
                                                </a>
                                            </form>
                                        </td>




                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        <?php endif ?>


                        <!-- VIEW PRESCRIPTIONS -->

                        <?php if($action == 'viewPrescriptions'): ?>
                            <div class="head">
                                <h3><?php // echo "$action"; ?> Prescriptions</h3>
                                <i class='bx bx-search'></i>
                                <i class='bx bx-filter'></i>
                            </div>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Patient ID</th>
                                    <th>Doctor ID</th>
                                    <th>Prescription Date</th>
                                    <th>Prescription Notes</th>
                                    <th>Drug ID</th>
                                    <th>Actions</th> <!-- New column for actions -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data as $row): ?>
                                    <tr>
                                        <td>
                                            <p><?php echo $row['ID']; ?></p>
                                        </td>
                                        <td><?php echo $row['patientID']; ?></td>
                                        <td><?php echo $row['doctorID']; ?></td>
                                        <td><?php echo $row['prescriptionDate']; ?></td>
                                        <td><?php echo $row['prescriptionNotes']; ?></td>
                                        <td><?php echo $row['drugID']; ?></td>
                                        <td>
                                            <a href="delete_user.php?id=<?php echo $row['ID']; ?>&type=prescription" class="action-icon" onclick="return confirm('Are you sure you want to delete this user?')"><i class='bx bx-trash'></i></a>
                                            <a href="update_user.php?id=<?php echo $row['ID']; ?>&type=prescription" class="action-icon"><i class='bx bx-edit'></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        <?php endif ?>

                        <!-- UPDATE DRUGS -->

                        <?php 
                        if($action == 'updateDrugs'): 
                            $id = $_POST['id'];
                            $data = $database->getDrug($id);
                        ?>
                            <div class="card">
                                <form class="card-form" method="post" action="../config/updateDrugs.php">
                                    <div class="input">
                                        <input type="text" class="input-field" name="drugName" value="<?php echo $data['drugName']; ?>" required/>
                                        <label class="input-label">Drug Name</label>
                                    </div>
                                    <div class="input">
                                        <input type="text" class="input-field" name="drugDescription" value="<?php echo $data['drugDescription']; ?>" required/>
                                        <label class="input-label">Drug Description</label>
                                    </div>
                                    <div class="input">
                                        <input type="number" step="0.01" min="0" class="input-field" name="drugPrice" value="<?php echo $data['drugPrice']; ?>" required/>
                                        <label class="input-label">Drug Price</label>
                                    </div>
                                    <div class="input">
                                        <input type="number" class="input-field" name="drugQuantity" value="<?php echo $data['drugQuantity']; ?>" required/>
                                        <label class="input-label">Drug Quantity</label>
                                    </div>
                                    <div class="input">
                                        <input type="date" class="input-field" name="drugExpirationDate" value="<?php echo $data['drugExpirationDate']; ?>" required/>
                                        <label class="input-label">Drug Expiration Date</label>
                                    </div>
                                    <div class="input">
                                        <input type="date" class="input-field" name="drugManufacturingDate" value="<?php echo $data['drugManufacturingDate']; ?>" required/>
                                        <label class="input-label">Drug Manufacturing Date</label>
                                    </div>
                                    <div class="input">
                                        <input type="text" class="input-field" name="drugCompany" value="<?php echo $data['drugCompany']; ?>" required/>
                                        <label class="input-label">Drug Company</label>
                                    </div>
                                    <div class="input">
                                        <input type="text" class="input-field" name="drugApproved" value="<?php echo $data['Approved']; ?>" required/>
                                        <label class="input-label">Drug Approved</label>
                                    </div>
                                    <!-- <input type="hidden" name="id" value="<?php echo $data['ID']; ?>">
                                    <input type="hidden" name="type" value="updateDrug">
                                    <input type="submit" class="btn" name="updateDrug" value="Update Drug"> -->
                                    <div class="action">
                                        <input type="hidden" name="ID" value="<?php echo $data['ID']; ?>">
                                        <input type="hidden" name="type" value="updateDrug">
                                        <input type="submit" class="action-button" name="updateDrug" value="Update Drug">
                                    </div>
                                </form>
                            </div>
                        <?php endif ?>


                        <!-- DELETE DRUGS -->
                        <?php if ($action == 'deleteDrugs'): 
                         $id = $_POST['id'];
                         if($database->deleteDrug($id)){
                            echo "<script>alert('Drug deleted successfully')</script>";
                            echo "<script>window.location.href = '../view/dash.php?action=viewDrugs'</script>";
                         }else{
                            echo "<script>alert('Drug not deleted')</script>";
                            echo "<script>window.location.href = '../view/dash.php?action=viewDrugs'</script>";
                         }
                        ?>
                        <?php endif ?>
                        


                    </table>
                </div>
            </div>

        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->

    <script src="../Scripts/dash.js"></script>
</body>
</html>
