 <?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $mailFrom = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $mailTo = "planbindependentsk8@yahoo.com";
  $headers = "From: ".$mailFrom;
  $txt = "You have recieved an Email froom: " .$name. ".\n\n".$message;


  mail($mailTo, $subject, $txt, $headers) or die("Error!");
  header("Location: index.html?mailsend");

}

// $name = $_POST['name'];
// $email = $_POST['email'];
 //$phone = $_POST['phone'];
 //$call = $_POST['call'];
 //$website = $_POST['website'];
 //$priority = $_POST['priority'];
// $subject = $_POST['subject'];
 //$message = $_POST['message'];
 //$formcontent=" From: $name  \n Type: $subject \n Message: $message";
 //$recipient = "youremail@here.com";
 //$subject = "Contact Form";
 //$mailheader = "From: $email \r\n";
 //mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
 //echo "Thank You!";



  /** 
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */
  
  // Replace contact@example.com with your real receiving email address
  //$receiving_email_address = 'bobbyescobosa@gmail.com';

 // if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
 //   include( $php_email_form );
 // } else {
 //   die( 'Unable to load the "PHP Email Form" Library!');
 // }

 // $contact = new PHP_Email_Form;
 // $contact->ajax = true;
  
 // $contact->to = $receiving_email_address;
 // $contact->from_name = $_POST['name'];
 // $contact->from_email = $_POST['email'];
 // $contact->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */
 
 // $contact->add_message( $_POST['name'], 'From');
 // $contact->add_message( $_POST['email'], 'Email');
 // $contact->add_message( $_POST['message'], 'Message', 10);

 // echo $contact->send(); 
 ?>


