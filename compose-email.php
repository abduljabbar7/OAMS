<?php
include 'db_connection.php';
if (isset($_POST['send'])) { 
      $my_email = "jabbarjalbani1633@gmail.com";
      $name    = $_POST['name'];
      $email    = $_POST['email'];
      $subject    = $_POST['subject'];
      $file    = $_POST['file'];
      $subject2 = "Confirmation : Message was send successfully | Jabbar";
      //clint submit to me
      $message = "Clint Name: " .$name. "\n"."Clint Email: ".$email. "\n". "Clint Message: "."\n".$_POST['message'];
      // Message for Clint
      $message2 = "Dear: ".$name."thankyou for contacting us we will respond you soon"."\n\n"."you submitted the following message".$_POST['message']."Regaurds"."\n\n"."Abdul Jabbar";
      //Email Headers
      $headr = "from: ".$email;//clint email which I recieve
      $headr2 = "To".$my_email;// my email clint recieve
     $result   = mail($my_email, $subject, $message, $headr);// this email send to my email address
     $result2  = mail($email, $subject2, $message2, $headr2);// this email send to clint email address
     if($result && $result2){
      echo "successfully submitted";
     }else{
      echo "failed";
     }
     //https://youtu.be/mG4nPsepI9o// see vedio for mistake
}
?>