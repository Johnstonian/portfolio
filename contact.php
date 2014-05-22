<?php

	if( isset( $_POST['formSubmitted'] ) && $_POST['formSubmitted'] == true )
	{

    // check for all valid fields, set errors if any field not valid
    if( !filter_var($_POST['fullname'], FILTER_SANITIZE_STRING) )
      $errors['fullname'] = 'Please enter your name';

    if( !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) )
      $errors['fullname'] = 'Please enter a valid email address';

    if( !filter_var($_POST['message'], FILTER_SANITIZE_STRING) )
      $errors['message'] = 'Please add a message.';

    $numErrors = count($errors);
    $emailSent = false;

    if($numErrors == 0) {
    // validation passed, proceed with sending email 

      $fullname = $_POST['fullname'];
      $message = $_POST['message'];
      $email = $_POST['email'];

      // make strings pretty again
      $fullname = stripslashes($fullname);
      $fullname = htmlspecialchars_decode($fullname);

      $message = stripslashes($message);
      $message = htmlspecialchars_decode($message);

      $email = stripslashes($email);
      $email = htmlspecialchars_decode($email);

      //send email
      require 'PHPMailer/PHPMailerAutoload.php';
      $mail = new PHPMailer;
      $mail->From = $email;
      $mail->FromName = $fullname;
      $mail->AddAddress('ryanjohnston+portfolio@gmail.com');
      $mail->Subject = "Comment from Portfolio Website";
      
      $bodyString = "The following message was sent from Johnstonian Era's Portfolio Website: \n\r" .
      "------------------------------------\n\r" .
      "Full Name: " . $fullname . "\n\r" .
      "Email: " . $email . "\n\r" . 
      "Message: \n\r" . $message . "\n\r" .
      "------------------------------------\n\r" .
      "End of transmission";

      $mail->Body = $bodyString;
      $emailSent = $mail->Send();

      if($emailSent){
        echo "Your message was received, thank you!";
      } else {
         echo 'Sorry about this, but there was a problem. Please try sending again.';
      }


    } else {
      echo "Sorry about this, but there was a problem. Please try sending again.";
    }

	} else {
    header( 'Location: http://www.johnstonianera.com/portfolio' ) ;
  } // end if post formSubmitted check

?>