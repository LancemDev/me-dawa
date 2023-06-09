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
    function addPrescription($patientID, $doctorID, $prescriptionDate, $prescriptionQuantity, $prescriptionDuration, $prescriptionNotes){
        //Prepare statement
        $stmt = $this->connection->prepare("INSERT INTO prescriptions (patientID, doctorID, prescriptionDate, prescriptionQuantity, prescriptionDuration, prescriptionNotes) VALUES (:patientID, :doctorID, :prescriptionDate, :prescriptionQuantity, :prescriptionDuration, :prescriptionNotes)");
        $stmt->bindParam(':patientID', $patientID);
        $stmt->bindParam(':doctorID', $doctorID);
        $stmt->bindParam(':prescriptionDate', $prescriptionDate);
        $stmt->bindParam(':prescriptionQuantity', $prescriptionQuantity);
        $stmt->bindParam(':prescriptionDuration', $prescriptionDuration);
        $stmt->bindParam(':prescriptionNotes', $prescriptionNotes);

        //Execute statement
        $stmt->execute();
    }
}
?>