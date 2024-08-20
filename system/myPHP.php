<?php
$dsn = "mysql:host=localhost;dbname=db_group8";
$username = "root";
$password = "";

try {
  $pdo = new PDO($dsn, $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  die("Connection failed: " . $e->getMessage());
}

        $last_name = $_POST['last_name'];
        $first_name = $_POST['first_name'];
        $middle_name = $_POST['middle_name'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $house_address = $_POST['house_address'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $civil_status = $_POST['civil_status'];
        $religion = $_POST['religion'];
        $blood_type = $_POST['blood_type'];
        $school_last_attended = $_POST['school_last_attended'];
        $diploma = $_POST['diploma'];
        $docstamp = $_POST['docstamp'];


$sql = "INSERT INTO tbl_students (last_name,first_name,middle_name,age, gender, house_address, email, contact, civil_status, religion, blood_type, school_last_attended, diploma, docstamp)
VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

$stmt = $pdo->prepare($sql);

$stmt->bindParam(1, $last_name);
$stmt->bindParam(2, $first_name);
$stmt->bindParam(3, $middle_name);
$stmt->bindParam(4, $age);
$stmt->bindParam(5, $gender);
$stmt->bindParam(6, $house_address);
$stmt->bindParam(7, $email);
$stmt->bindParam(8, $contact);
$stmt->bindParam(9, $civil_status);
$stmt->bindParam(10, $religion);
$stmt->bindParam(11, $blood_type);
$stmt->bindParam(12, $school_last_attended);
$stmt->bindParam(13, $diploma);
$stmt->bindParam(14, $docstamp);

$stmt->execute();

$pdo = null;

header("Location: success.html");
exit();
?>
