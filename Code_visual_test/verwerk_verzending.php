<?php
if(isset($_POST['mailadres'])) {

  $email_to = "24609@ma-web.nl";
      $email_subject = "Your email subject line";
   
      // validation expected data exists
      if(!isset($_POST['naam']) ||
          !isset($_POST['onderwerp']) ||
          !isset($_POST['mailadres']) ||
          !isset($_POST['inhoud']) ||
          died('We are sorry, but there appears to be a problem with the form you submitted.');      
      }
   
       
   
      $naam = $_POST['naam']; // required
      $onderwerp= $_POST['onderwerp']; // required
      $mailadres = $_POST['mailadres']; // required
    $inhoud= $_POST['inhoud']; // not required
   
   
      $error_message = "";
      $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
   
    if(!preg_match($email_exp,$email_from)) {
      $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
    }
   
      $string_exp = "/^[A-Za-z .'-]+$/";
   
    if(!preg_match($string_exp,$naam)) {
      $error_message .= 'The First Name you entered does not appear to be valid.<br />';
    }
   
    if(!preg_match($string_exp,$onderwerp)) {
      $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
    }
   
   
    if(strlen($error_message) > 0) {
      died($error_message);
    }
   
      $email_message = "Form details below.\n\n";
   
       
      function clean_string($string) {
        $bad = array("content-type","bcc:","to:","cc:","href");
        return str_replace($bad,"",$string);
      }
   
       
   
      $email_message .= "naam: ".clean_string($naam)."\n";
      $email_message .= "onderwerp: ".clean_string($onderwerp)."\n";
      $email_message .= "mailadres: ".clean_string($mailadres)."\n";
      $email_message .= "inhoud: ".clean_string($inhoud)."\n";

   
  // create email headers
  $headers = 'From: '.$email_from."\r\n".
  'Reply-To: '.$email_from."\r\n" .
  'X-Mailer: PHP/' . phpversion();
  @mail($email_to, $email_subject, $email_message, $headers); 
  ?>
   
  <!-- include your own success html here -->
   
  Thank you for contacting us. We will be in touch with you very soon.
   
  <?php
   
  }
  ?>


}
