<?php 
include 'db_connection.php';
if (isset($_POST['Submit'])) {
    $cnic = $_POST['cnic'];
    $sscii_Seat_No = $_POST['sscii_Seat_No'];
    $sscii_Obtained_Marks = $_POST['sscii_Obtained_Marks'];
    //$_POST['sscii_Obtained_Marks'];
    $sscii_Total_Marks = 850;
    $sscii_Passing_Year = $_POST['sscii_Passing_Year'];
    //$sscii_Grade =$_POST['sscii_Grade'];
     if ($sscii_Obtained_Marks<295) {
        $sscii_Grade = 'F';
    } elseif($sscii_Obtained_Marks>=295 && $sscii_Obtained_Marks<=394) {
        $sscii_Grade = 'D';
    }elseif($sscii_Obtained_Marks>=395 && $sscii_Obtained_Marks<=494) {
        $sscii_Grade = 'C';
    }elseif($sscii_Obtained_Marks>=495 && $sscii_Obtained_Marks<=594) {
        $sscii_Grade = 'B';
    }elseif($sscii_Obtained_Marks>=595 && $sscii_Obtained_Marks<=694) {
        $sscii_Grade = 'A';
    }elseif($sscii_Obtained_Marks>=695 && $sscii_Obtained_Marks<=794) {
        $sscii_Grade = 'A+';
    }
    $sscii_Board = $_POST['sscii_Board'];
    $sscii_sheet = $_POST['matric_sheet'];
    $hsci_Seat_No = $_POST['hsci_Seat_No'];
    $hsci_Obtained_Marks = $_POST['hsci_Obtained_Marks'];
    $hsci_Total_Marks = 550;
    $hsci_Passing_Year = $_POST['hsci_Passing_Year'];
    //$hsci_Grade = $_POST['hsci_Grade'];
     if ($hsci_Obtained_Marks<95) {
        $hsci_Grade = 'F';
    } elseif($hsci_Obtained_Marks>=95 && $hsci_Obtained_Marks<=194) {
        $hsci_Grade = 'D';
    }elseif($hsci_Obtained_Marks>=195 && $hsci_Obtained_Marks<=294) {
        $hsci_Grade = 'C';
    }elseif($hsci_Obtained_Marks>=295 && $hsci_Obtained_Marks<=394) {
        $hsci_Grade = 'B';
    }elseif($hsci_Obtained_Marks>=395 && $hsci_Obtained_Marks<=494) {
        $hsci_Grade = 'A';
    }elseif($hsci_Obtained_Marks>=495 && $hsci_Obtained_Marks<=550) {
        $hsci_Grade = 'A+';
    }
    $hsci_Board = $_POST['hsci_Board'];
    $hsci_sheet = $_POST['eleven_sheet'];
    $hscii_Seat_No = $_POST['hscii_Seat_No'];
    $hscii_Obtained_Marks = $_POST['hscii_Obtained_Marks'];
    $hscii_Total_Marks = 1100;
    $hscii_Passing_Year = $_POST['hscii_Passing_Year'];
   // $hscii_Grade = $_POST['hscii_Grade'];
     if ($hscii_Obtained_Marks<470) {
        $hscii_Grade = 'F';
    } elseif($hscii_Obtained_Marks>=470 && $hscii_Obtained_Marks<=569) {
        $hscii_Grade = 'D';
    }elseif($hscii_Obtained_Marks>=570 && $hscii_Obtained_Marks<=669) {
        $hscii_Grade = 'C';
    }elseif($hscii_Obtained_Marks>=670 && $hscii_Obtained_Marks<=769) {
        $hscii_Grade = 'B';
    }elseif($hscii_Obtained_Marks>=770 && $hscii_Obtained_Marks<=869) {
        $hscii_Grade = 'A';
    }elseif($hscii_Obtained_Marks>=870 && $hscii_Obtained_Marks<=1100) {
        $hscii_Grade = 'A+';
    }
    $hscii_Board = $_POST['hscii_Board'];
    $hscii_sheet = $_POST['enter_sheet'];
    $dae_Seat_No = $_POST['dae_Seat_No'];
    $dae_Obtained_Marks = $_POST['dae_Obtained_Marks'];
    $dae_Total_Marks = 1100;  // Corrected data type to integer
    $dae_Passing_Year = $_POST['dae_Passing_Year'];
   // $dae_Grade = $_POST['dae_Grade'];
     if ($dae_Obtained_Marks<95) {
        $dae_Grade = 'F';
    } elseif($dae_Obtained_Marks>=95 && $dae_Obtained_Marks<=194) {
        $dae_Grade = 'D';
    }elseif($dae_Obtained_Marks>=195 && $dae_Obtained_Marks<=294) {
        $dae_Grade = 'C';
    }elseif($dae_Obtained_Marks>=295 && $dae_Obtained_Marks<=394) {
        $dae_Grade = 'B';
    }elseif($dae_Obtained_Marks>=395 && $dae_Obtained_Marks<=494) {
        $dae_Grade = 'A';
    }elseif($dae_Obtained_Marks>=495 && $dae_Obtained_Marks<=550) {
        $dae_Grade = 'A+';
    }
    $dae_Board = $_POST['dae_Board']; 
    $dae_sheet = $_POST['dae_sheet'];  
    if (mysqli_connect_error()) {
        die('connection error('.mysqli_connect_errno().')'.mysqli_connect_error());
    } else {
        $SELECT = "SELECT sscii_Seat_No FROM education WHERE sscii_Seat_No = ? LIMIT 1";
        $INSERT = "INSERT INTO education (CNIC, sscii_Seat_No, sscii_Obtained_Marks, sscii_Total_Marks, sscii_Passing_Year, sscii_Grade, sscii_Board, sscii_sheet, hsci_Seat_No, hsci_Obtained_Marks, hsci_Total_Marks, hsci_Passing_Year, hsci_Grade, hsci_Board, hsci_sheet, hscii_Seat_No, hscii_Obtained_Marks, hscii_Total_Marks, hscii_Passing_Year, hscii_Grade, hscii_Board, hscii_sheet, dae_Seat_No, dae_Obtained_Marks, dae_Total_Marks, dae_Passing_Year, dae_Grade, dae_Board, dae_sheet) VALUES ((SELECT CNIC FROM student WHERE CNIC = $cnic), ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"; 
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $sscii_Seat_No);
        $stmt->execute();
        $stmt->bind_result($sscii_Seat_No);
        $stmt->store_result();
        $rnum = $stmt->num_rows;
        if ($rnum == 0) {
            $stmt->close();
            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("siiissssiiissssiiissssiiisss", $sscii_Seat_No, $sscii_Obtained_Marks, $sscii_Total_Marks, $sscii_Passing_Year, $sscii_Grade, $sscii_Board, $sscii_sheet, $hsci_Seat_No, $hsci_Obtained_Marks, $hsci_Total_Marks, $hsci_Passing_Year, $hsci_Grade, $hsci_Board, $hsci_sheet, $hscii_Seat_No, $hscii_Obtained_Marks, $hscii_Total_Marks, $hscii_Passing_Year, $hscii_Grade, $hscii_Board, $hscii_sheet, $dae_Seat_No, $dae_Obtained_Marks, $dae_Total_Marks, $dae_Passing_Year, $dae_Grade, $dae_Board, $dae_sheet);
            $stmt->execute();
            $stmt->close();
            header("location: ../student/forms-advanced-form.html");
        } else {
            header("location: ../student/editable-table.html?q7 =  Data Already Registered!!!");
        }
        
        $conn->close();
    }
}
 
?>