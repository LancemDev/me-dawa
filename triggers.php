<?php
/*
$hostName = "aws.connect.psdb.cloud";
$username = "mdaz7j5wetlxigkp3m2p";
$password = "pscale_pw_Yx80n7uN14OkbEhJM2DxCj5f7YJhN7GQ9sFGeksu6KN";
$databaseName = "me-dawa";
$caCert = file_get_contents('database\cacert.pem');
try{
    // Make the connection using PDO
    global $connection;
    $connection = new PDO("mysql:host=$hostName;dbname=$databaseName", $username, $password, array(
        PDO::MYSQL_ATTR_SSL_CA => 'cacert.pem'
    ));
}catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}


function createTriggers(){

    // Creating triggers for patients table so that when a patient is added, a patientId is generated and when a patient is deleted, the patientId is deleted from the database. Also, the patientId generated should have the format "P001" and should be incremented by 1 for every new patient added.
    $stmt = $connection->prepare("CREATE TRIGGER patientIdGenerator BEFORE INSERT ON patients FOR EACH ROW
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
    $stmt = $connection->prepare("CREATE TRIGGER supervisorIdGenerator BEFORE INSERT ON supervisors FOR EACH ROW
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
*/
?>