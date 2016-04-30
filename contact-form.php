<?php
header('Access-Control-Allow-Origin: *');
  $name = $_POST['name'];
  $count = $_POST['guests'];
  $event = $_POST['attending'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];

   $email_from = 'RSVP@babuwedskarthiga.com';
 
    $email_subject = "New RSVP submission";
    $email_body = "You have received a new message from the user $name.\n".
                            "email-id is: $visitor_email\n".
                            "Here is the message:\n $message\n".
                            "Attending the event $event".
                            "number of attending: $count \n";
                            

     $to = "karthick234@gmail.com,udhay.vin@gmail.com,babsvp@gmail.com>";
 
  $headers = "From: $visitor_email \r\n";
 
  $headers .= "Reply-To: $visitor_email \r\n";
 
  mail($to,$email_subject,$email_body,$headers);
  $data = array(
  'response'=>'success'
);
  echo json_encode($data);
?>
