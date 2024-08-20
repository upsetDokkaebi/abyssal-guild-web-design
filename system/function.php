<?php 
    include 'connection.php';
    
    $last_name = ucfirst($_POST['last_name']);
    $first_name = ucfirst($_POST['first_name']);
    $middle_name = ucfirst($_POST['middle_name']);
    $full_name = $last_name . ", " . $first_name . " " .$middle_name;
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $home_address = $_POST['home_address'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $civil_status = $_POST['civil_status'];
    $religion = $_POST['religion'];
    $blood_type = $_POST['blood_type'];
    $school_last_attended = $_POST['school_last_attended'];
    $diploma = $_POST['diploma']; //boolean 0-1
    $docstamp = $_POST['docstamp']; //boolean 0-1
        
    $query = "INSERT INTO tbl_students (Full_name, Age, Gender, Home_address, Email, Contact_No, Civil_Status, Religion, Blood_Type, School_Last_Attended, Diploma, Docstamp, Date_Reg) VALUES ('$full_name', '$age', '$gender', '$home_address', '$email', '$contact', '$civil_status', '$religion', '$blood_type', '$school_last_attended', '$diploma', '$docstamp', NOW())";

    $query_run = mysqli_query($con, $query);
    
    if ($query_run) {
        header("location: ../pages/displayRegistered.php");
    } else {
        echo "wrong";
    }
    
?>