<?php

class database {
    public $conn = null;
    public $host = "me-dawa-server.mysql.database.azure.com";

    public function __construct() {
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=laravel", "iafgzihhqu@me-dawa-server", "mysql123lance");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }


    //Signing up a new patient
    function patientSignup($patientFirstName, $patientSecondName, $patientEmail, $patientPassword, $patientPhoneNumber, $patientAddress, $patientGender, $patientDOB){
        //Prepare statement
        $stmt = $conn->prepare("INSERT INTO patients (patientFirstName, patientSecondName, patientEmail, patientPassword, patientPhoneNumber, patientAddress, patientGender, patientDOB) VALUES (:patientFirstName, :patientSecondName, :patientEmail, :patientPassword, :patientPhoneNumber, :patientAddress, :patientGender, :patientDOB)");
        $stmt->bindParam(':patientFirstName', $patientFirstName);
        $stmt->bindParam(':patientSecondName', $patientSecondName);
        $stmt->bindParam(':patientEmail', $patientEmail);
        $stmt->bindParam(':patientPassword', $patientPassword);
        $stmt->bindParam(':patientPhoneNumber', $patientPhoneNumber);
        $stmt->bindParam(':patientAddress', $patientAddress);
        $stmt->bindParam(':patientGender', $patientGender);
        $stmt->bindParam(':patientDOB', $patientDOB);

        //Execute statement
        $stmt->execute();
    }

    //Signing up a new doctor
    function doctorSignup($doctorFirstName, $doctorSecondName, $doctorEmail, $doctorPassword, $doctorPhoneNumber, $doctorAddress, $doctorGender, $doctorDOB){
        //Prepare statement
        $stmt = $conn->prepare("INSERT INTO doctors (doctorFirstName, doctorSecondName, doctorEmail, doctorPassword, doctorPhoneNumber, doctorAddress, doctorGender, doctorDOB) VALUES (:doctorFirstName, :doctorSecondName, :doctorEmail, :doctorPassword, :doctorPhoneNumber, :doctorAddress, :doctorGender, :doctorDOB)");
        $stmt->bindParam(':doctorFirstName', $doctorFirstName);
        $stmt->bindParam(':doctorSecondName', $doctorSecondName);
        $stmt->bindParam(':doctorEmail', $doctorEmail);
        $stmt->bindParam(':doctorPassword', $doctorPassword);
        $stmt->bindParam(':doctorPhoneNumber', $doctorPhoneNumber);
        $stmt->bindParam(':doctorAddress', $doctorAddress);
        $stmt->bindParam(':doctorGender', $doctorGender);
        $stmt->bindParam(':doctorDOB', $doctorDOB);

        //Execute statement
        $stmt->execute();
    }

    //Signing up a new pharmacy
    function pharmacySignup($pharmacyName, $pharmacyEmail, $pharmacyPassword, $pharmacyPhoneNumber, $pharmacyAddress){
        //Prepare statement
        $stmt = $conn->prepare("INSERT INTO pharmacies (pharmacyName, pharmacyEmail, pharmacyPassword, pharmacyPhoneNumber, pharmacyAddress) VALUES (:pharmacyName, :pharmacyEmail, :pharmacyPassword, :pharmacyPhoneNumber, :pharmacyAddress)");
        $stmt->bindParam(':pharmacyName', $pharmacyName);
        $stmt->bindParam(':pharmacyEmail', $pharmacyEmail);
        $stmt->bindParam(':pharmacyPassword', $pharmacyPassword);
        $stmt->bindParam(':pharmacyPhoneNumber', $pharmacyPhoneNumber);
        $stmt->bindParam(':pharmacyAddress', $pharmacyAddress);

        //Execute statement
        $stmt->execute();
    }

    //Signing up a new supervisor
    function supervisorSignup($supervisorFirstName, $supervisorSecondName, $supervisorEmail, $supervisorPassword, $supervisorPhoneNumber, $supervisorAddress, $supervisorGender, $supervisorDOB){
        //Prepare statement
        $stmt = $conn->prepare("INSERT INTO supervisors (supervisorFirstName, supervisorSecondName, supervisorEmail, supervisorPassword, supervisorPhoneNumber, supervisorAddress, supervisorGender, supervisorDOB) VALUES (:supervisorFirstName, :supervisorSecondName, :supervisorEmail, :supervisorPassword, :supervisorPhoneNumber, :supervisorAddress, :supervisorGender, :supervisorDOB)");
        $stmt->bindParam(':supervisorFirstName', $supervisorFirstName);
        $stmt->bindParam(':supervisorSecondName', $supervisorSecondName);
        $stmt->bindParam(':supervisorEmail', $supervisorEmail);
        $stmt->bindParam(':supervisorPassword', $supervisorPassword);
        $stmt->bindParam(':supervisorPhoneNumber', $supervisorPhoneNumber);
        $stmt->bindParam(':supervisorAddress', $supervisorAddress);
        $stmt->bindParam(':supervisorGender', $supervisorGender);
        $stmt->bindParam(':supervisorDOB', $supervisorDOB);

        //Execute statement
        $stmt->execute();
    }

    //Signing up a new Pharmaceutical company
    function companySignup($companyName, $companyEmail, $companyPassword, $companyPhoneNumber, $companyAddress){
        //Prepare statement
        $stmt = $conn->prepare("INSERT INTO companies (companyName, companyEmail, companyPassword, companyPhoneNumber, companyAddress) VALUES (:companyName, :companyEmail, :companyPassword, :companyPhoneNumber, :companyAddress)");
        $stmt->bindParam(':companyName', $companyName);
        $stmt->bindParam(':companyEmail', $companyEmail);
        $stmt->bindParam(':companyPassword', $companyPassword);
        $stmt->bindParam(':companyPhoneNumber', $companyPhoneNumber);
        $stmt->bindParam(':companyAddress', $companyAddress);

        //Execute statement
        $stmt->execute();
    }


    //Adding meds to the database (Pharmaceuticals)
    function addMeds($drugName, $drugType, $drugPrice, $drugQuantity, $drugDescription){
        //Prepare statement
        $stmt = $conn->prepare("INSERT INTO drugs (drugName, drugType, drugPrice, drugQuantity, drugDescription) VALUES (:drugName, :drugType, :drugPrice, :drugQuantity, :drugDescription)");
        $stmt->bindParam(':drugName', $drugName);
        $stmt->bindParam(':drugType', $drugType);
        $stmt->bindParam(':drugPrice', $drugPrice);
        $stmt->bindParam(':drugQuantity', $drugQuantity);
        $stmt->bindParam(':drugDescription', $drugDescription);

        //Execute statement
        $stmt->execute();
    }

    //Checking if a user exists. Either a patient, doctor, supervisor
    //Should return true or false depending on whether the user exists or not
    function userExists($userName, $password, $table){
        //Prepare statement
        $stmt = $conn->prepare("SELECT * FROM :table WHERE :tableEmail = :userName AND :tablePassword = :password");
        $stmt->bindParam(':table', $table);
        $stmt->bindParam(':userName', $userName);
        $stmt->bindParam(':password', $password);

        //Execute statement
        $stmt->execute();

        //Fetch data
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        //Check if user exists
        if($result){
            return true;
        }else{
            return false;
        }
    }

    //Giving a patient a prescription
    function givePrescription($patientID, $doctorID, $drugID, $prescriptionDescription){
        //Prepare statement
        $stmt = $conn->prepare("INSERT INTO prescriptions (patientID, doctorID, drugID, prescriptionDescription) VALUES (:patientID, :doctorID, :drugID, :prescriptionDescription)");
        $stmt->bindParam(':patientID', $patientID);
        $stmt->bindParam(':doctorID', $doctorID);
        $stmt->bindParam(':drugID', $drugID);
        $stmt->bindParam(':prescriptionDescription', $prescriptionDescription);

        //Execute statement
        $stmt->execute();
    }

    //Viewing history of prescriptions by patient
    function viewPrescriptionHistoryPatient($patientID){
        //Prepare statement
        $stmt = $conn->prepare("SELECT * FROM prescriptions WHERE patientID = :patientID");
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
        $stmt = $conn->prepare("SELECT * FROM prescriptions WHERE doctorID = :doctorID");
        $stmt->bindParam(':doctorID', $doctorID);

        //Execute statement
        $stmt->execute();

        //Fetch data
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetchAll();
        return $result;
    }

    //Viewing history of prescriptions by pharmacy
    function viewPrescriptionHistoryPharmacy($pharmacyID){

    }



}
?>