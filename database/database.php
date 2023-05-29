<?php

class Database{

    private $hostName;
    private $username;
    private $password;
    private $databaseName;
    private $connection;
    private $caCert;

    public function __construct() {
        $this->hostName = "aws.connect.psdb.cloud";
        $this->username = "pc1xlpm417aip835wsmm";
        $this->password = "pscale_pw_U6j70axGNH9fshPNMxBSHEU9RgTjw6rfu5hRK8v0D6g";
        $this->databaseName = "me-dawa";
        $this->caCert = file_get_contents('../database/cacert.pem');
        try{
            // Make the connection using PDO
            $this->connection = new PDO("mysql:host=$this->hostName;dbname=$this->databaseName", $this->username, $this->password, array(
                PDO::MYSQL_ATTR_SSL_CA => '../database/cacert.pem'
            ));
        }catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }
    }
         


    //Signing up a new patient
    function patientSignup($patientFirstName, $patientSecondName, $patientEmail, $patientPassword, $patientPhoneNumber, $patientAddress, $patientGender, $patientDOB){
        //Prepare statement


        $stmt = $this->connection->prepare("INSERT INTO patients (patientFirstName, patientSecondName, patientEmail, patientPassword, patientPhoneNumber, patientAddress, patientGender, patientDOB) VALUES (:patientFirstName, :patientSecondName, :patientEmail, :patientPassword, :patientPhoneNumber, :patientAddress, :patientGender, :patientDOB)");
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

    // This get the patient id generated by the triggers
    function getPatientId($patientEmail){
        //Prepare statement
        $stmt = $this->connection->prepare("SELECT patientId FROM patients WHERE patientEmail = :patientEmail");
        $stmt->bindParam(':patientEmail', $patientEmail);

        //Execute statement
        $stmt->execute();

        //Fetch the result
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        //Return the result
        return $result;
    }

    //Signing up a new doctor
    function doctorSignup($doctorFirstName, $doctorSecondName, $doctorEmail, $doctorPassword, $doctorPhoneNumber, $doctorAddress, $doctorGender, $doctorDOB){
        //Prepare statement
        $stmt = $this->connection->prepare("INSERT INTO doctors (doctorFirstName, doctorLastName, doctorEmail, doctorPassword, doctorPhoneNumber, doctorAddress, doctorGender, doctorDOB) VALUES (:doctorFirstName, :doctorSecondName, :doctorEmail, :doctorPassword, :doctorPhoneNumber, :doctorAddress, :doctorGender, :doctorDOB)");
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

    // This get the doctor id generated by the triggers
    function getDoctorId($doctorEmail){
        //Prepare statement
        $stmt = $this->connection->prepare("SELECT doctorId FROM doctors WHERE doctorEmail = :doctorEmail");
        $stmt->bindParam(':doctorEmail', $doctorEmail);

        //Execute statement
        $stmt->execute();

        //Fetch the result
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        //Return the result
        return $result;
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

    //Signing up a new supervisor
    function supervisorSignup($supervisorFirstName, $supervisorSecondName, $supervisorEmail, $supervisorPassword, $supervisorPhoneNumber, $supervisorAddress, $supervisorGender, $supervisorDOB){
        //Prepare statement
        $stmt = $this->connection->prepare("INSERT INTO supervisors (supervisorFirstName, supervisorSecondName, supervisorEmail, supervisorPassword, supervisorPhoneNumber, supervisorAddress, supervisorGender, supervisorDOB) VALUES (:supervisorFirstName, :supervisorSecondName, :supervisorEmail, :supervisorPassword, :supervisorPhoneNumber, :supervisorAddress, :supervisorGender, :supervisorDOB)");
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

    // This get the supervisor id generated by the triggers
    function getSupervisorId($supervisorEmail){
        //Prepare statement
        $stmt = $this->connection->prepare("SELECT supervisorId FROM supervisors WHERE supervisorEmail = :supervisorEmail");
        $stmt->bindParam(':supervisorEmail', $supervisorEmail);

        //Execute statement
        $stmt->execute();

        //Fetch the result
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        //Return the result
        return $result;
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


    //Adding meds to the database (Pharmaceuticals)
    function addMeds($drugName, $drugType, $drugPrice, $drugQuantity, $drugDescription){
        //Prepare statement
        $stmt = $this->connection->prepare("INSERT INTO drugs (drugName, drugType, drugPrice, drugQuantity, drugDescription) VALUES (:drugName, :drugType, :drugPrice, :drugQuantity, :drugDescription)");
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
    /*function userExists($userName, $password, $table){
        //Prepare statement
        $stmt = $this->connection->prepare("SELECT * FROM $table WHERE :tableEmail = :userName AND :tablePassword = :password");
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
    }*/

    //Approve meds added to the database
    function approveMeds($drugID){
        //Prepare statement
        $stmt = $this->connection->prepare("UPDATE drugs SET drugApproval = 1 WHERE drugID = :drugID");
        $stmt->bindParam(':drugID', $drugID);

        //Execute statement
        $stmt->execute();
    }

    //Giving a patient a prescription
    function givePrescription($patientID, $doctorID, $drugID, $prescriptionDescription){
        //Prepare statement
        $stmt = $this->connection->prepare("INSERT INTO prescriptions (patientID, doctorID, drugID, prescriptionDescription) VALUES (:patientID, :doctorID, :drugID, :prescriptionDescription)");
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

     /* 
        TRIGGERS 
     */

    public function createTriggers(){

        // Creating triggers for patients table so that when a patient is added, a patientId is generated and when a patient is deleted, the patientId is deleted from the database. Also, the patientId generated should have the format "P001" and should be incremented by 1 for every new patient added.
        $stmt = $this->connection->prepare("CREATE TRIGGER patientIdGenerator BEFORE INSERT ON patients FOR EACH ROW
        BEGIN
            DECLARE patientId INT;
            SET patientId = (SELECT COUNT(*) FROM patients);
            SET patientId = patientId + 1;
            SET NEW.patientId = CONCAT('P', LPAD(patientId, 3, '0'));
        END");
    
        // Doing the same for doctors table
        $stmt = $this->connection->prepare("CREATE TRIGGER doctorIdGenerator BEFORE INSERT ON doctors FOR EACH ROW
        BEGIN
            DECLARE doctorId INT;
            SET doctorId = (SELECT COUNT(*) FROM doctors);
            SET doctorId = doctorId + 1;
            SET NEW.doctorId = CONCAT('D', LPAD(doctorId, 3, '0'));
        END");
        $stmt->execute();
    
        // Doing the same for supervisors table
        $stmt = $this->connection->prepare("CREATE TRIGGER supervisorIdGenerator BEFORE INSERT ON supervisors FOR EACH ROW
        BEGIN
            DECLARE supervisorId INT;
            SET supervisorId = (SELECT COUNT(*) FROM supervisors);
            SET supervisorId = supervisorId + 1;
            SET NEW.supervisorId = CONCAT('S', LPAD(supervisorId, 3, '0'));
        END");
        $stmt->execute();
    
        // Doing the same for pharmacies table
        $stmt = $this->connection->prepare("CREATE TRIGGER pharmacyIdGenerator BEFORE INSERT ON pharmacies FOR EACH ROW
        BEGIN
            DECLARE pharmacyId INT;
            SET pharmacyId = (SELECT COUNT(*) FROM pharmacies);
            SET pharmacyId = pharmacyId + 1;
            SET NEW.pharmacyId = CONCAT('PH', LPAD(pharmacyId, 3, '0'));
        END");
        $stmt->execute();
    
        // Doing the same for drugs table but the id has already been created so we modify it
        $stmt = $this->connection->prepare("CREATE TRIGGER drugIdGenerator BEFORE INSERT ON drugs FOR EACH ROW
        BEGIN
            DECLARE drugId INT;
            SET drugId = (SELECT COUNT(*) FROM drugs);
            SET drugId = drugId + 1;
            SET NEW.drugId = CONCAT('DR', LPAD(drugId, 3, '0'));
        END");
    
        // Doing the same for pharmacenuticalCompanies table
        $stmt = $this->connection->prepare("CREATE TRIGGER pharmacenuticalCompanyIdGenerator BEFORE INSERT ON pharmacenuticalCompanies FOR EACH ROW
        BEGIN
            DECLARE pharmacenuticalCompanyId INT;
            SET pharmacenuticalCompanyId = (SELECT COUNT(*) FROM pharmacenuticalCompanies);
            SET pharmacenuticalCompanyId = pharmacenuticalCompanyId + 1;
            SET NEW.pharmacenuticalCompanyId = CONCAT('PC', LPAD(pharmacenuticalCompanyId, 3, '0'));
        END");
        $stmt->execute();
    
        // Doing the same for prescriptions table
        $stmt = $this->connection->prepare("CREATE TRIGGER prescriptionIdGenerator BEFORE INSERT ON prescriptions FOR EACH ROW
        BEGIN
            DECLARE prescriptionId INT;
            SET prescriptionId = (SELECT COUNT(*) FROM prescriptions);
            SET prescriptionId = prescriptionId + 1;
            SET NEW.prescriptionId = CONCAT('PR', LPAD(prescriptionId, 3, '0'));
        END");
        $stmt->execute();
    }

}
?>