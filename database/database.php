<?php

class database {
    
    $hostName="aws.connect.psdb.cloud";
    $username="mdaz7j5wetlxigkp3m2p";
    $this->password="pscale_pw_Yx80n7uN14OkbEhJM2DxCj5f7YJhN7GQ9sFGeksu6KN";
    $this->databaseName="me-dawa";
    // Add the ca certificate to the client credentials
    $this->caCert = file_get_contents('cacert.pem');
    // Make the connnection using PDO
    $this->connection = new PDO("mysql:host=$this->hostName;dbname=$this->databaseName", $this->username, $this->password, array(
        PDO::MYSQL_ATTR_SSL_CA => 'cacert.pem'
    ));
         


    //Signing up a new patient
    function patientSignup($patientFirstName, $patientSecondName, $patientEmail, $patientPassword, $patientPhoneNumber, $patientAddress, $patientGender, $patientDOB){
        //Prepare statement
        $stmt = $connection->prepare("INSERT INTO patients (patientFirstName, patientSecondName, patientEmail, patientPassword, patientPhoneNumber, patientAddress, patientGender, patientDOB) VALUES (:patientFirstName, :patientSecondName, :patientEmail, :patientPassword, :patientPhoneNumber, :patientAddress, :patientGender, :patientDOB)");
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
        $stmt = $connection->prepare("INSERT INTO doctors (doctorFirstName, doctorSecondName, doctorEmail, doctorPassword, doctorPhoneNumber, doctorAddress, doctorGender, doctorDOB) VALUES (:doctorFirstName, :doctorSecondName, :doctorEmail, :doctorPassword, :doctorPhoneNumber, :doctorAddress, :doctorGender, :doctorDOB)");
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
        $stmt = $connection->prepare("INSERT INTO pharmacies (pharmacyName, pharmacyEmail, pharmacyPassword, pharmacyPhoneNumber, pharmacyAddress) VALUES (:pharmacyName, :pharmacyEmail, :pharmacyPassword, :pharmacyPhoneNumber, :pharmacyAddress)");
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
        $stmt = $connection->prepare("INSERT INTO supervisors (supervisorFirstName, supervisorSecondName, supervisorEmail, supervisorPassword, supervisorPhoneNumber, supervisorAddress, supervisorGender, supervisorDOB) VALUES (:supervisorFirstName, :supervisorSecondName, :supervisorEmail, :supervisorPassword, :supervisorPhoneNumber, :supervisorAddress, :supervisorGender, :supervisorDOB)");
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
        $stmt = $connection->prepare("INSERT INTO companies (companyName, companyEmail, companyPassword, companyPhoneNumber, companyAddress) VALUES (:companyName, :companyEmail, :companyPassword, :companyPhoneNumber, :companyAddress)");
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
        $stmt = $connection->prepare("INSERT INTO drugs (drugName, drugType, drugPrice, drugQuantity, drugDescription) VALUES (:drugName, :drugType, :drugPrice, :drugQuantity, :drugDescription)");
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
        $stmt = $connection->prepare("SELECT * FROM :table WHERE :tableEmail = :userName AND :tablePassword = :password");
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

    //Approve meds added to the database
    function approveMeds($drugID){
        //Prepare statement
        $stmt = $connection->prepare("UPDATE drugs SET drugApproval = 1 WHERE drugID = :drugID");
        $stmt->bindParam(':drugID', $drugID);

        //Execute statement
        $stmt->execute();
    }

    //Giving a patient a prescription
    function givePrescription($patientID, $doctorID, $drugID, $prescriptionDescription){
        //Prepare statement
        $stmt = $connection->prepare("INSERT INTO prescriptions (patientID, doctorID, drugID, prescriptionDescription) VALUES (:patientID, :doctorID, :drugID, :prescriptionDescription)");
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
        $stmt = $connection->prepare("SELECT * FROM prescriptions WHERE patientID = :patientID");
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
        $stmt = $connection->prepare("SELECT * FROM prescriptions WHERE doctorID = :doctorID");
        $stmt->bindParam(':doctorID', $doctorID);

        //Execute statement
        $stmt->execute();

        //Fetch data
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetchAll();
        return $result;
    }
}
?>