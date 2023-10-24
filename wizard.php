<?php 
include 'db_connection.php';
if(isset($_POST['submit'])){

   $name        = $_POST['name'];                  
   $cnic         = $_POST['cnic'];
   $mobile      = $_POST['mobile'];
  $fname        = $_POST['fname'];                
  $fcnic        = $_POST['fcnic'];
  $fmobile      = $_POST['fmobile'];               
  $surname          = $_POST['surname'];
  $dob          = $_POST['dob'];
  $religion     = $_POST['religion'];
  $district     = $_POST['district'];
  $domicile     = $_POST['domicile'];                
  $postal_address        = $_POST['postal_address'];               
  $group        = $_POST['group'];
  $sscii_Seat_No                  = $_POST['sscii_Seat_No'];
  $sscii_Obtained_Marks            = $_POST['sscii_Obtained_Marks'];
  $sscii_Total_Marks               = $_POST['sscii_Total_Marks'];
  $sscii_Passing_Year             = $_POST['sscii_Passing_Year'];
  $sscii_Grade                    = $_POST['sscii_Grade'];
  $sscii_Board                   = $_POST['sscii_Board'];
  $hsci_Seat_No                  = $_POST['hsci_Seat_No'];
  $hsci_Obtained_Marks            = $_POST['hsci_Obtained_Marks'];
  $hsci_Total_Marks              = $_POST['hsci_Total_Marks'];
  $hsci_Passing_Year             = $_POST['hsci_Passing_Year'];
  $hsci_Grade                     = $_POST['hsci_Grade'];
  $hsci_Board                    = $_POST['hsci_Board'];
  $hscii_Seat_No                  = $_POST['hscii_Seat_No'];
  $hscii_Obtained_Marks            = $_POST['hscii_Obtained_Marks'];
  $hscii_Total_Marks             = $_POST['Hscii_Total_Marks'];
  $hscii_Passing_Year             = $_POST['hscii_Passing_Year'];
  $hscii_Grade                     = $_POST['hscii_Grade'];
  $hscii_Board                   = $_POST['hscii_Board'];
  $dae_Seat_No                  = $_POST['dae_Seat_No'];
  $dae_Obtained_Marks            = $_POST['dae_Obtained_Marks'];
  $dae_Total_Marks          = $_POST['dae_Total_Marks'];
  $dae_Passing_Year             = $_POST['dae_Passing_Year'];
  $dae_Grade           = $_POST['dae_Grade'];
  $dae_Board                   = $_POST['dae_Board'];
if(mysqli_connect_error()){
      die('connection error('.mysqli_connect_errno().')'.mysqli_connect_error());
      }else{
            $SELECT = "SELECT CNIC FROM apply WHERE CNIC = ? LIMIT 1";
            $INSERT = "INSERT Into student (name, CNIC, mobile, fname, fcnic, fmobile, surname, dob, religion, district, domicile, postal_address, group, sscii_Seat_No, sscii_Obtained_Marks, sscii_Total_Marks, sscii_Passing_Year, sscii_Grade, sscii_Board, hsci_Seat_No, hsci_Obtained_Marks, hsci_Total_Marks, hsci_Passing_Year, hsci_Grade, hsci_Board, hscii_Seat_No, hscii_Obtained_Marks, hscii_Total_Marks, hscii_Passing_Year, hscii_Grade, hscii_Board, dae_Seat_No, dea_Obtained_Marks, dae_Total_Matks, dae_Passing_Year, dae_Grade, dae_Board) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($SELECT);
             $stmt->bind_param("s", $CNIC);
            $stmt->execute();
             $stmt->bind_result($CNIC);
            $stmt->store_result();
            $rnum = $stmt->num_rows;
          if ($rnum == 0) {
            $stmt->close();
            $stmt = $conn->prepare($INSERT);
         $stmt->bind_param("ssisiisssssssiiisssiiisssiiisssiiisss", $name, $cnic, $mobile, $fname, $fcnic, $fmobile, $surname, $dob, $religion, $district, $domicile, $postal_address, $group, $sscii_Seat_No, $sscii_Obtained_Marks, $sscii_Total_Marks, $sscii_Passing_Year, $sscii_Grade, $sscii_Board, $hsci_Seat_No, $hsci_Obtained_Marks, $hsci_Total_Marks, $hsci_Passing_Year, $hsci_Grade, $hsci_Board, $hscii_Seat_No, $hscii_Obtained_Marks, $hscii_Total_Marks, $hscii_Passing_Year, $hscii_Grade, $hscii_Board, $dae_Seat_No, $dea_Obtained_Marks, $dae_Total_Matks, $dae_Passing_Year, $dae_Grade, $dae_Board);
        $stmt->execute();
         header("location: ../student/buttons.html");
   }else{
              header("location: ../student/wizard.html?q7 = You are alredy registered!!!");
              }
              $stmt->close();
              $db_conn->close();
             }
             }
?>