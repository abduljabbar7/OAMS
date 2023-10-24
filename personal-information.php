<?php 
include 'db_connection.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];                  
    $cnic = $_POST['cnic'];
    $mobile = $_POST['mobile'];
    $file_cnic = $_POST['file_cnic'];
    $surname = $_POST['surname'];
    $dob = $_POST['dob'];
    $religion = $_POST['religion'];
    $fname = $_POST['fname'];                
    $fcnic = $_POST['fcnic'];
    $fmobile = $_POST['fmobile']; 
    $file_fcnic = $_POST['file_fcnic'];              
    $district = $_POST['district'];
    $domicile = $_POST['domicile'];                
    $postal_address = $_POST['postal_address'];               
    $group = $_POST['group'];

    if (mysqli_connect_error()) {
        die('connection error('.mysqli_connect_errno().')'.mysqli_connect_error());
    } else {
        $SELECT = "SELECT CNIC FROM student WHERE CNIC = ? LIMIT 1";
        $INSERT = "INSERT INTO student (name, CNIC, mobile, file_cnic, surname, dob, religion, fname, fcnic, fmobile, file_fcnic, district, domicile, postal_address, `group`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $CNIC);
        $stmt->execute();
        $stmt->store_result();
        $rnum = $stmt->num_rows;
        $stmt->close();

        if ($rnum == 0) {
            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("sssssssssssssss", $name, $cnic, $mobile, $file_cnic, $surname, $dob, $religion, $fname, $fcnic, $fmobile, $file_fcnic, $district, $domicile, $postal_address, $group);
            $stmt->execute();
            $stmt->close();
            header("location: ../student/editable-table.html");
        } else {
            header("location:../form-wizard.html?q7=This CNIC is Already Registered!!!");
        }
        $conn->close();
    }
}