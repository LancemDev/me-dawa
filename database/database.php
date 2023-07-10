<?php

class Database{

    private $hostName;
    private $username;
    private $password;
    private $databaseName;
    private $connection;
    private $caCert;

    public function __construct() {
        $this->hostName = "localhost";

        // Note that if you are viewing this code from the github repository, you will not be able to access the database
        // This is because the database credentials will be revoked by the cloud provider for security reasons
        // Moved the db from the cloud to my localhost
        $this->username = "root";
        $this->password = "";
        $this->databaseName = "me-dawa";
        
        // Make the connection without the caCert
        try{
            $this->connection = new PDO("mysql:host=$this->hostName;dbname=$this->databaseName", $this->username, $this->password);
        } catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }
    }
    
    // Checking whether a patient exists and confirming their password
    function patientExists($patientID, $patientPassword){
        //Prepare statement
        $stmt = $this->connection->prepare("SELECT patientPassword FROM patients WHERE ID = :patientID");
        $stmt->bindParam(':patientID', $patientID);

        //Execute statement
        $stmt->execute();

        //Fetch the result
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        //Check if the password matches
        if($result['patientPassword'] === $patientPassword){
            return true;
        } else {
            return false;
        }
    }

    // Checking whether a doctor exists and confirming their password
    function doctorExists($doctorID, $doctorPassword){
        //Prepare statement
        $stmt = $this->connection->prepare("SELECT doctorPassword FROM doctors WHERE ID = :ID");
        $stmt->bindParam(':ID', $doctorID);

        //Execute statement
        $stmt->execute();

        //Fetch the result
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        //Check if the password matches
        if($result['doctorPassword'] === $doctorPassword){
            return true;
        } else {
            return false;
        }
    }

    // Checking whether a supervisor exists and confirming their password
    function supervisorExists($supervisorID, $supervisorPassword){
        //Prepare statement
        $stmt = $this->connection->prepare("SELECT supervisorPassword FROM supervisors WHERE ID = :ID");
        $stmt->bindParam(':ID', $supervisorID);

        //Execute statement
        $stmt->execute();

        //Fetch the result
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        //Check if the password matches
        if($result['supervisorPassword'] === $supervisorPassword){
            return true;
        } else {
            return false;
        }
    }


    //Signing up a new patient
    function patientSignup($patientFirstName, $patientSecondName, $patientEmail, $patientPassword, $patientPhoneNumber, $patientAddress, $patientGender, $patientDOB){
        //Prepare statement


        $stmt = $this->connection->prepare("INSERT INTO patients (patientFirstName, patientLastName, patientEmail, patientPassword, patientPhoneNumber, patientAddress, patientGender, patientDOB) VALUES (:patientFirstName, :patientLastName, :patientEmail, :patientPassword, :patientPhoneNumber, :patientAddress, :patientGender, :patientDOB)");
        $stmt->bindParam(':patientFirstName', $patientFirstName);
        $stmt->bindParam(':patientLastName', $patientSecondName);
        $stmt->bindParam(':patientEmail', $patientEmail);
        $stmt->bindParam(':patientPassword', $patientPassword);
        $stmt->bindParam(':patientPhoneNumber', $patientPhoneNumber);
        $stmt->bindParam(':patientAddress', $patientAddress);
        $stmt->bindParam(':patientGender', $patientGender);
        $stmt->bindParam(':patientDOB', $patientDOB);

        //Execute statement
        $stmt->execute();
    }


    // This get the patient id generated by the triggers
    function getPatientId($patientEmail){
        //Prepare statement
        $stmt = $this->connection->prepare("SELECT ID FROM patients WHERE patientEmail = :patientEmail");
        $stmt->bindParam(':patientEmail', $patientEmail);

        //Execute statement
        $stmt->execute();

        //Fetch the result
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if($result){
            //Return the result
            return $result['ID'];
        } else {
            return false;
        }
    }

    //Signing up a new doctor
    function doctorSignup($doctorFirstName, $doctorLastName, $doctorEmail, $doctorPassword, $doctorPhoneNumber, $doctorAddress, $doctorGender, $doctorDOB){
        //Prepare statement
        $stmt = $this->connection->prepare("INSERT INTO doctors (doctorFirstName, doctorLastName, doctorEmail, doctorPassword, doctorPhoneNumber, doctorAddress, doctorGender, doctorDOB) VALUES (:doctorFirstName, :doctorLastName, :doctorEmail, :doctorPassword, :doctorPhoneNumber, :doctorAddress, :doctorGender, :doctorDOB)");
        $stmt->bindParam(':doctorFirstName', $doctorFirstName);
        $stmt->bindParam(':doctorLastName', $doctorLastName);
        $stmt->bindParam(':doctorEmail', $doctorEmail);
        $stmt->bindParam(':doctorPassword', $doctorPassword);
        $stmt->bindParam(':doctorPhoneNumber', $doctorPhoneNumber);
        $stmt->bindParam(':doctorAddress', $doctorAddress);
        $stmt->bindParam(':doctorGender', $doctorGender);
        $stmt->bindParam(':doctorDOB', $doctorDOB);

        //Execute statement
        $stmt->execute();
    }

    // This get the doctor id generated by the triggers
    function getDoctorId($doctorEmail){
        //Prepare statement
        $stmt = $this->connection->prepare("SELECT ID FROM doctors WHERE doctorEmail = :doctorEmail");
        $stmt->bindParam(':doctorEmail', $doctorEmail);

        //Execute statement
        $stmt->execute();

        //Fetch the result
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if($result){
            //Return the result
            return $result['ID'];
        } else {
            return false;
        }
    }

    //Signing up a new pharmacy
    function pharmacySignup($pharmacyName, $pharmacyEmail, $pharmacyPassword, $pharmacyPhoneNumber, $pharmacyAddress){
        //Prepare statement
        $stmt = $this->connection->prepare("INSERT INTO pharmacies (pharmacyName, pharmacyEmail, pharmacyPassword, pharmacyPhoneNumber, pharmacyAddress) VALUES (:pharmacyName, :pharmacyEmail, :pharmacyPassword, :pharmacyPhoneNumber, :pharmacyAddress)");
        $stmt->bindParam(':pharmacyName', $pharmacyName);
        $stmt->bindParam(':pharmacyEmail', $pharmacyEmail);
        $stmt->bindParam(':pharmacyPassword', $pharmacyPassword);
        $stmt->bindParam(':pharmacyPhoneNumber', $pharmacyPhoneNumber);
        $stmt->bindParam(':pharmacyAddress', $pharmacyAddress);

        //Execute statement
        $stmt->execute();
    }

    // Confirming whether a pharmacy exists and confirming their password
    function pharmacyExists($ID, $pharmacyPassword){
        //Prepare statement
        $stmt = $this->connection->prepare("SELECT pharmacyPassword FROM pharmacies WHERE ID = :ID");
        $stmt->bindParam(':ID', $ID);

        //Execute statement
        $stmt->execute();

        //Fetch the result
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        //Check if the password matches
        if($result['pharmacyPassword'] === $pharmacyPassword){
            return true;
        } else {
            return false;
        }
    }

    //Signing up a new supervisor
    function supervisorSignup($supervisorFirstName, $supervisorLastName, $supervisorEmail, $supervisorPassword, $supervisorPhoneNumber, $supervisorAddress, $supervisorGender, $supervisorDOB){
        //Prepare statement
        $stmt = $this->connection->prepare("INSERT INTO supervisors (supervisorFirstName, supervisorLastName, supervisorEmail, supervisorPassword, supervisorPhoneNumber, supervisorAddress, supervisorGender, supervisorDOB) VALUES (:supervisorFirstName, :supervisorLastName, :supervisorEmail, :supervisorPassword, :supervisorPhoneNumber, :supervisorAddress, :supervisorGender, :supervisorDOB)");
        $stmt->bindParam(':supervisorFirstName', $supervisorFirstName);
        $stmt->bindParam(':supervisorLastName', $supervisorLastName);
        $stmt->bindParam(':supervisorEmail', $supervisorEmail);
        $stmt->bindParam(':supervisorPassword', $supervisorPassword);
        $stmt->bindParam(':supervisorPhoneNumber', $supervisorPhoneNumber);
        $stmt->bindParam(':supervisorAddress', $supervisorAddress);
        $stmt->bindParam(':supervisorGender', $supervisorGender);
        $stmt->bindParam(':supervisorDOB', $supervisorDOB);

        //Execute statement
        $stmt->execute();
    }

    // This get the supervisor id generated by the triggers
    function getSupervisorId($supervisorEmail){
        //Prepare statement
        $stmt = $this->connection->prepare("SELECT ID FROM supervisors WHERE supervisorEmail = :supervisorEmail");
        $stmt->bindParam(':supervisorEmail', $supervisorEmail);

        //Execute statement
        $stmt->execute();

        //Fetch the result
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if($result){
            //Return the result
            return $result['ID'];
        } else {
            return false;
        }
    }

    //Signing up a new Pharmaceutical company
    function companySignup($companyName, $companyEmail, $companyPassword, $companyPhoneNumber, $companyAddress){
        //Prepare statement
        $stmt = $this->connection->prepare("INSERT INTO companies (companyName, companyEmail, companyPassword, companyPhoneNumber, companyAddress) VALUES (:companyName, :companyEmail, :companyPassword, :companyPhoneNumber, :companyAddress)");
        $stmt->bindParam(':companyName', $companyName);
        $stmt->bindParam(':companyEmail', $companyEmail);
        $stmt->bindParam(':companyPassword', $companyPassword);
        $stmt->bindParam(':companyPhoneNumber', $companyPhoneNumber);
        $stmt->bindParam(':companyAddress', $companyAddress);

        //Execute statement
        $stmt->execute();
    }

    // This get the company id generated by the triggers
    function getCompanyId($companyEmail){
        //Prepare statement
        $stmt = $this->connection->prepare("SELECT ID FROM companies WHERE companyEmail = :companyEmail");
        $stmt->bindParam(':companyEmail', $companyEmail);

        //Execute statement
        $stmt->execute();

        //Fetch the result
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if($result){
            //Return the result
            return $result['ID'];
        } else {
            return false;
        }
    }

    // check if username and password of company match
    function companyExists($ID, $companyPassword){
        //Prepare statement
        $stmt = $this->connection->prepare("SELECT * FROM companies WHERE ID = :ID AND companyPassword = :companyPassword");
        $stmt->bindParam(':ID', $ID);
        $stmt->bindParam(':companyPassword', $companyPassword);

        //Execute statement
        $stmt->execute();

        //Fetch the result
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if($result){
            //Return the result
            return true;
        } else {
            return false;
        }
    }

    // get the pharmacyID from pharmacies
    function getPharmacyID($pharmacyEmail){
        $stmt = $this->connection->prepare("SELECT ID FROM pharmacies WHERE pharmacyEmail = :pharmacyEmail");
        $stmt->bindParam(':pharmacyEmail', $pharmacyEmail);

        // Execute statement
        $stmt->execute();

        // Fetch the result
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if($result){
            return $result['ID'];
        } else {
            return false;
        }
    }


    //Adding meds to the database (Pharmaceuticals)
    function addMeds($drugName, $drugDescription, $drugPrice, $drugQuantity, $drugExpirationDate, $drugManufacturingDate, $drugCompany){
        //Prepare statement
        $stmt = $this->connection->prepare("INSERT INTO drugs (drugName, drugDescription, drugPrice, drugQuantity, drugExpirationDate, drugManufacturingDate, drugCompany) VALUES (:drugName, :drugDescription, :drugPrice, :drugQuantity, :drugExpirationDate, :drugManufacturingDate, :drugCompany)");
        $stmt->bindParam(':drugName', $drugName);
        $stmt->bindParam(':drugDescription', $drugDescription);
        $stmt->bindParam(':drugPrice', $drugPrice);
        $stmt->bindParam(':drugQuantity', $drugQuantity);
        $stmt->bindParam(':drugExpirationDate', $drugExpirationDate);
        $stmt->bindParam(':drugManufacturingDate', $drugManufacturingDate);
        $stmt->bindParam(':drugCompany', $drugCompany);

        //Execute statement
        $stmt->execute();
    }

    //Approve meds added to the database
    function approveMeds($ID){
        //Prepare statement
        $stmt = $this->connection->prepare("UPDATE drugs SET approved = 1 WHERE ID = :ID");
        $stmt->bindParam(':ID', $ID);

        //Execute statement
        $stmt->execute();
    }

    //Viewing history of prescriptions by patient
    function viewPrescriptionHistoryPatient($patientID){
        //Prepare statement
        $stmt = $this->connection->prepare("SELECT * FROM prescriptions WHERE patientID = :patientID");
        $stmt->bindParam(':patientID', $patientID);

        //Execute statement
        $stmt->execute();

        //Fetch data
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetchAll();
        return $result;
    }

    //Viewing history of prescriptions by doctor
    function viewPrescriptionHistoryDoctor($doctorID){
        //Prepare statement
        $stmt = $this->connection->prepare("SELECT * FROM prescriptions WHERE doctorID = :doctorID");
        $stmt->bindParam(':doctorID', $doctorID);

        //Execute statement
        $stmt->execute();

        //Fetch data
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetchAll();
        return $result;
    }

    // Add a new prescription
    function addPrescription($patientID, $doctorID, $prescriptionDate, $prescriptionDuration, $prescriptionNotes){
        //Prepare statement
        $stmt = $this->connection->prepare("INSERT INTO prescriptions (patientID, doctorID, prescriptionDate, prescriptionDuration, prescriptionNotes) VALUES (:patientID, :doctorID, :prescriptionDate, :prescriptionDuration, :prescriptionNotes)");
        $stmt->bindParam(':patientID', $patientID);
        $stmt->bindParam(':doctorID', $doctorID);
        $stmt->bindParam(':prescriptionDate', $prescriptionDate);
        $stmt->bindParam(':prescriptionDuration', $prescriptionDuration);
        $stmt->bindParam(':prescriptionNotes', $prescriptionNotes);

        //Execute statement
        $stmt->execute();

        // If it works return true
        if($stmt){
            return true;
        } else {
            return false;
        }
    }

    // Removing drug from database using the prescriptionID
    function dispense($ID){
        $stmt = $this->connection->prepare("DELETE FROM drugs where ID = :ID");
        $stmt->bindParam(':ID', $ID);

        // Execute statement
        $stmt->execute();

        // If it works return true
        if($stmt){
            return true;
        } else {
            return false;
        }
    }

    // Get data from prescriptions table where patientID = patientID
    function getPrescriptionHistoryForPatient($patientID){
        //Prepare statement
        $stmt = $this->connection->prepare("SELECT * FROM prescriptions WHERE patientID = :patientID");
        $stmt->bindParam(':patientID', $patientID);

        //Execute statement
        $stmt->execute();

        //Fetch data
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetchAll();
        return $result;
    }

    // fetch users from the database based on the entity and pagination
    function getUsersByEntity($entity, $start_index, $results_per_page){
        // Prepare statement
        $stmt = $this->connection->prepare("SELECT * FROM $entity LIMIT :start_index, :results_per_page");
        $stmt->bindParam(':start_index', $start_index, PDO::PARAM_INT);
        $stmt->bindParam(':results_per_page', $results_per_page, PDO::PARAM_INT);
    
        // Execute statement
        $stmt->execute();
    
        // Fetch data
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function getUsersByEntityAndIDForPatient($entity, $ID, $start_index, $results_per_page){
        // Prepare statement
        $stmt = $this->connection->prepare("SELECT * FROM prescriptions WHERE patientID = :ID LIMIT :start_index, :results_per_page");
        $stmt->bindParam(':ID', $ID);
        $stmt->bindParam(':start_index', $start_index, PDO::PARAM_INT);
        $stmt->bindParam(':results_per_page', $results_per_page, PDO::PARAM_INT);
    
        // Execute statement
        $stmt->execute();
    
        // Fetch data
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function getUsersByEntityAndIDForDoctor($entity, $ID, $start_index, $results_per_page){
        // Prepare statement
        $stmt = $this->connection->prepare("SELECT * FROM prescriptions WHERE doctorID = :ID LIMIT :start_index, :results_per_page");
        $stmt->bindParam(':ID', $ID);
        $stmt->bindParam(':start_index', $start_index, PDO::PARAM_INT);
        $stmt->bindParam(':results_per_page', $results_per_page, PDO::PARAM_INT);
    
        // Execute statement
        $stmt->execute();
    
        // Fetch data
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    
    // Get total number of users for the entity
    function getTotalUsersByEntity($entity){
        // Prepare statement
        $stmt = $this->connection->prepare("SELECT COUNT(*) FROM $entity");
    
        // Execute statement
        $stmt->execute();
    
        // Fetch data
        $result = $stmt->fetchColumn();
        return $result;
    }

    // delete entity from the database
    function deleteEntity($entity, $ID){
        // Prepare statement
        $stmt = $this->connection->prepare("DELETE FROM $entity WHERE ID = :ID");
        $stmt->bindParam(':ID', $ID);
    
        // Execute statement
        $stmt->execute();
    
        // If it works return true
        if($stmt){
            return true;
        } else {
            return false;
        }
    }

    // get drugs that are approved 
    function getApprovedDrugs($start_index, $results_per_page, $entity){
        // Prepare statement
        $stmt = $this->connection->prepare("SELECT * FROM drugs WHERE approved = 1 LIMIT :start_index, :results_per_page");
        $stmt->bindParam(':start_index', $start_index, PDO::PARAM_INT);
        $stmt->bindParam(':results_per_page', $results_per_page, PDO::PARAM_INT);
    
        // Execute statement
        $stmt->execute();
    
        // Fetch data
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    // get drugs that are not approved
    function getNotApprovedDrugs($start_index, $results_per_page, $entity){
        // Prepare statement
        $stmt = $this->connection->prepare("SELECT * FROM drugs WHERE approved = 0 LIMIT :start_index, :results_per_page");
        $stmt->bindParam(':start_index', $start_index, PDO::PARAM_INT);
        $stmt->bindParam(':results_per_page', $results_per_page, PDO::PARAM_INT);
    
        // Execute statement
        $stmt->execute();
    
        // Fetch data
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    // get drugs
    function getDrugs(){
        // Prepare statement
        $stmt = $this->connection->prepare("SELECT * FROM drugs");
    
        // Execute statement
        $stmt->execute();
    
        // Fetch data
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}
?>